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
                        window.location.replace('<?php echo base_url();?>index.php/wi/index/'+$('#kaldikID').val());
                    }
				}
                    
                function showListWi() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listWi', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function remLinkWi() {
					if (window.sList && window.sList.open && !window.sList.closed)
						window.sList.opener = null;
				}
                    
                function showListKelas() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listKelas', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function remLinkKelas() {
					if (window.sList && window.sList.open && !window.sList.closed)
						window.sList.opener = null;
				}
                var str = '';
                var data;
                $.ajax({
                    dataType: "json",
                    url: '<?php echo base_url();?>assets/json/mata_ajar.json',
                    data: data,
                    success: function(data){
                        $.each(data.data, function(key, value){
                            str += '<option value="'+value.mataAjarID+'">'+value.mataAjarName+'</option>'
                        });
                        $('.mataAjar').html(str);
                    }
                });
                function diklatRef(valueID){
                    window.location.replace('<?php echo base_url();?>index.php/wi/index/'+valueID);
                }
				
        </script>
        <script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>/assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
        <link href="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
        <script>
            $(function () {
                $("#rencanaTgl").datepicker({
                    minDate: '<?php echo $startDate;?>',
                    maxDate: '<?php echo $endDate;?>',
                    dateFormat: 'yy-mm-dd',
                    defaultDate: "0",
                    numberOfMonths: 1
                });
            });
        </script>

		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Perencanaan <small>Penugasan WI</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tasks"></i> Perencanaan | Penugasan WI
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="col-lg-12">
						<?php 
						$attributes = array('name' => 'len');
						echo form_open('wi/insert/', $attributes); ?>
                            <label>Kode Kaldik</label>
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="kaldikID" name="kaldikID" value="<?php echo $kaldikID;?>">
								<input class="form-control" type="text" id="kaldikCode" name="kaldikCode" readonly value="<?php echo $kaldikCode;?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
							<label>Nama Instruktur</label>
							<div class="form-group input-group">
                                <input class="form-control" type="hidden" id="wiID" name="wiID" readonly value="">
								<input class="form-control" type="text" id="wiName" name="wiName" readonly value="">
                                <span class="input-group-btn"><button class="btn btn-default" onClick="showListWi()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
							
							
							
                        <hr>
                            <label>Kelas</label>
                            <div class="form-group input-group">
								<input class="form-control" type="hidden" id="kelasID" name="kelasID" readonly value="">
								<input class="form-control" type="text" id="kelasName" name="kelasName" readonly value="">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showListKelas()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
                            <div class="form-group">
								<label>Mata Ajar</label>
								<select name="mataAjarID" class="form-control mataAjar">
                                    <option value="1" <?php if($currentMonth==1){echo "selected";} ?>>Januari</option>
                                    <option value="2" <?php if($currentMonth==2){echo "selected";} ?>>Februari</option>
                                    <option value="3" <?php if($currentMonth==3){echo "selected";} ?>>Maret</option>
                                    <option value="4" <?php if($currentMonth==4){echo "selected";} ?>>April</option>
                                    <option value="5" <?php if($currentMonth==5){echo "selected";} ?>>Mei</option>
                                    <option value="6" <?php if($currentMonth==6){echo "selected";} ?>>Juni</option>
                                    <option value="7" <?php if($currentMonth==7){echo "selected";} ?>>Juli</option>
                                    <option value="8" <?php if($currentMonth==8){echo "selected";} ?>>Agustus</option>
                                    <option value="9" <?php if($currentMonth==9){echo "selected";} ?>>September</option>
                                    <option value="10" <?php if($currentMonth==10){echo "selected";} ?>>Oktober</option>
                                    <option value="11" <?php if($currentMonth==11){echo "selected";} ?>>November</option>
                                    <option value="12" <?php if($currentMonth==12){echo "selected";} ?>>Desember</option>
                                </select>
							</div>
                            <label id="test">Rencana Tanggal Mata Ajar</label>
                            <div class="form-group">
								<input class="form-control" type="text" id="rencanaTgl" name="rencanaTgl" value="" <?php echo $rencanaTgl;?>>
							</div>
                            <div class="form-group">
                                <label>Rencana JamLat</label>
								<select name="jamLat" class="form-control" style="width:auto;display:inline;">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
<!--
                                    <option value="11">11</option>
                                    <option value="12">12</option>
-->
                                </select>
                                <label style="margin-left: 2%;">Jam Mulai</label>
<!--                                <input type="text" class="form-control" style="width:auto; display:inline;" name="startTime" size="6">-->
                                <select name="startTime" class="form-control" style="width:auto;display:inline;">
                                    <option value="07:00">07:00</option>
                                    <option value="07:30">07:30</option>
                                    <option value="08:00">08:00</option>
                                    <option value="08:30">08:30</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:30">09:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                </select>
                                <label style="margin-left: 2%;">Jam Selesai</label>
<!--                                <input type="text" class="form-control" style="width:auto; display:inline;" name="endTime" size="6">-->
                                <select name="endTime" class="form-control" style="width:auto;display:inline;">
                                    <option value="08:00">08:00</option>
                                    <option value="08:30">08:30</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:30">09:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:30">17:30</option>
                                    <option value="18:00">18:00</option>
                                </select>
							</div>
							<button type="submit" name="btnSave" class="btn btn-default" <?php echo $rencanaTgl;?>>Simpan</button>
							<a href="<?php echo base_url();?>/index.php/wi"><button type="button" class="btn btn-default">Kembali</button></a>
						</form>
                    </div>
				
                <div class="row">
                    
					<div class="col-lg-12">
                        <h3>Data Instuktur</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>Nama Wi</th>
                                        <th>Nama Mata Ajar</th>
                                        <th>Rencana Tanggal Mata Ajar</th>
                                        <th>JamLat</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($wis){
										$i=1;
										$this->load->model('enum');
										foreach($wis as $wi){
											?>
											<tr>
												<td><?php echo $i; ?></td>
												<td><?php echo $wi->kelasName; ?></td>
												<td><?php echo $wi->pegawaiDegreeFirst." " .$wi->pegawaiName." ".$wi->pegawaiDegreeLast; ?></td>
												<td><?php echo $wi->mataAjarName;?></td>
												<td><?php echo $wi->rencanaTgl; ?></td>
												<td><?php echo $wi->jamLat; ?></td>
												<td style="text-align:right;"><a class="btn btn-info btn-xs" title="edit" href="<?php echo base_url();?>index.php/wi/update/<?php echo $wi->wiAssignmentID;?>"><i class="fa fa-pencil"></i></a> <a href="<?php echo base_url();?>index.php/wi/delete/<?php echo $wi->wiAssignmentID.'/'.$kaldikID;?>/" class="btn btn-danger btn-xs" title="delete" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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