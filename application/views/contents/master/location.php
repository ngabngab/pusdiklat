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
            $('#dataLocation').DataTable({
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
                            Data Master <small>Location</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Location
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
                            <div class="panel-heading">Tambah Location</div>
                            <div class="panel-body">
                                <?php 
                                    $attributes = array('name' => 'len');
                                    echo form_open('LocationStatement', $attributes); ?>
                                <?php
                                    $diklatLocID = "";
                                    $kabupatenID = "";
                                    $kabupatenName = "";
                                    $diklatLocName = "";
                                    $diklatLocDetail = "";
                                    $maxKelas = 1;
                                    if($SelectedLocation){
                                        $diklatLocID = $SelectedLocation[0]->diklatLocID;
                                        $kabupatenID = $SelectedLocation[0]->kabupatenID;
                                        $kabupatenName = $SelectedLocation[0]->kabupatenName;
                                        $diklatLocName = $SelectedLocation[0]->diklatLocName;
                                        $diklatLocDetail = $SelectedLocation[0]->diklatLocDetail;
                                        $maxKelas = $SelectedLocation[0]->maxKelas;
                                    }
                                ?>

                                    <script language="JavaScript">

                                    function showList() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listKabupaten', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }

                                    </script>

                                    <label>Nama Kabupaten</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="kabupatenID" name="kabupatenID" readonly value="<?php echo $kabupatenID; ?>">
                                        <input class="form-control" type="text" id="kabupatenName" name="kabupatenName" readonly value="<?php echo $kabupatenName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Lokasi</label>
                                        <input class="form-control" type="hidden" name="diklatLocID" value="<?php echo $diklatLocID; ?>">
                                        <input class="form-control" type="text" name="diklatLocName" placeholder="Enter Nama Location" value="<?php echo $diklatLocName; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="diklatLocDetail" class="form-control" rows="3"><?php echo $diklatLocDetail; ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Jumlah kelas maksimal</label>
                                        <input class="form-control" type="number" min="1" max="25" step="1" name="maxKelas" placeholder="Enter Jumlah kelas maksimal" value="<?php echo $maxKelas; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Location</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataLocation">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Provinsi</th>
                                            <th>Kabupaten</th>
                                            <th>Lokasi</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah Kelas</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($diklat_locations){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($diklat_locations as $diklat_location){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $diklat_location->provinsiName; ?></td>
                                                    <td><?php echo $diklat_location->kabupatenName; ?></td>
                                                    <td><?php echo $diklat_location->diklatLocName; ?></td>
                                                    <td><?php echo $diklat_location->diklatLocDetail; ?></td>
                                                    <td><?php echo $diklat_location->maxKelas; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($diklat_location->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($diklat_location->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/location/edit/<?php echo $diklat_location->diklatLocID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/location/delete/<?php echo $diklat_location->diklatLocID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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