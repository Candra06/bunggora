<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= BASEURL; ?>assets/images/favicon.png">
    <title>Bunggora</title>
    <link href="<?= BASEURL; ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
</head>

<body>
    
    <section id="wrapper">
        <div class="login-register" style="background-color: #44adc2;">
        <div class="row">
            <img src="<?= BASEURL; ?>assets/images/tulisan_putih.svg" style="height: 90px;margin-left: auto;margin-right: auto;margin-bottom: 30px;" alt="" srcset="">
        </div>
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
          
              <center><p style="margin-top: 20px; color: #fff">&copy; RA Team 2020-PWBC</p></center>
          
        </div>

    </section>
    <script src="<?= BASEURL;?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?= BASEURL;?>assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?= BASEURL;?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?= BASEURL;?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?= BASEURL;?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?= BASEURL;?>assets/js/sidebarmenu.js"></script>
 <!--stickey kit -->
 <script src="<?= BASEURL;?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?= BASEURL;?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--stickey kit -->
    <script src="<?= BASEURL;?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?= BASEURL;?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= BASEURL;?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
</body>

</html>
