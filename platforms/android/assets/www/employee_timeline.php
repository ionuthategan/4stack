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
            <ul>
                <li class="page_head" style="background:#9FBC45; color:#fff;">
                    <table>
                        <tr>
                            <td class="link_icon" rowspan="4">
                                <i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="link_name">Timeline</span>
                                <br>
                                <small class="link_second">view your timeline</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li >
                    <div style="overflow:hidden;">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="datetimepicker12"></div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            
                        </script>
                    </div>
                </li>
                <li>
                    <table>
                        <tr>
                            <td class="timeline_icon" rowspan="4">
                                <i class="fa fa-sign-in fa-3x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">Checked in at 09:00</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table>
                        <tr>
                            <td class="timeline_icon" rowspan="4">
                                <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">Lunch break between 14:00-14:15</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table>
                        <tr>
                            <td class="timeline_icon" rowspan="4">
                                <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">Hours worked: 8h</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table>
                        <tr>
                            <td class="timeline_icon" rowspan="4">
                                <i class="fa fa-sign-out fa-3x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">Checked out at 17:00</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table>
                        <tr>
                            <td class="timeline_icon" rowspan="4">
                                <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">Itinerary</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li id=itinerary_details>
                    <table>
                       <tr>
                        <td class="timeline_icon np" rowspan="">
                            <i class="fa fa-circle fa-lg" aria-hidden="true"></i><br>
                                <i class="fa fa-long-arrow-down fa-2x" aria-hidden="true"></i>
                        </td>
                        <td class="link_content">
                            <span class="">Colegiul Tehnic de Constructii Anghel Saligny Bulevardul 21 Decembrie 1989 128-130, Cluj-Napoca</span>
                        </td>
                        </tr> 
                        <tr>
                            <td class="timeline_icon np" rowspan="">
                                <i class="fa fa-circle fa-lg" aria-hidden="true"></i><br>
                                <i class="fa fa-long-arrow-down fa-2x" aria-hidden="true"></i>

                            </td>
                            <td class="link_content">
                                <span class="">Aleea Magnoliei Cluj-Napoca 400000</span>
                            </td>
                        </tr> 
                        <tr>
                            <td class="timeline_icon np" rowspan="">
                                <i class="fa fa-circle fa-lg" aria-hidden="true"></i><br>
                                <i class="fa fa-long-arrow-down fa-2x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="">Central Park Cluj-Napoca</span>
                            </td>
                        </tr> 
                        <tr>
                            <td class="timeline_icon np" rowspan="">
                                <i class="fa fa-circle fa-lg" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="">Cetatuia Park Cluj-Napoca</span>
                            </td>
                        </tr> 
                    </table>
                </li>
                <li>
                    <div style="clear:both;height:30px;"></div>
                    <span id="map_history"></span>
                    <div id="map_canvas"></div>
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
