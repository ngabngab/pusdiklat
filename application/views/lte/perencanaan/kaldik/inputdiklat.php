<script>
var total = [];
var selisihKelas = [];
var arrSplit, yearid, yearname, diklatid, diklatname, diklattahunanid, idLast;

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

var idBefore = '';
var diklat = [];
var dikl = '';

function pilihDiklat(id)
{
	if(idBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idBefore = id;
		dikl = id;
	}
	else
	{
		if(document.getElementById(idBefore) != null)
		{
			document.getElementById(idBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idBefore = id;
		dikl = id;
	}
	$("#btnPilih").removeAttr("disabled");
	
}

function pilihDiklatOk()
{

	str = '';
	idLast = dikl;
	arrSplit = dikl.split(";");
	diklatid = arrSplit[0];
	diklatdesc = arrSplit[1];
	if(diklat.length == 0)
	{
		diklat.push({'diklatid':diklatid, 'diklatdesc':diklatdesc});
	}
	else
	{
		diklat.pop();
		diklat.push({'diklatid':diklatid, 'diklatdesc':diklatdesc});
	}
	document.getElementById('diklatName').value = diklat[0].diklatdesc;

	$('#myModal').modal('toggle');
}


function onTampil()
{
	var tahun = $('#selectTahun').val();
	var uri = '';
	uri = '<?php echo base_url();?>inputdiklat?year='+tahun;
	refreshPage(uri);
}

function ubahDiklatTahunan(id)
{
	arrSplit = id.split(';');
	diklattahunanid = arrSplit[1];
	diklatid = arrSplit[2];
	diklatname = arrSplit[3];
	if(diklat.length == 0)
	{
		diklat.push({'diklatid':diklatid, 'diklatdesc':diklatname});
	}
	else
	{
		diklat.pop();
		diklat.push({'diklatid':diklatid, 'diklatdesc':diklatname});
	}
	document.getElementById('diklatName').value = diklat[0].diklatdesc;
	yearid = arrSplit[4];
	yearname = arrSplit[5];
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					document.getElementById('titleDiklatTahunan').innerHTML = 'Ubah Data Diklat Tahunan';
					document.getElementById('footerDiklatTahunan').innerHTML = '<button type="button" class="btn btn-warning" onclick="ubahDiklatTahunanConfirm();"><i class="fa fa-pencil"></i> Ubah Data</button>';
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					
					
							
						
					document.getElementById('formTambahDiklatTahunan').style.display = 'block';
				}, 300);
				document.getElementById('formTambahDiklatTahunan').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahDiklatTahunan').style.display = 'none';
		}, 300);
		document.getElementById('formTambahDiklatTahunan').className = 'pesanhilang';
	}, 300);
	
}

function hapusDiklatTahunan(id)
{
	arrSplit = id.split(';');
	diklattahunanid = arrSplit[1];
	$('#myModal1').modal('show');
}

function simpanDiklatTahunan()
{
	var uri = '';
	if(diklat.length == 0)
	{
		alert('Maaf Anda Harus Mengisi Terlebih Dahulu Diklat');
	}
	else
	{
		uri = '<?php echo base_url(); ?>' + 'inputdiklat/tambahdata/'+diklat[0].diklatid+'/'+<?php  echo $yearID;?>;
		console.log(uri);
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
			  
			  if (data.success == 1)
			  {
					refreshPage('<?php echo base_url(); ?>inputdiklat');
			  }
			}
		});
	}
}

function ubahDiklatTahunanConfirm()
{
	var uri = '';
	if(diklat.length == 0)
	{
		alert('Maaf Anda Harus Mengisi Terlebih Dahulu Diklat');
	}
	else
	{
		uri = '<?php echo base_url(); ?>' + 'inputdiklat/ubahdata/'+diklattahunanid+'/'+diklat[0].diklatid+'/'+<?php  echo $yearID;?>;
		console.log(uri);
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
			  
			  if (data.success == 1)
			  {
					refreshPage('<?php echo base_url(); ?>inputdiklat');
			  }
			}
		});
	}
}



function tambahDiklatTahunan()
{
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					document.getElementById('titleDiklatTahunan').innerHTML = 'Tambah Data Diklat Tahunan';
					document.getElementById('footerDiklatTahunan').innerHTML = '<button type="button" class="btn btn-primary" onclick="simpanDiklatTahunan();"><i class="fa fa-save"></i> Simpan</button>';
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					
					
							
						
					document.getElementById('formTambahDiklatTahunan').style.display = 'block';
				}, 300);
				document.getElementById('formTambahDiklatTahunan').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahDiklatTahunan').style.display = 'none';
		}, 300);
		document.getElementById('formTambahDiklatTahunan').className = 'pesanhilang';
	}, 300);
}

function hapusDiklatTahunanConfirm()
{
	$('#myModal1').modal('hide');
	var uri = '<?php echo base_url(); ?>' + 'inputdiklat/hapusdata/'+diklattahunanid;
	console.log(uri);
	
	
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
		{
		  
		  if (data.success == 1)
		  {
				refreshPage('<?php echo base_url(); ?>inputdiklat');
		  }
		}
	});
}
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Diklat</h4>
			</div>
			<div class="modal-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Id diklat</th>
					  <th>Tipe Diklat</th>
					  <th>Nama Diklat</th>
					  <th>Kurikulum</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						foreach($diklats as $diklat)
						{
							if($diklat->sesi > 0)
							{
								?>
								<tr id="<?php echo $diklat->diklatID;?>;<?php echo $diklat->diklatName;?>;<?php echo $diklat->kurikulumID;?>;<?php echo $diklat->kurikulumName;?>" onclick="pilihDiklat(this.id)" style="cursor: pointer;" data-toggle="tooltip" data-html="true" data-placement="top" title="Memiliki <?php echo $diklat->sesi; ?> Sesi">
									<td><?php echo $diklat->diklatID;?></td>
									<td><?php echo $diklat->diklatTypeName;?></td>
									<td><?php echo $diklat->diklatName;?></td>
									<td><?php echo $diklat->kurikulumName;?></td>
								</tr>
								<?php
							}	
							else
							{
								?>
								<tr style="background-color:#9E9E9E;" data-toggle="tooltip" data-html="true" data-placement="top" title="Tidak Memiliki Sesi">
									<td><?php echo $diklat->diklatID;?></td>
									<td><?php echo $diklat->diklatTypeName;?></td>
									<td><?php echo $diklat->diklatName;?></td>
									<td><?php echo $diklat->kurikulumName;?></td>
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
				<button type="button" class="btn btn-primary" disabled id="btnPilih" onclick="pilihDiklatOk()">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Hapus List Diklat Tahunan</h4>
			</div>
			<div class="modal-body">
					Apakah Anda Yakin Akan Melakukan Proses Hapus Data ?				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusDiklatTahunanConfirm();">Hapus</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
			</div>
		</div>
	</div>
</div>

<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
		<h3>
			Input Diklat Tahunan
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>inputdiklat');" style="cursor:pointer;"><i class="fa fa-calendar"></i> Input Diklat</a></li>
		</ol>
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Input Diklat Tahun : <?php echo $thisYear; ?></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
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

              <h3 class="box-title">Data Diklat Tahun : <?php echo $thisYear; ?></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-primary btn-sm pull-right" onclick="tambahDiklatTahunan();" style="margin-right: 5px;">
                  <i class="fa fa-plus"></i> Tambah Diklat Tahunan</button>
              </div>
            </div>
            
            <div class="box-body">
				
					<table class="table table-bordered" id="example2">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Diklat</th>
								<th>Ubah</th>
								<th>Hapus</th>
							</tr>
						</thead>
						<tbody>
						<?php 
						if($diklat_tahunans)
						{
							$i = 1;
							foreach ($diklat_tahunans as $diklat)
							{
								?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $diklat->diklatName;?></td>
									<td><button class="btn btn-warning" id="ubahdiklattahunan;<?php echo $diklat->diklatTahunanID;?>;<?php echo $diklat->diklatID; ?>;<?php echo $diklat->diklatName; ?>;<?php echo $diklat->yearID?>;<?php echo $diklat->yearName;?>" onclick="ubahDiklatTahunan(this.id);"><i class="fa fa-pencil"></i></button></td>
									<td><button class="btn btn-danger" id="hapusdiklattahunan;<?php echo $diklat->diklatTahunanID;?>" onclick="hapusDiklatTahunan(this.id);"><i class="fa fa-close"></i></button></td>
								</tr>
								<?php
								$i++;
							}
							
						}
						?>
						</tbody>
					</table>
					
			</div>
				
            <div class="box-footer clearfix no-border">
              
            </div>
          </div>
		  </div>
		  
		  
		<div id="formTambahDiklatTahunan" style="display:none;">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleDiklatTahunan"></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				<label>Nama Diklat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
                        <input class="form-control" type="text" name="diklatName" id="diklatName" readonly="true">
						<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></button></span>
                 </div>
                 
				
            </div>
            
            <div class="box-footer clearfix no-border" id="footerDiklatTahunan">
				
            </div>
          </div>
	  </div>
	  </div>
		  
	  </div>
	  
	  
     

    </section>
    
  </div>
 <script>
	function setSelectValue (id, val)
	{
		document.getElementById(id).value = val;
	}
	setSelectValue('selectTahun', <?php echo $thisYear; ?>);
	$("#example1").DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": false,
		"info": true,
		"autoWidth": true,
		"preDrawCallback": function( settings ) 
		{
			if(idBefore != '')
			{
				if(document.getElementById(idBefore) != null)
				{
					document.getElementById(idBefore).style.backgroundColor = "#fff";
				}
			}
		}
	});
 </script>
 <script src="<?php echo base_url();?>assets/lte/plugins/dragscroll/dragscroll.js"></script>