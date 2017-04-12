<script>
var arrSplit, kurikulumid, kurikulumname, kurikulumjenisid, jenisid, jenisname;
var idKurikulumBefore, idKurikulum;
var kurikulum = [];
idKurikulumBefore = idKurikulum = '';



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
	
	if(kurikulum.length == 0)
	{
		kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname});
	}
	else
	{
		kurikulum.pop();
		kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname});
	}
	
	document.getElementById('kurikulumName').value = kurikulum[0].kurikulumname;
	
	$('#myModal').modal('toggle');
}

function tambahKurikulumJenis()
{
	var jenis = $('#selectJenis').val();
	if (kurikulum.length == 0)
	{
		alert('Anda Belum Mengisi Kurikulum');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>/kurikulum_jenis/insert/?kurikulumid='+kurikulum[0].kurikulumid+'&jenisid='+jenis;
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>kurikulum_jenis/');
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
	$("#selectJenis").removeAttr("disabled");
	
	arrID = id.split(';');
	aksi = arrID[0];
	
	if(kurikulum.length > 0)
	{
		kurikulum.pop();
	}
	
	kurikulumjenisid = arrID[1];
	kurikulumid = arrID[2];
	kurikulumname = arrID[3];
	jenisid = arrID[4];
	jenisname = arrID[5];
	
	
	kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname});
	
	document.getElementById('kurikulumName').value = kurikulum[0].kurikulumname;
	
	setSelectValue('selectJenis', jenisid);
	$("#btnTambahKurikulumJenis").attr('disabled', true);
	$("#btnHapusKurikulumJenis").attr('disabled', true);
	$("#btnUbahKurikulumJenis").removeAttr("disabled");
	
}

function hapusData(id)
{
	$("#selectJenis").attr('disabled', true);
	arrID = id.split(';');
	aksi = arrID[0];
	
	if(kurikulum.length > 0)
	{
		kurikulum.pop();
	}
	
	kurikulumjenisid = arrID[1];
	kurikulumid = arrID[2];
	kurikulumname = arrID[3];
	jenisid = arrID[4];
	jenisname = arrID[5];
	
	
	kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname});
	
	document.getElementById('kurikulumName').value = kurikulum[0].kurikulumname;
	
	setSelectValue('selectJenis', jenisid);
	
	$("#btnTambahKurikulumJenis").attr('disabled', true);
	$("#btnHapusKurikulumJenis").removeAttr("disabled");
	$("#btnUbahKurikulumJenis").attr('disabled', true);
	
}

function setSelectValue (id, val)
{
	document.getElementById(id).value = val;
}



function ubahKurikulumJenis()
{
	var jenis = $('#selectJenis').val();
	var uri = '<?php echo base_url(); ?>/kurikulum_jenis/update/?kurikulumjenisid='+kurikulumjenisid+'&kurikulumid='+kurikulum[0].kurikulumid+'&jenisid='+jenis;
	
	if(kurikulum.length == 0)
	{
		alert('Anda Belum Mengisi Kurikulum');
	}
	else
	{
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{  
			  if (data.message == 'success')
			  {
					refreshPage('<?php echo base_url(); ?>kurikulum_jenis/');
			  }
			  else
			  {
				  alert('Gagal Menambahkan Data karena ' + data.message);
			  }
			  
			}
		});
	}
		
}


function hapusKurikulumJenis()
{
	var jenis = $('#selectJenis').val();
	var uri = '<?php echo base_url(); ?>/kurikulum_jenis/delete/?kurikulumjenisid='+kurikulumjenisid+'&kurikulumid='+kurikulum[0].kurikulumid+'&jenisid='+jenis;
	
	if(kurikulum.length == 0)
	{
		alert('Anda Belum Mengisi Kurikulum');
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
					refreshPage('<?php echo base_url(); ?>kurikulum_jenis/');
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Kurikulum</h4>
			</div>
			<div class="modal-body">
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Tipe Kurikulum</th>
							<th>Nama Kurikulum</th>
						</tr>
					</thead>
					<tbody>
							<?php
							foreach ($kurikulums as $kurikulum)
							{
								?>
								<tr id="<?php echo $kurikulum->kurikulumID; ?>;<?php echo $kurikulum->kurikulumName; ?>" onclick="pilihKurikulum(this.id)" style="cursor:pointer;">
									<td><?php echo $kurikulum->kurikulumTypeName; ?></td>
									<td><?php echo $kurikulum->kurikulumName; ?></td>
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihKurikulum" onclick="pilihKurikulumOk()">Pilih</button>
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

              <h3 class="box-title">Data Jenis Kurikulum</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				<label>Nama Kurikulum</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="kurikulumName" id="kurikulumName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></button></span>
                </div>
				
				<div class="form-group">
				<label>Jenis Kurikulum</label>
					<select class="form-control" id="selectJenis">
						<?php
						if($jeniss)
						{
							foreach ($jeniss as $jenis)
							{
								?>
								<option id="<?php echo  $jenis->jenisID;?>" value="<?php echo  $jenis->jenisID;?>"><?php echo  $jenis->jenisName;?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
			
				
			
				
				
            </div>
            
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-primary"  onclick="tambahKurikulumJenis();" id="btnTambahKurikulumJenis"><i class="fa fa-plus"></i> Tambah Jenis Kurikulum</button>&nbsp&nbsp
			  <button type="button" class="btn btn-warning"  onclick="ubahKurikulumJenis();" id="btnUbahKurikulumJenis" disabled><i class="fa fa-pencil"></i> Ubah Jenis Kurikulum</button>&nbsp&nbsp
			  <button type="button" class="btn btn-danger"  onclick="hapusKurikulumJenis();" id="btnHapusKurikulumJenis" disabled><i class="fa fa-pencil"></i> Hapus Jenis Kurikulum</button>
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
              </div>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example7" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td>NO</td>
					  <td>Nama Kurikulum</td>
					  <td>Jenis</td>
					  <td>Tipe Kurikulum</td>
					  <td>Tipe Diklat</td>
					  <td>Bidang</td>
					  <td>Ubah / Hapus</td>
					</tr>
					</thead>
					<tbody>
						<?php
							$i = 1;
							foreach ($kurikulum_jeniss as $kurikulum_jenis)
							{
								?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $kurikulum_jenis->kurikulumName;?></td>
									<td><?php echo $kurikulum_jenis->jenisName ?></td>
									<td><?php echo $kurikulum_jenis->kurikulumTypeName; ?></td>
									<td><?php echo $kurikulum_jenis->diklatTypeName; ?></td>
									<td><?php echo $kurikulum_jenis->bidangShortName;?></td>
									<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Kurikulum Rinci" id="ubah;<?php echo $kurikulum_jenis->kurikulumJenisID;?>;<?php echo $kurikulum_jenis->kurikulumID;?>;<?php echo $kurikulum_jenis->kurikulumName;?>;<?php echo $kurikulum_jenis->jenisID;?>;<?php echo $kurikulum_jenis->jenisName;?>" onclick="ubahData(this.id);"><i class="fa fa-pencil"></i></button>&nbsp&nbsp<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Kurikulum Rinci" id="hapus;<?php echo $kurikulum_jenis->kurikulumJenisID;?>;<?php echo $kurikulum_jenis->kurikulumID;?>;<?php echo $kurikulum_jenis->kurikulumName;?>;<?php echo $kurikulum_jenis->jenisID;?>;<?php echo $kurikulum_jenis->jenisName;?>" onclick="hapusData(this.id);"><i class="fa fa-close"></i></button></td>
								</tr>
								<?php
								$i++;
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
  </script>