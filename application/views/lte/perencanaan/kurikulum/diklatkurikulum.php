<script>
var arrSplit, kurikulumid, kurikulumname, jenisname ,diklatid, diklatname, detailid;


var idKurikulumBefore, idKurikulum;
var kurikulum = [];
idKurikulumBefore = idKurikulum = '';


var idDiklatBefore, idDiklatAjar;
var diklat = [];
idDiklatBefore = idDiklat = '';

<?php
if($diklatid)
{
	?>
	diklatid = '<?php echo $diklatid; ?>';
	diklatname = '<?php echo $diklatname; ?>';
	diklat.push({'diklatid':diklatid, 'diklatname':diklatname});
	viewDiklatKurikulum('tambah;'+diklatid+';'+diklatname);
	<?php
}
?>

function pilihDiklat(id)
{	
	if(idDiklatBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idDiklatBefore = id;
		idDiklat = id;
	}
	else
	{
		if(document.getElementById(idDiklatBefore) != null)
		{
			document.getElementById(idDiklatBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idDiklatBefore = id;
		idDiklat = id;
	}
	$("#btnPilihDiklat").removeAttr("disabled");
}

function pilihDiklatOk()
{
	arrSplit = idDiklat.split(";");
	diklatid = arrSplit[0];
	diklatname = arrSplit[1];
	
	
	if(diklat.length == 0)
	{
		diklat.push({'diklatid':diklatid, 'diklatname':diklatname});
	}
	else
	{
		diklat.pop();
		diklat.push({'diklatid':diklatid, 'diklatname':diklatname});
	}
	document.getElementById('diklatName').value = diklat[0].diklatname;
	
	if(kurikulum.length > 0)
	{
		kurikulum.pop();
		$("#btnTambahKurikulumRinci").removeAttr("disabled");
		$("#btnHapusKurikulumRinci").attr('disabled', true);
		$("#btnUbahKurikulumRinci").attr('disabled', true);
		document.getElementById('diklatName').value = '';
	}
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
	jenisname = arrSplit[2];
	
	if(kurikulum.length == 0)
	{
		kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	else
	{
		kurikulum.pop();
		kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	
	document.getElementById('kurikulumName').value = kurikulum[0].kurikulumname;
	document.getElementById('jenisName').value = kurikulum[0].jenisname;
	
	
	$('#myModal5').modal('toggle');
}

function viewKurikulumRinci()
{
	if(diklat.length == 0)
	{
		alert('Anda Belum Memilih diklat');
	}
	else
	{
		var uri = '<?php echo base_url();?>diklatkurikulum/?diklatid='+diklat[0].diklatid+'&diklatname='+diklat[0].diklatname;
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
	if(diklat.length == 0)
	{
		alert('Anda Belum Mengisi Diklat');
	}
	else if (kurikulum.length == 0)
	{
		alert('Anda Belum Mengisi kurikulum');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>diklatkurikulum/insert/?kurikulumid='+kurikulumid+'&diklatid='+diklat[0].diklatid+'&diklatname='+diklat[0].diklatname;
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>diklatkurikulum/?diklatid='+diklat[0].diklatid+'&diklatname='+diklat[0].diklatname);
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
	if(kurikulum.length > 0)
	{
		kurikulum.pop();
	}
	
	detailid = arrID[1];
	kurikulumid = arrID[2];
	kurikulumname = arrID[3];
	jenisname = arrID[4];
	
	kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	
	
	
	
	
	
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('kurikulumName').value = kurikulumname;
					document.getElementById('jenisName').value = kurikulum[0].jenisname;
					document.getElementById('formTambahDiklatKurikulum').style.display = 'block';
					document.getElementById('titleDiklatKurikulum').innerHTML = 'Form Ubah Diklat Kurikulum : ' + diklatname;
					document.getElementById('footerDiklatKurikulum').innerHTML = '<button type="button" class="btn btn-warning" style="margin-right: 5px;" onclick="ubahKurikulumRinci();"><i class="fa fa-save"></i>  Simpan Perubahan</button>';
					
				}, 300);
				document.getElementById('formTambahDiklatKurikulum').className = 'pesanmuncul';	
			}, 300);
			document.getElementById('formTambahDiklatKurikulum').style.display = 'none';
		}, 300);
		document.getElementById('formTambahDiklatKurikulum').className = 'pesanhilang';
	}, 300);
	
	
}

function ubahKurikulumRinci()
{
	var uri = '<?php echo base_url(); ?>diklatkurikulum/update/?detailid='+detailid+'&kurikulumid='+kurikulumid+'&diklatid='+diklat[0].diklatid+'&diklatname='+diklat[0].diklatname;
	
	if(diklat.length == 0)
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
					refreshPage('<?php echo base_url(); ?>diklatkurikulum/?diklatid='+diklat[0].diklatid+'&diklatname='+diklat[0].diklatname);
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
	
	arrID = id.split(';');
	aksi = arrID[0];
	if(kurikulum.length > 0)
	{
		kurikulum.pop();
	}
	
	detailid = arrID[1];
	kurikulumid = arrID[2];
	kurikulumname = arrID[3];
	jenisname = arrID[4];
	
	kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	
	$('#myModal7').modal('show');
	
	
	
	
}

function hapusKurikulumRinci()
{
	var uri = '<?php echo base_url(); ?>diklatkurikulum/delete/?detailid='+detailid+'&kurikulumid='+kurikulumid+'&diklatid='+diklat[0].diklatid+'&diklatname='+diklat[0].diklatname;
	
	if(diklat.length == 0)
	{
		alert('Anda Belum Mengisi diklat');
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
					$('#myModal7').modal('hide');
					refreshPage('<?php echo base_url(); ?>diklatkurikulum/?diklatid='+diklat[0].diklatid+'&diklatname='+diklat[0].diklatname);
			  }
			  else
			  {
				  alert('Gagal Menambahkan Data karena ' + data.message);
			  }
			  
			}
		});
	}
}

function viewDiklatKurikulum(id)
{
	var uri, str, i, j;
	arrID = id.split(';');
	aksi = arrID[0];
	diklatid = arrID[1];
	diklatname = arrID[2];
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('tableDiklatKurikulum').style.display = 'block';
					document.getElementById('formTambahDiklatKurikulum').style.display = 'none';
					document.getElementById('kurikulumName').value = '';
					document.getElementById('jenisName').value = '';
					uri = '<?php echo base_url(); ?>diklatkurikulum/ambildetail/'+diklatid;
					$.ajax({
						type: 'get',
						url: uri,
						dataType: 'json',
						success: function (data) {
							i = 0;
							str = '';
							while (i < data.length)
							{
								j = i + 1;
								str += '<tr><td>'+j+'</td><td>'+data[i].diklatName+'</td><td>'+data[i].kurikulumName+'</td><td><button type="button" class="btn btn-warning" style="margin-right: 5px;" id="ubah;'+data[i].detailID+';'+data[i].kurikulumID+';'+data[i].kurikulumName+';'+data[i].kurikulumTypeName+'" onclick="ubahData(this.id)"><i class="fa fa-pencil"></i></button><button type="button" class="btn btn-danger" id="ubah;'+data[i].detailID+';'+data[i].kurikulumID+';'+data[i].kurikulumName+';'+data[i].kurikulumTypeName+'" onclick="hapusData(this.id)" style="margin-right: 5px;"><i class="fa fa-close" ></i></button></td></tr>';
								i++;
							}
							document.getElementById('bodyTableDiklatKurikulum').innerHTML = str;
							if(diklat.length > 0)
							{
								diklat.pop();
								diklat.push({'diklatid':diklatid, 'diklatname':diklatname});
							}
							else
							{
								diklat.push({'diklatid':diklatid, 'diklatname':diklatname});
							}
							
						}
					
					});
					
				}, 300);
				document.getElementById('tableDiklatKurikulum').className = 'pesanmuncul';
				document.getElementById('formTambahDiklatKurikulum').className = 'pesanhilang';
			}, 300);
			document.getElementById('tableDiklatKurikulum').style.display = 'none';
		}, 300);
		document.getElementById('tableDiklatKurikulum').className = 'pesanhilang';
	}, 300);
}

function tambahData()
{
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('formTambahDiklatKurikulum').style.display = 'block';
					document.getElementById('titleDiklatKurikulum').innerHTML = 'Form Tambah Diklat Kurikulum : ' + diklatname;
					document.getElementById('footerDiklatKurikulum').innerHTML = '<button type="button" class="btn btn-primary" style="margin-right: 5px;" onclick="tambahKurikulumRinci();"><i class="fa fa-save" ></i>  Simpan</button>';
					
				}, 300);
				document.getElementById('formTambahDiklatKurikulum').className = 'pesanmuncul';
				
			}, 300);
			document.getElementById('formTambahDiklatKurikulum').style.display = 'none';
		}, 300);
		document.getElementById('formTambahDiklatKurikulum').className = 'pesanhilang';
	}, 300);
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
						<th>Jenis Kurikulum</th>
						<th>Nama Kurikulum</th>
					</tr>	
					</thead>
						<tbody>
							<?php
							if($kurikulums)
							{
								foreach($kurikulums as $kurikulum)
								{
									?>
									<tr id="<?php echo $kurikulum->kurikulumID;?>;<?php echo $kurikulum->kurikulumName;?>;<?php echo $kurikulum->kurikulumTypeName;?>" onclick="pilihKurikulum(this.id)" style="cursor: pointer;">
										<td><?php echo $kurikulum->kurikulumTypeName;?></td>
										<td><?php echo $kurikulum->kurikulumName;?></td>
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
				<h4 class="modal-title" id="myModalLabel">List Diklat</h4>
			</div>
			<div class="modal-body">
				<table id="example8" class="table table-bordered table-hover">
					<thead>
					<tr>
						<th>Jenis Diklat</th>
						<th>Nama Diklat</th>
						
					</tr>
					
					</thead>
					<tbody>
						<?php
						if($diklats)
						{
							foreach($diklats as $diklat)
							{
								
								?>
								<tr id="<?php echo $diklat->diklatID;?>;<?php echo $diklat->diklatName;?>" onclick="pilihDiklat(this.id)" style="cursor: pointer;">
									<td><?php echo $diklat->diklatTypeName;?></td>
									<td><?php echo $diklat->diklatName;?></td>
									
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihDiklat" onclick="pilihDiklatOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
		</div>
	</div>
</div>


<div class="modal fade modal-danger" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Hapus Diklat Kurikulum</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Yakin Akan Menghapus Data ?				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusKurikulumRinci();"><i class="fa fa-close"></i>Hapus</button>
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

              <h3 class="box-title">Data Diklat Kurikulum</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example9" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td style="width:20px!important;">NO</td>
					  <td style="width:70px!important;">Jenis Diklat</td>
					  <td style="width:70px!important;">Nama Diklat</td>
					  <td style="width:50px!important;">Lihat Diklat Kurikulum</td>
					</tr>
					</thead>
					<tbody>
						<?php
						if($diklats)
						{
							$i = 1;
							foreach($diklats as $diklat)
							{							
							?>
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $diklat->diklatTypeName;?></td>
								<td><?php echo $diklat->diklatName;?></td>
								<?php
								if ($diklat->jml > 0)
								{
									?>
									<td><button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Lihat Diklat Kurikulum" id="viewdiklatkurikulum;<?php echo $diklat->diklatID; ?>;<?php echo $diklat->diklatName; ?>" onclick="viewDiklatKurikulum(this.id)"><i class="fa fa-table"></i></button></td>
									<?php
								}
								else
								{
									?>
									<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Lihat Diklat Kurikulum" id="viewdiklatkurikulum;<?php echo $diklat->diklatID; ?>;<?php echo $diklat->diklatName; ?>" onclick="viewDiklatKurikulum(this.id)"><i class="fa fa-table"></i></button></td>
									<?php
								}
								?>
								
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
				<div class="box-footer clearfix no-border">
				
				</div>
			</div>
			
				
            </div>
            
            
        </div>
	  </div>
	  
	 
	  
		  
	  <div class="row">
		<div id="formTambahDiklatKurikulum" style="display:none;">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleDiklatKurikulum"></h3>

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
				
				<label>Jenis Kurikulum</label>
				<div class="form-group">
					<input class="form-control" type="text" name="jenisName" id="jenisName" readonly="true">
                </div>
            </div>
            
            <div class="box-footer clearfix no-border" id="footerDiklatKurikulum">
				
			  
            </div>
          </div>
		  </div>
		  </div>
		  
		  <div id="tableDiklatKurikulum" style="display:none;">
		  <div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Diklat Kurikulum</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
				  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahData();"><i class="fa fa-plus" ></i> Tambah Diklat Kurikulum</button>
              </div>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example7" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td style="width:20px!important;">NO</td>
					  <td style="width:70px!important;">Nama Diklat</td>
					  <td style="width:70px!important;">Nama Kurikulum</td>
					  <td style="width:50px!important;">Ubah / Hapus</td>
					</tr>
					</thead>
					<tbody id="bodyTableDiklatKurikulum">
						
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
	  
	  

    </section>
    
  </div>
  <script>
  
	
	$('#example7').dataTable({
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
	  "preDrawCallback": function(settings) 
	  {
        if(idDiklatBefore != '')
		{
			if(document.getElementById(idDiklatBefore) != null)
			{
				document.getElementById(idDiklatBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
	
	
	
	
  </script>