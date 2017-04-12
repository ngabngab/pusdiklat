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
            $('#dataGolongan').DataTable({
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
                            Data Master <small>Golongan</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Golongan
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
                            <div class="panel-heading">Tambah Golongan</div>
                            <div class="panel-body">
                                <?php echo form_open('GolonganStatement'); ?>
                                <?php
                                    $golonganID = "";
                                    $golonganName = "";
                                    if($SelectedGolongan){
                                        $golonganID = $SelectedGolongan[0]->golonganID;
                                        $golonganName = $SelectedGolongan[0]->golonganName;
                                    }
                                ?>
                                    <div class="form-group">
                                        <label>Nama Golongan</label>
                                        <input class="form-control" type="hidden" name="golonganID" value="<?php echo $golonganID; ?>">
                                        <input class="form-control" type="text" name="golonganName" placeholder="Enter Nama Golongan" value="<?php echo $golonganName; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-default">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Golongan</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataGolongan">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Golongan</th>
                                            <th>Nama Golongan</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($golongans){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($golongans as $golongan){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo "GOL".$golongan->golonganID; ?></td>
                                                    <td><?php echo $golongan->golonganName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($golongan->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($golongan->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/golongan/edit/<?php echo $golongan->golonganID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/golongan/delete/<?php echo $golongan->golonganID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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