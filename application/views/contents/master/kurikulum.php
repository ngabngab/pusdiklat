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
            $('#dataKurikulum').DataTable({
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
                            Data Master <small>Kurikulum</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Kurikulum
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
                            <div class="panel-heading">Tambah Kurikulum</div>
                            <div class="panel-body">
                                <?php 
                                $attributes = array('name' => 'len');
                                echo form_open('KurikulumStatement', $attributes); ?>
                                <?php
                                    $kurikulumID = "";
                                    $kurikulumTypeID = "";
                                    $kurikulumTypeName = "";
                                    $kurikulumName = "";
                                    if($SelectedKurikulum){
                                        $kurikulumTypeID = $SelectedKurikulum[0]->kurikulumTypeID;
                                        $kurikulumTypeName = $SelectedKurikulum[0]->kurikulumTypeName;
                                        $kurikulumID = $SelectedKurikulum[0]->kurikulumID;
                                        $kurikulumName = $SelectedKurikulum[0]->kurikulumName;
                                    }
                                    ?>

                                    <script language="JavaScript">

                                    function showList() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listKurikulumType', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }

                                    </script>

                                    <label>Jenis Kurikulum</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="kurikulumTypeID" name="kurikulumTypeID" readonly value="<?php echo $kurikulumTypeID; ?>">
                                        <input class="form-control" type="text" id="kurikulumTypeName" name="kurikulumTypeName" readonly value="<?php echo $kurikulumTypeName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Kurikulum</label>
                                        <input class="form-control" type="hidden" name="kurikulumID" value="<?php echo $kurikulumID; ?>">
                                        <input class="form-control" type="text" name="kurikulumName" placeholder="Enter Nama Kurikulum" value="<?php echo $kurikulumName; ?>">
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
                            <div class="panel-heading">Data Kurikulum</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataKurikulum">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jenis Kurikulum</th>
                                            <th>Nama Kurikulum</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($kurikulums){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($kurikulums as $kurikulum){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $kurikulum->kurikulumTypeName; ?></td>
                                                    <td><?php echo $kurikulum->kurikulumName; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/kurikulum/edit/<?php echo $kurikulum->kurikulumID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/kurikulum/delete/<?php echo $kurikulum->kurikulumID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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