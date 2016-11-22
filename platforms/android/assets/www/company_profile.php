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
                <li class="w page_head">
                    <table>
                            <tr>
                                <td class="link_icon" rowspan="4" style="background:#4D4D4D;">
                                    <i class="fa fa-briefcase fa-4x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="link_content">
                                    <span class="link_name">BIO Consulting</span>
                                    <br>
                                    <small class="link_second">view company profile</small>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                </li>
                <li class="">
                    <a href="company_employees_timeline.php" class="page_link">
                        <table>
                            <tr>
                                <td class="link_icon" rowspan="5" style="background:#A2BF45;">
                                    <i class="fa fa-map-marker fa-4x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="link_content">
                                    <span class="link_name">Employees timeline</span>
                                    <br>
                                    <small class="link_second">View location and history</small>
                                </td>
                                <td class="fa_right"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                   </a>
                </li>
                <li class="">
                    <a href="working_hours.php" class="page_link">
                        <table>
                            <tr>
                                <td class="link_icon" rowspan="4" style="background:#F2A73B;">
                                    <i class="fa fa-hourglass-half fa-4x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="link_content">
                                    <span class="link_name">Working hours</span>
                                    <br>
                                    <small class="link_second">view work time stats</small>
                                </td>
                                <td class="fa_right"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                   </a>
                </li>
                <li class="">
                    <a href="company_leave_requests.php" class="page_link">
                        <table>
                            <tr>
                                <td class="link_icon" rowspan="5" style="background:#A6145A;">
                                    <i class="fa fa-th fa-4x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="link_content">
                                    <span class="link_name">Leave requests</span>
                                    <br>
                                    <small class="link_second">manage requests and view history</small>
                                </td>
                                <td class="fa_right"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                   </a>
                </li>
                <li class="">
                    <a href="company_manage_accounts.php" class="page_link">
                        <table>
                            <tr>
                                <td class="link_icon" rowspan="5" style="background:#0071B4;">
                                    <i class="fa fa-edit fa-4x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="link_content">
                                    <span class="link_name">Manage accounts</span>
                                    <br>
                                    <small class="link_second">add, edit or suspend employee accounts</small>
                                </td>
                                <td class="fa_right"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                   </a>
                </li>
                <li class="">
                    <a href="payroll.php" class="page_link" id="payroll">
                        <table>
                            <tr>
                                <td class="link_icon" rowspan="5" style="background:#00A094;">
                                    <i class="fa fa-list-ul fa-4x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="link_content">
                                    <span class="link_name">Payroll</span>
                                    <br>
                                    <small class="link_second">view and edit wages</small>
                                </td>
                                <td class="fa_right"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                   </a>
                </li>
                <li class="">
                    <a href="company_settings.php" class="page_link">
                        <table>
                            <tr>
                                <td class="link_icon" rowspan="5" style="background:#3C3C7C;">
                                    <i class="fa fa-cog fa-4x fa-spin" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="link_content">
                                    <span class="link_name">Settings</span>
                                    <br>
                                    <small class="link_second">edit company profile and reporting</small>
                                </td>
                                <td class="fa_right"><i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
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
