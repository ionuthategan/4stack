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
        <img src="img/logo-small.png" alt="" id="logo_small" style="height: 80px;">
    </a>
    <img src="img/bg-header.jpg" alt="" id="header_background" style="">
</header>
<div class="container">
    <div class="row">
        <div class="content_div">
            <ul id="settings_page">
                <li class="page_head" style="background:#3C3C7C; color:#fff;">
                    <table>
                        <tr>
                            <td class="link_icon" rowspan="4">
                                <i class="fa fa-list-ul fa-4x" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="">
                                <span class="link_name">Settings</span>
                                <br>
                                <small class="link_second">edit your profle</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle" style="width:100%">
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-files-o fa-4x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">Personal profile</span>
                                <br>
                                <small class="link_second">change profile photo and header</small>
                            </td>
                            <td class="fa_right">
                                <i class="fa fa-angle-down fa-4x" aria-hidden="true"></i>
                            </td>
                        </tr>
                    </table>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2" style="width:100%">
                        <li class="bgrey">
                            <table>
                                <td>
                                    <a href="#">
                                        <div class="col-xs-6 change_profile npr" style="">
                                            <label for="upload_photo" >
                                                <span class="btn button_change" aria-hidden="true">Add new profile photo</span>
                                                <input id="upload_photo" type="file"  style="display:none">
                                            </label>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="col-xs-6 change_profile" style="">
                                            <label for="upload_eheader" >
                                                <span class="btn button_change" aria-hidden="true">Add new header</span>
                                                <input id="upload_eheader" type="file" style="display:none">
                                            </label>
                                        </div>
                                    </a>
                                </td>
                            </table>
                        </li>
                    </ul>
                </li>
            </ul>
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
