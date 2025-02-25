@extends('layouts.app')

@section('content')



<!--begin::Container-->
<div
    id="kt_content_container"
    class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row gy-5 gx-xl-10">
            <!--begin::Col-->
            <div class="col-xl-6 col-xl-2 mb-xl-10">
                <!--begin::Card widget 2-->
                <div class="card h-lg-100">
                    <!--begin::Body-->
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <!--begin::Icon-->
                        <div class="m-0">
                            <i class="ki-duotone ki-compass fs-2hx text-gray-600">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Section-->
                        <div class="d-flex flex-column my-7">
                            <!--begin::Number-->
                            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">327</span>
                            <!--end::Number-->
                            <!--begin::Follower-->
                            <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-400">Total Berlangganan</span>
                            </div>
                            <!--end::Follower-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Badge-->
                        <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.1%</span>
                        <!--end::Badge-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card widget 2-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-6 col-xl-2 mb-xl-10">
                <!--begin::Card widget 2-->
                <div class="card h-lg-100">
                    <!--begin::Body-->
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <!--begin::Icon-->
                        <div class="m-0">
                            <i class="ki-duotone ki-compass fs-2hx text-gray-600">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Section-->
                        <div class="d-flex flex-column my-7">
                            <!--begin::Number-->
                            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">327</span>
                            <!--end::Number-->
                            <!--begin::Follower-->
                            <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-400">Total Tidak Berlangganan</span>
                            </div>
                            <!--end::Follower-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Badge-->
                        <span class="badge badge-light-danger fs-base">
                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.1%</span>
                        <!--end::Badge-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card widget 2-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xl-12 mb-xl-10">
                <!--begin::Chart widget 20-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header py-5">
                        <!--begin::Title-->
                        <h3 class="card-title fw-bold text-gray-800">Monthly Targets</h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
                        <!--begin::Items-->
                        <div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
                            <!--begin::Item-->
                            <div class="me-md-2">
                                <!--begin::Statistics-->
                                <div class="d-flex mb-2">
                                    <span class="fs-4 fw-semibold text-gray-400 me-1">Rp. </span>
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">15.150.201</span>
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-400">Omset Bulan April</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
                                <!--begin::Statistics-->
                                <div class="d-flex mb-2">
                                    <span class="fs-4 fw-semibold text-gray-400 me-1">Rp. </span>
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">15.150.201</span>
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-400">Omset Bulan Maret</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="m-0">
                                <!--begin::Statistics-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Currency-->
                                    <span class="fs-4 fw-semibold text-gray-400 align-self-start me-1">Rp. </span>
                                    <!--end::Currency-->
                                    <!--begin::Value-->
                                    <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">0</span>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="badge badge-light-secondary fs-base">
                                        <i class="ki-duotone ki-black-down fs-7 text-secondary ms-n1"></i>0%</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Statistics-->  
                                <!--begin::Description-->
                                <span class="fs-6 fw-semibold text-gray-400">GAP</span>
                                <!--end::Description-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6" data-kt-chart-info="Revenue" style="height: 300px"></div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Chart widget 20-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->

@endsection

@push('scripts')
<script>
    var options = {
        chart: {
            type: 'donut',
            height: 450
        },
        series: [44, 55, 41], // Data for each section
        labels: ['Mingguan', 'Bulanan', 'Tahunan'], // Labels for each section
        colors: ['#008FFB', '#00E396', '#FEB019'], // Custom colors
        legend: {
            position: 'bottom'
        },
        dataLabels: {
            enabled: true
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 300
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(document.querySelector("#donutChart"), options);
    chart.render();
</script>
@endpush