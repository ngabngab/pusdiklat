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

        <script language="JavaScript">
            
				moment.locale('id');
				function showList() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listKaldik/instructor', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function remLink() {
					if (window.sList && window.sList.open && !window.sList.closed){
						window.sList.opener = null;
                        window.location.replace('<?php echo base_url();?>index.php/jadwalInstructor/index/'+$('#diklatID').val());
                    }
				}
                function diklatRef(valueID){
                    window.location.replace('<?php echo base_url();?>index.php/jadwalInstructor/index/'+valueID);
                }
        </script>

		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Jadwal <small>Penugasan Instruktur</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tasks"></i> Jadwal | Penugasan Instruktur
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="col-lg-12">
                    <?php 
						$attributes = array('name' => 'len', 'target' => '_blank');
						echo form_open('jadwalInstructor/cetakJadwal/', $attributes); ?>
                        <label>Kode Kaldik</label>
                        <div class="form-group input-group">
                            <input class="form-control" type="hidden" id="kaldikID" name="kaldikID" value="<?php echo $kaldikID;?>">
                            <input class="form-control" type="text" id="kaldikCode" name="kaldikCode" readonly value="<?php echo $kaldikCode;?>">
                            <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                        </div>
                        <button type="submit" name="btnSave" class="btn btn-default" <?php echo $rencanaTgl;?>>Cetak</button>
                    </form>
                </div>
                
                <div class="row">
                    
					<div class="col-lg-12">
                        <h3>Jadwal Penugasan Instruktur</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Jamlat</th>
                                        <th>Pengajar</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($instructors){
										$i=1;
										$this->load->model('enum');
										foreach($instructors as $instructor){
											?>
											<tr>
												<td><?php echo $i; ?></td>
                                                <td id="day<?php echo $i;?>"></td>
												<td id='tgl<?php echo $i;?>'></td>
												<td><?php echo $instructor->startTime;?> - <?php echo $instructor->endTime;?> WIB</td>
												<td><?php echo $instructor->mataAjarName;?></td>
												<td><?php echo $instructor->jamLat; ?></td>
												<td><?php echo $instructor->pegawaiDegreeFirst." " .$instructor->pegawaiName." ".$instructor->pegawaiDegreeLast; ?></td>
                                                <td style="text-align:right;"><a href="<?php echo base_url();?>#">Realisasi</a></td>
											</tr>
                                            <script>
                                                var temptgl = moment('<?php echo $instructor->rencanaTgl;?>').format("DD MMMM YYYY");
                                                var tempday = moment('<?php echo $instructor->rencanaTgl;?>').format("dddd");
                                                $('#tgl<?php echo $i;?>').html(''+temptgl);
                                                $('#day<?php echo $i;?>').html(''+tempday);
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
				
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->