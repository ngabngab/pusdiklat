<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$loggedIn = $this->session->userdata['logged_in'];
$this->load->model('KaldikModel','',TRUE);
$this->load->model('InstructorModel','',TRUE);
?>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
$( function() {
    $( document ).tooltip({
      position: {
        my: "center bottom-20",
        at: "center top",
        using: function( position, feedback ) {
          $( this ).css( position );
          $( "<div>" )
            
            .addClass( feedback.vertical )
            .addClass( feedback.horizontal )
            .appendTo( this );
        }
      }
    });
  } );
  </script>
  <style>
  .ui-tooltip, .arrow1:after {
    background: gray;
    border: 2px solid white;
  }
  .ui-tooltip {
    padding: 10px 20px;
    color: white;
    border-radius: 20px;
    font: bold 12px "Helvetica Neue", Sans-Serif;
    white-space: pre-line;
    box-shadow: 0 0 7px black;
    width: 300px;
    position: absolute;
  }
  </style>
</script>
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Perencanaan <small>Instruktur</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-tasks"></i> Perencanaan | Instruktur
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
						
				<script language="JavaScript">
				
				function showList() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listDiklat', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function showList2() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listTahun', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
                function showList3() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listDiklat', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function remLink() {
					if (window.sList && window.sList.open && !window.sList.closed)
						window.sList.opener = null;
				}
                
                function diklatRef($id){
                    
                }
				
				</script>
				
                <div class="row">
                    <div class="col-lg-12">
						<?php 
						
						if(!isset($diklatLocID)){
							$diklatLocID = "";
						}
						if(!isset($diklatLocName)){
							$diklatLocName = "";
						}
                        
						$attributes = array('name' => 'len');
						echo form_open('instructor', $attributes); 
                        if (!isset($diklatName))
                        $diklatName = "";
                        $diklatID = "";
                        ?>
							<div class="form-group" >
								<label>Bulan <font style="color: red;">*</font></label>
								<select name="kaldikMonth" class="form-control">
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
							<label>Tahun <font style="color: red;">*</font></label>
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="tahunID" name="tahunID" readonly value="">
								<input class="form-control" type="text" id="tahunName" name="tahunName" readonly value="<?php echo $currentYear; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showList2()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
                            
                            <label>Diklat <font style="color: red;">*</font></label>
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="diklatID" name="diklatID" readonly value="">
								<input class="form-control" type="text" id="diklatName" name="diklatName" readonly value="<?php echo $diklatName; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
							<!--
							<label>Lokasi <font style="color: red;">*</font></label>
                            -->
							<div class="form-group input-group">
								<input class="form-control" type="hidden" id="diklatLocID" name="diklatLocID" readonly value="346">
								<input class="form-control" type="hidden" id="diklatLocName" name="diklatLocName" readonly value="Ciawi">
								<!-- <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span> -->
							</div>
							
							<button type="submit" name="btnSearch" class="btn btn-default">Tampilkan</button>
						</form>
                    </div>
					
					<?php
					if(isset($isSearch) && $diklatLocID!= ''){
						?>
						<div class="col-lg-12">
							<h3> </h3>
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Instruktur / WI</th>
											<?php
											date_default_timezone_set('Asia/Jakarta');
											$start_date = "01-".$currentMonth."-".$currentYear;
											$start_time = strtotime($start_date);

											$end_time = strtotime("+1 month", $start_time);

											for($i=$start_time; $i<$end_time; $i+=86400)
											{
											   ?>
											   <th><?php echo date('D', $i)[0]; ?></th>
											   <?php
											}
											?>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td></td>
											<td></td>
											<?php
											for($i=$start_time; $i<$end_time; $i+=86400)
											{
											   ?>
											   <td><?php echo date('j', $i); ?></td>
											   <?php
											}
											?>
										</tr>
										<?php
										$a=1;
										foreach($pegawais as $pegawai){
										  //$kaldik = $this->KaldikModel->SearchKaldik($Month,$YearID,$LocID,$diklat->diklatID);
											//echo 'diklatID: '.$kaldik123;
                                            //die;
                                            ?>
											<tr>
												<td><?php echo $a; ?></td>
												<td><?php echo $pegawai->pegawaiDegreeFirst." " .$pegawai->pegawaiName." ".$pegawai->pegawaiDegreeLast; ?></td>
												<?php
												for($i=$start_time; $i<$end_time; $i+=86400)
												{
													if(date('D', $i)=="Sun" or date('D', $i)=="Sat"){
														?>
														<td style='background-color: #404040'></td>
														<?php
													}else{
														$holy = false;
														foreach($holidays as $holiday){
															if($holiday->holidayDate == date('m/d/Y', $i)){
																$holy = true;
															}
														}
														if($holy == true){
															?>
															<td style='background-color: #CC0000'></td>
															<?php
														}else{
														  $tgl = date('Y-m-d',$i);
                                                          $kaldik = $this->KaldikModel->SearchKaldikOne($Month,$YearID,$diklatIDD,$tgl);
                                                          $cnt = $this->KaldikModel->CountKaldikOne($Month,$YearID,$diklatIDD,$tgl);
														  $na = false;
                                                          if ($kaldik != null){
                                                            $cntInst = $this->InstructorModel->CountInstructorOne($kaldik[0]->kaldikID, $pegawai->pegawaiID, $tgl);
                                                            $na = true;
                                                ?>
                                                            <td style='background-color: #129f12;'>
                                                              <a href="<?php echo base_url("/index.php/instructor/addins/".$kaldik[0]->kaldikID."/".$pegawai->pegawaiID."/".date('Y-m-d', $i))?>" id="age" title="Nama Diklat &nbsp: <?=$kaldik[0]->diklatName?>&#013; Lokasi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?=$kaldik[0]->diklatLocName?>&#013; Jenis Diklat &nbsp: <?=$kaldik[0]->diklatTypeName?>" style="color : white; text-decoration: none; display:block;"><?php echo $cntInst;?></a>
                                                              </td>
                                                <?php
                                                          }
                                                          if($na ==true){
                                                            ?>
															<?php
                                                          }else{
                                                            ?><td style='padding:0px;'>
                                                            </td>
															<?php
                                                          }
														}
														
													}
												}
												?>
											</tr>
											<?php
											$a++;
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
						<?php
					}
					?>
					
					
                </div>
<!--
            <style>
                a{
                    text-decoration: none;
                    
                }
            </style>
-->
				
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->