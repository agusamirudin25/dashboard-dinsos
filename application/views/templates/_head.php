<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Dinas Sosial</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Agus Amirudin" name="author" />
    <link rel="shortcut icon" href="<?= base_url() ?>assets/images/logo_karawang.png">

    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/css/sweetalert2.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?= base_url() ?>" class="logo">
                    <span>
                        <img src="<?= base_url() ?>assets/images/logo_karawang.png" alt="" height="50">
                    </span>
                    <i>
                        <img src="<?= base_url() ?>assets/images/logo_karawang.png" alt="" height="22">
                    </i>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="navbar-right d-flex list-inline float-right mb-0">

                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img">
                            <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="<?= base_url() ?>assets/images/directory-bg.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <a class="dropdown-item text-danger" href="<?= base_url('Auth/logout') ?>"><i class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="<?= base_url() ?>" class="waves-effect">
                                <i class="mdi mdi-view-dashboard"></i><span> Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('Import') ?>" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Import Data </span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('Import/manual') ?>" class="waves-effect"><i class="mdi mdi-apps"></i><span> Imput Data Manual </span></a>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->