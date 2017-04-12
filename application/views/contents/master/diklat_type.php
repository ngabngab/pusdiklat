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
            $('#dataDiklat').DataTable({
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
                            Data Master <small>Tipe Diklat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Tipe Diklat
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
                            <div class="panel-heading">Tambah Tipe Diklat</div>
                            <div class="panel-body">
                                <?php 
                                    $attributes = array('name' => 'len');
                                    echo form_open('Diklat_typeStatement', $attributes); ?>
                                <?php
                                    $diklatTypeID = "";
                                    $bidangID = "";
                                    $bidangFullName = "";
                                    $diklatTypeName = "";
                                    if($SelectedDiklat_type){
                                        $bidangID = $SelectedDiklat_type[0]->bidangID;
                                        $bidangFullName = $SelectedDiklat_type[0]->bidangFullName;
                                        $diklatTypeID = $SelectedDiklat_type[0]->diklatTypeID;
                                        $diklatTypeName = $SelectedDiklat_type[0]->diklatTypeName;
                                    }
                                ?>

                                    <script language="JavaScript">

                                    function showList() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listBidang', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }

                                    </script>

                                    <label>Nama Bidang</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="bidangID" name="bidangID" readonly value="<?php echo $bidangID; ?>">
                                        <input class="form-control" type="text" id="bidangFullName" name="bidangFullName" readonly value="<?php echo $bidangFullName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Tipe Diklat</label>
                                        <input class="form-control" type="hidden" name="diklatTypeID" value="<?php echo $diklatTypeID; ?>">
                                        <input class="form-control" type="text" name="diklatTypeName" placeholder="Enter Nama Tipe Diklat" value="<?php echo $diklatTypeName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
						<h3>Tambah Tipe Diklat</h3>
						

                    </div>
					<?php
					
					?>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Tipe Diklat</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataDiklat">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bidang</th>
                                            <th>Nama Tipe Diklat</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($diklat_types){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($diklat_types as $diklat_type){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $diklat_type->bidangShortName; ?></td>
                                                    <td><?php echo $diklat_type->diklatTypeName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($diklat_type->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($diklat_type->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/diklat_type/edit/<?php echo $diklat_type->diklatTypeID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/diklat_type/delete/<?php echo $diklat_type->diklatTypeID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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