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
        <img src="img/logo-small.png" alt="" id="logo_small" style="height: 70px;">
    </a>
    <img src="img/bg-header-employee.jpg" alt="" id="header_background" style="">
</header>
<div class="container">
    <div class="row">
        <div class="content_div">
            <ul id="check_in">
                <li class="time_in" >
                        <table style="background:#CB3B4D;">
                            <tr>
                                <td class="link_icon" rowspan="5" >
                                    <i class="fa fa-pause fa-4x pause_timer" aria-hidden="true"></i>
                                    <i class="fa fa-play fa-4x resume_timer" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <span id="pause_name" class="link_name">Pause</span>
                                </td>
                                <td class="">
                                    <span class="timer_in timer">00:02:00</span>
                                </td>
                            </tr>
                            <tr>
                            </tr>
                        </table>
                </li>
                <li class="break_duration">
                    <table>
                        <tr>
                            <td class="timeline_icon" rowspan="4">
                                <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                            </td>
                            <td>
                                <span class="link_name">03:17 min, 09:51 AM – 1:09 PM</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="break_duration">
                    <table>
                        <tr>
                            <td class="timeline_icon" rowspan="4">
                                <i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
                            </td>
                            <td>
                                <span class="link_name">03:17 min, 09:51 AM – 1:09 PM</span>
                            </td>
                        </tr>
                    </table>
                </li>
                <li class="time_out" >
                    <a href="pause.php" class="" >
                        <table style="background:#9F243F;">
                            <tr>
                                <td class="link_icon" rowspan="5" >
                                    <i class="fa fa-sign-out fa-4x" aria-hidden="true"></i>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <span class="link_name">Check out</span>
                                </td>
                                <td class="">
                                    <span class="timer_in">00:02:00</span>
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
<script>
        (function(){
            var hasTimer = false;
            // Init timer start
            $('.start-timer-btn').on('click', function() {
                hasTimer = true;
                $('.timer').timer({
                    editable: true
                });
                $(this).addClass('hidden');
                $('.pause-timer-btn, .remove-timer-btn').removeClass('hidden');
            });

            // Init timer resume
            $('.resume-timer-btn').on('click', function() {
                $('.timer').timer('resume');
                $(this).addClass('hidden');
                $('.pause-timer-btn, .remove-timer-btn').removeClass('hidden');
            });


            // Init timer pause
            $('.pause-timer-btn').on('click', function() {
                $('.timer').timer('pause');
                $(this).addClass('hidden');
                $('.resume-timer-btn').removeClass('hidden');
            });

            // Remove timer
            $('.remove-timer-btn').on('click', function() {
                hasTimer = false;
                $('.timer').timer('remove');
                $(this).addClass('hidden');
                $('.start-timer-btn').removeClass('hidden');
                $('.pause-timer-btn, .resume-timer-btn').addClass('hidden');
            });

            // Additional focus event for this demo
            $('.timer').on('focus', function() {
                if(hasTimer) {
                    $('.pause-timer-btn').addClass('hidden');
                    $('.resume-timer-btn').removeClass('hidden');
                }
            });

            // Additional blur event for this demo
            $('.timer').on('blur', function() {
                if(hasTimer) {
                    $('.pause-timer-btn').removeClass('hidden');
                    $('.resume-timer-btn').addClass('hidden');
                }
            });
        })();
    </script>