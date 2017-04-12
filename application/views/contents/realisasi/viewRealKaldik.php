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
    });
</script>

<script>
    $(document).ready(function(){
        $("#inputform").validationEngine({			
		});
        
    })
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
							echo form_open('Kaldik/realedit/'.$idRealKaldik, $attributes); 
							
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
							
							function showListActivity() {
								var w = (screen.width/2);
								var h = (screen.height/2);
								var left = (screen.width/2)-(w/2);
								var top = (screen.height/2)-(h/2);
								sList = window.open('<?php echo base_url(); ?>index.php/listActivity', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
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
							
                            <input class="form-control" type="hidden" name="kaldikName" readonly="true" value="<?php echo $Realkaldik[0]->kaldikName; ?>">
                            <input class="form-control" type="hidden" name="kaldikGoal" readonly="true" value="<?php echo $Realkaldik[0]->kaldikGoal; ?>">
                            <input class="form-control" type="hidden" name="activityID" readonly="true" value="<?php echo $Realkaldik[0]->activityID; ?>">
                            <?php echo form_error('kaldikCode', '<div class="alert alert-danger">', '</div>'); ?>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input class="form-control" type="text" name="tahun" readonly="true" placeholder="tahun" value="<?php echo $Realkaldik[0]->yearName; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kode Kaldik</label>
                                <input class="form-control" type="text" name="kaldikCode" readonly="true" placeholder="Enter Kode Kaldik" value="<?php echo $id_kaldik[0]->kaldikID; ?>">
                            </div>
                            <div class="form-group">
                                <label>Bidang Penyelenggara</label>
                                <input class="form-control" type="text" name="bidang" readonly="true" placeholder="Bidang" value="<?php echo $Realkaldik[0]->bidangFullName; ?>">
                            </div>
                            <div class="form-group">
                                <label>Jenis Diklat</label>
                                <input class="form-control" type="text" name="diklat_type" readonly="true" placeholder="diklat_type" value="<?php echo $Realkaldik[0]->diklatTypeName; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kurikulum</label>
                                <input class="form-control" type="text" name="kurikulum" readonly="true" placeholder="kurikulum" value="<?php echo $Realkaldik[0]->kurikulumName; ?>">
                            </div>
							
                            <div class="form-group">
                                <label>Nama Diklat</label>
                                <input class="form-control" type="hidden" name="kaldikDiklatID" readonly="true" value="<?php echo $kaldikDiklatID; ?>">
                                <input class="form-control" type="text" name="kaldikDiklatName" readonly="true" value="<?php echo $kaldikDiklatName; ?>">
                            </div>
							
                            <div class="form-group">
                                <label>Blended Learning</label><br />
                                <input type="checkbox" disabled="true" name="blended" value="1" <?php if ($Realkaldik[0]->stat_blended != NULL){echo 'checked';}?>> Yes Blended Learning/ Tatap Muka 
                            </div>
							<div class="form-group">
                                <label>E-Learning</label><br />
                                <input type="checkbox" name="elearning" value="1" disabled="true" id="checkbox" <?php if ($Realkaldik[0]->stat_elearning != NULL){echo 'checked';}?> > Yes E-Learning  
                                <!--
                                <div class="form-group input-group" id="elearn">
                                ID Kaldik Blended : <input class="form-control" type="text" readonly="true" id="kaldikID" name="blendedID" placeholder="Blended ID" readonly value="<?php  echo $Realkaldik[0]->id_kaldik_blended; ?>">
								
                                </div>
                                -->
                            </div>
                            <div class="form-group">
                                <label>Full Tatap Muka</label><br />
                                <input type="checkbox" name="tatapmuka" readonly="true" value="1" <?php if ($Realkaldik[0]->stat_tatapmuka != NULL){echo 'checked';}?>> Yes Tatap Muka 
                            </div>
                            <div class="form-group">
                                <label>Lokasi Diklat</label>
                                <input class="form-control" type="hidden" name="kaldikLocID" readonly="true" value="<?php echo $kaldikLocID; ?>">
                                <input class="form-control" type="text" name="kaldikLocName" readonly="true" value="<?php echo $kaldikLocName; ?>">
                            </div>
                            <?php echo form_error('biayaID', '<div class="alert alert-danger">', '</div>'); ?>
							<label>Sumber Biaya</label>
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="biayaID" name="biayaID" readonly value="<?php echo $Realkaldik[0]->biayaID; ?>">
								<input class="form-control" type="text" id="biayaName" name="biayaName" readonly value="<?php echo $Realkaldik[0]->biayaName; ?>">
								
							</div>
                            <?php echo form_error('rencanaAnggaran', '<div class="alert alert-danger">', '</div>'); ?>
                            <div class="form-group">
                                <label>Rencana Anggaran</label>
                                <input class="form-control" type="text" name="rencanaAnggaran" readonly="true" id="rencanaAnggaran" placeholder="Enter Rencana Anggaran" value="<?php echo $Realkaldik[0]->rencanaAnggaran; ?>">
                            </div>
                            <div class="form-group">
                                <label>Lokasi Detail</label>
                                <input class="form-control" type="text" name="LokasiDetail" readonly="true" placeholder="Enter Lokasi Detail" value="<?php echo $Realkaldik[0]->diklatLocDetail; ?>">
                            </div>
                            <?php echo form_error('kaldikDesc', '<div class="alert alert-danger">', '</div>'); ?>
							<div class="form-group">
                                <label>Uraian Diklat</label>
                                <textarea name="kaldikDesc" class="form-control" readonly="true" rows="3"><?php echo $Realkaldik[0]->kaldikDesc; ?></textarea>
                            </div> 
                             <br />
                            <h4><i class="fa fa-users"></i> Unit Asal Peserta</h4>
                        <img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
                       <div class="form-group">
                        <label>Kode Asal</label>

								<input class="form-control" type="hidden" id="KodeAsal" name="KodeAsal" readonly value="<?php echo $Realkaldik[0]->KodeAsal; ?>">
                        <input class="form-control" type="text" id="NamaUnitAsal" name="NamaUnitAsal" readonly value="<?php echo $Realkaldik[0]->NamaUnitAsal; ?>">

                    </div>
                    <?php echo form_error('ketUnitKerja', '<div class="alert alert-danger">', '</div>'); ?>
                    <div class="form-group">
                        <label>Keterangan Unit Kerja</label>
                        <textarea name="ketUnitKerja" class="form-control" readonly="true" rows="3"><?php echo $Realkaldik[0]->KetUnitKerja; ?></textarea>
                    </div>
                    </div>
                    <div class="col-lg-1">
                    
                    </div>
                    
                    
                    <div class="col-lg-5">
                    <h4><i class="fa fa-file"></i> Nomor Surat Tugas</h4>
                        <img src="<?= base_url()?>/assets/img/line.png" style="width: 100%;"/>
                        <div class="form-group">
                                <label>Nomor Surat Tugas</label>
                                <input class="form-control" type="text" name="nost" readonly="true" placeholder="No. Surat Tugas" value="<?php echo $Realkaldik[0]->noST;  ?>">
                            </div>
                        <div id="vDateST">
                        <div class="form-group" id="sandbox-container">
                                <label>Tanggal ST</label>
                                <input type="text" class="form-control"  value="<?php echo $Realkaldik[0]->tglST?>" readonly="true" placeholder="Surat Tugas Date" id="vstDate"/>
                            
                            </div>
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
                            
                            </div>
                            <div class="form-group">
                                <label>Jumlah Hari</label>
                                <input class="form-control" type="number" name="hari" placeholder="Hari" readonly="true" value="<?php echo $Realkaldik[0]->hari; ?>" style="width: 100px;">
                            </div>
                        <?php echo form_error('participantLength', '<div class="alert alert-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label>Jumlah Peserta Maksimal</label>
                            <input class="form-control" type="number" name="participantLength" readonly="true" placeholder="Peserta" value="<?php echo $Realkaldik[0]->participantLength; ?>" style="width: 100px;">
                        </div>
                        <?php echo form_error('kelas', '<div class="alert alert-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label>Jumlah Kelas</label>
                            <input class="form-control" type="number" name="kelas" placeholder="Kelas" readonly="true" min="1" max="<?php echo $kaldikMaxKelas; ?>" value="<?php echo $Realkaldik[0]->kelas; ?>" style="width: 100px;"> 
                        </div>
                        <?php echo form_error('hour', '<div class="alert alert-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label>Jumlah Jam</label>
                            <input class="form-control" type="number" name="hour" placeholder="Jam" readonly="true" value="<?php echo $Realkaldik[0]->hour; ?>" style="width: 100px;">
                        </div>
                        <br />
                    
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