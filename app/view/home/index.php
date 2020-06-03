<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= BASEURL; ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= BASEURL; ?>css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= BASEURL; ?>css/colors/blue.css" id="theme" rel="stylesheet">
    <![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-color: #44adc2;">
            <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal form-material" method="post" id="loginform" action="<?= BASEURL;?>Home/login">
                    <h3 class="box-title m-b-20">Sign In</h3>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <?php Flasher::flash(); ?>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="username" required="" placeholder="Username"> </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Password"> </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-ld btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                </form>
                
            </div>
          </div>
        </div>

    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= BASEURL; ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= BASEURL; ?>plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?= BASEURL; ?>plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= BASEURL; ?>js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= BASEURL; ?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= BASEURL; ?>js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= BASEURL; ?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= BASEURL; ?>plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
