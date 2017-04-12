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
                            Data Master <small>Diklat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Diklat
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
                            <div class="panel-heading">Tambah Diklat</div>
                            <div class="panel-body">
                                <?php 
                                $attributes = array('name' => 'len');
                                echo form_open('DiklatStatement', $attributes); ?>
                                <?php
                                    $kurikulumID = "";
                                    $kurikulumName = "";
                                    $diklatTypeID = "";
                                    $diklatTypeName = "";
                                    $diklatID = "";
                                    $diklatName = "";
                                    if($SelectedDiklat){
                                        $kurikulumID = $SelectedDiklat[0]->kurikulumID;
                                        $kurikulumName = $SelectedDiklat[0]->kurikulumName;
                                        $diklatTypeID = $SelectedDiklat[0]->diklatTypeID;
                                        $diklatTypeName = $SelectedDiklat[0]->diklatTypeName;
                                        $diklatID = $SelectedDiklat[0]->diklatID;
                                        $diklatName = $SelectedDiklat[0]->diklatName;
                                    }
                                    ?>

                                    <script language="JavaScript">

                                    function showList1() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listKurikulum', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function showList2() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listDiklatType', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }
                                    
                                    function kurikulumRef() {
                                        
                                    }

                                    </script>

                                    <label>Kurikulum</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="kurikulumID" name="kurikulumID" readonly value="<?php echo $kurikulumID; ?>">
                                        <input class="form-control" type="text" id="kurikulumName" name="kurikulumName" readonly value="<?php echo $kurikulumName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList1()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <label>Tipe Diklat</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="diklatTypeID" name="diklatTypeID" readonly value="<?php echo $diklatTypeID; ?>">
                                        <input class="form-control" type="text" id="diklatTypeName" name="diklatTypeName" readonly value="<?php echo $diklatTypeName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList2()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Diklat</label>
                                        <input class="form-control" type="hidden" name="diklatID" value="<?php echo $diklatID; ?>">
                                        <input class="form-control" type="text" name="diklatName" placeholder="Enter Nama Diklat" value="<?php echo $diklatName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<?php
					
					?>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Diklat</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataDiklat">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Diklat</th>
                                            <th>Tipe Diklat</th>
                                            <th>Kurikulum</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($diklats){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($diklats as $diklat){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $diklat->diklatName; ?></td>
                                                    <td><?php echo $diklat->diklatTypeName; ?></td>
                                                    <td><?php echo $diklat->kurikulumName; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/diklat/edit/<?php echo $diklat->diklatID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/diklat/delete/<?php echo $diklat->diklatID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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