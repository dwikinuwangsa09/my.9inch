<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>9INCH Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <link rel="stylesheet" href="assets/vendor_assets/css/bootstrap/bootstrap.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/daterangepicker.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/fontawesome.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/footable.standalone.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/fullcalendar@5.2.0.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/jquery-jvectormap-2.0.5.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/leaflet.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/MarkerCluster.Default.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/select2.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/slick.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/star-rating-svg.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/trumbowyg.min.css">

    <link rel="stylesheet" href="assets/vendor_assets/css/wickedpicker.min.css">

    <link rel="stylesheet" href="style.css">

    <!-- endinject -->

    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
</head>
    <?php require_once('aside.php'); ?>

<body class="layout-light side-menu overlayScroll">

    <div class="mobile-author-actions"></div>

        <div class="contents">

            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-main">
                            
                        </div>
                    </div>
                </div>
                <div class="alert-icon-area alert alert-info " role="alert">


<div class="alert-icon">
    <span data-feather="info"></span>
</div>

<div class="alert-content">


    <p>Welcome aboard to 9INCH Dashboard, if you have any questions please email <a href="mailto:dwikinuwangsa@9inch.studio"><b>here</a></p>


</div>
</div>
                                            <div class="row">
                                                
                                <div class="col-xxl-4">
                                    
                                    <div class="row">
                                        
                                        <div class="col-xxl-12 col-md-6">
                                            <!-- Card 2 End  -->
                                            <div class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                                                <div>
                                                    <div class="overview-content overview-content3">
                                                        <div class="d-flex">
                                                            <div class="revenue-chart-box__Icon mr-20 order-bg-opacity-primary">
                                                            <span data-feather="users" class="nav-icon"></span>
                                                            </div>
                                                            <div>
                                                                <h2>70 Crew</h2>
                                                                <p class="mb-3 mt-1">Total Active Crew</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Card 2 End  -->
                                        </div>
                                        <div class="col-xxl-12 col-md-6">
                                            <!-- Card 1 -->
                                            <div class="ap-po-details ap-po-details--2 p-30 radius-xl bg-white d-flex justify-content-between mb-25">
                                                <div>
                                                    <div class="overview-content overview-content3">
                                                        <div class="d-flex">
                                                            <div class="revenue-chart-box__Icon mr-20 order-bg-opacity-secondary">
                                                            <span data-feather="video" class="nav-icon"></span>
                                                            </div>
                                                            <div>
                                                                <h2>20 Content</h2>
                                                                <p class="mb-3 mt-1">Total Content Created</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Card 1 End -->
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xxl-8 mb-25">

                                    <div class="card border-0">
                                        <div class="card-header">
                                            <h6>Recent Content</h6>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="t_selling-today2" role="tabpanel" aria-labelledby="t_selling-today2-tab">
                                                    <div class="selling-table-wrap">
                                                        <div class="table-responsive">
                                                            <table class="table table--default">
                                                                <thead>
                                                               
                                                                    <tr>
                                                                        <th>Project Owner</th>
                                                                        <th>Project Name</th>
                                                                        <th>Responsible</th>
                                                                        <th>Status</th>
                                                                        <th>Action</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
													include "config/koneksi.php";
													$no = 1;
													$query = mysqli_query($db, 'SELECT * FROM worksheet LIMIT 5');
													while ($data = mysqli_fetch_array($query)) {
													?>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="selling-product-img d-flex align-items-center">
                                                                                <img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="img/<?php echo $data['owner'] ?>.jpg" alt="img">
                                                                                <span><?php echo $data['owner'] ?></span>
                                                                            </div>
                                                                        </td>
                                                                        <td><?php echo $data['projectname'] ?></td>
                                                                        <td><?php echo $data['responsible'] ?></td>

                                                                        <td>                                                                        
                                                                            <div class="d-flex justify-content-end">
                                                                                <span class="selling-badge order-bg-opacity-success color-success"><?php echo $data['status'] ?></span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                    <li>
                                                        <a href="see_content.php?id=<?php echo $data['id'] ?>" class="eye">
                                                            <span data-feather="eye"></span></a>
                                                    </li>
                                                </ul>
                                            </td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="atbd-page-content">
                <div class="container-fluid">
                    <div class="row calendar-grid justify-content-center">
                        <!-- ends: .col-lg-3 -->
                        <div class="col-xxl-12 col-xl-7">
                            <div class="card card-default card-md mb-4">
                                <div class="card-body">
                                    <div id='full-calendar'></div>
                                </div>
                            </div>
                            <!-- ends: .card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: .atbd-page-content -->
            </div>
        <footer class="footer-wrapper">
        </footer>
    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="atbd-spin-dots spin-lg">
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
                <span class="spin-dot badge-dot dot-primary"></span>
            </div>
        </span>
    </div>
    <div class="overlay-dark-sidebar"></div>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <!-- inject:js-->
    <script src="assets/vendor_assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/vendor_assets/js/jquery/jquery-ui.js"></script>
    <script src="assets/vendor_assets/js/bootstrap/popper.js"></script>
    <script src="assets/vendor_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/vendor_assets/js/moment/moment.min.js"></script>
    <script src="assets/vendor_assets/js/accordion.js"></script>
    <script src="assets/vendor_assets/js/autoComplete.js"></script>
    <script src="assets/vendor_assets/js/Chart.min.js"></script>
    <script src="assets/vendor_assets/js/charts.js"></script>
    <script src="assets/vendor_assets/js/daterangepicker.js"></script>
    <script src="assets/vendor_assets/js/drawer.js"></script>
    <script src="assets/vendor_assets/js/dynamicBadge.js"></script>
    <script src="assets/vendor_assets/js/dynamicCheckbox.js"></script>
    <script src="assets/vendor_assets/js/feather.min.js"></script>
    <script src="assets/vendor_assets/js/footable.min.js"></script>
    <script src="assets/vendor_assets/js/fullcalendar@5.2.0.js"></script>
    <script src="assets/vendor_assets/js/google-chart.js"></script>
    <script src="assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendor_assets/js/jquery.countdown.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.filterizr.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.peity.min.js"></script>
    <script src="assets/vendor_assets/js/jquery.star-rating-svg.min.js"></script>
    <script src="assets/vendor_assets/js/leaflet.js"></script>
    <script src="assets/vendor_assets/js/leaflet.markercluster.js"></script>
    <script src="assets/vendor_assets/js/loader.js"></script>
    <script src="assets/vendor_assets/js/message.js"></script>
    <script src="assets/vendor_assets/js/moment.js"></script>
    <script src="assets/vendor_assets/js/muuri.min.js"></script>
    <script src="assets/vendor_assets/js/notification.js"></script>
    <script src="assets/vendor_assets/js/popover.js"></script>
    <script src="assets/vendor_assets/js/select2.full.min.js"></script>
    <script src="assets/vendor_assets/js/slick.min.js"></script>
    <script src="assets/vendor_assets/js/trumbowyg.min.js"></script>
    <script src="assets/vendor_assets/js/wickedpicker.min.js"></script>
    <script src="assets/theme_assets/js/drag-drop.js"></script>
    <script src="assets/theme_assets/js/footable.js"></script>
    <script src="assets/theme_assets/js/full-calendar.js"></script>
    <script src="assets/theme_assets/js/googlemap-init.js"></script>
    <script src="assets/theme_assets/js/icon-loader.js"></script>
    <script src="assets/theme_assets/js/jvectormap-init.js"></script>
    <script src="assets/theme_assets/js/leaflet-init.js"></script>
    <script src="assets/theme_assets/js/main.js"></script>

</body>

</html>