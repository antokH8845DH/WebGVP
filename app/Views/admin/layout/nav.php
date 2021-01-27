<?php $session = session(); ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- header area start -->
        <div class="header-area">
            <div class="row align-items-center">
                <!-- nav and search button -->
                <div class="col-md-6 col-sm-8 clearfix">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- <div class="search-box pull-left">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search..." required>
                            <i class="ti-search"></i>
                        </form>
                    </div> -->
                </div>
                <div class="col-sm-6 clearfix">
                    <div class="user-profile pull-right">
                        <img class="avatar user-thumb" src="<?= base_url(); ?>/BackEnd/srtdash/assets/images/author/avatar.png" alt="avatar">
                        <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $session->get('username'); ?> <i class="fa fa-angle-down"></i></h4>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Message</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="brand" style="font-weight: 1000;">
                    <!-- <a href="index.html"><img src="<?= base_url(); ?>/image/logo/gvp logo.png" style="max-width: 25%;" alt="logo">
                        <span class="">GVPWebAdmin</span>
                    </a> -->
                    <a href="#">
                        <h3 style="color:#3851DE">GVP<small style="color:#9338DE">WebAdmin</small></h3>

                    </a>

                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true">dashboard</a>
                            <li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Master Data</span></a>
                                <ul class="collapse">
                                    <li><a href="<?= base_url('HomeAdmin/view'); ?>">Category Product</a></li>
                                    <li><a href="<?= base_url('product/view'); ?>">Product</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Tampilan</span></a>
                                <ul class="collapse">
                                    <li><a href="accordion.html">Header</a></li>
                                    <li><a href="alert.html">Features</a></li>
                                    <li><a href="badge.html">News</a></li>
                                    <li><a href="button.html">Career</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">