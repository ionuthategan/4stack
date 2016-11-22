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
            <ul id="leave_request">
                <li class="page_head" style="background:#A6145A; color:#fff;">
                    <table>
                        <tr>
                            <td class="link_icon" rowspan="4">
                                <i class="fa fa-th fa-4x" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="">
                                <span class="link_name">Leave requests<0/span>
                                <br>
                                <small class="link_second">manage requests and view history</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li >
                    <div class="dropdown" style="background:#808080;color:#fff;">
                        <table id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle" style="width:100%">
                            <tr >
                                <td class="link_icon " rowspan="5" ><!-- 
                                    <span class="link_name">Choose employee</span> -->
                                    <a href="" class="user_select">
                                        <span class="link_name">Elisa Doe</span>
                                        <br>
                                        <small class="link_second">manager at BIO Consulting</small>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fa_right">
                                    <i class="fa fa-angle-down fa-4x" aria-hidden="true"></i>
                                </td>
                            </tr>
                        </table>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width:100%">
                            <li>
                                <a href="">
                                    <span class="link_name">Elisa Doe</span>
                                    <br>
                                    <small class="link_second">manager at BIO Consulting</small>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="link_name">John Doe</span>
                                    <br>
                                    <small class="link_second">manager at BIO Consulting</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div style="clear:both;"></div>
                </li>
                <li class="leave_info">
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-ship fa-4x" aria-hidden="true"></i>
                            </td>
                            <td>
                                <span class="link_name">12 vacantion days taken</span>
                                <br>
                                <small class="link_second">1-12 june 2016</small>
                            </td>
                        </tr>
                    </table>
                </li>

                <li class="leave_info">
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-stethoscope fa-4x" aria-hidden="true"></i>
                            </td>
                            <td>
                                <span class="link_name">1 sick day taken</span>
                                <br>
                                <small class="link_second">13 june 2016</small>
                            </td>
                        </tr>
                    </table>
                </li>

                <li class="leave_info">
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-child fa-4x" aria-hidden="true"></i>
                            </td>
                            <td>
                                <span class="link_name">0 maternity days taken</span>
                                <br>
                                <small class="link_second">-</small>
                            </td>
                        </tr>
                    </table>
                </li>

                <li class="leave_info">
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-circle-thin fa-4x" aria-hidden="true"></i>
                            </td>
                            <td>
                                <span class="link_name">0 other leave days taken</span>
                                <br>
                                <small class="link_second">-</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li id="accordion1" class="leave_info">
                    <div class="dropdown">
                        <table class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" style="width:100%">
                            <tr>
                                <td class="info_icon" rowspan="2">
                                    <i class="fa fa-check-square-o fa-4x" aria-hidden="true"></i>
                                </td>
                                <td>
                                    <span class="link_name">Leave requests</span>
                                    <br>
                                    <small class="link_second">approve or deny leave requests</small>
                                </td><!-- 
                                <td class="fa_right">
                                    <i class="fa fa-angle-down fa-4x" aria-hidden="true"></i>
                                </td> -->
                            </tr>
                        </table>
                        <ul id="collapseOne" class="panel-collapse collapse" style="width:100%">
                            <li>
                                <table>
                                    <tr>
                                        <td class="info_icon" rowspan="2">
                                            <i class="fa fa-ship fa-2x cgrey" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            <span class="link_name">12 vacantion days</span>
                                            <br>
                                            <small class="link_second">1-12 june 2016</small>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <td>
                                        <a href="#">
                                            <div class="col-xs-6 leave_aprove" style="background:#E5F3EC;color:#008B72;border-right:2px solid #fff;">
                                                <i class="fa fa-check" aria-hidden="true" style="color:#008B72"></i>&nbsp;
                                                <span><b>APPROVE</b></span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="col-xs-6 leave_aprove" style="background:#F8E9EA">
                                                <i class="fa fa-times" aria-hidden="true"></i>&nbsp;
                                                <span style="color:#B9272D"><b>DENY</b></span> 
                                            </div>
                                        </a>
                                    </td>
                                </table>
                                <table>
                                    <tr>
                                        <td class="info_icon" rowspan="2">
                                            <i class="fa fa-child fa-2x cgrey" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            <span class="link_name">20 maternity days</span>
                                            <br>
                                            <small class="link_second">1-20 august 2016</small>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <td>
                                        <a href="#">
                                            <div class="col-xs-6 leave_aprove" style="background:#E5F3EC;color:#008B72;border-right:2px solid #fff;">
                                                <i class="fa fa-check" aria-hidden="true" style="color:#008B72"></i>&nbsp;
                                                <span><b>APPROVE</b></span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="col-xs-6 leave_aprove" style="background:#F8E9EA">
                                                <i class="fa fa-times" aria-hidden="true"></i>&nbsp;
                                                <span style="color:#B9272D"><b>DENY</b></span> 
                                            </div>
                                        </a>
                                    </td>
                                </table>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bgrey" style="border-bottom:1px solid #fff;">
                    <a href="">
                        <table>
                            <tr>
                                <td class="timeline_icon" rowspan="4">
                                     <i class="fa fa-download fa-3x" aria-hidden="true"></i>
                                </td>
                                <td>
                                    
                                        <span class="link_name">Download report</span>
                                        <br>
                                        <small class="link_second">Including all leave days</small>
                                    
                                </td>
                            </tr>
                        </table>
                    </a>
                </li>
                <li class="bgrey">
                    <a href="">
                        <table>
                            <tr>
                                <td class="timeline_icon" rowspan="4">
                                     <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                                </td>
                                <td>
                                    <span class="link_name">E-mail report</span>
                                    <br>
                                    <small class="link_second">Including all leave days</small>
                                </td>
                            </tr>
                        </table>
                    </a>
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
