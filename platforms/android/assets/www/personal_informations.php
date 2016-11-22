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
            <ul id="employee_personal_informations">
                <li class="page_head w">
                    <table>
                        <tr>
                            <td class="link_image" rowspan="1">
                                <img src="img/pic-employee.png" alt="">
                            </td>
                            <td class="link_content" rowspan="1">
                                <span class="link_name">Elisa Doe</span>
                                <br>
                                <small class="link_second">secretary at BIO Consulting</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li >
                    <table>
                        <tr>
                            <p class="personal_head">
                                Personal informations
                            </p>
                        </tr>
                    </table>
                </li>
                <li >
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="4">
                                <i class="fa fa-phone fa-4x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">0745 678 910</span>
                                <br>
                                <small class="link_second">Mobile phone</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li >
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="4">
                                <i class="fa fa-fax fa-4x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">0264 123 456</span>
                                <br>
                                <small class="link_second">Home phone</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li >
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="4">
                                <i class="fa fa-map fa-4x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">Universitatii Street 3, ap 15</span>
                                <br>
                                <small class="link_second">Home address</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li >
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="4">
                                <i class="fa fa-info-circle fa-4x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">123456</span>
                                <br>
                                <small class="link_second">Social number</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li >
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="4">
                                <i class="fa fa-info-circle fa-4x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">789456</span>
                                <br>
                                <small class="link_second">Employee number</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li >
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="4">
                                <i class="fa fa-user fa-4x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">2000 $</span>
                                <br>
                                <small class="link_second">Salary/month</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li >
                    <table>
                        <tr>
                            <p class="leave_head">
                                Leave information
                            </p>
                        </tr>
                    </table>
                </li>
                <li class="leave_info">
                    <table>
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-ship fa-4x" aria-hidden="true"></i>
                            </td>
                            <td class="link_content">
                                <span class="link_name">12 days taken</span>
                                <br>
                                <small class="link_second">Vacation days</small>
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
                            <td class="link_content">
                                <span class="link_name">0 days taken</span>
                                <br>
                                <small class="link_second">Sick days</small>
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
                            <td class="link_content">
                                <span class="link_name">0 days taken</span>
                                <br>
                                <small class="link_second">Maternity days</small>
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
                            <td class="link_content">
                                <span class="link_name">0 days taken</span>
                                <br>
                                <small class="link_second">Other leave days</small>
                            </td>
                        </tr>
                    </table>
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
