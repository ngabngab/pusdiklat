<script>
var total = [];
var selisihKelas = [];
var arrSplit, diklatlocid, diklatlocname, biayaid, biayaname, kaldikid, kaldikdesc, arrSplit, kaldiksesiid, kelasid, kaldiksesidesc, kelasname, pesertaid, pdid, pesertanip, pesertanama, unitname, unitid, pangkatid, pangkatname, jabatanid, jabatanfullname, jabatangroupid, jabatangroupname, religionid, jenisPegawai, pegawaiid, pegawainame, biodatapesertaid, pesertadegreefirst, pesertadegreelast, pesertakarpeg, pesertapob, pesertadob, pesertagender, pesertaalamat, pesertaalamatkantor, pesertatelepon, pesertateleponkantor, pesertakodepos, pesertaemail, pesertaketunitkerja, pesertaketpangkat, pesertaketjabatan, printsertifikat, jabatanmandiri, unitmandiri, daerahmandiri, namamandiri, nipmandiri, filenamemandiri, pesertanrp, r, p;

var peserta = [];
var modalBiodata = false;
var nametag = [];
var nametable = [];
var cetaknametag = [];
var cetaknametable = [];
var idUnitBefore, idUnit;
var unit = [];
idUnitBefore = idUnit = '';
r = '<?php echo $roleID; ?>';
p = '<?php echo $pegawaiID; ?>';
var idPangkatBefore, idPangkat;
var pangkat = [];
idPangkatBefore = idPangkat = '';

var idJabatanBefore, idJabatan;
var jabatan = [];
idJabatanBefore = idJabatan = '';

var idJabatanGroupBefore, idJabatanGroup;
var jabatangroup = [];
idJabatanGroupBefore = idJabatanGroup = '';

var idPegawaiBefore, idPegawai;
var pegawailo = [];
var pegawaipiket = [];
idPegawaiBefore = idPegawai = '';


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

function pilihUnit(id)
{
	
	if(idUnitBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idUnitBefore = id;
		idUnit = id;
	}
	else
	{
		if(document.getElementById(idUnitBefore) != null)
		{
			document.getElementById(idUnitBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idUnitBefore = id;
		idUnit= id;
	}
	$("#btnPilihUnit").removeAttr("disabled");
}

function pilihUnitOk()
{
	arrSplit = idUnit.split(";");
	unitid = arrSplit[0];
	unitname = arrSplit[1];
	if(unit.length == 0)
	{
		unit.push({'unitid':unitid, 'unitname':unitname});
	}
	else
	{
		unit.pop();
		unit.push({'unitid':unitid, 'unitname':unitname});
	}
	
	
	
	//document.getElementById('unitName').value = unit[0].unitname;
	document.getElementById('unitNameForm').value = unit[0].unitname;
	$('#myModal6').modal('hide');
	/*
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					
					
						$('#myModal').modal('show');
						var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilAllPeserta/' + kaldiksesiid + '/'+kelasid + '/' + unit[0].unitid;
						var j = 0;
						
						$.ajax({
							type: 'get',
							url: uri,
							dataType: 'json',
							success: function (data) 
							{
								$('#example5').DataTable().clear();				
								i = 0;
								j = 1;
								str = '';
								while (i < data.length)
								{
									
									var rowIndex = $('#example5').DataTable().row.add([j, data[i].pesertaNIP, data[i].pesertaNama, data[i].unitName, '<input type="checkbox" id="cbpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="onCbChange(this.id);">']).draw();
									var row = $('#example5').dataTable().fnGetNodes(rowIndex);
									$(row).attr('id', 'peserta;'+data[i].pesertaID);
									i++;
									j++;
								}
								$('#myModal').modal('hide');
								var $target = $('html,body'); 
								$target.animate({scrollTop: $target.height()}, 1000);
								//document.getElementById('FormTambahBiodataPeserta').style.display = 'block';
								document.getElementById('titleFormTambahPeserta').innerHTML = 'Tambah Peserta kelas : '+ kelasname + ' sesi : ' + kaldiksesidesc;					
							}
						});
				}, 300);
				//document.getElementById('FormTambahBiodataPeserta').className = 'pesanmuncul';
			}, 300);
			//document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
		}, 300);
		//document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
	}, 300);
	*/
	
}


function pilihPangkat(id)
{
	
	if(idPangkatBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idPangkatBefore = id;
		idPangkat = id;
	}
	else
	{
		if(document.getElementById(idPangkatBefore) != null)
		{
			document.getElementById(idPangkatBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idPangkatBefore = id;
		idPangkat= id;
	}
	$("#btnPilihPangkat").removeAttr("disabled");
}

function pilihPangkatOk()
{
	arrSplit = idPangkat.split(";");
	pangkatid = arrSplit[0];
	pangkatname = arrSplit[1];
	if(pangkat.length == 0)
	{
		pangkat.push({'pangkatid':pangkatid, 'pangkatname':pangkatname});
	}
	else
	{
		pangkat.pop();
		pangkat.push({'pangkatid':pangkatid, 'pangkatname':pangkatname});
	}
	document.getElementById('pangkatName').value = pangkat[0].pangkatname;
	$('#myModal7').modal('hide');
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
		idPegawai= id;
	}
	$("#btnPilihPegawai").removeAttr("disabled");
}

function pilihPegawaiOk()
{
	arrSplit = idPegawai.split(";");
	pegawaiid = arrSplit[1];
	pegawainame = arrSplit[2];
	console.log(jenisPegawai);
	if (jenisPegawai == 'lo')
	{
		if(pegawailo.length == 0)
		{
			pegawailo.push({'pegawaiid':pegawaiid, 'pegawainame':pegawainame});
		}
		else
		{
			pegawailo.pop();
			pegawailo.push({'pegawaiid':pegawaiid, 'pegawainame':pegawainame});
		}
		document.getElementById('pegawaiLoName').value = pegawailo[0].pegawainame;
	}
	else
	{	
		if(pegawaipiket.length == 0)
		{
			pegawaipiket.push({'pegawaiid':pegawaiid, 'pegawainame':pegawainame});
		}
		else
		{
			pegawaipiket.pop();
			pegawaipiket.push({'pegawaiid':pegawaiid, 'pegawainame':pegawainame});
		}
		document.getElementById('pegawaiPiketName').value = pegawaipiket[0].pegawainame;
	}
	
	$('#myModal14').modal('hide');
}


function pilihJabatan(id)
{
	
	if(idJabatanBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idJabatanBefore = id;
		idJabatan = id;
	}
	else
	{
		if(document.getElementById(idJabatanBefore) != null)
		{
			document.getElementById(idJabatanBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idJabatanBefore = id;
		idJabatan = id;
	}
	$("#btnPilihJabatan").removeAttr("disabled");
}

function pilihJabatanOk()
{
	arrSplit = idJabatan.split(";");
	jabatanid = arrSplit[0];
	jabatanfullname = arrSplit[1];
	if(jabatan.length == 0)
	{
		jabatan.push({'jabatanid':jabatanid, 'jabatanfullname':jabatanfullname});
	}
	else
	{
		jabatan.pop();
		jabatan.push({'jabatanid':jabatanid, 'jabatanfullname':jabatanfullname});
	}
	document.getElementById('jabatanFullName').value = jabatan[0].jabatanfullname;
	$('#myModal8').modal('hide');
}

function pilihJabatanGroup(id)
{
	
	if(idJabatanGroupBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idJabatanGroupBefore = id;
		idJabatanGroup = id;
	}
	else
	{
		if(document.getElementById(idJabatanGroupBefore) != null)
		{
			document.getElementById(idJabatanGroupBefore).style.backgroundColor = "#fff";
		}
		
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idJabatanGroupBefore = id;
		idJabatanGroup = id;
	}
	$("#btnPilihJabatanGroup").removeAttr("disabled");
}

function pilihJabatanGroupOk()
{
	arrSplit = idJabatanGroup.split(";");
	jabatangroupid = arrSplit[0];
	jabatangroupfullname = arrSplit[1];
	if(jabatangroup.length == 0)
	{
		jabatangroup.push({'jabatangroupid':jabatangroupid, 'jabatangroupfullname':jabatangroupfullname});
	}
	else
	{
		jabatangroup.pop();
		jabatangroup.push({'jabatangroupid':jabatangroupid, 'jabatangroupfullname':jabatangroupfullname});
	}
	document.getElementById('jabatanGroupFullName').value = jabatangroup[0].jabatangroupfullname;
	$('#myModal9').modal('hide');
}


var idLokasiBefore, idLokasi;
var loc = [];
idLokasiBefore = idLokasi = '';

var idBiayaBefore, idBiaya;
var biaya = [];
idBiayaBefore = idBiaya = '';

function onTampil()
{
	var bulan = $('#selectBulan').val();
	var tahun = $('#selectTahun').val();
	var uri = '';
	if (loc.length > 0 && biaya.length > 0)
	{
		uri = '<?php echo base_url();?>pesertadiklat?month='+bulan+'&year='+tahun+'&diklatlocid='+loc[0].diklatlocid+'&biayaid='+biaya[0].biayaid;
	}
	else if (loc.length > 0)
	{
		uri = '<?php echo base_url();?>pesertadiklat?month='+bulan+'&year='+tahun+'&diklatlocid='+loc[0].diklatlocid;
	}
	else if (biaya.length > 0)
	{
		uri = '<?php echo base_url();?>pesertadiklat?month='+bulan+'&year='+tahun+'&biayaid='+biaya[0].biayaid;
	}
	else
	{
		uri = '<?php echo base_url();?>pesertadiklat?month='+bulan+'&year='+tahun;
	}
	
	
	refreshPage(uri);
}

function viewKaldik(arr)
{
	var str, i;
	
	arrSplit = arr.split(';');
	kaldikid = arrSplit[0];
	kaldikdesc = arrSplit[1];
	printsertifikat = arrSplit[2];
	jabatanmandiri = arrSplit[3];
	unitmandiri = arrSplit[4];
	daerahmandiri = arrSplit[5];
	namamandiri = arrSplit[6];
	nipmandiri = arrSplit[7];
	filenamemandiri = arrSplit[8];
	
	if(nametag.length > 0)
	{
		nametag = [];
	}
	
	
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilkelas/' + kaldikid;
						$.ajax({
							type: 'get',
							url: uri,
							dataType: 'json',
							success: function (data) 
							{
								console.log(data);
								str = '';
								i = 0;
								while (i < data.length)
								{
									str += '<option value="'+data[i].kelasID+';'+data[i].namaKelas+'">'+data[i].namaKelas+'</option>';
									if(i == 0)
									{
										kelasid = data[i].kelasID;
										kelasname = data[i].namaKelas;
										if(pegawailo.length > 0)
										{
											pegawailo.pop();
											pegawailo.push({'pegawaiid':data[i].pegawaiIDLO, 'pegawainame':data[i].pegawaiNameLo});
										}
										else
										{
											pegawailo.push({'pegawaiid':data[i].pegawaiIDLO, 'pegawainame':data[i].pegawaiNameLo});
										}

										if(pegawaipiket.length > 0)
										{
											pegawaipiket.pop();
											pegawaipiket.push({'pegawaiid':data[i].pegawaiIDPiket, 'pegawainame':data[i].pegawaiNamePiket});
										}
										else
										{
											pegawaipiket.push({'pegawaiid':data[i].pegawaiIDPiket, 'pegawainame':data[i].pegawaiNamePiket});
										}
										document.getElementById('pegawaiLoName').value = pegawailo[0].pegawainame;	
									 	document.getElementById('pegawaiPiketName').value = pegawaipiket[0].pegawainame;	
									 	
									}										
									i++;
								}
								document.getElementById('kelas').innerHTML = str;
								
								var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilsesi/' + kaldikid;
									$.ajax({
										type: 'get',
										url: uri,
										dataType: 'json',
										success: function (data) 
										{
											str = '';
											i = 0;
											while (i < data.length)
											{
												str += '<option value="'+data[i].kaldikSesiID+';'+data[i].kurikulumSesiDesc+'">'+data[i].kurikulumSesiDesc+'</option>';
												if (i == 0)
												{
													kaldiksesiid = data[i].kaldikSesiID;
													kaldiksesidesc = data[i].kurikulumSesiDesc;
												}
												i++;
											}
											document.getElementById('sesi').innerHTML = str;
											var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/getAllData/' + kaldiksesiid + '/'+kelasid;
											var j = 0;
											$.ajax({
												type: 'get',
												url: uri,
												dataType: 'json',
												success: function (data) 
												{
													str = '';
													i = 0;
													while (i < data.length)
													{
														
														j = i + 1;
														if (data[i].nomorSertifikatLan == '')
														{
															str += '<tr><td>'+j+'</td><td>'+data[i].pesertaNIPStr+'</td><td>'+data[i].pesertaNama+'</td><td>'+data[i].unitName+'</td><td>'+data[i].nomorSertifikat+'</td><td>'+data[i].tglBerlakuStr+'</td><td><button class="btn btn-sm btn-warning" id="sertifikatlan;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="sertifikatLan(this.id);"><i class="fa fa-pencil"></i> Sertifikat Lan</button></td><td><button class="btn btn-sm btn-warning" id="ubahpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].pesertaDegreeFirst+';'+data[i].pesertaDegreeLast+';'+data[i].pesertaPOB+';'+data[i].pesertaDateOfBirth+';'+data[i].pesertaGender+';'+data[i].religionID+';'+data[i].religionName+';'+data[i].unitID+';'+data[i].unitName+';'+data[i].pesertaKetUnitKerja+';'+data[i].pangkatID+';'+data[i].pangkatName+';'+data[i].pesertaKetPangkat+';'+data[i].jabatanGroupID+';'+data[i].jabatanGroupFullName+';'+data[i].jabatanID+';'+data[i].jabatanFullName+';'+data[i].pesertaKetJabatan+';'+data[i].pesertaAlamat+';'+data[i].pesertaAlamatKantor+';'+data[i].pesertaTelepon+';'+data[i].pesertaTeleponKantor+';'+data[i].pesertaEmail+';'+data[i].pesertaKodePos+';'+data[i].pesertaNRP+'" onclick="ubahPeserta(this.id);"><i class="fa fa-pencil"></i></button></td><td><button class="btn btn-sm btn-danger" id="hapuspeserta;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="hapusPeserta(this.id);"><i class="fa fa-close"></i></button></td><td><input type="checkbox" id="cbprintnametag;'+data[i].pdID+'" onclick="printNameTag(this.id);">Print Name Tag</td><td><input type="checkbox" id="cbprintnametable;'+data[i].pdID+'" onclick="printNameTable(this.id);">Print Name Table</td></tr>';
															
														}
														else
														{
															str += '<tr><td>'+j+'</td><td>'+data[i].pesertaNIPStr+'</td><td>'+data[i].pesertaNama+'</td><td>'+data[i].unitName+'</td><td>'+data[i].nomorSertifikat+'</td><td>'+data[i].tglBerlakuStr+'</td><td><button class="btn btn-sm btn-primary" id="sertifikatlan;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="sertifikatLan(this.id);"><i class="fa fa-pencil"></i> Sertifikat Lan</button></td><td><button class="btn btn-sm btn-warning" id="ubahpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].pesertaDegreeFirst+';'+data[i].pesertaDegreeLast+';'+data[i].pesertaPOB+';'+data[i].pesertaDateOfBirth+';'+data[i].pesertaGender+';'+data[i].religionID+';'+data[i].religionName+';'+data[i].unitID+';'+data[i].unitName+';'+data[i].pesertaKetUnitKerja+';'+data[i].pangkatID+';'+data[i].pangkatName+';'+data[i].pesertaKetPangkat+';'+data[i].jabatanGroupID+';'+data[i].jabatanGroupFullName+';'+data[i].jabatanID+';'+data[i].jabatanFullName+';'+data[i].pesertaKetJabatan+';'+data[i].pesertaAlamat+';'+data[i].pesertaAlamatKantor+';'+data[i].pesertaTelepon+';'+data[i].pesertaTeleponKantor+';'+data[i].pesertaEmail+';'+data[i].pesertaKodePos+';'+data[i].pesertaNRP+'" onclick="ubahPeserta(this.id);"><i class="fa fa-pencil"></i></button></td><td><button class="btn btn-sm btn-danger" id="hapuspeserta;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="hapusPeserta(this.id);"><i class="fa fa-close"></i></button></td><td><input type="checkbox" id="cbprintnametag;'+data[i].pdID+'" onclick="printNameTag(this.id);">Print Name Tag</td><td><input type="checkbox" id="cbprintnametable;'+data[i].pdID+'" onclick="printNameTable(this.id);">Print Name Table</td></tr>';
															
														}
														
														
														nametag.push({'id':'cbprintnametag;'+data[i].pdID});
														nametable.push({'id':'cbprintnametable;'+data[i].pdID});
														i++;
													}
													document.getElementById('bodyTablePeserta').innerHTML = str;
													
												}
											});
										}
									});
							}
						});
						
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('TablePeserta').style.display = 'block';
					document.getElementById('titleTablePeserta').innerHTML = 'Data Peserta Diklat : ' + kaldikdesc;
					
				}, 300);
				
				document.getElementById('TablePeserta').className = 'pesanmuncul';
			}, 300);
			document.getElementById('TablePeserta').style.display = 'none';
			document.getElementById('FormTambahPeserta').style.display = 'none';
			document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
		}, 300);
		document.getElementById('TablePeserta').className = 'pesanhilang';
		document.getElementById('FormTambahPeserta').className = 'pesanhilang';
		document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
	}, 300);
}

function tambahPeserta()
{
	var str, i;

		
	if(r == '3')
	{
		if(p != pegawailo[0].pegawaiid)
		{
			alert('Anda Bukan Pegawai LO Pada Diklat Tersebut');
		}
		else
		{
			$('#myModal').modal('show');
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function(){
						setTimeout(function(){
							if(unit.length > 0)
							{
								
								var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilAllPeserta/' + kaldiksesiid + '/'+kelasid + '/' + unit[0].unitid;
								var j = 0;
								
								$.ajax({
									type: 'get',
									url: uri,
									dataType: 'json',
									success: function (data) 
									{
										$('#example5').DataTable().clear();				
										i = 0;
										j = 1;
										str = '';
										while (i < data.length)
										{
											
											var rowIndex = $('#example5').DataTable().row.add([j, data[i].pesertaNIP, data[i].pesertaNama, data[i].unitName, '<input type="checkbox" id="cbpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="onCbChange(this.id);">']).draw();
											var row = $('#example5').dataTable().fnGetNodes(rowIndex);
											$(row).attr('id', 'peserta;'+data[i].pesertaID);
											i++;
											j++;
										}
										$('#myModal').modal('hide');
														
									}
								});
								
							}
							else
							{
								$('#myModal').modal('hide');
							}
							var $target = $('html,body');
							$target.animate({scrollTop: $target.height()}, 1000);
							document.getElementById('FormTambahPeserta').style.display = 'block';
							document.getElementById('titleFormTambahPeserta').innerHTML = 'Tambah Peserta kelas : '+ kelasname + ' sesi : ' + kaldiksesidesc;
							
							
						}, 300);
						document.getElementById('FormTambahPeserta').className = 'pesanmuncul';
						//FormTambahBiodataPeserta
						
					}, 300);
					document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
					document.getElementById('FormTambahPeserta').style.display = 'none';
				}, 300);
				document.getElementById('FormTambahPeserta').className = 'pesanhilang';
				document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
				
			}, 300);
		}
	}
	else
	{
		$('#myModal').modal('show');
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function(){
						if(unit.length > 0)
						{
							
							var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilAllPeserta/' + kaldiksesiid + '/'+kelasid + '/' + unit[0].unitid;
							var j = 0;
							
							$.ajax({
								type: 'get',
								url: uri,
								dataType: 'json',
								success: function (data) 
								{
									$('#example5').DataTable().clear();				
									i = 0;
									j = 1;
									str = '';
									while (i < data.length)
									{
										
										var rowIndex = $('#example5').DataTable().row.add([j, data[i].pesertaNIP, data[i].pesertaNama, data[i].unitName, '<input type="checkbox" id="cbpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="onCbChange(this.id);">']).draw();
										var row = $('#example5').dataTable().fnGetNodes(rowIndex);
										$(row).attr('id', 'peserta;'+data[i].pesertaID);
										i++;
										j++;
									}
									$('#myModal').modal('hide');
													
								}
							});
							
						}
						else
						{
							$('#myModal').modal('hide');
						}
						var $target = $('html,body');
						$target.animate({scrollTop: $target.height()}, 1000);
						document.getElementById('FormTambahPeserta').style.display = 'block';
						document.getElementById('titleFormTambahPeserta').innerHTML = 'Tambah Peserta kelas : '+ kelasname + ' sesi : ' + kaldiksesidesc;
						
						
					}, 300);
					document.getElementById('FormTambahPeserta').className = 'pesanmuncul';
					
				}, 300);
				document.getElementById('FormTambahPeserta').style.display = 'none';
				document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
			}, 300);
			document.getElementById('FormTambahPeserta').className = 'pesanhilang';
			document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
		}, 300);
	}
	
	
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
	$('#myModal2').modal('hide');
	
	
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

function loadKelasChange(val)
{
	arrSplit = val.split(';');
	kelasid = arrSplit[0];
	if(nametag.length > 0)
	{
		nametag = [];
	}
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){	
						var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/getAllData/' + kaldiksesiid + '/'+kelasid;
						var j = 0;
						$.ajax({
							type: 'get',
							url: uri,
							dataType: 'json',
							success: function (data) 
							{
								str = '';
								i = 0;
								while (i < data.length)
								{						
									j = i + 1;
									if (data[i].nomorSertifikatLan == '')
									{
										str += '<tr><td>'+j+'</td><td>'+data[i].pesertaNIP+'</td><td>'+data[i].pesertaNama+'</td><td>'+data[i].unitName+'</td><td>'+data[i].nomorSertifikat+'</td><td>'+data[i].tglBerlaku+'</td><td><button class="btn btn-sm btn-warning" id="sertifikatlan;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="sertifikatLan(this.id);"><i class="fa fa-pencil"></i> Sertifikat Lan</button></td><td><button class="btn btn-sm btn-warning" id="ubahpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].pesertaDegreeFirst+';'+data[i].pesertaDegreeLast+';'+data[i].pesertaPOB+';'+data[i].pesertaDateOfBirth+';'+data[i].pesertaGender+';'+data[i].religionID+';'+data[i].religionName+';'+data[i].unitID+';'+data[i].unitName+';'+data[i].pesertaKetUnitKerja+';'+data[i].pangkatID+';'+data[i].pangkatName+';'+data[i].pesertaKetPangkat+';'+data[i].jabatanGroupID+';'+data[i].jabatanGroupFullName+';'+data[i].jabatanID+';'+data[i].jabatanFullName+';'+data[i].pesertaKetJabatan+';'+data[i].pesertaAlamat+';'+data[i].pesertaAlamatKantor+';'+data[i].pesertaTelepon+';'+data[i].pesertaTeleponKantor+';'+data[i].pesertaEmail+';'+data[i].pesertaKodePos+'" onclick="ubahPeserta(this.id);"><i class="fa fa-pencil"></i></button></td><td><button class="btn btn-sm btn-danger" id="hapuspeserta;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="hapusPeserta(this.id);"><i class="fa fa-close"></i></button></td><td><input type="checkbox" id="cbprintnametag;'+data[i].pdID+'" onclick="printNameTag(this.id);">Print Name Tag</td><td><input type="checkbox" id="cbprintnametable;'+data[i].pdID+'" onclick="printNameTable(this.id);">Print Name Table</td></tr>';
										
									}
									else
									{
										str += '<tr><td>'+j+'</td><td>'+data[i].pesertaNIP+'</td><td>'+data[i].pesertaNama+'</td><td>'+data[i].unitName+'</td><td>'+data[i].nomorSertifikat+'</td><td>'+data[i].tglBerlaku+'</td><td><button class="btn btn-sm btn-primary" id="sertifikatlan;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="sertifikatLan(this.id);"><i class="fa fa-pencil"></i> Sertifikat Lan</button></td><td><button class="btn btn-sm btn-warning" id="ubahpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].pesertaDegreeFirst+';'+data[i].pesertaDegreeLast+';'+data[i].pesertaPOB+';'+data[i].pesertaDateOfBirth+';'+data[i].pesertaGender+';'+data[i].religionID+';'+data[i].religionName+';'+data[i].unitID+';'+data[i].unitName+';'+data[i].pesertaKetUnitKerja+';'+data[i].pangkatID+';'+data[i].pangkatName+';'+data[i].pesertaKetPangkat+';'+data[i].jabatanGroupID+';'+data[i].jabatanGroupFullName+';'+data[i].jabatanID+';'+data[i].jabatanFullName+';'+data[i].pesertaKetJabatan+';'+data[i].pesertaAlamat+';'+data[i].pesertaAlamatKantor+';'+data[i].pesertaTelepon+';'+data[i].pesertaTeleponKantor+';'+data[i].pesertaEmail+';'+data[i].pesertaKodePos+'" onclick="ubahPeserta(this.id);"><i class="fa fa-pencil"></i></button></td><td><button class="btn btn-sm btn-danger" id="hapuspeserta;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="hapusPeserta(this.id);"><i class="fa fa-close"></i></button></td><td><input type="checkbox" id="cbprintnametag;'+data[i].pdID+'" onclick="printNameTag(this.id);">Print Name Tag</td><td><input type="checkbox" id="cbprintnametable;'+data[i].pdID+'" onclick="printNameTable(this.id);">Print Name Table</td></tr>';
										
									}
									nametag.push({'id':'cbprintnametag;'+data[i].pdID});
									nametable.push({'id':'cbprintnametable;'+data[i].pdID});
									i++;
								}
								document.getElementById('bodyTablePeserta').innerHTML = str;
								uri = 	'<?php echo base_url(); ?>' + 'pesertadiklat/ambilsatukelas/' + kelasid;
								$.ajax({
									type: 'get',
									url: uri,
									dataType: 'json',
									success: function (data) 
									{
										if(pegawailo.length > 0)
										{
											pegawailo.pop();
											pegawailo.push({'pegawaiid':data[i].pegawaiIDLO, 'pegawainame':data[i].pegawaiNameLo});
										}
										else
										{
											pegawailo.push({'pegawaiid':data[i].pegawaiIDLO, 'pegawainame':data[i].pegawaiNameLo});
										}

										if(pegawaipiket.length > 0)
										{
											pegawaipiket.pop();
											pegawaipiket.push({'pegawaiid':data[i].pegawaiIDPiket, 'pegawainame':data[i].pegawaiNamePiket});
										}
										else
										{
											pegawaipiket.push({'pegawaiid':data[i].pegawaiIDPiket, 'pegawainame':data[i].pegawaiNamePiket});
										}
										document.getElementById('pegawaiLoName').value = pegawailo[0].pegawainame;	
									 	document.getElementById('pegawaiPiketName').value = pegawaipiket[0].pegawainame;	
									 						
									}
								});
							}
						});
					
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('TablePeserta').style.display = 'block';
					document.getElementById('titleTablePeserta').innerHTML = 'Data Peserta Diklat : ' + kaldikdesc;
					
				}, 300);
				document.getElementById('TablePeserta').className = 'pesanmuncul';
				
			}, 300);
			document.getElementById('TablePeserta').style.display = 'none';
			document.getElementById('FormTambahPeserta').style.display = 'none';
		}, 300);
		document.getElementById('TablePeserta').className = 'pesanhilang';
		document.getElementById('FormTambahPeserta').className = 'pesanhilang';
	}, 300);
}

function loadSesiChange(val)
{
	arrSplit = val.split(';');
	kaldiksesiid = arrSplit[0];
	if(nametag.length > 0)
	{
		nametag = [];
	}
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){	
						var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/getAllData/' + kaldiksesiid + '/'+kelasid;
						var j = 0;
						$.ajax({
							type: 'get',
							url: uri,
							dataType: 'json',
							success: function (data) 
							{
								str = '';
								i = 0;
								while (i < data.length)
								{						
									j = i + 1;
									if (data[i].nomorSertifikatLan == '')
									{
										str += '<tr><td>'+j+'</td><td>'+data[i].pesertaNIP+'</td><td>'+data[i].pesertaNama+'</td><td>'+data[i].unitName+'</td><td>'+data[i].nomorSertifikat+'</td><td>'+data[i].tglBerlaku+'</td><td><button class="btn btn-sm btn-warning" id="sertifikatlan;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="sertifikatLan(this.id);"><i class="fa fa-pencil"></i> Sertifikat Lan</button></td><td><button class="btn btn-sm btn-warning" id="ubahpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].pesertaDegreeFirst+';'+data[i].pesertaDegreeLast+';'+data[i].pesertaPOB+';'+data[i].pesertaDateOfBirth+';'+data[i].pesertaGender+';'+data[i].religionID+';'+data[i].religionName+';'+data[i].unitID+';'+data[i].unitName+';'+data[i].pesertaKetUnitKerja+';'+data[i].pangkatID+';'+data[i].pangkatName+';'+data[i].pesertaKetPangkat+';'+data[i].jabatanGroupID+';'+data[i].jabatanGroupFullName+';'+data[i].jabatanID+';'+data[i].jabatanFullName+';'+data[i].pesertaKetJabatan+';'+data[i].pesertaAlamat+';'+data[i].pesertaAlamatKantor+';'+data[i].pesertaTelepon+';'+data[i].pesertaTeleponKantor+';'+data[i].pesertaEmail+';'+data[i].pesertaKodePos+'" onclick="ubahPeserta(this.id);"><i class="fa fa-pencil"></i></button></td><td><button class="btn btn-sm btn-danger" id="hapuspeserta;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="hapusPeserta(this.id);"><i class="fa fa-close"></i></button></td><td><input type="checkbox" id="cbprintnametag;'+data[i].pdID+'" onclick="printNameTag(this.id);">Print Name Tag</td><td><input type="checkbox" id="cbprintnametable;'+data[i].pdID+'" onclick="printNameTable(this.id);">Print Name Table</td></tr>';
										
									}
									else
									{
										str += '<tr><td>'+j+'</td><td>'+data[i].pesertaNIP+'</td><td>'+data[i].pesertaNama+'</td><td>'+data[i].unitName+'</td><td>'+data[i].nomorSertifikat+'</td><td>'+data[i].tglBerlaku+'</td><td><button class="btn btn-sm btn-primary" id="sertifikatlan;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="sertifikatLan(this.id);"><i class="fa fa-pencil"></i> Sertifikat Lan</button></td><td><button class="btn btn-sm btn-warning" id="ubahpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].pesertaDegreeFirst+';'+data[i].pesertaDegreeLast+';'+data[i].pesertaPOB+';'+data[i].pesertaDateOfBirth+';'+data[i].pesertaGender+';'+data[i].religionID+';'+data[i].religionName+';'+data[i].unitID+';'+data[i].unitName+';'+data[i].pesertaKetUnitKerja+';'+data[i].pangkatID+';'+data[i].pangkatName+';'+data[i].pesertaKetPangkat+';'+data[i].jabatanGroupID+';'+data[i].jabatanGroupFullName+';'+data[i].jabatanID+';'+data[i].jabatanFullName+';'+data[i].pesertaKetJabatan+';'+data[i].pesertaAlamat+';'+data[i].pesertaAlamatKantor+';'+data[i].pesertaTelepon+';'+data[i].pesertaTeleponKantor+';'+data[i].pesertaEmail+';'+data[i].pesertaKodePos+'" onclick="ubahPeserta(this.id);"><i class="fa fa-pencil"></i></button></td><td><button class="btn btn-sm btn-danger" id="hapuspeserta;'+data[i].pdID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="hapusPeserta(this.id);"><i class="fa fa-close"></i></button></td><td><input type="checkbox" id="cbprintnametag;'+data[i].pdID+'" onclick="printNameTag(this.id);">Print Name Tag</td><td><input type="checkbox" id="cbprintnametable;'+data[i].pdID+'" onclick="printNameTable(this.id);">Print Name Table</td></tr>';
										
									}
									nametag.push({'id':'cbprintnametag;'+data[i].pdID});
									nametable.push({'id':'cbprintnametable;'+data[i].pdID});
									i++;
								}
								document.getElementById('bodyTablePeserta').innerHTML = str;
														
							}
						});
					
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('TablePeserta').style.display = 'block';
					document.getElementById('titleTablePeserta').innerHTML = 'Data Peserta Diklat : ' + kaldikdesc;
					
				}, 300);
				document.getElementById('TablePeserta').className = 'pesanmuncul';
			}, 300);
			document.getElementById('TablePeserta').style.display = 'none';
			document.getElementById('FormTambahPeserta').style.display = 'none';
		}, 300);
		document.getElementById('TablePeserta').className = 'pesanhilang';
		document.getElementById('FormTambahPeserta').className = 'pesanhilang';
	}, 300);
}


function onCbChange(id)
{
	
	arrSplit = id.split(';');
	pesertaid = arrSplit[1];
	pesertanip = arrSplit[2];
	pesertanama = arrSplit[3];
	unitname = arrSplit[4];
	
	if(document.getElementById(id).checked == true)
	{
		peserta.push({'pesertaid':pesertaid, 'pesertanip':pesertanip, 'pesertanama':pesertanama, 'unitname':unitname});
		document.getElementById('peserta;'+pesertaid).style.backgroundColor = '#26A69A';
	}
	else
	{
		i = 0;
		while (i < peserta.length)
		{
			if(pesertaid == peserta[i].pesertaid)
			{
				peserta.splice(i, 1);
				document.getElementById('peserta;'+pesertaid).style.backgroundColor = '#FFF';
			}
			i++;
		}	
	}
}

function simpanPeserta()
{
	var str = '';
	
	if(peserta.length == 0)
	{
		alert('Maaf Anda Belum memilih Peserta');
	}
	else
	{
		$('#myModal4').modal('show');
		i = 0;
		str = '';
		while (i < peserta.length)
		{
			str += '<tr><td>'+peserta[i].pesertanip+'</td><td>'+peserta[i].pesertanama+'</td><td>'+peserta[i].unitname+'</td></tr>';
			i++;
		}
		document.getElementById('bodyTablePesertaSave').innerHTML = str;
		document.getElementById('myModalLabelPeserta').innerHTML = 'Peserta Diklat ' + kaldikdesc;
	}
	
}

function simpanPesertaKeTable()
{
	var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/insert/?kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&peserta='+JSON.stringify(peserta);
	
	
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
		{
			$('#myModal4').modal('hide');
			uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
			refreshPage(uri);
		}
	});
	
}

function hapusPeserta(id)
{
	arrSplit = id.split(';');
	pdid = arrSplit[1];
	pesertanip = arrSplit[2];
	pesertanama = arrSplit[3];
	unitname = arrSplit[4];
	document.getElementById('lblPesertaNIP').innerHTML = 'NIP : ' + pesertanip;
	document.getElementById('lblPesertaNama').innerHTML = 'Nama : ' + pesertanama;
	document.getElementById('lblUnitName').innerHTML = 'Unit : ' + unitname;
	if(r == '3')
	{
		if(p != pegawailo[0].pegawaiid)
		{
			alert('Anda Bukan Pegawai LO Pada Diklat Tersebut');
		}
		else
		{
			$('#myModal5').modal('show');
		}
	}
	else
	{
		$('#myModal5').modal('show');
	}
}

function hapusPesertaConfirm()
{
	var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/delete/'+pdid;
	
	
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
		{
			$('#myModal5').modal('hide');
			uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
			refreshPage(uri);
		}
	});
}

function tambahBiodataPeserta()
{
	$('#myModal').modal('show');
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					
							$('#myModal').modal('hide');
							var $target = $('html,body'); 
							$target.animate({scrollTop: $target.height()}, 1000);
							document.getElementById('FormTambahBiodataPeserta').style.display = 'block';
							document.getElementById('titleFormTambahBiodataPeserta').innerHTML = 'Form Tambah Biodata Peserta';
							document.getElementById('footerFormPeserta').innerHTML = '<button type="button" class="btn btn-primary btn-lg btn-block" onclick="simpanBiodataPeserta();"><i class="fa fa-save"></i> Simpan Biodata Peserta</button>';
							
				}, 300);
				document.getElementById('FormTambahBiodataPeserta').className = 'pesanmuncul';
			}, 300);
			document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
		}, 300);
		document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
	}, 300);
}

function showModalUnit()
{
	$('#myModal6').modal('show');
	//modalBiodata = false;
}

function showModalPangkat()
{
	$('#myModal7').modal('show');
}

function showModalJabatan()
{
	$('#myModal8').modal('show');
}

function showModalJabatanGroup()
{
	$('#myModal9').modal('show');
}

function simpanBiodataPeserta()
{
	pesertanip = document.getElementById('pesertaNIP').value;
	pesertanama = document.getElementById('pesertaNama').value;
	pesertadegreefirst = document.getElementById('pesertaDegreeFirst').value;
	pesertadegreelast = document.getElementById('pesertaDegreeLast').value;
	pesertakarpeg = document.getElementById('pesertaKarPeg').value;
	pesertapob = document.getElementById('pesertaPOB').value;
	pesertadob = document.getElementById('pesertaDOB').value;
	pesertagender = document.getElementById('pesertaGender').value;
	pesertaalamat = document.getElementById('pesertaAlamat').value;
	pesertaalamatkantor = document.getElementById('pesertaAlamatKantor').value;
	pesertatelepon = document.getElementById('pesertaTelepon').value;
	pesertateleponkantor = document.getElementById('pesertaTeleponKantor').value;
	pesertakodepos = document.getElementById('pesertaKodePos').value;
	pesertaemail = document.getElementById('pesertaEmail').value;
	pesertaketunitkerja = document.getElementById('pesertaKetUnitKerja').value;
	pesertaketjabatan = document.getElementById('pesertaKetJabatan').value;
	pesertaketpangkat = document.getElementById('pesertaKetPangkat').value;

	if(document.getElementById('pesertaNIP').checked == true)
	{
		pesertanrp = '0';
	}
	else
	{
		pesertanrp = '1';
	}
	
	if (pesertanama == '')
	{
		alert('anda belum mengisi nama peserta');
	}
	else
	{
		religionid = document.getElementById('pesertaAgama').value;
		if(pangkat.length == 0)
		{
			pangkatid = '';
		}
		else
		{
			pangkatid = pangkat[0].pangkatid;
		}

		if(jabatan.length == 0)
		{
			jabatanid = '';
		}
		else
		{
			jabatanid = jabatan[0].jabatanid;
		}

		if (unit.length == 0)
		{
			unitid = 0;
		}
		else
		{
			unitid = unit[0].unitid;
		}
		

		/*
		if(jabatangroup.length == 0)
		{
			jabatangroupid = '';
		}
		else
		{
			jabatangroupid = jabatangroup[0].jabatangroupid;
		}
		*/

		jabatangroupid = document.getElementById('pesertaJabatanGroup').value;
		var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/insertbiodatapeserta/?religionid='+religionid+'&pangkatid='+pangkatid+'&jabatanid='+jabatanid+'&jabatangroupid='+jabatangroupid+'&unitid='+unitid+'&pesertanip='+pesertanip+'&pesertanama='+pesertanama+'&pesertadegreefirst='+pesertadegreefirst+'&pesertadegreelast='+pesertadegreelast+'&pesertakarpeg='+pesertakarpeg+'&pesertapob='+pesertapob+'&pesertadob='+pesertadob+'&pesertagender='+pesertagender+'&pesertaalamat='+pesertaalamat+'&pesertaalamatkantor='+pesertaalamatkantor+'&pesertatelepon='+pesertatelepon+'&pesertateleponkantor='+pesertateleponkantor+'&pesertakodepos='+pesertakodepos+'&pesertaemail='+pesertaemail+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&pesertaketunitkerja='+pesertaketunitkerja+'&pesertaketjabatan='+pesertaketjabatan+'&pesertaketpangkat='+pesertaketpangkat+'&pesertanrp='+pesertanrp;
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if(data.message != '')
				{
					alert(data.message);
				}
				else
				{
					uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
					refreshPage(uri);
				}
				
			}
		});	
	}
}

function showModalUnitBiodata()
{
	$('#myModal6').modal('show');
	//modalBiodata = true;
}

function newTab(url)
{
	var win = window.open(url, '_blank');
	win.focus();
}

function cetakAbsensi()
{
	var uri = '<?php echo base_url() ?>cetakabsensi/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid;
	newTab(uri);
}

function printAll(id)
{
	var i;
	//console.log(nametag);
	
	if (document.getElementById(id).checked == true)
	{
		i = 0;
		while (i < nametag.length)
		{
			arrSplit = nametag[i].id.split(';');
			cetaknametag.push(arrSplit[1]);
			document.getElementById(nametag[i].id).checked = true;
			i++;
		}
	}
	else
	{
		i = 0;
		while (i < nametag.length)
		{
			arrSplit = nametag[i].id.split(';');
			cetaknametag.push(arrSplit[1]);
			document.getElementById(nametag[i].id).checked = false;
			i++;
		}
		cetaknametag = [];
	}
}

function printNameTag(id)
{
	var bool, i;
	bool = document.getElementById(id).checked;
	arrSplit = id.split(';');
	if(bool == true)
	{
		cetaknametag.push(arrSplit[1]);
		document.getElementById(id).checked = true;
	}
	else
	{
		
		i = 0;
		while (i < cetaknametag.length)
		{
			if(cetaknametag[i] == arrSplit[1])
			{
				cetaknametag.splice(i, 1);
				document.getElementById(id).checked = false;
			}
			
			i++;
		}
	}
	
}

function cetakNameTag()
{
	if(cetaknametag.length == 0)
	{
		alert('Pilih Terlebih dahulu peserta');
	}
	else
	{
		$('#myModal10').modal('show');
	}
}

function viewNameTag()
{
	$('#myModal10').modal('hide');
	var uri = '<?php echo base_url() ?>cetaknametag/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametag);
	
	if(document.getElementById('rbBackground').checked == true)
	{
		uri = '<?php echo base_url() ?>cetaknametag/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametag);
	}
	else
	{
		uri = '<?php echo base_url() ?>cetaknametagnobg/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametag);
	}
	
	setTimeout(function() {
		newTab(uri);
	}, 400);
}


function printAllNameTable(id)
{
	var i;
	//console.log(nametag);
	
	if (document.getElementById(id).checked == true)
	{
		i = 0;
		while (i < nametable.length)
		{
			arrSplit = nametable[i].id.split(';');
			cetaknametable.push(arrSplit[1]);
			document.getElementById(nametable[i].id).checked = true;
			i++;
		}
	}
	else
	{
		i = 0;
		while (i < nametable.length)
		{
			arrSplit = nametable[i].id.split(';');
			cetaknametable.push(arrSplit[1]);
			document.getElementById(nametable[i].id).checked = false;
			i++;
		}
		cetaknametable = [];
	}
}

function printNameTable(id)
{
	var bool, i;
	bool = document.getElementById(id).checked;
	arrSplit = id.split(';');
	if(bool == true)
	{
		cetaknametable.push(arrSplit[1]);
		document.getElementById(id).checked = true;
	}
	else
	{
		
		i = 0;
		while (i < cetaknametable.length)
		{
			if(cetaknametable[i] == arrSplit[1])
			{
				cetaknametable.splice(i, 1);
				document.getElementById(id).checked = false;
			}
			
			i++;
		}
	}
	
}


function viewNameTable()
{
	if(cetaknametable.length == 0)
	{
		alert('Pilih Terlebih dahulu peserta');
	}
	else
	{
		var uri = '<?php echo base_url() ?>cetaknametable/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		console.log(uri);
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	
}

function cetakCekListPeserta()
{
	var uri = '<?php echo base_url() ?>cetakceklistpeserta/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid;
	newTab(uri);
}

function cetakDataPeserta()
{
	var uri = '<?php echo base_url() ?>cetakdatapeserta/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid;
	newTab(uri);
}

function cetakTandaTerimaAtk()
{
	var uri = '<?php echo base_url() ?>cetaktandaterimaatk/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid;
	newTab(uri);
}


function cetakTandaTerimaSertifikat()
{
	var uri = '<?php echo base_url() ?>cetaktandaterimasertifikat/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid;
	newTab(uri);
}

function cetakPiagam()
{
	var uri = '<?php echo base_url() ?>cetakpiagampenghargaan/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid;
	newTab(uri);
}

function cetakReportSelect()
{
	var report = document.getElementById('selectReport').value;
	if(report == 'cetakAbsensi')
	{
		cetakAbsensi();
	}
	else if (report == 'cetakNameTag')
	{
		cetakNameTag();
	}
	else if (report == 'cetakNameTable')
	{
		viewNameTable();
	}
	else if (report == 'cetakCekListPeserta')
	{
		cetakCekListPeserta();
	}
	else if (report == 'cetakDataPeserta')
	{
		cetakDataPeserta();
	}
	else if (report == 'cetakTandaTerimaAtk')
	{
		cetakTandaTerimaAtk();
	}
	else if (report == 'cetakTandaTerimaSertifikat')
	{
		cetakTandaTerimaSertifikat();
	}
	else if (report == 'cetakSertifikat')
	{
		if(printsertifikat == 0)
		{
			alert('Kaldik Belum Di ACC untuk cetak sertifikat');
		}
		else
		{
			$('#myModal11').modal('show');
		}
		
	}
	else if (report == 'cetakSertifikatKedinasan')
	{
		if(printsertifikat == 0)
		{
			alert('Kaldik Belum Di ACC untuk cetak sertifikat');
		}
		else
		{
			$('#myModal12').modal('show');
		}
		
	}
	else if (report == 'cetakPiagam')
	{
		cetakPiagam();
	}
	else if (report == 'cetakSertifikatMandiri')
	{	
		if(printsertifikat == 0)
		{
			alert('Kaldik Belum Di ACC untuk cetak sertifikat');
		}
		else
		{
			$('#myModal15').modal('show');
		}
		
	}
}

function cetakSertifikat()
{
	var uri = '';
	
	if(document.getElementById('rbSertifikatHalamanDepan').checked == true)
	{	
		uri = '<?php echo base_url() ?>cetaksertifikatdepan/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal11').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatHalamanBelakangJfa').checked == true)
	{
		uri = '<?php echo base_url() ?>cetaksertifikatbelakangjfa/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal11').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatHalamanBelakangP3kt').checked == true)
	{
		uri = '<?php echo base_url() ?>cetaksertifikatbelakangp3kt/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal11').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
}

function cetakSertifikatKedinasan()
{
	var uri = '';
	if(document.getElementById('rbSertifikatHalamanDepanKedinasan').checked == true)
	{	
		uri = '<?php echo base_url() ?>cetaksertifikatdepankedinasan/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal12').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatHalamanBelakangPIM3').checked == true)
	{
		uri = '<?php echo base_url() ?>cetaksertifikatbelakangkepemimpinan3/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal12').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatHalamanBelakangPIM4').checked == true)
	{
		uri = '<?php echo base_url() ?>cetaksertifikatbelakangkepemimpinan4/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal12').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatHalamanBelakangPrajab3').checked == true)
	{
		uri = '<?php echo base_url() ?>cetaksertifikatbelakangprajab/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal12').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
}


function cariDataPeserta()
{
	var pesertaNIP = document.getElementById('pesertaNIPCari').value;
	var pesertaNama = document.getElementById('pesertaNamaCari').value;
	var l = pesertaNIP.length;
	var lnama = pesertaNama.length;
	if(pesertaNIP == '' && pesertaNama == '')
	{
		alert('Isi Terlebih Dahulu NIP atau nama');
	}
	else if (l < 2 && pesertaNama == '')
	{
		alert('Isi minimal 2 karakter NIP Depan atau isi nama');
	}
	else if (l > 2 && pesertaNama == '')
	{
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function(){		
							$('#myModal').modal('show');
							var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilAllPesertaNIP/' + kaldiksesiid + '/'+kelasid + '/' + pesertaNIP;
							var j = 0;
							console.log(uri);
							$.ajax({
								type: 'get',
								url: uri,
								dataType: 'json',
								success: function (data) 
								{
									console.log(data);
									$('#example5').DataTable().clear();				
									i = 0;
									j = 1;
									str = '';
									while (i < data.length)
									{
										
										var rowIndex = $('#example5').DataTable().row.add([j, data[i].pesertaNIP, data[i].pesertaNama, data[i].unitName, '<input type="checkbox" id="cbpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="onCbChange(this.id);">']);
										var row = $('#example5').dataTable().fnGetNodes(rowIndex);
										$(row).attr('id', 'peserta;'+data[i].pesertaID);
										i++;
										j++;
									}
									$('#example5').DataTable().draw();
									$('#myModal').modal('hide');
									var $target = $('html,body'); 
									$target.animate({scrollTop: $target.height()}, 1000);
									//document.getElementById('FormTambahBiodataPeserta').style.display = 'block';
									document.getElementById('titleFormTambahPeserta').innerHTML = 'Tambah Peserta kelas : '+ kelasname + ' sesi : ' + kaldiksesidesc;					
								}
							});
					}, 300);
					//document.getElementById('FormTambahBiodataPeserta').className = 'pesanmuncul';
				}, 300);
				//document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
			}, 300);
			//document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
		}, 300);
	}
	else if (pesertaNIP == '' || pesertaNama != '')
	{
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function(){		
							$('#myModal').modal('show');
							var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilAllPesertaNama/' + kaldiksesiid + '/'+kelasid + '/?pesertanama='+pesertaNama;
							var j = 0;
							console.log(uri);
							$.ajax({
								type: 'get',
								url: uri,
								dataType: 'json',
								success: function (data) 
								{
									console.log(data);
									$('#example5').DataTable().clear();				
									i = 0;
									j = 1;
									str = '';
									while (i < data.length)
									{
										
										var rowIndex = $('#example5').DataTable().row.add([j, data[i].pesertaNIP, data[i].pesertaNama, data[i].unitName, '<input type="checkbox" id="cbpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="onCbChange(this.id);">']);
										var row = $('#example5').dataTable().fnGetNodes(rowIndex);
										$(row).attr('id', 'peserta;'+data[i].pesertaID);
										i++;
										j++;
									}
									$('#example5').DataTable().draw();
									$('#myModal').modal('hide');
									var $target = $('html,body'); 
									$target.animate({scrollTop: $target.height()}, 1000);
									//document.getElementById('FormTambahBiodataPeserta').style.display = 'block';
									document.getElementById('titleFormTambahPeserta').innerHTML = 'Tambah Peserta kelas : '+ kelasname + ' sesi : ' + kaldiksesidesc;					
								}
							});
					}, 300);
					//document.getElementById('FormTambahBiodataPeserta').className = 'pesanmuncul';
				}, 300);
				//document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
			}, 300);
			//document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
		}, 300);
	}
	else
	{
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function(){		
							$('#myModal').modal('show');
							var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilAllPesertaNIPNama/' + kaldiksesiid + '/'+kelasid + '/' + pesertaNIP + '/?pesertanama='+pesertaNama;
							var j = 0;
							console.log(uri);
							$.ajax({
								type: 'get',
								url: uri,
								dataType: 'json',
								success: function (data) 
								{
									console.log(data);
									$('#example5').DataTable().clear();				
									i = 0;
									j = 1;
									str = '';
									while (i < data.length)
									{
										
										var rowIndex = $('#example5').DataTable().row.add([j, data[i].pesertaNIP, data[i].pesertaNama, data[i].unitName, '<input type="checkbox" id="cbpeserta;'+data[i].pesertaID+';'+data[i].pesertaNIP+';'+data[i].pesertaNama+';'+data[i].unitName+'" onclick="onCbChange(this.id);">']);
										var row = $('#example5').dataTable().fnGetNodes(rowIndex);
										$(row).attr('id', 'peserta;'+data[i].pesertaID);
										i++;
										j++;
									}
									$('#example5').DataTable().draw();
									$('#myModal').modal('hide');
									var $target = $('html,body'); 
									$target.animate({scrollTop: $target.height()}, 1000);
									//document.getElementById('FormTambahBiodataPeserta').style.display = 'block';
									document.getElementById('titleFormTambahPeserta').innerHTML = 'Tambah Peserta kelas : '+ kelasname + ' sesi : ' + kaldiksesidesc;					
								}
							});
					}, 300);
					//document.getElementById('FormTambahBiodataPeserta').className = 'pesanmuncul';
				}, 300);
				//document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
			}, 300);
			//document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
		}, 300);	
	}
}


function changeDatePicker()
{
	
}

function gantiReport(val)
{
	if(val == 'cetakDataPeserta')
	{
		document.getElementById('btnEksportExcel').style.display = "block";
	}
	else
	{
		document.getElementById('btnEksportExcel').style.display = "none";
	}
}

function exportDataExcel()
{
	var uri = '<?php echo base_url() ?>pesertadiklat/exportToExcel/'+kaldiksesiid+'/'+kelasid;
	newTab(uri);
}

function eksportSertifikatKeWord()
{
	var uri = '';
	if(document.getElementById('rbSertifikatHalamanDepan').checked == true)
	{	
		uri = '<?php echo base_url() ?>pesertadiklat/eksportsertifikatdepan/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal11').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatHalamanBelakangJfa').checked == true)
	{
		uri = '<?php echo base_url() ?>pesertadiklat/eksportsertifikatbelakangjfa/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal11').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
}



function showModalPegawai(jenis)
{
	
	jenisPegawai = jenis;
	var uri = "";
	if(r == '3')
	{
			alert('Anda Tidak Memiliki Wewenang untuk assign pegawai piket / LO');
	}
	else
	{
		if (jenisPegawai == 'lo')
		{
			uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilAllPegawaiLO/' +kelasid;	
		}
		else 
		{
			uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilAllPegawaiPiket/' +kelasid;	
		}
		
		
		$('#myModal').modal('show');
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function()
					{		
							
							var j = 0;
							console.log(uri);
							$.ajax({
								type: 'get',
								url: uri,
								dataType: 'json',
								success: function (data) 
								{
									console.log(data);
									$('#example10').DataTable().clear();				
									i = 0;
									j = 1;
									str = '';
									while (i < data.length)
									{
										
										var rowIndex = $('#example10').DataTable().row.add([data[i].pegawaiNIP, data[i].pegawaiName, data[i].unitName]);
										var row = $('#example10').dataTable().fnGetNodes(rowIndex);
										$(row).attr('id', 'pegawai;'+data[i].pegawaiID+';'+data[i].pegawaiName);
										$(row).attr('style', 'cursor: pointer;background-color:#fff;')
										$(row).attr('onclick', 'pilihPegawai(this.id);');
										i++;
										j++;
									}
									$('#example10').DataTable().draw();
									
									//document.getElementById('FormTambahBiodataPeserta').style.display = 'block';
									//document.getElementById('titleFormTambahPeserta').innerHTML = 'Tambah Peserta kelas : '+ kelasname + ' sesi : ' + kaldiksesidesc;
									$('#myModal14').modal('show');					
								}	
							});
					}, 100);
					$('#myModal').modal('hide');
				}, 300);
			}, 300);	
		}, 300);
	}
	
	
}

function savePegawaiLO()
{
	if(r == '3')
	{
		
		alert('Anda Tidak Memiliki Wewenang Untuk Assign Pegawai LO');
	}
	else
	{
		if (pegawailo.length == 0)
		{
			alert('Pilih Dulu pegawai LO');
		}
		else
		{
			var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/updatepegawailo/'+kelasid+'/'+pegawailo[0].pegawaiid;
			$.ajax({
				type: 'get',
				url: uri,
				dataType: 'json',
				success: function (data) 
				{
					if(data.success != 1)
					{
						alert(data.message);
					}
					else
					{
						uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
						refreshPage(uri);
					}
					
				}
			});
		}
	}
	
}


function savePegawaiPiket()
{
	if(r == '3')
	{
		
			alert('Anda Tidak Memiliki Wewenang Untuk Assign Pegawai LO');
		
	}
	else
	{
		if (pegawaipiket.length == 0)
		{
			alert('Pilih Dulu pegawai LO');
		}
		else
		{
			var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/updatepegawaipiket/'+kelasid+'/'+pegawaipiket[0].pegawaiid;
			console.log(uri);
			$.ajax({
				type: 'get',
				url: uri,
				dataType: 'json',
				success: function (data) 
				{
					if(data.success != 1)
					{
						alert(data.message);
					}
					else
					{
						uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
						refreshPage(uri);
					}
					
				}
			});
		}	
	}
	
}


function inputNomorSertifikat()
{
	if(r == '3')
	{
		if(p != pegawailo[0].pegawaiid)
		{
			alert('Anda Bukan Pegawi LO untuk diklat tersebut');
		}
		else
		{
			$('#myModal13').modal('show');
		}
	}
	else
	{
		$('#myModal13').modal('show');
	}
	
}

function simpanNomorSertifikat()
{
	var nomorsertifikat;
	nomorsertifikat = document.getElementById('pesertaNomorSertifikat').value;
	var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/saveNomorSertifikat/'+kaldikid+'/'+ kaldiksesiid+'/'+kelasid+'/'+nomorsertifikat;
	
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
		{
			if(data.success != 1)
			{
				alert(data.message);
			}
			else
			{
				$('#myModal13').modal('hide');
				setTimeout(function() {
					uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
					refreshPage(uri);
				}, 800);
			}
			
		}
	});
	
}

function cetakSertifikatMandiri()
{
	var uri = '';
	if(document.getElementById('rbSertifikatMandiriDepan').checked == true)
	{	
		uri = '<?php echo base_url() ?>pesertadiklat/cetakmandiridepan/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal15').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatMandiriBelakang').checked == true)
	{
		uri = '<?php echo base_url() ?>pesertadiklat/cetakmandiribelakang/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal15').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatMandiriBelakang2Tabel').checked == true)
	{
		uri = '<?php echo base_url() ?>cetaksertifikatbelakangp3kt/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal15').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	//rbSertifikatMandiriBelakang2Tabel
}

function sertifikatLan(id)
{
	arrSplit = id.split(';');
	pdid = arrSplit[1];
	var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/ambilPesertaID/'+pdid;
	
	if(r == '3')
	{
		if(p != pegawailo[0].pegawaiid)
		{
			alert('Anda Bukan Pegawi LO untuk diklat tersebut');
		}
		else
		{
			$.ajax({
				type: 'get',
				url: uri,
				dataType: 'json',
				success: function (data) 
				{
					console.log(data);
					document.getElementById('nomorSertifikatLan').value = data[0].nomorSertifikatLan;
					document.getElementById('angkatan').value = data[0].angkatan;
					document.getElementById('peringkat').value = data[0].peringkat;
					if(data[0].kualifikasiID != '')
					{
						document.getElementById('selectKualifikasi').value = data[0].kualifikasiID;
					}
					$('#myModal16').modal('show');
				}
			});
		}
	}
	else
	{
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				console.log(data);
				document.getElementById('nomorSertifikatLan').value = data[0].nomorSertifikatLan;
				document.getElementById('angkatan').value = data[0].angkatan;
				document.getElementById('peringkat').value = data[0].peringkat;
				if(data[0].kualifikasiID != '')
				{
					document.getElementById('selectKualifikasi').value = data[0].kualifikasiID;
				}
				$('#myModal16').modal('show');
			}
		});
	}
	
}

function simpanSertifikatLan()
{
	var nomorsertifikatlan, angkatan, peringkat, kualifikasi;
	kualifikasi = document.getElementById('selectKualifikasi').value;
	angkatan = document.getElementById('angkatan').value;
	peringkat = document.getElementById('peringkat').value;
	nomorsertifikatlan = document.getElementById('nomorSertifikatLan').value;
	
	var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/simpansertifikatlan/'+pdid+'/?nomorsertifikatlan='+nomorsertifikatlan+'&kualifikasi='+kualifikasi+'&angkatan='+angkatan+'&peringkat='+peringkat;
	console.log(uri);
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
		{
			if(data.success != 1)
			{
				alert(data.message);
			}
			else
			{
				$('#myModal16').modal('hide');
				setTimeout(function() {
					uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
					refreshPage(uri);
				}, 800);
			}
		}
	});
}

function ubahPeserta(id)
{
	arrSplit = id.split(';');
	biodatapesertaid = arrSplit[1];
	pesertanip = arrSplit[2];
	pesertanama = arrSplit[3];
	pesertadegreefirst = arrSplit[4];
	pesertadegreelast = arrSplit[5];
	pesertapob = arrSplit[6];
	pesertadob = arrSplit[7];
	pesertagender = arrSplit[8];
	religionid = arrSplit[9];
	unitid = arrSplit[11];
	unitname = arrSplit[12];
	pesertaketunitkerja = arrSplit[13];
	pangkatid = arrSplit[14];
	pangkatname = arrSplit[15];
	pesertaketpangkat = arrSplit[16];
	jabatangroupid = arrSplit[17];
	jabatangroupfullname = arrSplit[18];
	jabatanid = arrSplit[19];
	jabatanfullname = arrSplit[20];
	pesertaketjabatan = arrSplit[21];
	pesertaalamat = arrSplit[22];
	pesertaalamatkantor = arrSplit[23];
	pesertatelepon = arrSplit[24];
	pesertateleponkantor = arrSplit[25];
	pesertaemail = arrSplit[26];
	pesertakodepos = arrSplit[27];
	pesertanrp = arrSplit[28];

	if (pesertanrp == '1')
	{
		document.getElementById('rbNRP').checked = true;
	}
	else
	{
		document.getElementById('rbNIP').checked = true;
	}
	
	if (unit.length > 0)
	{
		unit.pop();
	}
	unit.push({'unitid':unitid, 'unitname':unitname});
	if(pangkat.length > 0)
	{
		pangkat.pop();
	}
	pangkat.push({'pangkatid':pangkatid, 'pangkatname':pangkatname});
	if (jabatangroup.length > 0)
	{
		jabatangroup.pop();
	}
	jabatangroup.push({'jabatangroupid':jabatangroupid, 'jabatangroupfullname':jabatangroupfullname});
	if(jabatan.length > 0)
	{
		jabatan.pop();
	}
	jabatan.push({'jabatanid':jabatanid, 'jabatanfullname':jabatanfullname});
	document.getElementById('pesertaNIP').value = pesertanip;
	document.getElementById('pesertaNama').value = pesertanama;
	document.getElementById('pesertaDegreeFirst').value = pesertadegreefirst;
	document.getElementById('pesertaDegreeLast').value = pesertadegreelast;
	document.getElementById('pesertaKarPeg').value = pesertakarpeg;
	document.getElementById('pesertaPOB').value = pesertapob;
	document.getElementById('pesertaDOB').value = pesertadob;
	document.getElementById('pesertaGender').value = pesertagender;
	document.getElementById('pesertaAlamat').value = pesertaalamat;
	document.getElementById('pesertaAlamatKantor').value = pesertaalamatkantor;
	document.getElementById('pesertaTelepon').value = pesertatelepon;
	document.getElementById('pesertaTeleponKantor').value = pesertateleponkantor;
	document.getElementById('pesertaKodePos').value = pesertakodepos;
	document.getElementById('pesertaEmail').value = pesertaemail;
	document.getElementById('pesertaKetUnitKerja').value = pesertaketunitkerja;
	document.getElementById('pesertaKetJabatan').value = pesertaketjabatan;
	document.getElementById('pesertaKetPangkat').value = pesertaketpangkat;
	document.getElementById('pesertaAgama').value = religionid;
	document.getElementById('unitNameForm').value = unitname;
	document.getElementById('pangkatName').value = pangkatname;
	document.getElementById('jabatanFullName').value = jabatanfullname;


	if(r == '3')
	{
		if(p != pegawailo[0].pegawaiid)
		{
			alert('Anda Bukan Pegawi LO untuk diklat tersebut');
		}
		else
		{
			$('#myModal').modal('show');
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function(){
						setTimeout(function(){
							
									$('#myModal').modal('hide');
									var $target = $('html,body'); 
									$target.animate({scrollTop: $target.height()}, 1000);
									document.getElementById('FormTambahBiodataPeserta').style.display = 'block';
									document.getElementById('titleFormTambahBiodataPeserta').innerHTML = 'Form Ubah Biodata Peserta';
									document.getElementById('footerFormPeserta').innerHTML = '<button type="button" class="btn btn-warning btn-lg btn-block" onclick="ubahBiodataPeserta();"><i class="fa fa-pencil"></i> Ubah Biodata Peserta</button>';
									
						}, 300);
						document.getElementById('FormTambahBiodataPeserta').className = 'pesanmuncul';
					}, 300);
					document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
				}, 300);
				document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
			}, 300);
		}
	}
	else
	{
		$('#myModal').modal('show');
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					setTimeout(function(){
						
								$('#myModal').modal('hide');
								var $target = $('html,body'); 
								$target.animate({scrollTop: $target.height()}, 1000);
								document.getElementById('FormTambahBiodataPeserta').style.display = 'block';
								document.getElementById('titleFormTambahBiodataPeserta').innerHTML = 'Form Ubah Biodata Peserta';
								document.getElementById('footerFormPeserta').innerHTML = '<button type="button" class="btn btn-warning btn-lg btn-block" onclick="ubahBiodataPeserta();"><i class="fa fa-pencil"></i> Ubah Biodata Peserta</button>';
								
					}, 300);
					document.getElementById('FormTambahBiodataPeserta').className = 'pesanmuncul';
				}, 300);
				document.getElementById('FormTambahBiodataPeserta').style.display = 'none';
			}, 300);
			document.getElementById('FormTambahBiodataPeserta').className = 'pesanhilang';
		}, 300);
	}
	
}

function ubahBiodataPeserta()
{
	pesertanip = document.getElementById('pesertaNIP').value;
	pesertanama = document.getElementById('pesertaNama').value;
	pesertadegreefirst = document.getElementById('pesertaDegreeFirst').value;
	pesertadegreelast = document.getElementById('pesertaDegreeLast').value;
	pesertakarpeg = document.getElementById('pesertaKarPeg').value;
	pesertapob = document.getElementById('pesertaPOB').value;
	pesertadob = document.getElementById('pesertaDOB').value;
	pesertagender = document.getElementById('pesertaGender').value;
	pesertaalamat = document.getElementById('pesertaAlamat').value;
	pesertaalamatkantor = document.getElementById('pesertaAlamatKantor').value;
	pesertatelepon = document.getElementById('pesertaTelepon').value;
	pesertateleponkantor = document.getElementById('pesertaTeleponKantor').value;
	pesertakodepos = document.getElementById('pesertaKodePos').value;
	pesertaemail = document.getElementById('pesertaEmail').value;
	pesertaketunitkerja = document.getElementById('pesertaKetUnitKerja').value;
	pesertaketjabatan = document.getElementById('pesertaKetJabatan').value;
	pesertaketpangkat = document.getElementById('pesertaKetPangkat').value;

	if(document.getElementById('pesertaNIP').checked == true)
	{
		pesertanrp = '0';
	}
	else
	{
		pesertanrp = '1';
	}
	
	if (pesertanama == '')
	{
		alert('anda belum mengisi nama peserta');
	}
	else
	{
		religionid = document.getElementById('pesertaAgama').value;
		if(pangkat.length == 0)
		{
			pangkatid = '';
		}
		else
		{
			pangkatid = pangkat[0].pangkatid;
		}

		if(jabatan.length == 0)
		{
			jabatanid = '';
		}
		else
		{
			jabatanid = jabatan[0].jabatanid;
		}


		if (unit.length == 0)
		{
			unitid = 0;
		}
		else
		{
			unitid = unit[0].unitid;
		}
		/*
		if(jabatangroup.length == 0)
		{
			jabatangroupid = '';
		}
		else
		{
			jabatangroupid = jabatangroup[0].jabatangroupid;
		}
		*/

		jabatangroupid = document.getElementById('pesertaJabatanGroup').value;
		var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/updatebiodatapeserta/?religionid='+religionid+'&pangkatid='+pangkatid+'&jabatanid='+jabatanid+'&jabatangroupid='+jabatangroupid+'&unitid='+unitid+'&pesertanip='+pesertanip+'&pesertanama='+pesertanama+'&pesertadegreefirst='+pesertadegreefirst+'&pesertadegreelast='+pesertadegreelast+'&pesertakarpeg='+pesertakarpeg+'&pesertapob='+pesertapob+'&pesertadob='+pesertadob+'&pesertagender='+pesertagender+'&pesertaalamat='+pesertaalamat+'&pesertaalamatkantor='+pesertaalamatkantor+'&pesertatelepon='+pesertatelepon+'&pesertateleponkantor='+pesertateleponkantor+'&pesertakodepos='+pesertakodepos+'&pesertaemail='+pesertaemail+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&pesertaketunitkerja='+pesertaketunitkerja+'&pesertaketjabatan='+pesertaketjabatan+'&pesertaketpangkat='+pesertaketpangkat+'&pesertaid='+biodatapesertaid+'&pesertanrp='+pesertanrp;
		console.log(uri);
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if(data.message != '')
				{
					alert(data.message);
				}
				else
				{
					uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
					refreshPage(uri);
				}
				
			}
		});	
	}	
}

function accSertifikat(id)
{
	arrSplit = id.split(';');
	kaldikid = arrSplit[0];
	kaldikdesc = arrSplit[1];
	printsertifikat = arrSplit[2];
	if(r == '1' || r == '5')
	{
		$('#myModal17').modal('show');
	}
	else
	{
		alert('Anda Tidak Memiliki Wewenang untuk lock / unlock sertifikat');
	}
	
}

function accKaldikConfirm()
{
	var ptsertifikat;
	if(printsertifikat == '1')
	{
		ptsertifikat = '0';
	}
	else
	{
		ptsertifikat = '1';
	}
	var uri = '<?php echo base_url(); ?>' + 'pesertadiklat/updatekaldik/'+kaldikid+'/'+ptsertifikat;
	console.log(uri);
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
		{
			if(data.success != 1)
			{
				alert(data.message);
			}
			else
			{
				$('#myModal17').modal('hide');
				setTimeout(function() {
					uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
					refreshPage(uri);
				}, 800);
			}
			
		}
	});
}

function inputSertifikatMandiri()
{
	document.getElementById('jabatanMandiri').value = jabatanmandiri;
	document.getElementById('unitMandiri').value = unitmandiri;
	document.getElementById('daerahMandiri').value = daerahmandiri;
	document.getElementById('namaMandiri').value = namamandiri;
	document.getElementById('nipMandiri').value = nipmandiri;
	if(filenamemandiri != '')
	{
		document.getElementById('LogoMandiri').src = '<?php echo base_url(); ?>assets/imgupload/' + filenamemandiri;
	}
	//document.getElementById('filenameMandiri').value = filenamemandiri;
	if(r == '3')
	{
		if(p != pegawailo[0].pegawaiid)
		{
			alert('Anda Bukan Pegawi LO untuk diklat tersebut');
		}
		else
		{
			$('#myModal18').modal('show');
		}
	}
	else
	{
		$('#myModal18').modal('show');
	}
	
	
}

function updateSertifikatMandiri()
{
	var uri;
	jabatanmandiri = document.getElementById('jabatanMandiri').value;
	unitmandiri = document.getElementById('unitMandiri').value;
	daerahmandiri = document.getElementById('daerahMandiri').value;
	namamandiri = document.getElementById('namaMandiri').value;
	nipmandiri = document.getElementById('nipMandiri').value;
	
	filemandiri = $("#fileMandiri").prop("files")[0]; 
	var form_data = new FormData();
	form_data.append("fileMandiri", filemandiri);
	form_data.append("jabatanMandiri", jabatanmandiri);
	form_data.append("unitMandiri", unitmandiri);
	form_data.append("daerahMandiri", daerahmandiri);
	form_data.append("namaMandiri", namamandiri);
	form_data.append("nipMandiri", nipmandiri);
	
	uri = '<?php echo base_url();?>pesertadiklat/uploadSertifikatMandiri/'+kaldikid+'/';
	
	$.ajax({
		contentType:false,
        type: "POST",
        cache: false,
        dataType: "json",
        data: form_data,
        processData: false,
        crossOrigin:true,
        success: function (data) 
		{
        	if(data.success != 1)
			{
				alert(data.message);
			}
			else
			{
				$('#myModal18').modal('hide');
				setTimeout(function() {
					uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
					refreshPage(uri);
				}, 800);
			}	
		}
	});
}

$(document).ready(function (e){
	$("#uploadimage").on('submit',(function(e){
		e.preventDefault();
		var uri = '<?php echo base_url();?>pesertadiklat/uploadSertifikatMandiri/'+kaldikid+'/';
		
		$.ajax({
			url: uri,
			type: "POST",
			data:  new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data)
			{
				
				if(data.success != 'success')
				{
					$('#myModal18').modal('hide');
					setTimeout(function() {
						uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
						refreshPage(uri);
					}, 800);
				}
				else
				{
					$('#myModal18').modal('hide');
					setTimeout(function() {
						uri = '<?php echo base_url();?>pesertadiklat?month=<?php echo $thisMonth; ?>&year=<?php echo $thisYear; ?>&kaldikid='+kaldikid+'&kaldiksesiid='+kaldiksesiid+'&kelasid='+kelasid+'&kaldikname='+kaldiksesidesc;
						refreshPage(uri);
					}, 800);
				}
			} 	        
		});
	}));
});

function eksportSertifikatMandiriKeWord()
{
	var uri = '';
	if(document.getElementById('rbSertifikatMandiriDepan').checked == true)
	{	
		uri = '<?php echo base_url() ?>pesertadiklat/eksportsertifikatmandiridepan/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatMandiriBelakang').checked == true)
	{
		uri = '<?php echo base_url() ?>pesertadiklat/eksportsertifikatmandiribelakang/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
}

function eksportSertifikatKedinasanKeWord()
{
	var uri = '';
	if(document.getElementById('rbSertifikatHalamanDepanKedinasan').checked == true)
	{	
		uri = '<?php echo base_url() ?>pesertadiklat/eksportsertifikatdepankedinasan/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal12').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatHalamanBelakangPIM3').checked == true)
	{
		uri = '<?php echo base_url() ?>pesertadiklat/eksportsertifikatbelakangkepemimpinan3/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal12').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatHalamanBelakangPIM4').checked == true)
	{
		uri = '<?php echo base_url() ?>pesertadiklat/eksportsertifikatbelakangkepemimpinan4/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal12').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
	else if (document.getElementById('rbSertifikatHalamanBelakangPrajab3').checked == true)
	{
		uri = '<?php echo base_url() ?>pesertadiklat/eksportsertifikatbelakangprajab/?kaldikid='+kaldikid+'&kelasid='+kelasid+'&kaldiksesiid='+kaldiksesiid+'&pesertaid='+JSON.stringify(cetaknametable);
		$('#myModal12').modal('hide');
		setTimeout(function() {
			newTab(uri);
		}, 400);
	}
}
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel" style="text-align:center;">Loading Mohon Tunggu Sebentar</h4>
      </div>
      <div class="modal-body" style="text-align:center;">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
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

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabelPeserta">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabelPeserta"></h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>NIP</th>
					  <th>Nama</th>
					  <th>Unit Name</th>
					</tr>
					
					</thead>
					<tbody id="bodyTablePesertaSave">
						
					</tbody>
					<tfoot>
					
					</tfoot>
					</table>						
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="simpanPesertaKeTable();"><i class="fa fa-save"></i> Simpan Ke Table</button>
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
				<h4 class="modal-title" id="myModalLabel">Konfirmasi Hapus Data Peserta</h4>
			</div>
			<div class="modal-body">
				<label>Apakah Anda Yakin Akan Menghapus Data Peserta</label><br>
				<label id="lblPesertaNIP"></label><br>
				<label id="lblPesertaNama"></label><br>
				<label id="lblUnitName"></label><br>
				?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusPesertaConfirm();"><i class="fa fa-close"></i> Hapus Peserta</button>
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
				<h4 class="modal-title" id="myModalLabel">Pilih Unit</h4>
			</div>
			<div class="modal-body">
				<table id="example6" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Unit Name</th>
					</tr>
					
					</thead>
					<tbody>
						<?php 
						if($units)
						{
							foreach ($units as $unit)
							{
								?>
								<tr id="<?php echo $unit->unitID;?>;<?php echo $unit->unitName;?>" style="cursor: pointer;" onclick="pilihUnit(this.id);">
									<td><?php echo $unit->unitName;?></td>
								</tr>
								<?php
							}
						}
						?>
					</tbody>
					<tfoot>
					
					</tfoot>
				</table>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnPilihUnit" onclick="pilihUnitOk();"> Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Pilih Pangkat</h4>
			</div>
			<div class="modal-body">
				<table id="example7" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Pangkat Name</th>
					  <th>Golongan Pangkat</th>
					</tr>
					
					</thead>
					<tbody>
						<?php 
						if($pangkats)
						{
							foreach ($pangkats as $pangkat)
							{
								?>
								<tr id="<?php echo $pangkat->pangkatID;?>;<?php echo $pangkat->pangkatName;?>" style="cursor: pointer;" onclick="pilihPangkat(this.id);">
									<td><?php echo $pangkat->pangkatName;?></td>
									<td><?php echo $pangkat->GolPangkat;?></td>
								
								</tr>
								<?php
							}
						}
						?>
					</tbody>
					<tfoot>
					
					</tfoot>
				</table>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnPilihPangkat" onclick="pilihPangkatOk();"> Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Pilih Jabatan</h4>
			</div>
			<div class="modal-body">
				<table id="example8" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Jabatan Name</th>
					</tr>
					
					</thead>
					<tbody>
						<?php 
						if($jabatans)
						{
							foreach ($jabatans as $jabatan)
							{
								?>
								<tr id="<?php echo $jabatan->jabatanID;?>;<?php echo $jabatan->jabatanFullName;?>" style="cursor: pointer;" onclick="pilihJabatan(this.id);">
									<td><?php echo $jabatan->jabatanFullName;?></td>
								</tr>
								<?php
							}
						}
						?>
					</tbody>
					<tfoot>
					
					</tfoot>
				</table>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnPilihJabatan" onclick="pilihJabatanOk();"> Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Pilih Jabatan</h4>
			</div>
			<div class="modal-body">
				<table id="example9" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Jabatan Group Name</th>
					</tr>
					
					</thead>
					<tbody>
						<?php 
						if($jabatanGroups)
						{
							foreach ($jabatanGroups as $jabatanGroup)
							{
								?>
								<tr id="<?php echo $jabatanGroup->jabatanGroupID;?>;<?php echo $jabatanGroup->jabatanGroupFullName;?>" style="cursor: pointer;" onclick="pilihJabatanGroup(this.id);">
									<td><?php echo $jabatanGroup->jabatanGroupFullName;?></td>
								</tr>
								<?php
							}
						}
						?>
					</tbody>
					<tfoot>
					
					</tfoot>
				</table>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnPilihJabatanGroup" onclick="pilihJabatanGroupOk();"> Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Pilih Jenis Name Tag</h4>
			</div>
			<div class="modal-body">
				<div class="radio">
				  <label><input type="radio" name="optradio" id="rbBackground" checked="true">Dengan Background</label>
				</div>
				<div class="radio">
				  <label><input type="radio" name="optradio" id="rbNoBackground">Tanpa Background</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnPilihJabatanGroup" onclick="viewNameTag();"> Cetak Name Tag</button>
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
				<h4 class="modal-title" id="myModalLabel">Pilih Jenis Sertifikat</h4>
			</div>
			<div class="modal-body">
				<div class="radio">
				  <label><input type="radio" name="optradio" id="rbSertifikatHalamanDepan" checked="true">Halaman Depan</label>
				</div>
				<div class="radio">
				  <label><input type="radio" name="optradio" id="rbSertifikatHalamanBelakangJfa">Halaman Belakang</label>
				</div>
				<div class="radio">
				  <label><input type="radio" name="optradio" id="rbSertifikatHalamanBelakangP3kt">Halaman Belakang 2 tabel</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="cetakSertifikat();"> Cetak Sertifikat</button>
				<button type="button" class="btn btn-primary" onclick="eksportSertifikatKeWord();"> Eksport Ke WORD</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Pilih Jenis Sertifikat</h4>
			</div>
			<div class="modal-body">
				<div class="radio">
				  <label><input type="radio" name="optradio" id="rbSertifikatHalamanDepanKedinasan" checked>Halaman Depan</label>
				</div>
				<div class="radio">
				  <label><input type="radio" name="optradio" id="rbSertifikatHalamanBelakangPIM3">Halaman Belakang PIM III</label>
				</div>
				<div class="radio">
				  <label><input type="radio" name="optradio" id="rbSertifikatHalamanBelakangPIM4">Halaman Belakang PIM IV</label>
				</div>
				<div class="radio">
				  <label><input type="radio" name="optradio" id="rbSertifikatHalamanBelakangPrajab3">Halaman Belakang Prajab Gol 3</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="cetakSertifikatKedinasan();"> Cetak Sertifikat</button>
				<button type="button" class="btn btn-primary" onclick="eksportSertifikatKedinasanKeWord();"> Eksport Ke WORD</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Input Nomor Sertifikat</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
                    <label>Nomor Sertifikat (Input Hanya Nomor Sertifikat Peserta Pertama)</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="pesertaNomorSertifikat" id="pesertaNomorSertifikat">
               	</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="simpanNomorSertifikat();"> Simpan Nomor Sertifikat</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabelPegawai">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabelPegawai">Pilih Pegawai Piket / LO</h4>
			</div>
			<div class="modal-body">
				<table id="example10" class="table table-bordered table-hover">
					<thead>
						<tr>
						  <th>NIP</th>
						  <th>Nama</th>
						  <th>Unit Name</th>
						</tr>
					</thead>
					<tbody id="bodyTablePegawai">
						
					</tbody>
				</table>						
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" id="btnPilihPegawai" onclick="pilihPegawaiOk();" disabled><i class="fa fa-check"></i> Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Pilih Jenis Sertifikat</h4>
			</div>
			<div class="modal-body">
				<div class="radio">
				  <label><input type="radio" name="optradio1" id="rbSertifikatMandiriDepan" checked>Halaman Depan</label>
				</div>
				<div class="radio">
				  <label><input type="radio" name="optradio1" id="rbSertifikatMandiriBelakang">Halaman Belakang</label>
				</div>
				<div class="radio">
				  <label><input type="radio" name="optradio1" id="rbSertifikatMandiriBelakang2Tabel">Halaman Belakang 2 Tabel</label>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="cetakSertifikatMandiri();"> Cetak Sertifikat</button>
				<button type="button" class="btn btn-primary" onclick="eksportSertifikatMandiriKeWord();"> Eksport Ke WORD</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Input Sertifikat LAN</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Nomor Sertifikat LAN</label>
					<input class="form-control" type="text" name="nomorSertifikatLan" id="nomorSertifikatLan">
				</div>
				
				<div class="form-group">
					<label>Angkatan</label>
					<input class="form-control" type="text" name="angkatan" id="angkatan">
				</div>
				<div class="form-group">
					<label>Kualifikasi</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					<select class="form-control" id="selectKualifikasi">
						<?php 
						if ($kualifikasis)
						{
							foreach ($kualifikasis as $kualifikasi)
							{
								?>
								<option value="<?php echo $kualifikasi->kualifikasiID;?>"><?php echo $kualifikasi->kualifikasiName;?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
				
				<div class="form-group">
					<label>Peringkat</label>
					<input class="form-control" type="number" name="peringkat" id="peringkat">
				</div>
				
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="simpanSertifikatLan();"> Simpan Sertifikat</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Kunci / Buka Kunci KALDIK untuk membuat Sertifikat</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Akan Melakukan proses locking / unlocking kaldik ?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" onclick="accKaldikConfirm();"> Ya</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Input Sertifikat Mandiri</h4>
			</div>
			<div class="modal-body">
				<form id="uploadimage" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Jabatan Untuk Sertifikat Mandiri</label>
					<input class="form-control" type="text" name="jabatanMandiri" id="jabatanMandiri">
				</div>
				<div class="form-group" style="display:none;">
					<label>Unit Kerja Untuk Sertifikat Mandiri</label>
					<input class="form-control" type="text" name="unitMandiri" id="unitMandiri">
				</div>
				<div class="form-group" style="display:none;">
					<label>Daerah Untuk Sertifikat Mandiri</label>
					<input class="form-control" type="text" name="daerahMandiri" id="daerahMandiri">
				</div>
				<div class="form-group">
					<label>Nama Untuk Sertifikat Mandiri</label>
					<input class="form-control" type="text" name="namaMandiri" id="namaMandiri">
				</div>
				<div class="form-group">
					<label>NIP Untuk Sertifikat Mandiri</label>
					<input class="form-control" type="text" name="nipMandiri" id="nipMandiri">
				</div>
				<div class="form-group">
					<img src="" alt="Logo Mandiri" id="LogoMandiri">
				</div>
				<div class="form-group">
					<label>File Untuk Sertifikat Mandiri</label>
					<input class="form-control" type="file" name="fileMandiri" id="fileMandiri" accept="image/*">
				</div>
				<input type="submit" class="btn btn-primary" value="upload">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</form>
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
</div>


<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
		<h3>
			PESERTA DIKLAT
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active"><a onclick="refreshPage('<?php echo base_url(); ?>pesertadiklat');" style="cursor:pointer;"><i class="fa fa-calendar"></i> Kaldik</a></li>
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
				
				<!-- <label>Sumber Biaya</label>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="biayaName" id="biayaName">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i></button></span>
                </div>
				
				<label>Lokasi</label>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="lokasiName" id="lokasiName">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search"></i></button></span>
                </div> -->
						
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
					  <td style="width:100px!important;">Tanggal Mulai</td>
					  <td style="width:100px!important;">Tanggal Selesai</td>
					  <td style="width:50px!important;">Jumlah Kelas</td>
					  <td style="width:50px!important;">Lihat Peserta</td>
					  <td style="width:50px!important;">Acc Cetak Sertifikat</td>
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
								
								
								if($kaldik->printSertifikat == 0)
								{
									?>
									<tr style="background-color: #E57373;">
									<td><?php echo $h; ?></td>
									<td><?php echo substr($kaldik->kaldikID, 4); ?> - <?php echo $kaldik->kaldikDesc; ?>
									</td>	
									<td><?php echo $kaldik->diklatLocName; ?>
									</td>
									<td><?php echo $kaldik->startDateFull; ?>
									</td>
									<td><?php echo $kaldik->endDateFull; ?>
									</td>
									<td><?php echo $kaldik->kelas; ?></td>
									<td><button class="btn btn-primary" id="<?php echo $kaldik->kaldikID; ?>;<?php echo $kaldik->kaldikDesc; ?>;<?php echo $kaldik->printSertifikat; ?>;<?php echo $kaldik->jabatanMandiri?>;<?php echo $kaldik->unitMandiri?>;<?php echo $kaldik->daerahMandiri?>;<?php echo $kaldik->namaMandiri?>;<?php echo $kaldik->nipMandiri?>;<?php echo $kaldik->filenameMandiri;?>" onclick="viewKaldik(this.id);"><i class="fa fa-table"></i></button></td>
									<?php 
									if($kaldik->printSertifikat == 1)
									{
										?>
										<td><button class="btn btn-primary" id="<?php echo $kaldik->kaldikID; ?>;<?php echo $kaldik->kaldikDesc; ?>;<?php echo $kaldik->printSertifikat;?>" onclick="accSertifikat(this.id);"><i class="fa fa-unlock"></i></button></td>
										<?php
									}
									else 
									{
										?>
										<td><button class="btn btn-primary" id="<?php echo $kaldik->kaldikID; ?>;<?php echo $kaldik->kaldikDesc; ?>;<?php echo $kaldik->printSertifikat;?>" onclick="accSertifikat(this.id);"><i class="fa fa-lock"></i></button></td>
										<?php
									}
									?>
									</tr>
									<?php
								}
								else
								{
									?>
									<tr style="background-color: #26A69A;">
									<td><?php echo $h; ?></td>
									<td><?php echo substr($kaldik->kaldikID, 4); ?> - <?php echo $kaldik->kaldikDesc; ?></td>										
									<td><?php echo $kaldik->diklatLocName; ?></td>
									<td><?php echo $kaldik->startDateFull; ?>
									</td>
									<td><?php echo $kaldik->endDateFull; ?>
									</td>
									<td><?php echo $kaldik->kelas; ?></td>
									<td><button class="btn btn-primary" id="<?php echo $kaldik->kaldikID; ?>;<?php echo $kaldik->kaldikDesc; ?>;<?php echo $kaldik->printSertifikat; ?>;<?php echo $kaldik->jabatanMandiri?>;<?php echo $kaldik->unitMandiri?>;<?php echo $kaldik->daerahMandiri?>;<?php echo $kaldik->namaMandiri?>;<?php echo $kaldik->nipMandiri?>;<?php echo $kaldik->filenameMandiri;?>" onclick="viewKaldik(this.id);"><i class="fa fa-table"></i></button></td>
									<?php 
									if($kaldik->printSertifikat == 1)
									{
										?>
										<td><button class="btn btn-primary" id="<?php echo $kaldik->kaldikID; ?>;<?php echo $kaldik->kaldikDesc; ?>;<?php echo $kaldik->printSertifikat;?>" onclick="accSertifikat(this.id);"><i class="fa fa-unlock"></i></button></td>
										<?php
									}
									else 
									{
										?>
										<td><button class="btn btn-primary" id="<?php echo $kaldik->kaldikID; ?>;<?php echo $kaldik->kaldikDesc; ?>;<?php echo $kaldik->printSertifikat;?>" onclick="accSertifikat(this.id);"><i class="fa fa-lock"></i></button></td>
										<?php
									}
									?>
									</tr>
									<?php
								}
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
	  
     <div id="TablePeserta" style="display: none;">
     <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleTablePeserta"></h3>

              <div class="box-tools pull-right">
              
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahPeserta();">
                  <i class="fa fa-plus"></i> Tambah Peserta</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="inputNomorSertifikat();">
                  <i class="fa fa-plus"></i> Input No Sertifikat</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;display:none;" id="btnEksportExcel" onclick="exportDataExcel();">
                  <i class="fa fa-table"></i> Export Ke Excel</button>
                  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="inputSertifikatMandiri();">
                  <i class="fa fa-table"></i> Sertifikat Mandiri</button>
              </div>
              
            </div>
            <div class="box-body">
            	<div class="form-group">
            	  <label>Pilih Report</label>
                  <select class="form-control" id="selectReport" onchange="gantiReport(this.value);">
                  	<option value="cetakAbsensi">Cetak Daftar Hadir</option>
                  	<option value="cetakNameTag">Cetak Name Tag</option>
                  	<option value="cetakNameTable">Cetak Name Table</option>
                  	<option value="cetakCekListPeserta">Cetak Cek List Peserta</option>
                  	<option value="cetakDataPeserta">Cetak Data Peserta</option>
                  	<option value="cetakTandaTerimaAtk">Cetak Tanda Terima ATK</option>
                  	<option value="cetakTandaTerimaSertifikat">Cetak Tanda Terima Sertifikat</option>
                  	<option value="cetakSertifikat">Cetak Sertifikat</option>
                  	<option value="cetakSertifikatMandiri">Cetak Sertifikat Mandiri</option>
                  	<option value="cetakSertifikatKedinasan">Cetak Sertifikat Kedinasan</option>
                  	<option value="cetakPiagam">Cetak Piagam Penghargaan</option>
                  </select>
                 
                  
                  <!-- <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;" onclick="cetakAbsensi();">
                  <i class="fa fa-print"></i> Cetak Absensi</button>
                  <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;" onclick="cetakNameTag();">
                  <i class="fa fa-print"></i> Cetak Name Tag</button>
                  <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;" onclick="viewNameTable();">
                  <i class="fa fa-print"></i> Cetak Name Table</button>
                  <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;" onclick="cetakCekListPeserta();">
                  <i class="fa fa-print"></i> Cetak Cek List Peserta</button>
                  <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;" onclick="cetakDataPeserta();">
                  <i class="fa fa-print"></i> Cetak Data Peserta Diklat</button>
                  <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;" onclick="cetakTandaTerimaAtk();">
                  <i class="fa fa-print"></i> Cetak Tanda Terima ATK</button>
                  <button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;" onclick="cetakTandaTerimaSertifikat();">
                  <i class="fa fa-print"></i> Cetak Tanda Terima Sertifikat</button> -->
            	</div>
            	
            	<button type="button" class="btn btn-primary btn-sm" style="margin-right: 5px;" onclick="cetakReportSelect();">
                <i class="fa fa-print"></i> Cetak</button>
                
           		<div class="col-xs-12">&nbsp</div>
           		
           		<div class="col-xs-6" style="padding:0 10px 0 0;">
	           		<div class="form-group">
					<label>Kelas</label>
						<select class="form-control" id="kelas" onchange="loadKelasChange(this.value);"></select>
					</div>
				</div>
				
				<div class="col-xs-6" style="padding:0 0 0 10px;">
	           		<div class="form-group">
						<label>Sesi</label>
							<select class="form-control" id="sesi" onchange="loadSesiChange(this.value);"></select>
					</div>
				</div>
				
				<div class="form-group col-xs-6" style="padding:0 10px 0 0;">
               		<label>Petugas LO</label>
					<div class="form-group input-group">
                     	<input class="form-control" type="text" name="pegawaiLoName" id="pegawaiLoName" readonly="true">
						<span class="input-group-btn"><button class="btn btn-primary"  type="button" onclick="showModalPegawai('lo');"><i class="fa fa-search"></i></button></span>
                	</div>
                	<button type="button" class="btn btn-primary btn-sm" onclick="savePegawaiLO();">
                  	<i class="fa fa-save"></i> Simpan Pegawai LO</button>
               	</div>
				
				<div class="form-group col-xs-6" style="padding:0 0 0 10px;">
               	  <label>Petugas Piket</label>
				  <div class="form-group input-group">
                        <input class="form-control" type="text" name="pegawaiPiketName" id="pegawaiPiketName" readonly="true">
						<span class="input-group-btn"><button class="btn btn-primary"  type="button" onclick="showModalPegawai('piket');"><i class="fa fa-search"></i></button></span>
                  </div>
                  <button type="button" class="btn btn-primary btn-sm" onclick="savePegawaiPiket();">
                  <i class="fa fa-save"></i> Simpan Pegawai Piket</button>
                </div>
            	
				<table id="example4" class="table table-bordered" cellspacing="0">
					<thead>
					<tr>
						<th>No</th>
						<th>NIP Peserta</th>
						<th>Nama Peserta</th>
						<th>Nama Unit</th>
						<th>No Sertifikat</th>
						<th>Tgl Sertifikat</th>
						<th>Sertifikat LAN</th>
						<th>Ubah Peserta</th>
						<th>Hapus Peserta</th>
						<th><input type="checkbox" id="cbPrintAll" onclick="printAll(this.id);"> Print Name Tag All</th>
						<th><input type="checkbox" id="cbPrintNameTableAll" onclick="printAllNameTable(this.id);"> Print Name Table All</th>
					</tr>
					</thead>
					<tbody id="bodyTablePeserta">
						
					</tbody>
					<tfoot>
					  
					</tfoot>
				</table>
          	</div>
          	<div class="box-footer clearfix no-border" id="footerTablePeserta">
              
            </div>
		  </div>
	  </div>
	  </div>
	  </div>
	  
	  <!--  -->
	 <div id="FormTambahPeserta" style="display: none;">
     <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleFormTambahPeserta"></h3>

              <div class="box-tools pull-right">
              
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;" onclick="tambahBiodataPeserta();">
                  <i class="fa fa-plus"></i> Tambah Biodata Peserta Baru</button>
              </div>
            </div>
            <div class="box-body">
            	
            	<div class="form-group">
                    <label>NIP</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="text" name="pesertaNIPCari" id="pesertaNIPCari">
                    <label>isi minimal dua karakter depan NIP</label>
                    <br>
                    <label>Nama Peserta</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="text" name="pesertaNamaCari" id="pesertaNamaCari">
               	</div>
               	
               	<button type="button" class="btn btn-primary btn-sm" onclick="cariDataPeserta();">
                <i class="fa fa-save"></i> Cari Peserta</button>
               	
               	<!--<div class="form-group col-xs-12" style="padding-left:0;margin-left:0;">
               		<label>Nama Unit</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					<div class="form-group input-group">
                        <input class="form-control" type="text" name="unitName" id="unitName" readonly="true">
						<span class="input-group-btn"><button class="btn btn-primary"  type="button" onclick="showModalUnit();"><i class="fa fa-search"></i></button></span>
                    </div>
               		</div>-->
               	
               	
            	<div class="col-xs-12">&nbsp</div>
				<div class="col-xs-12">&nbsp</div>
				<table id="example5" class="table">
					<thead>
					<tr>
						<td>No</td>
						<td>NIP Peserta</td>
						<td>Nama Peserta</td>
						<td>Nama Unit</td>
						<td>Pilih</td>
					</tr>
					</thead>
					<tbody id="bodyTablePesertaAll">
						
					</tbody>
					<tfoot>
					  	
					</tfoot>
				</table>
          	</div>
          	<div class="box-footer clearfix no-border" id="footerTablePeserta">
              	<button type="button" class="btn btn-primary btn-lg btn-block" onclick="simpanPeserta();">
                <i class="fa fa-save"></i> Simpan Peserta</button>
            </div>
		  </div>
	  </div>
	  </div>
	  </div>
	  
	  
	  <div id="FormTambahBiodataPeserta" style="display: none;">
     <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleFormTambahBiodataPeserta">Form Tambah Biodata Peserta Baru</h3>
				
              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                <i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body"> 	
            	
            	
				
				<div class="form-group col-xs-6" style="padding-left:0;margin-left:0;">
                    <label>NIP (no space)</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="text" name="pesertaNIP" id="pesertaNIP">
               	</div>
               	
               	<div class="form-group col-xs-3" style="padding-left:0;margin-left:0;">
				  <input class="form-control" type="text" style="visibility: hidden;">
				  <label><input type="radio" name="optradio2" id="rbNIP" checked>NIP</label>
				</div>
				<div class="form-group col-xs-3" style="padding-left:0;margin-left:0;">
				  <input class="form-control" type="text" style="visibility: hidden;">
				  <label><input type="radio" name="optradio2" id="rbNRP">NRP</label>
				</div>
       			
               	<div class="form-group col-xs-3" style="padding-left:0;margin-left:0;">
               		<label>Gelar Depan Nama</label>
                    <input class="form-control" type="text" name="pesertaDegreeFirst" id="pesertaDegreeFirst" style="text-align:right;">
               	</div>
               	
               	<div class="form-group col-xs-6">
               		<label>Nama</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                    <input class="form-control" type="text" name="pesertaNama" id="pesertaNama">
               	</div>
               	
               	<div class="form-group col-xs-3" style="padding-right:0;margin-right:0;">
               		<label>Gelar Belakang Nama</label>
                    <input class="form-control" type="text" name="pesertaDegreeLast" id="pesertaDegreeLast">
               	</div>
               	
               	<div class="form-group" style="display:none;">
                    <label>Kartu Pegawai</label>
                    <input class="form-control" type="text" name="pesertaKarPeg" id="pesertaKarPeg">
               	</div>
               	
               	<div class="form-group col-xs-3" style="padding-left:0;margin-left:0;">
                    <label>Tempat Lahir</label>
                    <input class="form-control" type="text" name="pesertaPOB" id="pesertaPOB">
               	</div>
               	
               	<div class="form-group col-xs-6" style="padding-right:0;margin-right:0;">
	               	<label>Tanggal Lahir</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input type="text" class="form-control" id="pesertaDOB" maxlength="10" onchange="changeDatePicker();">						
					</div>
					<label>Format Tanggal Contoh : 1990-06-21 (yyyy-mm-dd)</label>
				</div>
				
				<div class="form-group col-xs-3">
					<label>Gender</label>
					<select class="form-control" id="pesertaGender">
						<option value="L">L</option>
						<option value="P">P</option>
					</select>
				</div>
				
				<div class="form-group col-xs-6" style="padding-left:0;margin-left:0;">
					<label>Alamat</label>
					<textarea name="pesertaAlamat" id="pesertaAlamat" class="form-control" rows="3"></textarea>
				</div>
				
				<div class="form-group col-xs-6" style="padding-right:0;margin-right:0;">
					<label>Alamat Kantor</label>
					<textarea name="pesertaAlamatKantor" id="pesertaAlamatKantor" class="form-control" rows="3"></textarea>
				</div>
				
				<div class="form-group col-xs-6" style="padding-left:0;margin-left:0;">
					<label>Telepon</label>
					<input class="form-control" type="text" name="pesertaTelepon" id="pesertaTelepon">
				</div>
				
				<div class="form-group col-xs-6" style="padding-right:0;margin-right:0;">
					<label>Telepon Kantor</label>
					<input class="form-control" type="text" name="pesertaTeleponKantor" id="pesertaTeleponKantor">
				</div>
				
				<div class="form-group col-xs-6" style="padding-left:0;margin-left:0;">
					<label>Kodepos</label>
					<input class="form-control" type="text" name="pesertaKodePos" id="pesertaKodePos">
				</div>
				
				<div class="form-group col-xs-6" style="padding-right:0;margin-right:0;">
					<label>Email</label>
					<input class="form-control" type="email" name="pesertaEmail" id="pesertaEmail">
				</div>
				
				<div class="form-group col-xs-12" style="padding:0;margin:0;">
               		<label>Nama Unit</label>
						<div class="form-group input-group">
                            <input class="form-control" type="text" name="unitNameForm" id="unitNameForm" readonly="true">
							<span class="input-group-btn"><button class="btn btn-primary"  type="button" onclick="showModalUnitBiodata();"><i class="fa fa-search"></i></button></span>
                        </div>
               	</div>
				
				<div class="form-group col-xs-12" style="padding:0;margin:0;">
                    <label>Keterangan Unit Kerja</label>
                    <input class="form-control" type="text" name="pesertaKetUnitKerja" id="pesertaKetUnitKerja">
               	</div>
				
				<div class="form-group col-xs-6" style="padding-left:0;margin-left:0;">
               		<label>pangkat</label>
						<div class="form-group input-group">
                            <input class="form-control" type="text" name="pangkatName" id="pangkatName" readonly="true">
							<span class="input-group-btn"><button class="btn btn-primary"  type="button" onclick="showModalPangkat();"><i class="fa fa-search"></i></button></span>
                        </div>
               	</div>
				
				<div class="form-group col-xs-6" style="padding-right:0;margin-right:0;">
               		<label>Agama</label>
					<select class="form-control" id="pesertaAgama">
						<?php 
						if($agamas)
						{
							foreach ($agamas as $agama)
							{
								?>
								<option value="<?php echo $agama->religionID?>"><?php echo $agama->religionName;?></option>
								<?php
							}
						}
						?>
					</select>
               	</div>
				
				<!--<div class="form-group col-xs-12" style="padding:0;margin:0;">
               		<label>Grup Jabatan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
						<div class="form-group input-group">
                            <input class="form-control" type="text" name="jabatanGroupFullName" id="jabatanGroupFullName" readonly="true">
							<span class="input-group-btn"><button class="btn btn-primary"  type="button" onclick="showModalJabatanGroup();"><i class="fa fa-search"></i></button></span>
                        </div>
               	</div>-->
               	<div class="form-group col-xs-12" style="padding:0;margin:0;">
                    <label>Keterangan Pangkat</label>
                    <input class="form-control" type="text" name="pesertaKetPangkat" id="pesertaKetPangkat">
               	</div>
               	<div class="col-xs-12">&nbsp</div>
               	
               	
               	
               	<div class="form-group col-xs-12" style="padding:0;">
					<label>Jabatan Group</label>
					<select class="form-control" id="pesertaJabatanGroup">
						<?php 
						if($jabatanGroups)
						{
							foreach ($jabatanGroups as $jabatanGroup)
							{
								?>
								<option value="<?php echo $jabatanGroup->jabatanGroupID;?>"><?php echo $jabatanGroup->jabatanGroupFullName;?></option>
								<?php
							}
						}
						?>
					</select>
				</div>
               	
               	<div class="form-group col-xs-12" style="padding:0;margin:0;">
               		<label>Jabatan</label>
						<div class="form-group input-group">
                            <input class="form-control" type="text" name="jabatanFullName" id="jabatanFullName" readonly="true">
							<span class="input-group-btn"><button class="btn btn-primary"  type="button" onclick="showModalJabatan();"><i class="fa fa-search"></i></button></span>
                        </div>
               	</div>
				
				<div class="form-group col-xs-12" style="padding:0;margin:0;">
                    <label>Keterangan Jabatan</label>
                    <input class="form-control" type="text" name="pesertaKetJabatan" id="pesertaKetJabatan">
               	</div>
				
          	</div>
          	
          	<div class="box-footer clearfix no-border" id="footerFormPeserta">
              	
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
		var temp, bulan, tahun;
		bulan = <?php echo $thisMonth; ?>;
		tahun = <?php echo $thisYear; ?>;
		temp = bulan++;
		
		$("#btnNext").removeAttr("disabled");
		uri = '<?php echo base_url();?>pesertadiklat?month='+bulan+'&year='+tahun;
		refreshPage(uri);
	}
	
	function previousMonth()
	{
		var temp, bulan, tahun, uri;
		bulan = <?php echo $thisMonth; ?>;
		tahun = <?php echo $thisYear; ?>;
		temp = bulan--;
		$("#btnPrevious").removeAttr("disabled");
		uri = '<?php echo base_url();?>pesertadiklat?month='+bulan+'&year='+tahun;
		refreshPage(uri);	
	}
	
	
	
	function setSelectValue (id, val)
	{
		document.getElementById(id).value = val;
	}
	setSelectValue('selectBulan', <?php echo $thisMonth; ?>);
	setSelectValue('selectTahun', <?php echo $thisYear; ?>);
	
	$('#example2').dataTable();
	$('#example3').dataTable();
	$('#example5').dataTable();
	$('#example6').dataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": false,
			"info": true,
			"autoWidth": true,
			"preDrawCallback": function( settings ) 
			{
				if(idUnitBefore != '')
				{
					if(document.getElementById(idUnitBefore) != null)
					{
						document.getElementById(idUnitBefore).style.backgroundColor = "#fff";
					}
				}
			}
	});


	$('#example7').dataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": false,
		"info": true,
		"autoWidth": true,
		"preDrawCallback": function( settings ) 
		{
			if(idPangkatBefore != '')
			{
				if(document.getElementById(idPangkatBefore) != null)
				{
					document.getElementById(idPangkatBefore).style.backgroundColor = "#fff";
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
		"preDrawCallback": function( settings ) 
		{
			if(idJabatanBefore != '')
			{
				if(document.getElementById(idJabatanBefore) != null)
				{
					document.getElementById(idJabatanBefore).style.backgroundColor = "#fff";
				}
			}
		}
	});

	$('#example9').dataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": false,
		"info": true,
		"autoWidth": true,
		"preDrawCallback": function( settings ) 
		{
			if(idJabatanGroupBefore != '')
			{
				if(document.getElementById(idJabatanGroupBefore) != null)
				{
					document.getElementById(idJabatanGroupBefore).style.backgroundColor = "#fff";
				}
			}
		}
	});


	$('#example10').dataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": false,
		"info": true,
		"autoWidth": true,
		"preDrawCallback": function( settings ) 
		{
			if(idJabatanGroupBefore != '')
			{
				if(document.getElementById(idPegawaiBefore) != null)
				{
					document.getElementById(idPegawai).style.backgroundColor = "#fff";
				}
			}
		}
	});
	<?php
			if($kaldikID)
			{
				?>
				viewKaldik('<?php echo $kaldikID; ?>;<?php echo $kaldikName; ?>;<?php echo $printSertifikat;?>;<?php echo $jabatanMandiri;?>;<?php echo $unitMandiri;?>;<?php echo $daerahMandiri;?>;<?php echo $namaMandiri?>;<?php echo $nipMandiri?>;<?php echo $filenameMandiri;?>');
				
				<?php
			}
			?>
			$("#pesertaDOB").datepicker(
			{
				format: 'yyyy-mm-dd',
				autoclose: true,
				update : '1990-06-21'
			});

			$("#pesertaDOB").datepicker('update', '1990-06-21');
 </script>
 <script src="<?php echo base_url();?>assets/lte/plugins/dragscroll/dragscroll.js"></script>