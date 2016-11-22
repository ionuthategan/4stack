<!DOCTYPE html>
<html>

<head>
    <!--
        Customize this policy to fit your own app's needs. For more guidance, see:
            https://github.com/apache/cordova-plugin-whitelist/blob/master/README.md#content-security-policy
        Some notes:
            * gap: is required only on iOS (when using UIWebView) and is needed for JS->native communication
            * https://ssl.gstatic.com is required only on Android and is needed for TalkBack to function properly
            * Disables use of inline scripts in order to mitigate risk of XSS vulnerabilities. To change this:
                * Enable inline JS: add 'unsafe-inline' to default-src
        -->
    <meta charset='utf-8'>
    <meta http-equiv="Content-Security-Policy" content="default-src *; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/datetimepicker.min.css" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
    <link href='img/logo-small.png' rel='shortcut icon'>
    <link rel="stylesheet" href="css/fontawesome/font-awesome.min.css">
    <!-- must be after bootstrap-->
    <link rel="stylesheet" type="text/css" href="css/gotstyle.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- jquery-2.2.2 -->
    <script type="text/javascript" src="js/jquery-2.2.2.js"></script>
      <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBF-gDLAD2HrBjwQsmGM94RD4SHT7VjJgo"> </script>
    <!-- 
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
    <title>HR Ultimate</title>
</head>

<body>
<header id="header">
        <a href="index.html">
            <img src="img/logo-small.png" alt="" id="logo_small" style="">
        </a>
        <img src="img/bg-home.jpg" alt="" id="header_background" style="height:250px">
    </header>
    <div class="container">
        <div class="row">
            <div id="register_container" class="col-xs-10 col-xs-offset-1">
                <h1>REGISTER AS <br>A COMPANY</h1>
                <form id="login_form" action="" class="" method="post">
                    <div class="form-group">
                        <sup class="sup_register">*</sup>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Manager Name">
                    </div>
                    <div class="form-group">
                        <sup class="sup_register">*</sup>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Manager e-mail">
                    </div>
                    <div class="form-group">
                        <sup class="sup_register">*</sup>
                        <input type="text" class="form-control" name="company" id="company_name" placeholder="Company name">
                    </div>
                    <div class="form-group">
                        <sup class="sup_register">*</sup>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <sup class="sup_register">*</sup>
                        <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Retype password">
                    </div>
                    <div class="form-group">
                        <sup class="sup_register">*</sup>
                        <input type="phone" class="form-control" name="phone" id="phone" placeholder="Phone number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="bank" id="bank" placeholder="Bank name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="bank_account" id="bank_account" placeholder="Bank account(IBAN)">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="website" id="website" placeholder="Website">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn button_register" href="manager_profile.php" onclick="document.getElementById('login_form').submit();"> <i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>
                    </div>
                    <input type="hidden" name="login" value="1" />
                    <div style="clear:both;"></div>
                </form>
            </div>
        </div>
    </div>
    <div style="clear:both;height:30px" class="w"></div>
    <footer class="static-bottom">
        <p class="text-center nm"><span class="hr_green">HR -</span> 2016 Copyright All Rights Reserved</p>
    </footer>
    
    <!--bootstrap-->
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/datetimepicker.js"></script>
    <script type="text/javascript" src="js/timer.js"></script>
    
    <!-- swipe -->
    <script src="js/swipe.min.js"></script>
    <!-- Prettu photo -->
    <!-- custom script -->
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="cordova.js"></script>
</body>

</html>
