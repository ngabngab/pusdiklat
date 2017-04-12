<style>
.datepicker{z-index:1151 !important;}
</style>
<script>
var allKurikulum = [];
var tahunKaldik, tahunIni;
tahunKaldik = '<?php echo $yearNumber; ?>';
tahunIni = new Date().getFullYear().toString();



		


var idBefore = '';
var arrSplit, diklatid, diklatdesc, diklatlocid, diklatlocname, biayaid, biayaname, kodeasal, namaunitasal, kurikulumid, kurikulumname, kurikulumhari, hariLibur, totalHari, strHtml, kaldikMonth, kaldikYearIDm, l, str, idLast, strTable, ID, kurikulumjenisid, jenisname, totalHari, strSesi, metodeid, metodename, arrSesi, kaldikdesc, kaldikid, ketunitkerja, color, tempatname;
strTable = [];
kaldikMonth = parseInt('<?php echo $monthNumber; ?>');
kaldikYearID = '<?php echo $yearID;?>';

ID = 0;

strHtml = '';
var diklat = [];
var dikl = '';

var idLokasiBefore, idLokasi;
var loc = [];
idLokasiBefore = idLokasi = '';

var idBiayaBefore, idBiaya;
var biaya = [];
idBiayaBefore = idBiaya = '';

var idUnitBefore, idUnit;
var unit = [];
idUnitBefore = idUnit = '';

var idKurikulumBefore, idKurikulum;
var kurikulum = [];
idKurikulumBefore = idKurikulum = '';

var idMetodeBefore, idMetode;
var metode = [];
idMetodeBefore = idMetode = '';

totalHari = 0;

var holiday = [];
var arrHari = [];
var arrSesi = [];
var dateDefault = '<?php echo $tgl; ?>';

<?php
	foreach ($holidays as $holiday)
	{
		?>
		holiday.push('<?php echo $holiday->holidayDate?>');
		<?php
	}
	
	
	foreach ($metodes as $metode)
	{
		?>
		strHtml += '<option id="<?php echo $metode->metodeID;?>;<?php echo $metode->metodeName;?>" value="<?php echo $metode->metodeID;?>;<?php echo $metode->metodeName;?>"><?php echo $metode->metodeName;?></option>';
		<?php
	}
?>
document.getElementById('metodeName').innerHTML = strHtml;

<?php
		if($kaldiks)
		{
			foreach ($kaldiks as $kaldik)
			{
				
			?>
				var kaldikstat = '<?php echo $kaldik->kaldikStat; ?>';
				kaldikdesc = '<?php echo $kaldik->kaldikDesc; ?>';
				kaldikid = '<?php echo $kaldik->kaldikID;?>';
				ketunitkerja = '<?php echo $kaldik->ketUnitKerja; ?>';
				color = '<?php echo $kaldik->color; ?>';
				metodeid = '<?php echo $kaldik->metodeID; ?>';
				metodename = '<?php echo $kaldik->metodeName; ?>';
				kurikulumid = '<?php echo $kaldik->kurikulumID; ?>';
				kurikulumname = '<?php echo $kaldik->kurikulumName; ?>';
				diklatid = '<?php echo $kaldik->diklatID; ?>';
				diklatdesc = '<?php echo $kaldik->diklatName; ?>';
				biayaid = '<?php echo $kaldik->biayaID; ?>';
				biayaname = '<?php echo $kaldik->biayaName; ?>';
				rencanaanggaran = '<?php echo $kaldik->rencanaAnggaran; ?>';
				kodeasal = '<?php echo $kaldik->KodeAsal; ?>';
				namaunitasal = '<?php echo $kaldik->NamaUnitAsal;?>';
				diklatlocid = '<?php echo $kaldik->diklatLocID; ?>';
				diklatlocname = '<?php echo $kaldik->diklatLocName; ?>';
				kelas = '<?php echo $kaldik->kelas; ?>';
				ketunitkerja = '<?php echo $kaldik->ketUnitKerja; ?>';
				tempatname = '<?php echo $kaldik->tempatName; ?>';
				document.getElementById('diklatName').value = diklatdesc;
				document.getElementById('kurikulumName').value =  kurikulumname;
				document.getElementById('metodeName').value = metodeid+';'+metodename;
				document.getElementById('colorpick').value = color;
				document.getElementById('lokasiName').value = diklatlocname;
				document.getElementById('biayaName').value = biayaid+';'+biayaname;
				document.getElementById('rencanaAnggaran').value = rencanaanggaran;
				document.getElementById('kaldikDesc').value = kaldikdesc;
				document.getElementById('kelas').value = kelas;
				document.getElementById('KetUnitKerja').value = ketunitkerja;
				document.getElementById('unitName').value = namaunitasal;
				document.getElementById('tempatName').value = tempatname;
				
				if(kaldikstat == '1')
				{
					document.getElementById('Kaldik').checked = true;
				}
				else
				{
					document.getElementById('NonKaldik').checked = true;
				}
				
				if(diklat.length == 0)
				{
					diklat.push({'diklatid':diklatid, 'diklatdesc':diklatdesc});
				}
				else
				{
					diklat.pop();
					diklat.push({'diklatid':diklatid, 'diklatdesc':diklatdesc});
				}
				
				if(loc.length == 0)
				{
					loc.push({'diklatlocid':diklatlocid, 'diklatlocname':diklatlocname});
				}
				else
				{
					loc.pop();
					loc.push({'diklatlocid':diklatlocid, 'diklatlocname':diklatlocname});
				}
				
				if(biaya.length == 0)
				{
					biaya.push({'biayaid':biayaid, 'biayaname':biayaname});
				}
				else
				{
					biaya.pop();
					biaya.push({'biayaid':biayaid, 'biayaname':biayaname});
				}
				
				if(unit.length == 0)
				{
					unit.push({'kodeasal':kodeasal, 'namaunitasal':namaunitasal});
				}
				else
				{
					unit.pop();
					unit.push({'kodeasal':kodeasal, 'namaunitasal':namaunitasal});
				}
				
				if(kurikulum.length == 0)
				{
					kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname});
				}
				else
				{
					kurikulum.pop();
					kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname});
				}
				
				
				//pilihMetode(metodeid+';'+metodename);
				if(metode.length == 0)
				{
					metode.push({'metodeid':metodeid, 'metodename':metodename});
				}
				else
				{
					metode.pop();
					metode.push({'metodeid':metodeid, 'metodename':metodename});
				}
				
				
			<?php	
			}
		}
		
		if($sesis)
		{
			?>
			strSesi = '';
			i = 0;
			total = 0;
			<?php
			foreach ($sesis as $sesi)
			{
				?>
				arrSesi.push({'kaldiksesiid':'<?php echo $sesi->kaldikSesiID; ?>','sesiid':'<?php echo $sesi->kurikulumSesiID; ?>', 'startdate':'<?php echo $sesi->startDate; ?>', 'enddate':'<?php echo $sesi->endDate; ?>', 'libur':<?php echo $sesi->libur; ?>, 'minggu':<?php echo $sesi->minggu; ?>, 'hari':<?php echo $sesi->hari; ?>, 'sesiname':'<?php echo $sesi->sesiName; ?>', 'sesino':<?php echo $sesi->sesiNo; ?>,'peserta':<?php echo $sesi->peserta; ?>, 'sesidesc':'<?php echo $sesi->kurikulumSesiDesc; ?>'});
				
				strSesi += '<tr><td><?php echo $sesi->sesiName; ?></td><td><?php echo $sesi->kurikulumSesiDesc; ?></td><td><?php echo $sesi->hari; ?></td><td><?php echo $sesi->libur; ?></td><td><?php echo $sesi->minggu; ?></td><td><?php echo $sesi->startDate; ?></td><td><?php echo $sesi->endDate; ?></td><td><?php echo $sesi->peserta; ?></td><td><button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Ubah Data Sesi" id="ubah;<?php echo $sesi->kurikulumSesiID; ?>;<?php echo $sesi->startDate; ?>;<?php echo $sesi->peserta; ?>" onclick="ubahSesi(this.id);"><i class="fa fa-pencil"></i></button></td></tr>';
				total += <?php echo $sesi->hari; ?>;
				document.getElementById('totalhari').value = total;			
				document.getElementById('tableSesi').innerHTML = strSesi;
				<?php
			}
		}
		?>


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
	var i;
	if(arrSesi.length > 0)
	{
		if (idLast != dikl)
		{
			arrSesi = [];
			strTable = [];
			document.getElementById('tableSesi').innerHTML = '';
			document.getElementById('totalhari').value = 0;
			strHtml = '';
		}
	}

	str = '';
	idLast = dikl;
	arrSplit = dikl.split(";");
	diklatid = arrSplit[0];
	diklatdesc = arrSplit[1];
	kurikulumid = arrSplit[2];
	kurikulumname = arrSplit[3];
	
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
	document.getElementById('kaldikDesc').value = document.getElementById('diklatName').value + ' ' +document.getElementById('unitName').value;
	document.getElementById('kurikulumName').value = kurikulumname;
	pilihKurikulum(kurikulumid+';'+kurikulumname);
	
	
	
	$('#myModal').modal('hide');
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
		if(document.getElementById(idLokasiBefore) != null)
		{
			document.getElementById(idLokasiBefore).style.backgroundColor = "#fff";
		}
		
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
	/*
	if(idBiayaBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idBiayaBefore = id;
		idBiaya = id;
	}
	else
	{
		if(document.getElementById(idBiayaBefore) != null)
		{
			document.getElementById(idBiayaBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idBiayaBefore = id;
		idBiaya = id;
	}
	$("#btnPilihBiaya").removeAttr("disabled");
	*/
	if(idBiayaBefore == '')
	{
		idBiayaBefore = id;
		idBiaya = id;
	}
	else
	{
		idBiayaBefore = id;
		idBiaya = id;
	}
	pilihBiayaOk();
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
	
	//document.getElementById('biayaName').value = biaya[0].biayaname;
	//$('#myModal3').modal('toggle');
	
}

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
		idUnit = id;
	}
	$("#btnPilihUnit").removeAttr("disabled");
}
function pilihUnitOk()
{
	arrSplit = idUnit.split(";");
	kodeasal = arrSplit[0];
	namaunitasal = arrSplit[1];
	if(unit.length == 0)
	{
		unit.push({'kodeasal':kodeasal, 'namaunitasal':namaunitasal});
	}
	else
	{
		unit.pop();
		unit.push({'kodeasal':kodeasal, 'namaunitasal':namaunitasal});
	}
	document.getElementById('unitName').value = unit[0].namaunitasal;
	document.getElementById('kaldikDesc').value = document.getElementById('diklatName').value + ' ' +document.getElementById('unitName').value;
	$('#myModal4').modal('hide');
	
}

function pilihKurikulum(id)
{	
	idKurikulum = id;
	pilihKurikulumOk();
	
}
function pilihKurikulumOk()
{
	//var i, j, startDate, hari, arrHari, temp, j, k, minggu, libur, total;
	//minggu = libur = 0;
	arrSplit = idKurikulum.split(";");
	kurikulumid = arrSplit[0];
	kurikulumname = arrSplit[1];
	//arrHari = [];
	
	
	if(kurikulum.length == 0)
	{
		kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname});
	}
	else
	{
		kurikulum.pop();
		kurikulum.push({'kurikulumid':kurikulumid, 'kurikulumname':kurikulumname});
	}
	
	var uri = '<?php echo base_url(); ?>' + 'kaldik/ambilmetode/'+kurikulumid;
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
		{
			i = 0;
			str = '';
			while (i < data.length)
			{
				str += '<option id="'+data[i].metodeID+';'+data[i].metodeName+'" value="'+data[i].metodeID+';'+data[i].metodeName+'">'+data[i].metodeName+'</option>';
				
				if (i == 0)
				{
					pilihMetode(data[i].metodeID+';'+data[i].metodeName);
				}
				
				i++;
			}
			//document.getElementById('listKurikulumJenis').innerHTML = str;
			document.getElementById('metodeName').innerHTML = str;
			//document.getElementById('metodeName').value = 
		}
	});
}

function pilihMetode(id)
{
	arrSplit = id.split(';');
	metodeid = arrSplit[0];
	metodename = arrSplit[1];
	pilihMetodeOk();
}

function pilihMetodeOk()
{
	var i, str, hari, j, minggu, arrHari, strSesi, dateStr, tglMulai, tglSelesai, total, temp;
	if(metode.length == 0)
	{
		metode.push({'metodeid':metodeid, 'metodename':metodename});
	}
	else
	{
		metode.pop();
		metode.push({'metodeid':metodeid, 'metodename':metodename});
	}
	document.getElementById('metodeName').value = metodeid+';'+metodename;
	var uri = "<?php echo base_url(); ?>kaldik/ambilhari/"+kurikulum[0].kurikulumid+"/"+metode[0].metodeid;
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
		{
			if(data[0].number == '0')
			{
				alert('Kurikulum Dan Metode yang anda pilih belum memiliki mata ajar');
				$("#tableSesi tr").remove();
				arrSesi = [];
			}
			else
			{
				i = 0;
				arrSesi = [];
				strSesi = '';
				startDate = dateDefault;				
				while (i < data.length)
				{
					var hari = parseInt(data[0].hari);
					tglMulai = startDate;
					temp = new Date(startDate);
					arrHari = [];
					j = 0;
					totalLibur = 0;
					minggu = 0;
					month = temp.getMonth() + 1;
					dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
					while (j < parseInt(data[i].hari))
					{
						if (temp.getDay() != 0)
						{	
							k = 0;
							libur = 0;
							while (k < holiday.length)
							{
								if(dateStr == holiday[k])
								{
									libur++;
									totalLibur++;
									arrHari.push(dateStr);
									temp = temp.addDays(1);
									month = temp.getMonth() + 1;
									dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
								}
								k++;
							}
										
							if(libur == 0)
							{
								arrHari.push(dateStr);
								temp = temp.addDays(1);
								month = temp.getMonth() + 1;
								dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
								j++;
							}
						}
						else
						{
							arrHari.push(dateStr);
							temp = temp.addDays(1);
							month = temp.getMonth() + 1;
							dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
							minggu++;
						}
						
					}
					
					tglSelesai = arrHari[arrHari.length - 1];
					arrSesi.push({'sesiid':data[i].kurikulumSesiID, 'startdate':tglMulai, 'enddate':tglSelesai, 'libur':totalLibur, 'minggu':minggu, 'hari':arrHari.length - totalLibur - minggu, 'sesiname':data[i].sesiName, 'sesino':data[i].sesiNo,'peserta':30, 'sesidesc':data[i].kurikulumSesiDesc});
					
					
					
					startDate = dateStr;
					temp = new Date(startDate);
					if (temp.getDay() == 0)
					{
						temp = temp.addDays(1);
						month = temp.getMonth() + 1;
						dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
						startDate = dateStr;
					}
					
					k = 0;
					while (k < holiday.length)
					{
						if(startDate == holiday[k])
						{
							temp = temp.addDays(1);
							month = temp.getMonth() + 1;
							dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
							startDate = dateStr;
						}
						k++;
					}
					i++;
				}
				//console.log(arrSesi);
				strSesi = '';
				total = 0;
				i = 0;
				while (i < arrSesi.length)
				{
					strSesi += '<tr><td>'+arrSesi[i].sesiname+'</td><td>'+arrSesi[i].sesidesc+'</td><td>'+arrSesi[i].hari+'</td><td>'+arrSesi[i].libur+'</td><td>'+arrSesi[i].minggu+'</td><td>'+arrSesi[i].startdate+'</td><td>'+arrSesi[i].enddate+'</td><td>'+arrSesi[i].peserta+'</td><td><button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Ubah Data Sesi" id="ubah;'+arrSesi[i].sesiid+';'+arrSesi[i].startdate+';'+arrSesi[i].peserta+'" onclick="ubahSesi(this.id);"><i class="fa fa-pencil"></i></button></td></tr>';
					total += arrSesi[i].hari;
					i++;
				}
				//console.log(total);
				document.getElementById('tableSesi').innerHTML = strSesi;
				document.getElementById('totalhari').value = total;
				
			}
		}
	});
}

Date.prototype.addDays = function(days)
{
    var dat = new Date(this.valueOf());
    dat.setDate(dat.getDate() + days);
    return dat;
}

function pad(n, width, z) {
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}

function ubahSesi(id)
{
	var strAksi, aksi, idTable, jenisID, jenisDesc, kurikulumID, kurikulumHari, kurikulumName, temp, tglMulai, jmlPeserta;
	strAksi = id.split(';');
	aksi = strAksi[0];
	sesiID =  strAksi[1];
	tglMulai = strAksi[2];
	jmlPeserta = strAksi[3];
	
	$("#datepicker").val(tglMulai);
	$("#peserta").val(jmlPeserta);
			
	document.getElementById('modalFooter').innerHTML = '<button type="button" class="btn btn-warning" id="'+id+'"  onclick="ubahSesiConfirm(this.id);">Ubah Sesi</button><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
	
	$('#myModal6').modal('show');
}

function ubahSesiConfirm(id)
{
	var strAksi, aksi, idTable, jenisID, jenisDesc, kurikulumID, kurikulumHari, kurikulumName, temp, tglMulai, jmlPeserta, i, total,totalLibur, minggu, libur, j, k;
	strAksi = id.split(';');
	aksi = strAksi[0];
	sesiID =  strAksi[1];
	tglMulai = strAksi[2];
	jmlPeserta = strAksi[3];
	
	tglMulai = $("#datepicker").val();
	jmlPeserta = $("#peserta").val();
	
	i = 0;
	while (i < arrSesi.length)
	{
		if (arrSesi[i].sesiid == sesiID)
		{
			arrSesi[i].startdate = tglMulai;
			arrSesi[i].peserta = jmlPeserta;
			
			total = arrSesi[i].hari;
			arrHari = [];
			
			
			temp = new Date(tglMulai);
			j = 0;
			totalLibur = 0;
			minggu = 0;
			month = temp.getMonth() + 1;
			dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
			while (j < parseInt(total))
			{
				if (temp.getDay() != 0)
				{	
					k = 0;
					libur = 0;
					while (k < holiday.length)
					{
						if(dateStr == holiday[k])
						{
							libur++;
							totalLibur++;
							arrHari.push(dateStr);
							temp = temp.addDays(1);
							month = temp.getMonth() + 1;
							dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
						}
						k++;
					}
								
					if(libur == 0)
					{
						arrHari.push(dateStr);
						temp = temp.addDays(1);
						month = temp.getMonth() + 1;
						dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
						j++;
					}
				}
				else
				{
					arrHari.push(dateStr);
					temp = temp.addDays(1);
					month = temp.getMonth() + 1;
					dateStr = temp.getFullYear() + '-' + pad(month, 2) + '-' + pad(temp.getDate(), 2);
					minggu++;
				}
				
			}
			//console.log(arrHari);
			
			arrSesi[i].enddate = arrHari[arrHari.length - 1];
			arrSesi[i].minggu = minggu;
			arrSesi[i].libur = totalLibur;
			arrSesi[i].hari = arrHari.length - minggu - totalLibur;
		}
		i++;
	}
	strSesi = '';
	i = 0;
	total = 0;
	while (i < arrSesi.length)
	{
		strSesi += '<tr><td>'+arrSesi[i].sesiname+'</td><td>'+arrSesi[i].sesidesc+'</td><td>'+arrSesi[i].hari+'</td><td>'+arrSesi[i].libur+'</td><td>'+arrSesi[i].minggu+'</td><td>'+arrSesi[i].startdate+'</td><td>'+arrSesi[i].enddate+'</td><td>'+arrSesi[i].peserta+'</td><td><button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Ubah Data Sesi" id="ubah;'+arrSesi[i].sesiid+';'+arrSesi[i].startdate+';'+arrSesi[i].peserta+'" onclick="ubahSesi(this.id);"><i class="fa fa-pencil"></i></button></td></tr>';
		total += arrSesi[i].hari;
		i++;
	}
	document.getElementById('totalhari').value = total;			
	document.getElementById('tableSesi').innerHTML = strSesi;
	$('#myModal6').modal('hide');
}


function ubahKaldik()
{
	$('#myModal7').modal('show');	
}

function ubahKaldikConfirm()
{
	var stat_blended, stat_elearning, stat_tatapmuka, rencanaAnggaran, kaldikDesc, kelas, KetUnitKerja, nost, tglst, uri, tglST, i, color, Kaldik, NonKaldik, kaldikStat, kurikulumid, metodeid;
	var arrPertemuan = [];
	kelas = document.getElementById('kelas');
	KetUnitKerja = document.getElementById('KetUnitKerja');
	kaldikDesc = document.getElementById('kaldikDesc');
	rencanaAnggaran = document.getElementById('rencanaAnggaran');
	color = document.getElementById('colorpick');
	Kaldik = document.getElementById('Kaldik');
	NonKaldik = document.getElementById('NonKaldik');
	kurikulumid = kurikulum[0].kurikulumid;
	metodeid = metode[0].metodeid;
	tempatname = document.getElementById('tempatName').value;
	
	if(Kaldik.checked == true)
	{
		kaldikStat = 1;
	} 
	else if (NonKaldik.checked == true)
	{
		kaldikStat = 0;
	}
	
	
	
	if (diklat.length == 0)
	{
		alert('Anda Belum Memilih Diklat');
	}
	else if(kurikulum.length == 0) 
	{
		alert('Anda Belum Memilih Kurikulum');
	}
	else if (loc.length == 0)
	{
		alert('Anda Belum Memilih Lokasi');
	}
	else if (biaya.length == 0)
	{
		alert ('Anda Belum Memilih Sumber Biaya');
	}
	else if (unit.length == 0)
	{
		alert ('Anda Belum Memilih Asal Unit Peserta');
	}
	else if (arrSesi.length == 0)
	{
		alert ('Anda Belum Menentukan Sesi Pertemuan Diklat');
		
	}
	else if(Kaldik.checked == false && NonKaldik.checked == false)
	{
		alert ('Anda Belum Menentukan Status KALDIK atau NON KALDIK');
	}
	else if(tempatname == '')
	{
		alert('Anda Belum Mengisi Tempat Pelaksanaan Diklat');
	}
	else
	{
		console.log(arrSesi);
		i = 0;
		while (i < arrSesi.length)
		{
			arrPertemuan.push({'sesiid':arrSesi[i].sesiid, 'peserta':arrSesi[i].peserta, 'startdate':arrSesi[i].startdate});
			i++;
		}
		
		
		var uri = '<?php echo base_url(); ?>' + 'kaldikrealisasi/ubahdatakaldikrealisasi/?kaldikid='+kaldikid+'&kaldikdesc='+kaldikDesc.value + '&kaldikmonth='+kaldikMonth+'&kaldikyear=' + kaldikYearID + '&diklatid=' + diklat[0].diklatid + '&kurikulumid='+kurikulum[0].kurikulumid+'&biayaid='+biaya[0].biayaid + '&rencanaanggaran='+rencanaAnggaran.value+'&diklatlocid='+loc[0].diklatlocid+'&kodeasal='+ unit[0].kodeasal + '&ketunitkerja=' + KetUnitKerja.value + '&kelas='+kelas.value + '&arrpertemuan=' + JSON.stringify(arrSesi) +'&color=' + color.value.substr(1, 6) + '&kaldikstat='+kaldikStat+'&metodeid='+metodeid+'&tempatname='+tempatname;
		console.log(uri);
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) {
			  
			 
					$('#myModal7').modal('hide');
					refreshPage('<?php echo base_url(); ?>kaldikrealisasi?month=<?php echo $monthNumber; ?>&year=<?php echo $yearNumber; ?>');
			 
			}
		});
		
	}
}


function hapusKaldik()
{
	$('#myModal8').modal('show');	
}

function hapusKaldikConfirm()
{
	var stat_blended, stat_elearning, stat_tatapmuka, rencanaAnggaran, kaldikDesc, kelas, KetUnitKerja, nost, tglst, uri, tglST, i, color, Kaldik, NonKaldik, kaldikStat, kurikulumid, metodeid;
	var arrPertemuan = [];
	kelas = document.getElementById('kelas');
	KetUnitKerja = document.getElementById('KetUnitKerja');
	kaldikDesc = document.getElementById('kaldikDesc');
	rencanaAnggaran = document.getElementById('rencanaAnggaran');
	color = document.getElementById('colorpick');
	Kaldik = document.getElementById('Kaldik');
	NonKaldik = document.getElementById('NonKaldik');
	kurikulumid = kurikulum[0].kurikulumid;
	metodeid = metode[0].metodeid;
	
		
	var uri = '<?php echo base_url(); ?>' + 'kaldikrealisasi/hapusdatakaldik/?kaldikid='+kaldikid+'&kaldikdesc='+kaldikDesc.value + '&kaldikmonth='+kaldikMonth+'&kaldikyear=' + kaldikYearID + '&diklatid=' + diklat[0].diklatid + '&kurikulumid='+kurikulum[0].kurikulumid+'&biayaid='+biaya[0].biayaid + '&rencanaanggaran='+rencanaAnggaran.value+'&diklatlocid='+loc[0].diklatlocid+'&kodeasal='+ unit[0].kodeasal + '&ketunitkerja=' + KetUnitKerja.value + '&kelas='+kelas.value + '&arrpertemuan=' + JSON.stringify(arrSesi) +'&color=' + color.value.substr(1, 6) + '&kaldikstat='+kaldikStat+'&metodeid='+metodeid;
	//console.log(uri);
		
		
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) {
			//console.log(data);
			if (data.success == 1)
			{
				$('#myModal8').modal('hide');
				refreshPage('<?php echo base_url(); ?>kaldikrealisasi?month=<?php echo $monthNumber; ?>&year=<?php echo $yearNumber; ?>');
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

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Unit Asal</h4>
			</div>
			<div class="modal-body">
				<table id="example4" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Nama Unit Asal</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						foreach($units as $unit)
						{
							?>
							<tr id="<?php echo $unit->KodeAsal;?>;<?php echo $unit->NamaUnitAsal;?>" onclick="pilihUnit(this.id)" style="cursor: pointer;">
								<td><?php echo $unit->NamaUnitAsal;?></td>
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
				<button type="button" class="btn btn-primary" disabled id="btnPilihUnit" onclick="pilihUnitOk();">Pilih</button>
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
								<th>Tipe Kurikulum</th>
								<th>Nama Kurikulum</th>
								<th>Jenis Kurikulum</th>
							</tr>
							
							</thead>
							<tbody id='listKurikulumJenis'>
								
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
				<h4 class="modal-title" id="myModalLabel">Sesi Diklat</h4>
			</div>
			<div class="modal-body">
				<h4><i class="fa fa-calendar"></i> Sesi</h4>
						<label>Tanggal Mulai Diklat</label>
						<div class="input-group date">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
								<input type="text" class="form-control pull-right" id="datepicker" value="<?php echo $tgl; ?>" readonly="true">
						</div>
						<div class="col-xs-12">&nbsp</div>
						
						<div class="form-group">
                            <label>Jumlah Peserta</label>
                            <input class="form-control" type="number" name="peserta" placeholder="1" id="peserta" min="1" max="" value = "1" style="width: 100px;"> 
                        </div>
											
			</div>
			<div class="modal-footer" id="modalFooter">
				
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Ubah KALDIK</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Yakin Akan Merubah Data Kaldik . . ?					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-warning" onclick="ubahKaldikConfirm();">Ubah Kaldik</button>
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
				<h4 class="modal-title">Hapus KALDIK</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Yakin Akan Menghapus Data Kaldik . . ?					
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusKaldikConfirm();">Hapus Kaldik</button>
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
			Ubah / Hapus KALDIK
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a onclick="refreshPage('<?php echo base_url(); ?>kaldikrealisasi');" style="cursor:pointer;"><i class="fa fa-calendar"></i> Kaldik</a></li>
			<li class="active" style="cursor:pointer;"><i class="fa fa-pencil"></i> View Kaldik</li>
		</ol>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
			
				
              <i class="ion ion-clipboard"></i>
              <h3 class="box-title">Tambah Kaldik PERIODE : <?php echo $monthName; ?> - <?php echo $yearNumber;?></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
            </div>
            
            <div class="box-body">
				<button type="button" class="btn btn-primary" data-widget="collapse" data-toggle="tooltip" title="Collapse" onclick="refreshPage('<?php echo base_url(); ?>kaldikrealisasi?month=<?php echo $monthNumber; ?>&year=<?php echo $yearNumber; ?>')">
                  <i class="fa fa-arrow-left">Kembali Ke List Diklat</i>
				</button>
				<div class="col-xs-12">
						<h4><i class="fa fa-book"></i> Data Diklat</h4>
						
						<label>KALDIK / NON KALDIK</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
						<div class="form-group">
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadiosKaldik" id="Kaldik">
									Kaldik
								  </label>
								</div>
								<div class="radio">
								  <label>
									<input type="radio" name="optionsRadiosKaldik" id="NonKaldik">
									Non Kaldik
								  </label>
								</div>
						</div>
						
						
						<label>Nama Diklat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
						<div class="form-group input-group">
                            <input class="form-control" type="text" name="diklatName" id="diklatName" readonly="true">
							<span class="input-group-btn"><button disabled class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></button></span>
                        </div>
						
						<label>Kurikulum</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
						<div class="form-group">
                            <input class="form-control" type="text" name="kurikulumName" id="kurikulumName" readonly="true">
                        </div>
						
						<label>Metode Pembelajaran</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
						<div class="form-group">
                            <select class="form-control" id="metodeName" onchange="pilihMetode(this.value);" disabled>
									
							</select>
                        </div>
						
						<div class="form-group">
							<label>Warna Tabel</label>
							<input type="text" class="form-control my-colorpicker1" id="colorpick" readonly>
						</div>
						
						
						
						<label>Lokasi</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
						<div class="form-group input-group">
                            <input class="form-control" type="text" name="lokasiName" id="lokasiName" readonly="true">
							<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal2"><i class="fa fa-search"></i></button></span>
                        </div>
						<label>Tempat</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
						<div class="form-group">
                            <input class="form-control" type="text" name="tempatName" id="tempatName">
                        </div>
						<label>Sumber Biaya</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
						<div class="form-group">
                            <!-- <input class="form-control" type="text" name="biayaName" id="biayaName" readonly="true">
							<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i></button></span> -->
							<select id="biayaName" class="form-control" onchange="pilihBiaya(this.value)">
								<?php
								if($biayas)
								{
									$i = 0;
									foreach($biayas as $biaya)
									{
										?>
										<option value="<?php echo $biaya->biayaID;?>;<?php echo $biaya->biayaName;?>" ><?php echo $biaya->biayaName;?></option>
										<?php
										$i++;
									}
								}
								?>
							</select>
                        </div>
						
						<label>Rencana Anggaran</label>
                        <div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">Rp</div>
                                <input class="form-control" type="text" name="rencanaAnggaran" id="rencanaAnggaran" placeholder="Enter Rencana Anggaran" value="">
							</div>
                        </div>
						
						<div class="form-group">
                            <label>Uraian Diklat</label>
                             <textarea name="kaldikDesc" id="kaldikDesc" class="form-control" rows="3"></textarea>
                        </div>
						
						<div class="form-group">
                            <label>Jumlah Kelas</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
                            <input class="form-control" type="number" name="kelas" placeholder="1" id="kelas" min="1" max="" value = "1" style="width: 100px;"> 
                        </div>
						
						
						<h4><i class="fa fa-users"></i> Unit Asal Peserta</h4>
						<label>Unit Asal</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
						<div class="form-group input-group">
                            <input class="form-control" type="text" name="unitName" id="unitName" readonly="true">
							<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal4"><i class="fa fa-search"></i></button></span>
                        </div>
						
						<div class="form-group">
							<label>Keterangan Unit Kerja</label>
							<textarea name="KetUnitKerja" id="KetUnitKerja" class="form-control" rows="3"></textarea>
						</div>
						
						<div style="display:none;">
						<div class="col-xs-12">&nbsp</div>
						<h4><i class="fa fa-file"></i> Surat Tugas</h4>
						<div class="form-group">
                             <label>Nomor Surat Tugas</label>
                             <input class="form-control" type="text" name="nost" id="nost" placeholder="No. Surat Tugas">
                        </div>
						
						
						<div class="col-xs-12">&nbsp</div>
                        <label>Tanggal Surat Tugas</label>
						<div class="input-group date">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" class="form-control pull-right" id="datepickerst" readonly="true">
						</div>
						
						<div class="col-xs-12">&nbsp</div>
                        </div>
						
						
						
						<h4><i class="fa fa-calendar"></i> Sesi</h4>
						
						
						<div class="form-group">
						<div style="overflow:scroll;">
						<div class="col-xs-12">&nbsp</div>
							<table id="example5" class="table table-bordered table-hover">
								<thead>
								<tr>
								  <th>Jenis</th>
								  <th>Deskripsi</th>
								  <th>Jumlah Hari</th>
								  <th>Libur</th>
								  <th>Minggu</th>
								  <th>Tgl Mulai</th>
								  <th>Tgl Selesai</th>
								  <th>Peserta</th>
								  <th>&nbsp</th>
								</tr>
								</tr>
								</thead>
								<tbody id="tableSesi">
									
								</tbody>
								<tfoot>
								<tr>
								  
								</tr>
								</tfoot>
							</table>	
						</div>
						</div>
						
						<div class="form-group">
                            <label>Total Hari Diklat</label>
                            <input class="form-control" type="number" name="totalhari" placeholder="0" id="totalhari" min="0" max="" value="0" style="width: 100px;" readonly> 
                        </div>
						<div class="col-xs-12">&nbsp</div>
						<div class="form-group">
							<button type="button" class="btn btn-warning" onclick="ubahKaldik();"><i class="fa fa-pencil"></i> Simpan Realisasi KALDIK</button>&nbsp&nbsp
							<!--  <button type="button" class="btn btn-danger" onclick="hapusKaldik();"><i class="fa fa-close"></i> Hapus KALDIK</button>  -->
						</div>
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
		
		$('#metodeName').val(metodeid+';'+metodename);
		//pilihMetode(metodeid+';'+metodename);
		//console.log(metode);
		if(tahunIni == tahunKaldik)
		{
			document.getElementById('Kaldik').checked == true;
		}
		else
		{
			document.getElementById('NonKaldik').checked == true;
		}
		
		
		
		$("#rencanaAnggaran").keypress(function (e) {
			//if the letter is not digit then display error and don't type anything
			if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			//display error message
			//$("#errmsg").html("Digits Only").show().fadeOut("slow");
				   return false;
			}
		});
		
		
		
		$( function() {
			$("#datepicker").datepicker(
			{
				format: 'yyyy-mm-dd',
				autoclose: true,
				daysOfWeekDisabled : '0,7',
				startDate : dateDefault,
				beforeShowDay:function(Date){
					//
					var curr_day = Date.getDate();
					var curr_month = Date.getMonth()+1;
					var curr_year = Date.getFullYear();        
					var curr_date=curr_year+'-'+pad(curr_month, 2)+'-'+pad(curr_day, 2);        

					if (holiday.indexOf(curr_date)>-1) return false;        
				}
			}
			);
			
			$("#datepickerst").datepicker(
			{
				format: 'yyyy-mm-dd',
				autoclose: true,
				daysOfWeekDisabled : '0,7',
			}
			);
			
			$(".my-colorpicker1").colorpicker();
			
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
			$("#example2").DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": true,
				"ordering": false,
				"info": true,
				"autoWidth": true,
				"preDrawCallback": function( settings ) 
				{
					if(idLokasiBefore != '')
					{
						if(document.getElementById(idLokasiBefore) != null)
						{
							document.getElementById(idLokasiBefore).style.backgroundColor = "#fff";
						}
					}
				}
			});
			$("#example3").DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": true,
				"ordering": false,
				"info": true,
				"autoWidth": true,
				"preDrawCallback": function( settings ) 
				{
					if(idBiayaBefore != '')
					{
						if(document.getElementById(idBiayaBefore) != null)
						{
							document.getElementById(idBiayaBefore).style.backgroundColor = "#fff";
						}
					}
				}
			});
			$("#example4").DataTable({
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
			$("#example5").DataTable({
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
			$("#example6").DataTable();	
		});
		
		
  </script>