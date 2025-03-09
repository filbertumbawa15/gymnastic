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
            @if ($alert)
            <div class="alert alert-{{ $alert['type'] }} d-flex align-items-center p-5">
                <!-- Icon Based on Alert Type -->
                <i class="ki-duotone ki-{{ $alert['type'] == 'warning' ? 'alert-circle' : ($alert['type'] == 'danger' ? 'alert-triangle' : 'check-circle') }} fs-2hx text-{{ $alert['type'] }} me-4"></i>

                <div class="d-flex flex-column">
                    <h4 class="mb-1 text-dark">Membership Status</h4>
                    <span>{{ $alert['message'] }}</span>
                    @isset($alert['button_text'])
                    <a href="#" class="btn btn-sm btn-{{ $alert['type'] == 'info' ? 'info' : ($alert['type'] == 'warning' ? 'primary' : 'danger') }} mt-3">{{ $alert['button_text'] }}</a>
                    @endisset
                </div>
            </div>
            @endif
            <!--begin::Col-->
            <div class="col-xxl-9">
                <!--begin::Row-->
                <div class="row gx-5 gx-xl-10">
                    <!--begin::Col-->
                    <div class="col-sm-4 mb-5 mb-xl-10">

                        <!--begin::List widget 1-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">KCAL</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                <!--begin::Heading-->
                                <div class="fs-2tx fw-bold mb-3">
                                    1204 </div>
                                <!--end::Heading-->

                                <!--begin::Stats-->
                                <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                    <i class="ki-duotone ki-Up-right fs-3 me-1 text-danger"></i>
                                    <!--begin::Number-->
                                    <div class="fw-bold text-success me-2">
                                        +40.5% </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-500">
                                        more impressions </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::LIst widget 1-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-sm-4 mb-5 mb-xl-10">

                        <!--begin::List widget 2-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Kilogram (KG)</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                <!--begin::Heading-->
                                <div class="fs-2tx fw-bold mb-3">
                                    81.4 Kg </div>
                                <!--end::Heading-->

                                <!--begin::Stats-->
                                <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                    <i class="ki-duotone ki-Up-right fs-3 me-1 text-danger"></i>
                                    <!--begin::Number-->
                                    <div class="fw-bold text-success me-2">
                                        +40.5% </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-500">
                                        more impressions </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::List widget 2-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-sm-4 mb-5 mb-xl-10">

                        <!--begin::List widget 2-->
                        <div class="card card-flush h-lg-100">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bold text-gray-900">Total Workout Hours</span>
                                </h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-column px-9 pt-6 pb-8">
                                <!--begin::Heading-->
                                <div class="fs-2tx fw-bold mb-3">
                                    15 Hrs </div>
                                <!--end::Heading-->

                                <!--begin::Stats-->
                                <div class="d-flex align-items-center flex-wrap mb-5 mt-auto fs-6">
                                    <i class="ki-duotone ki-Up-right fs-3 me-1 text-danger"></i>
                                    <!--begin::Number-->
                                    <div class="fw-bold text-success me-2">
                                        +40.5% </div>
                                    <!--end::Number-->

                                    <!--begin::Label-->
                                    <div class="fw-semibold text-gray-500">
                                        more impressions </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::List widget 2-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->



                <!--begin::Table widget 1-->
                <div class="card card-flush mb-xxl-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Last Activity</span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_stats_widget_1_tab_1" role="tabpanel">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-500">
                                                <th class="p-0 min-w-80px d-block pt-3">DATE</th>
                                                <th class="text-end min-w-140px pt-3">CHECK IN</th>
                                                <th class="pe-0 text-end min-w-120px pt-3">CHECK OUT</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mon, 12 Apr 2024</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">18:30</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">19:41</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mon, 12 Apr 2024</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">18:30</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">19:41</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mon, 12 Apr 2024</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">18:30</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">19:41</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mon, 12 Apr 2024</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">18:30</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">19:41</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade " id="kt_stats_widget_1_tab_2" role="tabpanel">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-500">
                                                <th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
                                                <th class="text-end min-w-140px pt-3">STATUS</th>
                                                <th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-success fs-7 fw-bold">Sent</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-success fs-7 fw-bold">Sent</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade " id="kt_stats_widget_1_tab_3" role="tabpanel">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-500">
                                                <th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
                                                <th class="text-end min-w-140px pt-3">STATUS</th>
                                                <th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-success fs-7 fw-bold">Sent</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-success fs-7 fw-bold">Sent</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade " id="kt_stats_widget_1_tab_4" role="tabpanel">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4 my-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="fs-7 fw-bold text-gray-500">
                                                <th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
                                                <th class="text-end min-w-140px pt-3">STATUS</th>
                                                <th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->

                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-success fs-7 fw-bold">Sent</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-success fs-7 fw-bold">Sent</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
                                                </td>

                                                <td class="text-end">
                                                    <span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
                                                </td>

                                                <td class="text-end">
                                                    <span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table container-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Table widget 1-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xxl-3 mb-5 mb-xl-10">
                <!--begin::Chart widget 8-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">List of Workouts</span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">

                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="/metronic8/demo20/assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="">
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Top Authors</a>
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="/metronic8/demo20/assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="">
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Popular Authors</a>
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="/metronic8/demo20/assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="">
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">New Users</a>
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="/metronic8/demo20/assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="">
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Active Customers</a>
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="/metronic8/demo20/assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="">
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Bestseller Theme</a>
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center ">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label">
                                    <img src="/metronic8/demo20/assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="">
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Fox Broker App</a>
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Chart widget 8-->
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