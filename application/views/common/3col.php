<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Nguồn học bổng</title>
        <!-- core CSS -->
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/owl.transitions.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/main.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/ico/favicon.png">
       
    </head>
    <!--/head-->
    <body id="home" class="homepage">
        <header id="header">
            <?php echo $header; ?>
        </header>
        <?php echo $content; ?>
        <?php echo $footer; ?>
        <script src="<?php echo base_url(); ?>asset/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/mousescroll.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/smoothscroll.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/jquery.isotope.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/jquery.inview.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
        <script src="<?php echo base_url(); ?>asset/js/bootstrap-datepicker.min.js"></script>
        <link href="<?php echo base_url(); ?>asset/js/bootstrap-datepicker3.css" rel="stylesheet">
        <script type="text/javascript">

            $(function () {
                $('#datetimepicker1').datepicker({
                    format: 'dd/mm/yyyy',
                    todayHighlight: true,
                    autoclose: true,
                });
                $('#datetimepicker2').datepicker({
                    format: 'dd/mm/yyyy',

                    todayHighlight: true,
                    autoclose: true,
                });
            });
        </script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap-multiselect.css" type="text/css"/>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#country').multiselect();
                $('#brand').multiselect();
            });
        </script>
    </body>
</html>