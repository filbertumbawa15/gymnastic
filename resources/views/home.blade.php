@extends('layouts.app')

@section('content')



<!--begin::Container-->
<div
    id="kt_content_container"
    class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row g-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xl-4 mb-xl-10">
                <!--begin::Card widget 3-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-start h-xl-100" style="background-color: #287fa8;background-image:url('{{ asset('src/media/svg/shapes/wave-bg-red.svg') }}')">
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-start mb-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <span class="fs-4hx text-white fw-bold me-6">1.2k</span>
                            <div class="fw-bold fs-6 text-white">
                                <span class="d-block">Total Member</span>
                                <span class="">Active</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 3-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4 mb-xl-10">
                <!--begin::Card widget 3-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-start h-xl-100" style="background-color: #F1416C;background-image:url('{{ asset('src/media/svg/shapes/wave-bg-red.svg') }}')">
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-start mb-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <span class="fs-4hx text-white fw-bold me-6">1.2k</span>
                            <div class="fw-bold fs-6 text-white">
                                <span class="d-block">Total Member</span>
                                <span class="">Non Active</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 3-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4 mb-xl-10">
                <!--begin::Chart widget 22-->
                <div class="card h-xl-80">
                    <!--begin::Body-->
                    <div class="card-body pb-3">
                        <!--begin::Tab Content-->
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade active show" id="kt_chart_widgets_22_tab_content_1" role="tabpanel" aria-labelledby="kt_chart_widgets_22_tab_1">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-wrap flex-md-nowrap">
                                    <!--begin::Items-->

                                    <!--end::Items-->
                                    <!--begin::Container-->
                                    <div class="d-flex justify-content-between flex-column w-225px w-md-600px mx-auto mx-md-0 pt-3 pb-10">
                                        <!--begin::Title-->
                                        <div class="fs-4 fw-bold text-gray-900 text-center mb-5">Total Member Mingguan, Bulanan, Tahunan
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Chart-->
                                        <div id="donutChart" class="mx-auto mb-4" style="min-height: 191.133px;">
                                        </div>
                                        <!--end::Chart-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_chart_widgets_22_tab_content_2" role="tabpanel" aria-labelledby="kt_chart_widgets_22_tab_2">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-wrap flex-md-nowrap">
                                    <!--begin::Items-->
                                    <div class="me-md-5 w-100">
                                        <!--begin::Item-->
                                        <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                            <!--begin::Block-->
                                            <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-4">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-element-11 fs-2qx text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Section-->
                                                <div class="me-2">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Homeworks</a>
                                                    <span class="text-gray-400 fw-bold d-block fs-7">Don’t forget to turn in your task</span>
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Block-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <span class="text-dark fw-bolder fs-2x">423</span>
                                                <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
                                                <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">154</span>
                                                <span class="badge badge-lg badge-light-danger align-self-center px-2">74%</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                            <!--begin::Block-->
                                            <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-4">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-abstract-24 fs-2qx text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Section-->
                                                <div class="me-2">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Tests</a>
                                                    <span class="text-gray-400 fw-bold d-block fs-7">You take 12 subjects at this semester</span>
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Block-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <span class="text-dark fw-bolder fs-2x">43</span>
                                                <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
                                                <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">53</span>
                                                <span class="badge badge-lg badge-light-info align-self-center px-2">65%</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex border border-gray-300 border-dashed rounded p-6 mb-6">
                                            <!--begin::Block-->
                                            <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-4">
                                                    <span class="symbol-label">
                                                        <i class="ki-duotone ki-timer fs-2qx text-primary">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Section-->
                                                <div class="me-2">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Attendance</a>
                                                    <span class="text-gray-400 fw-bold d-block fs-7">Great, you always attending class. keep it up</span>
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Block-->
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center">
                                                <span class="text-dark fw-bolder fs-2x">53</span>
                                                <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>
                                                <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">94</span>
                                                <span class="badge badge-lg badge-light-primary align-self-center px-2">87%</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                    <!--begin::Container-->
                                    <div class="d-flex justify-content-between flex-column w-225px w-md-600px mx-auto mx-md-0 pt-3 pb-10">
                                        <!--begin::Title-->
                                        <div class="fs-4 fw-bold text-gray-900 text-center mb-5">Session Attendance
                                            <br>for Current Academic Year
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Chart-->
                                        <div id="kt_chart_widgets_22_chart_2" class="mx-auto mb-4" style="min-height: 191.133px;">
                                            <div id="apexcharts3mn8naur" class="apexcharts-canvas apexcharts3mn8naur apexcharts-theme-light" style="width: 250px; height: 191.133px;"><svg id="SvgjsSvg4309" width="250" height="191.13333333333335" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="250" height="191.13333333333335">
                                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div>
                                                    </foreignObject>
                                                    <g id="SvgjsG4311" class="apexcharts-inner apexcharts-graphical" transform="translate(33.83333333333333, 0)">
                                                        <defs id="SvgjsDefs4310">
                                                            <clipPath id="gridRectMask3mn8naur">
                                                                <rect id="SvgjsRect4312" width="188.33333333333334" height="206.33333333333334" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMask3mn8naur"></clipPath>
                                                            <clipPath id="nonForecastMask3mn8naur"></clipPath>
                                                            <clipPath id="gridRectMarkerMask3mn8naur">
                                                                <rect id="SvgjsRect4313" width="188.33333333333334" height="210.33333333333334" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                            </clipPath>
                                                            <filter id="SvgjsFilter4322" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                <feFlood id="SvgjsFeFlood4323" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood4323Out" in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite4324" in="SvgjsFeFlood4323Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4324Out"></feComposite>
                                                                <feOffset id="SvgjsFeOffset4325" dx="1" dy="1" result="SvgjsFeOffset4325Out" in="SvgjsFeComposite4324Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur4326" stdDeviation="1 " result="SvgjsFeGaussianBlur4326Out" in="SvgjsFeOffset4325Out"></feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge4327" result="SvgjsFeMerge4327Out" in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode4328" in="SvgjsFeGaussianBlur4326Out"></feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode4329" in="[object Arguments]"></feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend4330" in="SourceGraphic" in2="SvgjsFeMerge4327Out" mode="normal" result="SvgjsFeBlend4330Out"></feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter4335" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                <feFlood id="SvgjsFeFlood4336" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood4336Out" in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite4337" in="SvgjsFeFlood4336Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4337Out"></feComposite>
                                                                <feOffset id="SvgjsFeOffset4338" dx="1" dy="1" result="SvgjsFeOffset4338Out" in="SvgjsFeComposite4337Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur4339" stdDeviation="1 " result="SvgjsFeGaussianBlur4339Out" in="SvgjsFeOffset4338Out"></feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge4340" result="SvgjsFeMerge4340Out" in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode4341" in="SvgjsFeGaussianBlur4339Out"></feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode4342" in="[object Arguments]"></feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend4343" in="SourceGraphic" in2="SvgjsFeMerge4340Out" mode="normal" result="SvgjsFeBlend4343Out"></feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter4348" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                                <feFlood id="SvgjsFeFlood4349" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood4349Out" in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite4350" in="SvgjsFeFlood4349Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite4350Out"></feComposite>
                                                                <feOffset id="SvgjsFeOffset4351" dx="1" dy="1" result="SvgjsFeOffset4351Out" in="SvgjsFeComposite4350Out"></feOffset>
                                                                <feGaussianBlur id="SvgjsFeGaussianBlur4352" stdDeviation="1 " result="SvgjsFeGaussianBlur4352Out" in="SvgjsFeOffset4351Out"></feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge4353" result="SvgjsFeMerge4353Out" in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode4354" in="SvgjsFeGaussianBlur4352Out"></feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode4355" in="[object Arguments]"></feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend4356" in="SourceGraphic" in2="SvgjsFeMerge4353Out" mode="normal" result="SvgjsFeBlend4356Out"></feBlend>
                                                            </filter>
                                                        </defs>
                                                        <g id="SvgjsG4314" class="apexcharts-pie">
                                                            <g id="SvgjsG4315" transform="translate(0, 0) scale(1)">
                                                                <circle id="SvgjsCircle4316" r="42.95934959349594" cx="92.16666666666667" cy="92.16666666666667" fill="transparent"></circle>
                                                                <g id="SvgjsG4317" class="apexcharts-slices">
                                                                    <g id="SvgjsG4318" class="apexcharts-series apexcharts-pie-series" seriesName="Sales" rel="1" data:realIndex="0">
                                                                        <path id="SvgjsPath4319" d="M 92.16666666666667 6.247967479674784 A 85.91869918699189 85.91869918699189 0 1 1 6.983013861801382 103.38130731204477 L 49.57484026423403 97.77398698935572 A 42.95934959349594 42.95934959349594 0 1 0 92.16666666666667 49.20731707317073 L 92.16666666666667 6.247967479674784 z" fill="rgba(114,57,234,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="262.5" data:startAngle="0" data:strokeWidth="0" data:value="70" data:pathOrig="M 92.16666666666667 6.247967479674784 A 85.91869918699189 85.91869918699189 0 1 1 6.983013861801382 103.38130731204477 L 49.57484026423403 97.77398698935572 A 42.95934959349594 42.95934959349594 0 1 0 92.16666666666667 49.20731707317073 L 92.16666666666667 6.247967479674784 z"></path>
                                                                    </g>
                                                                    <g id="SvgjsG4331" class="apexcharts-series apexcharts-pie-series" seriesName="Sales" rel="2" data:realIndex="1">
                                                                        <path id="SvgjsPath4332" d="M 6.983013861801382 103.38130731204477 A 85.91869918699189 85.91869918699189 0 0 1 27.569568411074513 35.51653191888188 L 59.86811753887059 63.841599292774276 A 42.95934959349594 42.95934959349594 0 0 0 49.57484026423403 97.77398698935572 L 6.983013861801382 103.38130731204477 z" fill="rgba(80,205,137,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="48.75" data:startAngle="262.5" data:strokeWidth="0" data:value="13" data:pathOrig="M 6.983013861801382 103.38130731204477 A 85.91869918699189 85.91869918699189 0 0 1 27.569568411074513 35.51653191888188 L 59.86811753887059 63.841599292774276 A 42.95934959349594 42.95934959349594 0 0 0 49.57484026423403 97.77398698935572 L 6.983013861801382 103.38130731204477 z"></path>
                                                                    </g>
                                                                    <g id="SvgjsG4344" class="apexcharts-series apexcharts-pie-series" seriesName="Sales" rel="3" data:realIndex="2">
                                                                        <path id="SvgjsPath4345" d="M 27.569568411074513 35.51653191888188 A 85.91869918699189 85.91869918699189 0 0 1 80.95202602128857 6.983013861801382 L 86.55934634397762 49.57484026423403 A 42.95934959349594 42.95934959349594 0 0 0 59.86811753887059 63.841599292774276 L 27.569568411074513 35.51653191888188 z" fill="rgba(0,158,247,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="41.25" data:startAngle="311.25" data:strokeWidth="0" data:value="11" data:pathOrig="M 27.569568411074513 35.51653191888188 A 85.91869918699189 85.91869918699189 0 0 1 80.95202602128857 6.983013861801382 L 86.55934634397762 49.57484026423403 A 42.95934959349594 42.95934959349594 0 0 0 59.86811753887059 63.841599292774276 L 27.569568411074513 35.51653191888188 z"></path>
                                                                    </g>
                                                                    <g id="SvgjsG4357" class="apexcharts-series apexcharts-pie-series" seriesName="Sales" rel="4" data:realIndex="3">
                                                                        <path id="SvgjsPath4358" d="M 80.95202602128857 6.983013861801382 A 85.91869918699189 85.91869918699189 0 0 1 92.15167102484435 6.247968788291402 L 92.15916884575552 49.20731772747904 A 42.95934959349594 42.95934959349594 0 0 0 86.55934634397762 49.57484026423403 L 80.95202602128857 6.983013861801382 z" fill="rgba(241,65,108,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="7.5" data:startAngle="352.5" data:strokeWidth="0" data:value="2" data:pathOrig="M 80.95202602128857 6.983013861801382 A 85.91869918699189 85.91869918699189 0 0 1 92.15167102484435 6.247968788291402 L 92.15916884575552 49.20731772747904 A 42.95934959349594 42.95934959349594 0 0 0 86.55934634397762 49.57484026423403 L 80.95202602128857 6.983013861801382 z"></path>
                                                                    </g>
                                                                    <g id="SvgjsG4320" class="apexcharts-datalabels"><text id="SvgjsText4321" font-family="inherit" x="140.6144903583608" y="134.65426772750527" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter4322)" style="font-family: inherit;">72.9%</text></g>
                                                                    <g id="SvgjsG4333" class="apexcharts-datalabels"><text id="SvgjsText4334" font-family="inherit" x="30.50236503241066" y="73.4610052689523" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter4335)" style="font-family: inherit;">13.5%</text></g>
                                                                    <g id="SvgjsG4346" class="apexcharts-datalabels"><text id="SvgjsText4347" font-family="inherit" x="61.790320844854804" y="35.33652080304827" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter4348)" style="font-family: inherit;">11.5%</text></g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine4359" x1="0" y1="0" x2="184.33333333333334" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine4360" x1="0" y1="0" x2="184.33333333333334" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 57, 234);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(80, 205, 137);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 158, 247);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(241, 65, 108);"></span>
                                                        <div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div>
                                                            <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Chart-->
                                        <!--begin::Labels-->
                                        <div class="mx-auto">
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Bullet-->
                                                <div class="bullet bullet-dot w-8px h-7px bg-success me-2"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="fs-8 fw-semibold text-muted">Precent(133)</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Bullet-->
                                                <div class="bullet bullet-dot w-8px h-7px bg-primary me-2"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="fs-8 fw-semibold text-muted">Illness(9)</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Bullet-->
                                                <div class="bullet bullet-dot w-8px h-7px bg-info me-2"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="fs-8 fw-semibold text-muted">Late(2)</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Bullet-->
                                                <div class="bullet bullet-dot w-8px h-7px bg-danger me-2"></div>
                                                <!--end::Bullet-->
                                                <!--begin::Label-->
                                                <div class="fs-8 fw-semibold text-muted">Absent(3)</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Labels-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Chart widget 22-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-10 g-lg-10">
            <!--begin::Col-->
            <div class="col-xl-12 mb-5 mb-lg-10">
                <!--begin::Table Widget 6-->
                <div class="card h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Pendaftaran Member</span>
                        </h3>
                        <div class="card-toolbar">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a
                                        class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1 active"
                                        data-bs-toggle="tab"
                                        href="#kt_table_widget_6_tab_1">Mingguan</a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4 me-1"
                                        data-bs-toggle="tab"
                                        href="#kt_table_widget_6_tab_2">Bulanan</a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bold px-4"
                                        data-bs-toggle="tab"
                                        href="#kt_table_widget_6_tab_3">Tahunan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <div class="tab-content">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_table_widget_6_tab_1">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-3">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-120px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/001-boy.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                                    <span class="text-muted fw-semibold d-block">Successful Fellas</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$200,500</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-primary fs-7 fw-bold">+28%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/018-girl-9.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                                    <span class="text-muted fw-semibold d-block">HTML, CSS Coding</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$1,200,000</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-warning fs-7 fw-bold">+52%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/047-girl-25.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                                    <span class="text-muted fw-semibold d-block">PHP, Laravel, VueJS</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$1,200,000</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-danger fs-7 fw-bold">+52%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/014-girl-7.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                                                    <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$3,400,000</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-success fs-7 fw-bold">-34%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/043-boy-18.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
                                                    <span class="text-muted fw-semibold d-block">Art Director</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$35,600,000</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-info fs-7 fw-bold">+230%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_table_widget_6_tab_2">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-3">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-120px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/018-girl-9.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                                    <span class="text-muted fw-semibold d-block">HTML, CSS Coding</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$1,200,000</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-warning fs-7 fw-bold">+52%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/014-girl-7.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                                                    <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$3,400,000</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-success fs-7 fw-bold">-34%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/001-boy.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                                    <span class="text-muted fw-semibold d-block">Successful Fellas</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$200,500</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-primary fs-7 fw-bold">+28%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div
                                class="tab-pane fade"
                                id="kt_table_widget_6_tab_3">
                                <!--begin::Table container-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-3">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr>
                                                <th class="p-0 w-50px"></th>
                                                <th class="p-0 min-w-150px"></th>
                                                <th class="p-0 min-w-140px"></th>
                                                <th class="p-0 min-w-120px"></th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/047-girl-25.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                                    <span class="text-muted fw-semibold d-block">HTML, CSS Coding</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$1,200,000</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-danger fs-7 fw-bold">+52%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/014-girl-7.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Natali Trump</a>
                                                    <span class="text-muted fw-semibold d-block">UI/UX Designer</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$3,400,000</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-success fs-7 fw-bold">-34%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/043-boy-18.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Kevin Leonard</a>
                                                    <span class="text-muted fw-semibold d-block">Art Director</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$35,600,000</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-info fs-7 fw-bold">+230%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="symbol symbol-50px me-2">
                                                        <span class="symbol-label">
                                                            <img
                                                                src="{{ asset('src/media/svg/avatars/001-boy.svg') }}"
                                                                class="h-75 align-self-end"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a
                                                        href="#"
                                                        class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                                    <span class="text-muted fw-semibold d-block">Successful Fellas</span>
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-muted fw-semibold d-block fs-7">Paid</span>
                                                    <span class="text-dark fw-bold d-block fs-5">$200,500</span>
                                                </td>
                                                <td class="text-end">
                                                    <span class="text-primary fs-7 fw-bold">+28%</span>
                                                </td>
                                                <td class="text-end">
                                                    <a
                                                        href="#"
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <i class="ki-duotone ki-arrow-right fs-2">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Tables Widget 6-->
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