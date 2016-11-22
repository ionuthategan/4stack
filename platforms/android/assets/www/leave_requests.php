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
    <img src="img/bg-header-employee.jpg" alt="" id="header_background" style="">
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
                                <span class="link_name">Leave requests</span>
                                <br>
                                <small class="link_second">manage requests and view history</small>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="leave_info">
                    <table id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle" style="width:100%">
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-ship fa-4x" aria-hidden="true"></i>
                            </td>
                            <td>
                                <span class="link_name">Leave requests history</span>
                                <br>
                                <small class="link_second">View all leave requests</small>
                            </td>
                            <td class="fa_right">
                                <i class="fa fa-angle-down fa-4x" aria-hidden="true"></i>
                            </td>
                        </tr>
                    </table>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="width:100%">
                            <li>
                                <table>
                                    <tr>
                                        <td class="info_icon" rowspan="2">
                                            <i class="fa fa-ship fa-2x" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            <span class="link_name">12 vacantion days taken</span>
                                            <br>
                                            <small class="link_second">1-12 june 2016</small>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td class="info_icon" rowspan="2">
                                            <i class="fa fa-stethoscope fa-2x" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            <span class="link_name">1 sick day taken</span>
                                            <br>
                                            <small class="link_second">13 june 2016</small>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td class="info_icon" rowspan="2">
                                            <i class="fa fa-child fa-2x" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            <span class="link_name">0 maternity days taken</span>
                                            <br>
                                            <small class="link_second">-</small>
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td class="info_icon" rowspan="2">
                                            <i class="fa fa-circle-thin fa-2x" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            <span class="link_name">0 other leave days taken</span>
                                            <br>
                                            <small class="link_second">-</small>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                </li>

                <form action="#">
                    <li id="accordion" class="leave_info">
                        <table class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="width:100%">
                            <tr>
                                <td class="info_icon" rowspan="2">
                                    <i class="fa fa-pencil fa-4x" aria-hidden="true"></i>
                                </td>
                                <td>
                                    <span class="link_name">New leave request</span>
                                    <br>
                                    <small class="link_second">Send new leave request to manager</small>
                                </td><!-- 
                                <td class="fa_right">
                                    <i class="fa fa-angle-down fa-4x" aria-hidden="true"></i>
                                </td> -->
                            </tr>
                        </table>
                        <ul id="collapseOne" class="panel-collapse collapse" style="width:100%">
                            <li>
                                <div class="form-group nm">
                                    <select id="" class="form-control custom_select" name="" >
                                        <option value="">Choose type of leave</option>
                                        <option value="">Vacation</option>
                                        <option value="">Sick days</option>
                                        <option value="">other days</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <table class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" style="width:100%">
                                    <tr>
                                        <td class="info_icon" rowspan="2">
                                            <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
                                        </td>
                                        <td class="cgrey">
                                            <span class="link_second">Choose your leave days</span>
                                            <br><!-- 
                                            <small>3-5 August 2016</small> -->
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <li id="collapsetwo" class="panel-collapse collapse">
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
                                <div class="form-group text-center">
                                    <button type="submit" class="btn button_send" href="manager_profile.php">
                                    <i class="fa fa-check cw" aria-hidden="true" style="color:#fff;"></i> Send</button>
                                </div>
                            </li>
                        </ul>
                    
                    </li>
                </form>
                </li>
                <li class="leave_info">
                    <table id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle" style="width:100%">
                        <tr>
                            <td class="info_icon" rowspan="2">
                                <i class="fa fa-check-square-o fa-4x" aria-hidden="true"></i>
                            </td>
                            <td>
                                <span class="link_name">Leave requests</span>
                                <br>
                                <small class="link_second">See approved or denied requests</small>
                            </td>
                            <td class="fa_right">
                                <i class="fa fa-angle-down fa-4x" aria-hidden="true"></i>
                            </td>
                        </tr>
                    </table>
                    <ul id="drop_3" class="dropdown-menu" aria-labelledby="dropdownMenu3" style="width:100%">
                        <li>
                            <table style="background:#E5F3EC;color:#008B72">
                                <tr>
                                    <td>
                                        <span class="link_name">3 sick days</span>
                                        <br>
                                        <small class="link_second">3-5 August 2016</small>
                                    </td>
                                    <td class="pull-right" rowspan="2">
                                        <i class="fa fa-check fa-lg" aria-hidden="true" style="color:#008B72;"></i>
                                        <span class="link_name">APPROVED</span>
                                    </td>
                                </tr>
                            </table>
                            <table style="background:#F8E9EA;">
                                <tr>
                                    <td>
                                        <span class="link_name">5 vacantion days</span>
                                        <br>
                                        <small class="link_second">5-10 September 2016</small>
                                    </td>
                                    <td class="pull-right" rowspan="2">
                                        <i class="fa fa-check fa-lg" aria-hidden="true"></i>
                                        <span class="link_name" style="color:#B7272D">DENIED</span>
                                    </td>
                                </tr>
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
