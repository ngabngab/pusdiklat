<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data Master <small>Pegawai</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Pegawai
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- show error message -->
				<?php
				if(validation_errors()!= null){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger">
								<?php echo validation_errors(); ?>
							</div>
						</div>
					</div>
					<?php
				}
				if($errMessage!= ''){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger">
								<?php echo $errMessage; ?>
							</div>
						</div>
					</div>
					<?php
				}
				if($success == true){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-success">
								<strong>Well done!</strong> Data has been saved successfully.
							</div>
						</div>
					</div>
					<?php
				}
				
				?>
				<!-- show error message -->
				
                <div class="row">
                    <div class="col-lg-12">
						<h3>Tambah Pegawai</h3>
                        <?php 
						$attributes = array('name' => 'len');
						echo form_open_multipart('PegawaiStatement', $attributes); ?>
							<?php
							$diklatLocID = "";
							$pegawaiID = "";
							$pegawaiName = "";
							$pegawaiDesc = "";
							$diklatLocName = "";
							$diklatLocDetail = "";
							if($SelectedPegawai){
								$diklatLocID = $SelectedPegawai[0]->diklatLocID;
								$pegawaiID = $SelectedPegawai[0]->pegawaiID;
								$pegawaiName = $SelectedPegawai[0]->pegawaiName;
								$pegawaiDesc = $SelectedPegawai[0]->pegawaiDesc;
								$diklatLocName = $SelectedPegawai[0]->diklatLocName;
								$diklatLocDetail = $SelectedPegawai[0]->diklatLocDetail;
							}
							?>

							<label><a href="<?php echo base_url();?>assets/templates/pegawai.csv">Download Template Excel</a></label>
							<br /><br />
							
                            <div class="form-group">
                                <label>File Upload Pegawai</label>
                                <input class="form-control" type="file" name="pegawaiData">
                            </div>

                            <input type="submit" name="save" class="btn btn-default" value="Save"/>

                        </form>

                    </div>
					<?php
					
					?>
					<div class="col-lg-12">
                        <h3>Data Pegawai</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>TTL</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal ditambahkan</th>
                                        <th>Tanggal diubah</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($pegawais){
										$i=1;
										$this->load->model('enum');
										foreach($pegawais as $pegawai){
											?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $pegawai->pegawaiNIP; ?></td>
												<td><?php echo $pegawai->pegawaiDegreeFirst." " .$pegawai->pegawaiName." ".$pegawai->pegawaiDegreeLast; ?></td>
												<td><?php echo $pegawai->pegawaiPlaceofBirth.", " .$pegawai->pegawaiDateofBirth; ?></td>
												<td><?php if($pegawai->pegawaiGender==1){echo "Laki-laki";}else{echo "Perempuan";} ?></td>
												<td><?php echo $this->enum->getDateFromTS($pegawai->addDate); ?></td>
												<td><?php echo $this->enum->getDateFromTS($pegawai->lastUpdate); ?></td>
												<td style="text-align:right;">
												<a href="<?php echo base_url();?>index.php/pegawai">Lihat Detil</a>
												<a href="<?php echo base_url();?>index.php/pegawai">ubah</a> 
												<a href="<?php echo base_url();?>index.php/pegawai/delete/<?php echo $pegawai->pegawaiID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }">hapus</a></td>
											</tr>
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