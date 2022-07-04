<!DOCTYPE html>
<html lang="en">



<head>
    <meta name="generator" content="Hugo 0.87.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="Sistem Peramalan Estimasi Biaya Jual Produk Bumdes">
    <title> Bumdes</title>

    <!-- STYLESHEETS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--- -->

    <!-- Fonts [ OPTIONAL ] -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Ubuntu:wght@400;500;700&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS [ REQUIRED ] -->
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/admin/assets/css/bootstrap.min.75a07e3a3100a6fed983b15ad1b297c127a8c2335854b0efc3363731475cbed6.css">

    <!-- Nifty CSS [ REQUIRED ] -->
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/admin/assets/css/nifty.min.4d1ebee0c2ac4ed3c2df72b5178fb60181cfff43375388fee0f4af67ecf44050.css">

    <!-- Auto Complite Search Box -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>


    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="<?= base_url() ?>data/js/leaflet.rotatedMarker.js"></script>
    <script src="<?= base_url() ?>data/js/leaflet.pattern.js"></script>
    <script src="<?= base_url() ?>data/js/leaflet-hash.js"></script>
    <script src="<?= base_url() ?>data/js/Autolinker.min.js"></script>
    <script src="<?= base_url() ?>data/js/rbush.min.js"></script>
    <script src="<?= base_url() ?>data/js/labelgun.min.js"></script>
    <script src="<?= base_url() ?>data/js/labels.js"></script>
    <script src="<?= base_url() ?>data/data/Polygon_4.js"></script>
    <!-- Leaflet Draw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>


    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.css">
    <script src="https://cdn.jsdelivr.net/npm/leaflet-easybutton@2/src/easy-button.js"></script>

    <!-- LEAFLET.COORDINATES.js plugin and the  associated stylesheet -->
    <script src="<?= base_url() ?>leaflet.coordinates/dist/leaflet.coordinates-0.1.4.min.js"></script>
    <link href="<?= base_url() ?>leaflet.coordinates/dist/leaflet.coordinates-0.1.4.css" rel="stylesheet" />

    <style>
    .info {
        padding: 6px 8px;
        font: 13px/15px Arial, Helvetica, sans-serif;
        background: black;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .info h4 {
        margin: 0 0 5px;
        color: #777;
    }

    .labelFirst {
        color: #333;
        font-size: 10px;
        font-weight: normal;
        font: 11px "Helvetica Neue", Arial, Helvetica, sans-serif;
    }

    .leaflet-left .leaflet-control {
        margin-left: 5px;
    }

    .leaflet-control-coordinates {
        border-left-color: #777;
        border-left-width: 2px;
        border-left-style: solid;
        border-right-color: #777;
        border-right-width: 2px;
        border-right-style: solid;
    }

    .leaflet-control-minimap {
        border: solid rgba(255, 255, 255, 1.0) 4px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.65);
        border-radius: 3px;
        background: #f8f8f9;
        transition: all .6s;
    }

    .leaflet-control-minimap a {
        background-color: rgba(255, 255, 255, 1.0);
        background-repeat: no-repeat;
        z-index: 99999;
        transition: all .6s;
    }

    .leaflet-control-minimap a.minimized-bottomright {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        border-radius: 0px;
    }

    .leaflet-control-minimap a.minimized-topleft {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        border-radius: 0px;
    }

    .leaflet-control-minimap a.minimized-bottomleft {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
        border-radius: 0px;
    }

    .leaflet-control-minimap a.minimized-topright {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        border-radius: 0px;
    }

    .leaflet-control-minimap-toggle-display {
        background-image: url("<?=base_url()?>/Images/toggle.svg");
        background-size: cover;
        position: absolute;
        border-radius: 3px 0px 0px 0px;
    }

    .leaflet-oldie .leaflet-control-minimap-toggle-display {
        background-image: url("<?=base_url()?>/Images/toggle.png");
    }

    .leaflet-control-minimap-toggle-display-bottomright {
        bottom: 0;
        right: 0;
    }

    .leaflet-control-minimap-toggle-display-topleft {
        top: 0;
        left: 0;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .leaflet-control-minimap-toggle-display-bottomleft {
        bottom: 0;
        left: 0;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .leaflet-control-minimap-toggle-display-topright {
        top: 0;
        right: 0;
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
    }

    /* Old IE */
    .leaflet-oldie .leaflet-control-minimap {
        border: 1px solid #999;
    }

    .leaflet-oldie .leaflet-control-minimap a {
        background-color: #fff;
    }

    .leaflet-oldie .leaflet-control-minimap a.minimized {
        filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
    }

    html,
    body {
        width: 100%;
        height: 600px;
        margin: 0;
    }

    #map {
        width: 49.5%;
        height: 100%;
        margin-bottom: 12px;
    }

    #map {
        float: left;
    }

    #container {
        float: right;
    }

    #container .map {
        width: 100%;
        height: 50%;
    }
    </style>

</head>

<body class="jumping">

    <!-- PAGE CONTAINER -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="root" class="root mn--max hd--expanded">

        <!-- CONTENTS -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <section id="content" class="content">
            <div class="content__header content__boxed overlapping">
                <div class="content__wrap">

                    <!-- Page title and information -->
                    <h1 class="page-title mb-2">Dashboard</h1>
                    <!-- <h2 class="h5">Welcome back to the Dashboard.</h2>
                    <p>Scroll down to see a clearer view, fill in the form to be able to see the map view more focused.
                    </p> -->
                    <!-- END : Page title and information -->

                </div>

            </div>

            <div class="content__boxed">
                <div class="content__wrap">
                    <div class="row">
                        <div class="col-xl-12 mb-3 mb-xl-0">
                            <div class="card mb-3">
                                <div class="card-body">

                                    <h5 class="card-title">Pilih Filter</h5>

                                    <!-- Inline Form -->
                                    <form class="row row-cols-md-auto g-3 align-items-center" method="post"
                                        action="<?php echo base_url('Dashboard/filter');?>">
                                        <div class="col-12">
                                            <select name="id_brg" id="id_product" class="form-control">
                                                <option disabled="disabled" selected="selected">Pilih Barang</option>
                                                <?php
											foreach ($brg as $row) {
										?>
                                                <option value="<?php echo $row->id_brg; ?>">
                                                    <?php echo $row->barang; ?>
                                                </option>
                                                <?php
											}
										?>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <select name="id_provinsi" id="id_provinsi" class="form-control">
                                                <option disabled="disabled" selected="selected">Pilih Provinsi</option>
                                                <?php
											foreach ($provinsi as $row) {
										?>
                                                <option value="<?php echo $row->id_provinsi; ?>">
                                                    <?php echo $row->nama; ?>
                                                </option>
                                                <?php
											}
										?>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <select name="id_bulan" id="id_bulan" class="form-control">
                                                <option disabled="disabled" selected="selected">Pilih Bulan</option>
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <select name="id_tahun" id="id_tahun" class="form-control">
                                                <option disabled="disabled" selected="selected">Pilih Tahun</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                    </form>
                                    <!-- END : Inline Form -->

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 mb-3 mb-xl-0">

                            <div class="card h-100">
                                <div class="card-header d-flex align-items-center border-0">
                                    <div class="me-auto">
                                        <h3 class="h4 m-0">Maps</h3>
                                    </div>
                                </div>

                                <!-- Network - Area Chart -->
                                <div class="card-body py-0">
                                    <div id="map" style="width: 100%; height: 500px;"></div>
                                    <p>
                                </div>
                                <!-- END : Network - Area Chart -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- FOOTER -->
            <footer class="content__boxed mt-auto">
                <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
                    <div class="text-nowrap mb-4 mb-md-0">Copyright &copy; 2022 <a href="#"
                            class="ms-1 btn-link fw-bold">Dera++</a></div>
                    <!-- <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto" style="row-gap: 0 !important;">
                        <a class="nav-link px-0" href="#">Policy Privacy</a>
                        <a class="nav-link px-0" href="#">Terms and conditions</a>
                        <a class="nav-link px-0" href="#">Contact Us</a>
                    </nav> -->
                </div>
            </footer>
            <!-- END - FOOTER -->

        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->

        <!-- HEADER -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <header class="header">
            <div class="header__inner">

                <!-- Brand -->
                <div class="header__brand">
                    <div class="brand-wrap">

                        <!-- Brand logo -->
                        <a href="index.html" class="brand-img stretched-link">
                            <img src="<?= base_url() ?>assets/admin/assets/img/logo.svg" alt="Nifty Logo"
                                class="Nifty logo" width="40" height="40">
                        </a>

                        <!-- Brand title -->
                        <div class="brand-title">Nifty</div>

                        <!-- You can also use IMG or SVG instead of a text element. -->

                    </div>
                </div>
                <!-- End - Brand -->

                <div class="header__content">

                    <!-- Content Header - Left Side: -->
                    <div class="header__content-start">

                        <!-- Navigation Toggler -->
                        <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm"
                            aria-label="Nav Toggler">
                            <i class="demo-psi-view-list"></i>
                        </button>

                        <!-- Searchbox -->
                        <div class="header-searchbox">

                            <!-- Searchbox toggler for small devices -->
                            <label for="header-search-input"
                                class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm"
                                type="button">
                                <i class="demo-psi-magnifi-glass"></i>
                            </label>

                            <!-- Searchbox input -->
                            <!-- <form class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                                <input id="header-search-input" class="searchbox__input form-control bg-transparent"
                                    type="search" placeholder="Type for search . . ." aria-label="Search">
                                <div class="searchbox__backdrop">
                                    <button
                                        class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm"
                                        type="button" id="button-addon2">
                                        <i class="demo-pli-magnifi-glass"></i>
                                    </button>
                                </div>
                            </form> -->
                        </div>
                    </div>
                    <!-- End - Content Header - Left Side -->

                </div>
            </div>
        </header>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - HEADER -->

        <!-- MAIN NAVIGATION -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <nav id="mainnav-container" class="mainnav">
            <div class="mainnav__inner">

                <!-- Navigation menu -->
                <div class="mainnav__top-content scrollable-content pb-5">

                    <!-- Profile Widget -->
                    <div class="mainnav__profile mt-3 d-flex3">

                        <div class="mt-2 d-mn-max"></div>

                        <!-- Profile picture  -->
                        <div class="mininav-toggle text-center py-2">
                            <img class="mainnav__avatar img-md rounded-circle border"
                                src="<?= base_url() ?>assets/admin/assets/img/profile-photos/1.png"
                                alt="Profile Picture">
                        </div>

                        <div class="mininav-content  d-mn-max">
                            <div class="d-grid">

                                <!-- User name and position -->
                                <button class="d-block btn shadow-none p-2">
                                    <span class="d-flex justify-content-center align-items-center">
                                        <h6 class="mb-0">Admin</h6>
                                    </span>
                                    <small class="text-muted">Administrator</small>
                                </button>

                            </div>
                        </div>

                    </div>
                    <!-- End - Profile widget -->

                    <!-- Navigation Category -->
                    <div class="mainnav__categoriy py-3">
                        <h6 class="mainnav__caption mt-0 px-3 fw-bold">Navigation</h6>
                        <ul class="mainnav__menu nav flex-column">

                            <!-- Link with submenu -->
                            <li class="nav-item ">
                                <a href="<?= base_url('Dashboard') ?>" class="mininav-toggle nav-link active"><i
                                        class="demo-pli-home fs-5 me-2"></i>
                                    <span class="nav-label ms-1">Maps</span>
                                </a>
                            </li>
                            <!-- END : Link with submenu -->
                        </ul>
                    </div>
                    <!-- END : Navigation Category -->


                </div>
                <!-- End - Navigation menu -->

                <!-- Bottom navigation menu -->
                <div class="mainnav__bottom-content border-top pb-2">
                    <ul id="mainnav" class="mainnav__menu nav flex-column">
                        <li class="nav-item has-sub">
                            <a href="#" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                                <i class="demo-pli-unlock fs-5 me-2"></i>
                                <span class="nav-label ms-1">Logout</span>
                            </a>
                            <ul class="mininav-content nav flex-column collapse">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">This device only</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">All Devices</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lock
                                        screen</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- End - Bottom navigation menu -->

            </div>
        </nav>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - MAIN NAVIGATION -->

        <!-- SIDEBAR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <aside class="sidebar">
            <div class="sidebar__inner scrollable-content">

                <!-- This element is only visible when sidebar Stick mode is active. -->
                <div class="sidebar__stuck align-item-center mb-3 px-4">
                    <p class="m-0 text-danger">Close the sidebar =></p>
                    <button type="button" class="sidebar-toggler btn-close btn-lg rounded-circle ms-auto"
                        aria-label="Close"></button>
                </div>

                <!-- Sidebar tabs nav -->
                <div class="sidebar__wrap">
                    <nav class="px-3">
                        <div class="nav nav-callout nav-fill flex-nowrap" id="nav-tab" role="tablist">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-chat"
                                type="button" role="tab" aria-controls="nav-chat" aria-selected="true">
                                <i class="d-block demo-pli-speech-bubble-5 fs-3 mb-2"></i>
                                <span>Chat</span>
                            </button>

                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-reports" type="button"
                                role="tab" aria-controls="nav-reports" aria-selected="false">
                                <i class="d-block demo-pli-information fs-3 mb-2"></i>
                                <span>Reports</span>
                            </button>

                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-settings" type="button"
                                role="tab" aria-controls="nav-settings" aria-selected="false">
                                <i class="d-block demo-pli-wrench fs-3 mb-2"></i>
                                <span>Settings</span>
                            </button>
                        </div>
                    </nav>
                </div>
                <!-- End - Sidebar tabs nav -->

                <!-- Sideabar tabs content -->
                <div class="tab-content sidebar__wrap" id="nav-tabContent">

                    <!-- Chat tab Content -->
                    <div id="nav-chat" class="tab-pane fade py-4 show active" role="tabpanel"
                        aria-labelledby="nav-chat-tab">

                        <!-- Family list group -->
                        <h5 class="px-3">Family</h5>
                        <div class="list-group list-group-borderless">

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle"
                                        src="<?= base_url() ?>assets/admin/assets/img/profile-photos/2.png"
                                        alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Stephen
                                        Tran</a>
                                    <small class="text-muted">Available</small>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle"
                                        src="<?= base_url() ?>assets/admin/assets/img/profile-photos/8.png"
                                        alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Betty
                                        Murphy</a>
                                    <small class="text-muted">Iddle</small>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle"
                                        src="<?= base_url() ?>assets/admin/assets/img/profile-photos/7.png"
                                        alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Brittany
                                        Meyer</a>
                                    <small class="text-muted">I think so!</small>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle"
                                        src="<?= base_url() ?>assets/admin/assets/img/profile-photos/4.png"
                                        alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jack
                                        George</a>
                                    <small class="text-muted">Last seen 2 hours ago</small>
                                </div>
                            </div>

                        </div>
                        <!-- End - Family list group -->

                        <!-- Friends Group -->
                        <h5 class="d-flex mt-5 px-3">Friends <span class="badge bg-success ms-auto">587 +</span></h5>
                        <div class="list-group list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-success rounded-circle p-1"></span>
                                Joey K. Greyson
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-info rounded-circle p-1"></span>
                                Andrea Branden
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-warning rounded-circle p-1"></span>
                                Johny Juan
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-secondary rounded-circle p-1"></span>
                                Susan Sun
                            </a>
                        </div>
                        <!-- End - Friends Group -->

                        <!-- Simple news widget -->
                        <div class="px-3">
                            <h5 class="mt-5">News</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui consequatur ipsum porro a
                                repellat eaque exercitationem necessitatibus esse voluptate corporis.</p>
                            <small class="fst-italic">Last Update : Today 13:54</small>
                        </div>
                        <!-- End - Simple news widget -->

                    </div>
                    <!-- End - Chat tab content -->

                    <!-- Reports tab content -->
                    <div id="nav-reports" class="tab-pane fade py-4" role="tabpanel" aria-labelledby="nav-reports-tab">

                        <!-- Billing and Resports -->
                        <div class="px-3">
                            <h5 class="mb-3">Billing &amp Reports</h5>
                            <p>Get <span class="badge bg-danger">$15.00 off</span> your next bill by making sure your
                                full payment reaches us before August 5th.</p>

                            <h5 class="mt-5 mb-0">Amount Due On</h5>
                            <p>August 17, 2028</p>
                            <p class="h1">$83.09</p>

                            <div class="d-grid">
                                <button class="btn btn-success" type="button">Pay now</button>
                            </div>
                        </div>
                        <!-- End - Billing and Resports -->

                        <!-- Additional actions nav -->
                        <h5 class="mt-5 px-3">Additional Actions</h5>
                        <div class="list-group list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-information me-2 fs-5"></i>
                                Services Information
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-mine me-2 fs-5"></i>
                                Usage
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-credit-card-2 me-2 fs-5"></i>
                                Payment Options
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-support me-2 fs-5"></i>
                                Messages Center
                            </a>
                        </div>
                        <!-- End - Additional actions nav -->

                        <!-- Contact widget -->
                        <div class="px-3 mt-5 text-center">
                            <div class="mb-3">
                                <i class="demo-pli-old-telephone display-4 text-primary"></i>
                            </div>
                            <p>Have a question ?</p>
                            <p class="h5 mb-0"> (415) 234-53454 </p>
                            <small><em>We are here 24/7</em></small>
                        </div>
                        <!-- End - Contact widget -->

                    </div>
                    <!-- End - Reports tab content -->

                    <!-- Settings content -->
                    <div id="nav-settings" class="tab-pane fade py-4" role="tabpanel"
                        aria-labelledby="nav-settings-tab">

                        <!-- Account settings -->
                        <h5 class="px-3">Account Settings</h5>
                        <div class="list-group list-group-borderless">

                            <div class="list-group-item mb-1">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-check-label" for="_dm-sbPersonalStatus">Show my personal
                                        status</label>
                                    <div class="form-check form-switch">
                                        <input id="_dm-sbPersonalStatus" class="form-check-input" type="checkbox"
                                            checked>
                                    </div>
                                </div>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                    elit.</small>
                            </div>

                            <div class="list-group-item mb-1">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-check-label" for="_dm-sbOfflineContact">Show offline
                                        contact</label>
                                    <div class="form-check form-switch">
                                        <input id="_dm-sbOfflineContact" class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                            </div>

                            <div class="list-group-item mb-1">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-check-label" for="_dm-sbInvisibleMode">Invisible Mode</label>
                                    <div class="form-check form-switch">
                                        <input id="_dm-sbInvisibleMode" class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes,
                                    nascetur ridiculus mus.</small>
                            </div>

                        </div>
                        <!-- End - Account settings -->

                        <!-- Public Settings -->
                        <h5 class="mt-5 px-3">Public Settings</h5>
                        <div class="list-group list-group-borderless">

                            <div class="list-group-item d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbOnlineStatus">Online Status</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbOnlineStatus" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>

                            <div class="list-group-item d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbMuteNotifications">Mute Notifications</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbMuteNotifications" class="form-check-input" type="checkbox"
                                        checked>
                                </div>
                            </div>

                            <div class="list-group-item d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbMyDevicesName">Show my device name</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbMyDevicesName" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>

                        </div>
                        <!-- End - Public Settings -->

                    </div>
                    <!-- End - Settings content -->

                </div>
                <!-- End - Sidebar tabs content -->

            </div>
        </aside>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - SIDEBAR -->

    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - PAGE CONTAINER -->

    <!-- SCROLL TO TOP BUTTON -->
    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SCROLL TO TOP BUTTON -->

    <!-- BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-boxedBgContent" class="_dm-boxbg offcanvas offcanvas-bottom" data-bs-backdrop="false"
        data-bs-scroll="true" tabindex="-1">
        <div class="offcanvas-body p-4">

            <!-- Content Header -->
            <div class="offcanvas-header border-bottom p-0 pb-3">
                <div>
                    <h4 class="offcanvas-title">Background Images</h4>
                    <span class="text-muted">Add an image to replace the solid background color</span>
                </div>
                <button type="button" class="btn-close btn-lg text-reset shadow-none" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <!-- End - Content header -->

            <!-- Collection Of Images -->
            <div id="_dm-boxedBgContainer" class="row mt-3">

                <!-- Blurred Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Blurred</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/1.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/2.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/3.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/4.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/5.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/6.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/7.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/8.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/9.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/10.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/11.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/12.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/13.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/14.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/15.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/blurred/thumbs/16.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Blurred Background Images -->

                <!-- Polygon Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Polygon &amp; Geometric</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/1.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/2.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/3.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/4.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/5.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/6.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/7.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/8.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/9.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/10.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/11.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/12.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/13.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/14.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/15.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/polygon/thumbs/16.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Polygon Background Images -->

                <!-- Abstract Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Abstract</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/1.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/2.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/3.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/4.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/5.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/6.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/7.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/8.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/9.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/10.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/11.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/12.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/13.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/14.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/15.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive"
                                src="<?= base_url() ?>assets/admin/assets/premium/boxed-bg/abstract/thumbs/16.jpg"
                                alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Abstract Background Images -->

            </div>
            <!-- End - Collection Of Images -->

        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->

    <!-- JAVASCRIPTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <script>
    var highlightLayer;

    function highlightFeature(e) {
        highlightLayer = e.target;

        if (e.target.feature.geometry.type === 'LineString') {
            highlightLayer.setStyle({
                color: '#ffff00',
            });
        } else {
            highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
            });
        }
    }
    var map = L.map('map', {

        center: [-4.784, 112.654],
        zoom: 5
    })
    var hash = new L.Hash(map);
    var bounds_group = new L.featureGroup([]);
    var drawnItems = L.featureGroup()
    // var grupirigasi = L.layerGroup();
    // var grupjalan = L.layerGroup();
    var grupbangunan = L.layerGroup();
    // var gruppencurian = L.layerGroup();
    // var grupttm = L.layerGroup();
    // var grupttbm = L.layerGroup();
    // var grupptm = L.layerGroup();
    // var grupptbm = L.layerGroup();
    // var grupbencana_alam = L.layerGroup();


    function setBounds() {
        if (bounds_group.getLayers().length) {
            map.fitBounds(bounds_group.getBounds());
        }
    }

    var overlay_ESRIWorldTopo_0 = L.tileLayer(
        'http://services.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
            opacity: 1.0
        });
    overlay_ESRIWorldTopo_0.addTo(map);
    map.addLayer(overlay_ESRIWorldTopo_0);

    var mytile = L.tileLayer('<?=base_url()?>/tiles/QTiles/{z}/{x}/{y}.png', {
        opacity: 1.0
    });
    mytile.addTo(map);
    map.addLayer(mytile);

    var overlay_GoogleRoads_1 = L.tileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}', {
        opacity: 1.0
    });
    overlay_GoogleRoads_1.addTo(map);
    map.addLayer(overlay_GoogleRoads_1);

    var overlay_GoogleMaps_2 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
        opacity: 1.0
    });
    overlay_GoogleMaps_2.addTo(map);
    map.addLayer(overlay_GoogleMaps_2);


    var overlay_GoogleSatelliteHybrid_3 = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        opacity: 1.0
    });
    overlay_GoogleSatelliteHybrid_3.addTo(map);
    map.addLayer(overlay_GoogleSatelliteHybrid_3);



    <?php foreach ($data as $key => $value) { ?>
    L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
        icon: L.icon({
            iconUrl: '<?= base_url('marker/hotmix.png')  ?>',
            iconSize: [30, 36], // size of the icon
        })
    }).addTo(grupbangunan).bindPopup(
        "Nama  : <?= $value->nama_mitra?></br>" +
        "Barang  : <?= $value->barang  ?></br>" +
        "Harga : <?= $value->harga ?></br>" +
        "Tanggal : <?= $value->tanggal ?></br>" +
        "<center><br><br><a href='<?= base_url('Dashboard/detail/' . $value->id) ?>' class='btn btn-sm btn-outline-primary'>Detail</a>"
    );
    <?php } ?>
    // Coordinates plugin
    L.control.coordinates({
        position: "bottomleft", //optional default "bootomright"
        decimals: 3, //optional default 
        decimalSeperator: ".", //optional default "."
        labelTemplateLat: "Latitude: {y}", //optional default "Lat: {y}"
        labelTemplateLng: "Longitude: {x}", //optional default "Lng: {x}"
        enableUserInput: false, //optional default true
        useDMS: true, //optional default false
        useLatLngOrder: true //ordering of labels, default false-> lng-lat
    }).addTo(map);

    bounds_group.addLayer(grupbangunan);
    map.addLayer(grupbangunan);

    baseLayers = {
        // "Foto Udara 2020": mytile,
        "ESRI World Topo": overlay_ESRIWorldTopo_0,
        "Google Maps": overlay_GoogleMaps_2,
        "Google Roads": overlay_GoogleRoads_1,
        "Google Satellite Hybrid": overlay_GoogleSatelliteHybrid_3

    };

    overlays = {
        // "Lokasi Bangunan": grupbangunan,

    };

    L.control.layers(baseLayers, overlays).addTo(map);

    // Add the scale bar
    // see http://leafletjs.com/reference.html#control-scale
    var homebutton = L.easyButton('demo-pli-home', function() {
        map.setView([-4.784, 112.654], 5);
    }, 'home position', {
        position: 'topright'
    });
    homebutton.addTo(map);
    L.control.scale().addTo(map);
    L.Control.geocoder().addTo(map);
    setBounds();


    map.addControl(new L.Control.Draw({
        edit: {
            featureGroup: drawnItems,
            poly: {
                allowIntersection: false
            }
        },
        draw: {
            polygon: {
                allowIntersection: false,
                showArea: true
            }
        }
    }));

    map.on(L.Draw.Event.CREATED, function(event) {
        var layer = event.layer;

        drawnItems.addLayer(layer);
    });

    (function(factory, window) {
        if (typeof define === "function" && define.amd) {
            define(["leaflet"], factory)
        } else if (typeof exports === "object") {
            module.exports = factory(require("leaflet"))
        }
        if (typeof window !== "undefined" && window.L) {
            window.L.Control.MiniMap = factory(L);
            window.L.control.minimap = function(layer, options) {
                return new window.L.Control.MiniMap(layer, options)
            }
        }
    })(function(L) {
        var MiniMap = L.Control.extend({
            includes: L.Evented ? L.Evented.prototype : L.Mixin.Events,
            options: {
                position: "bottomright",
                toggleDisplay: false,
                zoomLevelOffset: -6,
                zoomLevelFixed: false,
                centerFixed: false,
                zoomAnimation: false,
                autoToggleDisplay: false,
                minimized: false,
                width: 150,
                height: 150,
                collapsedWidth: 19,
                collapsedHeight: 19,
                aimingRectOptions: {
                    color: "black",
                    weight: 1,
                    clickable: false
                },
                shadowRectOptions: {
                    color: "#000000",
                    weight: 1,
                    clickable: false,
                    opacity: 0,
                    fillOpacity: 0
                },
                strings: {
                    hideText: "Hide MiniMap",
                    showText: "Show MiniMap"
                },
                mapOptions: {}
            },
            initialize: function(layer, options) {
                L.Util.setOptions(this, options);
                this.options.aimingRectOptions.clickable = false;
                this.options.shadowRectOptions.clickable = false;
                this._layer = layer
            },
            onAdd: function(map) {
                this._mainMap = map;
                this._container = L.DomUtil.create("div", "leaflet-control-minimap");
                this._container.style.width = this.options.width + "px";
                this._container.style.height = this.options.height + "px";
                L.DomEvent.disableClickPropagation(this._container);
                L.DomEvent.on(this._container, "mousewheel", L.DomEvent.stopPropagation);
                var mapOptions = {
                    attributionControl: false,
                    dragging: !this.options.centerFixed,
                    zoomControl: false,
                    zoomAnimation: this.options.zoomAnimation,
                    autoToggleDisplay: this.options.autoToggleDisplay,
                    touchZoom: this.options.centerFixed ? "center" : !this._isZoomLevelFixed(),
                    scrollWheelZoom: this.options.centerFixed ? "center" : !this
                        ._isZoomLevelFixed(),
                    doubleClickZoom: this.options.centerFixed ? "center" : !this
                        ._isZoomLevelFixed(),
                    boxZoom: !this._isZoomLevelFixed(),
                    crs: map.options.crs
                };
                mapOptions = L.Util.extend(this.options.mapOptions, mapOptions);
                this._miniMap = new L.Map(this._container, mapOptions);
                this._miniMap.addLayer(this._layer);
                this._mainMapMoving = false;
                this._miniMapMoving = false;
                this._userToggledDisplay = false;
                this._minimized = false;
                if (this.options.toggleDisplay) {
                    this._addToggleButton()
                }
                this._miniMap.whenReady(L.Util.bind(function() {
                    this._aimingRect = L.rectangle(this._mainMap.getBounds(), this.options
                        .aimingRectOptions).addTo(this._miniMap);
                    this._shadowRect = L.rectangle(this._mainMap.getBounds(), this.options
                        .shadowRectOptions).addTo(this._miniMap);
                    this._mainMap.on("moveend", this._onMainMapMoved, this);
                    this._mainMap.on("move", this._onMainMapMoving, this);
                    this._miniMap.on("movestart", this._onMiniMapMoveStarted, this);
                    this._miniMap.on("move", this._onMiniMapMoving, this);
                    this._miniMap.on("moveend", this._onMiniMapMoved, this)
                }, this));
                return this._container
            },
            addTo: function(map) {
                L.Control.prototype.addTo.call(this, map);
                var center = this.options.centerFixed || this._mainMap.getCenter();
                this._miniMap.setView(center, this._decideZoom(true));
                this._setDisplay(this.options.minimized);
                return this
            },
            onRemove: function(map) {
                this._mainMap.off("moveend", this._onMainMapMoved, this);
                this._mainMap.off("move", this._onMainMapMoving, this);
                this._miniMap.off("moveend", this._onMiniMapMoved, this);
                this._miniMap.removeLayer(this._layer)
            },
            changeLayer: function(layer) {
                this._miniMap.removeLayer(this._layer);
                this._layer = layer;
                this._miniMap.addLayer(this._layer)
            },
            _addToggleButton: function() {
                this._toggleDisplayButton = this.options.toggleDisplay ? this._createButton("", this
                        ._toggleButtonInitialTitleText(),
                        "leaflet-control-minimap-toggle-display leaflet-control-minimap-toggle-display-" +
                        this.options.position, this._container, this._toggleDisplayButtonClicked, this
                    ) :
                    undefined;
                this._toggleDisplayButton.style.width = this.options.collapsedWidth + "px";
                this._toggleDisplayButton.style.height = this.options.collapsedHeight + "px"
            },
            _toggleButtonInitialTitleText: function() {
                if (this.options.minimized) {
                    return this.options.strings.showText
                } else {
                    return this.options.strings.hideText
                }
            },
            _createButton: function(html, title, className, container, fn, context) {
                var link = L.DomUtil.create("a", className, container);
                link.innerHTML = html;
                link.href = "#";
                link.title = title;
                var stop = L.DomEvent.stopPropagation;
                L.DomEvent.on(link, "click", stop).on(link, "mousedown", stop).on(link, "dblclick",
                        stop)
                    .on(link, "click", L.DomEvent.preventDefault).on(link, "click", fn, context);
                return link
            },
            _toggleDisplayButtonClicked: function() {
                this._userToggledDisplay = true;
                if (!this._minimized) {
                    this._minimize()
                } else {
                    this._restore()
                }
            },
            _setDisplay: function(minimize) {
                if (minimize !== this._minimized) {
                    if (!this._minimized) {
                        this._minimize()
                    } else {
                        this._restore()
                    }
                }
            },
            _minimize: function() {
                if (this.options.toggleDisplay) {
                    this._container.style.width = this.options.collapsedWidth + "px";
                    this._container.style.height = this.options.collapsedHeight + "px";
                    this._toggleDisplayButton.className += " minimized-" + this.options.position;
                    this._toggleDisplayButton.title = this.options.strings.showText
                } else {
                    this._container.style.display = "none"
                }
                this._minimized = true;
                this._onToggle()
            },
            _restore: function() {
                if (this.options.toggleDisplay) {
                    this._container.style.width = this.options.width + "px";
                    this._container.style.height = this.options.height + "px";
                    this._toggleDisplayButton.className = this._toggleDisplayButton.className.replace(
                        "minimized-" + this.options.position, "");
                    this._toggleDisplayButton.title = this.options.strings.hideText
                } else {
                    this._container.style.display = "block"
                }
                this._minimized = false;
                this._onToggle()
            },
            _onMainMapMoved: function(e) {
                if (!this._miniMapMoving) {
                    var center = this.options.centerFixed || this._mainMap.getCenter();
                    this._mainMapMoving = true;
                    this._miniMap.setView(center, this._decideZoom(true));
                    this._setDisplay(this._decideMinimized())
                } else {
                    this._miniMapMoving = false
                }
                this._aimingRect.setBounds(this._mainMap.getBounds())
            },
            _onMainMapMoving: function(e) {
                this._aimingRect.setBounds(this._mainMap.getBounds())
            },
            _onMiniMapMoveStarted: function(e) {
                if (!this.options.centerFixed) {
                    var lastAimingRect = this._aimingRect.getBounds();
                    var sw = this._miniMap.latLngToContainerPoint(lastAimingRect.getSouthWest());
                    var ne = this._miniMap.latLngToContainerPoint(lastAimingRect.getNorthEast());
                    this._lastAimingRectPosition = {
                        sw: sw,
                        ne: ne
                    }
                }
            },
            _onMiniMapMoving: function(e) {
                if (!this.options.centerFixed) {
                    if (!this._mainMapMoving && this._lastAimingRectPosition) {
                        this._shadowRect.setBounds(new L.LatLngBounds(this._miniMap
                            .containerPointToLatLng(
                                this._lastAimingRectPosition.sw), this._miniMap
                            .containerPointToLatLng(this._lastAimingRectPosition.ne)));
                        this._shadowRect.setStyle({
                            opacity: 1,
                            fillOpacity: .3
                        })
                    }
                }
            },
            _onMiniMapMoved: function(e) {
                if (!this._mainMapMoving) {
                    this._miniMapMoving = true;
                    this._mainMap.setView(this._miniMap.getCenter(), this._decideZoom(false));
                    this._shadowRect.setStyle({
                        opacity: 0,
                        fillOpacity: 0
                    })
                } else {
                    this._mainMapMoving = false
                }
            },
            _isZoomLevelFixed: function() {
                var zoomLevelFixed = this.options.zoomLevelFixed;
                return this._isDefined(zoomLevelFixed) && this._isInteger(zoomLevelFixed)
            },
            _decideZoom: function(fromMaintoMini) {
                if (!this._isZoomLevelFixed()) {
                    if (fromMaintoMini) {
                        return this._mainMap.getZoom() + this.options.zoomLevelOffset
                    } else {
                        var currentDiff = this._miniMap.getZoom() - this._mainMap.getZoom();
                        var proposedZoom = this._miniMap.getZoom() - this.options.zoomLevelOffset;
                        var toRet;
                        if (currentDiff > this.options.zoomLevelOffset && this._mainMap.getZoom() < this
                            ._miniMap.getMinZoom() - this.options.zoomLevelOffset) {
                            if (this._miniMap.getZoom() > this._lastMiniMapZoom) {
                                toRet = this._mainMap.getZoom() + 1;
                                this._miniMap.setZoom(this._miniMap.getZoom() - 1)
                            } else {
                                toRet = this._mainMap.getZoom()
                            }
                        } else {
                            toRet = proposedZoom
                        }
                        this._lastMiniMapZoom = this._miniMap.getZoom();
                        return toRet
                    }
                } else {
                    if (fromMaintoMini) {
                        return this.options.zoomLevelFixed
                    } else {
                        return this._mainMap.getZoom()
                    }
                }
            },
            _decideMinimized: function() {
                if (this._userToggledDisplay) {
                    return this._minimized
                }
                if (this.options.autoToggleDisplay) {
                    if (this._mainMap.getBounds().contains(this._miniMap.getBounds())) {
                        return true
                    }
                    return false
                }
                return this._minimized
            },
            _isInteger: function(value) {
                return typeof value === "number"
            },
            _isDefined: function(value) {
                return typeof value !== "undefined"
            },
            _onToggle: function() {
                L.Util.requestAnimFrame(function() {
                    L.DomEvent.on(this._container, "transitionend", this._fireToggleEvents,
                        this);
                    if (!L.Browser.any3d) {
                        L.Util.requestAnimFrame(this._fireToggleEvents, this)
                    }
                }, this)
            },
            _fireToggleEvents: function() {
                L.DomEvent.off(this._container, "transitionend", this._fireToggleEvents, this);
                var data = {
                    minimized: this._minimized
                };
                this.fire(this._minimized ? "minimize" : "restore", data);
                this.fire("toggle", data)
            }
        });
        L.Map.mergeOptions({
            miniMapControl: false
        });
        L.Map.addInitHook(function() {
            if (this.options.miniMapControl) {
                this.miniMapControl = (new MiniMap).addTo(this)
            }
        });
        return MiniMap
    }, window);

    // Overview mini map
    Esri_WorldTopoMap = L.tileLayer(
        'http://server.arcgisonline.com/ArcGIS/rest/services/NatGeo_World_Map/MapServer/tile/{z}/{y}/{x}', {
            attribution: '&copy; Esri &mdash; Esri, DeLorme, NAVTEQ, TomTom, Intermap, iPC, USGS, FAO, NPS, NRCAN, GeoBase, Kadaster NL, Ordnance Survey, Esri Japan, METI, Esri China (Hong Kong), and the GIS User Community'
        });

    miniMap = new L.Control.MiniMap(Esri_WorldTopoMap, {
        toggleDisplay: true,
        minimized: false,
        position: 'bottomright'
    }).addTo(map);

    // Point   
    </script>

    <script>
    $("#id_product").select2();
    $("#id_provinsi").select2();
    $("#id_bulan").select2();
    $("#id_tahun").select2();
    </script>


    <!-- Bootstrap JS [ OPTIONAL ] -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script
        src="<?= base_url() ?>assets/admin/assets/js/bootstrap.min.bdf649e4bf3fa0261445f7c2ed3517c3f300c9bb44cb991c504bdc130a6ead19.js"
        defer>
    </script>

    <!-- Nifty JS [ OPTIONAL ] -->
    <script
        src="<?= base_url() ?>assets/admin/assets/js/nifty.min.b53472f123acc27ffd0c586e4ca3dc5d83c0670a3a5e120f766f88a92240f57b.js"
        defer>
    </script>

    <!-- Plugin scripts [ OPTIONAL ] -->
    <script
        src="<?= base_url() ?>assets/admin/assets/pages/dashboard-1.min.07239cfbfa13a684f5c4668d5282cf217c7793bc57557b4ec22c36740ffb5bf1.js"
        defer></script>


</body>



</html>