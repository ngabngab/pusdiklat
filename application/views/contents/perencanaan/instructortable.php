<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$loggedIn = $this->session->userdata['logged_in'];

?>
    
        <script>
        $(document).ready(function() {
            $('#dataInstructor').DataTable({
                responsive: false,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
        </script>

        <script src="<?php echo base_url();?>/assets/js/jquery-ui/jquery.js"></script>
        <script src="<?php echo base_url();?>/assets/js/moment-with-locales.js"></script>
        <script>
            moment.locale('id');
        </script>

		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Tabel Perencanaan <small>Penugasan Instruktur</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tasks"></i> Tabel Perencanaan | Penugasan Instruktur
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
                <div class="row">
                    
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Rencana Penugasan Instruktur</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataInstructor">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Instruktur</th>
                                            <th>Kaldik</th>
                                            <th>WI</th>
                                            <th>Rencana Tanggal Mata Ajar</th>
                                            <th>Nama Mata Ajar</th>
                                            <th>Uraian Diklat</th>
                                            <th>Lokasi Diklat</th>
                                            <th>JamLat</th>
                                            <th>Sumber Biaya</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($instructors){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($instructors as $instructor){
                                                $wi = $instructor->isWI;
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $instructor->pegawaiDegreeFirst." " .$instructor->pegawaiName." ".$instructor->pegawaiDegreeLast; ?></td>
                                                    <td><?php echo $instructor->kaldikCode;?></td>
                                                    <td><input type="checkbox" <?php echo $wi == '1' ? 'checked' : ''; ?> disabled></td>
                                                    <td id='tgl<?php echo $i;?>'></td>
                                                    <td><?php echo $instructor->mataAjarName;?></td>
                                                    <td><?php echo $instructor->kaldikDesc; ?></td>
                                                    <td><?php echo $instructor->diklatLocName; ?></td>
                                                    <td><?php echo $instructor->jamLat; ?></td>
                                                    <td><?php echo $instructor->biayaName; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" title="edit" href="<?php echo base_url();?>index.php/instructor/update/<?php echo $instructor->instructorAssignmentID;?>"><i class="fa fa-pencil"></i></a> <a href="<?php echo base_url();?>index.php/instructor/delete/<?php echo $instructor->instructorAssignmentID;?>/" class="btn btn-danger btn-xs" title="delete" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
                                                </tr>
                                                <script>
                                                    var temptgl = moment('<?php echo $instructor->rencanaTgl;?>').format("DD MMMM YYYY");
                                                    $('#tgl<?php echo $i;?>').html(''+temptgl);
                                                </script>
                                                <?php
                                                $i++;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
					
                </div>
				
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->