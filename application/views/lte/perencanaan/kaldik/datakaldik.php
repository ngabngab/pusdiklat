<script>
var total = [];
var selisihKelas = [];
var arrSplit, diklatlocid, diklatlocname, biayaid, biayaname;

<?php
$jmlDiklat = 0;
$jmlPeserta = 0;
$jmlKelas = 0;
$i = 0;
/*
foreach($totals as $total)
{
	$jmlPeserta = $jmlPeserta + (int)$total->jmlPeserta;
	$jmlKelas = $jmlKelas + (int)$total->jmlKelas;
	?>
	total.push({'jmlDiklat':<?php echo $total->jml; ?>, 'jmlPeserta':<?php echo $total->jmlPeserta; ?>,'jmlKelas':<?php echo $total->jmlKelas; ?>});
	<?php
	$i++;
}
*/
$jmlDiklat = $i;
?>


var idLokasiBefore, idLokasi;
var loc = [];
idLokasiBefore = idLokasi = '';

var idBiayaBefore, idBiaya;
var biaya = [];
idBiayaBefore = idBiaya = '';

function onTampil()
{
	var bulan = $('#selectBulan').val();
	var tahun = $('#selectTahun').val();
	var uri = '';
	if (loc.length > 0 && biaya.length > 0)
	{
		uri = '<?php echo base_url();?>kaldik?month='+bulan+'&year='+tahun+'&diklatlocid='+loc[0].diklatlocid+'&biayaid='+biaya[0].biayaid;
	}
	else if (loc.length > 0)
	{
		uri = '<?php echo base_url();?>kaldik?month='+bulan+'&year='+tahun+'&diklatlocid='+loc[0].diklatlocid;
	}
	else if (biaya.length > 0)
	{
		uri = '<?php echo base_url();?>kaldik?month='+bulan+'&year='+tahun+'&biayaid='+biaya[0].biayaid;
	}
	else
	{
		uri = '<?php echo base_url();?>kaldik?month='+bulan+'&year='+tahun;
	}
	
	
	refreshPage(uri);
}

function viewKaldik(uri)
{
	refreshPage(uri);
}

function pilihLokasi(id)
{
	
	if(idLokasiBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idLokasiBefore = id;
		idLokasi = id;
	}
	else
	{
		document.getElementById(idLokasiBefore).style.backgroundColor = "#fff";
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idLokasiBefore = id;
		idLokasi = id;
	}
	$("#btnPilihLokasi").removeAttr("disabled");
}

function pilihLokasiOk()
{
	arrSplit = idLokasi.split(";");
	diklatlocid = arrSplit[0];
	diklatlocname = arrSplit[1];
	if(loc.length == 0)
	{
		loc.push({'diklatlocid':diklatlocid, 'diklatlocname':diklatlocname});
	}
	else
	{
		loc.pop();
		loc.push({'diklatlocid':diklatlocid, 'diklatlocname':diklatlocname});
	}
	
	document.getElementById('lokasiName').value = loc[0].diklatlocname;
	$('#myModal2').modal('toggle');
	
}

function pilihBiaya(id)
{
	
	if(idBiayaBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idBiayaBefore = id;
		idBiaya = id;
	}
	else
	{
		document.getElementById(idBiayaBefore).style.backgroundColor = "#fff";
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idBiayaBefore = id;
		idBiaya = id;
	}
	$("#btnPilihBiaya").removeAttr("disabled");
}

function pilihBiayaOk()
{
	arrSplit = idBiaya.split(";");
	biayaid = arrSplit[0];
	biayaname = arrSplit[1];
	if(biaya.length == 0)
	{
		biaya.push({'biayaid':biayaid, 'biayaname':biayaname});
	}
	else
	{
		biaya.pop();
		biaya.push({'biayaid':biayaid, 'biayaname':biayaname});
	}
	
	document.getElementById('biayaName').value = biaya[0].biayaname;
	$('#myModal3').modal('toggle');
	
}


</script>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Lokasi</h4>
			</div>
			<div class="modal-body">
				<table id="example2" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Nama Lokasi</th>
					  <th>Nama Kabupaten</th>
					  
					</tr>
					
					</thead>
					<tbody>
						<?php
						foreach ($locations as $location)
						{
							?>
							<tr id="<?php echo $location->diklatLocID;?>;<?php echo $location->diklatLocName;?>" onclick="pilihLokasi(this.id)" style="cursor: pointer;">
								<td><?php echo $location->diklatLocName; ?></td>
								<td><?php echo $location->kabupatenName; ?></td>
								
							</tr>
							<?php
						}
						?>
					</tbody>
					<tfoot>
					<tr>
					  
					</tr>
					</tfoot>
					</table>						
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" disabled id="btnPilihLokasi" onclick="pilihLokasiOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Biaya</h4>
			</div>
			<div class="modal-body">
				<table id="example3" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Nama Biaya</th>
					  <th>Deskripsi Biaya</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						foreach($biayas as $biaya)
						{
							?>
							<tr id="<?php echo $biaya->biayaID;?>;<?php echo $biaya->biayaName;?>" onclick="pilihBiaya(this.id)" style="cursor: pointer;">
								<td><?php echo $biaya->biayaName;?></td>
								<td><?php echo $biaya->biayaDesc;?></td>
								
							</tr>
							<?php
						}
						?>
					</tbody>
					<tfoot>
					<tr>
					  
					</tr>
					</tfoot>
					</table>						
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" disabled id="btnPilihBiaya" onclick="pilihBiayaOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>


<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
		<h3>
			KALDIK
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>kaldik');" style="cursor:pointer;"><i class="fa fa-calendar"></i> Kaldik</a></li>
		</ol>
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Kaldik : Periode <?php echo $monthName; ?> - <?php echo $thisYear; ?></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				
				<div class="form-group">
				<label>Bulan</label>
					<select class="form-control" id="selectBulan">
					  <option id="bln1" value="1">Januari</option>
					  <option id="bln2" value="2">Februari</option>
					  <option id="bln3" value="3">Maret</option>
					  <option id="bln4" value="4">April</option>
					  <option id="bln5" value="5">Mei</option>
					  <option id="bln6" value="6">Juni</option>
					  <option id="bln7" value="7">Juli</option>
					  <option id="bln8" value="8">Agustus</option>
					  <option id="bln9" value="9">September</option>
					  <option id="bln10" value="10">Oktober</option>
					  <option id="bln11" value="11">November</option>
					  <option id="bln12" value="12">Desember</option>
					</select>
				</div>
				<div class="form-group">
				<label>Tahun</label>
					<select class="form-control" id="selectTahun">
						<?php
						if($years)
						{
							foreach ($years as $year)
							{
								?>
								<option id="thn<?php echo $year->yearID;?>" value="<?php echo $year->yearName?>"><?php echo $year->yearName?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
				
				<label>Sumber Biaya</label>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="biayaName" id="biayaName">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i></button></span>
                </div>
				
				<label>Lokasi</label>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="lokasiName" id="lokasiName">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search"></i></button></span>
                </div>
						
            </div>
            
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-left" onclick="onTampil()"><i class="fa fa-plus"></i> Tampilkan Data</button>
            </div>
          </div>
		  </div>
	  </div>
	 
	  
	  <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Kaldik : Periode <?php echo $monthName; ?> - <?php echo $thisYear; ?></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				
				<div class="dragscroll" style="overflow:scroll;">
					<div class="col-xs-12">
					<div class="col-xs-4"><button type="button" id="btnPrevious" class="btn btn-primary" onclick="previousMonth();"><i class="fa fa-calendar"></i> Previous</button></div>
					<div class="col-xs-4">&nbsp</div>
					<div class="col-xs-4"><button type="button" id="btnNext" class="btn btn-primary" onclick="nextMonth();"><i class="fa fa-calendar"></i> Next</button></div>
					</div>
					<div class="col-xs-12">&nbsp</div>
					
					<table id="example7" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td style="width:30px!important;">NO</td>
					  <td style="width:300px!important;">DIKLAT</td>
					  <td style="width:150px!important;">Lokasi</td>
					  <td style="width:100px!important;">Tanggal</td>
					  <?php
						$length = sizeof($calendars->date);
						$Date = $calendars->date;
						$Tgl = $calendars->tgl;
						$Day = $calendars->day;
						$Libur = $calendars->libur;
						$Kelas = array();
						$SelisihKelas = array();
						$i = 0;
						while ($i < $length)
						{
							$Kelas[$i] = 0;
							$SelisihKelas[$i] = 0;
							$i++;
						}
						$Max = $calendars->max;
						foreach($calendars->tgl as $cal)
						{
							?>
							<td style="width:30px!important;"><?php echo $cal;?></td>
							<?php
						}						
					  ?>
					</tr>
					<tr>
						<th>&nbsp</th>
						<th>&nbsp</th>
						<th>&nbsp</th>
						<th>&nbsp</th>
						<?php
						foreach($calendars->day as $cal)
						{
							if($cal == '1')
							{
								$cal = 'S';
							}
							else if($cal == '2')
							{
								$cal = 'S';
							}
							else if($cal == '3')
							{
								$cal = 'R';
							}
							else if($cal == '4')
							{
								$cal = 'K';
							}
							else if($cal == '5')
							{
								$cal = 'J';
							}
							else if($cal == '6')
							{
								$cal = 'S';
							}
							else
							{
								$cal = 'M';
							}
							?>
							<th><?php echo $cal;?></th>
							<?php
						}
						?>
					</tr>
					
					</thead>
					<tbody>
						<?php
						if($kaldiks)
						{
							$h = 1;
							foreach($kaldiks as $kaldik)
							{
								if($kaldik->kaldikStat == 0)
								{
									$statKaldik = 'Non Kaldik';
								}
								else
								{
									$statKaldik = 'Kaldik';
								}
								
								?>
								<tr>
								<td><?php echo $h; ?></td>
								<td><?php echo $kaldik->kaldikID; ?> - <?php echo $kaldik->kaldikDesc; ?>
								</td>
								
								<td><?php echo $kaldik->diklatLocName; ?>
								</td>
								<td><?php echo $kaldik->startDate; ?> - <?php echo $kaldik->endDate; ?>
								</td>
								<?php
								
								$i = 0;
								while ($i < $length)
								{
									if($Day[$i] == '7')
									{
										?>
										<td style="background-color:#9E9E9E;"><a href="#" data-toggle="tooltip" data-placement="top" title="Hari Minggu"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
										<?php	
									}
									else if ($kaldik->cal[$i] == false)
									{
										?>
										<td>&nbsp</td>
										<?php
									}
									else
									{	
										foreach($kaldik->cal[$i] as $calen)
										{
											
											
											if($calen->enddate == '1')
											{
												if($kaldik->diklatLocID == '346')
												{
													$Kelas[$i] = $Kelas[$i] + $kaldik->kelas;
												}
												if ($kaldik->color != null and $kaldik->color != '')
												{
													?>
													<td style="background-color:#<?php echo $kaldik->color; ?>;padding:0!important;text-align:center;"><a href="#"  data-toggle="tooltip" data-html="true" data-placement="top" title="<?php echo $calen->sesiName."<br>Kurikulum : ".$calen->kurikulumSesiDesc . "<br>Sumber Biaya : " . $kaldik->biayaName . "<br>".$statKaldik; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;"><?php echo $kaldik->kelas; ?></div></a></td>
													<?php
												}
												else
												{
												?>
													<td style="background-color:#03A9F4;padding:0!important;text-align:center;"><a href="#" data-toggle="tooltip" data-html="true" data-placement="top" title="<?php echo $calen->sesiName."<br>Kurikulum : ".$calen->kurikulumSesiDesc . "<br>Sumber Biaya : " . $kaldik->biayaName."<br>".$statKaldik; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;"><?php echo $kaldik->kelas; ?></div></a></td>
												<?php
												}
											}
											else if ($calen->enddate == '2')
											{
												?>
												<td style="background-color:#F44336;padding:0!important;"><a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $calen->holidayDesc; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
												<?php
											}
											else
											{
												?>
												<td>&nbsp</td>
												<?php
											}
										}
										
									}
									
									$i++;
								}
								
								?>
								</tr>
								<?php
								$h++;
							}
						}
						?>
					</tbody>
					<tfoot>
					
					<tr>
						<td>&nbsp</td>
						<td>Kelas Terpakai</td>
						<td>&nbsp</td>
						<td>&nbsp</td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							?>
							<td><?php echo $Kelas[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					
					<tr>
						<td>&nbsp</td>
						<td>Max Kelas</td>
						<td>&nbsp</td>
						<td>&nbsp</td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							?>
							<td><?php echo $Max[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					<tr>
						<td>&nbsp</td>
						<td>Sisa Kelas</td>
						<td>&nbsp</td>
						<td>&nbsp</td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							$SelisihKelas[$i] = $Max[$i] - $Kelas[$i];
							
							?>
							<script>
							selisihKelas.push({'tgl':'<?php echo $Date[$i]; ?>', 'selisihkelas':<?php echo $SelisihKelas[$i]; ?>});
							</script>
							<td><?php echo $SelisihKelas[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					</tfoot>
					</table>
				</div>
				
            <div class="box-footer clearfix no-border">
              
            </div>
          </div>
		  </div>
	  </div>
	  
	  
     

    </section>
    
  </div>
 <script>
	var bln = <?php echo $thisMonth; ?>;
	if(bln == 1)
	{
		$('#btnPrevious').attr('disabled', true);
	}
	
	if (bln == 12)
	{
		$('#btnNext').attr('disabled', true);
	}
	
	function nextMonth()
	{
		var temp, bulan, tahun;
		bulan = <?php echo $thisMonth; ?>;
		tahun = <?php echo $thisYear; ?>;
		temp = bulan++;
		console.log(temp);
		$("#btnNext").removeAttr("disabled");
		uri = '<?php echo base_url();?>kaldik?month='+bulan+'&year='+tahun;
		refreshPage(uri);
	}
	
	function previousMonth()
	{
		var temp, bulan, tahun, uri;
		bulan = <?php echo $thisMonth; ?>;
		tahun = <?php echo $thisYear; ?>;
		temp = bulan--;
		$("#btnPrevious").removeAttr("disabled");
		uri = '<?php echo base_url();?>kaldik?month='+bulan+'&year='+tahun;
		refreshPage(uri);	
	}
	
	function tambahKaldik(id, tgl)
	{
		var i, temp;
		i = 0;
		
		while (i < selisihKelas.length)
		{
			if(selisihKelas[i].tgl == tgl)
			{
				temp = selisihKelas[i].selisihkelas;
			}
			i++;
		}
		
		if(temp <= 0)
		{
			var r = confirm("Info : Kelas Di ciawi telah lebih dari maksimal, perhatikan untuk menggunakan lokasi yang lain, jika anda yakin klik yes ?");
			if (r == true) 
			{
				refreshPage(id);
			}
		}
		else
		{
			refreshPage(id);
		}
	}
	
	function setSelectValue (id, val)
	{
		document.getElementById(id).value = val;
	}
	setSelectValue('selectBulan', <?php echo $thisMonth; ?>);
	setSelectValue('selectTahun', <?php echo $thisYear; ?>);
	
	$('#example2').dataTable();
	$('#example3').dataTable();
	
	
 </script>
 <script src="<?php echo base_url();?>assets/lte/plugins/dragscroll/dragscroll.js"></script>