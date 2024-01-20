<?php 
require_once 'config.php';
// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
	$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
	$client->setAccessToken($token['access_token']);

	// get profile info
	$google_oauth = new Google_Service_Oauth2($client);
	$google_account_info = $google_oauth->userinfo->get();
	$userinfo = [
	  'email' => $google_account_info['email'],
	  'first_name' => $google_account_info['givenName'],
	  'last_name' => $google_account_info['familyName'],
	  'gender' => $google_account_info['gender'],
	  'full_name' => $google_account_info['name'],
	  'picture' => $google_account_info['picture'],
	  'verifiedEmail' => $google_account_info['verifiedEmail'],
	  'token' => $google_account_info['id'],
	];
  // checking if user is already exists in database
  $sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
	
	  // user is exists
	  $userinfo = mysqli_fetch_assoc($result);
	  $token = $userinfo['token'];
  } else {
	  // user is not exists
	  header("Location: index.php?error=email_not_found");
	  die();
  }
	// checking if user is already exists in database
	$sql = "SELECT * FROM users WHERE email ='{$userinfo['email']}'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	  // user is exists
	  $userinfo = mysqli_fetch_assoc($result);
	  $token = $userinfo['token'];
	} else {
	  // user is not exists
	  $sql = "INSERT INTO users (email, first_name, last_name, gender, full_name, picture, verifiedEmail, token) VALUES ('{$userinfo['email']}', '{$userinfo['first_name']}', '{$userinfo['last_name']}', '{$userinfo['gender']}', '{$userinfo['full_name']}', '{$userinfo['picture']}', '{$userinfo['verifiedEmail']}', '{$userinfo['token']}')";
	  $result = mysqli_query($conn, $sql);
	  if ($result) {
		$token = $userinfo['token'];
	  } else {
		echo "User is not created";
		die();
	  }
	}
  
	// save user data into session
	$_SESSION['user_token'] = $token;
  } else {
	if (!isset($_SESSION['user_token'])) {
	  header("Location: index.php");
	  die();
	}
  
	// checking if user is already exists in database
	$sql = "SELECT * FROM users WHERE token ='{$_SESSION['user_token']}'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
	  // user is exists
	  $userinfo = mysqli_fetch_assoc($result);
	}
  }
  
  
  ?>
<header class="header-top">
    <nav class="navbar navbar-light">
        <div class="navbar-left">
            <a href="" class="sidebar-toggle">
                <img class="svg" src="img/svg/bars.svg" alt="img"></a>
            <a class="navbar-brand" href="#"><img class="dark" src="img/logo_dark.png" alt="svg"><img class="light" src="img/logo_white.png" alt="img"></a>
            <div class="top-menu">
            </div>
        </div>
        <div class="navbar-right">
            <ul class="navbar-right__menu">
                <li class="nav-notification">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle">
                            <span data-feather="bell"></span></a>
                        <div class="dropdown-wrapper">
                            <h2 class="dropdown-wrapper__title">Notifications <span class="badge-circle badge-warning ml-1">1</span></h2>
                            <ul>
                                <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                    <div class="nav-notification__type nav-notification__type--primary">
                                        <span data-feather="inbox"></span>
                                    </div>
                                    <div class="nav-notification__details">
                                        <p>
                                            <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                            <span>sent you a message</span>
                                        </p>
                                        <p>
                                            <span class="time-posted">5 hours ago</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- ends: .nav-notification -->
                <li class="nav-author">
                    <div class="dropdown-custom">
                        <a href="javascript:;" class="nav-item-toggle"><img src="<?php echo $userinfo['picture'] ?>" alt="" class="rounded-circle"></a>
                        <div class="dropdown-wrapper">
                            <div class="nav-author__info">
                                <div class="author-img">
                                    <img src="<?php echo $userinfo['picture'] ?>" alt="" class="rounded-circle">
                                </div>
                                <div>
                                    <h6><?= $userinfo['full_name'] ?></h6>
                                    <span><?= $userinfo['email'] ?></span>
                                </div>
                            </div>
                            <div class="nav-author__options">
                                <ul>
                                    <li>
                                        <a href="profile.php">
                                            <span data-feather="user"></span> Profile</a>
                                    </li>
                                </ul>
                                <a href="signout.php" class="nav-author__signout">
                                    <span data-feather="log-out"></span> Sign Out</a>
                            </div>
                        </div>
                        <!-- ends: .dropdown-wrapper -->
                    </div>
                </li>
                <!-- ends: .nav-author -->
            </ul>
            <!-- ends: .navbar-right__menu -->
            <div class="navbar-right__mobileAction d-md-none">
                <a href="#" class="btn-search">
                    <span data-feather="search"></span>
                    <span data-feather="x"></span></a>
                <a href="#" class="btn-author-action">
                    <span data-feather="more-vertical"></span></a>
            </div>
        </div>
        <!-- ends: .navbar-right -->
    </nav>
</header>
<?php
function getRole() {
    if (isset($_SESSION['role'])) {
        // Jika peran sudah ada dalam sesi, gunakan itu
        return $_SESSION['role'];
    } else {
        // Jika tidak ada dalam sesi, coba ambil dari database
        global $conn; // Assuming $conn is your database connection variable

        // Periksa apakah pengguna sudah login
        if (isset($_SESSION['user_token'])) {
            $token = $_SESSION['user_token'];

            // Query database untuk mendapatkan peran pengguna berdasarkan token
            $sql = "SELECT role FROM users WHERE token = '{$token}'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $role = $row['role'];

                // Simpan peran ke dalam sesi untuk penggunaan selanjutnya
                $_SESSION['role'] = $role;

                return $role;
            }
        }

        // Jika tidak ada peran dalam sesi atau database, kembalikan peran default
        return 'crew';
    }
}

// Fungsi untuk menampilkan sidebar berdasarkan peran pengguna
function showSidebar() {
    $role = getRole();
?>
        <aside class="sidebar-wrapper">
            <div class="sidebar sidebar-collapse" id="sidebar">
                <div class="sidebar__menu-group">
                    <ul class="sidebar_nav">
                        <li class="menu-title">
                            <span>Main menu</span>
                        </li>
                        <li>
                            <a href="dashboard.php" class="">
                                <span data-feather="home" class="nav-icon"></span>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="form_program.php" class="">
                                <span data-feather="file" class="nav-icon"></span>
                                <span class="menu-text">Form Program</span>
                            </a>
                        </li>
                        <?php if ($role === 'TOP' || $role === 'Coordinator') : ?>
                                    <!-- Tampilkan hanya untuk admin -->
                        <li>
                            <a href="worksheet.php" class="">
                                <span data-feather="file-text" class="nav-icon"></span>
                                <span class="menu-text">Content Worksheet</span>
                            </a>
                        </li>
                        <li>
                            <a href="crew.php" class="">
                                <span data-feather="users" class="nav-icon"></span>
                                <span class="menu-text">Crew Management</span>
                            </a>
                        </li>
                        <li>
                            <a href="user.php" class="">
                                <span data-feather="users" class="nav-icon"></span>
                                <span class="menu-text">User Manager</span>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </aside>
<?php
}

// Contoh penggunaan
showSidebar();
?>