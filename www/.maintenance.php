<?php
header('HTTP/1.1 503 Service Unavailable');
header('Retry-After: 300'); // 5 minutes in seconds

$localhosts = array("127.0.0.1", "::1");
$basePath = in_array($_SERVER["REMOTE_ADDR"], $localhosts) ? "" : "./sdfsdf";
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Site is temporarily down for maintenance</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $basePath ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $basePath ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $basePath ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="<?php echo $basePath ?>assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $basePath ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $basePath ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $basePath ?>assets/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $basePath ?>assets/css/pages/coming-soon.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $basePath ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="<?php echo $basePath ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="<?php echo $basePath ?>favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body>
        <div class="container">
<!--            <div class="row">
                <div class="col-md-12 coming-soon-header">
                    <a class="brand" href="http://mediahost.sk">
                        <img src="assets/img/logo-big.png" alt="logo"/>
                    </a>
                </div>
            </div>-->
            <div class="row">
                <div class="col-md-6 coming-soon-content">
                    <h1>We're Sorry</h1>
                    <p>
                        The site is temporarily down for maintenance. Please try again in a few minutes.
                    </p>
                    <br>
                    <ul class="social-icons margin-top-20">
                        <li>
                            <a href="#" data-original-title="Facebook" class="facebook">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-original-title="Twitter" class="twitter">
                            </a>
                        </li>
                        <li>
                            <a href="#" data-original-title="Goole Plus" class="googleplus">
                            </a>
                        </li>
                    </ul>
                </div>
<!--                <div class="col-md-6 coming-soon-countdown">
                    <div id="defaultCountdown">
                    </div>
                </div>-->
            </div>
            <!--/end row-->
            <div class="row">
                <div class="col-md-12 coming-soon-footer">
                    2014 &copy; Mediahost.
                </div>
            </div>
        </div>
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <!--[if lt IE 9]>
        <script src="<?php echo $basePath ?>assets/plugins/respond.min.js"></script>
        <script src="<?php echo $basePath ?>assets/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <script src="<?php echo $basePath ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="<?php echo $basePath ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
        <script src="<?php echo $basePath ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $basePath ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo $basePath ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo $basePath ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo $basePath ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo $basePath ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo $basePath ?>assets/plugins/countdown/jquery.countdown.min.js" type="text/javascript"></script>
        <script src="<?php echo $basePath ?>assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo $basePath ?>assets/scripts/core/app.js" type="text/javascript"></script>
        <script src="<?php echo $basePath ?>assets/scripts/custom/coming-soon.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {
                App.init();
                ComingSoon.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>

<?php
exit;

