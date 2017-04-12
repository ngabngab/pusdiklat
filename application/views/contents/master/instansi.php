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
            $('#dataInstansi').DataTable({
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
                            Data Master <small>Instansi</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Instansi
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
                            <div class="panel-heading">Tambah Instansi</div>
                            <div class="panel-body">
                                <?php 
                                    $attributes = array('name' => 'len');
                                    echo form_open('InstansiStatement', $attributes); 
                                    $instansiID = "";
                                    $lembagaID = "";
                                    $instansiName = "";
                                    $lembagaName = "";
                                    if($SelectedInstansi){
                                        $lembagaID = $SelectedInstansi[0]->lembagaID;
                                        $instansiID = $SelectedInstansi[0]->instansiID;
                                        $instansiName = $SelectedInstansi[0]->instansiName;
                                        $lembagaName = $SelectedInstansi[0]->lembagaName;
                                    }
                                ?>

                                    <script language="JavaScript">

                                    function showList() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listLembaga', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }

                                    </script>

                                    <label>Nama Lembaga</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="lembagaID" name="lembagaID" readonly value="<?php echo $lembagaID; ?>">
                                        <input class="form-control" type="text" id="lembagaName" name="lembagaName" readonly value="<?php echo $lembagaName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Instansi</label>
                                        <input class="form-control" type="hidden" name="instansiID" value="<?php echo $instansiID; ?>">
                                        <input class="form-control" type="text" name="instansiName" placeholder="Enter Nama Instansi" value="<?php echo $instansiName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Instansi</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataInstansi">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lembaga</th>
                                            <th>Nama Instansi</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($instansis){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($instansis as $instansi){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $instansi->lembagaName; ?></td>
                                                    <td><?php echo $instansi->instansiName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($instansi->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($instansi->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/instansi/edit/<?php echo $instansi->instansiID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/instansi/delete/<?php echo $instansi->instansiID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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