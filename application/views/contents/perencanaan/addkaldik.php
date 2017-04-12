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

<!-- <script src="<?php echo base_url();?>/assets/js/jquery.js"></script> -->
  <!-- <script src="<?php echo base_url();?>/assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script> -->
  <!-- <link href="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet"> -->
  
    <script>
    $(function() {
        $('#datepicker123').datepicker({
        dateFormat: 'yy-mm-dd',
        
        yearRange: '<?= $kaldikYearName?>:2022',
        minDate: new Date(<?= $kaldikYearName?>, <?= $kaldikMonth?> - 1, <?= $kaldikDay?>),
        maxDate: '+30Y',
        inline: true
    });
    $('#stDate').datepicker({
        dateFormat: 'yy-mm-dd',
    });
    $('#dateStart').datepicker({
        dateFormat: 'yy-mm-dd',
    });
    });
    
</script>
<script>
    $(document).ready(function () {
        var urn = $('#namaDiklat').val();
        $('#uraian').val(urn)
        $("#elearn").hide().fadeOut("slow");
        var ckbox = $('#checkbox');
    $('input').on('click',function () {
        if (ckbox.is(':checked')) {
            $("#elearn").hide().fadeIn("slow");
        } else {
            $("#elearn").hide().fadeOut("slow");
            $("#kaldikID").val("");
        }
    });
    $("#hari").change(function(){
        var day = $("#hari").val();
        $("#hour").val(day*10);
    });
	
	  //called when key is pressed in textbox
	  $("#rencanaAnggaran").keypress(function (e) {
		 //if the letter is not digit then display error and don't type anything
		 if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			//display error message
			//$("#errmsg").html("Digits Only").show().fadeOut("slow");
				   return false;
		}
	   });
    });
</script>
<script>
function getElapsedWorkDays(a, b) {
  var days = b.diff(a, 'days');
  var start = a.day();
  var count = 0;
  for (var i = 0; i < days; i++) {
    start++;
    if (start > 6)
      start = 0;
    if (start > 0 && start < 6)
      count++;
  }
  return count+1;
}
function checkTextField() {
    var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
    var firstDate = $('#datepicker123').val();
    var fd = firstDate.split('-');
    var fdm = moment([fd[0], fd[1]-1, fd[2]])
    var secondDate = $('#startDate').val();
    var sd = secondDate.split('-');
    var sdm = moment([sd[0], sd[1]-1, sd[2]])
    //var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay))+1);
    var diffDays = getElapsedWorkDays(sdm, fdm)
    $(document).ready(function () {
        $("#hari").val(diffDays);
        $("#hour").val(diffDays*10);
    });
}
</script>
<input type=text id=input_id />
<script>
function unitref(valueName) {
    if ($('#NamaUnitAsal').val() != null) {
            var nama = $('#namaDiklat').val();
            var unitA = $('#NamaUnitAsal').val();
            $(document).ready(function () {
                $("#uraian").val(nama+' '+unitA);
            });
        }
}
function locdetail(valueName) {
    $(document).ready(function () {
        $("#LokasiDetail").val(valueName);
    }); 
}

function tambahData()
{
	var kaldikID, kaldikDesc, kaldikMonth, kaldikYear, diklatID, stat_blended, stat_elearning, stat_tatapmuka, biayaID, rencanaAnggaran, diklatLocID, kelas, KodeAsal, KetUnitKerja, noST, tglST, participantLength, startDate, endDate, hari, hour, addDate, lastUpdate, addBy, updateBy, arrPertemuan, link;
	
	kaldikID = document.getElementById('kaldikCodeOwn');
	kaldikDesc = document.getElementById('kaldikDesc');
	kaldikMonth = document.getElementById('kaldikMonth');
	kaldikYear = document.getElementById('kaldikYearID');
	diklatID = document.getElementById('diklatID');
	stat_blended = document.getElementById('blended');
	stat_elearning = document.getElementById('elearning');
	stat_tatapmuka = document.getElementById('tatapmuka');
	biayaID = document.getElementById('biayaID');
	rencanaAnggaran = document.getElementById('rencanaAnggaran');
	diklatLocID = document.getElementById('diklatLocID');
	kelas = document.getElementById('kelas');
	KodeAsal = document.getElementById('KodeAsal');
	KetUnitKerja = document.getElementById('KetUnitKerja');
	noST = document.getElementById('nost');
	tglST = document.getElementById('stDate');
	participantLength = document.getElementById('participantLength');
	startDate = document.getElementById('startDate');
	endDate = document.getElementById('datepicker123');
	hari = document.getElementById('hari');
	hour = document.getElementById('hour');
	arrPertemuan = dataPertemuan;
	if(stat_blended.checked == true)
	{
		stat_blended = 1;
	}
	else
	{
		stat_blended = 0;
	}
	
	if(stat_elearning.checked == true)
	{
		stat_elearning = 1;
	}
	else
	{
		stat_elearning = 0;
	}
	
	if(stat_tatapmuka.checked == true)
	{
		stat_tatapmuka = 1;
	}
	else
	{
		stat_tatapmuka = 0;
	}
	
	console.log(kaldikID.value);
	console.log(kaldikDesc.value);
	console.log(kaldikMonth.value);
	console.log(kaldikYear.value);
	console.log(diklatID.value);
	console.log(stat_blended);
	console.log(stat_elearning);
	console.log(stat_tatapmuka);
	console.log(biayaID.value);
	console.log(diklatLocID.value);
	console.log(kelas.value);
	console.log(KodeAsal.value);
	console.log(KetUnitKerja.value);
	console.log(noST.value);
	console.log(tglST.value);
	console.log(participantLength.value);
	console.log(startDate.value);
	console.log(endDate.value);
	console.log(hari.value);
	console.log(hour.value);
	console.log(arrPertemuan);
	
	link = '?kaldikid='+kaldikID.value+'&kaldikdesc='+kaldikDesc.value+'&kaldikmonth='+kaldikMonth.value+'&kaldikyear='+kaldikYear.value+'&diklatid='+diklatID.value+'&stat_blended='+stat_blended+'&stat_elearning='+stat_elearning+'&stat_tatapmuka='+stat_tatapmuka+'&biayaid='+biayaID.value+'&diklatlocid='+diklatLocID.value+'&kelas='+kelas.value+'&kodeasal='+KodeAsal.value+'&ketunitkerja='+KetUnitKerja.value+'&nost='+noST.value+'&tglst='+tglST.value+'&participantlength='+participantLength.value+'&startdate='+startDate.value+'&enddate='+endDate.value+'&hari='+hari.value+'&hour='+hour.value+'&data='+JSON.stringify(arrPertemuan)+'&rencanaanggaran='+rencanaAnggaran.value;
	
	console.log(link);
	window.location = '<?php echo base_url();?>kaldik/tambahkaldik/'+link;
}


</script>
<script>

</script>
		<!-- Modal -->
		

		<div id="page-wrapper">

            <div class="container-fluid">
				
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Perencanaan <small>Kaldik</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tasks"></i> Perencanaan | Kaldik
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                    <?php 
                    $attributes = array('name' => 'back');
                    echo form_open('Kaldik', $attributes); 
                        ?>
                        <input class="form-control" type="hidden" name="kaldikMonth" readonly="true" id="kaldikMonth" value="<?php echo $kaldikMonth; ?>">
                        <input class="form-control" type="hidden" name="tahunName" readonly="true" value="<?php echo $kaldikYearName; ?>">
                        <input class="form-control" type="hidden" name="diklatLocID" readonly="true" value="2">
                        <input class="form-control" type="hidden" name="diklatLocName" readonly="true" value="Pusdiklatwas Ciawi">
                        <button type="submit" name="btnSearch" class="btn btn-danger">Kembali</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
						<h4><i class="fa fa-book"></i> Data Diklat</h4>
                        <img src="<?php echo base_url();?>assets/img/line.png" style="width: 100%;"/>
                        <?php 
                            if(!isset($diklatLocID)){
    							$diklatLocID = "";
    						}
    						if(!isset($diklatLocName)){
    							$diklatLocName = "";
    						}
							$attributes = array('name' => 'len','id' => 'inputform');
							echo form_open('Kaldik/insert/'.$startdate.'/', $attributes); 
							
							$kaldikCode = "";
							$kaldikName = "";
							$biayaID = "";
							$biayaName = "";
							$activityID = "";
							$activityName = "";
							$participantLength = "";
							$startDate = "";
							$endDate = "";
							$startHour = "";
							$kaldikID = "";
							$kaldikCode = "";
							$diklatID = "";
							$diklatName = "";
							$diklatTypeName = "";
							$kurikulumName = "";
							$bidangFullName = "";
							?>
							
							<script language="JavaScript">
							var dataPertemuan = [];
							var i = 0;
							var j = 0;
							function showListBiaya() {
								var w = (screen.width/2);
								var h = (screen.height/2);
								var left = (screen.width/2)-(w/2);
								var top = (screen.height/2)-(h/2);
								sList = window.open('<?php echo base_url(); ?>index.php/listBiaya', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
							}
							
							function showListKodeAsal() {
								var w = (screen.width/2);
								var h = (screen.height/2);
								var left = (screen.width/2)-(w/2);
								var top = (screen.height/2)-(h/2);
								sList = window.open('<?php echo base_url(); ?>index.php/listKodeAsal', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
							}
                            
                            function showList() {
								var w = (screen.width/1.5);
								var h = (screen.height/2);
								var left = (screen.width/2)-(w/2);
								var top = (screen.height/2)-(h/2);
								sList = window.open('<?php echo base_url(); ?>index.php/listKaldikBlended', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
							}
                            
                            function showListLoc() {
            					var w = (screen.width/2);
            					var h = (screen.height/2);
            					var left = (screen.width/2)-(w/2);
            					var top = (screen.height/2)-(h/2);
            					sList = window.open('<?php echo base_url(); ?>index.php/listLocation', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
            				}
                            
							function showListDiklat() {
            					var w = (screen.width/2);
            					var h = (screen.height/2);
            					var left = (screen.width/2)-(w/2);
            					var top = (screen.height/2)-(h/2);
            					sList = window.open('<?php echo base_url(); ?>index.php/listDiklat', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
            				}
							
							function showListKurikulum() {
            					var w = (screen.width/2);
            					var h = (screen.height/2);
            					var left = (screen.width/2)-(w/2);
            					var top = (screen.height/2)-(h/2);
            					sList = window.open('<?php echo base_url(); ?>index.php/listKurikulum', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
            				}
							
							function remLink() {
								if (window.sList && window.sList.open && !window.sList.closed)
									window.sList.opener = null;
							}
							
							function insertTable()
							{
								var dateStart, kurikulumID, kurikulumName, pertemuanID, pertemuanDesc, str, tBody;
								str = dateStart = kurikulumID = kurikulumName = pertemuanID = pertemuanDesc = "";
								
								dateStart = document.getElementById('dateStart');
								kurikulumID = document.getElementById('kurikulumID');
								tBody = document.getElementById('tablePertemuan');
								kurikulumName = document.getElementById('kurikulumName');
								pertemuanID = $('#jenisPertemuan option:selected').attr('id');
								pertemuanDesc = $('#jenisPertemuan option:selected').attr('value');
								
								
								
								
								if(dateStart.value == "")
								{
									alert('Tanggal Belum Terisi');
								}
								else if(kurikulumID.value == "")
								{
									alert('Belum Memilih Kurikulum');
								}
								else
								{
									dataPertemuan.push({"id":i + 1,"dateStart":dateStart.value, "kurikulumID":kurikulumID.value, "kurikulumName":kurikulumName.value, "pertemuanID":pertemuanID, "pertemuanDesc":pertemuanDesc});
									console.log(dataPertemuan);
									j = i + 1;
									str += '<tr id="tr_'+j+'"><td>'+j+'</td><td>'+kurikulumName.value+'</td><td>'+pertemuanDesc+'</td><td>'+dateStart.value+'</td><td style="text-align:right;"><a class="btn btn-info btn-xs" href="#"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="#" onclick = "if (! confirm("Are you sure want to delete this?")) { return false; }"><i class="fa fa-times"></i></a></td></tr>';
									tBody.innerHTML = str;
									alert('Pertemuan Jenis Berhasil Di insert');
									dateStart.value = "";
									kurikulumID.value = "";									
									kurikulumName.value = "";
									//console.log(document.getElementsByTagName('body')[0].className);
									//document.getElementsByTagName('body')[0].className = '';
									//$('.myModal').modal().hide();	
									//("#myModal .close").click();
									//$('#modal-backdrop fade in').remove();
								}
							}
							</script>
                            <input class="form-control" type="hidden" name="kaldikCode" placeholder="Enter Kode Kaldik" value="">
                            <div class="form-group">
                                <label>Tahun</label>
                                <input class="form-control" type="text" name="tahun" readonly="true" placeholder="tahun" value="<?php echo $kaldikYearName; ?>">
                            </div>
							
							<?php echo form_error('kaldikCode', '<div class="alert alert-danger">', '</div>'); ?>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Tambah Pertemuan</h4>
								  </div>
								  <div class="modal-body">
										<div class="form-group" id="sandbox-container">
											<label>Tanggal Mulai</label>
											<input type="text" class="form-control" name="dateStart" value="<?php echo $kaldikYearName.'-'.$kaldikMonth.'-'.$kaldikDay; ?>" placeholder="Start Date" id="dateStart"/>
										</div>
										
										<div class="form-group">
											<label>Tahun</label>
											<select class="form-control" id="jenisPertemuan">
												<?php
													if($datas)
													{
														foreach ($datas as $data)
														{
															?>
															<option id="<?php echo $data->jenisID; ?>" value="<?php echo $data->jenisDesc; ?>"><?php echo $data->jenisDesc; ?></option>
															<?php
														}
													}
												?>
											</select>
										</div>
										
										<label>Nama Kurikulum</label>
										<div class="form-group input-group">
											<input class="form-control" type="hidden" name="kurikulumID" id="kurikulumID" readonly="true" value="<?php ?>">
											<input class="form-control" type="text" name="kurikulumName" id="kurikulumName" readonly="true" value="<?php  ?>">
											<span class="input-group-btn"><button class="btn btn-default" onClick="showListKurikulum()" type="button"><i class="fa fa-search"></i></button></span>
										</div>
										
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary" onClick="insertTable();">Tambah Data</button>
								  </div>
								</div>
							  </div>
							</div>
							
                            <div class="form-group">
                                <label>Kode Kaldik</label>
                                <input class="form-control" type="text" name="kaldikCodeOwn" id="kaldikCodeOwn" placeholder="Enter Kode Kaldik" readonly="true" value="<?php echo $latestRow;?>">
                            </div>
							
                            <label>Nama Diklat</label>
							<div class="form-group input-group">
                                <input class="form-control" type="hidden" name="diklatID" id="diklatID" readonly="true" value="<?php echo $diklatID; ?>">
                                <input class="form-control" type="text" name="diklatName" id="diklatName" readonly="true" value="<?php echo $diklatName; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showListDiklat()" type="button"><i class="fa fa-search"></i></button></span>
                            </div>
							
							
                            
                            <!-- <div class="form-group">
                                <label>Kurikulum</label>
                                <input class="form-control" type="text" name="kurikulumName" id="kurikulumName" readonly="true" placeholder="kurikulum" value="<?php echo $kurikulumName; ?>">
                            </div> -->
					       
							
							<div class="form-group">
                                <label>Jenis Diklat</label>
                                <input class="form-control" type="text" name="diklatTypeName" id="diklatTypeName" readonly="true" placeholder="Jenis Diklat" value="<?php echo $diklatTypeName; ?>">
                            </div>
							
                            <div class="form-group">
                                <label>Bidang Penyelenggara</label>
                                <input class="form-control" type="text" name="bidangFullName" id="bidangFullName" readonly="true" placeholder="Bidang" value="<?php echo $bidangFullName; ?>">
                            </div>
                            
                            
							<div class="form-group">
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="blended">
									Blended Learning
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="elearning">
									Full E-Learning
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadios" id="tatapmuka">
									Full Tatap Muka
								  </label>
								</div>
							</div>
							
							
                            <?php echo form_error('Lokasi', '<div class="alert alert-danger">', '</div>'); ?>
                            <label>Lokasi</label>
                            <div class="form-group input-group">
								<input class="form-control" type="hidden" id="diklatLocID" name="kaldikLocID" readonly value="<?php echo $diklatLocID; ?>">
								<input class="form-control" type="text" id="diklatLocName" name="kaldikLocName" readonly value="<?php echo $diklatLocName; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showListLoc()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
							<div class="form-group">
                                <label>Lokasi Detail</label>
                                <input class="form-control" type="text" id="LokasiDetail" name="LokasiDetail" readonly="true" placeholder="Enter Lokasi Detail" value="">
                            </div>
                            <!--
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input class="form-control" type="hidden" name="kaldikLocID" readonly="true" value="<?php //echo $kaldikLocID; ?>">
                                <input class="form-control" type="text" name="kaldikLocName" readonly="true" value="<?php //echo $kaldikLocName; ?>">
                            </div>
                            -->
                            <?php echo form_error('biayaID', '<div class="alert alert-danger">', '</div>'); ?>
                            
							<label>Sumber Biaya</label>
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="biayaID" name="biayaID" readonly value="<?php echo $biayaID; ?>">
								<input class="form-control" type="text" id="biayaName" name="biayaName" readonly value="<?php echo $biayaName; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showListBiaya()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
                            <?php echo form_error('rencanaAnggaran', '<div class="alert alert-danger">', '</div>'); ?>
							<label>Rencana Anggaran</label>
                            <div class="form-group">
								<div class="input-group">
								<div class="input-group-addon">Rp</div>
                                <input class="form-control" type="text" name="rencanaAnggaran" id="rencanaAnggaran" placeholder="Enter Rencana Anggaran" value="">
								</div>
                            </div>
                            
                            <?php echo form_error('kaldikDesc', '<div class="alert alert-danger">', '</div>'); ?>
							<div class="form-group">
                                <label>Uraian Diklat</label>
                                <textarea name="kaldikDesc" id="kaldikDesc" class="form-control" rows="3"></textarea>
                            </div>
                            <br />
							<h4><i class="fa fa-users"></i> Unit Asal Peserta</h4>
								<img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
								<?php echo form_error('KodeAsal', '<div class="alert alert-danger">', '</div>'); ?>
								<div class="form-group">
								<label>Kode Asal</label>
                        <div class="form-group input-group">
								<input class="form-control" type="hidden" id="KodeAsal" name="KodeAsal" readonly value="<?php  ?>">
                        <input class="form-control" type="text" id="NamaUnitAsal" readonly="true" name="NamaUnitAsal" onchange="alert(this.value);" value="<?php $NamaUnitAsal ?>">
						<span class="input-group-btn"><button class="btn btn-default" onClick="showListKodeAsal()" type="button"><i class="fa fa-search"></i></button></span>
                        </div>
                    </div>
                    <?php echo form_error('ketUnitKerja', '<div class="alert alert-danger">', '</div>'); ?>
                    <div class="form-group">
                        <label>Keterangan Unit Kerja</label>
                        <textarea name="KetUnitKerja" id="KetUnitKerja" class="form-control" rows="3"></textarea>
                    </div>

                            </div>
                    <div class="col-lg-1">

                    </div>
                    <div class="col-lg-5">
                    <h4><i class="fa fa-file"></i> Nomor Surat Tugas</h4>
                        <img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
                        <div class="form-group">
                                <label>Nomor Surat Tugas</label>
                                <input class="form-control" type="text" name="nost" id="nost" placeholder="No. Surat Tugas" value="<?php  ?>">
                            </div>
                        <div class="form-group" id="sandbox-container">
                                <label>Tanggal ST</label>
                                <input type="text" class="form-control" name="stDate" value="" placeholder="Surat Tugas Date" id="stDate"/>
                            <br />
                            </div>
                    <h4><i class="fa fa-calendar"></i> Rencana Pelaksanaan</h4>
                        <img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
						<button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Tambah Pertemuan</button>
                        <h3>Data Pertemuan</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listDiklatType">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
										<th>Pertemuan Jenis</th>
										<th>Kurikulum</th>
										<th>Tgl Mulai</th>
										<th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody id="tablePertemuan">
									
								</tbody>
							</table>
						</div>	
							
							
							
							<div id="Date">
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Mulai</label>
                                <input class="form-control" type="hidden" name="kaldikMonth" readonly="true" value="<?php echo $kaldikMonth; ?>">
                                <input class="form-control" type="hidden" name="kaldikYearID" id="kaldikYearID" readonly="true" value="<?php echo $kaldikYearID; ?>">
                                <input type="text" class="form-control" name="startDate" readonly="true" id="startDate" value="<?php echo $kaldikYearName.'-'.$kaldikMonth.'-'.$kaldikDay; ?>" placeholder="Start Date"/>
                            </div>
                            
							<?php echo form_error('endDate', '<div class="alert alert-danger">', '</div>'); ?>
                            
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Selesai</label>
                                <input type="text" class="form-control" name="endDate" value="" placeholder="End Date" id="datepicker123" onchange="checkTextField()"/>
							</div>
                            </div>
                           
                           <div class="form-group">
                                <label>Jumlah Hari</label>
                                <input class="form-control" type="number" id="hari" name="hari" placeholder="Hari" value="" style="width: 100px;">
                            </div>
                           
							<?php echo form_error('participantLength', '<div class="alert alert-danger">', '</div>'); ?>
                            
							<div class="form-group">
                                <label>Jumlah Peserta Maksimal</label>
                                <input class="form-control" type="number" name="participantLength" id="participantLength" placeholder="Peserta" value="<?php echo $participantLength; ?>" style="width: 100px;">
                            </div>
                           
							<?php echo form_error('kelas', '<div class="alert alert-danger">', '</div>'); ?>
                            
                            <div class="form-group">
                                <label>Jumlah Kelas</label>
                                <input class="form-control" type="number" name="kelas" placeholder="Kelas" id="kelas" min="1" max="" value="" style="width: 100px;"> 
                            </div>
                          
							<?php echo form_error('hour', '<div class="alert alert-danger">', '</div>'); ?>
                            
                            <div class="form-group">
                                <label>Jumlah Jam</label>
                                <input class="form-control" type="number" name="hour" id="hour" placeholder="Jam" value="" style="width: 100px;">
                            </div>

                            <!--<button type="submit" name="btnAdd" class="btn btn-default">Save</button>
							-->
							<button type="button" name="btnTambah" onClick="tambahData();" class="btn btn-default">Save</button>
                        </form>
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