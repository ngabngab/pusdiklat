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
            $('#dataKabupaten').DataTable({
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
                            Data Master <small>Kabupaten</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Kabupaten
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
                            <div class="panel-heading">Tambah Kabupaten</div>
                            <div class="panel-body">
                                <?php 
                                    $attributes = array('name' => 'len');
                                    echo form_open('KabupatenStatement', $attributes); 
                                    $kabupatenID = "";
                                    $provinsiID = "";
                                    $kabupatenName = "";
                                    $provinsiName = "";
                                    if($SelectedKabupaten){
                                        $provinsiID = $SelectedKabupaten[0]->provinsiID;
                                        $kabupatenID = $SelectedKabupaten[0]->kabupatenID;
                                        $kabupatenName = $SelectedKabupaten[0]->kabupatenName;
                                        $provinsiName = $SelectedKabupaten[0]->provinsiName;
                                    }
                                ?>

                                    <script language="JavaScript">

                                    function showList() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listProvinsi', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }

                                    </script>

                                    <label>Nama Provinsi</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="provinsiID" name="provinsiID" readonly value="<?php echo $provinsiID; ?>">
                                        <input class="form-control" type="text" id="provinsiName" name="provinsiName" readonly value="<?php echo $provinsiName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Kabupaten</label>
                                        <input class="form-control" type="hidden" name="kabupatenID" value="<?php echo $kabupatenID; ?>">
                                        <input class="form-control" type="text" name="kabupatenName" placeholder="Enter Nama Kabupaten" value="<?php echo $kabupatenName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Kabupaten</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataKabupaten">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Provinsi</th>
                                            <th>Nama Kabupaten</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($kabupatens){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($kabupatens as $kabupaten){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i+(($page-1)*20); ?></td>
                                                    <td><?php echo $kabupaten->provinsiName; ?></td>
                                                    <td><?php echo $kabupaten->kabupatenName; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($kabupaten->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($kabupaten->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/kabupaten/edit/<?php echo $kabupaten->kabupatenID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/kabupaten/delete/<?php echo $kabupaten->kabupatenID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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