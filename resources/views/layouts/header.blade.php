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
                                <!--begin::Tabs wrapper-->
                                <div class="align-self-end overflow-auto" id="kt_brand_tabs">
                                    <!--begin::Header tabs wrapper-->
                                    <div
                                        class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0"
                                        id="kt_header_tabs"
                                        data-kt-swapper="true"
                                        data-kt-swapper-mode="prepend"
                                        data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
                                        <!--begin::Header tabs-->
                                        <ul class="nav flex-nowrap text-nowrap">
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}"
                                                    data-bs-toggle="tab"
                                                    href="#kt_header_navs_tab_1">Features</a>
                                            </li>
                                            @if(auth()->user()->role->rolename == 'ADMIN')
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link {{ Route::is('users.*', 'roles.*') ? 'active' : '' }}"
                                                    data-bs-toggle="tab"
                                                    href="#kt_header_navs_tab_2">Master</a>
                                            </li>
                                            @endif
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    data-bs-toggle="tab"
                                                    href="#kt_header_navs_tab_3">Applications</a>
                                            </li>
                                            @if(auth()->user()->role->rolename == 'FINANCE')
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    data-bs-toggle="tab"
                                                    href="#kt_header_navs_tab_4">Reports</a>
                                            </li>
                                            @endif
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    data-bs-toggle="tab"
                                                    href="#kt_header_navs_tab_5">Help</a>
                                            </li>
                                        </ul>
                                        <!--begin::Header tabs-->
                                    </div>
                                    <!--end::Header tabs wrapper-->
                                </div>
                                <!--end::Tabs wrapper-->
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
                                            <span
                                                class="text-white opacity-75 fs-8 fw-semibold lh-1 mb-1">{{ auth()->user()->name }}</span>
                                            <span class="text-white fs-8 fw-bold lh-1">{{ auth()->user()->role->rolename }}</span>
                                        </div>
                                        <!--end::Name-->
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-30px symbol-md-40px">
                                            <img src="{{ asset('src/media/avatars/300-1.jpg') }}" alt="image" />
                                        </div>
                                        <!--end::Symbol-->
                                    </div>
                                    <!--end::User info-->
                                    <!--begin::User account menu-->
                                    <div
                                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div
                                                class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img
                                                        alt="Logo"
                                                        src="{{ asset('src/media/avatars/300-1.jpg') }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bold d-flex align-items-center fs-5">
                                                        {{ auth()->user()->name }}
                                                        <span
                                                            class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">{{ auth()->user()->role->rolename }}</span>
                                                    </div>
                                                    <a
                                                        href="#"
                                                        class="fw-semibold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
                                                </div>
                                                <!--end::Username-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a
                                                href="../../demo20/dist/account/overview.html"
                                                class="menu-link px-5">My Profile</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a
                                                href="{{ route('logout') }}"
                                                class="menu-link px-5">Sign Out</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
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
                        class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0 overflow-hidden overflow-lg-visible"
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
                        <!--begin::Container-->
                        <div class="d-lg-flex container-xxl w-100">
                            <!--begin::Wrapper-->
                            <div
                                class="d-lg-flex flex-column justify-content-lg-center w-100"
                                id="kt_header_navs_wrapper">
                                <!--begin::Header tab content-->
                                <div
                                    class="tab-content"
                                    data-kt-scroll="true"
                                    data-kt-scroll-activate="{default: true, lg: false}"
                                    data-kt-scroll-height="auto"
                                    data-kt-scroll-offset="70px">
                                    <!--begin::Tab panel-->
                                    <div
                                        class="tab-pane fade {{ Route::is('dashboard') ? 'active show' : '' }}"
                                        id="kt_header_navs_tab_1">
                                        <!--begin::Menu wrapper-->
                                        <div
                                            class="header-menu flex-column align-items-stretch flex-lg-row">
                                            <!--begin::Menu-->
                                            <div
                                                class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold align-items-stretch flex-grow-1 px-2 px-lg-0"
                                                id="#kt_header_menu"
                                                data-kt-menu="true">
                                                <!--begin:Menu item-->
                                                <a href="{{ route('dashboard') }}"
                                                    class="menu-item {{ Route::is('dashboard') ? 'here show menu-here-bg' : '' }} menu-lg-down-accordion me-0 me-lg-2">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Dashboards</span>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </span>
                                                    <!--end:Menu link-->
                                                </a>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-placement="bottom-start"
                                                    class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Pages</span>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                                                        <!--begin:Pages menu-->
                                                        <div class="menu-active-bg px-4 px-lg-0">
                                                            <!--begin:Tabs nav-->
                                                            <div class="d-flex w-100 overflow-auto">
                                                                <ul
                                                                    class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                                    <!--begin:Nav item-->
                                                                    <li class="nav-item mx-lg-1">
                                                                        <a
                                                                            class="nav-link py-3 py-lg-6 active text-active-primary"
                                                                            href="#"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#kt_app_header_menu_pages_pages">General</a>
                                                                    </li>
                                                                    <!--end:Nav item-->
                                                                    <!--begin:Nav item-->
                                                                    <li class="nav-item mx-lg-1">
                                                                        <a
                                                                            class="nav-link py-3 py-lg-6 text-active-primary"
                                                                            href="#"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#kt_app_header_menu_pages_account">Account</a>
                                                                    </li>
                                                                    <!--end:Nav item-->
                                                                    <!--begin:Nav item-->
                                                                    <li class="nav-item mx-lg-1">
                                                                        <a
                                                                            class="nav-link py-3 py-lg-6 text-active-primary"
                                                                            href="#"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#kt_app_header_menu_pages_authentication">Authentication</a>
                                                                    </li>
                                                                    <!--end:Nav item-->
                                                                    <!--begin:Nav item-->
                                                                    <li class="nav-item mx-lg-1">
                                                                        <a
                                                                            class="nav-link py-3 py-lg-6 text-active-primary"
                                                                            href="#"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#kt_app_header_menu_pages_utilities">Utilities</a>
                                                                    </li>
                                                                    <!--end:Nav item-->
                                                                    <!--begin:Nav item-->
                                                                    <li class="nav-item mx-lg-1">
                                                                        <a
                                                                            class="nav-link py-3 py-lg-6 text-active-primary"
                                                                            href="#"
                                                                            data-bs-toggle="tab"
                                                                            data-bs-target="#kt_app_header_menu_pages_widgets">Widgets</a>
                                                                    </li>
                                                                    <!--end:Nav item-->
                                                                </ul>
                                                            </div>
                                                            <!--end:Tabs nav-->
                                                            <!--begin:Tab content-->
                                                            <div class="tab-content py-4 py-lg-8 px-lg-7">
                                                                <!--begin:Tab pane-->
                                                                <div
                                                                    class="tab-pane active w-lg-1000px"
                                                                    id="kt_app_header_menu_pages_pages">
                                                                    <!--begin:Row-->
                                                                    <div class="row">
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-8">
                                                                            <!--begin:Row-->
                                                                            <div class="row">
                                                                                <!--begin:Col-->
                                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                                    <!--begin:Menu heading-->
                                                                                    <h4
                                                                                        class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                        User Profile
                                                                                    </h4>
                                                                                    <!--end:Menu heading-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/pages/user-profile/overview.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Overview</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/pages/user-profile/projects.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Projects</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/pages/user-profile/campaigns.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Campaigns</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/pages/user-profile/documents.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Documents</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/pages/user-profile/followers.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Followers</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/pages/user-profile/activity.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Activity</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                </div>
                                                                                <!--end:Col-->
                                                                                <!--begin:Col-->
                                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-6">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            Corporate
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/about.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">About</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/team.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Our Team</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/contact.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Contact Us</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/licenses.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Licenses</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/sitemap.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Sitemap</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-0">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            Careers
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/careers/list.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Careers List</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/careers/apply.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Careers Apply</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                </div>
                                                                                <!--end:Col-->
                                                                                <!--begin:Col-->
                                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-6">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            FAQ
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/faq/classic.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">FAQ Classic</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/faq/extended.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">FAQ Extended</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-6">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            Blog
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/blog/home.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Blog Home</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/blog/post.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Blog Post</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-0">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            Pricing
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/pricing.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Column Pricing</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/pricing/table.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Table Pricing</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                </div>
                                                                                <!--end:Col-->
                                                                                <!--begin:Col-->
                                                                                <div class="col-lg-3 mb-6 mb-lg-0">
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-0">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            Social
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/social/feeds.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Feeds</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/social/activity.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Activty</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/social/followers.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Followers</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/pages/social/settings.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Settings</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                </div>
                                                                                <!--end:Col-->
                                                                            </div>
                                                                            <!--end:Row-->
                                                                        </div>
                                                                        <!--end:Col-->
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-4">
                                                                            <img
                                                                                src="{{ asset('src/media/stock/600x600/img-82.jpg') }}"
                                                                                class="rounded mw-100"
                                                                                alt="" />
                                                                        </div>
                                                                        <!--end:Col-->
                                                                    </div>
                                                                    <!--end:Row-->
                                                                </div>
                                                                <!--end:Tab pane-->
                                                                <!--begin:Tab pane-->
                                                                <div
                                                                    class="tab-pane w-lg-600px"
                                                                    id="kt_app_header_menu_pages_account">
                                                                    <!--begin:Row-->
                                                                    <div class="row">
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-5 mb-6 mb-lg-0">
                                                                            <!--begin:Row-->
                                                                            <div class="row">
                                                                                <!--begin:Col-->
                                                                                <div class="col-lg-6">
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/account/overview.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Overview</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/account/settings.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Settings</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/account/security.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Security</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/account/activity.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Activity</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/account/billing.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Billing</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                </div>
                                                                                <!--end:Col-->
                                                                                <!--begin:Col-->
                                                                                <div class="col-lg-6">
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/account/statements.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Statements</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/account/referrals.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Referrals</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/account/api-keys.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">API Keys</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                    <!--begin:Menu item-->
                                                                                    <div class="menu-item p-0 m-0">
                                                                                        <!--begin:Menu link-->
                                                                                        <a
                                                                                            href="../../demo20/dist/account/logs.html"
                                                                                            class="menu-link">
                                                                                            <span class="menu-title">Logs</span>
                                                                                        </a>
                                                                                        <!--end:Menu link-->
                                                                                    </div>
                                                                                    <!--end:Menu item-->
                                                                                </div>
                                                                                <!--end:Col-->
                                                                            </div>
                                                                            <!--end:Row-->
                                                                        </div>
                                                                        <!--end:Col-->
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-7">
                                                                            <img
                                                                                src="{{ asset('src/media/stock/900x600/46.jpg') }}"
                                                                                class="rounded mw-100"
                                                                                alt="" />
                                                                        </div>
                                                                        <!--end:Col-->
                                                                    </div>
                                                                    <!--end:Row-->
                                                                </div>
                                                                <!--end:Tab pane-->
                                                                <!--begin:Tab pane-->
                                                                <div
                                                                    class="tab-pane w-lg-1000px"
                                                                    id="kt_app_header_menu_pages_authentication">
                                                                    <!--begin:Row-->
                                                                    <div class="row">
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                                            <!--begin:Menu section-->
                                                                            <div class="mb-6">
                                                                                <!--begin:Menu heading-->
                                                                                <h4
                                                                                    class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                    Corporate Layout
                                                                                </h4>
                                                                                <!--end:Menu heading-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/corporate/sign-in.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Sign-In</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/corporate/sign-up.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Sign-Up</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/corporate/two-factor.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Two-Factor</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/corporate/reset-password.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Reset Password</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/corporate/new-password.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">New Password</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                            </div>
                                                                            <!--end:Menu section-->
                                                                            <!--begin:Menu section-->
                                                                            <div class="mb-0">
                                                                                <!--begin:Menu heading-->
                                                                                <h4
                                                                                    class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                    Overlay Layout
                                                                                </h4>
                                                                                <!--end:Menu heading-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/overlay/sign-in.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Sign-In</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/overlay/sign-up.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Sign-Up</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/overlay/two-factor.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Two-Factor</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/overlay/reset-password.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Reset Password</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/overlay/new-password.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">New Password</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                            </div>
                                                                            <!--end:Menu section-->
                                                                        </div>
                                                                        <!--end:Col-->
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                                            <!--begin:Menu section-->
                                                                            <div class="mb-6">
                                                                                <!--begin:Menu heading-->
                                                                                <h4
                                                                                    class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                    Creative Layout
                                                                                </h4>
                                                                                <!--end:Menu heading-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/creative/sign-in.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Sign-in</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/creative/sign-up.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Sign-up</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/creative/two-factor.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Two-Factor</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/creative/reset-password.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Reset Password</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/creative/new-password.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">New Password</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                            </div>
                                                                            <!--end:Menu section-->
                                                                            <!--begin:Menu section-->
                                                                            <div class="mb-6">
                                                                                <!--begin:Menu heading-->
                                                                                <h4
                                                                                    class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                    Fancy Layout
                                                                                </h4>
                                                                                <!--end:Menu heading-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/fancy/sign-in.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Sign-In</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/fancy/sign-up.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Sign-Up</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/fancy/two-factor.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Two-Factor</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/fancy/reset-password.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Reset Password</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/layouts/fancy/new-password.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">New Password</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                            </div>
                                                                            <!--end:Menu section-->
                                                                        </div>
                                                                        <!--end:Col-->
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                                            <!--begin:Menu section-->
                                                                            <div class="mb-0">
                                                                                <!--begin:Menu heading-->
                                                                                <h4
                                                                                    class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                    General
                                                                                </h4>
                                                                                <!--end:Menu heading-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/extended/multi-steps-sign-up.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Multi-Steps Sign-Up</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/general/welcome.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Welcome Message</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/general/verify-email.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Verify Email</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/general/coming-soon.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Coming Soon</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/general/password-confirmation.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Password Confirmation</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/general/account-deactivated.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Account Deactivation</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/general/error-404.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Error 404</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/general/error-500.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Error 500</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                            </div>
                                                                            <!--end:Menu section-->
                                                                        </div>
                                                                        <!--end:Col-->
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-3 mb-6 mb-lg-0">
                                                                            <!--begin:Menu section-->
                                                                            <div class="mb-0">
                                                                                <!--begin:Menu heading-->
                                                                                <h4
                                                                                    class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                    Email Templates
                                                                                </h4>
                                                                                <!--end:Menu heading-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/email/welcome-message.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Welcome Message</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/email/reset-password.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Reset Password</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/email/subscription-confirmed.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Subscription Confirmed</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/email/card-declined.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Credit Card Declined</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/email/promo-1.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Promo 1</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/email/promo-2.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Promo 2</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                                <!--begin:Menu item-->
                                                                                <div class="menu-item p-0 m-0">
                                                                                    <!--begin:Menu link-->
                                                                                    <a
                                                                                        href="../../demo20/dist/authentication/email/promo-3.html"
                                                                                        class="menu-link">
                                                                                        <span class="menu-title">Promo 3</span>
                                                                                    </a>
                                                                                    <!--end:Menu link-->
                                                                                </div>
                                                                                <!--end:Menu item-->
                                                                            </div>
                                                                            <!--end:Menu section-->
                                                                        </div>
                                                                        <!--end:Col-->
                                                                    </div>
                                                                    <!--end:Row-->
                                                                </div>
                                                                <!--end:Tab pane-->
                                                                <!--begin:Tab pane-->
                                                                <div
                                                                    class="tab-pane w-lg-1000px"
                                                                    id="kt_app_header_menu_pages_utilities">
                                                                    <!--begin:Row-->
                                                                    <div class="row">
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-7">
                                                                            <!--begin:Row-->
                                                                            <div class="row">
                                                                                <!--begin:Col-->
                                                                                <div class="col-lg-4 mb-6 mb-lg-0">
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-0">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            General Modals
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/general/invite-friends.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Invite Friends</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/general/view-users.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">View Users</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/general/select-users.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Select Users</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/general/upgrade-plan.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Upgrade Plan</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/general/share-earn.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Share & Earn</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/forms/new-target.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">New Target</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/forms/new-card.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">New Card</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/forms/new-address.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">New Address</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/forms/create-api-key.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Create API Key</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/forms/bidding.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Bidding</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                </div>
                                                                                <!--end:Col-->
                                                                                <!--begin:Col-->
                                                                                <div class="col-lg-4 mb-6 mb-lg-0">
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-6">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            Advanced Modals
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/wizards/create-app.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Create App</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/wizards/create-campaign.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Create Campaign</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/wizards/create-account.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Create Business Acc</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/wizards/create-project.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Create Project</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/wizards/top-up-wallet.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Top Up Wallet</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/wizards/offer-a-deal.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Offer a Deal</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/wizards/two-factor-authentication.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Two Factor Auth</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-0">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            Search
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/search/horizontal.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Horizontal</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/search/vertical.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Vertical</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/search/users.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Users</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/search/select-location.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Select Location</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                </div>
                                                                                <!--end:Col-->
                                                                                <!--begin:Col-->
                                                                                <div class="col-lg-4 mb-6 mb-lg-0">
                                                                                    <!--begin:Menu section-->
                                                                                    <div class="mb-0">
                                                                                        <!--begin:Menu heading-->
                                                                                        <h4
                                                                                            class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">
                                                                                            Wizards
                                                                                        </h4>
                                                                                        <!--end:Menu heading-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/wizards/horizontal.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Horizontal</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/wizards/vertical.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Vertical</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/wizards/two-factor-authentication.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Two Factor Auth</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/wizards/create-app.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Create App</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/wizards/create-campaign.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Create Campaign</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/wizards/create-account.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Create Account</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/wizards/create-project.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Create Project</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/modals/wizards/top-up-wallet.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Top Up Wallet</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                        <!--begin:Menu item-->
                                                                                        <div class="menu-item p-0 m-0">
                                                                                            <!--begin:Menu link-->
                                                                                            <a
                                                                                                href="../../demo20/dist/utilities/wizards/offer-a-deal.html"
                                                                                                class="menu-link">
                                                                                                <span class="menu-title">Offer a Deal</span>
                                                                                            </a>
                                                                                            <!--end:Menu link-->
                                                                                        </div>
                                                                                        <!--end:Menu item-->
                                                                                    </div>
                                                                                    <!--end:Menu section-->
                                                                                </div>
                                                                                <!--end:Col-->
                                                                            </div>
                                                                            <!--end:Row-->
                                                                        </div>
                                                                        <!--end:Col-->
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-5 pe-lg-5">
                                                                            <img
                                                                                src="{{ asset('src/media/stock/600x600/img-84.jpg') }}"
                                                                                class="rounded mw-100"
                                                                                alt="" />
                                                                        </div>
                                                                        <!--end:Col-->
                                                                    </div>
                                                                    <!--end:Row-->
                                                                </div>
                                                                <!--end:Tab pane-->
                                                                <!--begin:Tab pane-->
                                                                <div
                                                                    class="tab-pane w-lg-500px"
                                                                    id="kt_app_header_menu_pages_widgets">
                                                                    <!--begin:Row-->
                                                                    <div class="row">
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-4 mb-6 mb-lg-0">
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a
                                                                                    href="../../demo20/dist/widgets/lists.html"
                                                                                    class="menu-link">
                                                                                    <span class="menu-title">Lists</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a
                                                                                    href="../../demo20/dist/widgets/statistics.html"
                                                                                    class="menu-link">
                                                                                    <span class="menu-title">Statistics</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a
                                                                                    href="../../demo20/dist/widgets/charts.html"
                                                                                    class="menu-link">
                                                                                    <span class="menu-title">Charts</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a
                                                                                    href="../../demo20/dist/widgets/mixed.html"
                                                                                    class="menu-link">
                                                                                    <span class="menu-title">Mixed</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a
                                                                                    href="../../demo20/dist/widgets/tables.html"
                                                                                    class="menu-link">
                                                                                    <span class="menu-title">Tables</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a
                                                                                    href="../../demo20/dist/widgets/feeds.html"
                                                                                    class="menu-link">
                                                                                    <span class="menu-title">Feeds</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Col-->
                                                                        <!--begin:Col-->
                                                                        <div class="col-lg-8">
                                                                            <img
                                                                                src="{{ asset('src/media/stock/900x600/44.jpg') }}"
                                                                                class="rounded mw-100"
                                                                                alt="" />
                                                                        </div>
                                                                        <!--end:Col-->
                                                                    </div>
                                                                    <!--end:Row-->
                                                                </div>
                                                                <!--end:Tab pane-->
                                                            </div>
                                                            <!--end:Tab content-->
                                                        </div>
                                                        <!--end:Pages menu-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-placement="bottom-start"
                                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Apps</span>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px">
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-rocket fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Projects</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/projects/list.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">My Projects</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/projects/project.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">View Project</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/projects/targets.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Targets</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/projects/budget.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Budget</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/projects/users.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Users</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/projects/files.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Files</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/projects/activity.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Activity</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/projects/settings.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Settings</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-handcart fs-2"></i>
                                                                </span>
                                                                <span class="menu-title">eCommerce</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div
                                                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                                    data-kt-menu-placement="right-start"
                                                                    class="menu-item menu-lg-down-accordion">
                                                                    <!--begin:Menu link-->
                                                                    <span class="menu-link py-3">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Catalog</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                    <!--end:Menu link-->
                                                                    <!--begin:Menu sub-->
                                                                    <div
                                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/catalog/products.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Products</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/catalog/categories.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Categories</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/catalog/add-product.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Add Product</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/catalog/edit-product.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Edit Product</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/catalog/add-category.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Add Category</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/catalog/edit-category.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Edit Category</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu sub-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div
                                                                    data-kt-menu-trigger="click"
                                                                    class="menu-item menu-accordion menu-sub-indention">
                                                                    <!--begin:Menu link-->
                                                                    <span class="menu-link py-3">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Sales</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                    <!--end:Menu link-->
                                                                    <!--begin:Menu sub-->
                                                                    <div class="menu-sub menu-sub-accordion">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/sales/listing.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Orders Listing</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/sales/details.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Order Details</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/sales/add-order.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Add Order</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/sales/edit-order.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Edit Order</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu sub-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div
                                                                    data-kt-menu-trigger="click"
                                                                    class="menu-item menu-accordion menu-sub-indention">
                                                                    <!--begin:Menu link-->
                                                                    <span class="menu-link py-3">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Customers</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                    <!--end:Menu link-->
                                                                    <!--begin:Menu sub-->
                                                                    <div class="menu-sub menu-sub-accordion">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/customers/listing.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Customers Listing</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/customers/details.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Customers Details</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu sub-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div
                                                                    data-kt-menu-trigger="click"
                                                                    class="menu-item menu-accordion menu-sub-indention">
                                                                    <!--begin:Menu link-->
                                                                    <span class="menu-link py-3">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Reports</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                    <!--end:Menu link-->
                                                                    <!--begin:Menu sub-->
                                                                    <div class="menu-sub menu-sub-accordion">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/reports/view.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Products Viewed</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/reports/sales.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Sales</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/reports/returns.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Returns</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/reports/customer-orders.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Customer Orders</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/ecommerce/reports/shipping.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Shipping</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu sub-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/ecommerce/settings.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Settings</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-chart fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Support Center</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/support-center/overview.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Overview</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div
                                                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                                    data-kt-menu-placement="right-start"
                                                                    class="menu-item menu-lg-down-accordion">
                                                                    <!--begin:Menu link-->
                                                                    <span class="menu-link py-3">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Tickets</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                    <!--end:Menu link-->
                                                                    <!--begin:Menu sub-->
                                                                    <div
                                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/support-center/tickets/list.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Ticket List</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/support-center/tickets/view.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Ticket View</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu sub-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div
                                                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                                    data-kt-menu-placement="right-start"
                                                                    class="menu-item menu-lg-down-accordion">
                                                                    <!--begin:Menu link-->
                                                                    <span class="menu-link py-3">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Tutorials</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                    <!--end:Menu link-->
                                                                    <!--begin:Menu sub-->
                                                                    <div
                                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/support-center/tutorials/list.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Tutorials List</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/support-center/tutorials/post.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Tutorials Post</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu sub-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/support-center/faq.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">FAQ</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/support-center/licenses.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Licenses</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/support-center/contact.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Contact Us</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-shield-tick fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">User Management</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div
                                                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                                    data-kt-menu-placement="right-start"
                                                                    class="menu-item menu-lg-down-accordion">
                                                                    <!--begin:Menu link-->
                                                                    <span class="menu-link py-3">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Users</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                    <!--end:Menu link-->
                                                                    <!--begin:Menu sub-->
                                                                    <div
                                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/user-management/users/list.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Users List</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/user-management/users/view.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">View User</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu sub-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div
                                                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                                    data-kt-menu-placement="right-start"
                                                                    class="menu-item menu-lg-down-accordion">
                                                                    <!--begin:Menu link-->
                                                                    <span class="menu-link py-3">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Roles</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                    <!--end:Menu link-->
                                                                    <!--begin:Menu sub-->
                                                                    <div
                                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/user-management/roles/list.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Roles List</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/user-management/roles/view.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">View Roles</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu sub-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/user-management/permissions.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Permissions</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-phone fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Contacts</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/contacts/getting-started.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Getting Started</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/contacts/add-contact.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Add Contact</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/contacts/edit-contact.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Edit Contact</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/contacts/view-contact.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">View Contact</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-basket fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Subscriptions</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/subscriptions/getting-started.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Getting Started</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/subscriptions/list.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Subscription List</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/subscriptions/add.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Add Subscription</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/subscriptions/view.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">View Subscription</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-briefcase fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Customers</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/customers/getting-started.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Getting Started</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/customers/list.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Customer Listing</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/customers/view.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Customer Details</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-credit-cart fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Invoice Management</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div
                                                                    data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                                    data-kt-menu-placement="right-start"
                                                                    class="menu-item menu-lg-down-accordion">
                                                                    <!--begin:Menu link-->
                                                                    <span class="menu-link py-3">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Profile</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </span>
                                                                    <!--end:Menu link-->
                                                                    <!--begin:Menu sub-->
                                                                    <div
                                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/invoices/view/invoice-1.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Invoice 1</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/invoices/view/invoice-2.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Invoice 2</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item">
                                                                            <!--begin:Menu link-->
                                                                            <a
                                                                                class="menu-link py-3"
                                                                                href="../../demo20/dist/apps/invoices/view/invoice-3.html">
                                                                                <span class="menu-bullet">
                                                                                    <span
                                                                                        class="bullet bullet-dot"></span>
                                                                                </span>
                                                                                <span class="menu-title">Invoice 3</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Menu sub-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/invoices/create.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Create Invoice</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-file-added fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">File Manager</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/file-manager/folders.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Folders</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/file-manager/files.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Files</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/file-manager/blank.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Blank Directory</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/file-manager/settings.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Settings</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-sms fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Inbox</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/inbox/listing.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Messages</span>
                                                                        <span class="menu-badge">
                                                                            <span class="badge badge-light-success">3</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/inbox/compose.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Compose</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/inbox/reply.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">View & Reply</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div
                                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                                            data-kt-menu-placement="right-start"
                                                            class="menu-item menu-lg-down-accordion">
                                                            <!--begin:Menu link-->
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i
                                                                        class="ki-duotone ki-message-text-2 fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Chat</span>
                                                                <span class="menu-arrow"></span>
                                                            </span>
                                                            <!--end:Menu link-->
                                                            <!--begin:Menu sub-->
                                                            <div
                                                                class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/chat/private.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Private Chat</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/chat/group.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Group Chat</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item">
                                                                    <!--begin:Menu link-->
                                                                    <a
                                                                        class="menu-link py-3"
                                                                        href="../../demo20/dist/apps/chat/drawer.html">
                                                                        <span class="menu-bullet">
                                                                            <span class="bullet bullet-dot"></span>
                                                                        </span>
                                                                        <span class="menu-title">Drawer Chat</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Menu sub-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a
                                                                class="menu-link py-3"
                                                                href="../../demo20/dist/apps/calendar.html">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-calendar-8 fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                        <span class="path5"></span>
                                                                        <span class="path6"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Calendar</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div
                                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                                    data-kt-menu-placement="bottom-start"
                                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Help</span>
                                                        <span class="menu-arrow d-lg-none"></span>
                                                    </span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div
                                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a
                                                                class="menu-link py-3"
                                                                href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                                                target="_blank"
                                                                title="Check out over 200 in-house components, plugins and ready for use solutions"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-trigger="hover"
                                                                data-bs-dismiss="click"
                                                                data-bs-placement="right">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-rocket fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Components</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a
                                                                class="menu-link py-3"
                                                                href="https://preview.keenthemes.com/html/metronic/docs"
                                                                target="_blank"
                                                                title="Check out the complete documentation"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-trigger="hover"
                                                                data-bs-dismiss="click"
                                                                data-bs-placement="right">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-abstract-26 fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Documentation</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a
                                                                class="menu-link py-3"
                                                                href="https://preview.keenthemes.com/metronic8/demo20/layout-builder.html"
                                                                title="Build your layout and export HTML for server side integration"
                                                                data-bs-toggle="tooltip"
                                                                data-bs-trigger="hover"
                                                                data-bs-dismiss="click"
                                                                data-bs-placement="right">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-switch fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Layout Builder</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a
                                                                class="menu-link py-3"
                                                                href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                                                target="_blank">
                                                                <span class="menu-icon">
                                                                    <i class="ki-duotone ki-code fs-2">
                                                                        <span class="path1"></span>
                                                                        <span class="path2"></span>
                                                                        <span class="path3"></span>
                                                                        <span class="path4"></span>
                                                                    </i>
                                                                </span>
                                                                <span class="menu-title">Changelog v8.2.0</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade {{ Route::is('users.*', 'roles.*') ? 'active show' : '' }} " id="kt_header_navs_tab_2">
                                        <!--begin::Wrapper-->
                                        <div
                                            class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                            <div class="d-flex flex-column flex-lg-row gap-2">
                                                <a
                                                    class="btn btn-sm btn-light-primary fw-bold {{ Route::is('users.*') ? 'active' : '' }}"
                                                    href="{{ route('users.index') }}">Users</a>
                                                <a
                                                    class="btn btn-sm btn-light-success fw-bold {{ Route::is('roles.*') ? 'active' : '' }}"
                                                    href="{{ route('roles.index') }}">Roles</a>
                                            </div>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_header_navs_tab_3">
                                        <!--begin::Wrapper-->
                                        <div
                                            class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                            <div class="d-flex flex-column flex-lg-row gap-2">
                                                <a
                                                    class="btn btn-sm btn-light-primary fw-bold"
                                                    href="../../demo20/dist/apps/user-management/users/list.html">User Management</a>
                                                <a
                                                    class="btn btn-sm btn-light-success fw-bold"
                                                    href="../../demo20/dist/apps/inbox/listing.html">Inbox</a>
                                                <a
                                                    class="btn btn-sm btn-light-danger fw-bold"
                                                    href="../../demo20/dist/apps/file-manager/folders.html">File Manager</a>
                                            </div>
                                            <div class="d-flex flex-column flex-lg-row gap-2">
                                                <a
                                                    class="btn btn-sm btn-light-info fw-bold"
                                                    href="../../demo20/dist/apps/subscriptions/view.html">More Apps</a>
                                            </div>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_header_navs_tab_4">
                                        <!--begin::Wrapper-->
                                        <div
                                            class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                            <div class="d-flex flex-column flex-lg-row gap-2">
                                                <a
                                                    class="btn btn-sm btn-light-primary fw-bold"
                                                    href="../../demo20/dist/apps/ecommerce/catalog/products.html">Laporan Keuangan</a>
                                            </div>
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
                                </div>
                                <!--end::Header tab content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header navs-->
                </div>
                <!--end::Header-->