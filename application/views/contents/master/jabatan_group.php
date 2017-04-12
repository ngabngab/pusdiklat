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
            $('#dataJabatan').DataTable({
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
                            Data Master <small>Grup Jabatan</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Grup Jabatan
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
                            <div class="panel-heading">Tambah Grup Jabatan</div>
                            <div class="panel-body">
                                <?php echo form_open('Jabatan_groupStatement'); ?>
                                <?php
                                    $jabatanGroupID = "";
                                    $jabatanGroupShortName = "";
                                    $jabatanGroupFullName = "";
                                    if($SelectedJabatan_group){
                                        $jabatanGroupID = $SelectedJabatan_group[0]->jabatanGroupID;
                                        $jabatanGroupShortName = $SelectedJabatan_group[0]->jabatanGroupShortName;
                                        $jabatanGroupFullName = $SelectedJabatan_group[0]->jabatanGroupFullName;
                                    }
                                ?>
                                    <div class="form-group">
                                        <label>Nama Singkat Grup Jabatan</label>
                                        <input class="form-control" type="hidden" name="jabatanGroupID" value="<?php echo $jabatanGroupID; ?>">
                                        <input class="form-control" type="text" name="jabatanGroupShortName" placeholder="Enter Nama Singkat Grup Jabatan" value="<?php echo $jabatanGroupShortName; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Lengkap Grup Jabatan</label>
                                        <input class="form-control" type="text" name="jabatanGroupFullName" placeholder="Enter Nama Lengkap Grup Jabatan" value="<?php echo $jabatanGroupFullName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Grup Jabatan</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataJabatan">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Singkat Grup Jabatan</th>
                                            <th>Nama Lengkap Grup Jabatan</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($jabatan_groups){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($jabatan_groups as $jabatan_group){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $jabatan_group->jabatanGroupShortName; ?></td>
                                                    <td><?php echo $jabatan_group->jabatanGroupFullName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($jabatan_group->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($jabatan_group->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/jabatan_group/edit/<?php echo $jabatan_group->jabatanGroupID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/jabatan_group/delete/<?php echo $jabatan_group->jabatanGroupID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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