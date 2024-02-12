<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Admin (Guru)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="guru.php" class="logo-light">
                    <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="40">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="40">
                </a>

                <!-- Brand Logo Dark -->
                <a href="guru.php" class="logo-dark">
                    <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="40">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="40">
                </a>
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a href="guru.php" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                            <span class="menu-text"> Dashboards </span>
                            <span class="badge bg-primary rounded ms-auto">01</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="apps-calendar.html" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                            <span class="menu-text"> Calendar </span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <div class="collapse" id="menuExpages">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="pages-starter.html" class="menu-link">
                                        <span class="menu-text">Starter</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-invoice.html" class="menu-link">
                                        <span class="menu-text">Invoice</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-login.html" class="menu-link">
                                        <span class="menu-text">Log In</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-register.html" class="menu-link">
                                        <span class="menu-text">Register</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-recoverpw.html" class="menu-link">
                                        <span class="menu-text">Recover Password</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-lock-screen.html" class="menu-link">
                                        <span class="menu-text">Lock Screen</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-404.html" class="menu-link">
                                        <span class="menu-text">Error 404</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-500.html" class="menu-link">
                                        <span class="menu-text">Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bi bi-people-fill"></i></span>
                            <span class="menu-text"> Daftar Guru </span>
                            <span class="badge bg-blue ms-auto">New</span>
                        </a>
                        <div class="collapse" id="menuLayouts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="layout-horizontal.html" class="menu-link">
                                        <span class="menu-text">Guru A</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="layout-sidenav-light.html" class="menu-link">
                                        <span class="menu-text">Guru B</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="layout-sidenav-dark.html" class="menu-link">
                                        <span class="menu-text">Guru C</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bi bi-building"></i></span>
                            <span class="menu-text"> Daftar Kelas </span>
                            <span class="badge bg-blue ms-auto">New</span>
                        </a>
                        <div class="collapse" id="menuLayouts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="layout-horizontal.html" class="menu-link">
                                        <span class="menu-text">Kelas XI.A</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="layout-sidenav-light.html" class="menu-link">
                                        <span class="menu-text">Kelas XI.B</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="layout-sidenav-dark.html" class="menu-link">
                                        <span class="menu-text">Kelas XI.C</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-item">
                        <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-layout"></i></span>
                            <span class="menu-text"> Mata Pelajaran </span>
                            <span class="badge bg-blue ms-auto">New</span>
                        </a>
                        <div class="collapse" id="menuLayouts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="layout-horizontal.html" class="menu-link">
                                        <span class="menu-text">Kelas XI.A</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="layout-sidenav-light.html" class="menu-link">
                                        <span class="menu-text">Kelas XI.B</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a href="layout-sidenav-dark.html" class="menu-link">
                                        <span class="menu-text">Kelas XI.C</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="menu-item">
                        <a href="#menuComponentsui" data-bs-toggle="collapse"
                            class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bi bi-person-fill"></i></i></span>
                            <span class="menu-text"> Wali Kelas </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuComponentsui">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="ui-alerts.html" class="menu-link">
                                        <span class="menu-text">Wali Kelas XI.A</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-alerts.html" class="menu-link">
                                        <span class="menu-text">Wali Kelas XI.B</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="ui-alerts.html" class="menu-link">
                                        <span class="menu-text">Wali Kelas XI.C</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-briefcase-alt-2"></i></span>
                            <span class="menu-text"> Data Siswa/i </span>
                            <span class="badge bg-info ms-auto">Hot</span>
                        </a>
                        <div class="collapse" id="menuExtendedui">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="components-range-slider.html" class="menu-link">
                                        <span class="menu-text">Murid1</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-sweet-alert.html" class="menu-link">
                                        <span class="menu-text">Murid2</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid3</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid4</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid5</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid6</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid7</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid8</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid9</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid10</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid11</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid12</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid13</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid14</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid15</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid16</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid17</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid18</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid19</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid20</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid21</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid22</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="components-loading-buttons.html" class="menu-link">
                                        <span class="menu-text">Murid23</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuIcons" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-aperture"></i></span>
                            <span class="menu-text"> Sekretaris </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuIcons">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="icons-feather.html" class="menu-link">
                                        <span class="menu-text">-</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="icons-mdi.html" class="menu-link">
                                        <span class="menu-text">-</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="icons-dripicons.html" class="menu-link">
                                        <span class="menu-text">-</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuMaps" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-map-alt"></i></span>
                            <span class="menu-text"> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuMaps">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="maps-google.html" class="menu-link">
                                        <span class="menu-text">Google Maps</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="maps-vector.html" class="menu-link">
                                        <span class="menu-text">Vector Maps</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>



        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Brand Logo -->
                        <div class="logo-box">
                            <!-- Brand Logo Light -->
                            <a href="index.html" class="logo-light">
                                <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="22">
                                <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="22">
                            </a>

                            <!-- Brand Logo Dark -->
                            <a href="index.html" class="logo-dark">
                                <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="22">
                                <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="22">
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-4">

                        <li class="d-none d-md-inline-block">
                            <a class="nav-link" href="" data-bs-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen font-size-24"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i class="mdi mdi-magnify font-size-24"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-end dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>


                        <li class="dropdown d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="assets/images/flags/Indonesia.jpg" alt="user-image" class="me-0 me-sm-1"
                                    height="18">
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i class="mdi mdi-bell font-size-24"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-size-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-1" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-size-13 fw-normal mt-2">Today</h5>
                                    <!-- item-->

                                    <a href="javascript:void(0);"
                                        class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i
                                                    class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Data
                                                        Siswa<small class="fw-normal text-muted ms-1">1 min ago</small>
                                                    </h5>
                                                    <small class="noti-item-subtitle text-muted">absen hari ini</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);"
                                        class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i
                                                    class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Guru A <small
                                                            class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">New user
                                                        registered</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-size-13 fw-normal mt-0">Yesterday</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);"
                                        class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i
                                                    class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="assets/images/users/user.jpg"
                                                            class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Anugrah Syahban
                                                        <small class="fw-normal text-muted ms-1">1 day ago</small>
                                                    </h5>
                                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What
                                                        about our next meeting</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-size-13 fw-normal mt-0">30 Dec 2021</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);"
                                        class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i
                                                    class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Guru</h5>
                                                    <small class="noti-item-subtitle text-muted">Lorem ipsum dolor sit
                                                        amet.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);"
                                        class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i
                                                    class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="assets/images/users/user.jpg"
                                                            class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Murid1
                                                    </h5>
                                                    <small class="noti-item-subtitle text-muted">P by1 dek</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text-center">
                                        <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);"
                                    class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-link" id="theme-mode">
                            <i class="bx bx-moon font-size-24"></i>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                                data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <img src="assets/images/users/user.jpg" alt="user-image" class="rounded-circle">
                                <span class="ms-1 d-none d-md-inline-block">
                                    Anugrah Syahban Pratama <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Selamat Datang !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Akun Saya</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Pengaturan</span>
                                </a>

                                <!-- item-->
                                <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Kunci Layar</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="logout.php" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="py-3 py-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="page-title mb-0">Dashboard</h4>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-none d-lg-block">
                                    <ol class="breadcrumb m-0 float-end">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Per Hari</span>
                                        <h5 class="card-title mb-0">Percentase Kehadiran Siswa</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                Kehadiran
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">80.5% <i
                                                    class="mdi mdi-arrow-up text-success"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Per Minggu</span>
                                        <h5 class="card-title mb-0">persentase Ketidakhadiran Siswa</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                Ketidakhadiran
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">18.71% <i
                                                    class="mdi mdi-arrow-down text-danger"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Per Bulan</span>
                                        <h5 class="card-title mb-0">Persentase Keseluruhan</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                Hadir/Tidak Hadir
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">57% <i
                                                    class="mdi mdi-arrow-up text-success"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Seluruh Jam Masuk</span>
                                        <h5 class="card-title mb-0">Lihat Harian</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h3 class="d-flex align-items-center mb-0">
                                                Siswa yang tidak mengikuti semua mata pelajaran
                                            </h3>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">7.8% <i
                                                    class="mdi mdi-arrow-down text-danger"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Siswa Budi Utomo</h4>
                                    <p class="card-subtitle mb-4">Siswa Budi Utomo dari tahun ke tahun</p>
                                    <div id="morris-bar-example" class="morris-chart"></div>
                                </div> <!--end card body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Kehadiran</h4>
                                    <p class="card-subtitle mb-4">Dari tahun ke tahun</p>

                                    <div class="text-center">
                                        <input data-plugin="knob" data-width="165" data-height="165" data-linecap=round
                                            data-fgColor="#7a08c2" value="95" data-skin="tron" data-angleOffset="180"
                                            data-readOnly=true data-thickness=".15" />
                                        <h5 class="text-muted mt-3">Tingkat kehadiran murid dari tahun ke tahun</h5>


                                        <p class="text-muted w-75 mx-auto sp-line-2">Lorem ipsum dolor sit amet
                                            consectetur, adipisicing elit. Odit, maiores!.</p>

                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <p class="text-muted font-15 mb-1 text-truncate"></p>
                                                <h4><i class="fas fa-arrow-up text-success me-1"></i>95%</h4>

                                            </div>
                                            <div class="col-6">
                                                <p class="text-muted font-15 mb-1 text-truncate"></p>
                                                <h4><i class="fas fa-arrow-down text-danger me-1"></i>5%</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!--end card body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">Tingkat Popularitas Bumaks</h4>

                                    <div id="morris-line-example" class="morris-chart" style="height: 290px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h4>48,3K</h4>
                                            <p class="text-muted mb-0">Total View</p>
                                        </div>
                                        <div class="col-6">
                                            <h4>23,2K</h4>
                                            <p class="text-muted mb-0">Join in Boarding School</p>
                                        </div>
                                    </div>

                                </div>
                                <!--end card body-->

                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Top 5 Lulusan Terbaik</h4>
                                    <p class="card-subtitle mb-4 font-size-13">Lulusan terbaik SMA Plus Budi Utomo
                                        Makassar
                                    </p>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-striped table-nowrap mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Nomor HP</th>
                                                    <th>Email</th>
                                                    <th>Asal</th>
                                                    <th>Tanggal Lahir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/user.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Anugrah Syahban
                                                            Pratama</a>
                                                    </td>
                                                    <td>
                                                        0852-4009-4857
                                                    </td>
                                                    <td>
                                                        nugi@bumaks.com
                                                    </td>
                                                    <td>
                                                        Makassar
                                                    </td>
                                                    <td>
                                                        26/08/2006
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/user.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Anugrah Syahban
                                                            Pratama</a>
                                                    </td>
                                                    <td>
                                                        0852-4009-4857
                                                    </td>
                                                    <td>
                                                        nugi@bumaks.com
                                                    </td>
                                                    <td>
                                                        Makassar
                                                    </td>
                                                    <td>
                                                        26/08/2006
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/user.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Anugrah Syahban
                                                            Pratama</a>
                                                    </td>
                                                    <td>
                                                        0852-4009-4857
                                                    </td>
                                                    <td>
                                                        nugi@bumaks.com
                                                    </td>
                                                    <td>
                                                        Makassar
                                                    </td>
                                                    <td>
                                                        26/08/2006
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/user.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Anugrah Syahban
                                                            Pratama</a>
                                                    </td>
                                                    <td>
                                                        0852-4009-4857
                                                    </td>
                                                    <td>
                                                        nugi@bumaks.com
                                                    </td>
                                                    <td>
                                                        Makassar
                                                    </td>
                                                    <td>
                                                        26/08/2006
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/user.jpg" alt="table-user"
                                                            class="mr-2 avatar-xs rounded-circle">
                                                        <a href="javascript:void(0);"
                                                            class="text-body font-weight-semibold">Anugrah Syahban
                                                            Pratama</a>
                                                    </td>
                                                    <td>
                                                        0852-4009-4857
                                                    </td>
                                                    <td>
                                                        nugi@bumaks.com
                                                    </td>
                                                    <td>
                                                        Makassar
                                                    </td>
                                                    <td>
                                                        26/08/2006
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!--end card body-->

                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->

                    </div>
                    <!--end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <script>document.write(new Date().getFullYear())</script> © Bumaks
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0"><a href="https://www.instagram.com/smaplusbudiutomomakassar/"
                                        target="_blank">Bumaks</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="assets/libs/morris.js/morris.min.js"></script>

    <script src="assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="assets/js/pages/dashboard.js"></script>

</body>

</html>