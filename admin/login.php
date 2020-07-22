<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashio - Bootstrap Admin Template</title>

    <!-- Favicons -->
    <link href="/sistempakarphp/admin-template/img/favicon.png" rel="icon">
    <link href="/sistempakarphp/admin-temlate/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="/sistempakarphp/admin-template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="/sistempakarphp/admin-template/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/sistempakarphp/admin-template/css/style.css" rel="stylesheet">
    <link href="/sistempakarphp/admin-template/css/style-responsive.css" rel="stylesheet">

    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

    <!-- cek pesan notifikasi -->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Login gagal! username dan password salah!";
        } else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>

    <div id="login-page">
        <div class="container">
            <form class="form-login" method="POST" action="login_cek.php">
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> Remember me
                        <span class="pull-right">
                            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
                        </span>
                    </label>
                    <button class="btn btn-primary" type="submit" value="LOGIN"><i class="fa fa-lock"></i> SIGN IN</button>
                    <hr>
                    <div class="registration">
                        Don't have an account yet?<br />
                        <a class="" href="#">
                            Create an account
                        </a>
                    </div>
                </div>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Forgot Password ?</h4>
                            </div>
                            <div class="modal-body">
                                <p>hubungi admin saja</p>
                                <input type="text" name="email" placeholder="082242842127" autocomplete="off" class="form-control placeholder-no-fix">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
            </form>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/sistempakarphp/admin-template/lib/jquery/jquery.min.js"></script>
    <script src="/sistempakarphp/admin-template/lib/bootstrap/js/bootstrap.min.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="/sistempakarphp/admin-template/lib/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("/sistempakarphp/admin-template/img/yunus.jpeg", {
            speed: 500
        });
    </script>
</body>

</html>