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
    $(document).ready(function () {
        $("#Date").hide().fadeOut("slow");
        $('#tgl').on('click', function (e) {
            $("#Date").hide().fadeIn("slow");
            $("#vDate").hide().fadeOut("slow");
        })
        $('#close_tgl').on('click', function (e) {
            $("#Date").hide().fadeOut("slow");
            $("#vDate").hide().fadeIn("slow");
            $("#tanggalAwal").val("");
            $("#tanggalAkhir").val("");
        })
    });
</script>
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
						<h3>Update Kaldik</h3>
                        <?php 
							$attributes = array('name' => 'len');
							echo form_open('Kaldik/edit', $attributes); 
							
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
							<input class="form-control" type="hidden" name="kaldikID" readonly="true" value="<?php echo $kaldik[0]->kaldikID; ?>">
                            <div class="form-group">
                                <label>Kode Kaldik</label>
                                <input class="form-control" type="text" name="kaldikCode" placeholder="Enter Kode Kaldik" value="<?php echo $kaldik[0]->kaldikCode; ?>">
                            </div>
							
                            <div class="form-group">
                                <label>Nama Kaldik</label>
                                <input class="form-control" type="text" name="kaldikName" placeholder="Enter Nama Kaldik" value="<?php echo $kaldik[0]->kaldikName; ?>">
                            </div>
							
							<div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="kaldikDesc" class="form-control" rows="3"><?php echo $kaldik[0]->kaldikDesc; ?></textarea>
                            </div>
							
							<div class="form-group">
                                <label>Tujuan Kaldik</label>
                                <textarea name="kaldikGoal" class="form-control" rows="3"><?php echo $kaldik[0]->kaldikGoal; ?></textarea>
                            </div>
							
                            <div class="form-group">
                                <label>Nama Diklat</label>
                                <input class="form-control" type="hidden" name="kaldikDiklatID" readonly="true" value="<?php echo $kaldikDiklatID; ?>">
                                <input class="form-control" type="text" name="kaldikDiklatName" readonly="true" value="<?php echo $kaldikDiklatName; ?>">
                            </div>
							
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input class="form-control" type="hidden" name="kaldikLocID" readonly="true" value="<?php echo $kaldikLocID; ?>">
                                <input class="form-control" type="text" name="kaldikLocName" readonly="true" value="<?php echo $kaldikLocName; ?>">
                            </div>

							<label>Sumber Biaya</label>
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="biayaID" name="biayaID" readonly value="<?php echo $kaldik[0]->biayaID; ?>">
								<input class="form-control" type="text" id="biayaName" name="biayaName" readonly value="<?php echo $kaldik[0]->biayaName; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showListBiaya()" type="button"><i class="fa fa-search"></i></button></span>
							</div>

							<label>Kegiatan</label>
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="activityID" name="activityID" readonly value="<?php echo $kaldik[0]->activityID; ?>">
								<input class="form-control" type="text" id="activityName" name="activityName" readonly value="<?php echo $kaldik[0]->activityName; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showListActivity()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
                            <div id="vDate">
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Mulai</label>
                                <input class="form-control" type="hidden" name="kaldikMonth" readonly="true" value="<?php echo $kaldikMonth; ?>">
                                <input class="form-control" type="hidden" name="kaldikYearID" readonly="true" value="<?php echo $kaldikYearID; ?>">
                                <input type="text" class="form-control" name="vstartDate" value="<?= $kaldik[0]->startDate ?>" readonly="true">
                                
                            </div>
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Selesai</label>
                                <input type="text" class="form-control" name="vendDate" value="<?= $kaldik[0]->endDate ?>" readonly="true">
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
                                <input type="text" class="form-control" name="endDate" value="" placeholder="End Date" id="tanggalAkhir"/>
							</div>
                            <a class="btn btn-danger btn-sm" style="margin-top:-5px;" id="close_tgl"><i class="fa fa-times"></i> cancel</a>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Peserta Maksimal</label>
                                <input class="form-control" type="number" name="participantLength" placeholder="Peserta" value="<?php echo $kaldik[0]->participantLength; ?>" style="width: 100px;">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Kelas</label>
                                <input class="form-control" type="number" name="kelas" placeholder="Kelas" min="1" max="<?php echo $kaldikMaxKelas; ?>" value="<?php echo $kaldik[0]->kelas; ?>" style="width: 100px;"> 
                            </div>
                            
                            <div class="form-group">
                                <label>Jumlah Jam</label>
                                <input class="form-control" type="number" name="hour" placeholder="Jam" value="<?php echo $kaldik[0]->hour; ?>" style="width: 100px;">
                            </div>

                            <button type="submit" name="btnAdd" class="btn btn-default">Save</button>

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
        <script>
                            
                          </script>