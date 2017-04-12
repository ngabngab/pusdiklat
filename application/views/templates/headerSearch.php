<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

<!DOCTYPE html>
<html lang="en">
<?php
$loggedIn = $this->session->userdata['logged_in'];

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMDIKLAT</title>

         <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/design/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/design/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>assets/design/dist/css/timeline.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>assets/design/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>assets/design/bower_components/datatables-responsive/css/responsive.dataTables.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/design/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/design/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/design/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link id="bsdp-css" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css" rel="stylesheet">
    
    <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/design/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/design/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
<!--
    <script src="<?php echo base_url();?>assets/design/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/design/bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/design/js/morris-data.js"></script>
-->
    
    <script src="<?php echo base_url();?>assets/js/moment-with-locales.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
    
    <!-- DataTables JavaScript -->
<!--    <script src="<?php echo base_url();?>assets/design/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>-->
<!--    <script src="<?php echo base_url();?>assets/design/bower_components/datatables-plugins/buttons/js/buttons.bootstrap.min.js"></script>-->
<!--    <script src="<?php echo base_url();?>assets/design/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>-->
    <script src="<?php echo base_url();?>assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/datatables/Buttons-1.2.1/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/datatables/Buttons-1.2.1/js/buttons.flash.min.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/design/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>

</head>

<body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url();?>">SIMDIKLAT</a>
            </div>
            
        </nav>