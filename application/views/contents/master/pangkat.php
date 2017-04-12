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
                            Data Master <small>Pangkat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Pangkat
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
                            <div class="panel-heading">Tambah Pangkat</div>
                            <div class="panel-body">
                                <?php 
                                    $attributes = array('name' => 'len');
                                    echo form_open('PangkatStatement', $attributes); 
                                    $pangkatID = "";
                                    $pangkatName = "";
                                    $pangkatTypeID = "";
                                    $pangkatTypeName = "";
                                    if($SelectedPangkat){
                                        $pangkatID = $SelectedPangkat[0]->pangkatID;
                                        $pangkatTypeID = $SelectedPangkat[0]->pangkatTypeID;
                                        $pangkatTypeName = $SelectedPangkat[0]->pangkatTypeName;
                                        $pangkatName = $SelectedPangkat[0]->pangkatName;
                                    }
                                ?>

                                    <script language="JavaScript">

                                    function showList() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listPangkatType', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }

                                    </script>

                                    <label>Tipe Pangkat</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="pangkatTypeID" name="pangkatTypeID" readonly value="<?php echo $pangkatTypeID; ?>">
                                        <input class="form-control" type="text" id="pangkatTypeName" name="pangkatTypeName" readonly value="<?php echo $pangkatTypeName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Pangkat</label>
                                        <input class="form-control" type="hidden" name="pangkatID" value="<?php echo $pangkatID; ?>">
                                        <input class="form-control" type="text" name="pangkatName" placeholder="Enter Nama Pangkat" value="<?php echo $pangkatName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Pangkat</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataPangkat">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Pangkat</th>
                                            <th>Nama Pangkat</th>
                                            <th>Tipe Pangkat</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($pangkats){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($pangkats as $pangkat){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo "PKT".$pangkat->pangkatID; ?></td>
                                                    <td><?php echo $pangkat->pangkatName; ?></td>
                                                    <td><?php echo $pangkat->pangkatTypeName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($pangkat->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($pangkat->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/pangkat/edit/<?php echo $pangkat->pangkatID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/pangkat/delete/<?php echo $pangkat->pangkatID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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