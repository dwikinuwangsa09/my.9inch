<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>9INCH Dashboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- inject:css-->

    <!-- Add these links in the head section of your HTML -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">  


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

<!-- Add this where you want your DataTable to appear -->
<div class="contents">
<div class="container-fluid">

<div class="row">
                    <div class="col-lg-12">
                    <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Crew Management</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    <div class="action-btn">
                                    </div>
                                    <div class="action-btn">
                                        <a href="add_crew.php" class="btn btn-sm btn-primary btn-add">
                                            <i class="la la-plus"></i> Add New</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
    <div class="card border-0">
        <div class="card-body p-5">
                                                        <div class="tab-content">

            <div class="table-responsive">
                <table id="example" class="table table--default">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>E-Mail</th>
                            <th>Role</th>
                            <th>Action</th>
                            <!-- Add more columns as needed -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
													include "config/koneksi.php";
													$no = 1;
													$query = mysqli_query($db, 'SELECT * FROM users');
													while ($data = mysqli_fetch_array($query)) {
													?>
                        <tr>
                            <td><img class="mr-15 wh-34 radius-xs img-fluid order-bg-opacity-primary" src="<?php echo $data['picture'] ?>" onerror="this.onerror=null;this.src='img/blank.png';"><?php echo $data['full_name'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                            <td><?php echo $data['role'] ?></td>


                            <td>
                                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                    <li>
                                                        <a href="update_user.php?id=<?php echo $data['id'] ?>" class="edit">
                                                            <span data-feather="edit"></span></a>
                                                    </li>
                                                    <li>
                                                        <a href="aksi/delete_user.php?id=<?php echo $data['id'] ?>" class="remove">
                                                            <span data-feather="trash-2"></span></a>
                                                    </li>
                                                </ul>
                                            </td>

                            <!-- Add more rows and data as needed -->
                        </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


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
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#example').DataTable();
        
    });
</script>

    <script src="assets/theme_assets/js/main.js"></script>
</body>

</html>