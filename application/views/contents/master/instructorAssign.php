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
            $('#dataInstruktur').DataTable({
                responsive: false,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
        </script>

        <script language="JavaScript">
				
				function showList() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listKaldik/instructor', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function remLink() {
					if (window.sList && window.sList.open && !window.sList.closed){
						window.sList.opener = null;
                        window.location.replace('<?php echo base_url();?>index.php/instructor/index/'+$('#diklatID').val());
                    }
				}
                    
                function showListJabatanGroup() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listJabatanGroup', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function remLinkJabatanGroup() {
					if (window.sList && window.sList.open && !window.sList.closed)
						window.sList.opener = null;
				}
                function showListEducation() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listEducationLevel', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
                function showListJabatan() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listJabatan', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
                function showListUnit() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listUnit', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
                function diklatRef(valueID){
                    window.location.replace('<?php echo base_url();?>index.php/instructor/index/'+valueID);
                }
        </script>
        <script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>/assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
        <link href="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
        <script src="<?php echo base_url();?>/assets/js/moment-with-locales.js"></script>
        <script>
            moment.locale('id');
        </script>
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data <small> Instruktur / WI</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tasks"></i> Data Instruktur / WI
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Tambah Instruktur / WI</div>
                        <div class="panel-body">
                            <?php 
                            $attributes = array('name' => 'len');
                            echo form_open('instructorAssign/insert/', $attributes); ?>
                            <?php
                                $pegawaiID = "";
                                $pegawaiNIP = "";
                                $pegawaiName = "";
                                $pegawaiDegreeFirst = "";
                                $pegawaiDegreeLast = "";
                                $educationLevelID = "";
                                $educationLevelFullName = "";
                                $jabatanGroupID = "";
                                $jabatanGroupFullName = "";
                                $jabatanID = "";
                                $jabatanFullName = "";
                                $unitID = "";
                                $unitName = "";
                                $pegawaiMobilePhone = "";
                                $pegawaiEmail = "";
                                $status = "insert";
                                if($SelectedPegawai){
                                    $pegawaiID = $SelectedPegawai[0]->pegawaiID;
                                    $pegawaiNIP = $SelectedPegawai[0]->pegawaiNIP;
                                    $pegawaiName = $SelectedPegawai[0]->pegawaiName;
                                    $pegawaiDegreeFirst = $SelectedPegawai[0]->pegawaiDegreeFirst;
                                    $pegawaiDegreeLast = $SelectedPegawai[0]->pegawaiDegreeLast;
                                    $educationLevelID = $SelectedPegawai[0]->educationLevelID;
                                    $educationLevelFullName = $SelectedPegawai[0]->educationLevelFullName;
                                    $jabatanGroupID = $SelectedPegawai[0]->jabatanGroupID;
                                    $jabatanGroupFullName = $SelectedPegawai[0]->jabatanGroupFullName;
                                    $jabatanID = $SelectedPegawai[0]->jabatanID;
                                    $jabatanFullName = $SelectedPegawai[0]->jabatanFullName;
                                    $unitID = $SelectedPegawai[0]->unitID;
                                    $unitName = $SelectedPegawai[0]->unitName;
                                    $pegawaiMobilePhone = $SelectedPegawai[0]->pegawaiMobilePhone;
                                    $pegawaiEmail = $SelectedPegawai[0]->pegawaiEmail;
                                    $status = "edit";
                                }
                            ?>
                                <label>NIP</label>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="pegawaiNIP" name="pegawaiNIP" value="<?php echo $pegawaiNIP;?>" >
                                </div>
                                <label>Nama Instruktur</label>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="pegawaiName" name="pegawaiName" value="<?php echo $pegawaiName;?>" >
                                </div>
                                <label>Gelar Depan</label>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="pegawaiDegreeFirst" name="pegawaiDegreeFirst" value="<?php echo $pegawaiDegreeFirst;?>" >
                                </div>
                                <label>Gelar Belakang</label>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="pegawaiDegreeLast" name="pegawaiDegreeLast" value="<?php echo $pegawaiDegreeLast;?>" >
                                </div>
                                <label>Pendidikan</label>
                                <div class="form-group input-group">
                                    <input class="form-control" type="hidden" id="status" name="status" readonly value="<?php echo $status;?>">
                                    <input class="form-control" type="hidden" id="pegawaiID" name="pegawaiID" readonly value="<?php echo $pegawaiID;?>">
                                    <input class="form-control" type="hidden" id="educationLevelID" name="educationLevelID" readonly value="<?php echo $educationLevelID;?>">
                                    <input class="form-control" type="text" id="educationLevelFullName" name="educationLevelFullName" readonly value="<?php echo $educationLevelFullName;?>">
                                    <span class="input-group-btn"><button class="btn btn-default" onClick="showListEducation()" type="button"><i class="fa fa-search"></i></button></span>
                                </div>
                                <label>Group Jabatan</label>
                                <div class="form-group input-group">
                                    <input class="form-control" type="hidden" id="jabatanGroupID" name="jabatanGroupID" readonly value="<?php echo $jabatanGroupID;?>">
                                    <input class="form-control" type="text" id="jabatanGroupFullName" name="jabatanGroupFullName" readonly value="<?php echo $jabatanGroupFullName;?>">
                                    <span class="input-group-btn"><button class="btn btn-default" onClick="showListJabatanGroup()" type="button"><i class="fa fa-search"></i></button></span>
                                </div>
                                <label>Jabatan</label>
                                <div class="form-group input-group">
                                    <input class="form-control" type="hidden" id="jabatanID" name="jabatanID" readonly value="<?php echo $jabatanID;?>">
                                    <input class="form-control" type="text" id="jabatanFullName" name="jabatanFullName" readonly value="<?php echo $jabatanFullName;?>">
                                    <span class="input-group-btn"><button class="btn btn-default" onClick="showListJabatan()" type="button"><i class="fa fa-search"></i></button></span>
                                </div>
                                <label>Unit Kerja</label>
                                <div class="form-group input-group">
                                    <input class="form-control" type="hidden" id="unitID" name="unitID" readonly value="<?php echo $unitID;?>">
                                    <input class="form-control" type="text" id="unitName" name="unitName" readonly value="<?php echo $unitName;?>">
                                    <span class="input-group-btn"><button class="btn btn-default" onClick="showListUnit()" type="button"><i class="fa fa-search"></i></button></span>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label><br>
                                    <label>Aktif</label><input class="form-control" type="checkbox" id="isActive" name="isActive" value="1" style="width:auto; height:auto; display:inline;margin-left:5px;margin-right:2%;" checked>
                                    <label>Pudiklatwas</label><input class="form-control" type="checkbox" id="isPusdiklatwas" name="isPusdiklatwas" value="1" style="width:auto; height:auto; display:inline;margin-left:5px;margin-right:2%;" checked>
                                    <label>WI</label><input class="form-control" type="checkbox" id="isWI" name="isWI" value="1" style="width:auto; height:auto; display:inline;margin-left:5px;margin-right:2%;" checked>
                                </div>
                                <label>Nomer HP</label>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="pegawaiMobilePhone" name="pegawaiMobilePhone" value="<?php echo $pegawaiMobilePhone;?>">
                                </div>
                                <label>Email</label>
                                <div class="form-group">
                                    <input class="form-control" type="text" id="pegawaiEmail" name="pegawaiEmail" value="<?php echo $pegawaiEmail;?>">
                                </div>
                                <button type="submit" name="btnSave" class="btn btn-default" <?php //echo $rencanaTgl;?>>Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Instruktur</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataInstruktur">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP Instruktur</th>
                                            <th>Nama Instruktur</th>
                                            <th>Aktif</th>
                                            <th>WI</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Nama Unit</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($pegawais){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($pegawais as $pegawai){
                                                $isWI = $pegawai->isWI;
                                                $isActive = $pegawai->isActive;
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $pegawai->pegawaiNIP; ?></td>
                                                    <td><?php echo $pegawai->pegawaiDegreeFirst." " .$pegawai->pegawaiName." ".$pegawai->pegawaiDegreeLast; ?></td>
                                                    <td><input type="checkbox" <?php echo $isActive == '1' ? 'checked' : ''; ?> disabled></td>
                                                    <td><input type="checkbox" <?php echo $isWI == '1' ? 'checked' : ''; ?> disabled></td>
                                                    <td><?php echo $pegawai->pegawaiMobilePhone; ?></td>
                                                    <td><?php echo $pegawai->pegawaiEmail; ?></td>
                                                    <td><?php echo $pegawai->unitName; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/instructorAssign/edit/<?php echo $pegawai->pegawaiID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/instructorAssign/delete/<?php echo $pegawai->pegawaiID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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
				
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->