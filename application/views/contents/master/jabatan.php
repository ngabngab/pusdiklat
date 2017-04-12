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
                            Data Master <small>Jabatan</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Jabatan
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
                            <div class="panel-heading">Tambah Jabatan</div>
                            <div class="panel-body">
                                <?php 
                                    $attributes = array('name' => 'len');
                                    echo form_open('JabatanStatement', $attributes); 
                                    $jabatanID = "";
                                    $jabatanShortName = "";
                                    $jabatanFullName = "";
                                    $jabatanGroupID = "";
                                    $jabatanGroupShortName = "";
                                    $jabatanGroupFullName = "";
                                    if($SelectedJabatan){
                                        $jabatanID = $SelectedJabatan[0]->jabatanID;
                                        $jabatanGroupID = $SelectedJabatan[0]->jabatanGroupID;
                                        $jabatanGroupShortName = $SelectedJabatan[0]->jabatanGroupShortName;
                                        $jabatanGroupFullName = $SelectedJabatan[0]->jabatanGroupFullName;
                                        $jabatanShortName = $SelectedJabatan[0]->jabatanShortName;
                                        $jabatanFullName = $SelectedJabatan[0]->jabatanFullName;
                                    }
                                ?>

                                    <script language="JavaScript">

                                    function showList() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listJabatanGroup', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }

                                    </script>

                                    <label>Nama Grup Jabatan</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="jabatanGroupID" name="jabatanGroupID" readonly value="<?php echo $jabatanGroupID; ?>">
                                        <input class="form-control" type="text" id="jabatanGroupFullName" name="jabatanGroupFullName" readonly value="<?php echo $jabatanGroupFullName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Singkat Jabatan</label>
                                        <input class="form-control" type="hidden" name="jabatanID" value="<?php echo $jabatanID; ?>">
                                        <input class="form-control" type="text" name="jabatanShortName" placeholder="Enter Nama Singkat Jabatan" value="<?php echo $jabatanShortName; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Lengkap Jabatan</label>
                                        <input class="form-control" type="text" name="jabatanFullName" placeholder="Enter Nama Lengkap Jabatan" value="<?php echo $jabatanFullName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Jabatan</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataJabatan">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Jabatan</th>
                                            <th>Nama Singkat Jabatan</th>
                                            <th>Nama Lengkap Jabatan</th>
                                            <th>Grup Jabatan</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($jabatans){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($jabatans as $jabatan){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo "JBT".$jabatan->jabatanID; ?></td>
                                                    <td><?php echo $jabatan->jabatanShortName; ?></td>
                                                    <td><?php echo $jabatan->jabatanFullName; ?></td>
                                                    <td><?php echo $jabatan->jabatanGroupShortName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($jabatan->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($jabatan->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/jabatan/edit/<?php echo $jabatan->jabatanID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/jabatan/delete/<?php echo $jabatan->jabatanID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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