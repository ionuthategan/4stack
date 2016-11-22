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
            <ul id="payroll_page">
                <li class="page_head" style="background:#00A094; color:#fff;">
                    <table>
                        <tr>
                            <td class="link_icon" rowspan="4">
                                <i class="fa fa-list-ul fa-4x" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="link_name">Payroll</span>
                                <br>
                                <small class="link_second">view and edit wages</small>
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
                                <i class="fa fa-credit-card-alt fa-4x" aria-hidden="true" style="color:#29A2D9"></i>
                            </td>
                            <td>
                                <span class="link_name"><span class="pay_amount w">1000</span> <span class="currency_type">$</span> pay for hours worked</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="leave_info">
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-credit-card-alt fa-4x" aria-hidden="true" style="color:#00586D"></i>
                            </td>
                            <td>
                                <span class="link_name"><span class="pay_amount w">100</span> <span class="currency_type">$</span> pay for overtime</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="leave_info">
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-credit-card-alt fa-4x" aria-hidden="true" style="color:#EE8A1E"></i>
                            </td>
                            <td>
                                <span class="link_name"><span class="pay_amount w">125</span> <span class="currency_type">$</span> pay for days of leave</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="leave_info">
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-credit-card-alt fa-4x" aria-hidden="true" style="color:#A2BF45"></i>
                            </td>
                            <td>
                                <span class="link_name"><span class="pay_amount w">100</span> <span class="currency_type">$</span> bonus pay</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="leave_info">
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-credit-card-alt fa-4x" aria-hidden="true" style="color:#B8272D"></i>
                            </td>
                            <td>
                                <span class="link_name"><span class="pay_amount w">0</span>
                                 <span class="currency_type">$</span> penalty</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li style="background:#00A094;color:#fff;">
                    <a href="#">
                        <table>
                            <tr>
                                <td class="timeline_icon" rowspan="4">
                                     <i class="fa fa-calculator fa-3x" aria-hidden="true"></i>
                                </td>
                                <td class="link_content" style="color:#fff;">                            
                                    <span class="link_name"><span class="total_pay">1325</span> <span class="currency_type">$</span> </span>
                                    <br>
                                    <small class="link_second">Total pay for July 2016</small>
                                </td>
                            </tr>
                        </table>
                    </a>
                </li>
                <li class="bgrey" style="border-bottom:1px solid #fff;">
                    <a href="#">
                        <table>
                            <tr>
                                <td class="timeline_icon" rowspan="4" style="color:#00A094;">
                                     <i class="fa fa-download fa-3x" aria-hidden="true"></i>
                                </td>
                                <td class="link_content">
                                    
                                        <span class="link_name">Download report</span>
                                        <br>
                                        <small class="link_second">Including all details of payroll</small>
                                    
                                </td>
                            </tr>
                        </table>
                    </a>
                </li>
                <li class="bgrey">
                    <a href="#">
                        <table>
                            <tr>
                                <td class="timeline_icon" rowspan="4" style="color:#00A094;">
                                     <i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
                                </td>
                                <td class="link_content">
                                    <span class="link_name">E-mail report</span>
                                    <br>
                                    <small class="link_second">Including all details of payroll</small>
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
