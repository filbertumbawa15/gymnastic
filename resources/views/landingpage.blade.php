<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>
        Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes
    </title>
    <meta charset="utf-8" />
    <meta
        name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta
        name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta
        property="og:title"
        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('src/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link
        href="{{ asset('src/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}"
        rel="stylesheet"
        type="text/css" />
    <link
        href="{{ asset('src/plugins/custom/datatables/datatables.bundle.css') }}"
        rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link
        href="{{ asset('src/plugins/global/plugins.bundle.css') }}"
        rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('src/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<style>
    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 0.875em;
        color: #dc3545;
    }

    .is-invalid~.invalid-feedback {
        display: block;
    }
</style>
<!--begin::Body-->

<body
    id="kt_body"
    class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode =
                    document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ?
                    "dark" :
                    "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

                <!--begin::Header-->
                <div id="kt_header" class="header">
                    <!--begin::Header top-->
                    <div class="header-top d-flex align-items-stretch flex-grow-1">
                        <!--begin::Container-->
                        <div class="d-flex container-xxl align-items-stretch">
                            <!--begin::Brand-->
                            <div
                                class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
                                <!--begin::Heaeder navs toggle-->
                                <button
                                    class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n3 me-2"
                                    id="kt_header_navs_toggle">
                                    <i class="ki-duotone ki-abstract-14 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <!--end::Heaeder navs toggle-->
                                <!--begin::Logo-->
                                <a
                                    href="../../demo20/dist/index.html"
                                    class="d-flex align-items-center">
                                    <img
                                        alt="Logo"
                                        src="{{ asset('src/media/logos/demo20.svg') }}"
                                        class="h-50px h-lg-50px" />
                                </a>
                                <!--end::Logo-->
                            </div>
                            <!--end::Brand-->
                            <!--begin::Topbar-->
                            <div class="d-flex align-items-center flex-row-auto">
                                <!--begin::Theme mode-->
                                <div class="d-flex align-items-center ms-1">
                                    <!--begin::Menu toggle-->
                                    <a
                                        href="#"
                                        class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px"
                                        data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                        data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">
                                        <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                            <span class="path7"></span>
                                            <span class="path8"></span>
                                            <span class="path9"></span>
                                            <span class="path10"></span>
                                        </i>
                                        <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--begin::Menu toggle-->
                                    <!--begin::Menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                        data-kt-menu="true"
                                        data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a
                                                href="#"
                                                class="menu-link px-3 py-2"
                                                data-kt-element="mode"
                                                data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-night-day fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                        <span class="path6"></span>
                                                        <span class="path7"></span>
                                                        <span class="path8"></span>
                                                        <span class="path9"></span>
                                                        <span class="path10"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Light</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a
                                                href="#"
                                                class="menu-link px-3 py-2"
                                                data-kt-element="mode"
                                                data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-moon fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">Dark</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a
                                                href="#"
                                                class="menu-link px-3 py-2"
                                                data-kt-element="mode"
                                                data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="ki-duotone ki-screen fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </span>
                                                <span class="menu-title">System</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Theme mode-->
                                <!--begin::User-->
                                <div
                                    class="d-flex align-items-center ms-1"
                                    id="kt_header_user_menu_toggle">
                                    <!--begin::User info-->
                                    <div
                                        class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-2 pe-2 me-n2"
                                        data-kt-menu-trigger="click"
                                        data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">
                                        <!--begin::Name-->
                                        <div
                                            class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                                            @auth
                                            <span
                                                class="text-white opacity-75 fs-8 fw-semibold lh-1 mb-1">{{ Auth::user()->name }}</span>
                                            <span class="text-white fs-8 fw-bold lh-1">{{ auth()->user()->role->rolename }}</span>
                                            @endauth
                                            @guest
                                            <span
                                                class="text-white opacity-75 fs-8 fw-semibold lh-1 mb-1">Not Signed Up?</span>
                                            <span class="text-white fs-8 fw-bold lh-1">Sign Up/Log In</span>
                                            @endguest
                                        </div>
                                        <!--end::Name-->
                                        @auth
                                        <div class="symbol symbol-30px symbol-md-40px">
                                            <img src="{{ asset('src/media/avatars/300-1.jpg') }}" alt="image">
                                        </div>
                                        @endauth
                                        @guest
                                        <div class="symbol symbol-30px symbol-md-40px">
                                            <img src="{{ asset('src/media/avatars/blank.png') }}" alt="image">
                                        </div>
                                        @endguest
                                    </div>
                                    <!--end::User info-->
                                    <!--begin::User account menu-->
                                    @auth
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a
                                                href="{{ route('dashboard') }}"
                                                class="menu-link px-5">Go to Dashboard</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    @endauth
                                    @guest
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a
                                                href="{{ route('login') }}"
                                                class="menu-link px-5">Signup/Login</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    @endguest
                                    <!--end::User account menu-->
                                </div>
                                <!--end::User -->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header top-->
                    <!--begin::Header navs-->
                    <div
                        class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-0 py-lg-0 overflow-hidden overflow-lg-visible"
                        id="kt_header_navs"
                        data-kt-drawer="true"
                        data-kt-drawer-name="header-menu"
                        data-kt-drawer-activate="{default: true, lg: false}"
                        data-kt-drawer-overlay="true"
                        data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                        data-kt-drawer-direction="start"
                        data-kt-drawer-toggle="#kt_header_navs_toggle"
                        data-kt-swapper="true"
                        data-kt-swapper-mode="append"
                        data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
                    </div>
                    <!--end::Header navs-->
                </div>
                <!--end::Header-->



                <!--begin::Container-->
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::About card-->
                        <div class="card">
                            <!--begin::Body-->
                            <div class="card-body p-lg-17">
                                <!--begin::About-->
                                <div class="mb-18">
                                    <!--begin::Wrapper-->
                                    <div class="mb-10">
                                        <!--begin::Top-->
                                        <div class="text-center mb-15">
                                            <!--begin::Title-->
                                            <h3 class="fs-2hx text-dark mb-5">Stay Healthy with Fitness Club</h3>
                                            <!--end::Title-->
                                            <!--begin::Text-->
                                            <div class="fs-5 text-muted fw-semibold">Train with us, and you'll not only be part of the team, you'll be part of the family.
                                                <br />successfully deployed by small businesses to global enterprises
                                            </div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Top-->
                                        <!--begin::Overlay-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <img class="w-100 card-rounded" src="{{ asset('src/media/stock/1600x800/img-1.jpg') }}" alt="" />
                                            <!--end::Image-->
                                            <!--begin::Links-->
                                            <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                <a href="../../demo20/dist/pages/pricing.html" class="btn btn-primary">Talk to Specialist</a>
                                            </div>
                                            <!--end::Links-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Team-->
                                    <div class="mb-18">
                                        <!--begin::Heading-->
                                        <div class="text-center mb-12">
                                            <!--begin::Title-->
                                            <h3 class="fs-2hx text-dark mb-5">Our Complete Gym Programs</h3>
                                            <!--end::Title-->
                                            <!--begin::Sub-title-->
                                            <div class="fs-5 text-muted fw-semibold">Train with us, and you’ll not only be part of the team, you’ll be part of the family.
                                            </div>
                                            <!--end::Sub-title=-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Slider-->
                                        <div class="tns tns-default mb-10">
                                            <!--begin::Wrapper-->
                                            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                                                <!--begin::Item-->
                                                <div class="text-center">
                                                    <!--begin::Photo-->
                                                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('src/media/workouts/barbel.jpg')"></div>
                                                    <!--end::Photo-->
                                                    <!--begin::Person-->
                                                    <div class="mb-0">
                                                        <!--begin::Name-->
                                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Basic Barbel Training</a>
                                                        <!--end::Name-->
                                                        <!--begin::Position-->
                                                        <div class="text-muted fs-6 fw-semibold mt-1">20 Days | 20 Seats</div>
                                                        <!--begin::Position-->
                                                    </div>
                                                    <!--end::Person-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="text-center">
                                                    <!--begin::Photo-->
                                                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('src/media/workouts/cardio.jpg')"></div>
                                                    <!--end::Photo-->
                                                    <!--begin::Person-->
                                                    <div class="mb-0">
                                                        <!--begin::Name-->
                                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Cardio Workout</a>
                                                        <!--end::Name-->
                                                        <!--begin::Position-->
                                                        <div class="text-muted fs-6 fw-semibold mt-1">100 Days | 20 Seats</div>
                                                        <!--begin::Position-->
                                                    </div>
                                                    <!--end::Person-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="text-center">
                                                    <!--begin::Photo-->
                                                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('src/media/workouts/powerliftings.jpg')"></div>
                                                    <!--end::Photo-->
                                                    <!--begin::Person-->
                                                    <div class="mb-0">
                                                        <!--begin::Name-->
                                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Nutrition Plan</a>
                                                        <!--end::Name-->
                                                        <!--begin::Position-->
                                                        <div class="text-muted fs-6 fw-semibold mt-1">20 Days | 10 Seats</div>
                                                        <!--begin::Position-->
                                                    </div>
                                                    <!--end::Person-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="text-center">
                                                    <!--begin::Photo-->
                                                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('src/media/workouts/wheats.jpg')"></div>
                                                    <!--end::Photo-->
                                                    <!--begin::Person-->
                                                    <div class="mb-0">
                                                        <!--begin::Name-->
                                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Wheats Programs</a>
                                                        <!--end::Name-->
                                                        <!--begin::Position-->
                                                        <div class="text-muted fs-6 fw-semibold mt-1">10 Days | 10 Seats</div>
                                                        <!--begin::Position-->
                                                    </div>
                                                    <!--end::Person-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="text-center">
                                                    <!--begin::Photo-->
                                                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('src/media/workouts/weightloss.jpg')"></div>
                                                    <!--end::Photo-->
                                                    <!--begin::Person-->
                                                    <div class="mb-0">
                                                        <!--begin::Name-->
                                                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Weight Loss Programs</a>
                                                        <!--end::Name-->
                                                        <!--begin::Position-->
                                                        <div class="text-muted fs-6 fw-semibold mt-1">30 Days | 50 Seats</div>
                                                        <!--begin::Position-->
                                                    </div>
                                                    <!--end::Person-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Button-->
                                            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                                                <i class="ki-duotone ki-left fs-3x"></i>
                                            </button>
                                            <!--end::Button-->
                                            <!--begin::Button-->
                                            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                                                <i class="ki-duotone ki-right fs-3x"></i>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                        <!--end::Slider-->
                                    </div>
                                    <!--end::Team-->
                                </div>
                                <!--end::About-->
                                <!--begin::Statistics-->
                                <div class="card bg-light mb-18">
                                    <!--begin::Body-->
                                    <div class="card-body py-15">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-center">
                                            <!--begin::Items-->
                                            <div class="d-flex flex-center flex-wrap mb-10 mx-auto gap-5 w-xl-900px">
                                                <!--begin::Item-->
                                                <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-lg-10">
                                                    <!--begin::Content-->
                                                    <div class="text-center">
                                                        <!--begin::Symbol-->
                                                        <i class="ki-duotone ki-people text-gray-900 fs-2tx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="mt-1">
                                                            <!--begin::Animation-->
                                                            <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                                <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700">0</div>+
                                                            </div>
                                                            <!--end::Animation-->
                                                            <!--begin::Label-->
                                                            <span class="text-gray-600 fw-semibold fs-5 lh-0">Skilled Trainer</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-lg-10">
                                                    <!--begin::Content-->
                                                    <div class="text-center">
                                                        <!--begin::Symbol-->
                                                        <i class="ki-duotone ki-ranking text-gray-900 fs-2tx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                        <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="mt-1">
                                                            <!--begin::Animation-->
                                                            <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                                <div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="80">0</div>K+
                                                            </div>
                                                            <!--end::Animation-->
                                                            <!--begin::Label-->
                                                            <span class="text-gray-600 fw-semibold fs-5 lh-0">Worksout</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="octagon d-flex flex-center h-200px w-200px bg-body mx-lg-10">
                                                    <!--begin::Content-->
                                                    <div class="text-center">
                                                        <!--begin::Symbol-->
                                                        <i class="ki-duotone ki-gift text-gray-900 fs-2tx"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i> <!--end::Symbol-->
                                                        <!--begin::Text-->
                                                        <div class="mt-1">
                                                            <!--begin::Animation-->
                                                            <div class="fs-lg-2hx fs-2x fw-bold text-gray-800 d-flex align-items-center">
                                                                <div class="min-w-50px" data-kt-countup="true" data-kt-countup-value="35">0</div>M+
                                                            </div>
                                                            <!--end::Animation-->
                                                            <!--begin::Label-->
                                                            <span class="text-gray-600 fw-semibold fs-5 lh-0">Products</span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Statistics-->
                                <!-- begin::Pricing -->
                                <div class="d-flex flex-column mb-10">
                                    <!--begin::Heading-->
                                    <div class="mb-13 text-center">
                                        <h1 class="fs-2hx fw-bold mb-5">Choose Your Plan Programs</h1>
                                        <div class="text-gray-600 fw-semibold fs-5">
                                            Pricing Table
                                        </div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-xl-4">
                                            <div class="d-flex h-100 align-items-center">
                                                <!--begin::Option-->
                                                <div
                                                    class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                                    <!--begin::Heading-->
                                                    <div class="mb-7 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="text-dark mb-5 fw-bolder">Harian</h1>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="text-center">
                                                            <span class="mb-2 text-primary">Rp.</span>
                                                            <span
                                                                class="fs-3x fw-bold text-primary"
                                                                data-kt-plan-price-month="39"
                                                                data-kt-plan-price-annual="399">10.000</span>
                                                            <span class="fs-7 fw-semibold opacity-50">/
                                                                <span data-kt-element="period">Mon</span></span>
                                                        </div>
                                                        <!--end::Price-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Features-->
                                                    <div class="w-100 mb-10">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Tidak ada Batasan limit Waktu</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Free alat yang berada di gym</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Free Mentor (3 Alat)</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-600 flex-grow-1">Free Minuman</span>
                                                            <i class="ki-duotone ki-cross-circle fs-1 text-danger">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-600 flex-grow-1">Statistik Kalori disertakan</span>
                                                            <i class="ki-duotone ki-cross-circle fs-1 text-danger">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-600 flex-grow-1 pe-3">Dipandu jenis workout yang diprioritaskan</span>
                                                            <i
                                                                class="ki-duotone ki-cross-circle fs-1 text-danger">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Features-->
                                                    <!--begin::Select-->
                                                    <a href="#" class="btn btn-sm btn-primary">Select</a>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Option-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-4">
                                            <div class="d-flex h-100 align-items-center">
                                                <!--begin::Option-->
                                                <div
                                                    class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-20 px-10">
                                                    <!--begin::Heading-->
                                                    <div class="mb-7 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="text-dark mb-5 fw-bolder">Mingguan</h1>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="text-center">
                                                            <span class="mb-2 text-primary">Rp.</span>
                                                            <span
                                                                class="fs-3x fw-bold text-primary"
                                                                data-kt-plan-price-month="339"
                                                                data-kt-plan-price-annual="3399">50.000</span>
                                                            <span class="fs-7 fw-semibold opacity-50">/
                                                                <span data-kt-element="period">Mon</span></span>
                                                        </div>
                                                        <!--end::Price-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Features-->
                                                    <div class="w-100 mb-10">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Tidak ada batasan limit waktu</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Free Alat yang berada di gym</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Free Mentor (Semua alat)</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-600 flex-grow-1 pe-3">Free Minuman</span>
                                                            <i
                                                                class="ki-duotone ki-cross-circle fs-1 text-danger">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-600 flex-grow-1 pe-3">Statisik Kalori disertakan</span>
                                                            <i
                                                                class="ki-duotone ki-cross-circle fs-1 text-danger">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-600 flex-grow-1 pe-3">Dipandu jenis workout yang diprioritaskan</span>
                                                            <i
                                                                class="ki-duotone ki-cross-circle fs-1 text-danger">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Features-->
                                                    <!--begin::Select-->
                                                    <a href="#" class="btn btn-sm btn-primary">Select</a>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Option-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-4">
                                            <div class="d-flex h-100 align-items-center">
                                                <!--begin::Option-->
                                                <div
                                                    class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                                    <!--begin::Heading-->
                                                    <div class="mb-7 text-center">
                                                        <!--begin::Title-->
                                                        <h1 class="text-dark mb-5 fw-bolder">
                                                            Bulanan
                                                        </h1>
                                                        <!--end::Title-->
                                                        <!--begin::Price-->
                                                        <div class="text-center">
                                                            <span class="mb-2 text-primary">Rp.</span>
                                                            <span
                                                                class="fs-3x fw-bold text-primary"
                                                                data-kt-plan-price-month="999"
                                                                data-kt-plan-price-annual="9999">150.000</span>
                                                            <span class="fs-7 fw-semibold opacity-50">/
                                                                <span data-kt-element="period">Mon</span></span>
                                                        </div>
                                                        <!--end::Price-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Features-->
                                                    <div class="w-100 mb-10">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Tidak ada batasan limit waktu</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Free Alat yang berada di gym</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Free Mentor (Semua alat)</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Free Minuman</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Statistik Kalori disertakan</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <span
                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">Dipandu jenis workout yang diprioritaskan</span>
                                                            <i
                                                                class="ki-duotone ki-check-circle fs-1 text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Features-->
                                                    <!--begin::Select-->
                                                    <a href="#" class="btn btn-sm btn-primary">Select</a>
                                                    <!--end::Select-->
                                                </div>
                                                <!--end::Option-->
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Plans-->
                                <!-- end::Pricing -->
                                <!--begin::Section-->
                                <div class="card-body p-lg-17">
                                    <!--begin::Row-->
                                    <div class="row mb-3">
                                        <!--begin::Col-->
                                        <div class="col-md-6 pe-lg-10">
                                            <!--begin::Form-->
                                            <form
                                                action=""
                                                class="form mb-15"
                                                method="post"
                                                id="kt_contact_form">
                                                <h1 class="fw-bold text-dark mb-9">Send Us Email</h1>
                                                <!--begin::Input group-->
                                                <div class="row mb-5">
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="fs-5 fw-semibold mb-2">Name</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input
                                                            type="text"
                                                            class="form-control form-control-solid"
                                                            placeholder=""
                                                            name="name" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-6 fv-row">
                                                        <!--end::Label-->
                                                        <label class="fs-5 fw-semibold mb-2">Email</label>
                                                        <!--end::Label-->
                                                        <!--end::Input-->
                                                        <input
                                                            type="text"
                                                            class="form-control form-control-solid"
                                                            placeholder=""
                                                            name="email" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-5 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="fs-5 fw-semibold mb-2">Subject</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input
                                                        class="form-control form-control-solid"
                                                        placeholder=""
                                                        name="subject" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-10 fv-row">
                                                    <label class="fs-6 fw-semibold mb-2">Message</label>
                                                    <textarea
                                                        class="form-control form-control-solid"
                                                        rows="6"
                                                        name="message"
                                                        placeholder=""></textarea>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Submit-->
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary"
                                                    id="kt_contact_submit_button">
                                                    <!--begin::Indicator label-->
                                                    <span class="indicator-label">Send Feedback</span>
                                                    <!--end::Indicator label-->
                                                    <!--begin::Indicator progress-->
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    <!--end::Indicator progress-->
                                                </button>
                                                <!--end::Submit-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-6 ps-lg-10">
                                            <!--begin::Map-->
                                            <div
                                                id="kt_contact_map"
                                                class="w-100 rounded mb-2 mb-lg-0 mt-2"
                                                style="height: 486px"></div>
                                            <!--end::Map-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row g-5 mb-5 mb-lg-15">
                                        <!--begin::Col-->
                                        <div class="col-sm-6 pe-lg-10">
                                            <!--begin::Phone-->
                                            <div
                                                class="bg-light card-rounded d-flex flex-column flex-center flex-center p-10 h-100">
                                                <!--begin::Icon-->
                                                <i class="ki-duotone ki-briefcase fs-3tx text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Subtitle-->
                                                <h1 class="text-dark fw-bold my-5">Let’s Speak</h1>
                                                <!--end::Subtitle-->
                                                <!--begin::Number-->
                                                <div class="text-gray-700 fw-semibold fs-2">
                                                    1 (833) 597-7538
                                                </div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Phone-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-sm-6 ps-lg-10">
                                            <!--begin::Address-->
                                            <div
                                                class="text-center bg-light card-rounded d-flex flex-column flex-center p-10 h-100">
                                                <!--begin::Icon-->
                                                <i
                                                    class="ki-duotone ki-geolocation fs-3tx text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <!--end::Icon-->
                                                <!--begin::Subtitle-->
                                                <h1 class="text-dark fw-bold my-5">Our Head Office</h1>
                                                <!--end::Subtitle-->
                                                <!--begin::Description-->
                                                <div class="text-gray-700 fs-3 fw-semibold">
                                                    Churchill-laan 16 II, 1052 CD, Amsterdam
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Address-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Card-->
                                    <div class="card mb-4 bg-light text-center">
                                        <!--begin::Body-->
                                        <div class="card-body py-12">
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img
                                                    src="{{ asset('src/media/svg/brand-logos/facebook-4.svg') }}"
                                                    class="h-30px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img
                                                    src="{{ asset('src/media/svg/brand-logos/instagram-2-1.svg') }}"
                                                    class="h-30px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img
                                                    src="{{ asset('src/media/svg/brand-logos/github.svg') }}"
                                                    class="h-30px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img
                                                    src="{{ asset('src/media/svg/brand-logos/behance.svg') }}"
                                                    class="h-30px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img
                                                    src="{{ asset('src/media/svg/brand-logos/pinterest-p.svg') }}"
                                                    class="h-30px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img
                                                    src="{{ asset('src/media/svg/brand-logos/twitter.svg') }}"
                                                    class="h-30px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                            <!--begin::Icon-->
                                            <a href="#" class="mx-4">
                                                <img
                                                    src="{{ asset('src/media/svg/brand-logos/dribbble-icon-1.svg') }}"
                                                    class="h-30px my-2"
                                                    alt="" />
                                            </a>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::About card-->
                    </div>
                    <!--end::Post-->
                </div>
                <!--end::Container-->


                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a
                                href="https://keenthemes.com"
                                target="_blank"
                                class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul
                            class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item">
                                <a
                                    href="https://keenthemes.com"
                                    target="_blank"
                                    class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a
                                    href="https://devs.keenthemes.com"
                                    target="_blank"
                                    class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a
                                    href="https://1.envato.market/EA4JP"
                                    target="_blank"
                                    class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('src/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('src/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('src/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('src/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('src/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('src/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('src/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('src/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('src/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('src/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('src/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>

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