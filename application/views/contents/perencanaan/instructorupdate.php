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
                        window.location.replace('<?php echo base_url();?>index.php/instructor/index/'+$('#diklatID').val());
                    }
				}
                    
                function showListInstructor() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listInstructor', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function remLinkInstructor() {
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
                    url: '<?php echo base_url();?>index.php/listMataAjar/instructorUpdate/<?php echo $insIDAjax;?>',
                    data: data,
                    success: function(data){
                        $.each(data.data, function(key, value){
                            str += '<option value="'+value.kurikulumRinciID+'">'+value.mataAjarName+'</option>'
                        });
                        $('.mataAjar').html(str);
                    }
                });
                function diklatRef(valueID){
                    window.location.replace('<?php echo base_url();?>index.php/instructor/index/'+valueID);
                }
				
        </script>
        <script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
        <script src="<?php echo base_url();?>/assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
        <link href="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
        <script>
            $(function () {
                $("#rencanaTgll").datepicker({
                    minDate: '<?php echo $startDate;?>',
                    maxDate: '<?php echo $endDate;?>',
                    dateFormat: 'yy-mm-dd',
                    defaultDate: "0",
                    numberOfMonths: 1
                });
                function getJamlat(){
                    var data;
                    var temptgl;
                    var harike;
                    $.ajax({
                        dataType: "json",
                        url: '<?php echo base_url();?>index.php/listMataAjar/instructorDetail/'+$('.mataAjar').val(),
                        data: data,
                        success: function(data){
                            $('#jamlat').val(data.data[0].jamlat);
                            harike = data.data[0].harike - 1;
                            temptgl = moment('<?php echo $startDate;?>').add(harike, 'days').format("YYYY-MM-DD");
                            $('#rencanaTgl').val(temptgl);
                        }
                    });
                }
                getJamlat();
                $('.mataAjar').change(function(){
                    getJamlat();
                });
            });
        </script>

		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1 class="page-header">
                            Perencanaan <small>Penugasan Instruktur</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tasks"></i> Perencanaan | Penugasan Instruktur
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Tambah Penugasan Instructor / WI</div>
                        <div class="panel-body">
                            <?php 
                            $attributes = array('name' => 'len');
                            echo form_open('instructor/updateAct/', $attributes); ?>
                                <label>Kaldik Code</label>
                                <div class="form-group input-group">
                                    <input class="form-control" type="hidden" id="kaldikID" name="kaldikID" value="<?php echo $kaldikIDup;?>">
                                    <input class="form-control" type="hidden" id="instructorAssignmentID" name="instructorAssignmentID" value="<?php echo $instructorAssignmentID;?>">
                                    <input class="form-control" type="text" id="kaldikCode" name="kaldikCode" readonly value="<?php echo $kaldikCodeup;?>">
                                    <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                </div>
                                <label>Nama Instruktur</label>
                                <div class="form-group input-group">
                                    <input class="form-control" type="hidden" id="instructorID" name="instructorID" readonly value="<?php echo $pegawaiIDup;?>">
                                    <input class="form-control" type="text" id="instructorName" name="instructorName" readonly value="<?php echo $pegawaiNameup;?>">
                                    <span class="input-group-btn"><button class="btn btn-default" onClick="showListInstructor()" type="button"><i class="fa fa-search"></i></button></span>
                                </div>



                            <hr>
                                <label>Kelas</label>
                                <div class="form-group input-group">
                                    <input class="form-control" type="hidden" id="kelasID" name="kelasID" readonly value="<?php echo $kelasIDup;?>">
                                    <input class="form-control" type="text" id="kelasName" name="kelasName" readonly value="<?php echo $kelasNameup;?>">
                                    <span class="input-group-btn"><button class="btn btn-default" onClick="showListKelas()" type="button"><i class="fa fa-search"></i></button></span>
                                </div>
                                <div class="form-group">
                                    <label>Mata Ajar</label>
                                    <select name="mataAjarID" class="form-control mataAjar" readonly>
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
                                    <input class="form-control" type="text" id="rencanaTgl" name="rencanaTgl" readonly value="">
                                </div>
                                <div class="form-group">
                                    <label>Status WI</label>
                                    <input class="form-control" type="checkbox" id="statusWI" name="statusWI" value="1" style="width:auto; height:auto;">
                                </div>
                                <div class="form-group">
                                    <label>Rencana JamLat</label>
                                    <input class="form-control" type="text" id="jamlat" name="jamlat" value="" size="5" readonly <?php //echo $jamlat;?> style="width:auto;display:inline;">
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
                                <button type="submit" name="btnSave" class="btn btn-default">Simpan</button>
                                <a href="<?php echo base_url();?>/index.php/instructor"><button type="button" class="btn btn-default">Kembali</button></a>
                            </form>
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