@extends('layouts.app')

@section('content')
<!--APP-SIDEBAR-->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="index.html">
            <img src="http://digitlift.com/wp-content/uploads/2021/12/White-BG.svg" class="header-brand-img light-logo1"
                alt="logo" id="change-image">
        </a><!-- LOGO -->
        <a aria-label="Hide Sidebar" class="app-sidebar__toggle ms-auto" data-bs-toggle="sidebar" href="#"></a>
        <!-- sidebar-toggle-->
    </div>
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-info">
                <h6 class=" mb-0 text-dark">Dr.
                    {{ App\Models\User::find(Auth::id())->doctor->first_name }}
                    {{ App\Models\User::find(Auth::id())->doctor->last_name }}</h6>
                <span class="text-muted app-sidebar__user-name text-sm">Doctor</span>
            </div>
        </div>
    </div>
    <div class="sidebar-navs">
        <ul class="nav  nav-pills-circle">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-settings"></i>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-mail"></i>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Followers">
                <a class="nav-link text-center m-2">
                    <i class="fe fe-user"></i>
                </a>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout">
                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    href="{{ route('logout') }}" class="nav-link text-center m-2">
                    <i class="fe fe-power"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <ul class="side-menu">
        <li>
            <h3>General</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="/"><i class="side-menu__icon ti-home"></i><span
                    class="side-menu__label">Tableau de bord</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon ti-user"></i><span
                    class="side-menu__label">Patients</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('patients.index') }}" class="slide-item">Tout</a></li>
                <li><a href="{{ route('patients.create') }}" class="slide-item">Ajouter</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon ti-calendar"></i><span
                    class="side-menu__label">Rendez-vous</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('appointments.index') }}" class="slide-item">Tout</a></li>
                <li><a href="{{ route('appointments.create') }}" class="slide-item">Ajouter</a></li>
            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('payments.index') }}"><i
                    class="side-menu__icon fa fa-credit-card"></i><span class="side-menu__label">Paiements</span></a>
        </li>

    </ul>
</aside>
<!--/APP-SIDEBAR-->

<!-- Mobile Header -->
<div class="mobile-header">
    <div class="container-fluid">
        <div class="d-flex">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a>
            <!-- sidebar-toggle-->
            <a class="header-brand" href="index.html">
                <img src="../../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                <img src="../../assets/images/brand/logo-3.png" class="header-brand-img desktop-logo mobile-light"
                    alt="logo">
            </a>
            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                </button>
                <div class="dropdown profile-1">
                    <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
                        <span>
                            <img src="../../assets/images/users/10.jpg" alt="profile-user"
                                class="avatar  profile-user brround cover-image">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                <small class="text-muted">Administrator</small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="float-end"></span>
                            <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                        </a>
                        <a class="dropdown-item" href="login.html">
                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                        </a>
                    </div>
                </div>
                <div class="dropdown d-md-flex header-settings">
                    <a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
                        <i class="fe fe-align-right"></i>
                    </a>
                </div>
                <!-- SIDE-MENU -->
            </div>
        </div>
    </div>
</div>
<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <div class="d-flex order-lg-2 ms-auto">
            <div class="dropdown d-sm-flex">
                <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                    <i class="fe fe-search"></i>
                </a>
                <div class="dropdown-menu header-search dropdown-menu-start">
                    <div class="input-group w-100 p-2">
                        <input type="text" class="form-control " placeholder="Search....">
                        <div class="">
                            <button type="button" class="btn btn-primary ">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- SEARCH -->
            <div class="dropdown d-md-flex">
                <a class="nav-link icon full-screen-link nav-link-bg">
                    <i class="fe fe-maximize fullscreen-button"></i>
                </a>
            </div><!-- FULL-SCREEN -->
            <div class="dropdown d-md-flex notifications">
                <a class="nav-link icon" data-bs-toggle="dropdown">
                    <i class="fe fe-bell"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <div class="notifications-menu">
                        <a class="dropdown-item d-flex pb-3" href="#">
                            <div class="fs-16 text-success me-3">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="">
                                <strong>Someone likes our posts.</strong>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-3" href="#">
                            <div class="fs-16 text-primary me-3">
                                <i class="fa fa-commenting-o"></i>
                            </div>
                            <div class="">
                                <strong>3 New Comments.</strong>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-3" href="#">
                            <div class="fs-16 text-danger me-3">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="">
                                <strong>Server Rebooted</strong>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-3" href="#">
                            <div class="fs-16 text-info me-3">
                                <i class="fe fe-upload"></i>
                            </div>
                            <div class="">
                                <strong>New file has been Uploaded</strong>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-3" href="#">
                            <div class="fs-16 text-pink me-3">
                                <i class="fe fe-user"></i>
                            </div>
                            <div class="">
                                <strong>New User Registered</strong>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center">View all Notification</a>
                </div>
            </div><!-- NOTIFICATIONS -->
            <div class="dropdown d-md-flex message">
                <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                    <i class="fe fe-mail"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <div class="message-menu">
                        <a class="dropdown-item d-flex pb-3" href="#">
                            <span class="avatar avatar-md brround me-3 align-self-center cover-image"
                                data-image-src="../../assets/images/users/1.jpg"></span>
                            <div>
                                <strong>Madeleine</strong> Hey! there I' am available....
                                <div class="small text-muted">
                                    3 hours ago
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-3" href="#">
                            <span class="avatar avatar-md brround me-3 align-self-center cover-image"
                                data-image-src="../../assets/images/users/12.jpg"></span>
                            <div>
                                <strong>Anthony</strong> New product Launching...
                                <div class="small text-muted">
                                    5 hour ago
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-3" href="#">
                            <span class="avatar avatar-md brround me-3 align-self-center cover-image"
                                data-image-src="../../assets/images/users/4.jpg"></span>
                            <div>
                                <strong>Olivia</strong> New Schedule Realease......
                                <div class="small text-muted">
                                    45 mintues ago
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex pb-3" href="#">
                            <span class="avatar avatar-md brround me-3 align-self-center cover-image"
                                data-image-src="../../assets/images/users/15.jpg"></span>
                            <div>
                                <strong>Sanderson</strong> New Schedule Realease......
                                <div class="small text-muted">
                                    2 days ago
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-center">See all Messages</a>
                </div>
            </div><!-- MESSAGE-BOX -->
        </div>
    </div>
</div>
<!-- /Mobile Header -->

<!--app-content open-->
<div class="app-content">
    <div class="side-app">
        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Medico</h1>

            </div>
            <div class="d-flex  ms-auto header-right-icons header-search-icon">
                <div class="dropdown d-sm-flex">
                    <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                        <i class="fe fe-search"></i>
                    </a>
                    <div class="dropdown-menu header-search dropdown-menu-start">
                        <div class="input-group w-100 p-2">
                            <input type="text" class="form-control " placeholder="Search....">
                            <div class=" ">
                                <button type="button" class="btn btn-primary ">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div><!-- SEARCH -->
                <div class="dropdown d-md-flex">
                    <a class="nav-link icon full-screen-link nav-link-bg">
                        <i class="fe fe-maximize fullscreen-button"></i>
                    </a>
                </div><!-- FULL-SCREEN -->



            </div>
        </div>
        <!-- PAGE-HEADER END -->
        @yield('subcontent')
    </div>

</div>
@endsection
