<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>
        <script>
        $(document).ready(function() {
            $('#dataProvinsi').DataTable({
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
                            Data Master <small>Provinsi</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Provinsi
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
                        <div class="panel panel-default">
                            <div class="panel-heading">Tambah Provinsi</div>
                            <div class="panel-body">
                                <?php echo form_open('ProvinsiStatement'); ?>
                                <?php
                                    $provinsiID = "";
                                    $provinsiName = "";
                                    if($SelectedProvinsi){
                                        $provinsiID = $SelectedProvinsi[0]->provinsiID;
                                        $provinsiName = $SelectedProvinsi[0]->provinsiName;
                                    }
                                ?>
                                    <div class="form-group">
                                        <label>Nama Provinsi</label>
                                        <input class="form-control" type="hidden" name="provinsiID" value="<?php echo $provinsiID; ?>">
                                        <input class="form-control" type="text" name="provinsiName" placeholder="Enter Nama Provinsi" value="<?php echo $provinsiName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Provinsi</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataProvinsi">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Provinsi</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($provinsis){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($provinsis as $provinsi){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i+(($page-1)*20); ?></td>
                                                    <td><?php echo $provinsi->provinsiName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($provinsi->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($provinsi->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/provinsi/edit/<?php echo $provinsi->provinsiID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/provinsi/delete/<?php echo $provinsi->provinsiID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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