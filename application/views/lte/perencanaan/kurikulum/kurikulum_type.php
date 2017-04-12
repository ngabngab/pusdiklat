<script>
var idBefore = '';
var arrSplit, diklattypeid, diklattypename, bidangfullname,idDiklatTypeBefore, idDiklatType, arrID, kurikulumTypeID;
var diklattype = [];
idDiklatTypeBefore = idDiklatType = '';


function pilihDiklatType(id)
{
	
	if(idDiklatTypeBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idDiklatTypeBefore = id;
		idDiklatType = id;
	}
	else
	{
		document.getElementById(idDiklatTypeBefore).style.backgroundColor = "#fff";
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idDiklatTypeBefore = id;
		idDiklatType = id;
	}
	$("#btnDiklatType").removeAttr("disabled");
}

function pilihDiklatTypeOk()
{
	arrSplit = idDiklatType.split(";");
	diklattypeid = arrSplit[0];
	diklattypename = arrSplit[1];
	bidangFullName = arrSplit[2];
	
	if(diklattype.length == 0)
	{
		diklattype.push({'diklattypeid':diklattypeid, 'diklattypename':diklattypename});
	}
	else
	{
		diklattype.pop();
		diklattype.push({'diklattypeid':diklattypeid, 'diklattypename':diklattypename});
	}
	
	document.getElementById('diklatTypeName').value = diklattype[0].diklattypename;
	$('#myModal').modal('toggle');
	
}

function tambahKurikulumType()
{
	var kurikulumtypename = document.getElementById('kurikulumTypeName').value;
	
	if(diklattype.length == 0)
	{
		alert('Anda Belum Memilih Jenis Diklat');
	}
	else if (kurikulumtypename == '')
	{
		alert('Nama Jenis Kurikulum tidak boleh kosong');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>kurikulum_type/insert/?diklattypeid='+diklattype[0].diklattypeid+'&kurikulumtypename='+kurikulumtypename;
		
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>kurikulum_type/');
			  }
			  else
			  {
				  alert('Mata Ajar Gagal Ditambah karena ' + data.message);
				  refreshPage('<?php echo base_url(); ?>kurikulum_type/');
			  }
			}
		});
		
	}
}


function ubahData(id)
{
	
	
	if(diklattype.length > 0)
	{
		diklattype.pop();
	}
	
	
	
	arrID = id.split(';');
	aksi = arrID[0];
	kurikulumtypeid = arrID[1];
	kurikulumtypename = arrID[2];
	diklattypeid = arrID[3];
	diklattypename = arrID[4];
	
	diklattype.push({'diklattypeid':diklattypeid, 'diklattypename':diklattypename});
	
	
	
	
		
	setTimeout(function(){
			
		setTimeout(function(){

			setTimeout(function(){
				setTimeout(function(){
					document.getElementById('diklatTypeName').value = 	diklattypename;
					document.getElementById('kurikulumTypeName').value = kurikulumtypename;
					document.getElementById('titleBox').innerHTML = 'Ubah Jenis Kurikulum';
					document.getElementById('modalFooter').innerHTML = '<button type="button" class="btn btn-warning" onclick="ubahKurikulumType()"><i class="fa fa-edit"></i> Simpan Perubahan</button>';
					document.getElementById('formTambahKurikulumType').style.display = 'block';
					$(window).scrollTop(0);
				}, 300);
				document.getElementById('formTambahKurikulumType').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahKurikulumType').style.display = 'none';
		}, 300);
		document.getElementById('formTambahKurikulumType').className = 'pesanhilang';
	}, 300);
	
}

function hapusData(id)
{
	
	
	if(diklattype.length > 0)
	{
		diklattype.pop();
	}
	
	
	
	arrID = id.split(';');
	aksi = arrID[0];
	kurikulumtypeid = arrID[1];
	kurikulumtypename = arrID[2];
	diklattypeid = arrID[3];
	diklattypename = arrID[4];
	
	diklattype.push({'diklattypeid':diklattypeid, 'diklattypename':diklattypename});
	
	$('#myModal1').modal('show');
}

function ubahKurikulumType()
{
	var kurikulumtypename = document.getElementById('kurikulumTypeName').value;
	
	if(diklattype.length == 0)
	{
		alert('Anda Belum Memilih Jenis Diklat');
	}
	else if (kurikulumtypename == '')
	{
		alert('Nama Jenis Kurikulum tidak boleh kosong');
	}
	else
	{
		
		
		var uri = '<?php echo base_url(); ?>kurikulum_type/update/?kurikulumtypeid='+kurikulumtypeid+'&diklattypeid='+diklattype[0].diklattypeid+'&kurikulumtypename='+kurikulumtypename;
		
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>kurikulum_type/');
			  }
			  else
			  {
				  alert('Jenis Kurikulum Gagal Diubah karena ' + data.message);
				  refreshPage('<?php echo base_url(); ?>kurikulum_type/');
			  }
			}
		});
		
	}
}

function hapusKurikulumType()
{
	var kurikulumtypename = document.getElementById('kurikulumTypeName').value;
	
		var uri = '<?php echo base_url(); ?>kurikulum_type/delete/?kurikulumtypeid='+kurikulumtypeid+'&diklattypeid='+diklattype[0].diklattypeid+'&kurikulumtypename='+kurikulumtypename;
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  if (data.message == 'success')
			  {
					$('#myModal1').modal('hide');
					refreshPage('<?php echo base_url(); ?>kurikulum_type/');
			  }
			  else
			  {
				  alert('Jenis Kurikulum Gagal Dihapus karena ' + data.message);
				  $('#myModal1').modal('hide');
				  refreshPage('<?php echo base_url(); ?>kurikulum_type/');
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
					document.getElementById('diklatTypeName').value = '';
					document.getElementById('kurikulumTypeName').value = '';
					document.getElementById('titleBox').innerHTML = 'Tambah Jenis Kurikulum';
					document.getElementById('modalFooter').innerHTML = '<button type="button" class="btn btn-primary" onclick="tambahKurikulumType()"><i class="fa fa-save"></i> Simpan</button>';
					document.getElementById('formTambahKurikulumType').style.display = 'block';
				}, 300);
				document.getElementById('formTambahKurikulumType').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahKurikulumType').style.display = 'none';
		}, 300);
		document.getElementById('formTambahKurikulumType').className = 'pesanhilang';
	}, 300);
	
}

</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Type Diklat</h4>
			</div>
			<div class="modal-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Tipe Diklat</th>
							<th>Nama Bidang Full</th>
						</tr>
					</thead>
					<tbody>
						<?php
							if($diklat_types)
							{
								foreach ($diklat_types as $diklat_type)
								{
									?>
									<tr id="<?php echo $diklat_type->diklatTypeID;?>;<?php echo $diklat_type->diklatTypeName;?>;<?php echo $diklat_type->bidangFullName;?>" onclick="pilihDiklatType(this.id)" style="cursor: pointer;">
									<td><?php echo $diklat_type->diklatTypeName;  ?></td>
									<td><?php echo $diklat_type->bidangFullName;  ?></td>
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
				<button type="button" class="btn btn-primary" disabled id="btnDiklatType" onclick="pilihDiklatTypeOk()">Pilih</button>
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
				<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Data</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Yakin Akan Menghapus Data Jenis Kurikulum ?					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusKurikulumType()"><i class="fa fa-close"></i> Hapus</button>
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
			Jenis Kurikulum
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>kurikulum_type');" style="cursor:pointer;"><i class="fa fa-object-group"></i> Jenis Kurikulum</a></li>
		</ol>
      <!-- /.row -->
      <!-- Main row -->
	  <div id="formTambahKurikulumType" style="display:none;">
      <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleBox"></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                <i class="fa fa-minus"></i></button>
				   
              </div>
            </div>
            
            <div class="box-body">
				<label>Nama Jenis Diklat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="diklatTypeName" id="diklatTypeName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></button></span>
                </div>
			
				<label>Nama Jenis Kurikulum</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group">
                    <input class="form-control" type="text" name="kurikulumTypeName" id="kurikulumTypeName">
					<span class="input-group-btn">
                </div>
            </div>
            
            <div class="box-footer clearfix no-border" id="modalFooter">
				
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

              <h3 class="box-title">Data Jenis Kurikulum</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                <i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahData();">
					<i class="fa fa-plus"></i> Tambah Jenis Kurikulum</button>
              </div>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example7" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td style="width:30px!important;">NO</td>
					  <td style="width:400px!important;">Nama Jenis Kurikulum</td>
					  <td style="width:300px!important;">Tipe Diklat</td>
					  <td style="width:100px!important;">Ubah / Hapus</td>
					</tr>
					</thead>
					<tbody>
						<?php
						if($kurikulum_types)
						{
							$i = 1;
							foreach ($kurikulum_types as $kurikulum_type)
							{
								
								?>
								<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $kurikulum_type->kurikulumTypeName;?></td>
								<td><?php echo $kurikulum_type->diklatTypeName;?></td>
								<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Jenis Kurikulum" id="ubah;<?php echo $kurikulum_type->kurikulumTypeID;?>;<?php echo $kurikulum_type->kurikulumTypeName;?>;<?php echo $kurikulum_type->diklatTypeID;?>;<?php echo $kurikulum_type->diklatTypeName;?>" onclick="ubahData(this.id);"><i class="fa fa-pencil"></i></button>&nbsp&nbsp<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Jenis Kurikulum" id="hapus;<?php echo $kurikulum_type->kurikulumTypeID;?>;<?php echo $kurikulum_type->kurikulumTypeName;?>;<?php echo $kurikulum_type->diklatTypeID;?>;<?php echo $kurikulum_type->diklatTypeName;?>" onclick="hapusData(this.id);"><i class="fa fa-close"></i></button></td>
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
	$('#example7').dataTable({
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
      "autoWidth": true
    });
  </script>