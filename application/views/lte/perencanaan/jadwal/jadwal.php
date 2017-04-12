<script>
var total = [];
var selisihKelas = [];
var arrSplit, diklatlocid, diklatlocname, biayaid, biayaname, jadwalid, mataajarname, mataajarid, tanggal, pegawaiid, pegawainame, kaldikid, kelasid, bulan, tahun, pengajarid, jmlhari, kaldikname, backgroundcolor, trid, backgroundcolortr, nomorst;
trid = '';
backgroundcolortr = '';
var tab;
bulan = <?php echo $thisMonth; ?>;
tahun = <?php echo $thisYear; ?>;
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

var idLokasiBefore, idLokasi;
var loc = [];
idLokasiBefore = idLokasi = '';

var idBiayaBefore, idBiaya;
var biaya = [];
idBiayaBefore = idBiaya = '';

var idPegawaiBefore, idPegawai;
var pegawai = [];
idPegawaiBefore = idPegawai = '';

function showModal()
{
	
}

function pilihPegawai(id)
{
	
	if(idPegawaiBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idPegawaiBefore = id;
		idPegawai = id;
	}
	else
	{
		if(document.getElementById(idPegawaiBefore) != null)
		{
			document.getElementById(idPegawaiBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idPegawaiBefore = id;
		idPegawai = id;
	}
	arrSplit = idPegawai.split(";");
	
	pegawaiid = arrSplit[0];
	pegawainame = arrSplit[1];
	jmlhari = document.getElementById('jmlHariAvailable').value;
	
	if(pegawai.length == 0)
	{
		pegawai.push({'pegawaiid':pegawaiid, 'pegawainame':pegawainame});
	}
	else
	{
		pegawai.pop();
		pegawai.push({'pegawaiid':pegawaiid, 'pegawainame':pegawainame});
	}
	//btnCheckAvailable
	//$("#btnPilihPegawai").removeAttr("disabled");
	$("#btnPilihPegawai").attr('disabled', true);
	$("#btnCheckAvailable").removeAttr("disabled");
}

function pilihPegawaiOk()
{
	
	
	//document.getElementById('pegawaiName').value = pegawainame;
	$('#myModal4').modal('toggle');
	simpanDataPengajar();
}

function onTampil()
{
	var bulan = $('#selectBulan').val();
	var tahun = $('#selectTahun').val();
	var uri = '';
	if (loc.length > 0 && biaya.length > 0)
	{
		uri = '<?php echo base_url();?>kaldik?month='+bulan+'&year='+tahun+'&diklatlocid='+loc[0].diklatlocid+'&biayaid='+biaya[0].biayaid;
	}
	else if (loc.length > 0)
	{
		uri = '<?php echo base_url();?>jadwal?month='+bulan+'&year='+tahun+'&diklatlocid='+loc[0].diklatlocid;
	}
	else if (biaya.length > 0)
	{
		uri = '<?php echo base_url();?>jadwal?month='+bulan+'&year='+tahun+'&biayaid='+biaya[0].biayaid;
	}
	else
	{
		uri = '<?php echo base_url();?>jadwal?month='+bulan+'&year='+tahun;
	}
	refreshPage(uri);
}

function namaHari(hari)
{
	if(hari == 'Mon')
	{
		return 'Senin';
	}
	else if (hari == 'Tue')
	{
		return 'Selasa';
	}
	else if (hari == 'Wed')
	{
		return 'Rabu';
	}
	else if (hari == 'Thu')
	{
		return 'Kamis';
	}
	else if (hari == 'Fri')
	{
		return 'Jumat';
	}
	else
	{
		return 'Sabtu';
	}
}

function viewKaldik(arr)
{
	var kaldikID, kaldikName;
	arrSplit = arr.split(';');
	kaldikID = arrSplit[0];
	kaldikName = arrSplit[1];
	kaldikname = kaldikName;
	
	
	var i, str, hari;
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					var uri = '<?php echo base_url(); ?>' + 'jadwal/ambilkelas/'+kaldikID;
					$.ajax({
						type: 'get',
						url: uri,
						dataType: 'json',
						success: function (data) {
							i = 0;
							str = '';
							while (i < data.length)
							{
								str += '<option value="'+kaldikID+';'+data[i].kelasID+';'+kaldikName+'">'+data[i].namaKelas+'</option>';
								if(i == 0)
								{
									loadJadwal(kaldikID, data[i].kelasID, kaldikName)
								}
								i++;
							}		
							document.getElementById('kelas').innerHTML = str;
							
						}
					});
					
					
					document.getElementById('titleJadwal').innerHTML = 'Data Jadwal Diklat : '+kaldikName;
					document.getElementById('tableJadwalContainer').style.display = 'block';
				}, 300);
				document.getElementById('tableJadwalContainer').className = 'pesanmuncul';
			}, 300);
			document.getElementById('tableJadwalContainer').style.display = 'none';
			document.getElementById('tablePengajarContainer').style.display = 'none';
		}, 300);
		document.getElementById('tableJadwalContainer').className = 'pesanhilang';
		document.getElementById('tablePengajarContainer').className = 'pesanhilang';
	}, 300);
}

function loadJadwal(kaldikID, kelasID, kaldikName)
{
	var uri = '<?php echo base_url(); ?>' + 'jadwal/ambildetail/'+kaldikID+'/'+kelasID;
	kaldikid = kaldikID;
	kelasid = kelasID;
	kaldikname = kaldikname;
	var mataAjarTemp;
	mataAjarTemp = '';
	trid = '';
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) {
			i = 0;
			str = '';
			
			while (i < data.length)
			{
				hari = namaHari(data[i].hari);
				if(data[i].subMataAjar == '')
				{
					mataAjarTemp = data[i].mataAjarName;
				}
				else
				{
					mataAjarTemp = data[i].subMataAjar;
				}
				
				if(hari == 'Sabtu')
				{
					str += '<tr style="background-color:#9E9E9E;" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+';tr"><td>'+data[i].sesiNo+'</td><td>'+data[i].sesiName+'</td><td>'+data[i].tanggal+'</td><td>'+hari+'</td><td>'+data[i].jamke+'</td><td>'+mataAjarTemp+'</td><td>'+data[i].jamLat+'</td><td>'+data[i].jamMulai.substring(0, 5)+'-'+data[i].jamSelesai.substring(0, 5)+'</td><td><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>';
					if(parseInt(data[i].pengajar) > 0)
					{
						str += '<td><button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Memiliki '+data[i].pengajar+' Pengajar" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+'"  onclick="viewPengajar(this.id);"><i class="fa fa-table"></i></button></td>';
					}
					else
					{
						str += '<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Belum Memiliki Pengajar" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+'" onclick="viewPengajar(this.id);"><i class="fa fa-table"></i></button></td>';
					}
					str +='</tr>';
				}
				else
				{
					str += '<tr style="background-color:#FFF;" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+';tr"><td>'+data[i].sesiNo+'</td><td>'+data[i].sesiName+'</td><td>'+data[i].tanggal+'</td><td>'+hari+'</td><td>'+data[i].jamke+'</td><td>'+mataAjarTemp+'</td><td>'+data[i].jamLat+'</td><td>'+data[i].jamMulai.substring(0, 5)+'-'+data[i].jamSelesai.substring(0, 5)+'</td><td><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>';
					if(parseInt(data[i].pengajar) > 0)
					{
						str += '<td><button type="button" class="btn btn-primary"  data-toggle="tooltip" data-placement="top" title="Memiliki '+data[i].pengajar+' Pengajar" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+'"  onclick="viewPengajar(this.id);"><i class="fa fa-table"></i></button></td>';
					}
					else
					{
						str += '<td><button type="button" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Belum Memiliki Pengajar" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+'" onclick="viewPengajar(this.id);"><i class="fa fa-table"></i></button></td>';
					}
					str +='</tr>';
				}
								
				i++;
			}
		document.getElementById('tableJadwal').innerHTML = str;
													
		}
	});
}

function loadJadwalChange(id)
{
	arrSplit = id.split(';');
	kaldikid = arrSplit[0];
	kelasid = arrSplit[1];
	var mataAjarTemp;
	mataAJarTemp = '';
	trid = '';
	var i, str, hari;
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					var uri = '<?php echo base_url(); ?>' + 'jadwal/ambildetail/'+kaldikid+'/'+kelasid;
					$.ajax({
						type: 'get',
						url: uri,
						dataType: 'json',
						success: function (data) {
							i = 0;
							str = '';
							while (i < data.length)
							{
								hari = namaHari(data[i].hari);
								if(data[i].subMataAjar == '')
								{
									mataAjarTemp = data[i].mataAjarName;
								}
								else
								{
									mataAjarTemp = data[i].subMataAjar;
								}
								if(hari == 'Sabtu')
								{
									str += '<tr style="background-color:#9E9E9E;" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+';tr"><td>'+data[i].sesiNo+'</td><td>'+data[i].sesiName+'</td><td>'+data[i].tanggal+'</td><td>'+hari+'</td><td>'+data[i].jamke+'</td><td>'+mataAjarTemp+'</td><td>'+data[i].jamLat+'</td><td>'+data[i].jamMulai.substring(0, 5)+'-'+data[i].jamSelesai.substring(0, 5)+'</td><td><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>';
									if(parseInt(data[i].pengajar) > 0)
									{
										str += '<td><button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Memiliki '+data[i].pengajar+' Pengajar" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+'"  onclick="viewPengajar(this.id);"><i class="fa fa-table"></i></button></td>';
									}
									else
									{
										str += '<td><button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Belum Memiliki Pengajar" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+'" onclick="viewPengajar(this.id);"><i class="fa fa-table"></i></button></td>';
									}
									str +='</tr>';
								}
								else
								{
									str += '<tr style="background-color:#FFF;" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+';tr"><td>'+data[i].sesiNo+'</td><td>'+data[i].sesiName+'</td><td>'+data[i].tanggal+'</td><td>'+hari+'</td><td>'+data[i].jamke+'</td><td>'+mataAjarTemp+'</td><td>'+data[i].jamLat+'</td><td>'+data[i].jamMulai.substring(0, 5)+'-'+data[i].jamSelesai.substring(0, 5)+'</td><td><button type="button" class="btn btn-warning"><i class="fa fa-pencil"></i></button></td>';
									if(parseInt(data[i].pengajar) > 0)
									{
										str += '<td><button type="button" class="btn btn-primary"  data-toggle="tooltip" data-placement="top" title="Memiliki '+data[i].pengajar+' Pengajar" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+'"  onclick="viewPengajar(this.id);"><i class="fa fa-table"></i></button></td>';
									}
									else
									{
										str += '<td><button type="button" class="btn btn-warning"  data-toggle="tooltip" data-placement="top" title="Belum Memiliki Pengajar" id="viewpengajar;'+data[i].jadwalID+';'+data[i].mataAjarID+';'+data[i].mataAjarName+';'+data[i].tanggal+'" onclick="viewPengajar(this.id);"><i class="fa fa-table"></i></button></td>';
									}
									str +='</tr>';
								}
												
								i++;
							}
						document.getElementById('tableJadwal').innerHTML = str;
																	
						}
					});
					
					
					
					
					document.getElementById('tableJadwalContainer').style.display = 'block';
				}, 300);
				document.getElementById('tableJadwalContainer').className = 'pesanmuncul';
			}, 300);
			document.getElementById('tableJadwalContainer').style.display = 'none';
			document.getElementById('tablePengajarContainer').style.display = 'none';
		}, 300);
		document.getElementById('tableJadwalContainer').className = 'pesanhilang';
		document.getElementById('tablePengajarContainer').className = 'pesanhilang';
	}, 300);
}

function pilihLokasi(id)
{
	
	if(idLokasiBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idLokasiBefore = id;
		idLokasi = id;
	}
	else
	{
		document.getElementById(idLokasiBefore).style.backgroundColor = "#fff";
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idLokasiBefore = id;
		idLokasi = id;
	}
	$("#btnPilihLokasi").removeAttr("disabled");
}

function pilihLokasiOk()
{
	arrSplit = idLokasi.split(";");
	diklatlocid = arrSplit[0];
	diklatlocname = arrSplit[1];
	if(loc.length == 0)
	{
		loc.push({'diklatlocid':diklatlocid, 'diklatlocname':diklatlocname});
	}
	else
	{
		loc.pop();
		loc.push({'diklatlocid':diklatlocid, 'diklatlocname':diklatlocname});
	}
	
	document.getElementById('lokasiName').value = loc[0].diklatlocname;
	$('#myModal2').modal('toggle');
	
}

function pilihBiaya(id)
{
	
	if(idBiayaBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idBiayaBefore = id;
		idBiaya = id;
	}
	else
	{
		document.getElementById(idBiayaBefore).style.backgroundColor = "#fff";
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idBiayaBefore = id;
		idBiaya = id;
	}
	$("#btnPilihBiaya").removeAttr("disabled");
}

function pilihBiayaOk()
{
	arrSplit = idBiaya.split(";");
	biayaid = arrSplit[0];
	biayaname = arrSplit[1];
	if(biaya.length == 0)
	{
		biaya.push({'biayaid':biayaid, 'biayaname':biayaname});
	}
	else
	{
		biaya.pop();
		biaya.push({'biayaid':biayaid, 'biayaname':biayaname});
	}
	
	document.getElementById('biayaName').value = biaya[0].biayaname;
	$('#myModal3').modal('toggle');
	
}

function viewPengajar(id)
{
	arrSplit = id.split(';');
	jadwalid = arrSplit[1];
	mataajarid = arrSplit[2];
	mataajarname = arrSplit[3];
	tanggal = arrSplit[4];
	if(trid == '')
	{
		backgroundcolortr = document.getElementById(id+';tr').style.backgroundColor;
		trid = id+';tr';
		document.getElementById(id+';tr').style.backgroundColor = '#26A69A';
	}
	else
	{
		document.getElementById(trid).style.backgroundColor = backgroundcolortr;
		trid = id+';tr';
		backgroundcolortr = document.getElementById(id+';tr').style.backgroundColor;
		document.getElementById(id+';tr').style.backgroundColor = '#26A69A';
	}
	
	var i, str, hari, j;
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('tablePengajarContainer').style.display = 'block';
					
					var uri = '<?php echo base_url(); ?>' + 'jadwal/ambilpengajar/'+jadwalid;
					str = '';
					document.getElementById('titleTablePengajar').innerHTML = 'Pengajar Untuk Mata Ajar : ' + mataajarname + ' Pada Tanggal : ' + tanggal;
					
					
					$.ajax({
						type: 'get',
						url: uri,
						dataType: 'json',
						success: function (data) {
							if(data[0].number != 0)
							{
								i = 0;
								j = 1;
								str = '';
								while (i < data.length)
								{
									str += '<tr><td>'+j+'</td><td>'+data[i].pegawaiName+'</td><td><button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Data Pengajar" id="hapuspengajar;'+data[i].pengajarID+';'+data[i].pegawaiID+';'+data[i].pegawaiName+'" onclick="hapusPengajar(this.id);"><i class="fa fa-close"></i></button></td></tr>';
									i++;
									j++;
								}
								
							}
							document.getElementById('tablePengajar').innerHTML = str;
							document.getElementById('modalFooterPengajar').innerHTML = '<button type="button" class="btn btn-primary"  data-toggle="tooltip" data-placement="top" title="Simpan Data Pengajar" onclick="simpanDataPengajar();"><i class="fa fa-save"></i> Simpan</button>';
						}
					});
				}, 300);
				document.getElementById('tablePengajarContainer').className = 'pesanmuncul';
			}, 300);
			document.getElementById('tablePengajarContainer').style.display = 'none';
			document.getElementById('formPengajar').style.display = 'none';
		}, 300);
		document.getElementById('tablePengajarContainer').className = 'pesanhilang';
		document.getElementById('formPengajar').className = 'pesanhilang';
	}, 300);
}

function tambahData()
{
	var str, i, j, pengampu, uri, available, url, pegawainame;
	uri = pegawainame = '';
	document.getElementById('rbWI').checked = true;
	var uri = '<?php echo base_url(); ?>' + 'jadwal/ambilAllPengampu/'+mataajarid+'/'+tanggal;
	document.getElementById('myModalLabelHeader').innerHTML = 'Pengajar Untuk '+mataajarname+' '+tanggal;
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
						url = '<?php echo base_url(); ?>viewjadwal?month='+bulan+'&year='+tahun;
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
							
							if (data[i].available == '1')
							{
								available = 'Tidak';
							}
							else
							{
								available = 'Ya';
							}
							
							if(data[i].isWI == '1')
							{
								pegawainame = '<strong>'+data[i].pegawaiName+'</strong>';
							}
							else
							{
								pegawainame = data[i].pegawaiName;
							}
							var rowIndex = $('#example4').DataTable().row.add([pegawainame, pengampu, data[i].jamLat, available]).draw();
							
							var row = $('#example4').dataTable().fnGetNodes(rowIndex);
							$(row).attr('id', data[i].pegawaiID+';'+data[i].pegawaiName);
							
							if (data[i].available == '1')
							{
								$(row).attr('style', 'cursor:pointer;background-color:#DEDEDE;');
							}
							else if(data[i].jamLat >= 10)
							{
								$(row).attr('style', 'cursor:pointer;background-color:#F44336;');
								
							}
							else if (data[i].jamLat < 10 && data[i].jamLat > 0)
							{
								$(row).attr('style', 'cursor:pointer;background-color:#F44336;');
								$(row).attr('onclick', 'pilihPegawai(this.id);');
							}
							else
							{
								$(row).attr('style', 'cursor:pointer;');
								$(row).attr('onclick', 'pilihPegawai(this.id);');
							}
							
							
							if (data[i].available != '1')
							{
									
							}
												
							
											
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
			}, 2000);		
	}, 1);
}

function simpanDataPengajar()
{
	if(pegawai.length == 0)
	{
		alert('Anda Belum Memilih Pegawai');
	}
	else
	{
		
		var uri = '<?php echo base_url(); ?>' + 'jadwal/tambahpengajar/'+jadwalid+'/'+pegawai[0].pegawaiid+'/'+jmlhari;
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				
				if (data.success == 1)
				{
					
					refreshPage('<?php echo base_url(); ?>jadwal?month='+bulan+'&year='+tahun+'&kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldikname='+kaldikname);
				}
				else
				{
					alert('Gagal Menambah Data karena ' + data.message);
				}			
			}
		});
		
	}
}

function hapusPengajar(id)
{
	arrSplit = id.split(';');
	pengajarid = arrSplit[1];
	$('#myModal11').modal('show');
}

function hapusPengajarOk()
{
	var uri = '<?php echo base_url(); ?>' + 'jadwal/hapuspengajar/' + pengajarid;
		
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				
				if (data.success == 1)
				{
					
					refreshPage('<?php echo base_url(); ?>jadwal?month='+bulan+'&year='+tahun+'&kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldikname='+kaldikname);
				}
				else
				{
					alert('Gagal Menambah Data karena ' + data.message);
				}			
			}
		});
	$('#myModal11').modal('hide');
}

function ubahRadio()
{
	var str, i, j, pengampu, uri;
	uri = '';
	var uri;
	
	$('#myModal4').modal('hide');
	if(document.getElementById('rbWI').checked == true)
	{
		uri = '<?php echo base_url(); ?>' + 'jadwal/ambilAllPengampu/'+mataajarid+'/'+tanggal;
	}
	else
	{
		uri = '<?php echo base_url(); ?>' + 'jadwal/ambilAllPegawai/'+mataajarid+'/'+tanggal;
		
	}
	
	
	
	
	
	
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
						url = '<?php echo base_url(); ?>viewjadwal?month='+bulan+'&year='+tahun;
						
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
							
							if (data[i].available == '1')
							{
								available = 'Tidak';
							}
							else
							{
								available = 'Ya';
							}
							
							var rowIndex = $('#example4').DataTable().row.add([data[i].pegawaiName, pengampu, data[i].jamLat, available, '<button class="btn-primary" onclick="newTab("'+url+'");">Lihat Table</button>']).order([ 4, 'desc' ], [ 2, 'desc' ], [3, 'asc' ]).draw();
							
							var row = $('#example4').dataTable().fnGetNodes(rowIndex);
							$(row).attr('id', data[i].pegawaiID+';'+data[i].pegawaiName);
							
							if (data[i].available == '1')
							{
								$(row).attr('style', 'background-color:#DEDEDE;');
							}
							else if(data[i].jamLat >= 10)
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
							
							
							if (data[i].available != '1' && data[i].jamLat < 10)
							{
								$(row).attr('onclick', 'pilihPegawai(this.id);');
							}
												
							
											
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
	}, 400);
}


function newTab(url)
{
	var win = window.open(url, '_blank');
	win.focus();
}

function cetakJadwal()
{
	var uri = '<?php echo base_url() ?>cetakjadwal/?kaldikid='+kaldikid+'&kelasid='+kelasid;
	newTab(uri);
}

function checkAvailable()
{
	var jmlHariAva = document.getElementById('jmlHariAvailable').value;
	var uri = '<?php echo base_url(); ?>' + 'jadwal/checkAvailable/' + pegawai[0].pegawaiid +'/'+tanggal+'/'+jmlHariAva;
	
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if(data[0].number == 0)
				{
					$("#btnPilihPegawai").removeAttr("disabled");
					
				}
				else
				{
					alert('Anda Tidak Bisa Melakukan Assign Secara Berturut turut untuk pegawai tersebut');
				}
			}
		});
}

function buatST()
{
	var uri = '<?php echo base_url(); ?>' + 'jadwal/checkst/' + kaldikid + '/' +kelasid;
	
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				
				if(data[0].number == 0)
				{
					$('#myModal1').modal('show');
					var uri = '<?php echo base_url(); ?>' + 'jadwal/ambilnomorst/' +kelasid;
	
					$.ajax({
						type: 'get',
						url: uri,
						dataType: 'json',
						success: function (data) 
						{
							
							if(data[0].number == 0)
							{
								nomorst = '';
								document.getElementById('nomorST').value = nomorst;
							}
							else
							{
								nomorst = data[0].nomorST;
								document.getElementById('nomorST').value = nomorst;
							}
						}
					});
				}
				else
				{
					alert('Anda Belum Bisa Membuat ST apabila Masih Ada Mata Ajar yg Belum Memiliki Instruktur');
				}
			}
		});
}

function cetakST()
{
	var url = '<?php echo base_url(); ?>' + 'cetaksurattugas/?kaldikid=' + kaldikid + '&kelasid=' +kelasid+'&month=<?php echo $thisMonth ?>&year=<?php echo $thisYear; ?>';
	
	newTab(url);
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

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Masukkan Nomor ST</h4>
      </div>
      <div class="modal-body" style="text-align:center;">
			<label>Nomor ST</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
			<div class="form-group">
                <input class="form-control" type="text" name="nomorST" id="nomorST">
			</div>
      </div>
	  <div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="cetakST();">Cetak ST</button>
				<button type="button" class="btn btn-primary" onclick="simpanNomorST();">Simpan Nomor ST</button>
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
				<h4 class="modal-title" id="myModalLabel">List Lokasi</h4>
			</div>
			<div class="modal-body">
				<table id="example2" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Nama Lokasi</th>
					  <th>Nama Kabupaten</th>	  
					</tr>
					
					</thead>
					<tbody>
						<?php
						foreach ($locations as $location)
						{
							?>
							<tr id="<?php echo $location->diklatLocID;?>;<?php echo $location->diklatLocName;?>" onclick="pilihLokasi(this.id)" style="cursor: pointer;">
								<td><?php echo $location->diklatLocName; ?></td>
								<td><?php echo $location->kabupatenName; ?></td>
								
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihLokasi" onclick="pilihLokasiOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Biaya</h4>
			</div>
			<div class="modal-body">
				<table id="example3" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Nama Biaya</th>
					  <th>Deskripsi Biaya</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						foreach($biayas as $biaya)
						{
							?>
							<tr id="<?php echo $biaya->biayaID;?>;<?php echo $biaya->biayaName;?>" onclick="pilihBiaya(this.id)" style="cursor: pointer;">
								<td><?php echo $biaya->biayaName;?></td>
								<td><?php echo $biaya->biayaDesc;?></td>
								
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihBiaya" onclick="pilihBiayaOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabelHeader">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="width:100%">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabelHeader">List WI</h4>
				<div class="col-xs-12">&nbsp</div>
						<div class="form-group">
								<div class="col-xs-4">
								  <label>
									<input type="radio" name="optionsRadiosWI" id="rbWI" checked="true" onchange="ubahRadio()">
									WI
								  </label>
								
								</div>
								
								<div class="col-xs-4">
								
								  <label>
									<input type="radio" name="optionsRadiosWI" id="rbInstruktur" onchange="ubahRadio()">
									Instruktur
								  </label>
								
								</div>
								
								<div class="col-xs-4">
									<button class="btn-primary" onclick="newTab('<?php echo base_url(); ?>viewjadwal?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>');">Lihat Matriks</button>
								</div>
						</div>
			</div>
			<div class="modal-body">
				<table id="example4" class="table table-bordered table-hover" style="overflow:auto;">
					<thead>
					<tr>
					  <th>Nama</th>
					  <th>Ampu</th>
					  <th>JP</th>
					  <th>Available</th>
					  
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
				<div class="col-xs-12" style="text-align:left;">
					<label>Jumlah Hari</label>
					<input class="form-control" type="number" name="jmlHariAvailable" placeholder="1" id="jmlHariAvailable" min="1" max="" value = "1" style="width: 100px;">
					<button type="button" class="btn btn-primary" disabled id="btnCheckAvailable" onclick="checkAvailable();">Check</button>
				</div>
				<div class="col-xs-12">&nbsp</div>
				<button type="button" class="btn btn-primary" disabled id="btnPilihPegawai" onclick="pilihPegawaiOk();">Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				
				</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
				<button type="button" class="btn btn-danger" onclick="hapusPengajarOk()"><i class="fa fa-close"></i> Hapus</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
			</div>
		</div>
	</div>
</div>

<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
	  <h3>
			Jadwal Diklat
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a onclick="refreshPage('<?php echo base_url(); ?>jadwal');" style="cursor:pointer;"><i class="fa fa-calendar"></i> Jadwal</a></li>
			
		</ol>
      <!-- Small boxes (Stat box) -->
      
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Data Kaldik : Periode <?php echo $monthName; ?> - <?php echo $thisYear; ?></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				
				<div class="form-group">
				<label>Bulan</label>
					<select class="form-control" id="selectBulan">
					  <option id="bln1" value="1">Januari</option>
					  <option id="bln2" value="2">Februari</option>
					  <option id="bln3" value="3">Maret</option>
					  <option id="bln4" value="4">April</option>
					  <option id="bln5" value="5">Mei</option>
					  <option id="bln6" value="6">Juni</option>
					  <option id="bln7" value="7">Juli</option>
					  <option id="bln8" value="8">Agustus</option>
					  <option id="bln9" value="9">September</option>
					  <option id="bln10" value="10">Oktober</option>
					  <option id="bln11" value="11">November</option>
					  <option id="bln12" value="12">Desember</option>
					</select>
				</div>
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
				
				<label>Sumber Biaya</label>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="biayaName" id="biayaName">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i></button></span>
                </div>
				
				<label>Lokasi</label>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="lokasiName" id="lokasiName">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search"></i></button></span>
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

              <h3 class="box-title">Data Kaldik : Periode <?php echo $monthName; ?> - <?php echo $thisYear; ?></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
				  
              </div>
            </div>
            
            <div class="box-body">
				
				<div class="dragscroll" style="overflow:scroll;">
					<div class="col-xs-12">
					<div class="col-xs-4"><button type="button" id="btnPrevious" class="btn btn-primary" onclick="previousMonth();"><i class="fa fa-calendar"></i> Previous</button></div>
					<div class="col-xs-4">&nbsp</div>
					<div class="col-xs-4"><button type="button" id="btnNext" class="btn btn-primary" onclick="nextMonth();"><i class="fa fa-calendar"></i> Next</button></div>
					</div>
					<div class="col-xs-12">&nbsp</div>
					
					<table id="example7" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td style="width:30px!important;">NO</td>
					  <td style="width:300px!important;">DIKLAT</td>
					  <td style="width:150px!important;">Lokasi</td>
					  <td style="width:250px!important;">Tanggal</td>
					  <?php
						$length = sizeof($calendars->date);
						$Date = $calendars->date;
						$Tgl = $calendars->tgl;
						$Day = $calendars->day;
						$Libur = $calendars->libur;
						$Kelas = array();
						$SelisihKelas = array();
						$i = 0;
						while ($i < $length)
						{
							$Kelas[$i] = 0;
							$SelisihKelas[$i] = 0;
							$i++;
						}
						$Max = $calendars->max;
						foreach($calendars->tgl as $cal)
						{
							?>
							<td style="width:30px!important;"><?php echo $cal;?></td>
							<?php
						}						
					  ?>
					</tr>
					<tr>
						<th>&nbsp</th>
						<th>&nbsp</th>
						<th>&nbsp</th>
						<th>&nbsp</th>
						<?php
						foreach($calendars->day as $cal)
						{
							if($cal == '1')
							{
								$cal = 'S';
							}
							else if($cal == '2')
							{
								$cal = 'S';
							}
							else if($cal == '3')
							{
								$cal = 'R';
							}
							else if($cal == '4')
							{
								$cal = 'K';
							}
							else if($cal == '5')
							{
								$cal = 'J';
							}
							else if($cal == '6')
							{
								$cal = 'S';
							}
							else
							{
								$cal = 'M';
							}
							?>
							<th><?php echo $cal;?></th>
							<?php
						}
						?>
					</tr>
					
					</thead>
					<tbody>
						<?php
						if($kaldiks)
						{
							$h = 1;
							foreach($kaldiks as $kaldik)
							{
								if($kaldik->kaldikStat == 0)
								{
									$statKaldik = 'Non Kaldik';
								}
								else
								{
									$statKaldik = 'Kaldik';
								}
								
								?>
								
								<tr>
								<td><?php echo $h; ?></td>
								<td><?php echo $kaldik->kaldikDesc;?><br>
								<span style="color:#337ab7;"><?php echo $kaldik->strKaldikID; ?></span>
								</td>
								
								<td><?php echo $kaldik->diklatLocName; ?>
								</td>
								<td><?php echo $kaldik->strStartDate; ?> - <?php echo $kaldik->strEndDate; ?>
								</td>
								<?php
								
								$i = 0;
								while ($i < $length)
								{
									if($Day[$i] == '7')
									{
										?>
										<td style="background-color:#9E9E9E;"><a href="#" data-toggle="tooltip" data-placement="top" title="Hari Minggu"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
										<?php	
									}
									else if ($kaldik->cal[$i] == false)
									{
										?>
										<td>&nbsp</td>
										<?php
									}
									else
									{	
										foreach($kaldik->cal[$i] as $calen)
										{
											
											
											if($calen->enddate == '1')
											{
												if($kaldik->diklatLocID == '346')
												{
													$Kelas[$i] = $Kelas[$i] + $kaldik->kelas;
												}
												if ($kaldik->color != null and $kaldik->color != '')
												{
													?>
													<td style="background-color:#<?php echo $kaldik->color; ?>;padding:0!important;text-align:center;"><a href="#" id="<?php echo $kaldik->kaldikID; ?>;<?php echo $kaldik->kaldikDesc; ?>" onclick="viewKaldik(this.id);" data-toggle="tooltip" data-html="true" data-placement="top" title="<?php echo $calen->sesiName."<br>Kurikulum : ".$calen->kurikulumSesiDesc . "<br>Sumber Biaya : " . $kaldik->biayaName . "<br>".$statKaldik; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;"><?php echo $kaldik->kelas; ?></div></a></td>
													<?php
												}
												else
												{
												?>
													<td style="background-color:#03A9F4;padding:0!important;text-align:center;"><a href="#" id="<?php echo $kaldik->kaldikID; ?>;<?php echo $kaldik->kaldikDesc; ?>" onclick="viewKaldik(this.id);" data-toggle="tooltip" data-html="true" data-placement="top" title="<?php echo $calen->sesiName."<br>Kurikulum : ".$calen->kurikulumSesiDesc . "<br>Sumber Biaya : " . $kaldik->biayaName."<br>".$statKaldik; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;"><?php echo $kaldik->kelas; ?></div></a></td>
												<?php
												}
											}
											else if ($calen->enddate == '2')
											{
												?>
												<td style="background-color:#F44336;padding:0!important;"><a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $calen->holidayDesc; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
												<?php
											}
											else
											{
												?>
												<td>&nbsp</td>
												<?php
											}
										}
										
									}
									
									$i++;
								}
								
								?>
								</tr>
								<?php
								$h++;
							}
						}
						?>
					</tbody>
					<tfoot>
					<tr>
						<td>&nbsp</td>
						<td>Kelas Terpakai</td>
						<td>&nbsp</td>
						<td>&nbsp</td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							?>
							<td><?php echo $Kelas[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					
					<tr>
						<td>&nbsp</td>
						<td>Max Kelas</td>
						<td>&nbsp</td>
						<td>&nbsp</td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							?>
							<td><?php echo $Max[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					<tr>
						<td>&nbsp</td>
						<td>Sisa Kelas</td>
						<td>&nbsp</td>
						<td>&nbsp</td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							$SelisihKelas[$i] = $Max[$i] - $Kelas[$i];
							
							?>
							<script>
							selisihKelas.push({'tgl':'<?php echo $Date[$i]; ?>', 'selisihkelas':<?php echo $SelisihKelas[$i]; ?>});
							</script>
							<td><?php echo $SelisihKelas[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					</tfoot>
					</table>
				</div>
				
            <div class="box-footer clearfix no-border">
              
            </div>
          </div>
		  </div>
		  
		  
		  
		  <div class="col-xs-12"></div>
		  <div id="tableJadwalContainer" style="display:none;">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleJadwal"></h3>
				
              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
				  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="cetakJadwal();"><i class="fa fa-print"></i> Print</button>
				  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="buatST();"><i class="fa fa-envelope"></i> Buat ST</button>
				  <!-- <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahData();"><i class="fa fa-plus" ></i> Tambah Mata Ajar</button> -->
              </div>
			  <div class="col-xs-12">&nbsp</div>
			  <select class="form-control" id="kelas" onchange="loadJadwalChange(this.value);"></select>
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example11" class="table table-bordered" cellspacing="0" style="table-layout: fixed;">
					<thead>
					<tr>
					  <td style="width:20px!important;">Sesi Ke</td>
					  <td style="width:50px!important;">Jenis Sesi</td>
					  <td style="width:50px!important;">Tanggal</td>
					  <td style="width:50px!important;">Hari</td>
					  <td style="width:20px!important;">Jam Ke</td>
					  <td style="width:70px!important;">Nama Mata Ajar</td>
					  <td style="width:20px!important;">Jam Lat</td>
					  <td style="width:50px!important;">Jam Mulai</td>
					  
					  <td style="width:50px!important;">Ubah</td>
					  <td style="width:50px!important;">Lihat Pengajar</td>
					</tr>
					</thead>
					<tbody id="tableJadwal">
						
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
		  
		  <div class="col-xs-12"></div>
		  <div id="tablePengajarContainer" style="display:none;">
			<div class="box box-primary">
            <div class="box-header">
			  <div class="col-xs-12">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleTablePengajar"></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
				  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahData();"><i class="fa fa-plus" ></i> Tambah Pengajar</button> 
              </div>
			  </div>
			  
			<!-- <div class="col-xs-12">
						<div class="form-group">
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadiosPengampu" id="rbPengampu">
									Pengampu
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadiosPengampu" id="rbBukanPengampu">
									Bukan Pengampu
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadiosPengampu" id="rbAll" checked="true">
									Semua Instruktur
								  </label>
								</div>
						</div>
				</div> 
			  -->
			  
            </div>
            
            <div class="box-body">
				<div class="col-xs-12" style="overflow:scroll;">
				<table id="example12" class="table table-bordered" cellspacing="0">
					<thead>
					<tr>
						<td>No</td>
						<td>Nama Pengajar</td>
						<td>Hapus</td>
					</tr>
					</thead>
					<tbody id="tablePengajar">
						
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
		  <div class="col-xs-12"></div>
		  <div id="formPengajar" style="display:none;">
						<div class="row">
						<div class="col-xs-12">
							<div class="box box-primary">
							<div class="box-header">
							  <i class="ion ion-clipboard"></i>

							  <h3 class="box-title" id="titleBoxPengajar"></h3>

							  <div class="box-tools pull-right">
								<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>   
							  </div>
							</div>
							
							<div class="box-body">	
									<label>Nama Pengajar</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
									<div class="form-group input-group">
										<input class="form-control" type="text" name="pegawaiName" id="pegawaiName" readonly="true">
										<span class="input-group-btn"><button class="btn btn-primary"  type="button" onclick="showModal();"><i class="fa fa-search"></i></button></span>
									</div>
									
									
									
								
							</div>
							<div class="box-footer clearfix no-border" id="modalFooterPengajar">
							  
							</div>
						  </div>
						  </div>
						</div>
					</div>
		  
		  
		  
	  </div>
	  
	  
     

    </section>
    
  </div>
 <script>
	var bln = <?php echo $thisMonth; ?>;
	if(bln == 1)
	{
		$('#btnPrevious').attr('disabled', true);
	}
	
	if (bln == 12)
	{
		$('#btnNext').attr('disabled', true);
	}
	
	function nextMonth()
	{
		var temp;
		bulan = <?php echo $thisMonth; ?>;
		tahun = <?php echo $thisYear; ?>;
		temp = bulan++;
		
		$("#btnNext").removeAttr("disabled");
		uri = '<?php echo base_url();?>jadwal?month='+bulan+'&year='+tahun;
		refreshPage(uri);
	}
	
	function previousMonth()
	{
		var temp, bulan, tahun, uri;
		bulan = <?php echo $thisMonth; ?>;
		tahun = <?php echo $thisYear; ?>;
		temp = bulan--;
		$("#btnPrevious").removeAttr("disabled");
		uri = '<?php echo base_url();?>jadwal?month='+bulan+'&year='+tahun;
		refreshPage(uri);	
	}
	
	function tambahKaldik(id, tgl)
	{
		var i, temp;
		i = 0;
		
		while (i < selisihKelas.length)
		{
			if(selisihKelas[i].tgl == tgl)
			{
				temp = selisihKelas[i].selisihkelas;
			}
			i++;
		}
		
		if(temp <= 0)
		{
			var r = confirm("Info : Kelas Di ciawi telah lebih dari maksimal, perhatikan untuk menggunakan lokasi yang lain, jika anda yakin klik yes ?");
			if (r == true) 
			{
				refreshPage(id);
			}
		}
		else
		{
			refreshPage(id);
		}
	}
	
	function setSelectValue (id, val)
	{
		document.getElementById(id).value = val;
	}
	setSelectValue('selectBulan', <?php echo $thisMonth; ?>);
	setSelectValue('selectTahun', <?php echo $thisYear; ?>);
	
	$('#example2').dataTable();
	$('#example3').dataTable();
	$('#example4').DataTable({
		"ordering":false,
		"autoWidth":true,
		"preDrawCallback": function( settings ) 
		  {
			if(idPegawaiBefore != '')
			{
				if(document.getElementById(idPegawaiBefore) != null)
				{
					document.getElementById(idPegawaiBefore).style.backgroundColor = "#fff";
				}
			}
		  }
		});
		
	<?php
	if($kaldikID)
	{
		?>
		viewKaldik('<?php echo $kaldikID; ?>;<?php echo $kaldikName; ?>');
		
		<?php
	}
	?>
 </script>
 <script src="<?php echo base_url();?>assets/lte/plugins/dragscroll/dragscroll.js"></script>