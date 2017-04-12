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
            $('#dataBidang').DataTable({
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
                            Data Master <small>Bidang</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Bidang
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
                            <div class="panel-heading">Tambah Bidang</div>
                            <div class="panel-body">
                                <?php echo form_open('BidangStatement'); ?>
                                <?php
                                    $bidangID = "";
                                    $bidangShortName = "";
                                    $bidangFullName = "";
                                    if($SelectedBidang){
                                        $bidangID = $SelectedBidang[0]->bidangID;
                                        $bidangShortName = $SelectedBidang[0]->bidangShortName;
                                        $bidangFullName = $SelectedBidang[0]->bidangFullName;
                                    }
                                ?>
                                    <div class="form-group">
                                        <label>Nama Singkat Bidang</label>
                                        <input class="form-control" type="hidden" name="bidangID" value="<?php echo $bidangID; ?>">
                                        <input class="form-control" type="text" name="bidangShortName" placeholder="Enter Nama Singkat Bidang" value="<?php echo $bidangShortName; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Lengkap Bidang</label>
                                        <input class="form-control" type="text" name="bidangFullName" placeholder="Enter Nama Lengkap Bidang" value="<?php echo $bidangFullName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Bidang</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataBidang">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Singkat Bidang</th>
                                            <th>Nama Lengkap Bidang</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($bidangs){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($bidangs as $bidang){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $bidang->bidangShortName; ?></td>
                                                    <td><?php echo $bidang->bidangFullName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($bidang->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($bidang->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/bidang/edit/<?php echo $bidang->bidangID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/bidang/delete/<?php echo $bidang->bidangID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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