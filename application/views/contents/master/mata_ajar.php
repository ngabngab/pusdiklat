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
            $('#dataMataAjar').DataTable({
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
                            Data Master <small>Mata Ajar</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Mata Ajar
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
                            <div class="panel-heading">Form Tambah Mata Ajar</div>
                            <div class="panel-body">
                                <?php echo form_open('Mata_ajarStatement'); ?>
                                    <?php
                                    $Mata_ajarID = "";
                                    $Mata_ajarName = "";
                                    $Mata_ajarDesc = "";
                                    $jamlat = "";
                                    if($SelectedMata_ajar){
                                        $Mata_ajarID = $SelectedMata_ajar[0]->mataAjarID;
                                        $Mata_ajarName = $SelectedMata_ajar[0]->mataAjarName;
                                        $Mata_ajarDesc = $SelectedMata_ajar[0]->mataAjarDesc;
                                        $jamlat = $SelectedMata_ajar[0]->jamlat;
                                    }
                                    ?>
                                    <div class="form-group">
                                        <label>Nama Mata Ajar</label>
                                        <input class="form-control" type="hidden" name="mataAjarID" value="<?php echo $Mata_ajarID; ?>">
                                        <input class="form-control" type="text" name="mataAjarName" placeholder="Enter Nama Mata Ajar" value="<?php echo $Mata_ajarName; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Mata Ajar</label>
                                        <textarea class="form-control" name="mataAjarDesc" rows="3"><?php echo $Mata_ajarDesc; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Jamlat</label>
                                        <input class="form-control" type="text" name="jamlat" placeholder="Enter Jamlat" value="<?php echo $jamlat; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<?php
					
					?>
					<div class="col-lg-12" style="margin-top:1%;">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Mata Ajar</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataMataAjar" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mata Ajar</th>
                                            <th>Jamlat</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($mata_ajars){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($mata_ajars as $mata_ajar){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $mata_ajar->mataAjarName; ?></td>
                                                    <td><?php echo $mata_ajar->jamlat; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/mata_ajar/edit/<?php echo $mata_ajar->mataAjarID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/mata_ajar/delete/<?php echo $mata_ajar->mataAjarID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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