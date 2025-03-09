@extends('layouts.app')

@section('content')
<!--begin::Container-->
<div
    id="kt_content_container"
    class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Layout-->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Content-->
            <div
                class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
                <!--begin::Form-->
                <form
                    class="form"
                    action="#"
                    id="kt_subscriptions_create_new">
                    @csrf
                    <input type="hidden" name="pricing_id" value="{{ $plan->id }}">
                    <!--begin::Pricing-->
                    <div class="card card-flush pt-3 mb-5 mb-lg-10">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="fw-bold">Products</h2>
                            </div>
                            <!--begin::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table wrapper-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table
                                    class="table align-middle table-row-dashed fs-6 fw-semibold gy-4"
                                    id="kt_subscription_products_table">
                                    <thead>
                                        <tr
                                            class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                            <th class="min-w-300">Paket</th>
                                            <th class="min-w-150px">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600">
                                        <tr>
                                            <td>{{ $plan->name }}</td>
                                            <td>Rp. {{ number_format($plan->price) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Pricing-->
                    <!--begin::Payment method-->
                    <div
                        class="card card-flush pt-3 mb-5 mb-lg-10"
                        data-kt-subscriptions-form="pricing">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2 class="fw-bold">Payment Method</h2>
                            </div>
                            <!--begin::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            @foreach ($paymentGateways as $gateway)
                            <!--begin::Options-->
                            <div id="kt_create_new_payment_method">
                                <div class="separator separator-dashed"></div>
                                <!--begin::Option-->
                                <div class="py-1">
                                    <!--begin::Header-->
                                    <div class="py-3 d-flex flex-stack flex-wrap">
                                        <!--begin::Toggle-->
                                        <div
                                            class="d-flex">
                                            <!--begin::Summary-->
                                            <div class="me-3">
                                                <div
                                                    class="d-flex align-items-center fw-bold" id="pg_name">
                                                    {{ $gateway->pg_name }}
                                                </div>
                                            </div>
                                            <!--end::Summary-->
                                        </div>
                                        <!--end::Toggle-->
                                        <!--begin::Input-->
                                        <div class="d-flex my-3 ms-9">
                                            <!--begin::Radio-->
                                            <label
                                                class="form-check form-check-custom form-check-solid me-5">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    name="payment_method"
                                                    value="{{ $gateway->pg_code }}">
                                            </label>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Header-->
                                </div>
                                <!--end::Option-->
                                <div class="separator separator-dashed"></div>
                            </div>
                            <!--end::Options-->
                            @endforeach
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Payment method-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
            <!--begin::Sidebar-->
            <div
                class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
                <!--begin::Card-->
                <div
                    class="card card-flush pt-3 mb-0"
                    data-kt-sticky="true"
                    data-kt-sticky-name="subscription-summary"
                    data-kt-sticky-offset="{default: false, lg: '200px'}"
                    data-kt-sticky-width="{lg: '250px', xl: '300px'}"
                    data-kt-sticky-left="auto"
                    data-kt-sticky-top="150px"
                    data-kt-sticky-animation="false"
                    data-kt-sticky-zindex="95">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Summary</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0 fs-6">
                        <!--begin::Section-->
                        <div class="mb-7">
                            <!--begin::Title-->
                            <h5 class="mb-3">Customer details</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="d-flex align-items-center mb-1">
                                <!--begin::Name-->
                                <a
                                    href="../../demo20/dist/apps/customers/view.html"
                                    class="fw-bold text-gray-800 text-hover-primary me-2">{{auth()->user()->name}}</a>
                                <!--end::Name-->
                                <!--begin::Status-->
                                <span class="badge badge-light-success">Active</span>
                                <!--end::Status-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Email-->
                            <a
                                href="#"
                                class="fw-semibold text-gray-600 text-hover-primary">{{auth()->user()->email}}</a>
                            <!--end::Email-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Seperator-->
                        <div class="separator separator-dashed mb-7"></div>
                        <!--end::Seperator-->
                        <!--begin::Section-->
                        <div class="mb-7">
                            <!--begin::Title-->
                            <h5 class="mb-3">Product details</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="mb-0">
                                <!--begin::Plan-->
                                <span class="badge badge-light-primary me-2">{{ $plan->name }}</span>
                                <!--end::Plan-->
                                <!--begin::Price-->
                                <span class="fw-semibold text-gray-600">Rp. {{ number_format($plan->price) }}</span>
                                <!--end::Price-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Seperator-->
                        <div class="separator separator-dashed mb-7"></div>
                        <!--end::Seperator-->
                        <!--begin::Section-->
                        <div class="mb-10">
                            <!--begin::Title-->
                            <h5 class="mb-3">Payment Details</h5>
                            <!--end::Title-->
                            <!--begin::Details-->
                            <div class="mb-0">
                                <!--begin::Card info-->
                                <div
                                    class="fw-semibold text-gray-600 d-flex align-items-center" id="selected_payment">
                                    No payment method selected.
                                </div>
                                <!--end::Card info-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Actions-->
                        <div class="mb-0">
                            <button
                                type="submit"
                                class="btn btn-primary"
                                id="kt_subscriptions_create_button">
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Create Subscription</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">Please wait...
                                    <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->
        </div>
        <!--end::Layout-->
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
                                        window.location.href = `formpayment/${response.trx_id}`;
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