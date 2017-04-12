<?php
/**
 * Simkurikulum Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

        <script>
        $(document).ready(function() {
            $('#dataKurikulumType').DataTable({
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
                            Data Master <small>Jenis Kurikulum</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Jenis Kurikulum
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
                
                <script language="JavaScript">
							
                    function showList() {
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

                </script>
				
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Tambah Jenis Kurikulum</div>
                            <div class="panel-body">
                                <?php 
                                $attributes = array('name' => 'len');
                                echo form_open('Kurikulum_typeStatement', $attributes); ?>
                                <?php
                                    $kurikulumTypeID = "";
                                    $kurikulumTypeName = "";
                                    $diklatTypeID = "";
                                    $diklatTypeName = "";
                                    if($SelectedKurikulum_type){
                                        $kurikulumTypeID = $SelectedKurikulum_type[0]->kurikulumTypeID;
                                        $diklatTypeID = $SelectedKurikulum_type[0]->diklatTypeID;
                                        $diklatTypeName = $SelectedKurikulum_type[0]->diklatTypeName;
                                        $kurikulumTypeName = $SelectedKurikulum_type[0]->kurikulumTypeName;
                                    }
                                    ?>

                                    <label>Tipe Diklat</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="diklatTypeID" name="diklatTypeID" readonly value="<?php echo $diklatTypeID; ?>">
                                        <input class="form-control" type="text" id="diklatTypeName" name="diklatTypeName" readonly value="<?php echo $diklatTypeName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Jenis Kurikulum</label>
                                        <input class="form-control" type="hidden" name="kurikulumTypeID" value="<?php echo $kurikulumTypeID; ?>">
                                        <input class="form-control" type="text" name="kurikulumTypeName" placeholder="Enter Nama Tipe Kurikulum" value="<?php echo $kurikulumTypeName; ?>">
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
                            <div class="panel-heading">Data Jenis Kurikulum</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataKurikulumType">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jenis Diklat</th>
                                            <th>Nama Jenis Kurikulum</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($kurikulum_types){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($kurikulum_types as $kurikulum_type){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $kurikulum_type->kurikulumTypeName; ?></td>
                                                    <td><?php echo $kurikulum_type->diklatTypeName; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/kurikulum_type/edit/<?php echo $kurikulum_type->kurikulumTypeID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/kurikulum_type/delete/<?php echo $kurikulum_type->kurikulumTypeID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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