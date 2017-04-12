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
  <script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>/assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
  <link href="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
<script>
    $(function() {
        $('#datepicker123').datepicker({
        dateFormat: 'yy-mm-dd',
        
        yearRange: '<?= $kaldikYearName?>:2022',
        minDate: new Date(<?= $kaldikYearName?>, <?= $kaldikMonth?> - 1, <?= $kaldikDay?>),
        maxDate: '+30Y',
        inline: true
    }).on('change', function (e) {
        var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
        var firstDate = new Date($('#datepicker123').val());
        var secondDate = new Date($('#tanggalAwal').val());
        var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay))+1);
        $("#hari").val(diffDays);
        $("#hour").val(diffDays*10);
        /*
        alert(diffDays);
        $(document).ready(function () {
            $("#hari").val(diffDays);
        });
        */
    });
    $('#stDate').datepicker({
        dateFormat: 'yy-mm-dd',
    });
    
    });
    
</script>
<script>
    $(function () {
        var dates = $("#tanggalAwal, #tanggalAkhir").datepicker({
            defaultDate: "+1w",
            //changeMonth: true,
            //changeYear: true,
            numberOfMonths: 1,
            onSelect: function (selectedDate) {
                var option = this.id == "tanggalAwal" ? "minDate" : "maxDate",
                        instance = $(this).data("datepicker"),
                        date = $.datepicker.parseDate(
                                instance.settings.dateFormat ||
                                $.datepicker._defaults.dateFormat,
                                selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });
        $("#tanggalAwal, #tanggalAkhir").datepicker('option', 'dateFormat', 'yy-mm-dd');
        $('#stDate').datepicker({
        dateFormat: 'yy-mm-dd',
    });
    });
</script>
<script>
    $(document).ready(function () {
        $("#Date").hide().fadeOut("slow");
        $("#DateST").hide().fadeOut("slow");
        $('#tgl').on('click', function (e) {
            $("#Date").hide().fadeIn("slow");
            $("#vDate").hide().fadeOut("slow");
        })
        $('#sttgl').on('click', function (e) {
            $("#DateST").hide().fadeIn("slow");
            $("#vDateST").hide().fadeOut("slow");
        })
        $('#close_tgl').on('click', function (e) {
            $("#Date").hide().fadeOut("slow");
            $("#vDate").hide().fadeIn("slow");
            $("#tanggalAwal").val("");
            $("#datepicker123").val("");
            $("#hari").val(<?= $Realkaldik[0]->hari ?>);
        })
        $('#close_tgl_st').on('click', function (e) {
            $("#DateST").hide().fadeOut("slow");
            $("#vDateST").hide().fadeIn("slow");
            $("#stDate").val("");
        })
            $("#hari").change(function(){
        var day = $("#hari").val();
        $("#hour").val(day*10);
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
    //alert('hoi');
    
    var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
    var firstDate = $('#datepicker123').val();
    var fd = firstDate.split('-');
    var fdm = moment([fd[0], fd[1]-1, fd[2]])
    //alert(fdm);
    var secondDate = $('#tanggalAwal').val();
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
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Realisasi <small>Kaldik</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tasks"></i> Realisasi | Kaldik
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
                <div class="row">
                <?php 
							$attributes = array('name' => 'len','id' => 'inputform');
							echo form_open('Kaldik/realedit1/'.$idRealKaldik, $attributes); 
							
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
							
							?>
							
							<script language="JavaScript">
							
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
                            
							function remLink() {
								if (window.sList && window.sList.open && !window.sList.closed)
									window.sList.opener = null;
							}
							</script>
                            <div class="col-lg-12">
                    <a href="<?php echo base_url()?>index.php/Kaldik/list_realisasi_kaldik"  class="btn btn-danger">Kembali</a>
                        
                        <br />
                    </div>
                    <div class="col-lg-6">
						<h4><i class="fa fa-book"></i> Data Diklat</h4>
                        <img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
							
                            <input class="form-control" type="hidden" name="kaldikName" readonly="true" value="<?php echo $kaldik[0]->kaldikName; ?>">
                            <input class="form-control" type="hidden" name="kaldikGoal" readonly="true" value="<?php echo $kaldik[0]->kaldikGoal; ?>">
                            <input class="form-control" type="hidden" name="activityID" readonly="true" value="<?php echo $kaldik[0]->activityID; ?>">
                            <?php echo form_error('kaldikCode', '<div class="alert alert-danger">', '</div>'); ?>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input class="form-control" type="text" name="tahun" readonly="true" placeholder="tahun" value="<?php echo $kaldik[0]->yearName; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kode Kaldik</label>
                                <input class="form-control" type="hidden" name="kaldikCode" readonly="true" placeholder="Enter Kode Kaldik" value="<?php echo $kaldik[0]->realKaldikID; ?>">
                                <input class="form-control" type="text" name="kaldikCode1" readonly="true" placeholder="Enter Kode Kaldik" value="<?php echo $id_kaldik[0]->kaldikID; ?>">
                            </div>
                            <div class="form-group">
                                <label>Bidang Penyelenggara</label>
                                <input class="form-control" type="text" name="bidang" readonly="true" placeholder="Bidang" value="<?php echo $kaldik[0]->bidangFullName; ?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Diklat</label>
                                <input class="form-control" type="text" name="diklat_type" readonly="true" placeholder="diklat_type" value="<?php echo $kaldik[0]->diklatTypeName; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kurikulum</label>
                                <input class="form-control" type="text" name="kurikulum" readonly="true" placeholder="kurikulum" value="<?php echo $kaldik[0]->kurikulumName; ?>">
                            </div>
							
                            <div class="form-group">
                                <label>Nama Diklat</label>
                                <input class="form-control" type="hidden" name="kaldikDiklatID" readonly="true" value="<?php echo $kaldikDiklatID; ?>">
                                <input class="form-control" type="text" name="kaldikDiklatName" readonly="true" value="<?php echo $kaldikDiklatName; ?>">
                            </div>
							
                            <div class="form-group">
                                <label>Blended Learning</label><br />
                                <input type="checkbox" name="blended" readonly="true" value="1" <?php if ($kaldik[0]->stat_blended != NULL){echo 'checked';}?>> Yes Blended Learning/ Tatap Muka 
                            </div>
							<div class="form-group">
                                <label>E-Learning</label><br />
                                <input type="checkbox" name="elearning" readonly="true" value="1" id="checkbox" <?php if ($kaldik[0]->stat_elearning != NULL){echo 'checked';}?> > Yes E-Learning  
                                <!--
                                <div class="form-group input-group" id="elearn">
                                <input class="form-control" type="text" id="kaldikID" name="blendedID" placeholder="Blended ID" readonly value="<?php  echo $kaldik[0]->id_kaldik_blended; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                </div>
                                -->
                            </div>
                            <div class="form-group">
                                <label>Full Tatap Muka</label><br />
                                <input type="checkbox" name="tatapmuka" readonly="true" value="1" <?php if ($kaldik[0]->stat_tatapmuka != NULL){echo 'checked';}?>> Yes Tatap Muka 
                            </div>
                            <div class="form-group">
                                <label>Lokasi Diklat</label>
                                <input class="form-control" type="hidden" name="kaldikLocID" readonly="true" value="<?php echo $kaldikLocID; ?>">
                                <input class="form-control" type="text" name="kaldikLocName" readonly="true" value="<?php echo $kaldikLocName; ?>">
                            </div>
                            <?php echo form_error('biayaID', '<div class="alert alert-danger">', '</div>'); ?>
							<label>Sumber Biaya</label>
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="biayaID" name="biayaID" readonly value="<?php echo $kaldik[0]->biayaID; ?>">
								<input class="form-control" type="text" id="biayaName" name="biayaName" readonly value="<?php echo $kaldik[0]->biayaName; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showListBiaya()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
                            <?php echo form_error('rencanaAnggaran', '<div class="alert alert-danger">', '</div>'); ?>
                            <div class="form-group">
                                <label>Rencana Anggaran</label>
                                <input class="form-control" type="text" name="rencanaAnggaran" id="rencanaAnggaran" placeholder="Enter Rencana Anggaran" value="<?php echo $kaldik[0]->rencanaAnggaran; ?>">
                            </div>
                            <div class="form-group">
                                <label>Lokasi Detail</label>
                                <input class="form-control" type="text" name="LokasiDetail" readonly="true" placeholder="Enter Lokasi Detail" value="<?php echo $kaldik[0]->diklatLocDetail; ?>">
                            </div>
                            <?php echo form_error('kaldikDesc', '<div class="alert alert-danger">', '</div>'); ?>
							<div class="form-group">
                                <label>Uraian Diklat</label>
                                <textarea name="kaldikDesc" class="form-control" rows="3"><?php echo $kaldik[0]->kaldikDesc; ?></textarea>
                            </div> 
                            <br />
                            <h4><i class="fa fa-users"></i> Unit Asal Peserta</h4>
                        <img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
                        <?php echo form_error('KodeAsal', '<div class="alert alert-danger">', '</div>'); ?>
                        <div class="form-group">
                        <label>Kode Asal</label>
                        
                        <div class="form-group input-group">
								<input class="form-control" type="hidden" id="KodeAsal" name="KodeAsal" readonly value="<?php echo $kaldik[0]->KodeAsal; ?>">
                        <input class="form-control" type="text" id="NamaUnitAsal" name="NamaUnitAsal" readonly value="<?php echo $kaldik[0]->NamaUnitAsal; ?>">
						<span class="input-group-btn"><button class="btn btn-default" onClick="showListKodeAsal()" type="button"><i class="fa fa-search"></i></button></span>
                        </div>
                    </div>
                    <?php echo form_error('ketUnitKerja', '<div class="alert alert-danger">', '</div>'); ?>
                    <div class="form-group">
                        <label>Keterangan Unit Kerja</label>
                        <textarea name="ketUnitKerja" class="form-control" rows="3"><?php echo $kaldik[0]->KetUnitKerja; ?></textarea>
                    </div>
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-1">
                   
                    </div>
                    
                    
                    <div class="col-lg-5">
                    <h4><i class="fa fa-file"></i> Nomor Surat Tugas</h4>
                        <img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
                        <div class="form-group">
                                <label>Nomor Surat Tugas</label>
                                <input class="form-control" type="text" name="nost" placeholder="No. Surat Tugas" value="<?php echo $kaldik[0]->noST;  ?>">
                            </div>
                        <div id="vDateST">
                        <div class="form-group" id="sandbox-container">
                                <label>Tanggal ST</label>
                                <input type="text" class="form-control"  value="<?php echo $kaldik[0]->tglST?>" readonly="true" placeholder="Surat Tugas Date" id="vstDate"/>
                            
                            </div>
                            <a class="btn btn-success btn-sm" style="margin-top:-5px;" id="sttgl"><i class="fa fa-pencil"></i> Edit Tanggal</a>
                            
                            </div>
                            
                        <div id="DateST">
                        <div class="form-group" id="sandbox-container">
                                <label>Tanggal ST</label>
                                <input type="text" class="form-control" name="stDate" value="" placeholder="Surat Tugas Date" id="stDate"/>
                            
                            </div>
                            <a class="btn btn-danger btn-sm" style="margin-top:-5px;" id="close_tgl_st"><i class="fa fa-times"></i> cancel</a>
                            
                            </div>
                            <br />
                            <h4><i class="fa fa-calendar"></i> Rencana Diklat</h4>
                    <img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
                    <div id="vDate1">
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Mulai</label>
                                <input class="form-control" type="hidden" name="vkaldikMonth" readonly="true" value="<?php echo $kaldikMonth; ?>">
                                <input class="form-control" type="hidden" name="vkaldikYearID" readonly="true" value="<?php echo $kaldikYearID; ?>">
                                <input type="text" class="form-control" name="vstartDate" value="<?= $kaldik[0]->startDate ?>" readonly="true">
                                
                            </div>
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Selesai</label>
                                <input type="text" class="form-control" name="vendDate" value="<?= $kaldik[0]->endDate ?>" readonly="true">
							</div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Hari</label>
                                <input class="form-control" type="number"  name="vhari" placeholder="Hari" value="<?php echo $kaldik[0]->hari; ?>" readonly="true" style="width: 100px;">
                            </div>    
                            <div class="form-group">
                                <label>Jumlah Peserta Maksimal</label>
                                <input class="form-control" type="number" name="vparticipantLength" readonly="true" placeholder="Peserta" value="<?php echo $kaldik[0]->participantLength; ?>" style="width: 100px;">
                            </div>
                           
                            <div class="form-group">
                                <label>Jumlah Kelas</label>
                                <input class="form-control" type="number" name="vkelas" placeholder="Kelas" readonly="true" min="1" max="<?php echo $kaldikMaxKelas; ?>" value="<?php echo $kaldik[0]->kelas; ?>" style="width: 100px;"> 
                            </div>
                            
                            <div class="form-group">
                                <label>Jumlah Jam</label>
                                <input class="form-control" type="number" name="vhour" placeholder="vJam" readonly="true" value="<?php echo $kaldik[0]->hour; ?>" style="width: 100px;">
                            </div>
                    
                    <br />
                    <h4><i class="fa fa-check-square-o"></i> Realisasi Diklat</h4>
                        <img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
                        <div id="vDate">
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Mulai</label>
                                <input class="form-control" type="hidden" name="kaldikMonth" readonly="true" value="<?php echo $kaldikMonth; ?>">
                                <input class="form-control" type="hidden" name="kaldikYearID" readonly="true" value="<?php echo $kaldikYearID; ?>">
                                <input type="text" class="form-control" name="vstartDate" value="<?= $Realkaldik[0]->startDate ?>" readonly="true">
                                
                            </div>
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Selesai</label>
                                <input type="text" class="form-control" name="vendDate" value="<?= $Realkaldik[0]->endDate ?>" readonly="true">
							</div>
                            <a class="btn btn-success btn-sm" style="margin-top:-5px;" id="tgl"><i class="fa fa-pencil"></i> Edit Tanggal</a>
                            </div>
                            <div id="Date">
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Mulai</label>
                                <input class="form-control" type="hidden" name="kaldikMonth" readonly="true" value="<?php echo $kaldikMonth; ?>">
                                <input class="form-control" type="hidden" name="kaldikYearID" readonly="true" value="<?php echo $kaldikYearID; ?>">
                                <input type="text" class="form-control" name="startDate" value="" placeholder="Start Date" id="tanggalAwal"/>
                                
                            </div>
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Selesai</label>
                                <input type="hidden" class="form-control" name="endDate1" value="" placeholder="End Date" id="tanggalAkhir" />
                                <input type="text" class="form-control" name="endDate" value="" placeholder="End Date" id="datepicker123" onchange="checkTextField()"/>
							</div>
                            <a class="btn btn-danger btn-sm" style="margin-top:-5px;" id="close_tgl"><i class="fa fa-times"></i> cancel</a>
                            </div>
                        <div class="form-group">
                                <label>Jumlah Hari</label>
                                <input class="form-control" type="number" id="hari" name="hari" placeholder="Hari" value="<?php echo $Realkaldik[0]->hari; ?>" style="width: 100px;">
                            </div>    
                        <?php echo form_error('participantLength', '<div class="alert alert-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label>Jumlah Peserta Maksimal</label>
                            <input class="form-control" type="number" name="participantLength" placeholder="Peserta" value="<?php echo $Realkaldik[0]->participantLength; ?>" style="width: 100px;">
                        </div>
                        <?php echo form_error('kelas', '<div class="alert alert-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label>Jumlah Kelas</label>
                            <input class="form-control" type="number" name="kelas" placeholder="Kelas" min="1" value="<?php echo $Realkaldik[0]->kelas; ?>" style="width: 100px;"> 
                        </div>
                        <?php echo form_error('hour', '<div class="alert alert-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label>Jumlah Jam</label>
                            <input class="form-control" type="number" id="hour" name="hour" placeholder="Jam" value="<?php echo $Realkaldik[0]->hour; ?>" style="width: 100px;">
                        </div>
                        <br />
                        
                        <button type="submit" name="btnAdd" class="btn btn-default" >Save</button>
                    
                    </div>
                    </form>
                </div>
				
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
        <script>
                            
                          </script>