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
            $('#dataBiaya').DataTable({
                responsive: false,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
        </script>
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data Master <small>Biaya</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Biaya
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
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
                        <div class="panel panel-default">
                            <div class="panel-heading">Tambah Sumber Biaya</div>
                            <div class="panel-body">
                                <?php echo form_open('BiayaStatement'); ?>
                                <?php
                                    $biayaID = "";
                                    $biayaName = "";
                                    $biayaDesc = "";
                                    $biayaStatus = 1;
                                    if($SelectedBiaya){
                                        $biayaID = $SelectedBiaya[0]->biayaID;
                                        $biayaName = $SelectedBiaya[0]->biayaName;
                                        $biayaDesc = $SelectedBiaya[0]->biayaDesc;
                                        $biayaStatus = $SelectedBiaya[0]->biayaStatus;
                                    }
                                ?>
                                    <div class="form-group">
                                        <label>Sumber Biaya</label>
                                        <input class="form-control" type="hidden" name="biayaID" value="<?php echo $biayaID; ?>">
                                        <input class="form-control" type="text" name="biayaName" placeholder="Enter Nama Sumber Biaya" value="<?php echo $biayaName; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="biayaDesc" class="form-control" rows="3"><?php echo $biayaDesc; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="biayaStatus" <?php if($biayaStatus==1){ echo "checked"; } ?> id="optionsRadios1" value="1" >Aktif
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="biayaStatus" <?php if($biayaStatus==0){ echo "checked"; } ?> id="optionsRadios2" value="0">Tidak Aktif
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Sumber Biaya</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataBiaya">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Sumber Biaya</th>
                                            <th>Status</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($biayas){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($biayas as $biaya){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $biaya->biayaName; ?></td>
                                                    <td><?php if($biaya->biayaStatus==1){ echo "Aktif"; }else{ echo "Tidak Aktif"; } ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($biaya->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($biaya->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/biaya/edit/<?php echo $biaya->biayaID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/biaya/delete/<?php echo $biaya->biayaID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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
                </div>
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->