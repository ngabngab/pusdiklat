<script>
var arrSplit, kurikulumid, kurikulumname, kurikulumhari, mataajarid, mataajarname, mataajardesc, jamlat;

var harike, jamke, jammulaibiasa, jamselesaibiasa, jammulaijumat, jamselesaijumat, kurikulumrinciid;

var idKurikulumBefore, idKurikulum;
var kurikulum = [];
idKurikulumBefore = idKurikulum = '';


var idMataAjarBefore, idMataAjar;
var mataajar = [];
idMataAjarBefore = idMataAjar = '';
<?php
if($kurikulumid)
	{
		?>
		kurikulum.push({'kurikulumid':<?php echo $kurikulumid; ?>, 'kurikulumname':'<?php echo $kurikulumname; ?>', 'kurikulumhari':<?php echo $kurikulumhari; ?>}); 
		<?php
	}
?>

function pilihMataAjar(id)
{	
	if(idMataAjarBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idMataAjarBefore = id;
		idMataAjar = id;
	}
	else
	{
		if(document.getElementById(idMataAjarBefore) != null)
		{
			document.getElementById(idMataAjarBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idMataAjarBefore = id;
		idMataAjar = id;
	}
	$("#btnPilihMataAjar").removeAttr("disabled");
}

function pilihMataAjarOk()
{
	arrSplit = idMataAjar.split(";");
	mataajarid = arrSplit[0];
	mataajarname = arrSplit[1];
	mataajardesc = arrSplit[2];
	jamlat = arrSplit[3];
	
	if(mataajar.length == 0)
	{
		mataajar.push({'mataajarid':mataajarid, 'mataajarname':mataajarname, 'mataajardesc':mataajardesc, 'jamlat':jamlat});
	}
	else
	{
		mataajar.pop();
		mataajar.push({'mataajarid':mataajarid, 'mataajarname':mataajarname, 'mataajardesc':mataajardesc, 'jamlat':jamlat});
	}
	document.getElementById('mataAjarName').value = mataajar[0].mataajarname;
	
	
	$('#myModal6').modal('toggle');
}

function pilihKurikulum(id)
{	
	if(idKurikulumBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idKurikulumBefore = id;
		idKurikulum = id;
	}
	else
	{
		if(document.getElementById(idKurikulumBefore) != null)
		{
			document.getElementById(idKurikulumBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idKurikulumBefore = id;
		idKurikulum = id;
	}
	$("#btnPilihKurikulum").removeAttr("disabled");
}
function pilihKurikulumOk()
{
	arrSplit = idKurikulum.split(";");
	kurikulumid = arrSplit[0];
	kurikulumname = arrSplit[1];
	kurikulumhari = arrSplit[2];
	
	if(kurikulum.length == 0)
	{
		kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname, 'kurikulumhari':kurikulumhari});
	}
	else
	{
		kurikulum.pop();
		kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname, 'kurikulumhari':kurikulumhari});
	}
	
	document.getElementById('kurikulumName').value = kurikulum[0].kurikulumname;
	
	if(mataajar.length > 0)
	{
		mataajar.pop();
		$("#btnTambahKurikulumRinci").removeAttr("disabled");
		$("#btnHapusKurikulumRinci").attr('disabled', true);
		$("#btnUbahKurikulumRinci").attr('disabled', true);
		document.getElementById('mataAjarName').value = '';
	}
	
	$('#myModal5').modal('toggle');
}

function viewKurikulumRinci()
{
	if(kurikulum.length == 0)
	{
		alert('Anda Belum Memilih Kurikulum');
	}
	else
	{
		var uri = '<?php echo base_url();?>kurikulumrinci/?kurikulumid='+kurikulum[0].kurikulumid+'&kurikulumname='+kurikulum[0].kurikulumname+'&kurikulumhari='+kurikulum[0].kurikulumhari;
		refreshPage(uri);
	}
}

function pad(n, width, z) {
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}

function tambahKurikulumRinci()
{
	var harike, jamke, jammulaibiasa, jamselesaibiasa, jammulaijumat, jamselesaijumat;
	
	harike = document.getElementById('hariKe').value;
	jamke = document.getElementById('jamKe').value;
	jammulaibiasa = document.getElementById('jamMulaiHariBiasa').value;
	jamselesaibiasa = document.getElementById('jamSelesaiHariBiasa').value;
	jammulaijumat = document.getElementById('jamMulaiHariJumat').value;
	jamselesaijumat = document.getElementById('jamSelesaiHariJumat').value;
	
	jammulaibiasa = pad(jammulaibiasa, 8);
	jamselesaibiasa = pad(jamselesaibiasa, 8);
	jammulaijumat = pad(jammulaijumat, 8);
	jamselesaijumat = pad(jamselesaijumat, 8);
	
	if(mataajar.length == 0)
	{
		alert('Anda Belum Mengisi Mata Ajar');
	}
	else if (kurikulum.length == 0)
	{
		alert('Anda Belum Mengisi kurikulum');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>kurikulumrinci/insert/?kurikulumid='+kurikulum[0].kurikulumid+'&mataajarid='+mataajar[0].mataajarid+'&harike='+harike+'&jamke='+jamke+'&jammulaibiasa='+jammulaibiasa+'&jamselesaibiasa='+jamselesaibiasa+'&jammulaijumat='+jammulaijumat+'&jamselesaijumat='+jamselesaijumat+'&kurikulumname='+kurikulum[0].kurikulumname+'&kurikulumhari='+kurikulum[0].kurikulumhari;
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>kurikulumrinci/?kurikulumid='+kurikulum[0].kurikulumid+'&kurikulumname='+kurikulum[0].kurikulumname+'&kurikulumhari='+kurikulum[0].kurikulumhari);
			  }
			  else
			  {
				  alert('Gagal Menambahkan Data karena ' + data.message);
			  }
			  
			}
		});
		
	}
}

function ubahData(id)
{
	
	$("#hariKe").removeAttr("readonly");
	$("#jamKe").removeAttr("readonly");
	
	
	arrID = id.split(';');
	aksi = arrID[0];
	if(mataajar.length > 0)
	{
		mataajar.pop();
	}
	
	kurikulumrinciid = arrID[1];
	harike = arrID[3];
	jamke = arrID[4];
	mataajar.push({'mataajarid':arrID[5],'mataajarname':arrID[6], 'mataajardesc':arrID[7], 'jamlat':arrID[8]});
	
	jammulaibiasa = arrID[9];
	jamselesaibiasa = arrID[10];
	jammulaijumat = arrID[11];
	jamselesaijumat = arrID[12];
	
	document.getElementById('mataAjarName').value = mataajar[0].mataajarname;
	document.getElementById('hariKe').value = harike;
	document.getElementById('jamKe').value = jamke;
	document.getElementById('jamMulaiHariBiasa').value = jammulaibiasa;
	document.getElementById('jamSelesaiHariBiasa').value = jamselesaibiasa;
	document.getElementById('jamMulaiHariJumat').value = jammulaijumat;
	document.getElementById('jamSelesaiHariJumat').value = jamselesaijumat;
	
	
	
	
	$("#btnTambahKurikulumRinci").attr('disabled', true);
	$("#btnHapusKurikulumRinci").attr('disabled', true);
	$("#btnUbahKurikulumRinci").removeAttr("disabled");
	
	
}

function ubahKurikulumRinci()
{
	var uri = '<?php echo base_url(); ?>kurikulumrinci/update/?kurikulumrinciid='+kurikulumrinciid+'&kurikulumid='+kurikulum[0].kurikulumid+'&mataajarid='+mataajar[0].mataajarid+'&harike='+harike+'&jamke='+jamke+'&jammulaibiasa='+jammulaibiasa+'&jamselesaibiasa='+jamselesaibiasa+'&jammulaijumat='+jammulaijumat+'&jamselesaijumat='+jamselesaijumat+'&kurikulumname='+kurikulum[0].kurikulumname+'&kurikulumhari='+kurikulum[0].kurikulumhari;
	
	if(mataajar.length == 0)
	{
		alert('Anda Belum Mengisi mata ajar');
	}
	else if (kurikulum.length == 0)
	{
		alert('Anda Belum Mengisi kurikulum');
	}
	else
	{
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>kurikulumrinci/?kurikulumid='+kurikulum[0].kurikulumid+'&kurikulumname='+kurikulum[0].kurikulumname+'&kurikulumhari='+kurikulum[0].kurikulumhari);
			  }
			  else
			  {
				  alert('Gagal Menambahkan Data karena ' + data.message);
			  }
			  
			}
		});
	}
		
}


function hapusData(id)
{
	
	$("#hariKe").attr('disabled', true);
	$("#jamKe").attr('disabled', true);
	
	
	arrID = id.split(';');
	aksi = arrID[0];
	if(mataajar.length > 0)
	{
		mataajar.pop();
	}
	
	kurikulumrinciid = arrID[1];
	harike = arrID[3];
	jamke = arrID[4];
	mataajar.push({'mataajarid':arrID[5],'mataajarname':arrID[6], 'mataajardesc':arrID[7], 'jamlat':arrID[8]});
	
	jammulaibiasa = arrID[9];
	jamselesaibiasa = arrID[10];
	jammulaijumat = arrID[11];
	jamselesaijumat = arrID[12];
	
	document.getElementById('mataAjarName').value = mataajar[0].mataajarname;
	document.getElementById('hariKe').value = harike;
	document.getElementById('jamKe').value = jamke;
	document.getElementById('jamMulaiHariBiasa').value = jammulaibiasa;
	document.getElementById('jamSelesaiHariBiasa').value = jamselesaibiasa;
	document.getElementById('jamMulaiHariJumat').value = jammulaijumat;
	document.getElementById('jamSelesaiHariJumat').value = jamselesaijumat;
	
	
	
	
	$("#btnTambahKurikulumRinci").attr('disabled', true);
	$("#btnHapusKurikulumRinci").removeAttr("disabled");
	$("#btnUbahKurikulumRinci").attr('disabled', true);
	
	
}

function hapusKurikulumRinci()
{
	var uri = '<?php echo base_url(); ?>kurikulumrinci/update/?kurikulumrinciid='+kurikulumrinciid+'&kurikulumid='+kurikulum[0].kurikulumid+'&mataajarid='+mataajar[0].mataajarid+'&harike='+harike+'&jamke='+jamke+'&jammulaibiasa='+jammulaibiasa+'&jamselesaibiasa='+jamselesaibiasa+'&jammulaijumat='+jammulaijumat+'&jamselesaijumat='+jamselesaijumat+'&kurikulumname='+kurikulum[0].kurikulumname+'&kurikulumhari='+kurikulum[0].kurikulumhari;
	
	if(mataajar.length == 0)
	{
		alert('Anda Belum Mengisi mata ajar');
	}
	else if (kurikulum.length == 0)
	{
		alert('Anda Belum Mengisi kurikulum');
	}
	else
	{
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>kurikulumrinci/?kurikulumid='+kurikulum[0].kurikulumid+'&kurikulumname='+kurikulum[0].kurikulumname+'&kurikulumhari='+kurikulum[0].kurikulumhari);
			  }
			  else
			  {
				  alert('Gagal Menambahkan Data karena ' + data.message);
			  }
			  
			}
		});
	}
}
</script>

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Kurikulum</h4>
			</div>
			<div class="modal-body">
				<table id="example6" class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>ID Kurikulum</th>
						<th>Tipe Kurikulum</th>
						<th>Nama Kurikulum</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						
						foreach($kurikulums as $kurikulum)
						{
							if($kurikulum->kurikulumHari == null)
							{
								$kurikulum->kurikulumHari = '0';
							}
							
							?>
							<tr id="<?php echo $kurikulum->kurikulumID;?>;<?php echo $kurikulum->kurikulumName;?>;<?php echo $kurikulum->kurikulumHari;?>" onclick="pilihKurikulum(this.id)" style="cursor: pointer;">
								<td><?php echo $kurikulum->kurikulumID;?></td>
								<td><?php echo $kurikulum->kurikulumTypeName;?></td>
								<td><?php echo $kurikulum->kurikulumName;?></td>
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihKurikulum" onclick="pilihKurikulumOk();">Pilih</button>
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
				<h4 class="modal-title" id="myModalLabel">List Kurikulum</h4>
			</div>
			<div class="modal-body">
				<table id="example8" class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>Nama Mata AJar</th>
						<th>Deskripsi</th>
						<th>Jam Lat</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						
						foreach($mata_ajars as $mata_ajar)
						{
							
							?>
							<tr id="<?php echo $mata_ajar->mataAjarID;?>;<?php echo $mata_ajar->mataAjarName;?>;<?php echo $mata_ajar->mataAjarDesc;?>;<?php echo $mata_ajar->jamLat;?>" onclick="pilihMataAjar(this.id)" style="cursor: pointer;">
								<td><?php echo $mata_ajar->mataAjarName;?></td>
								<td><?php echo $mata_ajar->mataAjarDesc;?></td>
								<td><?php echo $mata_ajar->jamLat;?></td>
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihMataAjar" onclick="pilihMataAjarOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
		</div>
	</div>
</div>

<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Kurikulum Rinci</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				<label>Kurikulum</label>
				<div class="form-group input-group">
					<input class="form-control" type="text" name="kurikulumName" id="kurikulumName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal5"><i class="fa fa-search"></i></button></span>
                </div>
			
				
            </div>
            
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-primary"  onclick="viewKurikulumRinci();" id="btnKurikulumRinci"><i class="fa fa-plus"></i> Tampilkan Kurikulum Rinci</button>&nbsp&nbsp
			  
            </div>
          </div>
		  </div>
	  </div>
	 
	  <?php
	  if($kurikulumid)
	  {
	  ?>
		  
	  <div class="row">
		<div class="col-xs-6">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Form Tambah Kurikulum Rinci</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				
				<label>Nama Mata Ajar</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
					<input class="form-control" type="text" name="mataAjarName" id="mataAjarName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal6"><i class="fa fa-search"></i></button></span>
                </div>
				
				<div class="form-group">
                    <label>Hari Ke</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="number" name="hariKe" placeholder="1" id="hariKe" min="1" max="" value = "1" style="width: 100px;"> 
                </div>
				
				<div class="form-group">
                    <label>Jam Ke</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="number" name="jamKe" placeholder="1" id="jamKe" min="1" max="" value = "1" style="width: 100px;"> 
                </div>
				
				<div class="bootstrap-timepicker mulai-hari-biasa">
					<div class="form-group">
					  <label>Jam Mulai Hari Biasa : </label>
					  <div class="input-group">
						<input type="text" class="form-control timepicker" id="jamMulaiHariBiasa" readonly>
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					</div>
				</div>
				
				
				<div class="bootstrap-timepicker selesai-hari-biasa">
					<div class="form-group">
					  <label>Jam Selesai Hari Biasa : </label>
					  <div class="input-group">
						<input type="text" class="form-control timepicker" id="jamSelesaiHariBiasa" readonly>
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					</div>
				</div>
				
				<div class="bootstrap-timepicker mulai-hari-jumat">
					<div class="form-group">
					  <label>Jam Mulai Hari Jumat : </label>
					  <div class="input-group">
						<input type="text" class="form-control timepicker" id="jamMulaiHariJumat" readonly>
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					</div>
				</div>
				
				
				<div class="bootstrap-timepicker selesai-hari-jumat">
					<div class="form-group">
					  <label>Jam Selesai Hari Jumat : </label>
					  <div class="input-group">
						<input type="text" class="form-control timepicker" id="jamSelesaiHariJumat" readonly>
						<div class="input-group-addon">
						  <i class="fa fa-clock-o"></i>
						</div>
					  </div>
					</div>
				</div>
				
            </div>
            
            <div class="box-footer clearfix no-border">
				<div class="col-xs-12"><button type="button" class="btn btn-primary"  onclick="tambahKurikulumRinci();" id="btnTambahKurikulumRinci"><i class="fa fa-plus"></i> Tambah Data</button>&nbsp&nbsp<button type="button" class="btn btn-warning"  onclick="ubahKurikulumRinci();" id="btnUbahKurikulumRinci" disabled><i class="fa fa-pencil"></i> Ubah Data</button>&nbsp&nbsp<button type="button" class="btn btn-danger"  onclick="hapusKurikulumRinci();" id="btnHapusKurikulumRinci" disabled><i class="fa fa-pencil"></i> Hapus Data</button></div>
				
			  
            </div>
          </div>
		  </div>
		  
		  
		  <div class="col-xs-6">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Kurikulum Rinci</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example7" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td style="width:20px!important;">NO</td>
					  <td style="width:20px!important;">Hari Ke</td>
					  <td style="width:20px!important;">Jam Ke</td>
					  <td style="width:70px!important;">Nama Mata Ajar</td>
					  
					  <td style="width:50px!important;">Jam Mulai Biasa</td>
					  <td style="width:50px!important;">Jam Selesai Biasa</td>
					  <td style="width:50px!important;">Jam Mulai Jumat</td>
					  <td style="width:50px!important;">Jam Selesai Jumat</td>
					  <td style="width:50px!important;">Ubah / Hapus</td>
					</tr>
					</thead>
					<tbody>
						<?php
							if($kurikulum_rincis)
							{
								$i = 1;
								foreach($kurikulum_rincis as $kurikulum_rinci)
								{
									?>
									<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $kurikulum_rinci->harike; ?></td>
									<td><?php echo $kurikulum_rinci->jamke; ?></td>
									<td><?php echo $kurikulum_rinci->mataAjarName; ?></td>
									<td><?php echo $kurikulum_rinci->jamMulaiBiasa; ?></td>
									<td><?php echo $kurikulum_rinci->jamSelesaiBiasa; ?></td>
									<td><?php echo $kurikulum_rinci->jamMulaiJumat; ?></td>
									<td><?php echo $kurikulum_rinci->jamSelesaiJumat; ?></td>
									<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Kurikulum Rinci" id="ubah;<?php echo $kurikulum_rinci->kurikulumRinciID; ?>;<?php echo $kurikulum_rinci->kurikulumID; ?>;<?php echo $kurikulum_rinci->harike; ?>;<?php echo $kurikulum_rinci->jamke; ?>;<?php echo $kurikulum_rinci->mataAjarID; ?>;<?php echo $kurikulum_rinci->mataAjarName; ?>;<?php echo $kurikulum_rinci->mataAjarDesc; ?>;<?php echo $kurikulum_rinci->jamLat; ?>;<?php echo $kurikulum_rinci->jamMulaiBiasa; ?>;<?php echo $kurikulum_rinci->jamSelesaiBiasa; ?>;<?php echo $kurikulum_rinci->jamMulaiJumat; ?>;<?php echo $kurikulum_rinci->jamSelesaiJumat; ?>" onclick="ubahData(this.id);"><i class="fa fa-pencil"></i></button><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Kurikulum Rinci" id="hapus;<?php echo $kurikulum_rinci->kurikulumRinciID; ?>;<?php echo $kurikulum_rinci->kurikulumID; ?>;<?php echo $kurikulum_rinci->harike; ?>;<?php echo $kurikulum_rinci->jamke; ?>;<?php echo $kurikulum_rinci->mataAjarID; ?>;<?php echo $kurikulum_rinci->mataAjarName; ?>;<?php echo $kurikulum_rinci->mataAjarDesc; ?>;<?php echo $kurikulum_rinci->jamLat; ?>;<?php echo $kurikulum_rinci->jamMulaiBiasa; ?>;<?php echo $kurikulum_rinci->jamSelesaiBiasa; ?>;<?php echo $kurikulum_rinci->jamMulaiJumat; ?>;<?php echo $kurikulum_rinci->jamSelesaiJumat; ?>" onclick="hapusData(this.id);"><i class="fa fa-close"></i></button></td>
									</tr>
									<?php
									$i++;
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
	  
	  
	  
		
	
	  <?php
	  }
	  ?>
	  
	  

    </section>
    
  </div>
  <script>
  
	<?php
	if($kurikulumid)
	{
		?>
 		document.getElementById('kurikulumName').value = '<?php echo $kurikulumname; ?>'; 
		<?php
	}
	?>
	$('#example7').dataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
	
	$('#example6').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idKurikulumBefore != '')
		{
			if(document.getElementById(idKurikulumBefore) != null)
			{
				document.getElementById(idKurikulumBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	
	$('#example8').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idMataAjarBefore != '')
		{
			if(document.getElementById(idMataAjarBefore) != null)
			{
				document.getElementById(idMataAjarBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	
	$(function () {
		$("#jamMulaiHariBiasa").timepicker({
		  showSeconds : true,
		  showMeridian : false,
		  defaultTime: '08:00:00',
		  minuteStep: 5,
		  secondStep: 1,
		  showInputs: true
		}).on('show.timepicker', function(e) {
			setTimeout(function() {
				$('.bootstrap-timepicker-widget').removeClass('timepicker-orient-bottom');
				$('.bootstrap-timepicker-widget').addClass('timepicker-orient-top');
				var temp = $("#jamMulaiHariBiasa").offset().top + 25;
				$('.bootstrap-timepicker-widget').css({top: temp+'px'});
			}, 1);
		});
		
		$("#jamSelesaiHariBiasa").timepicker({
		  showSeconds : true,
		  showMeridian : false,
		  defaultTime: '17:00:00',
		  minuteStep: 5,
		  secondStep: 1,
		  showInputs: true
		}).on('show.timepicker', function(e) {
			setTimeout(function() {
				$('.bootstrap-timepicker-widget').removeClass('timepicker-orient-bottom');
				$('.bootstrap-timepicker-widget').addClass('timepicker-orient-top');
				var temp = $("#jamSelesaiHariBiasa").offset().top + 25;
				$('.bootstrap-timepicker-widget').css({top: temp+'px'});
			}, 1);
		});
		
		$("#jamMulaiHariJumat").timepicker({
		  showSeconds : true,
		  showMeridian : false,
		  defaultTime: '07:30:00',
		  minuteStep: 5,
		  secondStep: 1,
		  showInputs: true
		}).on('show.timepicker', function(e) {
			setTimeout(function() {
				$('.bootstrap-timepicker-widget').removeClass('timepicker-orient-bottom');
				$('.bootstrap-timepicker-widget').addClass('timepicker-orient-top');
				var temp = $("#jamMulaiHariJumat").offset().top + 25;
				$('.bootstrap-timepicker-widget').css({top: temp+'px'});
			}, 1);
		});
		
		$("#jamSelesaiHariJumat").timepicker({
		  showSeconds : true,
		  showMeridian : false,
		  defaultTime: '17:00:00',
		  minuteStep: 5,
		  secondStep: 1,
		  showInputs: true
		}).on('show.timepicker', function(e) {
			setTimeout(function() {
				$('.bootstrap-timepicker-widget').removeClass('timepicker-orient-bottom');
				$('.bootstrap-timepicker-widget').addClass('timepicker-orient-top');
				var temp = $("#jamSelesaiHariJumat").offset().top + 25;
				$('.bootstrap-timepicker-widget').css({top: temp+'px'});
			}, 1);
		});
	});
	
	
  </script>