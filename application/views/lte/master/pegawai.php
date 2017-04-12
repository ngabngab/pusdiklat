<script>
var golonganid, golonganname, pangkatid, pangkatname, jabatanid, jabatanshortname, unitid, unitname, elid, elshortname, pegawaiid, pegawainame, pegawainip, arrSplit, mataajarid, mataajarname;

var idGolonganBefore, idGolongan;
var golongan = [];
idGolonganBefore = idGolongan = '';

var idPangkatBefore, idPangkat;
var pangkat = [];
idPangkatBefore = idPangkat = '';

var idJabatanBefore, idJabatan;
var jabatan = [];
idJabatanBefore = idJabatan = '';

var idUnitBefore, idUnit;
var unit = [];
idUnitBefore = idUnit = '';

var idElBefore, idEl;
var el = [];
idElBefore = idEl = '';

function pilihGolongan(id)
{
	if(idGolonganBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idGolonganBefore = id;
		idGolongan = id;
	}
	else
	{
		if(document.getElementById(idGolonganBefore) != null)
		{
			document.getElementById(idGolonganBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idGolonganBefore = id;
		idGolongan = id;
	}
	$("#btnPilihGolongan").removeAttr("disabled");
	
}

function pilihGolonganOk()
{
	var i;
	
	arrSplit = idGolongan.split(";");
	golonganid = arrSplit[0];
	golonganname = arrSplit[1];
	
	if(golongan.length == 0)
	{
		golongan.push({'golonganid':golonganid, 'golonganname':golonganname});
	}
	else
	{
		golongan.pop();
		golongan.push({'golonganid':golonganid, 'golonganname':golonganname});
	}
	document.getElementById('golonganName').value = golonganname;
	$('#myModal1').modal('toggle');
}


function pilihPangkat(id)
{
	if(idPangkatBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idPangkatBefore = id;
		idPangkat = id;
	}
	else
	{
		if(document.getElementById(idPangkatBefore) != null)
		{
			document.getElementById(idPangkatBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idPangkatBefore = id;
		idPangkat = id;
	}
	$("#btnPilihPangkat").removeAttr("disabled");
	
}

function pilihPangkatOk()
{
	var i;
	
	arrSplit = idPangkat.split(";");
	pangkatid = arrSplit[0];
	pangkatname = arrSplit[1];
	
	if(pangkat.length == 0)
	{
		pangkat.push({'pangkatid':pangkatid, 'pangkatname':pangkatname});
	}
	else
	{
		pangkat.pop();
		pangkat.push({'pangkatid':pangkatid, 'pangkatname':pangkatname});
	}
	document.getElementById('pangkatName').value = pangkatname;
	$('#myModal2').modal('toggle');
}


function pilihJabatan(id)
{
	if(idJabatanBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idJabatanBefore = id;
		idJabatan = id;
	}
	else
	{
		if(document.getElementById(idJabatanBefore) != null)
		{
			document.getElementById(idJabatanBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idJabatanBefore = id;
		idJabatan = id;
	}
	$("#btnPilihJabatan").removeAttr("disabled");
	
}

function pilihJabatanOk()
{
	var i;
	
	arrSplit = idJabatan.split(";");
	jabatanid = arrSplit[0];
	jabatanshortname = arrSplit[1];
	
	if(jabatan.length == 0)
	{
		jabatan.push({'jabatanid':jabatanid, 'jabatanshortname':jabatanshortname});
	}
	else
	{
		jabatan.pop();
		jabatan.push({'jabatanid':jabatanid, 'jabatanshortname':jabatanshortname});
	}
	document.getElementById('jabatanShortName').value = jabatanshortname;
	$('#myModal3').modal('toggle');
}


function pilihUnit(id)
{
	if(idUnitBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idUnitBefore = id;
		idUnit = id;
	}
	else
	{
		if(document.getElementById(idUnitBefore) != null)
		{
			document.getElementById(idUnitBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idUnitBefore = id;
		idUnit = id;
	}
	$("#btnPilihUnit").removeAttr("disabled");	
}

function pilihUnitOk()
{
	var i;
	
	arrSplit = idUnit.split(";");
	unitid = arrSplit[0];
	unitname = arrSplit[1];
	
	if(unit.length == 0)
	{
		unit.push({'unitid':unitid, 'unitname':unitname});
	}
	else
	{
		unit.pop();
		unit.push({'unitid':unitid, 'unitname':unitname});
	}
	document.getElementById('unitName').value = unitname;
	$('#myModal4').modal('toggle');
}

function pilihEl(id)
{
	if(idElBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idElBefore = id;
		idEl = id;
	}
	else
	{
		if(document.getElementById(idElBefore) != null)
		{
			document.getElementById(idElBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idElBefore = id;
		idEl = id;
	}
	$("#btnPilihEl").removeAttr("disabled");
	
}

function pilihElOk()
{
	var i;
	
	arrSplit = idEl.split(";");
	elid = arrSplit[0];
	elname = arrSplit[1];
	
	if(el.length == 0)
	{
		el.push({'elid':elid, 'elname':elname});
	}
	else
	{
		el.pop();
		el.push({'elid':unitid, 'elname':elname});
	}
	document.getElementById('educationLevelShortName').value = elname;
	$('#myModal5').modal('toggle');
}

function tambahData()
{
	setTimeout(function(){	
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					$('html,body').scrollTop(0);
					document.getElementById('formTambahPegawai').style.display = 'block';
					document.getElementById('titleBox').innerHTML = 'Tambah Data Pegawai';
					if(golongan.length > 0)
					{
						golongan.pop();
					}
					
					if(pangkat.length > 0)
					{
						pangkat.pop();
					}
					
					if(jabatan.length > 0)
					{
						jabatan.pop();
					}
					
					if(unit.length > 0)
					{
						unit.pop();
					}
					
					if(el.length > 0)
					{
						el.pop();
					}
					
					document.getElementById('pegawaiNIP').value = '';
					document.getElementById('pegawaiName').value = '';
					document.getElementById('pegawaiDegreeFirst').value = '';
					document.getElementById('pegawaiDegreeLast').value = '';
					document.getElementById('pegawaiPlaceofBirth').value = '';
					document.getElementById('golonganName').value = '';
					document.getElementById('pangkatName').value = '';
					document.getElementById('jabatanShortName').value = '';
					document.getElementById('unitName').value = '';
					document.getElementById('educationLevelShortName').value = '';
					document.getElementById('pegawaiHomeAddress').value = '';
					document.getElementById('pegawaiOfficeAddress').value = '';
					document.getElementById('pegawaiOfficePhone').value = '';
					document.getElementById('pegawaiMobilePhone').value = '';
					document.getElementById('modalFooter').innerHTML = '<button type="button" class="btn btn-primary btn-sm" onclick="tambahDataPegawai();"><i class="fa fa-save" ></i> Tambah Pegawai</button>';
				}, 300);
				document.getElementById('formTambahPegawai').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahPegawai').style.display = 'none';
		}, 300);
		document.getElementById('formTambahPegawai').className = 'pesanhilang';
	}, 300);
}

function viewPengampu(id)
{
	var i, str, j;
	arrSplit = id.split(';');
	pegawaiid = arrSplit[1];
	pegawainip = arrSplit[2];
	pegawainame = arrSplit[3];
	
	setTimeout(function(){	
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('boxTablePengampu').style.display = 'block';
					document.getElementById('titleBoxPengampu').innerHTML = 'Data mata ajar pengampu : ' + pegawainame;
					var uri = '<?php echo base_url(); ?>pegawai/pengampu/'+pegawaiid;
					$.ajax({
						type: 'get',
						url: uri,
						dataType: 'json',
						success: function (data) {
							if(data[0].number != 0)
							{
								i = 0;
								str = '';
								j = 0;
								while (i < data.length)
								{
									j = i  + 1 ;
									str += '<tr><td>'+j+'</td><td>'+data[i].mataAjarName+'</td><td>'+data[i].jamLat+'</td><td><button type="button" class="btn btn-warning" id="ubahpengampu;'+data[i].id+';'+data[i].mataAjarID+';'+data[i].mataAjarName+'" onclick="ubahPengampu(this.id);" data-toggle="tooltip" data-html="true" data-placement="top" title="Ubah Data"><i class="fa fa-pencil"></i></button><button type="button" class="btn btn-danger" id="hapuspengampu;'+data[i].id+';'+data[i].mataAjarID+';'+data[i].mataAjarName+'" onclick="ubahPengampu(this.id);" data-toggle="tooltip" data-html="true" data-placement="top" title="Ubah Data"><i class="fa fa-pencil"></i></button></td></tr>';
									i++;
								}
								document.getElementById('bodyTablePengampu').innerHTML = str;
							}
						}
					});
				}, 300);
				document.getElementById('boxTablePengampu').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahPegawai').style.display = 'none';
			document.getElementById('boxTablePengampu').style.display = 'none';
		}, 300);
		document.getElementById('formTambahPegawai').className = 'pesanhilang';
		document.getElementById('boxTablePengampu').className = 'pesanhilang';
	}, 300);
}


</script>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Golongan</h4>
			</div>
			<div class="modal-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Golongan Name</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						if($golongans)
						{
							foreach($golongans as $golongan)
							{
								?>
								<tr id="<?php echo $golongan->golonganID;?>;<?php echo $golongan->golonganName;?>" onclick="pilihGolongan(this.id)" style="cursor: pointer;">
									<td><?php echo $golongan->golonganName;?></td>
								</tr>
								<?php
							}
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihGolongan" onclick="pilihGolonganOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Golongan</h4>
			</div>
			<div class="modal-body">
				<table id="example2" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Jenis Pangkat</th>
					  <th>Nama Pangkat</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						if($pangkats)
						{
							foreach($pangkats as $pangkat)
							{
								?>
								<tr id="<?php echo $pangkat->pangkatID;?>;<?php echo $pangkat->pangkatName;?>" onclick="pilihPangkat(this.id)" style="cursor: pointer;">
									<td><?php echo $pangkat->pangkatTypeName;?></td>
									<td><?php echo $pangkat->pangkatName;?></td>
								</tr>
								<?php
							}
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihPangkat" onclick="pilihPangkatOk();">Pilih</button>
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
				<h4 class="modal-title" id="myModalLabel">List Jabatan</h4>
			</div>
			<div class="modal-body">
				<table id="example3" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Jabatan Grup Shortname</th>
					  <th>Jabatan Shortname</th>
					  <th>Jabatan Fullname</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						if($jabatans)
						{
							foreach($jabatans as $jabatan)
							{
								?>
								<tr id="<?php echo $jabatan->jabatanID;?>;<?php echo $jabatan->jabatanShortName;?>" onclick="pilihJabatan(this.id)" style="cursor: pointer;">
									<td><?php echo $jabatan->jabatanGroupShortName;?></td>
									<td><?php echo $jabatan->jabatanShortName;?></td>
									<td><?php echo $jabatan->jabatanFullName;?></td>
								</tr>
								<?php
							}
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihJabatan" onclick="pilihJabatanOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Unit</h4>
			</div>
			<div class="modal-body">
				<table id="example4" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Nama Instansi</th>
					  <th>Nama Unit</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						if($units)
						{
							foreach($units as $unit)
							{
								?>
								<tr id="<?php echo $unit->unitID;?>;<?php echo $unit->unitName;?>" onclick="pilihUnit(this.id)" style="cursor: pointer;">
									<td><?php echo $unit->instansiName;?></td>
									<td><?php echo $unit->unitName;?></td>
								</tr>
								<?php
							}
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihUnit" onclick="pilihUnitOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Education Level</h4>
			</div>
			<div class="modal-body">
				<table id="example5" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Education Level Shortname</th>
					  <th>Education Level Fullname</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						if($els)
						{
							foreach($els as $el)
							{
								?>
								<tr id="<?php echo $el->educationLevelID;?>;<?php echo $el->educationLevelShortName;?>" onclick="pilihEl(this.id)" style="cursor: pointer;">
									<td><?php echo $el->educationLevelShortName;?></td>
									<td><?php echo $el->educationLevelFullName;?></td>
								</tr>
								<?php
							}
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihEl" onclick="pilihElOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>

<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
		<h3>
			Master Pegawai
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>pegawai');" style="cursor:pointer;"><i class="fa fa-archive"></i> Pegawai</a></li>
		</ol>
      <div class="row">
		<div class="col-xs-12">
          <!-- Custom Tabs -->
          
					<div id="formTambahPegawai" style="display:none;">
						<div class="row">
						<div class="col-xs-12">
							<div class="box box-primary">
							<div class="box-header">
							  <i class="ion ion-clipboard"></i>

							  <h3 class="box-title" id="titleBox"></h3>

							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>   
							  </div>
							</div>
							
							<div class="box-body">	
									<label>NIP</label>
									<div class="form-group">
										<input class="form-control" type="text" name="pegawaiNIP" id="pegawaiNIP">
									</div>
												
									<label>Nama Pegawai</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group">
										<input class="form-control" type="text" name="pegawaiName" id="pegawaiName">
										<span class="input-group-btn">
									</div>
									
									<label>Gelar Di Depan Nama</label>
									<div class="form-group">
										<input class="form-control" type="text" name="pegawaiDegreeFirst" id="pegawaiDegreeFirst">
										<span class="input-group-btn">
									</div>
									
									<label>Gelar Di Belakang Nama</label>
									<div class="form-group">
										<input class="form-control" type="text" name="pegawaiDegreeLast" id="pegawaiDegreeLast">
										<span class="input-group-btn">
									</div>
									
									<label>Tempat Lahir</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group">
										<input class="form-control" type="text" name="pegawaiPlaceofBirth" id="pegawaiPlaceofBirth">
										<span class="input-group-btn">
									</div>
									
									<label>Tanggal Lahir</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="input-group date">
										  <div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
											<input type="text" class="form-control pull-right" id="datepicker" readonly="true">
									</div>
									
									<div class="form-group">
									<label>Gender</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
										<select class="form-control" id="pegawaiGender">
										  <option value="1">Pria</option>
										  <option value="0">Wanit</option>
										</select>
									</div>
									
									<div class="form-group">
									<label>Agama</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
										<select class="form-control" id="pegawaiReligion">
											<?php
												if($agamas)
												{
													foreach($agamas as $agama)
													{
														?>
														<option value="<?php echo $agama->religionID; ?>"><?php echo $agama->religionName; ?></option>
														<?php
													}
												}
											?>
										</select>
									</div>
									
									<label>Golongan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group input-group">
										<input class="form-control" type="text" name="golonganName" id="golonganName" readonly="true">
										<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal1"><i class="fa fa-search"></i></button></span>
									</div>
									
									<label>Pangkat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group input-group">
										<input class="form-control" type="text" name="pangkatName" id="pangkatName" readonly="true">
										<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search"></i></button></span>
									</div>
									
									<label>Jabatan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group input-group">
										<input class="form-control" type="text" name="jabatanShortName" id="jabatanShortName" readonly="true">
										<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i></button></span>
									</div>
									
									<label>Unit</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group input-group">
										<input class="form-control" type="text" name="unitName" id="unitName" readonly="true">
										<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal4"><i class="fa fa-search"></i></button></span>
									</div>
									
									<label>Level Pendidikan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group input-group">
										<input class="form-control" type="text" name="educationLevelShortName" id="educationLevelShortName" readonly="true">
										<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal5"><i class="fa fa-search"></i></button></span>
									</div>
									
									<div class="form-group">
										<label>Alamat Rumah</label>
										 <textarea name="pegawaiHomeAddress" id="pegawaiHomeAddress" class="form-control" rows="3"></textarea>
									</div>
									
									<div class="form-group">
										<label>Alamat Kantor</label>
										 <textarea name="pegawaiOfficeAddress" id="pegawaiOfficeAddress" class="form-control" rows="3"></textarea>
									</div>
									
									<label>Telepon Kantor</label>
									<div class="form-group">
										<input class="form-control" type="text" name="pegawaiOfficePhone" id="pegawaiOfficePhone" pattern="[0-9]">
									</div>
									
									<label>Nomor Handphone</label>
									<div class="form-group">
										<input class="form-control" type="text" name="pegawaiMobilePhone" id="pegawaiMobilePhone" pattern="[0-9]">
									</div>
									
									<div class="form-group">
									<label>Memiliki NIP ?</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
										<select class="form-control" id="pegawaiHaveNIP">
										  <option value="1">Ya</option>
										  <option value="0">Tidak</option>
										</select>
									</div>
									
									<div class="form-group">
									<label>PNS ?</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
										<select class="form-control" id="pegawaiIsPNS">
										  <option value="1">Ya</option>
										  <option value="0">Tidak</option>
										</select>
									</div>
									
									<div class="form-group">
									<label>PUSDIKLATWAS ?</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
										<select class="form-control" id="pegawaiIsPusdiklatwas">
										  <option value="1">Ya</option>
										  <option value="0">Tidak</option>
										</select>
									</div>
									
									<div class="form-group">
									<label>WI ?</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
										<select class="form-control" id="pegawaiIsWI">
										  <option value="1">Ya</option>
										  <option value="0">Tidak</option>
										</select>
									</div>
									
									<div class="form-group">
									<label>Aktif ?</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
										<select class="form-control" id="pegawaiIsActive">
										  <option value="1">Ya</option>
										  <option value="0">Tidak</option>
										</select>
									</div>
							</div>
							<div class="box-footer clearfix no-border" id="modalFooter">
							  
							</div>
						  </div>
						  </div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12">&nbsp</div>
					</div>
					
					  <div class="row">
						<div class="col-xs-12">
							<div class="box box-primary">
							<div class="box-header">
							  <i class="ion ion-clipboard"></i>

							  <h3 class="box-title">Data Pegawai</h3>

							  <div class="box-tools pull-right">
								
								<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
								  <i class="fa fa-minus"></i></button>
								  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahData();">
								  <i class="fa fa-plus" ></i> Tambah Pegawai</button> 
							  </div>
							</div>
							
							<div class="box-body">
								<div class="col-xs-12" style="overflow:scroll;margin:0!important;">
								<table id="example7" class="table table-bordered" cellspacing="0">
									<thead>
										<tr>
											<td>NIP</td>
											<td>Nama</td>
											<td>Gelar Depan Nama</td>
											<td>Gelar Belakang Nama</td>
											<td>Tempat Lahir</td>
											<td>Tanggal Lahir</td>
											<td>Gender</td>
											<td>Agama</td>
											<td>Golongan</td>
											<td>Pangkat</td>
											<td>Jabatan</td>
											<td>Unit</td>
											<td>Level Pendidikan</td>
											<td>Alamat Rumah</td>
											<td>Alamat Kantor</td>
											<td>Telepon Kantor</td>
											<td>Nomor Handphone</td>
											<td>Email</td>
											<td>Memiliki NIP</td>
											<td>PNS</td>
											<td>PUSDIKLATWAS</td>
											<td>WI</td>
											<td>Aktif</td>
											<td>UBAH / HAPUS</td>
											<td>Mengampu Mata Ajar</td>
										</tr>
									</thead>
									<tbody>
										<?php
										if ($pegawais)
										{
											foreach ($pegawais as $pegawai)
											{
												if($pegawai->pegawaiGender == 1)
												{
													$gender = 'Pria';
												}
												else
												{
													$gender = 'Wanita';
												}
												
												if($pegawai->pegawaiHaveNIP == 1)
												{
													$haveNip = 'Ya';
												}
												else
												{
													$haveNip = 'Tidak';
												}
												
												if($pegawai->pegawaiIsPNS == 1)
												{
													$isPNS = 'Ya';
												}
												else
												{
													$isPNS = 'Tidak';
												}
												
												if ($pegawai->isPusdiklatwas == 1)
												{
													$isPusdiklatwas = 'Ya';
												}
												else
												{
													$isPusdiklatwas = 'Tidak';
												}
												
												if($pegawai->isWI == 1)
												{
													$isWI = 'Ya';
												}
												else
												{
													$isWI = 'Tidak';
												}
												
												if($pegawai->isActive == 1)
												{
													$isActive = 'Ya';
												}
												else
												{
													$isActive = 'Tidak';
												}
												?>
												<tr>
													<td><?php echo $pegawai->pegawaiNIP; ?></td>
													<td><?php echo $pegawai->pegawaiName; ?></td>
													<td><?php echo $pegawai->pegawaiDegreeFirst; ?></td>
													<td><?php echo $pegawai->pegawaiDegreeLast; ?></td>
													<td><?php echo $pegawai->pegawaiPlaceofBirth; ?></td>
													<td><?php echo $pegawai->pegawaiDateofBirth; ?></td>
													<td><?php echo $gender; ?></td>
													<td><?php echo $pegawai->religionName; ?></td>
													<td><?php echo $pegawai->golonganName; ?></td>
													<td><?php echo $pegawai->pangkatName; ?></td>
													<td><?php echo $pegawai->jabatanShortName; ?></td>
													<td><?php echo $pegawai->unitName; ?></td>
													<td><?php echo $pegawai->educationLevelShortName; ?></td>
													<td><?php echo $pegawai->pegawaiHomeAddress; ?></td>
													<td><?php echo $pegawai->pegawaiOfficeAddress; ?></td>
													<td><?php echo $pegawai->pegawaiOfficePhone; ?></td>
													<td><?php echo $pegawai->pegawaiMobilePhone; ?></td>
													<td><?php echo $pegawai->pegawaiEmail; ?></td>
													<td><?php echo $haveNip; ?></td>
													<td><?php echo $isPNS; ?></td>
													<td><?php echo $isPusdiklatwas; ?></td>
													<td><?php echo $isWI; ?></td>
													<td><?php echo $isActive; ?></td>
													<td><button type="button" class="btn btn-warning" id="ubah;<?php echo $pegawai->pegawaiID; ?>;<?php echo $pegawai->pegawaiNIP; ?>;<?php echo $pegawai->pegawaiName; ?>;<?php echo $pegawai->pegawaiDegreeFirst; ?>;<?php echo $pegawai->pegawaiDegreeLast; ?>;<?php echo $pegawai->pegawaiGender; ?>;<?php echo $pegawai->religionID; ?>;<?php echo $pegawai->religionName; ?>;<?php echo $pegawai->golonganID; ?>;<?php echo $pegawai->golonganName; ?>;<?php echo $pegawai->pangkatID; ?>;<?php echo $pegawai->pangkatName; ?>;<?php echo $pegawai->jabatanID; ?>;<?php echo $pegawai->jabatanShortName; ?>;<?php echo $pegawai->unitID; ?>;<?php echo $pegawai->unitName; ?>;<?php echo $pegawai->educationLevelID; ?>;<?php echo $pegawai->educationLevelShortName; ?>;<?php echo $pegawai->pegawaiHomeAddress; ?>;<?php echo $pegawai->pegawaiOfficeAddress; ?>;<?php echo $pegawai->pegawaiOfficePhone; ?>;<?php echo $pegawai->pegawaiMobilePhone; ?>;<?php echo $pegawai->pegawaiEmail; ?>;<?php echo $pegawai->pegawaiHaveNIP; ?>;<?php echo $pegawai->pegawaiIsPNS; ?>;<?php echo $pegawai->isPusdiklatwas; ?>;<?php echo $pegawai->isWI; ?>;<?php echo $pegawai->isActive; ?>"><i class="fa fa-pencil"></i></button><button type="button" class="btn btn-danger" id="hapus;<?php echo $pegawai->pegawaiID; ?>;<?php echo $pegawai->pegawaiNIP; ?>;<?php echo $pegawai->pegawaiName; ?>;<?php echo $pegawai->pegawaiDegreeFirst; ?>;<?php echo $pegawai->pegawaiDegreeLast; ?>;<?php echo $pegawai->pegawaiGender; ?>;<?php echo $pegawai->religionID; ?>;<?php echo $pegawai->religionName; ?>;<?php echo $pegawai->golonganID; ?>;<?php echo $pegawai->golonganName; ?>;<?php echo $pegawai->pangkatID; ?>;<?php echo $pegawai->pangkatName; ?>;<?php echo $pegawai->jabatanID; ?>;<?php echo $pegawai->jabatanShortName; ?>;<?php echo $pegawai->unitID; ?>;<?php echo $pegawai->unitName; ?>;<?php echo $pegawai->educationLevelID; ?>;<?php echo $pegawai->educationLevelShortName; ?>;<?php echo $pegawai->pegawaiHomeAddress; ?>;<?php echo $pegawai->pegawaiOfficeAddress; ?>;<?php echo $pegawai->pegawaiOfficePhone; ?>;<?php echo $pegawai->pegawaiMobilePhone; ?>;<?php echo $pegawai->pegawaiEmail; ?>;<?php echo $pegawai->pegawaiHaveNIP; ?>;<?php echo $pegawai->pegawaiIsPNS; ?>;<?php echo $pegawai->isPusdiklatwas; ?>;<?php echo $pegawai->isWI; ?>;<?php echo $pegawai->isActive; ?>"><i class="fa fa-close"></i></button></td>
													<?php
													if($pegawai->pengampu > 0)
													{
														?>
														<td><button type="button" class="btn btn-primary" id="view;<?php echo $pegawai->pegawaiID; ?>;<?php echo $pegawai->pegawaiNIP; ?>;<?php echo $pegawai->pegawaiName; ?>" onclick="viewPengampu(this.id);" data-toggle="tooltip" data-html="true" data-placement="top" title="Mengampu <?php echo $pegawai->pengampu;?> Mata Ajar"><i class="fa fa-table"></i></button></td>
														<?php
													}
													else
													{
														?>
														<td><button type="button" class="btn btn-warning" id="view;<?php echo $pegawai->pegawaiID; ?>;<?php echo $pegawai->pegawaiNIP; ?>;<?php echo $pegawai->pegawaiName; ?>" onclick="viewPengampu(this.id);" data-toggle="tooltip" data-html="true" data-placement="top" title="Tidak Mengampu Satupun Mata Ajar"><i class="fa fa-table"></i></button></td>
														<?php
													}
													?>
													
												</tr>
												<?php
											}
										}
										?>
									</tbody>
									<tfoot>
									
									</tfoot>
									</table>
									</div>
								</div>
							<div class="box-footer clearfix no-border">
							  
							</div>
						  </div>
						  </div>
					  </div>
					  
					  <div class="row">
						<div class="col-xs-12">&nbsp</div>
					  </div>
					  
					  <div id="formTambahPengampu" style="display:none;">
						<div class="row">
						<div class="col-xs-12">
							<div class="box box-primary">
							<div class="box-header">
							  <i class="ion ion-clipboard"></i>

							  <h3 class="box-title" id="titleBox"></h3>

							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>   
							  </div>
							</div>
							
							<div class="box-body">	
									<label>Mata Ajar</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group input-group">
										<input class="form-control" type="text" name="mataAjarName" id="mataAjarName" readonly="true">
										<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal6"><i class="fa fa-search"></i></button></span>
									</div>
									
									
							</div>
							<div class="box-footer clearfix no-border" id="modalFooter">
							  
							</div>
						  </div>
						  </div>
						</div>
					</div>
					  
					  
					  
					  <div id="boxTablePengampu" style="display:none;">
					  <div class="row">
						<div class="col-xs-12">
							<div class="box box-primary">
							<div class="box-header">
							  <i class="ion ion-clipboard"></i>

							  <h3 class="box-title" id="titleBoxPengampu"></h3>

							  <div class="box-tools pull-right">
								
								<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
								  <i class="fa fa-minus"></i></button>
								  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahPengampu();">
								  <i class="fa fa-plus" ></i> Tambah Mengampu</button> 
							  </div>
							</div>
							
							<div class="box-body">
								<div class="col-xs-12" style="overflow:scroll;margin:0!important;">
								<table id="example8" class="table table-bordered">
									<thead>
									<tr>
									  <td>No</td>
									  <td>Nama Mata Ajar</td>
									  <td>Total Jam Lat</td>
									  <td>Ubah / Hapus</td>
									</tr>
									</thead>
									<tbody id="bodyTablePengampu">
										
									</tbody>
									<tfoot>
									
									</tfoot>
									</table>
									</div>
								</div>
							<div class="box-footer clearfix no-border">
							  
							</div>
						  </div>
						  </div>
					  </div>
					  </div>
			
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		
		
	  
	  
     

    </section>
    
  </div>
  <script>
	var dt = new Date();
	var m = dt.getMonth() + 1;
	dt = dt.getFullYear()+'-'+ m + '-' + dt.getDate();
	document.getElementById('datepicker').value = dt;
	
	$('#example1').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idGolonganBefore != '')
		{
			if(document.getElementById(idGolonganBefore) != null)
			{
				document.getElementById(idGolonganBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	
	$('#example2').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idPangkatBefore != '')
		{
			if(document.getElementById(idPangkatBefore) != null)
			{
				document.getElementById(idPangkatBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	
	
	$('#example3').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idJabatanBefore != '')
		{
			if(document.getElementById(idJabatanBefore) != null)
			{
				document.getElementById(idJabatanBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	
	$('#example4').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idElBefore != '')
		{
			if(document.getElementById(idElBefore) != null)
			{
				document.getElementById(idElBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	
	$('#example7').dataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
	
	
	$('#example8').dataTable({
      "paging": false,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": true
    });
	
	$('#example9').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
	
	$( function() {
			$("#datepicker").datepicker(
			{
				format: 'yyyy-mm-dd',
				autoclose: true,
				defaultDate: dt
			}
			);
	});
	
	/*
	$('#example1').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idKurikulumTypeBefore != '')
		{
			if(document.getElementById(idKurikulumTypeBefore) != null)
			{
				document.getElementById(idKurikulumTypeBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	*/
	
  </script>