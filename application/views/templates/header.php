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
	<!-- <script src="<?php echo base_url();?>assets/js/plugins/datatables/datatables.min.js"></script>-->
	<link href="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>/assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
	<!-- <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script> -->
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
    
    
    <!-- jQuery -->
    <!-- <script src="<?php echo base_url();?>assets/design/bower_components/jquery/dist/jquery.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="<?php echo base_url();?>assets/design/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->

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
    
    <script src="<?php echo base_url();?>assets/js/plugins/datatables/Buttons-1.2.1/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/datatables/Buttons-1.2.1/js/buttons.flash.min.js"></script>
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/design/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    
    <!-- <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script> -->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">SIMDIKLAT</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $loggedIn['userFirstName'] . ' ' . $loggedIn['userLastName']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url();?>index.php/pages/view/profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/pages/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="active">
                            <a href="<?php echo base_url();?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-tasks"></i> Perencanaan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Kalender Diklat <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url();?>kaldik">Tambah Kalender Diklat</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>kaldik/kaldik_list">Data Kalender Diklat</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>kaldik/list_realisasi_kaldik">Realisasi Kalender Diklat</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Kurikulum<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url();?>mata_ajar">Mata Ajar</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>kurikulum_type">Jenis Kurikulum</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>kurikulum">Kurikulum</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>kurikulumRinci">Kurikulum Rinci</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Penugasan Instruktur/WI<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url();?>instructor">Tambah Penugasan Instruktur/WI</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>instructor/instructorTable">Data Penugasan Instruktur/WI</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>#">Realisasi Penugasan Instruktur/WI</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cetak<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="<?php echo base_url();?>jadwalInstructor">Jadwal</a>
                                        </li>
										<li>
                                            <a href="<?php echo base_url();?>kaldik/formCetakKaldik">Kalender Diklat</a>
                                        </li>
                                    </ul>
                                </li>
<!--
                                <li>
                                    <a href="<?php echo base_url();?>index.php/wi">Penugasan WI</a>
                                </li>
-->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-tasks"></i> Penyelenggaraan Kediklatan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>#">Biodata Peserta</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>#">Diklat Peserta</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>#">Diklat Teknis Substansi</a>
                                </li>
    <!--
                                <li>
                                    <a href="<?php echo base_url();?>index.php/kaldik/list_realisasi_kaldik">Realisasi Kalender Diklat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/jadwalInstructor">Realisasi Penugasan Instructor</a>
                                </li>
    -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-tasks"></i> Evaluasi Kediklatan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>#">Evaluasi Penyelenggaraan Kediklatan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>#">Evaluasi Instruktur</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>#">Evaluasi Materi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>#">Penilaian WI Terhadap Peserta</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-tasks"></i> Konversi Kegiatan WI<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url();?>#">Rencana Penugasan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>#">Realisasi Penugasan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>#">Kartu Kendali</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>#">Laporan Kegiatan Non Tatap Muka</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-tasks"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="<?php echo base_url();?>pertemuan_jenis">Jenis Pertemuan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>diklat_type">Tipe Diklat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>diklat">Diklat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>instructorAssign">Instruktur</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>agama">Agama</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>kegiatan">Kegiatan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>biaya">Sumber Biaya</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>bidang">Bidang</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>jenjang">Jenjang Pendidikan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>provinsi">Provinsi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>kabupaten">Kabupaten</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>golongan">Golongan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>jabatan_group">Grup Jabatan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>jabatan">Jabatan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>pangkat_type">Tipe Pangkat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>pangkat">Pangkat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>year">Tahun Diklat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>lembaga">Lembaga</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>instansi">Instansi</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>unit">Unit Kerja</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>location">Lokasi Diklat</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>kelas">Kelas</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>holiday">Hari Libur</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>pegawai">Pegawai</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>role">Role</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>user">User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>