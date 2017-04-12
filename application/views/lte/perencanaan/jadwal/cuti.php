<script>
	var arrSplit, cutinoteid, cutinotename;
	cutinoteid = '';
	function munculForm()
	{
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function(){
						var $target = $('html,body'); 
						$target.animate({scrollTop: $target.height()}, 1000);
						document.getElementById('formTambahCuti').style.display = 'block';
						document.getElementById('formTambahCutiHeader').innerHTML = 'Form Tambah Data Cuti';
						document.getElementById('formTambahCutiFooter').innerHTML = '<button type="button" class="btn btn-primary" data-toggle="tooltip" title="Tambah Data Cuti" style="margin-right: 5px;"><i class="fa fa-save"></i> Simpan</button>';
					}, 300);
					document.getElementById('formTambahCuti').className = 'pesanmuncul';
				}, 300);
				document.getElementById('formTambahCuti').style.display = 'none';
			}, 300);
			document.getElementById('formTambahCuti').className = 'pesanhilang';
		}, 300);
	}
	
	
	function pilihReason(id)
	{
		cutinoteid = id;
	}
	
	function tambahData()
	{
		var str, i, j, pengampu, uri;
		uri = '';
		
		var uri = '<?php echo base_url(); ?>' + 'jadwal/ambilAllPengampu/'+mataajarid+'/'+tanggal;
		
		$('#myModal').modal('show');
		setTimeout(function(){
				$('#myModal').modal('show');
				$.ajax({
					type: 'get',
					url: uri,
					dataType: 'json',
					success: function (data) {
						if(data[0].number != 0)
						{
							$('#example4').DataTable().clear();				
							i = 0;
							j = 1;
							str = '';
							while (i < data.length)
							{
								if (data[i].pengampu_pengajar > 1)
								{
									pengampu = 'Ya';
								}
								else
								{
									pengampu = 'Tidak';
								}
								var rowIndex = $('#example4').DataTable().row.add([data[i].pegawaiNIP,data[i].pegawaiName, pengampu, data[i].jamLat, '<button class="btn-primary" onclick="newTab(\'<?php echo base_url(); ?>viewjadwal?month='+bulan+'&year='+tahun+'\');">Lihat Table</button>']).draw();
								
								var row = $('#example4').dataTable().fnGetNodes(rowIndex);
								$(row).attr('id', data[i].pegawaiID+';'+data[i].pegawaiName);
								if(data[i].jamLat >= 10)
								{
									$(row).attr('style', 'cursor:pointer;background-color:#F44336;');
								}
								else if (data[i].jamLat < 10 && data[i].jamLat > 0)
								{
									$(row).attr('style', 'cursor:pointer;background-color:#F44336;');
								}
								else
								{
									$(row).attr('style', 'cursor:pointer;');
								}

								$(row).attr('onclick', 'pilihPegawai(this.id);');					
								
												
								i++;
								j++;
							}
							//$('#example4').DataTable().;
							//$('#example4').dataTable();
							//document.getElementById('tableWI').innerHTML = str;
							
							
							
							if(document.getElementById(idPegawaiBefore) != null)
							{
								document.getElementById(idPegawaiBefore).style.backgroundColor = "#fff";
							}
						}
					}
				});
				
				setTimeout(function(){
					$('#myModal').modal('hide');
					setTimeout(function(){
						$('#myModal4').modal('show');
					}, 800);
				}, 3900);		
		}, 1);
	}
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Loading</h4>
      </div>
      <div class="modal-body" style="text-align:center;">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="width:100%">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List WI</h4> 
						<div class="form-group">
								<div class="col-xs-6"><div class="radio">
								  <label>
									<input type="radio" name="optionsRadiosWI" id="rbWI" checked="true" onchange="ubahRadio()">
									WI
								  </label>
								</div>
								</div>
								
								<div class="col-xs-6">
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadiosWI" id="rbInstruktur" onchange="ubahRadio()">
									Instruktur
								  </label>
								</div>
								</div>
						</div>
			</div>
			<div class="modal-body">
				<table id="example4" class="table table-bordered table-hover" style="overflow:auto;">
					<thead>
					<tr>
					  <th>NIP</th>
					  <th>Nama</th>
					  <th>Ampu</th>
					  <th>JP</th>
					  <th>View</th>
					</tr>
					
					</thead>
					<tbody id="tableWI">
						
					</tbody>
					<tfoot>
					<tr>
					  
					</tr>
					</tfoot>
					</table>						
			</div>
			<div class="modal-footer">
				<label>Jumlah Hari</label>
                <input class="form-control" type="number" name="jmlHari" placeholder="1" id="jmlHari" min="1" max="" value = "1" style="width: 100px;"> 
				<div class="col-xs-12"></div>
				<button type="button" class="btn btn-primary" disabled id="btnPilihPegawai" onclick="pilihPegawaiOk();">Pilih</button>
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

              <h3 class="box-title">Data Cuti</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                <i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="tooltip" title="Tambah Izin" style="margin-right: 5px;" onclick="munculForm();">
                <i class="fa fa-plus"></i> Tambah Izin</button>
              </div>
            </div>
            
            <div class="box-body">
			
			</div>
            
            <div class="box-footer clearfix no-border">
              
            </div>
          </div>
		  </div>
	</div>
	
	<div class="col-xs-12"></div>
	<div id="formTambahCuti" style="display:none;">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="formTambahCutiHeader"></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				<label>WI / Instruktur</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="pegawaiName" id="pegawaiName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary" onclick="tambahData();"><i class="fa fa-search"></i></button></span>
                </div>
				<label>Alasan Tidak Mengajar</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group">
                    <!-- <input class="form-control" type="text" name="biayaName" id="biayaName" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i></button></span> -->
					<select id="cutiNoteName" class="form-control" onchange="pilihReason(this.value)">
						<?php
							if ($cutiNotes)
							{
								$i = 0;
								foreach($cutiNotes as $cn)
								{
									if($i = 0)
									{
										?>
										<script>pilihReason('<?php echo $cn->cutiNoteID; ?>');</script>
										<?php
									}
									?>
									<option value="<?php echo $cn->cutiNoteID; ?>"><?php echo $cn->cutiNoteName; ?></option>
									<?php
									$i++;
								}
							}
						?>						
					</select>
                </div>
				
				
			
            </div>
            
            <div class="box-footer clearfix no-border" id="formTambahCutiFooter">
              
            </div>
          </div>
		  </div>
	</div>  
    </div>

    </section>
    
  </div>
 <script>
	
 </script>