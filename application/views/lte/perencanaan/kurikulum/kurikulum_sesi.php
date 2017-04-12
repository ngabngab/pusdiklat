<script>
var arrSplit, kurikulumname, kurikulumjenisid, jenisname, aksi, jenisid, jenisdesc, sesino, sesidesc, sesiid;
var pertemuanJenis;
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
	kurikulumjenisid = arrSplit[0];
	kurikulumname = arrSplit[1];
	jenisname = arrSplit[2];
	
	
	if(kurikulum.length == 0)
	{
		kurikulum.push({'kurikulumjenisid':kurikulumjenisid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	else
	{
		kurikulum.pop();
		kurikulum.push({'kurikulumjenisid':kurikulumjenisid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	
	document.getElementById('kurikulumName').value = kurikulum[0].kurikulumname;
	document.getElementById('jenisName').value = kurikulum[0].jenisname;
	pertemuanJenis = $("option:selected", $("#selectJenisPertemuan")).text();
	
	changeDescription(kurikulum[0].kurikulumname, kurikulum[0].jenisname, pertemuanJenis, document.getElementById('sesiNo').value);
	$('#myModal5').modal('toggle');
	
}

function changeDescription(kurikulumName, jenisName,  jenisDesc, sesiNo)
{
	document.getElementById('sesiDesc').value = kurikulumName + ' ' + jenisName + ' Sesi ' + jenisDesc + ' ' + sesiNo; 
}

function setSelectValue (id, val)
{
	document.getElementById(id).value = val;
}

$( "#selectJenisPertemuan" ).change(function() {
	pertemuanJenis = $("option:selected", $("#selectJenisPertemuan")).text();
	changeDescription(document.getElementById('kurikulumName').value, document.getElementById('jenisName').value, pertemuanJenis, document.getElementById('sesiNo').value);
});

function rubahSesiNo()
{
	pertemuanJenis = $("option:selected", $("#selectJenisPertemuan")).text();
	changeDescription(document.getElementById('kurikulumName').value, document.getElementById('jenisName').value, pertemuanJenis, document.getElementById('sesiNo').value);
}

function tambahKurikulumSesi()
{
	jenisid = $("#selectJenisPertemuan").val();
	sesino = document.getElementById('sesiNo').value;
	sesidesc = document.getElementById('sesiDesc').value;
	
	if(kurikulum.length == 0)
	{
		alert('Anda Belum Memilih kurikulum');
	}
	else if (sesidesc == '')
	{
		alert('Sesi Deskripsi tidak boleh kosong');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>kurikulum_sesi/insert/?kurikulumjenisid='+kurikulum[0].kurikulumjenisid+'&jenisid='+jenisid+'&sesino='+sesino+'&sesidesc='+sesidesc;
		
		$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
			{
				if (data.message == 'success')
				{
					uri = '<?php echo base_url(); ?>kurikulum_sesi';
					refreshPage(uri);
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
	$("#selectJenisPertemuan").removeAttr("disabled");
	$("#sesiNo").removeAttr("readonly");
	$("#sesiDesc").removeAttr("readonly");
	
	arrID = id.split(';');
	aksi = arrID[0];
	sesiid = arrID[1];
	kurikulumjenisid = arrID[2];
	kurikulumname = arrID[3];
	jenisname = arrID[4];
	jenisid = arrID[5];
	jenisdesc = arrID[6];
	sesino = arrID[7];
	sesidesc = arrID[8];
	
	if(kurikulum.length == 0)
	{
		kurikulum.push({'kurikulumjenisid':kurikulumjenisid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	else
	{
		kurikulum.pop();
		kurikulum.push({'kurikulumjenisid':kurikulumjenisid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	
	document.getElementById('kurikulumName').value = kurikulum[0].kurikulumname;
	document.getElementById('jenisName').value = kurikulum[0].jenisname;
	document.getElementById('sesiNo').value = sesino;
	document.getElementById('sesiDesc').value = sesidesc;
	document.getElementById('selectJenisPertemuan').value = jenisid;
	
	$("#btnTambahKurikulumSesi").attr('disabled', true);
	$("#btnHapusKurikulumSesi").attr('disabled', true);
	$("#btnUbahKurikulumSesi").removeAttr("disabled");
}

function hapusData(id)
{
	$("#selectJenisPertemuan").attr('disabled', true);
	$("#sesiNo").attr('readonly', true);
	$("#sesiDesc").attr('readonly', true);
	
	arrID = id.split(';');
	aksi = arrID[0];
	sesiid = arrID[1];
	kurikulumjenisid = arrID[2];
	kurikulumname = arrID[3];
	jenisname = arrID[4];
	jenisid = arrID[5];
	jenisdesc = arrID[6];
	sesino = arrID[7];
	sesidesc = arrID[8];
	
	if(kurikulum.length == 0)
	{
		kurikulum.push({'kurikulumjenisid':kurikulumjenisid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	else
	{
		kurikulum.pop();
		kurikulum.push({'kurikulumjenisid':kurikulumjenisid, 'kurikulumname':kurikulumname, 'jenisname':jenisname});
	}
	
	document.getElementById('kurikulumName').value = kurikulum[0].kurikulumname;
	document.getElementById('jenisName').value = kurikulum[0].jenisname;
	document.getElementById('sesiNo').value = sesino;
	document.getElementById('sesiDesc').value = sesidesc;
	document.getElementById('selectJenisPertemuan').value = jenisid;
	
	$("#btnTambahKurikulumSesi").attr('disabled', true);
	$("#btnHapusKurikulumSesi").removeAttr("disabled");
	$("#btnUbahKurikulumSesi").attr('disabled', true);
}

function ubahKurikulumSesi()
{
	jenisid = $("#selectJenisPertemuan").val();
	sesino = document.getElementById('sesiNo').value;
	sesidesc = document.getElementById('sesiDesc').value;
	
	if(kurikulum.length == 0)
	{
		alert('Anda Belum Memilih kurikulum');
	}
	else if (sesidesc == '')
	{
		alert('Sesi Deskripsi tidak boleh kosong');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>kurikulum_sesi/update/?sesiid='+sesiid+'&kurikulumjenisid='+kurikulum[0].kurikulumjenisid+'&jenisid='+jenisid+'&sesino='+sesino+'&sesidesc='+sesidesc;
		
		$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
			{
				if (data.message == 'success')
				{
					uri = '<?php echo base_url(); ?>kurikulum_sesi';
					refreshPage(uri);
				}
				else
				{
					alert('Gagal Menambahkan Data karena ' + data.message);
				}
			  
			}
		});
	}
}

function hapusKurikulumSesi()
{
	jenisid = $("#selectJenisPertemuan").val();
	sesino = document.getElementById('sesiNo').value;
	sesidesc = document.getElementById('sesiDesc').value;
	
	if(kurikulum.length == 0)
	{
		alert('Anda Belum Memilih kurikulum');
	}
	else if (sesidesc == '')
	{
		alert('Sesi Deskripsi tidak boleh kosong');
	}
	else
	{
		var uri = '<?php echo base_url(); ?>kurikulum_sesi/delete/?sesiid='+sesiid+'&kurikulumjenisid='+kurikulum[0].kurikulumjenisid+'&jenisid='+jenisid+'&sesino='+sesino+'&sesidesc='+sesidesc;
		
		$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
			{
				if (data.message == 'success')
				{
					uri = '<?php echo base_url(); ?>kurikulum_sesi';
					refreshPage(uri);
				}
				else
				{
					alert('Gagal Menghapus Data karena ' + data.message);
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
						<th>Nama Kurikulum</th>
						<th>Jenis Kurikulum</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						foreach ($kurikulum_jeniss as $kurikulum_jenis)
						{
							?>
							<tr style="cursor:pointer;" id="<?php echo $kurikulum_jenis->kurikulumJenisID; ?>;<?php echo $kurikulum_jenis->kurikulumName; ?>;<?php echo $kurikulum_jenis->jenisName; ?>" onclick="pilihKurikulum(this.id);">
								<td><?php echo $kurikulum_jenis->kurikulumName; ?></td>
								<td><?php echo $kurikulum_jenis->jenisName; ?></td>
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

              <h3 class="box-title">Data Kurikulum Sesi</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				<label>Kurikulum</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
					<input class="form-control" type="text" name="kurikulumName" id="kurikulumName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal5"><i class="fa fa-search"></i></button></span>
                </div>
				
				<label>Jenis Kurikulum</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group">
					<input class="form-control" type="text" name="jenisName" id="jenisName" readonly="true">
                </div>
				
				<div class="form-group">
				<label>Jenis Pertemuan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					<select class="form-control" id="selectJenisPertemuan">
						<?php
						if($jeniss)
						{
							foreach ($jeniss as $jenis)
							{
								?>
								<option id="<?php echo $jenis->jenisID;?>" value="<?php echo $jenis->jenisID;?>"><?php echo $jenis->jenisDesc;?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
				
				<div class="form-group">
                    <label>Nomor Sesi</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="number" name="sesiNo" placeholder="1" id="sesiNo" min="1" max="" value = "1" style="width: 100px;" onchange='rubahSesiNo()'> 
                </div>	
				
				<div class="form-group">&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <label>Deskripsi Sesi</label>
                    <textarea name="sesiDesc" id="sesiDesc" class="form-control" rows="3"></textarea>
                </div>

							
            </div>
            
			<div class="box-footer clearfix no-border">
				<div class="col-xs-12"><button type="button" class="btn btn-primary"  onclick="tambahKurikulumSesi();" id="btnTambahKurikulumSesi"><i class="fa fa-plus"></i> Tambah Data</button>&nbsp&nbsp<button type="button" class="btn btn-warning"  onclick="ubahKurikulumSesi();" id="btnUbahKurikulumSesi" disabled><i class="fa fa-pencil"></i> Ubah Data</button>&nbsp&nbsp<button type="button" class="btn btn-danger"  onclick="hapusKurikulumSesi();" id="btnHapusKurikulumSesi" disabled><i class="fa fa-pencil"></i> Hapus Data</button></div>
            </div>
            
          </div>
		  </div>
	  </div>
	 
	  
	
	  <div class="row">
		  <div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Kurikulum Sesi</h3>

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
					  <td style="width:80px!important;">Nama Kurikulum</td>
					  <td style="width:80px!important;">Jenis Kurikulum</td>
					  <td style="width:80px!important;">Jenis Pertemuan</td>
					  <td style="width:20px!important;">No Sesi</td>
					  <td style="width:120px!important;">Sesi Desc</td>
					  <td style="width:50px!important;">Ubah / Hapus</td>
					</tr>
					</thead>
					<tbody>
						<?php 
							$i = 1;
							foreach ($kurikulum_sesis as $ks)
							{
								?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $ks->kurikulumName; ?></td>
									<td><?php echo $ks->jenisName; ?></td>
									<td><?php echo $ks->jenisDesc; ?></td>
									<td><?php echo $ks->sesiNo; ?></td>
									<td><?php echo $ks->sesiDesc; ?></td>
									<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Ubah Data Kurikulum Rinci" id="ubah;<?php echo $ks->sesiID; ?>;<?php  echo $ks->kurikulumJenisID; ?>;<?php  echo $ks->kurikulumName; ?>;<?php  echo $ks->jenisName; ?>;<?php  echo $ks->jenisID; ?>;<?php $ks->jenisDesc; ?>;<?php  echo $ks->sesiNo; ?>;<?php  echo $ks->sesiDesc; ?>" onclick="ubahData(this.id);"><i class="fa fa-pencil"></i></button><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Kurikulum Rinci" id="hapus;<?php echo $ks->sesiID; ?>;<?php  echo $ks->kurikulumJenisID; ?>;<?php  echo $ks->kurikulumName; ?>;<?php  echo $ks->jenisName; ?>;<?php  echo $ks->jenisID; ?>;<?php $ks->jenisDesc; ?>;<?php  echo $ks->sesiNo; ?>;<?php  echo $ks->sesiDesc; ?>" onclick="hapusData(this.id);"><i class="fa fa-close"></i></button></td>
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
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": true
    });
	
	$('#example6').dataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
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