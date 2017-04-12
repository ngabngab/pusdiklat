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

		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Perencanaan <small>Penugasan WI</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tasks"></i> Perencanaan | Penugasan WI
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
						
				<script language="JavaScript">
				
				function showList() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listDiklat', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function remLink() {
					if (window.sList && window.sList.open && !window.sList.closed)
						window.sList.opener = null;
				}
				
				</script>
				
                <div class="row">
                    <div class="col-lg-12">
						<?php 
						$attributes = array('name' => 'len');
						echo form_open('wi/diklat/'.$wis[0]->pegawaiID, $attributes); ?>
							
							<label>NIP</label>
							<div class="form-group">
								<input class="form-control" type="hidden" id="wiID" name="wiID" readonly value="<?php echo $wis[0]->pegawaiID; ?>">
								<input class="form-control" type="text" id="wiNIP" name="wiNIP" readonly value="<?php echo $wis[0]->pegawaiNIP; ?>">
							</div>
							
							<label>Nama</label>
							<div class="form-group">
								<input class="form-control" type="text" id="wiName" name="wiName" readonly value="<?php echo $wis[0]->pegawaiDegreeFirst." " .$wis[0]->pegawaiName." ".$wis[0]->pegawaiDegreeLast; ?>">
							</div>
							
							<label>Diklat</label>
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="diklatID" name="diklatID" readonly value="">
								<input class="form-control" type="text" id="diklatName" name="diklatName" readonly value="">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
							
							<button type="submit" name="btnSave" class="btn btn-default">Simpan</button>
							<a href="<?php echo base_url();?>/index.php/wi"><button type="button" class="btn btn-default">Kembali</button></a>
						</form>
                    </div>
					<div class="col-lg-12">
                        <h3>Diklat</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Diklat</th>
                                        <th>Tanggal ditambahkan</th>
                                        <th>Tanggal diubah</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($diklats){
										$i=1;
										$this->load->model('enum');
										foreach($diklats as $diklat){
											?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $diklat->diklatName; ?></td>
												<td><?php echo $this->enum->getDateFromTS($diklat->addDate); ?></td>
												<td><?php echo $this->enum->getDateFromTS($diklat->lastUpdate); ?></td>
												<td style="text-align:right;">
												<a href="<?php echo base_url();?>index.php/wi/delete/<?php echo $diklat->wiAssignmentID;?>/<?php echo $diklat->pegawaiID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }">hapus</a></td>
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