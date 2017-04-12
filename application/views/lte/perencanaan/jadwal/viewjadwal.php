<script>
var total = [];
var selisihKelas = [];
var arrSplit, diklatlocid, diklatlocname, biayaid, biayaname, pegawaiid, tanggal, cutinoteid, jmlhari, pegawainame, cutipegawaiid;

pegawaiid = '';
tanggal = '';

var idPegawaiBefore, idPegawai;
var pegawai = [];
idPegawaiBefore = idPegawai = '';

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
function tambahCuti(pegawaiID, Tgl, pegawaiName)
{
	pegawaiid = pegawaiID;
	tanggal = Tgl;
	pegawainame = pegawaiName;
	document.getElementById('myModalLabel').innerHTML = 'Tambah Cuti '+pegawainame;
	document.getElementById('modalFooter').innerHTML = '<button type="button" class="btn btn-primary" data-toggle="tooltip" title="Tambah Data Cuti" style="margin-right: 5px;" onclick="saveCuti();"><i class="fa fa-save"></i> Simpan</button>';
	$('#myModal6').modal('show');
}

function pilihReason(id)
{
	cutinoteid = id;
	
}

function saveCuti()
{
	jmlhari = document.getElementById('jmlHari').value;
	if(jmlhari == 0)
	{
		alert('Hari Tidak Boleh Bernilai 0');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>' + 'datajadwal/tambahcuti/?pegawaiid='+ pegawaiid + '&tanggal=' +tanggal + '&cutinoteid=' + cutinoteid + '&jmlhari='+jmlhari;
		console.log(uri);
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if (data.message == 'success')
				{
					
					refreshPage('<?php echo base_url(); ?>datajadwal/?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>');
				}
				
			}
		});
		
		$('#myModal6').modal('hide');
	}
}

function ubahCuti(cutiPegawaiID, cutiNoteID, pegawaiID, Tgl, pegawaiName)
{
	cutipegawaiid = cutiPegawaiID;
	cutinoteid = cutiNoteID;
	pegawaiid = pegawaiID;
	tgl = Tgl;
	pegawainame = pegawainame;
	document.getElementById('cutiNoteNameUpdate').value = cutinoteid;
	document.getElementById('myModalLabelUpdate').innerHTML = 'Ubah / Hapus Cuti Pegawai : '+ pegawainame + ' Tanggal : '+ tgl;
	document.getElementById('modalFooterUpdate').innerHTML = '<button type="button" class="btn btn-warning" data-toggle="tooltip" title="Ubah Data Cuti" style="margin-right: 5px;" onclick="ubahDataCuti();"><i class="fa fa-pencil"></i> Ubah Data</button>&nbsp&nbsp<button type="button" class="btn btn-danger" data-toggle="tooltip" title="Ubah Data Cuti" style="margin-right: 5px;" onclick="hapusDataCuti();"><i class="fa fa-close"></i> Hapus Data</button>';
	$('#myModal7').modal('show');
}

function ubahDataCuti()
{
	var uri = '<?php echo base_url(); ?>' + 'datajadwal/ubahcuti/?cutipegawaiid='+ cutipegawaiid +  '&cutinoteid=' + cutinoteid;
	
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if (data.message == 'success')
				{
					
					refreshPage('<?php echo base_url(); ?>datajadwal/?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>');
				}
				
			}
		});
		
		$('#myModal7').modal('hide');
}

function hapusDataCuti()
{
	var uri = '<?php echo base_url(); ?>' + 'datajadwal/hapuscuti/?cutipegawaiid='+ cutipegawaiid;
		console.log(uri);
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if (data.message == 'success')
				{
					
					refreshPage('<?php echo base_url(); ?>datajadwal/?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>');
				}
				
			}
		});
		
		$('#myModal7').modal('hide');
}

function tambahCutiBaru(Tanggal)
{
	tanggal = Tanggal;
	var str, i, j, pengampu, uri;
	setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function(){
						var $target = $('html,body'); 
						$target.animate({scrollTop: $target.height()}, 1000);
						document.getElementById('formTambahCuti').style.display = 'block';
						document.getElementById('formTambahCutiHeader').innerHTML = 'Form Tambah Data Cuti Tanggal : '+tanggal;
						document.getElementById('formTambahCutiFooter').innerHTML = '<button type="button" class="btn btn-primary" data-toggle="tooltip" title="Tambah Data Cuti" style="margin-right: 5px;" onclick="saveCutiNew();"><i class="fa fa-save"></i> Simpan</button>';
					}, 300);
					document.getElementById('formTambahCuti').className = 'pesanmuncul';
				}, 300);
				document.getElementById('formTambahCuti').style.display = 'none';
			}, 300);
			document.getElementById('formTambahCuti').className = 'pesanhilang';
		}, 300);
}

function tambahDataCutiBaru()
{
		uri = '';
		var uri = '<?php echo base_url(); ?>' + 'jadwal/ambilAllNotCuti/'+<?php echo $thisMonth; ?>+'/'+<?php echo $thisYear; ?>;
		
		$('#myModal').modal('show');
		setTimeout(function(){
				$('#myModal').modal('show');
				$.ajax({
					type: 'get',
					url: uri,
					dataType: 'json',
					success: function (data) {
						
						if(data[0].number != 0)
						{
							$('#example4').DataTable().clear();				
							i = 0;
							j = 1;
							str = '';
							while (i < data.length)
							{
								
								var rowIndex = $('#example4').DataTable().row.add([data[i].pegawaiNIP,data[i].pegawaiName]).draw();
								
								var row = $('#example4').dataTable().fnGetNodes(rowIndex);
								$(row).attr('id', data[i].pegawaiID+';'+data[i].pegawaiName);
								
								$(row).attr('style', 'cursor:pointer;');
								$(row).attr('onclick', 'pilihPegawai(this.id);');					
								
												
								i++;
								j++;
							}
							//$('#example4').DataTable().;
							//$('#example4').dataTable();
							//document.getElementById('tableWI').innerHTML = str;
							
							
							
							if(document.getElementById(idPegawaiBefore) != null)
							{
								document.getElementById(idPegawaiBefore).style.backgroundColor = "#fff";
							}
						}
					}
				});
				
				setTimeout(function(){
					$('#myModal').modal('hide');
					setTimeout(function(){
						$('#myModal4').modal('show');
					}, 800);
				}, 3900);		
		}, 1);
}

function pilihPegawai(id)
{
	
	if(idPegawaiBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idPegawaiBefore = id;
		idPegawai = id;
	}
	else
	{
		if(document.getElementById(idPegawaiBefore) != null)
		{
			document.getElementById(idPegawaiBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idPegawaiBefore = id;
		idPegawai = id;
	}
	$("#btnPilihPegawai").removeAttr("disabled");
}

function pilihPegawaiOk()
{
	arrSplit = idPegawai.split(";");
	console.log(arrSplit);
	pegawaiid = arrSplit[0];
	pegawainame = arrSplit[1];
	if(pegawai.length == 0)
	{
		pegawai.push({'pegawaiid':pegawaiid, 'pegawainame':pegawainame});
	}
	else
	{
		pegawai.pop();
		pegawai.push({'pegawaiid':pegawaiid, 'pegawainame':pegawainame});
	}
	
	document.getElementById('pegawaiName').value = pegawainame;
	$('#myModal4').modal('toggle');
}


function saveCutiNew()
{
	jmlhari = document.getElementById('jmlHariNew').value;
	if(jmlhari == 0)
	{
		alert('Hari Tidak Boleh Bernilai 0');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>' + 'datajadwal/tambahcuti/?pegawaiid='+ pegawaiid + '&tanggal=' +tanggal + '&cutinoteid=' + cutinoteid + '&jmlhari='+jmlhari;
		console.log(uri);
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if (data.message == 'success')
				{
					
					refreshPage('<?php echo base_url(); ?>datajadwal/?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>');
				}
				
			}
		});
		
		$('#myModal6').modal('hide');
	}
}
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Loading</h4>
      </div>
      <div class="modal-body" style="text-align:center;">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="width:100%">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Instruktur</h4> 
						
			</div>
			<div class="modal-body">
				<table id="example4" class="table table-bordered table-hover" style="overflow:auto;">
					<thead>
					<tr>
					  <th>NIP</th>
					  <th>Nama</th>
					</tr>
					
					</thead>
					<tbody id="tableWI">
						
					</tbody>
					<tfoot>
					<tr>
					  
					</tr>
					</tfoot>
					</table>						
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" disabled id="btnPilihPegawai" onclick="pilihPegawaiOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Cuti</h4>
			</div>
			<div class="modal-body">
				<h4><i class="fa fa-calendar"></i> Cuti</h4>
						<select id="cutiNoteName" class="form-control" onchange="pilihReason(this.value)">
							<?php
								if ($cutiNotes)
								{
									$i = 0;
									foreach($cutiNotes as $cn)
									{
										if($i == 0)
										{
											?>
											<script>pilihReason('<?php echo $cn->cutiNoteID; ?>');</script>
											<?php
										}
										?>
										<option value="<?php echo $cn->cutiNoteID; ?>"><?php echo $cn->cutiNoteName; ?></option>
										<?php
										$i++;
									}
								}
							?>						
						</select>
						<div class="col-xs-12">&nbsp</div>
						
						<div class="form-group">
                            <label>Jumlah Hari</label>
                            <input class="form-control" type="number" name="jmlHari" placeholder="1" id="jmlHari" min="1" max="" value = "1" style="width: 100px;"> 
                        </div>
											
			</div>
			<div class="modal-footer" id="modalFooter">
				
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabelUpdate">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabelUpdate">Cuti</h4>
			</div>
			<div class="modal-body">
				<h4><i class="fa fa-calendar"></i> Cuti</h4>
						<select id="cutiNoteNameUpdate" class="form-control" onchange="pilihReason(this.value)">
							<?php
								if ($cutiNotes)
								{
									$i = 0;
									foreach($cutiNotes as $cn)
									{
										?>
										<option value="<?php echo $cn->cutiNoteID; ?>"><?php echo $cn->cutiNoteName; ?></option>
										<?php
										$i++;
									}
								}
							?>						
						</select>
						<div class="col-xs-12">&nbsp</div>
						
						
											
			</div>
			<div class="modal-footer" id="modalFooterUpdate">
				
			</div>
		</div>
	</div>
</div>

<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
		<h3>
			Penugasan
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>datajadwal/?month=<?php echo $thisMonth;?>&year=<?php echo $thisYear;?>');" style="cursor:pointer;"><i class="fa fa-calendar"></i> Kalender Penugasan</a></li>
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

              <h3 class="box-title">Data Penugasan WI : Periode <?php echo $monthName; ?> - <?php echo $thisYear; ?></h3>

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
					  <td style="width:300px!important;">Nama WI</td>
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
					  <td style="width:80px!important;">Total Jamlat</td>
					</tr>
					<tr>
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
						<th>&nbsp</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						
						if($pegawais)
						{
							$h = 1;
							foreach($pegawais as $pegawai)
							{
								?>
								<tr>
								<td><?php echo $h; ?></td>
								<?php
								if($pegawai->isWI == '1')
								{
									?>
									<td><strong><?php echo $pegawai->pegawaiName; ?></strong>
								</td>
									<?php
								}
								else
								{
									?>
									<td><?php echo $pegawai->pegawaiName; ?>
									</td>
									<?php
								}
								?>
								
								
								
								<?php
								
								$i = 0;
								$total = 0;
								while ($i < $length)
								{
									if($Day[$i] == '7')
									{
										?>
										<td style="background-color:#9E9E9E;"><a href="#" data-toggle="tooltip" data-placement="top" title="Hari Minggu"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
										<?php	
									}
									else if ($pegawai->cal[$i] == false)
									{
										?>
										<td>&nbsp</td>
										<?php
									}
									else
									{	
										foreach($pegawai->cal[$i] as $calen)
										{
											if((int)$calen->enddate > 1)
											{
												$total += (int)$calen->enddate;
													?>
													<td style="background-color:#B2DFDB;padding:0!important;text-align:center;"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;cursor:pointer;" data-html="true"  data-toggle="tooltip" data-placement="top" title="<?php echo substr($calen->kaldikID, 5, 3); ?><br/><?php echo $calen->kaldikDesc; ?><br/><?php echo $calen->mataAjarName; ?>"><?php echo (int)$calen->enddate; ?></div></td>
													
												<?php
												
											}
											else if ($calen->enddate == 'holiday')
											{
												?>
												<td style="background-color:#F44336;padding:0!important;"><a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $calen->holidayDesc; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
												<?php
											}
											else if ($calen->enddate == 'cuti')
											{
												?>
												<td style="background-color:#F44336;padding:0!important;"><a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $calen->cutiNoteName; ?>" onclick="ubahCuti('<?php echo $calen->cutiPegawaiID;?>','<?php echo $calen->cutiNoteID; ?>', '<?php echo $calen->pegawaiID; ?>', '<?php echo $Date[$i]; ?>','<?php echo $pegawai->pegawaiName; ?>')"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;"><?php echo $calen->cutiNoteDesc; ?></div></a></td>
												<?php
											}
											else
											{
												?>
												<td style="background-color:#FFF;padding:0!important;text-align:center;"><a href="#" onclick="tambahCuti('<?php echo $pegawai->pegawaiID; ?>', '<?php echo $Date[$i]; ?>', '<?php echo $pegawai->pegawaiName; ?>')"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
												<?php
											}
										}
										
									}
									
									$i++;
								}
								
								?>
								<td><?php echo $total;?></td>
								</tr>
								<?php
								$h++;
							}
						}
						
						?>
					</tbody>
					<tfoot>
						<tr>
							<th>&nbsp</th>
							<th>Tambah Pegawai Cuti</th>
							<?php
							$i = 0;
							while ($i < $length)
							{
								
								?>
								<td style="background-color:#DEDEDE;padding:0!important;text-align:center;"><a href="#" onclick="tambahCutiBaru('<?php echo $Date[$i]; ?>')"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
								<?php
								$i++;
							}
							?>
							<td>&nbsp</td>
						</tr>
					</tfoot>
					</table>
				</div>
				
            <div class="box-footer clearfix no-border">
              
            </div>
          </div>
		  </div>
		  
		  <div class="col-xs-12"></div>
		<div id="formTambahCuti" style="display:none;" class="col-xs-12">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-primary">
				<div class="box-header">
				  <i class="ion ion-clipboard"></i>

				  <h3 class="box-title" id="formTambahCutiHeader"></h3>

				  <div class="box-tools pull-right">
					<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
					  <i class="fa fa-minus"></i></button>
				  </div>
				</div>
				
				<div class="box-body">
					<label>Instruktur</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					<div class="form-group input-group">
						<input class="form-control" type="text" name="pegawaiName" id="pegawaiName" readonly="true">
						<span class="input-group-btn"><button class="btn btn-primary" onclick="tambahDataCutiBaru();"><i class="fa fa-search"></i></button></span>
					</div>
					<label>Alasan Tidak Mengajar</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					<div class="form-group">
						<!-- <input class="form-control" type="text" name="biayaName" id="biayaName" readonly="true">
						<span class="input-group-btn"><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i></button></span> -->
						<select id="cutiNoteNameNew" class="form-control" onchange="pilihReason(this.value)">
							<?php
								if ($cutiNotes)
								{
									$i = 0;
									foreach($cutiNotes as $cn)
									{
										if($i = 0)
										{
											?>
											<script>pilihReason('<?php echo $cn->cutiNoteID; ?>');</script>
											<?php
										}
										?>
										<option value="<?php echo $cn->cutiNoteID; ?>"><?php echo $cn->cutiNoteName; ?></option>
										<?php
										$i++;
									}
								}
							?>						
						</select>
					</div>
					<div class="col-xs-12">&nbsp</div>
						
					<div class="form-group">
						<label>Jumlah Hari</label>
                        <input class="form-control" type="number" name="jmlHariNew" placeholder="1" id="jmlHariNew" min="1" max="" value = "1" style="width: 100px;"> 
                    </div>
					
				
				</div>
				
				<div class="box-footer clearfix no-border" id="formTambahCutiFooter">
				  
				</div>
			  </div>
			  </div>
		</div>  
		</div>
	  </div>
	  
		
	 </div>
    </section>
    
 
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
		uri = '<?php echo base_url();?>datajadwal?month='+bulan+'&year='+tahun;
		refreshPage(uri);
	}
	
	function previousMonth()
	{
		var temp, bulan, tahun, uri;
		bulan = <?php echo $thisMonth; ?>;
		tahun = <?php echo $thisYear; ?>;
		temp = bulan--;
		$("#btnPrevious").removeAttr("disabled");
		uri = '<?php echo base_url();?>datajadwal?month='+bulan+'&year='+tahun;
		refreshPage(uri);	
	}
	
	
	
	function setSelectValue (id, val)
	{
		document.getElementById(id).value = val;
	}
	setSelectValue('selectBulan', <?php echo $thisMonth; ?>);
	setSelectValue('selectTahun', <?php echo $thisYear; ?>);
	
	//$('#example2').dataTable();
	//$('#example3').dataTable();
	
	function onTampil()
	{
		var bulan = $('#selectBulan').val();
		var tahun = $('#selectTahun').val();
		var uri = '';
		
		uri = '<?php echo base_url();?>datajadwal?month='+bulan+'&year='+tahun;		
		
		refreshPage(uri);
	}
 </script>
 <script src="<?php echo base_url();?>assets/lte/plugins/dragscroll/dragscroll.js"></script>
 <script src="<?php echo base_url();?>assets/lte/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/lte/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>assets/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Sparkline 
<script src="<?php echo base_url();?>assets/lte/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/morris/morris.min.js"></script>-->
<!-- Sparkline 
<script src="<?php echo base_url();?>assets/lte/plugins/sparkline/jquery.sparkline.min.js"></script>-->
<!-- jvectormap 
<script src="<?php echo base_url();?>assets/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>-->
<!-- jQuery Knob Chart 
<script src="<?php echo base_url();?>assets/lte/plugins/knob/jquery.knob.js"></script>-->
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/lte/plugins/moment/moment.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/timepicker/bootstrap-timepicker.js"></script>
<!-- Bootstrap WYSIHTML5 
<script src="<?php echo base_url();?>assets/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>-->
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/lte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/lte/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) 
<script src="<?php echo base_url();?>assets/lte/dist/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/lte/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/ckeditor/ckeditor.js"></script>
<script>
/*
  $(function () {
    $("#example1").DataTable();
	$("#example2").DataTable();
	$("#example3").DataTable();
	$("#example4").DataTable();
	$("#example5").DataTable();
	$("#example6").DataTable();
    
	$('#example7').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
  });
*/ 
  
</script>
</body>
</html>