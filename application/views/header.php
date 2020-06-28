<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Trang Admin </title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>public/images/avatars/admintuan.jpg">
        <!-- Switchery css -->
        <link href="<?php echo base_url(); ?>public/js/switchery.min.css" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome CSS -->
        <link href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN CSS for this page -->
        <!-- END CSS for this page -->
    </head>
    <body class="adminbody">
        <div id="main">
            <!-- top bar navigation -->
            <div class="headerbar">
                <!-- LOGO -->
                <div class="headerbar-left">
                    <a href="index.html" class="logo"><img alt="logo" src="<?php echo base_url(); ?>public/images/logo1.png" /> <span>Tuấn Mobile</span></a>
                </div>
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small>Help and Support</small></h5>
                                </div>
                                <!-- item-->
                                <a target="_blank" href="" class="dropdown-item notify-item">
                                    <p class="notify-details ml-0">
                                        <b>Do you want custom development to integrate this theme?</b>
                                        <span>Contact Us</span>
                                    </p>
                                </a>
                                <!-- item-->
                                <a target="_blank" href="" class="dropdown-item notify-item">
                                    <p class="notify-details ml-0">
                                        <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                        <span>Try Pike Admin PRO</span>
                                    </p>
                                </a>
                                <!-- All-->
                                <a title="Clcik to visit Pike Admin Website" target="_blank" href="" class="dropdown-item notify-item notify-all">
                                <i class="fa fa-link"></i> Visit Pike Admin Website
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">1</span>Contact Messages</small></h5>
                                </div>
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <p class="notify-details ml-0">
                                        <b>Tuấn đẹp trai</b>
                                        <span>New message received</span>
                                        <small class="text-muted">2 minutes ago</small>
                                    </p>
                                </a>
                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                View All
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">1</span>Allerts</small></h5>
                                </div>
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="<?php echo base_url(); ?>public/images/avatars/admintuan.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Hoàng Thanh Tuấn</b>
                                        <span>User registration</span>
                                        <small class="text-muted">3 minutes ago</small>
                                    </p>
                                </a>
                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all">
                                View All Allerts
                                </a>
                            </div>
                        </li>
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url(); ?>public/images/avatars/admintuan.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
                                <!-- item-->
                                <a target="_blank" href="https://www.facebook.com/thanhtuanldr" class="dropdown-item notify-item">
                                <i class="fa fa-facebook"></i> <span>FB Admin</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                            <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Navigation -->
            <!-- Left Sidebar -->
            <div class="left main-sidebar">
                <div class="sidebar-inner leftscroll">
                    <div id="sidebar-menu">
                        <ul>
                            <li class="submenu">
                                <a href="index.html"><i class="fa fa-fw fa-bars"></i><span> Bảng điều khiển </span> </a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fa fa-building"></i> <span> Danh mục sản phẩm </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="ui-alerts.html"> Thêm danh mục </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fa fa-mobile"></i> <span> Sản phẩm </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="forms-general.html"> Thêm sản phẩm </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fa fa-user"></i> <span> Người dùng </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="star-rating.html">Thêm người dùng </a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="fa fa-fw fa-image"></i> <span> Images and Galleries </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="media-fancybox.html"><span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a></li>
                                    <li><a href="media-masonry.html">Masonry</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- End Sidebar -->