<html lang="en" data-bs-theme="light"><!--begin::Head-->
<head>
    <base href="../">
    <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
    <meta charset="utf-8">
    <meta name="description"
          content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony &amp; Laravel versions. Grab your copy now and get life-time updates for free.">
    <meta name="keywords"
          content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony &amp; Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title"
          content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme &amp; Template">
    <meta property="og:url" content="https://keenthemes.com/metronic">
    <meta property="og:site_name" content="Keenthemes | Metronic">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8">
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico')}}">
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet" type="text/css">
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->
@include('auth_pages.dashboard.style')
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->

<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
        @include('auth_pages.dashboard.header')
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                 data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                 data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                 data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Logo-->
                <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                    <!--begin::Logo image-->
                    <a href="../../demo1/dist/index.html">
                        <img alt="Logo" src="{{asset('assets/media/logos/default-dark.svg')}}"
                             class="h-25px app-sidebar-logo-default">
                        <img alt="Logo" src="{{asset('assets/media/logos/default-small.svg')}}"
                             class="h-20px app-sidebar-logo-minimize">
                    </a>
                    <!--end::Logo image-->
                    <!--begin::Sidebar toggle-->
                    <div id="kt_app_sidebar_toggle"
                         class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                         data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                         data-kt-toggle-name="app-sidebar-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                        <span class="svg-icon svg-icon-2 rotate-180">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.5"
                                              d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                              fill="currentColor"></path>
										<path
                                            d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                            fill="currentColor"></path>
									</svg>
								</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Sidebar toggle-->
                </div>
                <!--end::Logo-->
                <!--begin::sidebar menu-->
                @include('auth_pages.dashboard.sidebar')
                <!--end::sidebar menu-->
                <!--begin::Footer-->

                <!--end::Footer-->
            </div>
            <!--end::Sidebar-->
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <!--begin::Title-->
                                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                    Online Courses</h1>
                                <!--end::Title-->
                                <!--begin::Breadcrumb-->
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">
                                        <a href="../../demo1/dist/index.html"
                                           class="text-muted text-hover-primary">Home</a>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">Dashboards</li>
                                    <!--end::Item-->
                                </ul>
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page title-->

                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10">
                                <!--begin::Col-->
                                <div class="col-xl-4 mb-xl-10">
                                    <!--begin::Lists Widget 19-->
                                    <div class="card card-flush h-xl-100">
                                        <!--begin::Heading-->
                                        <div
                                            class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                                            style="background-image:url('assets/media/svg/shapes/top-green.png"
                                            data-bs-theme="light">
                                            <!--begin::Title-->
                                            <h3 class="card-title align-items-start flex-column text-white pt-15">
                                                <span class="fw-bold fs-2x mb-3">My Tasks</span>
                                                <div class="fs-4 text-white">
                                                    <span class="opacity-75">You have</span>
                                                    <span class="position-relative d-inline-block">
																<a href="../../demo1/dist/pages/user-profile/projects.html"
                                                                   class="link-white opacity-75-hover fw-bold d-block mb-1">4 tasks</a>
                                                        <!--begin::Separator-->
																<span
                                                                    class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                                        <!--end::Separator-->
															</span>
                                                    <span class="opacity-75">to comlete</span>
                                                </div>
                                            </h3>
                                            <!--end::Title-->
                                            <!--begin::Toolbar-->
                                            <div class="card-toolbar pt-5">
                                                <!--begin::Menu-->
                                                <button
                                                    class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                    data-kt-menu-overflow="true">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                                    <span class="svg-icon svg-icon-4">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect x="10" y="10" width="4" height="4" rx="2"
                                                                          fill="currentColor"></rect>
																	<rect x="17" y="10" width="4" height="4" rx="2"
                                                                          fill="currentColor"></rect>
																	<rect x="3" y="10" width="4" height="4" rx="2"
                                                                          fill="currentColor"></rect>
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--begin::Menu 2-->
                                                <div
                                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                    data-kt-menu="true">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick
                                                            Actions
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator mb-3 opacity-75"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Ticket</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Customer</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                         data-kt-menu-placement="right-start">
                                                        <!--begin::Menu item-->
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">New Group</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Admin Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Staff Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">Member Group</a>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">New Contact</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator mt-3 opacity-75"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3 py-3">
                                                            <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                                Reports</a>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 2-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="card-body mt-n20">
                                            <!--begin::Stats-->
                                            <div class="mt-n20 position-relative">
                                                <!--begin::Row-->
                                                <div class="row g-3 g-lg-6">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Items-->
                                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px me-5 mb-8">
																		<span class="symbol-label">
																			<!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
																			<span
                                                                                class="svg-icon svg-icon-1 svg-icon-primary">
																				<svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
																					<path opacity="0.3"
                                                                                          d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z"
                                                                                          fill="currentColor"></path>
																					<path
                                                                                        d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z"
                                                                                        fill="currentColor"></path>
																				</svg>
																			</span>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Stats-->
                                                            <div class="m-0">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
                                                                <!--end::Number-->
                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-6">Courses</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Items-->
                                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px me-5 mb-8">
																		<span class="symbol-label">
																			<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																			<span
                                                                                class="svg-icon svg-icon-1 svg-icon-primary">
																				<svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
																					<path
                                                                                        d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                                                                        fill="currentColor"></path>
																					<path opacity="0.3"
                                                                                          d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                                                                          fill="currentColor"></path>
																				</svg>
																			</span>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Stats-->
                                                            <div class="m-0">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
                                                                <!--end::Number-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-6">Certificates</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Items-->
                                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px me-5 mb-8">
																		<span class="symbol-label">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
																			<span
                                                                                class="svg-icon svg-icon-1 svg-icon-primary">
																				<svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
																					<path
                                                                                        d="M14 18V16H10V18L9 20H15L14 18Z"
                                                                                        fill="currentColor"></path>
																					<path opacity="0.3"
                                                                                          d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z"
                                                                                          fill="currentColor"></path>
																				</svg>
																			</span>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Stats-->
                                                            <div class="m-0">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
                                                                <!--end::Number-->
                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-500 fw-semibold fs-6">Avg. Score</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Items-->
                                                        <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px me-5 mb-8">
																		<span class="symbol-label">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																			<span
                                                                                class="svg-icon svg-icon-1 svg-icon-primary">
																				<svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
																					<path opacity="0.3"
                                                                                          d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                                                                          fill="currentColor"></path>
																					<path
                                                                                        d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                                                                        fill="currentColor"></path>
																				</svg>
																			</span>
                                                                            <!--end::Svg Icon-->
																		</span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Stats-->
                                                            <div class="m-0">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">822</span>
                                                                <!--end::Number-->
                                                                <!--begin::Desc-->
                                                                <span class="text-gray-500 fw-semibold fs-6">Hours Learned</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Items-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Lists Widget 19-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-8 mb-5 mb-xl-10">
                                    <!--begin::Row-->
                                    <div class="row g-5 g-xl-10">
                                        <!--begin::Col-->
                                        <div class="col-xl-6 mb-xl-10">
                                            <!--begin::Slider Widget 1-->
                                            <div id="kt_sliders_widget_1_slider"
                                                 class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                                                 data-bs-ride="carousel" data-bs-interval="5000">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5">
                                                    <!--begin::Title-->
                                                    <h4 class="card-title d-flex align-items-start flex-column">
                                                        <span
                                                            class="card-label fw-bold text-gray-800">Today’s Course</span>
                                                        <span class="text-gray-400 mt-1 fw-bold fs-7">4 lessons, 3 hours 45 minutes</span>
                                                    </h4>
                                                    <!--end::Title-->
                                                    <!--begin::Toolbar-->
                                                    <div class="card-toolbar">
                                                        <!--begin::Carousel Indicators-->
                                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                                            <li data-bs-target="#kt_sliders_widget_1_slider"
                                                                data-bs-slide-to="0" class="ms-1 active"
                                                                aria-current="true"></li>
                                                            <li data-bs-target="#kt_sliders_widget_1_slider"
                                                                data-bs-slide-to="1" class="ms-1"></li>
                                                            <li data-bs-target="#kt_sliders_widget_1_slider"
                                                                data-bs-slide-to="2" class="ms-1"></li>
                                                        </ol>
                                                        <!--end::Carousel Indicators-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body py-6">
                                                    <!--begin::Carousel-->
                                                    <div class="carousel-inner mt-n5">
                                                        <!--begin::Item-->
                                                        <div class="carousel-item show active">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-5">
                                                                <!--begin::Chart-->
                                                                <div class="w-80px flex-shrink-0 me-2">
                                                                    <div class="min-h-auto ms-n3 initialized"
                                                                         id="kt_slider_widget_1_chart_1"
                                                                         style="height: 100px; min-height: 101px;">
                                                                        <div id="apexchartsglp0bib8"
                                                                             class="apexcharts-canvas apexchartsglp0bib8 apexcharts-theme-light"
                                                                             style="width: 90px; height: 101px;">
                                                                            <svg id="SvgjsSvg1824" width="90"
                                                                                 height="100.99999999999999"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 version="1.1"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 xmlns:svgjs="http://svgjs.dev"
                                                                                 class="apexcharts-svg"
                                                                                 xmlns:data="ApexChartsNS"
                                                                                 transform="translate(0, 0)"
                                                                                 style="background: transparent;">
                                                                                <g id="SvgjsG1826"
                                                                                   class="apexcharts-inner apexcharts-graphical"
                                                                                   transform="translate(-5, 0)">
                                                                                    <defs id="SvgjsDefs1825">
                                                                                        <clipPath
                                                                                            id="gridRectMaskglp0bib8">
                                                                                            <rect id="SvgjsRect1828"
                                                                                                  width="106"
                                                                                                  height="102" x="-3"
                                                                                                  y="-1" rx="0" ry="0"
                                                                                                  opacity="1"
                                                                                                  stroke-width="0"
                                                                                                  stroke="none"
                                                                                                  stroke-dasharray="0"
                                                                                                  fill="#fff"></rect>
                                                                                        </clipPath>
                                                                                        <clipPath
                                                                                            id="forecastMaskglp0bib8"></clipPath>
                                                                                        <clipPath
                                                                                            id="nonForecastMaskglp0bib8"></clipPath>
                                                                                        <clipPath
                                                                                            id="gridRectMarkerMaskglp0bib8">
                                                                                            <rect id="SvgjsRect1829"
                                                                                                  width="104"
                                                                                                  height="104" x="-2"
                                                                                                  y="-2" rx="0" ry="0"
                                                                                                  opacity="1"
                                                                                                  stroke-width="0"
                                                                                                  stroke="none"
                                                                                                  stroke-dasharray="0"
                                                                                                  fill="#fff"></rect>
                                                                                        </clipPath>
                                                                                    </defs>
                                                                                    <g id="SvgjsG1830"
                                                                                       class="apexcharts-radialbar">
                                                                                        <g id="SvgjsG1831">
                                                                                            <g id="SvgjsG1832"
                                                                                               class="apexcharts-tracks">
                                                                                                <g id="SvgjsG1833"
                                                                                                   class="apexcharts-radialbar-track apexcharts-track"
                                                                                                   rel="1">
                                                                                                    <path
                                                                                                        id="apexcharts-radialbarTrack-0"
                                                                                                        d="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 49.994561809492424 18.84146388920579"
                                                                                                        fill="none"
                                                                                                        fill-opacity="1"
                                                                                                        stroke="rgba(241,250,255,0.85)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-width="8.414634146341463"
                                                                                                        stroke-dasharray="0"
                                                                                                        class="apexcharts-radialbar-area"
                                                                                                        data:pathOrig="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 49.994561809492424 18.84146388920579"></path>
                                                                                                </g>
                                                                                            </g>
                                                                                            <g id="SvgjsG1835">
                                                                                                <g id="SvgjsG1838"
                                                                                                   class="apexcharts-series apexcharts-radial-series"
                                                                                                   seriesName="Progress"
                                                                                                   rel="1"
                                                                                                   data:realIndex="0">
                                                                                                    <path
                                                                                                        id="SvgjsPath1839"
                                                                                                        d="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 18.917364043733517 47.826490360777576"
                                                                                                        fill="none"
                                                                                                        fill-opacity="0.85"
                                                                                                        stroke="rgba(0,158,247,0.85)"
                                                                                                        stroke-opacity="1"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-width="8.414634146341463"
                                                                                                        stroke-dasharray="0"
                                                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                                                        data:angle="274"
                                                                                                        data:value="76"
                                                                                                        index="0" j="0"
                                                                                                        data:pathOrig="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 18.917364043733517 47.826490360777576"></path>
                                                                                                </g>
                                                                                                <circle
                                                                                                    id="SvgjsCircle1836"
                                                                                                    r="26.951219512195127"
                                                                                                    cx="50" cy="50"
                                                                                                    class="apexcharts-radialbar-hollow"
                                                                                                    fill="transparent"></circle>
                                                                                                <g id="SvgjsG1837"
                                                                                                   class="apexcharts-datalabels-group"
                                                                                                   transform="translate(0, 0) scale(1)"
                                                                                                   style="opacity: 1;"></g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                    <line id="SvgjsLine1840" x1="0"
                                                                                          y1="0" x2="100" y2="0"
                                                                                          stroke="#b6b6b6"
                                                                                          stroke-dasharray="0"
                                                                                          stroke-width="1"
                                                                                          stroke-linecap="butt"
                                                                                          class="apexcharts-ycrosshairs"></line>
                                                                                    <line id="SvgjsLine1841" x1="0"
                                                                                          y1="0" x2="100" y2="0"
                                                                                          stroke-dasharray="0"
                                                                                          stroke-width="0"
                                                                                          stroke-linecap="butt"
                                                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                                                </g>
                                                                                <g id="SvgjsG1827"
                                                                                   class="apexcharts-annotations"></g>
                                                                            </svg>
                                                                            <div class="apexcharts-legend"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Chart-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bold text-gray-800 mb-3">Ruby on
                                                                        Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div
                                                                            class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->3 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="m-0">
                                                                <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip
                                                                    This</a>
                                                                <a href="#" class="btn btn-sm btn-primary mb-2"
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#kt_modal_create_app">Continue</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="carousel-item">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-5">
                                                                <!--begin::Chart-->
                                                                <div class="w-80px flex-shrink-0 me-2">
                                                                    <div class="min-h-auto ms-n3 initialized"
                                                                         id="kt_slider_widget_1_chart_2"
                                                                         style="height: 100px; min-height: 100px;">
                                                                        <div id="apexchartsr634frs8"
                                                                             class="apexcharts-canvas apexchartsr634frs8"
                                                                             style="width: 0px; height: 100px;">
                                                                            <svg id="SvgjsSvg1820" width="0"
                                                                                 height="100"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 version="1.1"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 xmlns:svgjs="http://svgjs.dev"
                                                                                 class="apexcharts-svg"
                                                                                 xmlns:data="ApexChartsNS"
                                                                                 transform="translate(0, 0)"
                                                                                 style="background: transparent;">
                                                                                <g id="SvgjsG1823"
                                                                                   class="apexcharts-annotations"></g>
                                                                                <g id="SvgjsG1822"
                                                                                   class="apexcharts-inner apexcharts-graphical">
                                                                                    <defs id="SvgjsDefs1821"></defs>
                                                                                </g>
                                                                            </svg>
                                                                            <div class="apexcharts-legend"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Chart-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bold text-gray-800 mb-3">Ruby on
                                                                        Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div
                                                                            class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->3 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="m-0">
                                                                <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip
                                                                    This</a>
                                                                <a href="#" class="btn btn-sm btn-primary mb-2"
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#kt_modal_create_app">Continue</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="carousel-item">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-5">
                                                                <!--begin::Chart-->
                                                                <div class="w-80px flex-shrink-0 me-2">
                                                                    <div class="min-h-auto ms-n3 initialized"
                                                                         id="kt_slider_widget_1_chart_3"
                                                                         style="height: 100px; min-height: 100px;">
                                                                        <div id="apexchartsxff8m1h5"
                                                                             class="apexcharts-canvas apexchartsxff8m1h5"
                                                                             style="width: 0px; height: 100px;">
                                                                            <svg id="SvgjsSvg1842" width="0"
                                                                                 height="100"
                                                                                 xmlns="http://www.w3.org/2000/svg"
                                                                                 version="1.1"
                                                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                 xmlns:svgjs="http://svgjs.dev"
                                                                                 class="apexcharts-svg"
                                                                                 xmlns:data="ApexChartsNS"
                                                                                 transform="translate(0, 0)"
                                                                                 style="background: transparent;">
                                                                                <g id="SvgjsG1845"
                                                                                   class="apexcharts-annotations"></g>
                                                                                <g id="SvgjsG1844"
                                                                                   class="apexcharts-inner apexcharts-graphical">
                                                                                    <defs id="SvgjsDefs1843"></defs>
                                                                                </g>
                                                                            </svg>
                                                                            <div class="apexcharts-legend"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Chart-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bold text-gray-800 mb-3">Ruby on
                                                                        Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div
                                                                            class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->3 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="m-0">
                                                                <a href="#" class="btn btn-sm btn-light me-2 mb-2">Skip
                                                                    This</a>
                                                                <a href="#" class="btn btn-sm btn-primary mb-2"
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#kt_modal_create_app">Continue</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Carousel-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Slider Widget 1-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-6 mb-5 mb-xl-10">
                                            <!--begin::Slider Widget 2-->
                                            <div id="kt_sliders_widget_2_slider"
                                                 class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                                                 data-bs-ride="carousel" data-bs-interval="5500">
                                                <!--begin::Header-->
                                                <div class="card-header pt-5">
                                                    <!--begin::Title-->
                                                    <h4 class="card-title d-flex align-items-start flex-column">
                                                        <span
                                                            class="card-label fw-bold text-gray-800">Today’s Events</span>
                                                        <span class="text-gray-400 mt-1 fw-bold fs-7">24 events on all activities</span>
                                                    </h4>
                                                    <!--end::Title-->
                                                    <!--begin::Toolbar-->
                                                    <div class="card-toolbar">
                                                        <!--begin::Carousel Indicators-->
                                                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success">
                                                            <li data-bs-target="#kt_sliders_widget_2_slider"
                                                                data-bs-slide-to="0" class="ms-1"></li>
                                                            <li data-bs-target="#kt_sliders_widget_2_slider"
                                                                data-bs-slide-to="1" class="ms-1 active"
                                                                aria-current="true"></li>
                                                            <li data-bs-target="#kt_sliders_widget_2_slider"
                                                                data-bs-slide-to="2" class="ms-1"></li>
                                                        </ol>
                                                        <!--end::Carousel Indicators-->
                                                    </div>
                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body py-6">
                                                    <!--begin::Carousel-->
                                                    <div class="carousel-inner">
                                                        <!--begin::Item-->
                                                        <div class="carousel-item show">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-70px symbol-circle me-5">
																			<span class="symbol-label bg-light-success">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs025.svg-->
																				<span
                                                                                    class="svg-icon svg-icon-3x svg-icon-success">
																					<svg width="24" height="24"
                                                                                         viewBox="0 0 24 24" fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
																						<path
                                                                                            d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z"
                                                                                            fill="currentColor"></path>
																						<path opacity="0.3"
                                                                                              d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z"
                                                                                              fill="currentColor"></path>
																					</svg>
																				</span>
                                                                                <!--end::Svg Icon-->
																			</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bold text-gray-800 mb-3">Ruby on
                                                                        Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div
                                                                            class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->5 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->60 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->137 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="m-0">
                                                                <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                                <a href="#" class="btn btn-sm btn-success mb-2"
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#kt_modal_create_campaign">Join
                                                                    Event</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="carousel-item active">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-70px symbol-circle me-5">
																			<span class="symbol-label bg-light-danger">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
                                                                                    class="svg-icon svg-icon-3x svg-icon-danger">
																					<svg width="24" height="24"
                                                                                         viewBox="0 0 24 24" fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
																						<path opacity="0.3"
                                                                                              d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z"
                                                                                              fill="currentColor"></path>
																						<path
                                                                                            d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z"
                                                                                            fill="currentColor"></path>
																					</svg>
																				</span>
                                                                                <!--end::Svg Icon-->
																			</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bold text-gray-800 mb-3">Ruby on
                                                                        Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div
                                                                            class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->12 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="m-0">
                                                                <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                                <a href="#" class="btn btn-sm btn-success mb-2"
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#kt_modal_create_campaign">Join
                                                                    Event</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="carousel-item">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex align-items-center mb-9">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-70px symbol-circle me-5">
																			<span class="symbol-label bg-light-primary">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs038.svg-->
																				<span
                                                                                    class="svg-icon svg-icon-3x svg-icon-primary">
																					<svg width="24" height="24"
                                                                                         viewBox="0 0 24 24" fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
																						<path
                                                                                            d="M12.0444 17.9444V12.1444L17.0444 15.0444C18.6444 15.9444 19.1445 18.0444 18.2445 19.6444C17.3445 21.2444 15.2445 21.7444 13.6445 20.8444C12.6445 20.2444 12.0444 19.1444 12.0444 17.9444ZM7.04445 15.0444L12.0444 12.1444L7.04445 9.24445C5.44445 8.34445 3.44444 8.84445 2.44444 10.4444C1.54444 12.0444 2.04445 14.0444 3.64445 15.0444C4.74445 15.6444 6.04445 15.6444 7.04445 15.0444ZM12.0444 6.34444V12.1444L17.0444 9.24445C18.6444 8.34445 19.1445 6.24444 18.2445 4.64444C17.3445 3.04444 15.2445 2.54445 13.6445 3.44445C12.6445 4.04445 12.0444 5.14444 12.0444 6.34444Z"
                                                                                            fill="currentColor"></path>
																						<path opacity="0.3"
                                                                                              d="M7.04443 9.24445C6.04443 8.64445 5.34442 7.54444 5.34442 6.34444C5.34442 4.54444 6.84444 3.04443 8.64444 3.04443C10.4444 3.04443 11.9444 4.54444 11.9444 6.34444V12.1444L7.04443 9.24445ZM17.0444 15.0444C18.0444 15.6444 19.3444 15.6444 20.3444 15.0444C21.9444 14.1444 22.4444 12.0444 21.5444 10.4444C20.6444 8.84444 18.5444 8.34445 16.9444 9.24445L11.9444 12.1444L17.0444 15.0444ZM7.04443 15.0444C6.04443 15.6444 5.34442 16.7444 5.34442 17.9444C5.34442 19.7444 6.84444 21.2444 8.64444 21.2444C10.4444 21.2444 11.9444 19.7444 11.9444 17.9444V12.1444L7.04443 15.0444Z"
                                                                                              fill="currentColor"></path>
																					</svg>
																				</span>
                                                                                <!--end::Svg Icon-->
																			</span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Info-->
                                                                <div class="m-0">
                                                                    <!--begin::Subtitle-->
                                                                    <h4 class="fw-bold text-gray-800 mb-3">Ruby on
                                                                        Rails</h4>
                                                                    <!--end::Subtitle-->
                                                                    <!--begin::Items-->
                                                                    <div class="d-flex d-grid gap-5">
                                                                        <!--begin::Item-->
                                                                        <div
                                                                            class="d-flex flex-column flex-shrink-0 me-4">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->3 Topics</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->1 Speakers</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                        <!--begin::Item-->
                                                                        <div class="d-flex flex-column flex-shrink-0">
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center fs-7 fw-bold text-gray-400 mb-2">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->50 Min</span>
                                                                            <!--end::Section-->
                                                                            <!--begin::Section-->
                                                                            <span
                                                                                class="d-flex align-items-center text-gray-400 fw-bold fs-7">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																					<span
                                                                                        class="svg-icon svg-icon-6 svg-icon-gray-600 me-2">
																						<svg width="24" height="24"
                                                                                             viewBox="0 0 24 24"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
																							<rect opacity="0.3" x="2"
                                                                                                  y="2" width="20"
                                                                                                  height="20" rx="5"
                                                                                                  fill="currentColor"></rect>
																							<path
                                                                                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                                                                                fill="currentColor"></path>
																						</svg>
																					</span>
                                                                                <!--end::Svg Icon-->72 students</span>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                        <!--end::Item-->
                                                                    </div>
                                                                    <!--end::Items-->
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                            <!--begin::Action-->
                                                            <div class="m-0">
                                                                <a href="#" class="btn btn-sm btn-light me-2 mb-2">Details</a>
                                                                <a href="#" class="btn btn-sm btn-success mb-2"
                                                                   data-bs-toggle="modal"
                                                                   data-bs-target="#kt_modal_create_campaign">Join
                                                                    Event</a>
                                                            </div>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Carousel-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Slider Widget 2-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Engage widget 4-->
                                    <div class="card border-transparent" data-bs-theme="light"
                                         style="background-color: #1C325E;">
                                        <!--begin::Body-->

                                        <!--end::Body-->
                                    </div>
                                    <!--end::Engage widget 4-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->

                            <!--end::Row-->
                            <!--begin::Row-->

                            <!--end::Row-->
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                @include('auth_pages.dashboard.footer')
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->

<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script>
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/type.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/budget.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/team.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/targets.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/files.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/complete.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/create-project/main.js')}}"></script>
<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->



<div class="daterangepicker ltr show-ranges opensleft">
    <div class="ranges">
        <ul>
            <li data-range-key="Today">Today</li>
            <li data-range-key="Yesterday">Yesterday</li>
            <li data-range-key="Last 7 Days">Last 7 Days</li>
            <li data-range-key="Last 30 Days">Last 30 Days</li>
            <li data-range-key="This Month">This Month</li>
            <li data-range-key="Last Month">Last Month</li>
            <li data-range-key="Custom Range">Custom Range</li>
        </ul>
    </div>
    <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
    </div>
    <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
    </div>
    <div class="drp-buttons"><span class="drp-selected"></span>
        <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button>
        <button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button>
    </div>
</div>
<div class="flatpickr-calendar hasTime rangeMode animate" tabindex="-1">
    <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                                                                          xmlns="http://www.w3.org/2000/svg"
                                                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                          viewBox="0 0 17 17"><g></g><path
                    d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span>
        <div class="flatpickr-month">
            <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                                                         tabindex="-1">
                    <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                    <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                    <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                    <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                    <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                    <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                    <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                    <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                    <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                    <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                    <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                    <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                </select>
                <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                                                    aria-label="Year"><span class="arrowUp"></span><span
                        class="arrowDown"></span></div>
            </div>
        </div>
        <span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path
                    d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span>
    </div>
    <div class="flatpickr-innerContainer">
        <div class="flatpickr-rContainer">
            <div class="flatpickr-weekdays">
                <div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span
                        class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span
                        class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
                </div>
            </div>
            <div class="flatpickr-days" tabindex="-1">
                <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="February 26, 2023"
                                                tabindex="-1">26</span><span class="flatpickr-day prevMonthDay"
                                                                             aria-label="February 27, 2023"
                                                                             tabindex="-1">27</span><span
                        class="flatpickr-day prevMonthDay" aria-label="February 28, 2023" tabindex="-1">28</span><span
                        class="flatpickr-day" aria-label="March 1, 2023" tabindex="-1">1</span><span
                        class="flatpickr-day" aria-label="March 2, 2023" tabindex="-1">2</span><span
                        class="flatpickr-day" aria-label="March 3, 2023" tabindex="-1">3</span><span
                        class="flatpickr-day" aria-label="March 4, 2023" tabindex="-1">4</span><span
                        class="flatpickr-day" aria-label="March 5, 2023" tabindex="-1">5</span><span
                        class="flatpickr-day" aria-label="March 6, 2023" tabindex="-1">6</span><span
                        class="flatpickr-day" aria-label="March 7, 2023" tabindex="-1">7</span><span
                        class="flatpickr-day" aria-label="March 8, 2023" tabindex="-1">8</span><span
                        class="flatpickr-day" aria-label="March 9, 2023" tabindex="-1">9</span><span
                        class="flatpickr-day" aria-label="March 10, 2023" tabindex="-1">10</span><span
                        class="flatpickr-day" aria-label="March 11, 2023" tabindex="-1">11</span><span
                        class="flatpickr-day" aria-label="March 12, 2023" tabindex="-1">12</span><span
                        class="flatpickr-day" aria-label="March 13, 2023" tabindex="-1">13</span><span
                        class="flatpickr-day" aria-label="March 14, 2023" tabindex="-1">14</span><span
                        class="flatpickr-day" aria-label="March 15, 2023" tabindex="-1">15</span><span
                        class="flatpickr-day" aria-label="March 16, 2023" tabindex="-1">16</span><span
                        class="flatpickr-day" aria-label="March 17, 2023" tabindex="-1">17</span><span
                        class="flatpickr-day" aria-label="March 18, 2023" tabindex="-1">18</span><span
                        class="flatpickr-day" aria-label="March 19, 2023" tabindex="-1">19</span><span
                        class="flatpickr-day" aria-label="March 20, 2023" tabindex="-1">20</span><span
                        class="flatpickr-day" aria-label="March 21, 2023" tabindex="-1">21</span><span
                        class="flatpickr-day" aria-label="March 22, 2023" tabindex="-1">22</span><span
                        class="flatpickr-day" aria-label="March 23, 2023" tabindex="-1">23</span><span
                        class="flatpickr-day" aria-label="March 24, 2023" tabindex="-1">24</span><span
                        class="flatpickr-day" aria-label="March 25, 2023" tabindex="-1">25</span><span
                        class="flatpickr-day" aria-label="March 26, 2023" tabindex="-1">26</span><span
                        class="flatpickr-day today" aria-label="March 27, 2023" aria-current="date"
                        tabindex="-1">27</span><span class="flatpickr-day" aria-label="March 28, 2023"
                                                     tabindex="-1">28</span><span class="flatpickr-day"
                                                                                  aria-label="March 29, 2023"
                                                                                  tabindex="-1">29</span><span
                        class="flatpickr-day" aria-label="March 30, 2023" tabindex="-1">30</span><span
                        class="flatpickr-day" aria-label="March 31, 2023" tabindex="-1">31</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 1, 2023" tabindex="-1">1</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 2, 2023" tabindex="-1">2</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 3, 2023" tabindex="-1">3</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 4, 2023" tabindex="-1">4</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 5, 2023" tabindex="-1">5</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 6, 2023" tabindex="-1">6</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 7, 2023" tabindex="-1">7</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 8, 2023" tabindex="-1">8</span></div>
            </div>
        </div>
    </div>
    <div class="flatpickr-time" tabindex="-1">
        <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour"
                                            tabindex="-1" step="1" min="1" max="12" maxlength="2"><span
                class="arrowUp"></span><span class="arrowDown"></span></div>
        <span class="flatpickr-time-separator">:</span>
        <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute"
                                            tabindex="-1" step="5" min="0" max="59" maxlength="2"><span
                class="arrowUp"></span><span class="arrowDown"></span></div>
        <span class="flatpickr-am-pm" title="Click to toggle" tabindex="-1">PM</span></div>
</div>
<input type="file" multiple="multiple" class="dz-hidden-input" tabindex="-1"
       style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><input type="file"
                                                                                                            multiple="multiple"
                                                                                                            class="dz-hidden-input"
                                                                                                            tabindex="-1"
                                                                                                            style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
<div class="flatpickr-calendar hasTime animate" tabindex="-1">
    <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                                                                          xmlns="http://www.w3.org/2000/svg"
                                                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                          viewBox="0 0 17 17"><g></g><path
                    d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span>
        <div class="flatpickr-month">
            <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                                                         tabindex="-1">
                    <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                    <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                    <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                    <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                    <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                    <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                    <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                    <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                    <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                    <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                    <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                    <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                </select>
                <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                                                    aria-label="Year"><span class="arrowUp"></span><span
                        class="arrowDown"></span></div>
            </div>
        </div>
        <span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path
                    d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span>
    </div>
    <div class="flatpickr-innerContainer">
        <div class="flatpickr-rContainer">
            <div class="flatpickr-weekdays">
                <div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span
                        class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span
                        class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
                </div>
            </div>
            <div class="flatpickr-days" tabindex="-1">
                <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="February 26, 2023"
                                                tabindex="-1">26</span><span class="flatpickr-day prevMonthDay"
                                                                             aria-label="February 27, 2023"
                                                                             tabindex="-1">27</span><span
                        class="flatpickr-day prevMonthDay" aria-label="February 28, 2023" tabindex="-1">28</span><span
                        class="flatpickr-day" aria-label="March 1, 2023" tabindex="-1">1</span><span
                        class="flatpickr-day" aria-label="March 2, 2023" tabindex="-1">2</span><span
                        class="flatpickr-day" aria-label="March 3, 2023" tabindex="-1">3</span><span
                        class="flatpickr-day" aria-label="March 4, 2023" tabindex="-1">4</span><span
                        class="flatpickr-day" aria-label="March 5, 2023" tabindex="-1">5</span><span
                        class="flatpickr-day" aria-label="March 6, 2023" tabindex="-1">6</span><span
                        class="flatpickr-day" aria-label="March 7, 2023" tabindex="-1">7</span><span
                        class="flatpickr-day" aria-label="March 8, 2023" tabindex="-1">8</span><span
                        class="flatpickr-day" aria-label="March 9, 2023" tabindex="-1">9</span><span
                        class="flatpickr-day" aria-label="March 10, 2023" tabindex="-1">10</span><span
                        class="flatpickr-day" aria-label="March 11, 2023" tabindex="-1">11</span><span
                        class="flatpickr-day" aria-label="March 12, 2023" tabindex="-1">12</span><span
                        class="flatpickr-day" aria-label="March 13, 2023" tabindex="-1">13</span><span
                        class="flatpickr-day" aria-label="March 14, 2023" tabindex="-1">14</span><span
                        class="flatpickr-day" aria-label="March 15, 2023" tabindex="-1">15</span><span
                        class="flatpickr-day" aria-label="March 16, 2023" tabindex="-1">16</span><span
                        class="flatpickr-day" aria-label="March 17, 2023" tabindex="-1">17</span><span
                        class="flatpickr-day" aria-label="March 18, 2023" tabindex="-1">18</span><span
                        class="flatpickr-day" aria-label="March 19, 2023" tabindex="-1">19</span><span
                        class="flatpickr-day" aria-label="March 20, 2023" tabindex="-1">20</span><span
                        class="flatpickr-day" aria-label="March 21, 2023" tabindex="-1">21</span><span
                        class="flatpickr-day" aria-label="March 22, 2023" tabindex="-1">22</span><span
                        class="flatpickr-day" aria-label="March 23, 2023" tabindex="-1">23</span><span
                        class="flatpickr-day" aria-label="March 24, 2023" tabindex="-1">24</span><span
                        class="flatpickr-day" aria-label="March 25, 2023" tabindex="-1">25</span><span
                        class="flatpickr-day" aria-label="March 26, 2023" tabindex="-1">26</span><span
                        class="flatpickr-day today" aria-label="March 27, 2023" aria-current="date"
                        tabindex="-1">27</span><span class="flatpickr-day" aria-label="March 28, 2023"
                                                     tabindex="-1">28</span><span class="flatpickr-day"
                                                                                  aria-label="March 29, 2023"
                                                                                  tabindex="-1">29</span><span
                        class="flatpickr-day" aria-label="March 30, 2023" tabindex="-1">30</span><span
                        class="flatpickr-day" aria-label="March 31, 2023" tabindex="-1">31</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 1, 2023" tabindex="-1">1</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 2, 2023" tabindex="-1">2</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 3, 2023" tabindex="-1">3</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 4, 2023" tabindex="-1">4</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 5, 2023" tabindex="-1">5</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 6, 2023" tabindex="-1">6</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 7, 2023" tabindex="-1">7</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 8, 2023" tabindex="-1">8</span></div>
            </div>
        </div>
    </div>
    <div class="flatpickr-time" tabindex="-1">
        <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour"
                                            tabindex="-1" step="1" min="1" max="12" maxlength="2"><span
                class="arrowUp"></span><span class="arrowDown"></span></div>
        <span class="flatpickr-time-separator">:</span>
        <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute"
                                            tabindex="-1" step="5" min="0" max="59" maxlength="2"><span
                class="arrowUp"></span><span class="arrowDown"></span></div>
        <span class="flatpickr-am-pm" title="Click to toggle" tabindex="-1">PM</span></div>
</div>
<div class="flatpickr-calendar hasTime animate" tabindex="-1">
    <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                                                                          xmlns="http://www.w3.org/2000/svg"
                                                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                          viewBox="0 0 17 17"><g></g><path
                    d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span>
        <div class="flatpickr-month">
            <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" aria-label="Month"
                                                         tabindex="-1">
                    <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option>
                    <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option>
                    <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option>
                    <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option>
                    <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option>
                    <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option>
                    <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option>
                    <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option>
                    <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option>
                    <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option>
                    <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option>
                    <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option>
                </select>
                <div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1"
                                                    aria-label="Year"><span class="arrowUp"></span><span
                        class="arrowDown"></span></div>
            </div>
        </div>
        <span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path
                    d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span>
    </div>
    <div class="flatpickr-innerContainer">
        <div class="flatpickr-rContainer">
            <div class="flatpickr-weekdays">
                <div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span
                        class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span
                        class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
                </div>
            </div>
            <div class="flatpickr-days" tabindex="-1">
                <div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="February 26, 2023"
                                                tabindex="-1">26</span><span class="flatpickr-day prevMonthDay"
                                                                             aria-label="February 27, 2023"
                                                                             tabindex="-1">27</span><span
                        class="flatpickr-day prevMonthDay" aria-label="February 28, 2023" tabindex="-1">28</span><span
                        class="flatpickr-day" aria-label="March 1, 2023" tabindex="-1">1</span><span
                        class="flatpickr-day" aria-label="March 2, 2023" tabindex="-1">2</span><span
                        class="flatpickr-day" aria-label="March 3, 2023" tabindex="-1">3</span><span
                        class="flatpickr-day" aria-label="March 4, 2023" tabindex="-1">4</span><span
                        class="flatpickr-day" aria-label="March 5, 2023" tabindex="-1">5</span><span
                        class="flatpickr-day" aria-label="March 6, 2023" tabindex="-1">6</span><span
                        class="flatpickr-day" aria-label="March 7, 2023" tabindex="-1">7</span><span
                        class="flatpickr-day" aria-label="March 8, 2023" tabindex="-1">8</span><span
                        class="flatpickr-day" aria-label="March 9, 2023" tabindex="-1">9</span><span
                        class="flatpickr-day" aria-label="March 10, 2023" tabindex="-1">10</span><span
                        class="flatpickr-day" aria-label="March 11, 2023" tabindex="-1">11</span><span
                        class="flatpickr-day" aria-label="March 12, 2023" tabindex="-1">12</span><span
                        class="flatpickr-day" aria-label="March 13, 2023" tabindex="-1">13</span><span
                        class="flatpickr-day" aria-label="March 14, 2023" tabindex="-1">14</span><span
                        class="flatpickr-day" aria-label="March 15, 2023" tabindex="-1">15</span><span
                        class="flatpickr-day" aria-label="March 16, 2023" tabindex="-1">16</span><span
                        class="flatpickr-day" aria-label="March 17, 2023" tabindex="-1">17</span><span
                        class="flatpickr-day" aria-label="March 18, 2023" tabindex="-1">18</span><span
                        class="flatpickr-day" aria-label="March 19, 2023" tabindex="-1">19</span><span
                        class="flatpickr-day" aria-label="March 20, 2023" tabindex="-1">20</span><span
                        class="flatpickr-day" aria-label="March 21, 2023" tabindex="-1">21</span><span
                        class="flatpickr-day" aria-label="March 22, 2023" tabindex="-1">22</span><span
                        class="flatpickr-day" aria-label="March 23, 2023" tabindex="-1">23</span><span
                        class="flatpickr-day" aria-label="March 24, 2023" tabindex="-1">24</span><span
                        class="flatpickr-day" aria-label="March 25, 2023" tabindex="-1">25</span><span
                        class="flatpickr-day" aria-label="March 26, 2023" tabindex="-1">26</span><span
                        class="flatpickr-day today" aria-label="March 27, 2023" aria-current="date"
                        tabindex="-1">27</span><span class="flatpickr-day" aria-label="March 28, 2023"
                                                     tabindex="-1">28</span><span class="flatpickr-day"
                                                                                  aria-label="March 29, 2023"
                                                                                  tabindex="-1">29</span><span
                        class="flatpickr-day" aria-label="March 30, 2023" tabindex="-1">30</span><span
                        class="flatpickr-day" aria-label="March 31, 2023" tabindex="-1">31</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 1, 2023" tabindex="-1">1</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 2, 2023" tabindex="-1">2</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 3, 2023" tabindex="-1">3</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 4, 2023" tabindex="-1">4</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 5, 2023" tabindex="-1">5</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 6, 2023" tabindex="-1">6</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 7, 2023" tabindex="-1">7</span><span
                        class="flatpickr-day nextMonthDay" aria-label="April 8, 2023" tabindex="-1">8</span></div>
            </div>
        </div>
    </div>
    <div class="flatpickr-time" tabindex="-1">
        <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number" aria-label="Hour"
                                            tabindex="-1" step="1" min="1" max="12" maxlength="2"><span
                class="arrowUp"></span><span class="arrowDown"></span></div>
        <span class="flatpickr-time-separator">:</span>
        <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number" aria-label="Minute"
                                            tabindex="-1" step="5" min="0" max="59" maxlength="2"><span
                class="arrowUp"></span><span class="arrowDown"></span></div>
        <span class="flatpickr-am-pm" title="Click to toggle" tabindex="-1">PM</span></div>
</div>
<input type="file" multiple="multiple" class="dz-hidden-input" tabindex="-1"
       style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"></body>
<!--end::Body--></html>
