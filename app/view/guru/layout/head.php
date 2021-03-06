<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASEURL;?>assets/images/logo-icon.png">
    <title>Bunggora</title>
    <link href="<?= BASEURL;?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASEURL;?>assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <link href="<?= BASEURL;?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL;?>assets/plugins/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="<?= BASEURL;?>assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
    <link href="<?= BASEURL;?>assets/css/colors/green.css" id="theme" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                  <a class="navbar-brand" href="index.html">
                    <b>
                          <img src="<?= BASEURL;?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                          <!-- Light Logo icon -->
                          <img src="<?= BASEURL;?>assets/images/logo-light-icon.svg" alt="homepage" class="light-logo" />
                      </b>
                      <span>
                       <img src="<?= BASEURL;?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                       
                       <img src="<?= BASEURL;?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= BASEURL; ?>assets/images/users/profile.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?= BASEURL; ?>assets/images/users/profile.png" alt="user"></div>
                                            <div class="u-text">
                                                <h4><?= $data['nama'] ?></h4>
                                                <p class="text-muted"><?= $data['email'] ?></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>

                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>