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
                        <!-- Start: product page -->
                        <div class="global-shadow border px-sm-30 py-sm-50 px-0 py-20 bg-white radius-xl w-100 mb-40">
                            <div class="row justify-content-center">
                                <div class="col-xl-12 col-lg-10">
                                    <div class="mx-sm-30 mx-20 ">
                                        <!-- Start: card -->
                                        <div class="card add-product p-sm-30 p-20 mb-30">
                                            <div class="card-body p-0">
                                                <div class="card-header">
                                                    <h6 class="fw-500">Update Content</h6>
                                                </div>
                                                <!-- Start: card body -->
                                                <div class="add-product__body px-sm-40 px-20">
                                                    <!-- Start: form -->
                                                    <form action="aksi/update_content.php" method="post">
                                                        <!-- form group -->
                                                        <?php
								include 'config/koneksi.php';
								$id         = $_GET['id'];
								$konten  = mysqli_query($db, "select * from worksheet where id='$id'");
								$row        = mysqli_fetch_array($konten);
                                $databaseChannel = $row['channel'];
                                $databaseOwner = $row['owner'];
                                $databaseStatus = $row['status'];
                                $databaseContenttype = $row['contenttype']


								?>
                                                        <div class="form-group">
                                                            <label for="name1">Project Name</label>
                                                            <input type="text" class="form-control" name="projectname" placeholder="Little Reminder" value="<?php echo $row['projectname'];?>" required>
                                                        </div>
                            
                                                        <!-- form group 1 -->
                                                        <div class="form-group">
                                                            <label for="name2">Date / Time Upload</label>
                                                            <div class="date-picker-list">
                                                        <div class="atbd-date-picker">
                                                            <div class="form-group mb-0 form-group-calender">
                                                                <div class="position-relative">
                                                                    <input type="text" class="form-control form-control-default" name="datetimeup" placeholder="January 20, 2018" value="<?php echo $row['datetimeup'];?>" required>
                                                                    <a href="#"><span data-feather="calendar"></span></a>
                                                                </div>
                                                            </div>

                                                        </div>
</div>
                                                        </div>
<br>                                                        
<!-- form group 2 -->
<div class="form-group">
    <div>
        <label>
            Owner
        </label>
        <select class="js-example-basic-single js-states form-control" name="owner" required>
            <?php
            $channels = array(
                "9TV",
                "9Radio",
                "9 Digital Creative"
            );

            foreach ($channels as $channel) {
                $selected = ($databaseOwner == $channel) ? 'selected' : '';
                echo "<option value='$channel' $selected>$channel</option>";
            }
            ?>
        </select>
    </div>
</div>                                         

                                                        <div class="form-group">
    <div>
        <label>
            Channel
        </label>
        <select class="js-example-basic-single js-states form-control" name="channel" id="channel" required>
            <?php
            $channels = array(
                "Instagram Reels",
                "Instagram Story",
                "Instagram Feed",
                "YouTube",
                "TikTok",
                "Spotify"
            );

            foreach ($channels as $channel) {
                $selected = ($databaseChannel == $channel) ? 'selected' : '';
                echo "<option value='$channel' $selected>$channel</option>";
            }
            ?>
        </select>
    </div>
</div>


<!-- form group 2 -->
<div class="form-group">
    <div>
        <label>
            Owner
        </label>
        <select class="js-example-basic-single js-states form-control" name="contenttype" required>
            <?php
            $channels = array(
                "Emotional",
                "Educational",
                "Selling",
                "Entertaining",

            );

            foreach ($channels as $channel) {
                $selected = ($databaseContenttype == $channel) ? 'selected' : '';
                echo "<option value='$channel' $selected>$channel</option>";
            }
            ?>
        </select>
    </div>
</div>        

                                                        <!-- form group 1 -->
                                                        <div class="form-group">
                                                            <label for="name2">Raw Material</label>
                                                            <input type="text" class="form-control" name="rawmaterial" placeholder="https://drive.google.com/drive/folders/xxxxxxxxxx" value="<?php echo $row['rawmaterial'];?>" required>
                                                        </div>

                                                        
                                                        <!-- form group 1 -->
                                                        <div class="form-group">
                                                            <label for="name2">First Picture</label>
                                                            <input type="text" class="form-control" name="firstpic" placeholder="https://drive.google.com/drive/folders/xxxxxxxxxx" value="<?php echo $row['firstpic'];?>" required>
                                                        </div>

<div class="form-group">
    <div>
        <label>
            Status
        </label>
        <select class="js-example-basic-single js-states form-control" name="status" required>
            <?php
            $channels = array(
                "Content In Progress",
                "Thumbnail In Progress",
                "Feedback Needed",
                "Approved",
                "Scheduled",
                "Posted",


            );

            foreach ($channels as $channel) {
                $selected = ($databaseStatus == $channel) ? 'selected' : '';
                echo "<option value='$channel' $selected>$channel</option>";
            }
            ?>
        </select>
    </div>
</div>        

                                                        
                                                        <!-- form group 1 -->
                                                        <div class="form-group">
                                                            <label for="name2">Responsible</label>
                                                            <input type="email" class="form-control"  name="responsible" value="<?php echo $row['responsible'];?>" readonly required>
                                                        </div>                                   
                                                        
                                                        <!-- form group 1 -->
                                                        <div class="form-group">
                                                            <label for="name2">Link To Content (Drive)</label>
                                                            <input type="text" class="form-control" name="linktodrive" placeholder="https://drive.google.com/drive/folders/xxxxxxxxxx" value="<?php echo $row['linktodrive'];?>" required>
                                                        </div>
                                                        
                                                        <!-- form group 1 -->
                                                        <div class="form-group">
                                                            <label for="name2">Notes</label>
                                                            <input type="text" class="form-control" name="notes" placeholder="Leave A Notes">
                                                        </div>                                                        

                                                        <!-- form group 1 -->
                                                        <div class="form-group">
                                                            <label for="name2">Caption</label>
                                                            <input type="text" class="form-control" name="caption" placeholder="https://drive.google.com/drive/folders/xxxxxxxxxx" value="<?php echo $row['caption'];?>" required>
                                                        </div>

                                                        <!-- form group 1 -->
                                                        <div class="form-group">
                                                            <label for="name2">Feedback</label>
                                                            <input type="text" class="form-control" name="feedback" placeholder="Leave A Feedback" value="<?php echo $row['feedback'];?>">
                                                        </div>
                                                        
                                                        <!-- form group 1 -->
                                                        <div class="form-group">
                                                            <label for="name2">Link To Content</label>
                                                            <input type="text" class="form-control" name="linktocontent" placeholder="https://www.instagram.com/reel/xxxxxxxxxxx" value="<?php echo $row['linktocontent'];?>">
                                                        </div>                                                            
                                                        <input type="text" name="id" value="<?php echo $row['id'];?>" hidden />

                                        <!-- Start: button group -->
                                        <div class="button-group add-product-btn d-flex justify-content-end mt-40">



                                            <button class="btn btn-primary btn-default btn-squared text-capitalize">Update Content
                                            </button>





                                        </div>
                                        <!-- End: button group -->
                                    </div>
                                </div>
                                <!-- ends: col-lg-8 -->
                            </div>
                        </div>
                        <!-- End: Product page -->
                    </div>
                    <!-- ends: col-lg-12 -->
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
    <script>
$(function() {
  $('input[name="datetimeup"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    timePicker: true,
    timePicker24Hour: true,
    locale: {
      format: 'DD/M/Y hh:mm'
    }
    
  });
});
</script>
</body>

</html>