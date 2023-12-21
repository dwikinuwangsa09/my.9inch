<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Login - 9INCH Dashboard</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="img/favicon.png" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		<!--end::Fonts-->
		<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.2/dist/sweetalert2.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/login/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/login/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/login/media/illustrations/sigma-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="../../demo7/dist/index.html" class="mb-12">
						<img alt="Logo" src="assets/login/logo.png" class="h-60px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Sign In to Dashboard</h1>
								<!--end::Title-->
								<?php 
        if(isset($_GET['error'])){
            if($_GET['error'] == "email_not_found"){
                echo '<script>Swal.fire(
                    "E-Mail Tidak Ditemukan!",
                    "Pastikan Kamu Terdaftar Sebagai Top / Kadiv 9INCH Broadcast",
                    "error"
                  )</script>';  
            }
        }
    ?>
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
						
							<!--begin::Actions-->
							<div class="text-center">	
								
							
								<!--begin::Google link-->
								
								<?php
require_once 'config.php';

if (isset($_SESSION['user_token'])) {
  header("Location: dashboard.php");
} else {
  echo "<a class='btn btn-flex flex-center btn-light btn-lg w-100 mb-5' href='" . $client->createAuthUrl() . "'><img alt='Logo' src='assets/login/media/svg/brand-logos/google-icon.svg' class='h-20px me-3' />Login With Google SSO</a>";
}?>
								<!--end::Google link-->
							

								
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/login/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		
		<script src="assets/login/plugins/global/plugins.bundle.js"></script>
		<script src="assets/login/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->

		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/login/js/custom/authentication/sign-in/general.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->


	</body>
	<!--end::Body-->
</html>