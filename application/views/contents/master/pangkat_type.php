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
            $('#dataPangkat').DataTable({
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
                            Data Master <small>Tipe Pangkat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Tipe Pangkat
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
                            <div class="panel-heading">Tambah Tipe Pangkat</div>
                            <div class="panel-body">
                                <?php echo form_open('Pangkat_typeStatement'); ?>
                                <?php
                                    $pangkatTypeID = "";
                                    $pangkatTypeName = "";
                                    if($SelectedPangkat_type){
                                        $pangkatTypeID = $SelectedPangkat_type[0]->pangkatTypeID;
                                        $pangkatTypeName = $SelectedPangkat_type[0]->pangkatTypeName;
                                    }
                                ?>
                                    <div class="form-group">
                                        <label>Nama Tipe Pangkat</label>
                                        <input class="form-control" type="hidden" name="pangkatTypeID" value="<?php echo $pangkatTypeID; ?>">
                                        <input class="form-control" type="text" name="pangkatTypeName" placeholder="Enter Nama Tipe Pangkat" value="<?php echo $pangkatTypeName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Tipe Pangkat</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataPangkat">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Tipe Pangkat</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($pangkat_types){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($pangkat_types as $pangkat_type){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $pangkat_type->pangkatTypeName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($pangkat_type->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($pangkat_type->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/pangkat_type/edit/<?php echo $pangkat_type->pangkatTypeID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/pangkat_type/delete/<?php echo $pangkat_type->pangkatTypeID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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