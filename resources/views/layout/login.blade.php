<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Đăng Nhập</title>
    <base href="{{asset('')}}"/>
    <!-- Fontfaces CSS-->
    <link href="admin_asset/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin_asset/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin_asset/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin_asset/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="admin_asset/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="admin_asset/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="admin_asset/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin_asset/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin_asset/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin_asset/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="admin_asset/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5" style="background-image:url({{'admin_asset/images/banner.png'}});/* Full height */
    max-height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="admin_asset/images/icon/logo-blue.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="admin.layout.home" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="forget-pass">Quên mật khẩu?</a>
                                    </label>
                                </div>
                                <a class="btn btn-primary" href="home" role="button">Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="admin_asset/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="admin_asset/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="admin_asset/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="admin_asset/vendor/slick/slick.min.js">
    </script>
    <script src="admin_asset/vendor/wow/wow.min.js"></script>
    <script src="admin_asset/vendor/animsition/animsition.min.js"></script>
    <script src="admin_asset/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="admin_asset/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="admin_asset/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="admin_asset/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="admin_asset/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin_asset/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="admin_asset/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="admin_asset/js/main.js"></script>

</body>

</html>
<!-- end document-->