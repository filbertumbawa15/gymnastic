@extends('layouts.app')

@section('content')

<div id="kt_content_container"
    class="d-flex flex-column-fluid align-items-start container-xxl">
    <div class="content flex-row-fluid" id="kt_content">

        <div class="row g-5 g-lg-10">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" id="addButton" onclick="createUsers()">
                            Add
                        </button>

                        <table id="key-datatable" class="table">
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
    </div>
    <!-- End Page-content -->
</div>

<!-- Modal -->
<div class="modal fade" id="crudModal" tabindex="-1" aria-labelledby="usersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crudModalTitle">Users Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for users -->
                <form class="form w-100" id="crudForm" data-action="add">
                    @csrf
                    <input type="hidden" class="form-control bg-transparent" id="id" name="id" autocomplete="off">
                    <div class="fv-row mb-3">
                        <label for="name" class="form-label">Nama User</label>
                        <input type="text" class="form-control bg-transparent" id="name" name="name" autocomplete="off">
                    </div>
                    <div class="fv-row mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control bg-transparent" id="email" name="email" autocomplete="off">
                    </div>
                    <div class="fv-row mb-3" id="password_input">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control bg-transparent" id="password" name="password" autocomplete="off">
                    </div>
                    <div class="fv-row mb-3">
                        <label for="user_role" class="form-label">Role</label>
                        <select class="form-select form-select-solid" name="user_role">
                            <option selected disabled="disabled">Select the Role</option>
                            @foreach($roles as $role)
                            <option value="{{ $role->id }}">
                                {{ $role->rolename }}
                            </option>
                            @endforeach
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="btnSubmit" class="btn btn-primary">
                    <span class="indicator-label">Save</span>
                    <span class="indicator-progress">Saving...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('page_plugins_css')
<!-- DataTables -->
<link href="{{ asset('libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
@endpush


@push('page_plugins_js')

<!-- Responsive examples -->
<script src="{{ asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>

<!-- Buttons examples -->
<script src="{{ asset('libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
@endpush

@push('scripts')
<script>
    var formValidation = FormValidation.formValidation(
        document.querySelector("#crudForm"), {
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: "Nama User is required",
                        },
                    },
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: "Email is required",
                        },
                        regexp: {
                            regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                            message: "The value is not a valid email address",
                        },
                    },
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: "Password is required",
                        },
                        stringLength: {
                            min: 6,
                            message: "Password must be at least 6 characters",
                        },
                    },
                },
                user_role: {
                    validators: {
                        callback: {
                            message: "Please select a role",
                            callback: function(input) {
                                return input.value !== "" && input.value !== null;
                            },
                        },
                    },
                },
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    rowSelector: ".fv-row",
                    eleInvalidClass: "is-invalid",
                    eleValidClass: "is-valid",
                }),
            },
        }
    );
    let modalBody = $('#crudModal').find('.modal-body').html()

    document.addEventListener("DOMContentLoaded", function() {
        $(function() {
            $('#crudForm').on("submit", function(e) {
                e.preventDefault();
                let method
                let url
                let userId = $('#crudForm').find('[name=id]').val()
                let action = $('#crudForm').data('action')
                const $form = $(this);

                switch (action) {
                    case 'add':
                        method = 'POST'
                        url = `{{ route('users.store') }}`
                        break;
                    case 'edit':
                        method = 'PATCH'
                        url = `{{ route('users.update', ':id') }}`
                        url = url.replace(':id', userId);
                        break;
                    case 'delete':
                        method = 'DELETE'
                        url = `{{ route('users.destroy', ':id') }}`
                        url = url.replace(':id', userId);
                        break;
                    default:
                        method = 'POST'
                        url = `{{ route('users.store') }}`
                        break;
                }

                formValidation.validate().then(function(result) {
                    if (result == "Valid") {
                        document.querySelector("#btnSubmit").setAttribute(
                            "data-kt-indicator",
                            "on"
                        );
                        (document.querySelector("#btnSubmit").disabled = !0);
                        $.ajax({
                            url: url,
                            method: method,
                            dataType: 'JSON',
                            data: data,
                            success: response => {
                                setTimeout(function() {
                                    document.querySelector("#btnSubmit").removeAttribute(
                                        "data-kt-indicator"
                                    );
                                    (document.querySelector("#btnSubmit").disabled = !1);
                                    Swal.fire({
                                        text: "You're data successfully saved!",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    }).then(function(e) {
                                        if (e.isConfirmed) {
                                            $('#crudModal').find('.modal-body').html(modalBody)
                                            $('#crudModal').modal('hide')
                                            $('#crudForm').trigger('reset')
                                            table.ajax.reload()
                                        }
                                    });
                                }, 2e3)
                            },
                            error: function(xhr) {
                                // Check if the response status code is 422 (validation error)
                                if (xhr.status === 422) {
                                    // Show SweetAlert with validation error messages
                                    // Extract validation error messages
                                    let errors = xhr.responseJSON.errors;
                                    let errorMessages = '';

                                    // Loop through errors and concatenate messages
                                    $.each(errors, function(key, messages) {
                                        errorMessages += `${messages.join(', ')}\n`;
                                    });
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Validation Error',
                                        text: errorMessages,
                                    });
                                } else {
                                    // Show SweetAlert with internal server error messages
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Internal Server Error',
                                        text: "An error occurred. Please try again.",
                                    });
                                }
                            }
                        }).always(() => {
                            $('#crudForm').find('button:submit')
                                .removeAttr('disabled')
                                .text('Save')
                        })
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary",
                            },
                        });
                    }
                });
            });
            $('#crudModal').on('hidden.bs.modal', function() {
                formValidation.resetForm(true);
            });
        });
    });

    let table = $("#key-datatable").DataTable({
        processing: true,
        serverSide: true,
        paging: true,
        pageLength: 10,
        searchDelay: 500,
        filter: true,
        lengthMenu: [10, 25, 50, 75, 100],
        "searching": true,
        ajax: {
            url: `{{ route('users.get') }}`,
            data: data => {
                let columns = data.columns
                let searchableColumns = []
                let filters = {}

                columns.map(column => {
                    if (column.searchable) {
                        searchableColumns.push(column.data)
                    }
                })

                searchableColumns.forEach(searchableColumn => {
                    if (
                        searchableColumn == 'created_at' ||
                        searchableColumn == 'updated_at'
                    ) {
                        filters[searchableColumn] = Date.parse(data.search.value) / 1000
                    } else {
                        filters[searchableColumn] = data.search.value
                    }
                });

                let customData = {
                    page: data.start / data.length + 1,
                    limit: data.length,
                    filters: filters,
                    sorts: {
                        column: columns[data.order[data.order.length - 1].column].data,
                        direction: data.order[data.order.length - 1].dir
                    }
                }

                return customData
            },
            dataFilter: data => {
                let json = JSON.parse(data)
                json.recordsTotal = json.totalRecords
                json.recordsFiltered = json.totalRecords

                return JSON.stringify(json)
            }
        },
        columns: [{
                title: '#',
                data: 'id',
            },
            {
                title: 'NAME',
                data: 'name'
            },
            {
                title: 'EMAIL',
                data: 'email'
            },
            {
                title: 'ROLES',
                data: "rolename",
                render: function(data, type, row) {
                    return `<span class="badge badge-light-primary fw-semibold me-1">${data}</span>`
                },
            },
            {
                title: 'CREATED_AT',
                data: 'created_at'
            },
            {
                title: 'UPDATED_AT',
                data: 'updated_at'
            },
            {
                title: "DETAIL",
                defaultContent: '',
            },
        ],
        columnDefs: [{
                searchable: false,
                orderable: false,
                targets: [0],
            },
            {
                searchable: false,
                orderable: false,
                targets: 6,
                render: (data, type, row) => {
                    let editButton = document.createElement('button')
                    editButton.dataset.id = row.id
                    editButton.className = 'btn btn-sm btn-success mr-1 d-inline editButton '
                    editButton.innerText = 'Edit'

                    let deleteButton = document.createElement('button')
                    deleteButton.dataset.id = row.id
                    deleteButton.className = 'btn btn-sm btn-danger d-inline deleteButton '
                    deleteButton.innerText = 'Delete'

                    let changePasswordButton = document.createElement('button')
                    changePasswordButton.dataset.id = row.id
                    changePasswordButton.className = 'btn btn-sm btn-info d-inline changePasswordButton '
                    changePasswordButton.innerText = 'Change Password'

                    return editButton.outerHTML + deleteButton.outerHTML + changePasswordButton.outerHTML
                }
            },
        ],
        order: [1, 'desc'],
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }
    });

    /* Set row numbers */
    table.on('order.dt search.dt draw', function() {
        let info = table.page.info()

        table.column(0, {
            search: "applied",
            order: "applied"
        }).nodes().each(function(cell, i) {
            cell.innerHTML = i + 1 + (info.page * info.length);
        });
    });

    table.on('key-focus', function(e, datatable, cell) {
        focusedCell = cell;
        let rowData = table.row(cell.index().row).data();
        selectedRowId = rowData.id;
        console.log(selectedRowId);
    });

    // Reset selectedRowId when focus is removed from any cell
    table.on('key-blur', function(e, datatable, cell) {
        if (document.activeElement === $('input[type="search"]')[0]) {
            table.cell(focusedCell.index()).blur();
            selectedRowId = null;
            focusedCell = null;
            return;
        }
        setTimeout(() => {
            if (focusedCell) {
                table.cell(focusedCell.index()).focus();
            }
        }, 10);
    });

    function createUsers() {
        let form = $('#crudForm')

        $('.modal-loader').removeClass('d-none')

        form.trigger('reset')
        form.find('#btnSubmit').html(`
                              <i class="fa fa-save"></i>
                              Save
                            `)
        form.data('action', 'add')
        form.find(`.sometimes`).show()
        $('#crudModalTitle').text('Create User')

        $('#crudModal').modal('show')
    }

    $(document).on('click', '.editButton', function() {
        let id = $(this).data('id');
        let form = $('#crudForm')

        $('.modal-loader').removeClass('d-none')
        form.trigger('reset')
        form.find('#btnSubmit').html(`
                                    <i class="fa fa-save"></i>
                                    Save
                                    `)
        form.data('action', 'edit')
        form.find(`.sometimes`).show()
        form.find('#password_input').hide()
        $('#crudModalTitle').text('Edit Users')

        Promise.all([
            showUsers(form, id),
        ]).then(() => {
            $('#crudModal').modal('show')
        })
    });

    function showUsers(form, id) {
        var url = "{{ route('users.show', ':id') }}";
        url = url.replace(':id', id);

        $.ajax({
            url: url,
            method: 'GET',
            dataType: 'JSON',
            headers: {
                Accept: "application/json",
            },
            success: response => {
                $.each(response.data, (index, value) => {
                    let element = form.find(`[name="${index}"]`)
                    console.log(index);
                    if (element.is('select')) {
                        element.val(value).trigger('change')
                    } else {
                        element.val(value)
                    }
                })
            }
        });
    }
</script>
@endpush