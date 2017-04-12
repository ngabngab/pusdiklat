<script>
var arrID;
var aksi, mataAjarID, mataAjarName, mataAjarDesc, jamLat;

function tambahMataAjar()
{
	mataAjarName = document.getElementById('mataAjarName').value;
	mataAjarDesc = document.getElementById('mataAjarDesc').value;
	jamLat = document.getElementById('jamLat').value;
	
	if(jamLat == '')
	{
		jamLat = '1';
	}
	
	if(mataAjarName == '')
	{
		alert('Nama mata ajar harus terisi');
	}
	else 
	{
		var uri = '<?php echo base_url(); ?>mata_ajar/insert/?mataajarname='+mataAjarName+'&mataajardesc='+mataAjarDesc+'&jamlat='+jamLat;
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>mata_ajar/');
			  }
			  else
			  {
				  alert('Mata Ajar Gagal Ditambah karena ' + data.message);
				  refreshPage('<?php echo base_url(); ?>mata_ajar/');
			  }
			}
		});
	}
	
}

function ubahData(id)
{
	$("#mataAjarName").removeAttr("readonly");
	$("#mataAjarDesc").removeAttr("readonly");
	$("#jamLat").removeAttr("readonly");
	
	arrID = id.split(';');
	aksi = arrID[0];
	mataAjarID = arrID[1];
	mataAjarName = arrID[2];
	mataAjarDesc = arrID[3];
	jamLat = arrID[4];
	
	
	setTimeout(function(){
		
		setTimeout(function(){
			
			setTimeout(function(){
				setTimeout(function(){
					
					document.getElementById('mataAjarName').value = mataAjarName;
					document.getElementById('mataAjarDesc').value = mataAjarDesc;
					document.getElementById('jamLat').value = jamLat;
					document.getElementById('titleBox').innerHTML = 'Ubah Mata Ajar';
					document.getElementById('modalFooter').innerHTML = '<button type="button" class="btn btn-warning" onclick="ubahMataAjar()"><i class="fa fa-save"></i> Simpan Perubahan</button>';
					document.getElementById('formTambahMataAjar').style.display = 'block';
					$(window).scrollTop(0);
				}, 300);
				document.getElementById('formTambahMataAjar').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahMataAjar').style.display = 'none';
		}, 300);
		document.getElementById('formTambahMataAjar').className = 'pesanhilang';
	}, 300);
	
	
}

function hapusData(id)
{
	
	
	arrID = id.split(';');
	aksi = arrID[0];
	mataAjarID = arrID[1];
	mataAjarName = arrID[2];
	mataAjarDesc = arrID[3];
	jamLat = arrID[4];
	$('#myModal1').modal('show');
}

function ubahMataAjar()
{
	mataAjarName = document.getElementById('mataAjarName').value;
	mataAjarDesc = document.getElementById('mataAjarDesc').value;
	jamLat = document.getElementById('jamLat').value;
	if(jamLat == '')
	{
		jamLat = '1';
	}
	
	var r = confirm("Apakah Anda Yakin Akan Merubah Data Mata Ajar ?");
	if(mataAjarName == '')
	{
		alert('Nama mata ajar harus terisi');
	}
	else
	{
		if (r == true) 
		{
			var uri = '<?php echo base_url(); ?>mata_ajar/edit/?mataajarid='+mataAjarID+'&mataajarname='+mataAjarName+'&mataajardesc='+mataAjarDesc+'&jamlat='+jamLat;
			
			$.ajax({
				type: 'get',
				url: uri,
				dataType: 'json',
				success: function (data) {
				 
				  if (data.message == 'success')
				  {
						refreshPage('<?php echo base_url(); ?>mata_ajar/');
				  }
				  else
				  {
					  alert('Mata Ajar Gagal Diubah karena ' + data.message);
					  refreshPage('<?php echo base_url(); ?>mata_ajar/');
				  }
				}
			});		
		}
		else
		{
			refreshPage('<?php echo base_url(); ?>mata_ajar/');
		}
	}
}

function hapusMataAjar()
{
	mataAjarName = document.getElementById('mataAjarName').value;
	mataAjarDesc = document.getElementById('mataAjarDesc').value;
	jamLat = document.getElementById('jamLat').value;
	
	var uri = '<?php echo base_url(); ?>mata_ajar/delete/?mataajarid='+mataAjarID+'&mataajarname='+mataAjarName+'&mataajardesc='+mataAjarDesc+'&jamlat='+jamLat;
			
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data)
			{				 
				if (data.message == 'success')
				{
					$('#myModal1').modal('hide');
					refreshPage('<?php echo base_url(); ?>mata_ajar/');
				}
				else
				{
					alert('Mata Ajar Gagal Dihapus karena ' + data.message);
					$('#myModal1').modal('hide');
					refreshPage('<?php echo base_url(); ?>mata_ajar/');
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
					
					document.getElementById('mataAjarName').value = '';
					document.getElementById('mataAjarDesc').value = '';
					document.getElementById('jamLat').value = '';
					document.getElementById('titleBox').innerHTML = 'Tambah Mata Ajar';
					document.getElementById('modalFooter').innerHTML = '<button type="button" class="btn btn-primary" onclick="tambahMataAjar()"><i class="fa fa-save"></i> Simpan</button>';
					document.getElementById('formTambahMataAjar').style.display = 'block';
					$(window).scrollTop(0);
				}, 300);
				document.getElementById('formTambahMataAjar').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formTambahMataAjar').style.display = 'none';
		}, 300);
		document.getElementById('formTambahMataAjar').className = 'pesanhilang';
	}, 300);
	
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
				Apakah Anda Yakin Akan Menghapus Data Mata Ajar ?					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusMataAjar()"><i class="fa fa-close"></i> Hapus</button>
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
			Mata Ajar
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>mata_ajar');" style="cursor:pointer;"><i class="fa fa-book"></i> Mata Ajar</a></li>
		</ol>
      <!-- /.row -->
      <!-- Main row -->
	  <div id="formTambahMataAjar" style="display:none;">
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
				<label>Nama Mata Ajar</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group">
                    <input class="form-control" type="text" name="mataAjarName" id="mataAjarName">
					<span class="input-group-btn">
                </div>
				
				<div class="form-group">
                    <label>Deskripsi Mata Ajar</label>
                    <textarea name="mataAjarDesc" id="mataAjarDesc" class="form-control" rows="3"></textarea>
                </div>
				
				<div class="form-group">
                    <label>Total Jam Lat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="number" name="jamLat" placeholder="1" id="jamLat" min="1" value="1" style="width: 100px;" step="0.1"> 
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

              <h3 class="box-title">Data Mata Ajar</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahData();">
					<i class="fa fa-plus"></i> Tambah Mata Ajar</button>
              </div>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example7" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td style="width:30px!important;">NO</td>
					  <td style="width:300px!important;">Nama Mata Ajar</td>
					  <td style="width:400px!important;">Deskripsi</td>
					  <td style="width:100px!important;">Total Jam Lat</td>
					  <td style="width:100px!important;">Aksi</td>
					</tr>
					</thead>
					<tbody>
						<?php
						if($mata_ajars)
						{
							$i = 1;
							foreach ($mata_ajars as $mata_ajar)
							{
								
								?>
								<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $mata_ajar->mataAjarName;?></td>
								<td><?php echo $mata_ajar->mataAjarDesc;?></td>
								<td><?php echo $mata_ajar->jamLat;?></td>
								<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Mata Ajar" id="ubah;<?php echo $mata_ajar->mataAjarID;?>;<?php echo $mata_ajar->mataAjarName;?>;<?php echo $mata_ajar->mataAjarDesc;?>;<?php echo $mata_ajar->jamLat;?>" onclick="ubahData(this.id);"><i class="fa fa-pencil"></i></button>&nbsp&nbsp<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Mata Ajar" id="hapus;<?php echo $mata_ajar->mataAjarID;?>;<?php echo $mata_ajar->mataAjarName;?>;<?php echo $mata_ajar->mataAjarDesc;?>;<?php echo $mata_ajar->jamLat;?>" onclick="hapusData(this.id);"><i class="fa fa-close"></i></button></td>
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
  </script>