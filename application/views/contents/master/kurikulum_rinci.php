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
            $('#dataKurikulumRinci').DataTable({
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
                            Data Master <small>Kurikulum Rinci</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Kurikulum Rinci
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
                            <div class="panel-heading">Tambah Kurikulum Rinci</div>
                            <div class="panel-body">
                                <?php 
                                $attributes = array('name' => 'len');
                                echo form_open('kurikulumRinciStatement', $attributes); ?>
                                <?php
                                    $kurikulumRinciID = "";
                                    $mataAjarID = "";
                                    $mataAjarName = "";
                                    if($SelectedKurikulumRinci){
                                        $kurikulumRinciID = $SelectedKurikulumRinci[0]->kurikulumRinciID;
                                        $kurikulumID = $SelectedKurikulumRinci[0]->kurikulumID;
                                        $kurikulumName = $SelectedKurikulumRinci[0]->kurikulumName;
                                        $mataAjarID = $SelectedKurikulumRinci[0]->mataAjarID;
                                        $mataAjarName = $SelectedKurikulumRinci[0]->mataAjarName;
                                        $harike = $SelectedKurikulumRinci[0]->harike;
                                    }
                                    ?>

                                    <script language="JavaScript">

                                    function showList() {
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
                                        sList = window.open('<?php echo base_url(); ?>index.php/listMataAjar', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                        
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }
                                    
                                    function kurikulumRef(valueID){
                                        window.location.replace('<?php echo base_url();?>index.php/kurikulumRinci/index/'+valueID);
                                    }

                                    </script>
                                    
                                    <label>Nama Kurikulum</label>
                                    <div class="form-group">
                                        <input class="form-control" type="hidden" id="kurikulumID" name="kurikulumID" readonly value="<?php echo $kurikulumID; ?>">
                                        <input class="form-control" type="text" id="kurikulumName" name="kurikulumName" readonly value="<?php echo $kurikulumName; ?>">
                                    </div>
                                    <label>Nama Mata Ajar</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="mataAjarID" name="mataAjarID" readonly value="<?php echo $mataAjarID; ?>">
                                        <input class="form-control" type="text" id="mataAjarName" name="mataAjarName" readonly value="<?php echo $mataAjarName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList2()" type="button"><i class="fa fa-search"></i></button></span>
                                        
                                    </div>
                                    <label>Hari Ke</label>
                                    <div class="form-group">
                                        <input class="form-control" type="hidden" name="kurikulumRinciID" value="<?php echo $kurikulumRinciID; ?>">
                                        <input class="form-control" type="number" id="harike" name="harike" value="<?php echo $harike; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Kurikulum</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataKurikulum">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kurikulum</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($kurikulums){
                                            $i=1;
                                            $this->load->model('enum');
                                            $str = "btn-primary";
                                            foreach($kurikulums as $kurikulum){
                                                if ($kurikulum->kurikulumID == $kurikulumID){
                                                    $str = "btn-success";
                                                }else{
                                                    $str = "btn-primary";
                                                }
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $kurikulum->kurikulumName; ?></td>
                                                    <td style="text-align:right;"><a class="btn <?php echo $str;?> btn-xs" href="<?php echo base_url();?>index.php/kurikulumRinci/index/<?php echo $kurikulum->kurikulumID;?>"><i class="fa fa-check"></i></td>
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
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Kurikulum Rinci</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataKurikulumRinci">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mata Ajar</th>
                                            <th>Hari Ke</th>
                                            <th>Jamlat</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($kurikulumRincis){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($kurikulumRincis as $kurikulumRinci){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $kurikulumRinci->mataAjarName; ?></td>
                                                    <td><?php echo $kurikulumRinci->harike; ?></td>
                                                    <td><?php echo $kurikulumRinci->jamlat; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/kurikulumRinci/edit/<?php echo $kurikulumRinci->kurikulumRinciID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/kurikulumRinci/delete/<?php echo $kurikulumRinci->kurikulumRinciID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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
					<?php
					
					?>
                </div>
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->