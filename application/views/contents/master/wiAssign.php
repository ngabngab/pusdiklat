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
                            Data Master <small>WI</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | WI
                            </li>
                        </ol>
                    </div>
                </div>
				<?php echo form_open('wiAssign'); ?>
                <div class="row">
					<div class="col-lg-5">
                        <div class="table-responsive">
							<div class="form-group">
                                <label>Pegawai</label>
                                <select name="pegawai[]" multiple class="form-control" size="20">
									<?php
									if($pegawais){
										$i=1;
										$this->load->model('enum');
										foreach($pegawais as $pegawai){
										?>
											<option value="<?php echo $pegawai->pegawaiID; ?>"><?php echo $pegawai->pegawaiNIP. ' - ' . $pegawai->pegawaiDegreeFirst." " .$pegawai->pegawaiName." ".$pegawai->pegawaiDegreeLast; ?></option>
										<?php
										}
									}
									?>
                                </select>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-2" style="text-align:center;">
                        <div class="table-responsive">
							<div class="form-group">
                                <button type="submit" name="btnAdd" class="btn btn-default">Add >></button>
                            </div>
							<div class="form-group">
                                <button type="submit" name="btnRemove" class="btn btn-default">&lt;&lt; remove</button>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-5">
                        <div class="table-responsive">
							<div class="form-group">
                                <label>WI</label>
                                <select name="wi[]" multiple class="form-control" size="20">
									<?php
									if($wis){
										$i=1;
										$this->load->model('enum');
										foreach($wis as $wis){
										?>
											<option value="<?php echo $wis->pegawaiID; ?>"><?php echo $wis->pegawaiNIP. ' - ' . $wis->pegawaiDegreeFirst." " .$wis->pegawaiName." ".$wis->pegawaiDegreeLast; ?></option>
										<?php
										}
									}
									?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
				</form>
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->