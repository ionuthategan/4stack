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
            <ul id="add_employee">
                <li class="page_head" style="background:#005387; color:#fff;">
                    <table>
                        <tr>
                            <td class="link_icon" rowspan="4">
                                <i class="fa fa-user-plus fa-4x" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr>
                            <a href="add_employee.php">
                                <td class="">
                                    <span class="link_name">Add an employee</span>
                                    <br>
                                    <small class="link_second">complete details for new employee</small>
                                </td>

                                <td class="fa_right">
                                    <i class="fa fa-angle-right fa-4x" aria-hidden="true"></i>
                                </td>
                            </a>
                        </tr>
                    </table>
                </li>
                <li >
                    <form id="adde_form" action="" class="" method="post">
                        <div class="form-group">
                            <select id="" class="form-control custom_select" name="" >
                                <option value="">Choose type of employee</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <sup class="sup_register">*</sup>
                            <input id="name" type="text" class="form-control" name="name"  placeholder="Name">
                        </div>
                        <div class="form-group">
                            <sup class="sup_register">*</sup>
                            <input id="firm_position" type="text" class="form-control" name="firm_position"  placeholder="Firm position">
                        </div>
                        <div class="form-group">
                            <select id="" class="form-control custom_select" name="" >
                                <option value="">Choose manager</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <sup class="sup_register">*</sup>
                            <input id="email" type="email" class="form-control" name="email"  placeholder="Manager e-mail">
                        </div>
                        <div class="form-group">
                            <sup class="sup_register">*</sup>
                            <input  id="phone" type="phone" class="form-control" name="phone" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <sup class="sup_register">*</sup>
                            <input id="social_security" type="text" class="form-control" name="social_security"  placeholder="Social security number">
                        </div>
                        <div class="form-group">
                            <select id="salary_type" class="form-control custom_select" name="salary_type" >
                                <option value="">Choose type of salary</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="hours_type" class="form-control custom_select" name="hours_type" >
                                <option value="">Choose working hours</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input id="add_currency" type="text" class="form-control" name="add_currency"  placeholder="Add currency">
                        </div>
                        <div class="form-group">
                            <input id="overtime" type="text" class="form-control" name="overtime"  placeholder="Overtime pay/hour">
                        </div>
                        <div class="form-group">
                            <input id="vacation_days" type="number" class="form-control" name="vacation_days"  placeholder="Vacantion days/year">
                        </div>
                        <div class="form-group">
                            <input id="sick_days" type="number" class="form-control" name="sick_days"  placeholder="Sick days/year">
                        </div>
                        <div class="form-group">
                            <input id="other_days" type="number" class="form-control" name="other_days"  placeholder="Other leave days/year">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn button_add" href="manager_profile.php" onclick="document.getElementById('adde_form').submit();"> <i class="fa fa-user-plus" aria-hidden="true"></i> Add</button>
                        </div>
                        <input type="hidden" name="login" value="1" />
                        <div style="clear:both;"></div>
                    </form>
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
