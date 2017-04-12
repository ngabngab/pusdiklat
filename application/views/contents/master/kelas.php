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
            $('#dataKelas').DataTable({
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
                            Data Master <small>Kelas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Kelas
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
                            <div class="panel-heading">Tambah Kelas</div>
                            <div class="panel-body">
                                <?php 
                                    $attributes = array('name' => 'len');
                                    echo form_open('KelasStatement', $attributes); ?>
                                <?php
                                    $diklatLocID = "";
                                    $kelasID = "";
                                    $kelasName = "";
                                    $kelasDesc = "";
                                    $diklatLocName = "";
                                    $diklatLocDetail = "";
                                    if($SelectedKelas){
                                        $diklatLocID = $SelectedKelas[0]->diklatLocID;
                                        $kelasID = $SelectedKelas[0]->kelasID;
                                        $kelasName = $SelectedKelas[0]->kelasName;
                                        $kelasDesc = $SelectedKelas[0]->kelasDesc;
                                        $diklatLocName = $SelectedKelas[0]->diklatLocName;
                                        $diklatLocDetail = $SelectedKelas[0]->diklatLocDetail;
                                    }
                                ?>

                                    <script language="JavaScript">

                                    function showList() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listLocation', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }
                                        
                                    function locdetail() {
                                        
                                    }

                                    </script>

                                    <label>Lokasi</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="diklatLocID" name="diklatLocID" readonly value="<?php echo $diklatLocID; ?>">
                                        <input class="form-control" type="text" id="diklatLocName" name="diklatLocName" readonly value="<?php echo $diklatLocName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nama Kelas</label>
                                        <input class="form-control" type="hidden" name="kelasID" value="<?php echo $kelasID; ?>">
                                        <input class="form-control" type="text" name="kelasName" placeholder="Enter Nama Kelas" value="<?php echo $kelasName; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="kelasDesc" class="form-control" rows="3"><?php echo $kelasDesc; ?></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Kelas</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataKelas">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Lokasi</th>
                                            <th>Kelas</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($kelass){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($kelass as $kelas){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $kelas->diklatLocName; ?></td>
                                                    <td><?php echo $kelas->kelasName; ?></td>
                                                    <td><?php echo $kelas->kelasDesc; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($kelas->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($kelas->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/kelas/edit/<?php echo $kelas->kelasID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/kelas/delete/<?php echo $kelas->kelasID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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