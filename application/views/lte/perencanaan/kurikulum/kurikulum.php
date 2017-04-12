<script>
var arrSplit, kurikulumtypeid, kurikulumtypename, diklattypename, kurikulumname, kurikulumid, aksi, lastNumber, sesiid, sesino, sesiname, sesiDesc, kurikulumsesiid, metodeid, metodename, kurikulumdesc, idBefore;
idBefore = '';

var idKurikulumTypeBefore, idKurikulumType;
var kurikulumtype = [];
idKurikulumTypeBefore = idKurikulumType = '';

<?php
if($kurikulumid)
{
	?>
	kurikulumid = '<?php echo $kurikulumid; ?>';
	kurikulumtypeid = '<?php echo $kurikulumtypeid; ?>';
	diklattypename = '<?php echo $diklattypename; ?>';
	kurikulumtypename = '<?php echo $kurikulumtypename; ?>';
	kurikulumname = '<?php echo $kurikulumname; ?>';
	viewSesi('tambah;'+kurikulumid+';'+kurikulumtypeid+';'+kurikulumtypename+';'+diklattypename+';'+kurikulumname);
	kurikulumtype.push({'kurikulumtypeid':kurikulumtypeid, 'diklattypename':diklattypename, 'kurikulumtypename':kurikulumtypename});
	
	<?php
}
?>


function pilihKurikulumType(id)
{	
	if(idKurikulumTypeBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idKurikulumTypeBefore = id;
		idKurikulumType = id;
	}
	else
	{
		if(document.getElementById(idKurikulumTypeBefore) != null)
		{
			document.getElementById(idKurikulumTypeBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idKurikulumTypeBefore = id;
		idKurikulumType = id;
	}
	$("#btnPilihKurikulumType").removeAttr("disabled");
}
function pilihKurikulumTypeOk()
{
	arrSplit = idKurikulumType.split(";");
	kurikulumtypeid = arrSplit[0];
	diklattypename = arrSplit[1];
	kurikulumtypename = arrSplit[2];
	
	if(kurikulumtype.length == 0)
	{
		kurikulumtype.push({'kurikulumtypeid':kurikulumtypeid, 'diklattypename':diklattypename, 'kurikulumtypename':kurikulumtypename});
	}
	else
	{
		kurikulumtype.pop();
		kurikulumtype.push({'kurikulumtypeid':kurikulumtypeid, 'diklattypename':diklattypename, 'kurikulumtypename':kurikulumtypename});
	}
	
	document.getElementById('kurikulumTypeName').value = kurikulumtype[0].kurikulumtypename;
	
	$('#myModal2').modal('toggle');
}

function tambahKurikulum()
{
	kurikulumname  = document.getElementById('kurikulumName').value;kurikulumdesc = CKEDITOR.instances.kurikulumDesc.getData();
	if(kurikulumtype.length == 0)
	{
		alert('Jenis Kurikulum Harus Terisi');
	}
	else if (kurikulumname == '')
	{
		alert('Nama Kurikulum Harus Terisi');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>kurikulum/insert/?kurikulumtypeid='+kurikulumtype[0].kurikulumtypeid+'&kurikulumname='+kurikulumname+'&kurikulumdesc='+kurikulumdesc;
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>kurikulum/');
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
	arrID = id.split(';');
	aksi = arrID[0];
	
	if(kurikulumtype.length > 0)
	{
		kurikulumtype.pop();
	}
	
	kurikulumid = arrID[1];
	kurikulumtypeid = arrID[2];
	kurikulumtypename = arrID[3];
	diklattypename = arrID[4];
	kurikulumname = arrID[5];
	kurikulumdesc = arrID[6];
	
	kurikulumtype.push({'kurikulumtypeid':kurikulumtypeid, 'diklattypename':diklattypename, 'kurikulumtypename':kurikulumtypename});

	setTimeout(function(){	
		setTimeout(function(){		
			setTimeout(function(){
				setTimeout(function(){
					//var $target = $('html,body'); 
					//$target.animate({scrollTop: $target.height()}, 1000);
					$('html,body').scrollTop(0);
					document.getElementById('kurikulumTypeName').value = kurikulumtype[0].kurikulumtypename;
					document.getElementById('kurikulumName').value = kurikulumname;
					document.getElementById('titleBox').innerHTML = 'Tambah Kurikulum';
					CKEDITOR.instances.kurikulumDesc.setData(kurikulumdesc);
					document.getElementById('modalFooter').innerHTML = '<button type="button" class="btn btn-warning" onclick="ubahKurikulum()"><i class="fa fa-save"></i> Simpan Perubahan</button>';
					document.getElementById('formTambahKurikulum').style.display = 'block';
				}, 300);
				document.getElementById('formTambahKurikulum').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahKurikulum').style.display = 'none';
		}, 300);
		document.getElementById('formTambahKurikulum').className = 'pesanhilang';
	}, 300);
}

function hapusData(id)
{
	arrID = id.split(';');
	aksi = arrID[0];
	
	if(kurikulumtype.length > 0)
	{
		kurikulumtype.pop();
	}
	
	kurikulumid = arrID[1];
	kurikulumtypeid = arrID[2];
	kurikulumtypename = arrID[3];
	diklattypename = arrID[4];
	kurikulumname = arrID[5];
	kurikulumdesc = arrID[6];
	
	kurikulumtype.push({'kurikulumtypeid':kurikulumtypeid, 'diklattypename':diklattypename, 'kurikulumtypename':kurikulumtypename});
	$('#myModal1').modal('show');
}

function ubahKurikulum()
{
	kurikulumname  = document.getElementById('kurikulumName').value;
	kurikulumdesc = CKEDITOR.instances.kurikulumDesc.getData();
	
	console.log(kurikulumdesc);
	if(kurikulumtype.length == 0)
	{
		alert('Jenis Kurikulum Harus Terisi');
	}
	else if (kurikulumname == '')
	{
		alert('Nama Kurikulum Harus Terisi');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>kurikulum/update/?kurikulumid='+kurikulumid+'&kurikulumtypeid='+kurikulumtype[0].kurikulumtypeid+'&kurikulumname='+kurikulumname+'&kurikulumdesc='+kurikulumdesc;
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if (data.message == 'success')
				{
					refreshPage('<?php echo base_url(); ?>kurikulum/');
				}
				else
				{
					alert('Gagal Merubah Data karena ' + data.message);
				}
			}
		});
		
	}
}

function hapusKurikulum()
{
	kurikulumname  = document.getElementById('kurikulumName').value;
	kurikulumdesc = CKEDITOR.instances.kurikulumDesc.getData();
	
	if(kurikulumtype.length == 0)
	{
		alert('Jenis Kurikulum Harus Terisi');
	}
	else if (kurikulumname == '')
	{
		alert('Nama Kurikulum Harus Terisi');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>kurikulum/delete/?kurikulumid='+kurikulumid+'&kurikulumtypeid='+kurikulumtype[0].kurikulumtypeid+'&kurikulumname='+kurikulumname+'&kurikulumdesc='+kurikulumdesc;
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if (data.message == 'success')
				{
					$('#myModal1').modal('hide');
					refreshPage('<?php echo base_url(); ?>kurikulum/');
				}
				else
				{
					alert('Gagal Menghapus Data karena ' + data.message);
					$('#myModal1').modal('hide');
				}

			}
		});
		
	}
}

function tambahData()
{
	
	
	setTimeout(function(){
		
		setTimeout(function(){
			
			setTimeout(function(){
				setTimeout(function(){
					$('html,body').scrollTop(0);
					document.getElementById('kurikulumTypeName').value = '';
					document.getElementById('kurikulumName').value = '';
					document.getElementById('titleBox').innerHTML = 'Tambah Kurikulum';
					document.getElementById('modalFooter').innerHTML = '<button type="button" class="btn btn-primary" onclick="tambahKurikulum()"><i class="fa fa-save"></i> Simpan</button>';
					document.getElementById('formTambahKurikulum').style.display = 'block';
				}, 300);
				document.getElementById('formTambahKurikulum').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahKurikulum').style.display = 'none';
		}, 300);
		document.getElementById('formTambahKurikulum').className = 'pesanhilang';
	}, 300);
	
}

function viewSesi(id)
{
	var i, str, metodeid;
	arrID = id.split(';');
	aksi = arrID[0];
	kurikulumid = arrID[1];
	kurikulumtypeid = arrID[2];
	kurikulumtypename = arrID[3];
	diklattypename = arrID[4];
	kurikulumname = arrID[5];
	arrID = document.getElementById('selectMetode').value.split(';');
	metodeid = arrID[0];
	
	if(idBefore == '')
	{
		idBefore = id;
		document.getElementById(id).parentElement.parentElement.style.backgroundColor = '#9E9E9E';
	}
	else
	{
		document.getElementById(idBefore).parentElement.parentElement.style.backgroundColor = '#FFFFFF';
		document.getElementById(id).parentElement.parentElement.style.backgroundColor = '#9E9E9E';
		idBefore = id;
	}
	
	setTimeout(function(){	
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					$.ajax({
						type: 'get',
						url: '<?php echo base_url(); ?>/kurikulum/ambilsesi/'+kurikulumid,
						dataType: 'json',
						success: function (data) 
						{	
							i = 0;
							str = '';
							while (i < data.length)
							{
								str += '<tr><td>'+data[i].sesiNo+'</td><td>'+data[i].metodeName+'</td><td>'+data[i].sesiName+'</td><td>'+data[i].kurikulumSesiDesc+'</td><td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Kurikulum" id="ubahsesi;'+data[i].kurikulumSesiID+';'+data[i].metodeID+';'+data[i].metodeName+';'+data[i].sesiID+';'+data[i].sesiName+';'+data[i].sesiNo+'" onclick="ubahSesi(this.id);"><i class="fa fa-pencil"></i></button>&nbsp&nbsp<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Kurikulum" id="hapussesi;'+data[i].kurikulumSesiID+';'+data[i].metodeID+';'+data[i].metodeName+';'+data[i].sesiID+';'+data[i].sesiName+';'+data[i].sesiNo+'" onclick="hapusSesi(this.id);"><i class="fa fa-close"></i></button></td></tr>';
								i++;
							}
							document.getElementById('bodyTableSesi').innerHTML = str;
							
							
							$.ajax({
								type: 'get',
								url: '<?php echo base_url(); ?>/kurikulum/ambillastnummetode/'+kurikulumid+'/'+metodeid,
								dataType: 'json',
								success: function (data) 
								{	
									lastNumber = parseInt(data[0].number);
									lastNumber = lastNumber + 1;
									document.getElementById('sesiNo').value = lastNumber;
								}
							});
							
						}
					});
					
					
					
					document.getElementById('titleBoxSesi').innerHTML = 'Sesi Kurikulum : ' + kurikulumname;
					document.getElementById('boxTableSesi').style.display = 'block';
				}, 300);
				document.getElementById('boxTableSesi').className = 'pesanmuncul';
			}, 300);
			document.getElementById('boxTableSesi').style.display = 'none';
		}, 300);
		document.getElementById('boxTableSesi').className = 'pesanhilang';
	}, 300);
	
}

function tambahSesi()
{
	$('#myModal3').modal('show');
	document.getElementById('sesiTitle').innerHTML = 'Tambah Sesi Kurikulum : ' + kurikulumname;
	document.getElementById('sesiFooter').innerHTML = '<button type="button" class="btn btn-primary" onclick="tambahDataSesi();"><i class="fa fa-save"></i> Simpan</button><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>';
	
}

function tambahDataSesi()
{
	arrID = document.getElementById('selectJenisSesi').value.split(';');
	sesiid = arrID[0];
	sesiname = arrID[1];
	arrID = document.getElementById('selectMetode').value.split(';');
	metodeid = arrID[0];
	metodename = arrID[1];
	
	sesino = document.getElementById('sesiNo').value;
	sesidesc = kurikulumname + ' ' + metodename + ' ' + sesiname + ' ' + sesino;
	var uri = '<?php echo base_url(); ?>kurikulum/insertsesi/?kurikulumid='+kurikulumid+'&sesiid='+sesiid+'&sesino='+sesino+'&kurikulumsesidesc='+sesidesc;
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if (data.message == 'success')
				{
					$('#myModal3').modal('hide');
					//refreshPage('<?php echo base_url(); ?>kurikulum/?kurikulumid='+kurikulumid+'&kurikulumtypeid='+kurikulumtypeid+'&diklattypename='+diklattypename+'&kurikulumtypename='+kurikulumtypename+'&kurikulumname='+kurikulumname);
					refreshPage('<?php echo base_url(); ?>kurikulum/');
				}
				else
				{
					alert('Gagal Menghapus Data karena ' + data.message);
					$('#myModal3').modal('hide');
				}

			}
		});
	
}

function rubahMetode()
{
	var metodeid, i, str;
	arrID = document.getElementById('selectMetode').value.split(';');
	metodeid = arrID[0];
	$.ajax({
		type: 'get',
		url: '<?php echo base_url(); ?>/kurikulum/ambilsesijenis/'+metodeid,
		dataType: 'json',
		success: function (data) 
		{	
			i = 0;
			str = '';
			while (i < data.length)
			{
				str += '<option id="'+data[i].sesiID+';'+data[i].sesiName+'" value="'+data[i].sesiID+';'+data[i].sesiName+'">'+data[i].sesiName+'</option>';
				i++;
			}
			document.getElementById('selectJenisSesi').innerHTML = str;
			$.ajax({
				type: 'get',
				url: '<?php echo base_url(); ?>/kurikulum/ambillastnummetode/'+kurikulumid+'/'+metodeid,
				dataType: 'json',
				success: function (data) 
				{	
					lastNumber = parseInt(data[0].number);
					lastNumber = lastNumber + 1;
					document.getElementById('sesiNo').value = lastNumber;
				}
			});
		}
	});
	
	
}

function ubahSesi(id)
{
	
	arrID = id.split(';');
	kurikulumsesiid = arrID[1];
	metodeid = arrID[2];
	metodename = arrID[3];
	sesiid = arrID[4];
	sesiname = arrID[5];
	sesino = arrID[6];
	
	document.getElementById('sesiTitle').innerHTML = 'Ubah Sesi Kurikulum : ' + kurikulumname;
	document.getElementById('sesiFooter').innerHTML = '<button type="button" class="btn btn-warning" onclick="ubahDataSesi();"><i class="fa fa-save"></i> Simpan Perubahan</button><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>';
	document.getElementById('sesiNo').value = sesino;
	document.getElementById('selectMetode').value = metodeid + ';' + metodename;
	rubahMetode();
	
	setTimeout(function(){
		document.getElementById('selectJenisSesi').value = sesiid + ';' + sesiname;
	}, 100);
	
	$('#myModal3').modal('show');
	
}

function ubahDataSesi()
{
	arrID = document.getElementById('selectJenisSesi').value.split(';');
	sesiid = arrID[0];
	sesiname = arrID[1];
	arrID = document.getElementById('selectMetode').value.split(';');
	metodeid = arrID[0];
	metodename = arrID[1];
	
	sesino = document.getElementById('sesiNo').value;
	sesidesc = kurikulumname + ' ' + metodename + ' ' + sesiname + ' ' + sesino;
	var uri = '<?php echo base_url(); ?>kurikulum/updatesesi/?kurikulumsesiid='+kurikulumsesiid+'&sesiid='+sesiid+'&sesino='+sesino+'&kurikulumsesidesc='+sesidesc;
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if (data.message == 'success')
				{
					$('#myModal3').modal('hide');
					//refreshPage('<?php echo base_url(); ?>kurikulum/?kurikulumid='+kurikulumid+'&kurikulumtypeid='+kurikulumtypeid+'&diklattypename='+diklattypename+'&kurikulumtypename='+kurikulumtypename+'&kurikulumname='+kurikulumname);
					refreshPage('<?php echo base_url(); ?>kurikulum/');
				}
				else
				{
					alert('Gagal Menghapus Data karena ' + data.message);
					$('#myModal3').modal('hide');
				}

			}
		});
}

function hapusDataSesi()
{
	var uri = '<?php echo base_url(); ?>kurikulum/deletesesi/?kurikulumsesiid='+kurikulumsesiid;
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if (data.message == 'success')
				{
					$('#myModal4').modal('hide');
					//refreshPage('<?php echo base_url(); ?>kurikulum/?kurikulumid='+kurikulumid+'&kurikulumtypeid='+kurikulumtypeid+'&diklattypename='+diklattypename+'&kurikulumtypename='+kurikulumtypename+'&kurikulumname='+kurikulumname);
					refreshPage('<?php echo base_url(); ?>kurikulum/');
					
				}
				else
				{
					alert('Gagal Menghapus Data karena ' + data.message);
					$('#myModal4').modal('hide');
				}

			}
		});
}


function hapusSesi(id)
{
	
	arrID = id.split(';');
	kurikulumsesiid = arrID[1];
	metodeid = arrID[2];
	metodename = arrID[3];
	sesiid = arrID[4];
	sesiname = arrID[5];
	sesino = arrID[6];
	
	
	
	$('#myModal4').modal('show');
	
}
</script>


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Yakin Akan Menghapus Data Kurikulum ?					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusKurikulum()"><i class="fa fa-close"></i> Hapus</button>
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
				<h4 class="modal-title" id="myModalLabel">List Jenis Kurikulum</h4>
			</div>
			<div class="modal-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Nama Tipe Diklat</th>
							<th>Jenis Kurikulum</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if($kurikulum_types)
						{
							foreach ($kurikulum_types as $kurikulum_type)
							{
								?>
								<tr id="<?php echo $kurikulum_type->kurikulumTypeID; ?>;<?php echo $kurikulum_type->diklatTypeName; ?>;<?php echo $kurikulum_type->kurikulumTypeName; ?>" onclick="pilihKurikulumType(this.id);" style="cursor: pointer;">
								<td><?php echo $kurikulum_type->diklatTypeName; ?></td>
								<td><?php echo $kurikulum_type->kurikulumTypeName; ?></td>
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihKurikulumType" onclick="pilihKurikulumTypeOk()">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="footerTitle">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="sesiTitle"></h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
				<label>Metode</label>
					<select class="form-control" id="selectMetode" onchange="rubahMetode();">
					  <?php
						foreach ($metodes as $metode)
						{
							?>
							<option id="<?php echo $metode->metodeID; ?>;<?php echo $metode->metodeName; ?>" value="<?php echo $metode->metodeID; ?>;<?php echo $metode->metodeName; ?>"><?php echo $metode->metodeName; ?></option>
							<?php
						}
					  ?>
					</select>
				</div>
				
				
				<div class="form-group">
				<label>Jenis Sesi</label>
					<select class="form-control" id="selectJenisSesi">
						
					</select>
				</div>
				
				<div class="form-group">
					<label>Nomor Sesi</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					<input class="form-control" type="number" name="sesiNo" placeholder="1" id="sesiNo" min="1" style="width: 100px;"> 
				</div>
				
			</div>
			<div class="modal-footer" id="sesiFooter">
				
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Yakin Akan Menghapus Data Sesi Kurikulum ?					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusDataSesi()"><i class="fa fa-close"></i> Hapus</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"> Close</button>	
			</div>
		</div>
	</div>
</div>


<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
		<h3>
			Kurikulum
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>kurikulum');" style="cursor:pointer;"><i class="fa fa-archive"></i> Kurikulum</a></li>
		</ol>
      <div class="row">
		<div class="col-xs-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Kurikulum</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
					<div id="formTambahKurikulum" style="display:none;">
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
									<label>Nama Jenis Kurikulum</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group input-group">
										<input class="form-control" type="text" name="kurikulumTypeName" id="kurikulumTypeName" readonly="true">
										<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search"></i></button></span>
									</div>
												
									<label>Nama Kurikulum</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group">
										<input class="form-control" type="text" name="kurikulumName" id="kurikulumName">
										<span class="input-group-btn">
									</div>
									
									<label>Deskripsi Kurikulum</label>
									<div class="form-group">
										<textarea id="kurikulumDesc" name="kurikulumDesc" rows="10"></textarea>
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

							  <h3 class="box-title">Data Kurikulum</h3>

							  <div class="box-tools pull-right">
								
								<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
								  <i class="fa fa-minus"></i></button>
								  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahData();">
								  <i class="fa fa-plus" ></i> Tambah Kurikulum</button> 
							  </div>
							</div>
							
							<div class="box-body">
								<div class="col-xs-12" style="overflow:scroll;margin:0!important;">
								<table id="example7" class="table table-bordered">
									<thead>
									<tr>
									  <td>NO</td>
									  <td>Tipe Diklat</td>
									  <td>Jenis Kurikulum</td>
									  <td>Nama Kurikulum</td>
									  <td>Deskripsi</td>
									  <td>Tgl Update</td>
									  <td>Ubah / Hapus</td>
									  <td>Lihat Sesi</td>
									</tr>
									</thead>
									<tbody>
										<?php
										if($kurikulums)
										{
											$i = 1;
											foreach ($kurikulums as $kurikulum)
											{
												?>
												<tr>
													<td><?php echo $i;?></td>
													<td><?php echo $kurikulum->diklatTypeName; ?></td>
													<td><?php echo $kurikulum->kurikulumTypeName; ?></td>
													<td><?php echo $kurikulum->kurikulumName; ?></td>
													<td><?php echo $kurikulum->kurikulumDesc; ?></td>
													<td><?php echo $kurikulum->lastUpdate; ?></td>
													<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Kurikulum" id="ubah;<?php echo $kurikulum->kurikulumID; ?>;<?php echo $kurikulum->kurikulumTypeID; ?>;<?php echo $kurikulum->kurikulumTypeName; ?>;<?php echo $kurikulum->diklatTypeName; ?>;<?php echo $kurikulum->kurikulumName; ?>;<?php echo $kurikulum->kurikulumDesc; ?>" onclick="ubahData(this.id);"><i class="fa fa-pencil"></i></button>&nbsp&nbsp<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Kurikulum" id="hapus;<?php echo $kurikulum->kurikulumID; ?>;<?php echo $kurikulum->kurikulumTypeID; ?>;<?php echo $kurikulum->kurikulumTypeName; ?>;<?php echo $kurikulum->diklatTypeName; ?>;<?php echo $kurikulum->kurikulumName; ?>;<?php echo $kurikulum->kurikulumDesc; ?>" onclick="hapusData(this.id);"><i class="fa fa-close"></i></button></td>
													<td>
													<?php
														if (intval($kurikulum->jmlSesi) > 0)
														{
															?>
															<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Memiliki <?php echo $kurikulum->jmlSesi; ?> Sesi" id="viewsesi;<?php echo $kurikulum->kurikulumID; ?>;<?php echo $kurikulum->kurikulumTypeID; ?>;<?php echo $kurikulum->kurikulumTypeName; ?>;<?php echo $kurikulum->diklatTypeName; ?>;<?php echo $kurikulum->kurikulumName; ?>" onclick="viewSesi(this.id)"><i class="fa fa-table"></i></button>
															<?php
														}
														else
														{
															?>
															<button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Tidak Memiliki Sesi" id="viewsesi;<?php echo $kurikulum->kurikulumID; ?>;<?php echo $kurikulum->kurikulumTypeID; ?>;<?php echo $kurikulum->kurikulumTypeName; ?>;<?php echo $kurikulum->diklatTypeName; ?>;<?php echo $kurikulum->kurikulumName; ?>" onclick="viewSesi(this.id)"><i class="fa fa-table"></i></button>
															<?php
														}
													?>
													
													
													</td>
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
					  
					  <div class="row">
						<div class="col-xs-12">&nbsp</div>
					  </div>
					  
					  <div id="boxTableSesi" style="display:none;">
					  <div class="row">
						<div class="col-xs-12">
							<div class="box box-primary">
							<div class="box-header">
							  <i class="ion ion-clipboard"></i>

							  <h3 class="box-title" id="titleBoxSesi"></h3>

							  <div class="box-tools pull-right">
								
								<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
								  <i class="fa fa-minus"></i></button>
								  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahSesi();">
								  <i class="fa fa-plus" ></i> Tambah Sesi</button> 
							  </div>
							</div>
							
							<div class="box-body">
								<div class="col-xs-12" style="overflow:scroll;margin:0!important;">
								<table id="example8" class="table table-bordered">
									<thead>
									<tr>
									  <td>No Sesi</td>
									  <td>Metode</td>
									  <td>Jenis Sesi</td>
									  <td>Deskripsi Sesi</td>
									  <td>Ubah / Hapus</td>
									</tr>
									</thead>
									<tbody id="bodyTableSesi">
										
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
					  
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
		
		
	  
	  
     

    </section>
    
  </div>
  <script>
	var metodeid, i, str;
	arrID = document.getElementById('selectMetode').value.split(';');
	metodeid = arrID[0];
	$.ajax({
		type: 'get',
		url: '<?php echo base_url(); ?>/kurikulum/ambilsesijenis/'+metodeid,
		dataType: 'json',
		success: function (data) 
		{	
			i = 0;
			str = '';
			while (i < data.length)
			{
				str += '<option id="'+data[i].sesiID+';'+data[i].sesiName+'" value="'+data[i].sesiID+';'+data[i].sesiName+'">'+data[i].sesiName+'</option>';
				i++;
			}
			document.getElementById('selectJenisSesi').innerHTML = str;
		}
	});
  
	$('#example7').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
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
	
	$(function () {
		CKEDITOR.replace('kurikulumDesc');
	});
  </script>