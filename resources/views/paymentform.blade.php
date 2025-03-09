@extends('layouts.app')

@section('content')
<!--begin::Container-->
<div
    id="kt_content_container"
    class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Invoice 2 main-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-20">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-18 mb-10 mb-xl-0">
                        <!--begin::Invoice 2 content-->
                        <div class="mt-n1">
                            <!--begin::Top-->
                            <div class="d-flex flex-stack pb-10">
                                @if ($transaction->status == 'pending')
                                <!--begin::Action-->
                                <a href="javascript:window.location.reload();" class="btn btn-sm btn-warning">Check Payment Status</a>
                                <!--end::Action-->
                                @elseif ($transaction->status == 'paid')
                                <!--begin::Action-->
                                <a href="{{ route('landingpage') }}" class="btn btn-sm btn-success">Return To Dashboard</a>
                                <!--end::Action-->
                                @elseif ($transaction->status == 'failed')
                                <!--begin::Action-->
                                <a href="javascript:window.location.reload();" class="btn btn-sm btn-success">Check Payment Status</a>
                                <!--end::Action-->
                                @endif
                            </div>
                            <!--end::Top-->
                            <!--begin::Wrapper-->
                            <div class="m-0">
                                <!--begin::Label-->
                                <div class="fw-bold fs-3 text-gray-800 mb-8">
                                    Transaction ID #{{ $transaction->trx_id }}
                                </div>
                                <!--end::Label-->
                                <!--begin::Row-->
                                <div class="row g-5 mb-11">
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-semibold fs-7 text-gray-600 mb-1">
                                            Bill Order:
                                        </div>
                                        <!--end::Label-->
                                        <!--end::Col-->
                                        <div class="fw-bold fs-6 text-gray-800">
                                            {{ \Carbon\Carbon::parse($transaction->bill_date)->format('d M Y') }}
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Col-->
                                    <!--end::Col-->
                                    <div class="col-sm-6">
                                        <!--end::Label-->
                                        <div class="fw-semibold fs-7 text-gray-600 mb-1">
                                            Bill Exp:
                                        </div>
                                        <!--end::Label-->
                                        <!--end::Info-->
                                        <div
                                            class="fw-bold fs-6 text-gray-800 d-flex align-items-center flex-wrap">
                                            <span class="pe-2">{{ \Carbon\Carbon::parse($transaction->bill_expired)->format('d M Y') }}</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Content-->
                                <div class="flex-grow-1">
                                    <!--begin::Table-->
                                    <div class="table-responsive border-bottom mb-9">
                                        <table class="table mb-3">
                                            <thead>
                                                <tr
                                                    class="border-bottom fs-6 fw-bold text-muted">
                                                    <th class="min-w-175px pb-2">
                                                        Paket
                                                    </th>
                                                    <th class="min-w-70px text-end pb-2">
                                                        Qty
                                                    </th>
                                                    <th class="min-w-80px text-end pb-2">
                                                        Sub Total
                                                    </th>
                                                    <th class="min-w-100px text-end pb-2">
                                                        Grand Total
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    class="fw-bold text-gray-700 fs-5 text-end">
                                                    <td class="d-flex align-items-center pt-6">
                                                        <i
                                                            class="fa fa-genderless text-danger fs-2 me-2"></i>{{$transaction->pricing_name}}
                                                    </td>
                                                    <td class="pt-6">1</td>
                                                    <td class="pt-6">Rp. {{number_format($transaction->pricing_price)}}</td>
                                                    <td class="pt-6 text-dark fw-bolder">
                                                        Rp. {{number_format($transaction->pricing_price)}}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                    <!--begin::Container-->
                                    <div class="d-flex justify-content-end">
                                        <!--begin::Section-->
                                        <div class="mw-300px">
                                            <!--begin::Item-->
                                            <div class="d-flex flex-stack">
                                                <!--begin::Code-->
                                                <div
                                                    class="fw-semibold pe-10 text-gray-600 fs-7">
                                                    Total
                                                </div>
                                                <!--end::Code-->
                                                <!--begin::Label-->
                                                <div
                                                    class="text-end fw-bold fs-6 text-gray-800">
                                                    Rp. {{number_format($transaction->pricing_price)}}
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Invoice 2 content-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="m-0">
                        <!--begin::Invoice 2 sidebar-->
                        <div
                            class="d-print-none border border-dashed border-gray-300 card-rounded h-lg-100 min-w-md-350px p-9 bg-lighten">
                            <!--begin::Labels-->
                            <div class="mb-8">
                                @if ($transaction->status == 'pending')
                                <span class="badge badge-light-warning">Pending Payment</span>
                                @elseif ($transaction->status == 'paid')
                                <span class="badge badge-light-success">Paid Successfully</span>
                                @elseif ($transaction->status == 'failed')
                                <span class="badge badge-light-danger">Failed</span>
                                @endif
                            </div>
                            <!--end::Labels-->
                            <!--begin::Title-->
                            <h6
                                class="mb-8 fw-bolder text-gray-600 text-hover-primary">
                                PAYMENT DETAILS
                            </h6>
                            <!--end::Title-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-semibold text-gray-600 fs-7">
                                    Payment Method:
                                </div>
                                <div class="fw-bold text-gray-800 fs-6">
                                    {{$transaction->payment_method}}
                                </div>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-6">
                                <div class="fw-semibold text-gray-600 fs-7">
                                    Bill No:
                                </div>
                                <div class="fw-bold text-gray-800 fs-6">
                                    {{$transaction->bill_no}}
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Invoice 2 sidebar-->
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Invoice 2 main-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->
@endsection


@push('scripts')
<script>
    var formValidation = FormValidation.formValidation(document.querySelector("#kt_subscriptions_create_new"), {
        fields: {
            payment_method: {
                validators: {
                    notEmpty: {
                        message: 'Please select a payment method.'
                    }
                }
            }
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap5: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.d-flex', // Adjust based on form structure
                eleInvalidClass: 'is-invalid',
                eleValidClass: 'is-valid'
            }),
            submitButton: new FormValidation.plugins.SubmitButton(),
        }
    });
    document.addEventListener("DOMContentLoaded", function() {
        $(function() {
            $('input[name="payment_method"]').change(function() {
                var selectedText = $(this).closest('.py-3').find('.me-3').find('#pg_name').text().trim()
                $('#selected_payment').html(selectedText);
            });
            $('#kt_subscriptions_create_button').on("click", function(e) {
                e.preventDefault();
                formValidation.validate().then(function(result) {
                    console.log(result);
                    if (result == "Valid") {
                        document.querySelector("#kt_subscriptions_create_button").setAttribute(
                            "data-kt-indicator",
                            "on"
                        );
                        (document.querySelector("#kt_subscriptions_create_button").disabled = !0);

                        $.ajax({
                            url: `{{ route('payment.confirm') }}`,
                            method: 'POST',
                            dataType: 'JSON',
                            data: $('#kt_subscriptions_create_new').serialize(),
                            success: response => {
                                setTimeout(function() {
                                    document.querySelector("#kt_subscriptions_create_button").removeAttribute(
                                        "data-kt-indicator"
                                    );
                                    (document.querySelector("#kt_subscriptions_create_button").disabled = !1);
                                    Swal.fire({
                                        text: "You're data successfully create package order. Please pay!",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary",
                                        },
                                    }).then(function(e) {
                                        document.querySelector("#kt_subscriptions_create_new").reset();
                                        window.location.href = `gymnastic/formpayment/${response.trx_id}`;
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
                            document.querySelector("#kt_subscriptions_create_button").removeAttribute(
                                "data-kt-indicator"
                            );
                            (document.querySelector("#kt_subscriptions_create_button").disabled = !1);
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
        });
    });
</script>
@endpush