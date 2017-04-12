<script>
var arrSplit, diklattypeid, diklattypename, diklatid, diklatname, aksi, kurikulumid, kurikulumname, jenisname;

var idDiklatTypeBefore, idDiklatType;
var diklattype = [];
idDiklatTypeBefore = idDiklatType = '';

var idKurikulumBefore, idKurikulum;
var kurikulum = [];
idKurikulumBefore = idKurikulum = '';

function pilihDiklatType(id)
{	
	idDiklatType = id;
	pilihDiklatTypeOk();
	/*
	if(idDiklatTypeBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idDiklatTypeBefore = id;
		idDiklatType = id;
	}
	else
	{
		if(document.getElementById(idDiklatTypeBefore) != null)
		{
			document.getElementById(idDiklatTypeBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idDiklatTypeBefore = id;
		idDiklatType = id;
	}
	$("#btnPilihDiklatType").removeAttr("disabled");
	*/
}
function pilihDiklatTypeOk()
{
	arrSplit = idDiklatType.split(";");
	diklattypeid = arrSplit[0];
	diklattypename = arrSplit[1];
	
	if(diklattype.length == 0)
	{
		diklattype.push({'diklattypeid':diklattypeid, 'diklattypename':diklattypename});
	}
	else
	{
		diklattype.pop();
		diklattype.push({'diklattypeid':diklattypeid, 'diklattypename':diklattypename});
	}
	
	//document.getElementById('diklatTypeName').value = diklattype[0].diklattypename;
	
	//$('#myModal').modal('toggle');
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
	
	
	$('#myModal5').modal('hide');
}

function ubahData(id)
{
	arrID = id.split(';');
	aksi = arrID[0];
	
	if(diklattype.length > 0)
	{
		diklattype.pop();
	}
	
	if (kurikulum.length > 0)
	{
		kurikulum.pop();
	}
	
	diklatid = arrID[1];
	diklattypeid = arrID[2];
	diklattypename = arrID[3];
	diklatName = arrID[4];
	kurikulumid = arrID[5];
	kurikulumname = arrID[6];
	jenisname = arrID[7];
	
	diklattype.push({'diklattypeid':diklattypeid, 'diklattypename':diklattypename});
	kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	
	
	setTimeout(function(){	
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					document.getElementById('boxForm').style.display = 'block';
					document.getElementById('formHeader').innerHTML = 'Form Ubah Diklat';
					document.getElementById('formFooter').innerHTML = '<button type="button" class="btn btn-warning"  onclick="ubahDiklat();"><i class="fa fa-save"></i> Simpan Perubahan</button>';
					document.getElementById('diklatTypeName').value = diklattype[0].diklattypeid+';'+diklattype[0].diklattypename;
					document.getElementById('diklatName').value = diklatName;
					document.getElementById('kurikulumName').value = kurikulumname;
					document.getElementById('jenisName').value = kurikulum[0].jenisname;
					$(window).scrollTop(0);
				}, 300);
				document.getElementById('boxForm').className = 'pesanmuncul';
			}, 300);
			document.getElementById('boxForm').style.display = 'none';
		}, 300);
		document.getElementById('boxForm').className = 'pesanhilang';
	}, 300);
	
}

function hapusData(id)
{
	arrID = id.split(';');
	aksi = arrID[0];
	diklatid = arrID[1];
	if(diklattype.length > 0)
	{
		diklattype.pop();
	}
	
	if (kurikulum.length > 0)
	{
		kurikulum.pop();
	}
	
	diklatid = arrID[1];
	diklattypeid = arrID[2];
	diklattypename = arrID[3];
	diklatName = arrID[4];
	kurikulumid = arrID[5];
	kurikulumname = arrID[6];
	jenisname = arrID[7];
	
	diklattype.push({'diklattypeid':diklattypeid, 'diklattypename':diklattypename});
	
	kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	$('#myModal1').modal('show');
	$(window).scrollTop(0);
}


function tambahDiklat()
{
	diklatname  = document.getElementById('diklatName').value;
	
	if(diklattype.length == 0)
	{
		alert('Jenis Diklat Harus Terisi');
	}
	else if (diklatname == '')
	{
		alert('Nama Diklat Harus Terisi');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>diklat/insert/?diklattypeid='+diklattype[0].diklattypeid+'&diklatname='+diklatname+'&kurikulumid='+kurikulum[0].kurikulumid;
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>diklat/');
			  }
			  else
			  {
					alert('Gagal Menambahkan Data karena ' + data.message);
			  }
			  
			}
		});
		
	}
}

function ubahDiklat()
{
	diklatname  = document.getElementById('diklatName').value;
	
	if(diklattype.length == 0)
	{
		alert('Jenis Diklat Harus Terisi');
	}
	else if (diklatname == '')
	{
		alert('Nama Diklat Harus Terisi');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>diklat/update/?diklatid='+diklatid+'&diklattypeid='+diklattype[0].diklattypeid+'&diklatname='+diklatname+'&kurikulumid='+kurikulum[0].kurikulumid;
		;
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>Diklat/');
			  }
			  else
			  {
					alert('Gagal Merubah Data karena ' + data.message);
			  }
			  
			}
		});
		
	}
}

function hapusDiklat()
{
		var uri = '<?php echo base_url(); ?>diklat/delete/?diklatid='+diklatid+'&diklattypeid='+diklattype[0].diklattypeid+'&diklatname='+diklatname+'&kurikulumid='+kurikulum[0].kurikulumid;
		;
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
			  if (data.message == 'success')
			  {
					$('#myModal1').modal('hide');
					refreshPage('<?php echo base_url(); ?>diklat/');
			  }
			  else
			  {
					alert('Gagal Menghapus Data karena ' + data.message);
			  }
			  
			}
		});
}

function tambahData()
{
	setTimeout(function(){	
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					document.getElementById('boxForm').style.display = 'block';
					document.getElementById('formHeader').innerHTML = 'Form Tambah Diklat';
					document.getElementById('formFooter').innerHTML = '<button type="button" class="btn btn-primary"  onclick="tambahDiklat();"><i class="fa fa-save"></i> Simpan</button>';
					document.getElementById('diklatName').value = '';
				}, 300);
				document.getElementById('boxForm').className = 'pesanmuncul';
			}, 300);
			document.getElementById('boxForm').style.display = 'none';
		}, 300);
		document.getElementById('boxForm').className = 'pesanhilang';
	}, 300);
}
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Tipe Diklat</h4>
			</div>
			<div class="modal-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Nama Tipe Diklat</th>
							<th>Nama Bidang</th>
						</tr>
					</thead>
					<tbody>
						<?php
						if($diklat_types)
						{
							foreach($diklat_types as $diklat_type)
							{
								?>
								<tr id="<?php echo $diklat_type->diklatTypeID; ?>;<?php echo $diklat_type->diklatTypeName; ?>" onclick="pilihDiklatType(this.id);" style="cursor: pointer;">
									<td><?php echo $diklat_type->diklatTypeName; ?></td>
									<td><?php echo $diklat_type->bidangShortName; ?></td>
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihDiklatType" onclick="pilihDiklatTypeOk()">Pilih</button>
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
				<h4 class="modal-title" id="myModalLabel">Hapus Diklat</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Yakin Akan Menghapus Data Diklat ?						
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusDiklat()"><i class="fa fa-close"></i> Hapus</button>
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

<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <h3>
			Diklat
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>diklat');" style="cursor:pointer;"><i class="fa fa-briefcase"></i> Diklat</a></li>
		</ol>
      <!-- /.row -->
      <!-- Main row -->
	  <div id="boxForm" style="display:none;">
      <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="formHeader"></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                 <i class="fa fa-minus"></i></button>
				
              </div>
            </div>
            
            <div class="box-body">
				<label>Nama Tipe Diklat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group">
                    <!-- <input class="form-control" type="text" name="diklatTypeName" id="diklatTypeName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></button></span> -->
					<select class="form-control" id="diklatTypeName" onchange="pilihDiklatType(this.value)">
						<?php
						if($diklat_types)
						{
							foreach($diklat_types as $diklat_type)
							{
								?>
								<option id="<?php echo $diklat_type->diklatTypeID; ?>;<?php echo $diklat_type->diklatTypeName; ?>" value="<?php echo $diklat_type->diklatTypeID; ?>;<?php echo $diklat_type->diklatTypeName; ?>"><?php echo $diklat_type->diklatTypeName; ?></option>
								<?php
							}
						}
						?>
					</select>
                </div>
				
				<label>Kurikulum</label>
				<div class="form-group input-group">
					<input class="form-control" type="text" name="kurikulumName" id="kurikulumName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal5"><i class="fa fa-search"></i></button></span>
                </div>
				
				<label>Jenis Kurikulum</label>
				<div class="form-group">
					<input class="form-control" type="text" name="jenisName" id="jenisName" readonly="true">
                </div>
			
				<label>Nama Diklat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group">
                    <input class="form-control" type="text" name="diklatName" id="diklatName">
					
						
					<span class="input-group-btn">
                </div>
				
            </div>
            
            <div class="box-footer clearfix no-border" id="formFooter">
              <button type="button" class="btn btn-primary"  onclick="tambahDiklat();" id="btnTambahDiklat"><i class="fa fa-plus"></i> Tambah Diklat</button>&nbsp&nbsp
			  <button type="button" class="btn btn-warning"  onclick="ubahDiklat();" id="btnUbahDiklat" disabled><i class="fa fa-pencil"></i> Ubah Diklat</button>&nbsp&nbsp
			  <button type="button" class="btn btn-danger"  onclick="hapusDiklat();" id="btnHapusDiklat" disabled><i class="fa fa-pencil"></i> Hapus Diklat</button>
            </div>
          </div>
		  </div>
	  </div>
	  </div>
	  
	  <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Diklat</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
				  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahData();">
				  <i class="fa fa-plus" ></i> Tambah Diklat</button> 
              </div>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example7" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td style="width:30px!important;">NO</td>
					  <td style="width:100px!important;">Tipe Diklat</td>
					  <td style="width:200px!important;">Nama Bidang</td>
					  <td style="width:200px!important;">Nama Kurikulum</td>
					  <td style="width:200px!important;">Nama Diklat</td>
					  <td style="width:100px!important;">Ubah / Hapus</td>
					</tr>
					</thead>
					<tbody>
						<?php
						if($diklats)
						{
							$i = 1;
							foreach ($diklats as $diklat)
							{
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $diklat->diklatTypeName; ?></td>
									<td><?php echo $diklat->bidangShortName; ?></td>
									<td><?php echo $diklat->kurikulumName; ?></td>
									<td><?php echo $diklat->diklatName; ?></td>
									<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Diklat" id="ubah;<?php echo $diklat->diklatID; ?>;<?php echo $diklat->diklatTypeID; ?>;<?php echo $diklat->diklatTypeName; ?>;<?php echo $diklat->diklatName; ?>;<?php echo $diklat->kurikulumID; ?>;<?php echo $diklat->kurikulumName; ?>;<?php echo $diklat->kurikulumTypeName; ?>" onclick="ubahData(this.id);"><i class="fa fa-pencil"></i></button>&nbsp&nbsp<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Diklat" id="hapus;<?php echo $diklat->diklatID; ?>;<?php echo $diklat->diklatTypeID; ?>;<?php echo $diklat->diklatTypeName; ?>;<?php echo $diklat->diklatName; ?>;<?php echo $diklat->kurikulumID; ?>;<?php echo $diklat->kurikulumName; ?>;<?php echo $diklat->kurikulumTypeName; ?>" onclick="hapusData(this.id);"><i class="fa fa-close"></i></button></td>
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
	  
	  
     

    </section>
    
  </div>
  <script>
	pilihDiklatType(document.getElementById('diklatTypeName').value);
	
	$('#example7').dataTable({
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
	
	$('#example1').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true,
	  "preDrawCallback": function( settings ) 
	  {
        if(idDiklatTypeBefore != '')
		{
			if(document.getElementById(idDiklatTypeBefore) != null)
			{
				document.getElementById(idDiklatTypeBefore).style.backgroundColor = "#fff";
			}
		}
	  }
    });
  </script>