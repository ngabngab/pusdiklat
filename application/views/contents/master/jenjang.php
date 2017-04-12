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
            $('#dataJenjang').DataTable({
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
                            Data Master <small>Jenjang Pendidikan</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Jenjang Pendidikan
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
                            <div class="panel-heading">Tambah Jenjang Pendidikan</div>
                            <div class="panel-body">
                                <?php echo form_open('JenjangStatement'); ?>
                                <?php
                                    $jenjangID = "";
                                    $jenjangShortName = "";
                                    $jenjangFullName = "";
                                    if($SelectedJenjang){
                                        $jenjangID = $SelectedJenjang[0]->educationLevelID;
                                        $jenjangShortName = $SelectedJenjang[0]->educationLevelShortName;
                                        $jenjangFullName = $SelectedJenjang[0]->educationLevelFullName;
                                    }
                                ?>
                                    <div class="form-group">
                                        <label>Nama Singkat Jenjang Pendidikan</label>
                                        <input class="form-control" type="hidden" name="jenjangID" value="<?php echo $jenjangID; ?>">
                                        <input class="form-control" type="text" name="jenjangShortName" placeholder="Enter Nama Singkat Jenjang Pendidikan" value="<?php echo $jenjangShortName; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Lengkap Jenjang Pendidikan</label>
                                        <input class="form-control" type="text" name="jenjangFullName" placeholder="Enter Nama Lengkap Jenjang Pendidikan" value="<?php echo $jenjangFullName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Jenjang Pendidikan</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataJenjang">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Jenjang Pendidikan</th>
                                            <th>Nama Singkat Jenjang Pendidikan</th>
                                            <th>Nama Lengkap Jenjang Pendidikan</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($jenjangs){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($jenjangs as $jenjang){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo "JP".$jenjang->educationLevelID; ?></td>
                                                    <td><?php echo $jenjang->educationLevelShortName; ?></td>
                                                    <td><?php echo $jenjang->educationLevelFullName; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/jenjang/edit/<?php echo $jenjang->educationLevelID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/jenjang/delete/<?php echo $jenjang->educationLevelID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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