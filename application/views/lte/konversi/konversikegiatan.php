<style>
.datepicker{z-index:1151 !important;}
</style>
<script>
var total = [];
var selisihKelas = [];
var arrSplit, diklatlocid, diklatlocname, biayaid, biayaname, jadwalid, mataajarname, mataajarid, tanggal, pegawaiid, pegawainame, kaldikid, kelasid, bulan, tahun, pengajarid, jmlhari, kaldikname, backgroundcolor, trid, backgroundcolortr, nomorst, tanggalst, kegiatandetailid, kegiatandetailnama, kegiatandetailsat, kegiatandetailjp, idkonversibefore, konversiid, nomorst, tanggalst, tanggalkegiatan, tanggalselesai, nilai;
trid = '';
backgroundcolortr = '';
var tab;
bulan = <?php  echo $thisMonth; ?>;
tahun = <?php echo $thisYear; ?>;
idkonversibefore = '';
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

var idKegiatanDetailBefore, idKegiatanDetail;
var kegiatandetail = [];
idKegiatanDetailBefore = idKegiatanDetail = '';
nilai = 0;

function showModal()
{
	if(nilai == 0)
	{
		$('#myModal13').modal('show');
	}
	else
	{
		$('#myModal14').modal('show');
	}
}



function pilihKegiatan(id)
{
	
	if(idKegiatanDetailBefore == '')
	{
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idKegiatanDetailBefore = id;
		idKegiatanDetail = id;
	}
	else
	{
		if(document.getElementById(idKegiatanDetailBefore) != null)
		{
			document.getElementById(idKegiatanDetailBefore).style.backgroundColor = "#fff";
		}
		document.getElementById(id).style.backgroundColor = "#42A5F5";
		idKegiatanDetailBefore = id;
		idKegiatanDetail = id;
	}
	$("#btnPilihKegiatan").removeAttr("disabled");
}

function pilihKegiatanOk()
{
	arrSplit = idKegiatanDetail.split(";");
	kegiatandetailid = arrSplit[0];
	kegiatandetailnama = arrSplit[1];
	kegiatandetailsat = arrSplit[2];
	kegiatandetailjp = arrSplit[3];
	
	if(kegiatandetail.length == 0)
	{
		kegiatandetail.push({'kegiatandetailid':kegiatandetailid, 'kegiatandetailnama':kegiatandetailnama, 'kegiatandetailsat':kegiatandetailsat, 'kegiatandetailjp':kegiatandetailjp});
	}
	else
	{
		kegiatandetail.pop();
		kegiatandetail.push({'kegiatandetailid':kegiatandetailid, 'kegiatandetailnama':kegiatandetailnama, 'kegiatandetailsat':kegiatandetailsat, 'kegiatandetailjp':kegiatandetailjp});
	}
	
	document.getElementById('kegiatanDetailNama').value = kegiatandetail[0].kegiatandetailnama;
	document.getElementById('kegiatanDetailSat').value = kegiatandetail[0].kegiatandetailsat;
	if(nilai == 0)
	{
		$('#myModal13').modal('hide');
		document.getElementById('judulPenugasan').value = kegiatandetail[0].kegiatandetailnama;
			
	}
	else
	{
		$('#myModal14').modal('hide');
	}
	
	
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


//BENG
function viewKonversi(id)
{
	var uri, i, str, j;
	arrSplit = id.split(';');
	jadwalid = arrSplit[1];
	mataajarname = arrSplit[2];
	nomorst = arrSplit[3];
	tanggalst = arrSplit[4];
	tanggalkegiatan = arrSplit[5];
	tanggalselesai = tanggalkegiatan;
	document.getElementById('nomorST').value = nomorst;
	document.getElementById('tanggalST').value = tanggalst;
	document.getElementById('tanggalKegiatan').value = tanggalkegiatan;
	document.getElementById('tanggalSelesai').value = tanggalselesai;
	$('#nomorST').attr('readonly', true);
	$('#tanggalST').attr('readonly', true);
	$('#tanggalST').attr('disabled', true);
	$('#tanggalKegiatan').attr('readonly', true);
	$('#tanggalKegiatan').attr('disabled', true);
	$('#tanggalSelesai').attr('readonly', true);
	$('#tanggalSelesai').attr('disabled', true);
	
	//removeAttr()
	if(idkonversibefore == '')
	{
		idkonversibefore = 'tr;'+jadwalid+';'+mataajarname;
		document.getElementById(idkonversibefore).style.backgroundColor = '#26A69A';
	}
	else
	{
		document.getElementById(idkonversibefore).style.backgroundColor = '#FFF';
		idkonversibefore = 'tr;'+jadwalid+';'+mataajarname;
		document.getElementById(idkonversibefore).style.backgroundColor = '#26A69A';
	}
	
	
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('tableListKonversi').style.display = 'block';
					document.getElementById('titleTableListKonversi').innerHTML = 'Data Konversi Kegiatan Kediklatan Mata Ajar : '+mataajarname;
					uri = '<?php echo base_url() ?>konversikegiatan/ambilkonversijadwal/'+jadwalid;
					console.log(uri);
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
									j = i + 1;
									str += '<tr><td>'+j+'</td><td>'+data[i].kegiatanHeadnama+' ('+data[i].kegiatanDetailNama+')'+'</td><td>'+data[i].judulPenugasan+'</td><td>'+data[i].namaAlatPeraga+'</td><td>'+data[i].tanggalKegiatan+'</td><td>'+data[i].volume+'</td><td>'+data[i].kegiatanDetailSat+'</td><td>'+data[i].kegiatanDetailJP+'</td><td><button type="button" class="btn btn-warning" id="ubahkonversi;'+data[i].konversiID+';'+data[i].kegiatanDetailID+';'+data[i].kegiatanDetailNama+';'+data[i].kegiatanDetailSat+';'+data[i].kegiatanDetailJP+';'+data[i].volume+';'+data[i].judulPenugasan+';'+data[i].namaAlatPeraga+';'+data[i].tanggalKegiatan+';'+data[i].tanggalSelesai+';'+data[i].nomorST+';'+data[i].tanggalST+';0" onclick="ubahKonversi(this.id);"><i class="fa fa-pencil"></i></button></td><td><button type="button" class="btn btn-danger" id="hapuskonversi;'+data[i].konversiID+'" onclick="hapusKonversi(this.id);"><i class="fa fa-close"></i></td></tr>';
									i++;
								}
								document.getElementById('bodyTableListKonversi').innerHTML = str;	
						}
					});
				}, 300);
				document.getElementById('tableListKonversi').className = 'pesanmuncul';
			}, 300);
			document.getElementById('tableListKonversi').style.display = 'none';
			document.getElementById('formKonversi').style.display = 'none';
		}, 300);
		document.getElementById('tableListKonversi').className = 'pesanhilang';
		document.getElementById('formKonversi').className = 'pesanhilang';
	}, 300);
}

function tambahKonversi()
{
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('formKonversi').style.display = 'block';
					document.getElementById('titleFormKonversi').innerHTML = 'Tambah Kegiatan Konversi';
					document.getElementById('footerFormKonversi').innerHTML = '<button type="button" class="btn btn-primary" onclick="simpanKonversi();"><i class="fa fa-save"></i> Simpan</button>';
				}, 300);
				document.getElementById('formKonversi').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formKonversi').style.display = 'none';
		}, 300);
		document.getElementById('formKonversi').className = 'pesanhilang';
	}, 300);
}

function simpanKonversi()
{
	var volume, namaalatperaga, judulpenugasan;
	volume = document.getElementById('volume').value;
	tanggalkegiatan = document.getElementById('tanggalKegiatan').value;
	namaalatperaga = document.getElementById('namaAlatPeraga').value;
	judulpenugasan = document.getElementById('judulPenugasan').value;
	nomorst = document.getElementById('nomorST').value;
	tanggalst = document.getElementById('tanggalST').value;
	tanggalselesai = document.getElementById('tanggalSelesai').value;
	
	if(volume == '')
	{
		alert('Anda Belum mengisi Volume');
	}
	else if(kegiatandetail.length == 0)
	{
		alert('Anda Belum memilih kegiatan konversi');
	}
	else if (tanggalkegiatan == '')
	{
		alert('Anda Belum Mengisi Tanggal Kegiatan');
	}
	else
	{
		var uri = '<?php echo base_url() ?>konversikegiatan/tambahdata/'+kegiatandetailid+'/'+volume+'/'+tanggalkegiatan+'/?judulpenugasan='+judulpenugasan+'&namaalatperaga='+namaalatperaga+'&nomorst='+nomorst+'&tanggalst='+tanggalst+'&jadwalid='+jadwalid+'&tanggalselesai='+tanggalselesai+'&konversimonth=<?php echo $thisMonth;?>&konversiyear=<?php echo $thisYear ?>';
		console.log(uri);
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if(data.success == 1)
				{
					
					refreshPage('<?php echo base_url(); ?>konversikegiatan/?jadwalid='+jadwalid+'&month=<?php echo $thisMonth;?>&year=<?php echo $thisYear ?>&mataajarname='+mataajarname+'&nomorst='+nomorst+'&tanggalst='+tanggalst+'&tanggalkegiatan='+tanggalkegiatan);	
				}
				else
				{
					alert('Gagal Pindah Jadwal');
				}
			}
		});
	}
}

function onTampil()
{
	var bulan = $('#selectBulan').val();
	var tahun = $('#selectTahun').val();
	var uri = '';
	
	uri = '<?php echo base_url();?>konversikegiatan?month='+bulan+'&year='+tahun;
	
	refreshPage(uri);
}

function ubahKonversi(id)
{
	var volume, tanggalkegiatan, namaalatperaga, judulpenugasan;
	arrSplit = id.split(';');
	konversiid = arrSplit[1];
	kegiatandetailid = arrSplit[2];
	kegiatandetailnama = arrSplit[3];
	kegiatandetailsat = arrSplit[4];
	kegiatandetailjp = arrSplit[5];
	volume = arrSplit[6];
	judulpenugasan = arrSplit[7];
	namaalatperaga = arrSplit[8];
	tanggalkegiatan = arrSplit[9];
	tanggalselesai = arrSplit[10];
	nomorst = arrSplit[11];
	tanggalst = arrSplit[12];
	nilai = arrSplit[13];
	
	document.getElementById('kegiatanDetailNama').value = kegiatandetailnama;
	document.getElementById('kegiatanDetailSat').value = kegiatandetailsat;
	//document.getElementById('kegiatanDetailJP').value = kegiatandetailjp;
	document.getElementById('judulPenugasan').value = judulpenugasan;
	document.getElementById('namaAlatPeraga').value = namaalatperaga;
	document.getElementById('tanggalKegiatan').value = tanggalkegiatan;
	document.getElementById('volume').value = volume;
	document.getElementById('tanggalSelesai').value = tanggalselesai;
	document.getElementById('nomorST').value = nomorst;
	document.getElementById('tanggalST').value = tanggalst;
	if (nilai == '0')
	{
		$('#nomorST').attr('readonly', true);
		$('#tanggalST').attr('readonly', true);
		$('#tanggalST').attr('disabled', true);
		$('#tanggalKegiatan').attr('readonly', true);
		$('#tanggalKegiatan').attr('disabled', true);
		$('#tanggalSelesai').attr('readonly', true);
		$('#tanggalSelesai').attr('disabled', true);
	}
	else
	{
		$('#nomorST').removeAttr('readonly');
		$('#tanggalST').removeAttr('readonly');
		$('#tanggalST').removeAttr('disabled');
		$('#tanggalKegiatan').removeAttr('readonly');
		$('#tanggalKegiatan').removeAttr('disabled');
		$('#tanggalSelesai').removeAttr('readonly');
		$('#tanggalSelesai').removeAttr('disabled');
	}
		
	if(kegiatandetail.length == 0)
	{
		kegiatandetail.push({'kegiatandetailid':kegiatandetailid, 'kegiatandetailnama':kegiatandetailnama, 'kegiatandetailsat':kegiatandetailsat, 'kegiatandetailjp':kegiatandetailjp});
	}
	else
	{
		kegiatandetail.pop();
		kegiatandetail.push({'kegiatandetailid':kegiatandetailid, 'kegiatandetailnama':kegiatandetailnama, 'kegiatandetailsat':kegiatandetailsat, 'kegiatandetailjp':kegiatandetailjp});
	}

	
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('formKonversi').style.display = 'block';
					document.getElementById('titleFormKonversi').innerHTML = 'Ubah Kegiatan Konversi';
					document.getElementById('footerFormKonversi').innerHTML = '<button type="button" class="btn btn-warning" onclick="ubahKonversiConfirm();"><i class="fa fa-save"></i> Simpan Perubahan</button>';
				}, 300);
				document.getElementById('formKonversi').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formKonversi').style.display = 'none';
		}, 300);
		document.getElementById('formKonversi').className = 'pesanhilang';
	}, 300);
}

function hapusKonversi(id)
{
	arrSplit = id.split(';');
	konversiid = arrSplit[1];
	$('#myModal1').modal('show');
}

function hapusKonversiConfirm()
{
	$('#myModal1').modal('hide');
	var uri = '<?php echo base_url() ?>konversikegiatan/hapusdata/'+konversiid+'/';
	console.log(uri);
	$.ajax({
		type: 'get',
		url: uri,
		dataType: 'json',
		success: function (data) 
		{
			if(data.success == 1)
			{
				
				refreshPage('<?php echo base_url(); ?>konversikegiatan/?jadwalid='+jadwalid+'&month=<?php echo $thisMonth;?>&year=<?php echo $thisYear ?>&mataajarname='+mataajarname+'&nomorst='+nomorst+'&tanggalst='+tanggalst+'&tanggalkegiatan='+tanggalkegiatan);	
			}
			else
			{
				alert('Gagal Pindah Jadwal');
			}
		}
	});
}


function ubahKonversiConfirm()
{
	var volume, tanggalkegiatan, namaalatperaga, judulpenugasan;
	volume = document.getElementById('volume').value;
	tanggalkegiatan = document.getElementById('tanggalKegiatan').value;
	namaalatperaga = document.getElementById('namaAlatPeraga').value;
	judulpenugasan = document.getElementById('judulPenugasan').value;
	nomorst = document.getElementById('nomorST').value;
	tanggalst = document.getElementById('tanggalST').value;
	tanggalselesai = document.getElementById('tanggalSelesai').value
	
	if(volume == '')
	{
		alert('Anda Belum mengisi Volume');
	}
	else if(kegiatandetail.length == 0)
	{
		alert('Anda Belum memilih kegiatan konversi');
	}
	else if (tanggalkegiatan == '')
	{
		alert('Anda Belum Mengisi Tanggal Kegiatan');
	}
	else
	{
		var uri = '<?php echo base_url() ?>konversikegiatan/ubahdata/'+konversiid+'/'+kegiatandetailid+'/'+volume+'/'+tanggalkegiatan+'/?judulpenugasan='+judulpenugasan+'&namaalatperaga='+namaalatperaga+'&nomorst='+nomorst+'&tanggalst='+tanggalst+'&tanggalselesai='+tanggalselesai;
		console.log(uri);
		$.ajax({
			type: 'get',
			url: uri,
			dataType: 'json',
			success: function (data) 
			{
				if(data.success == 1)
				{
					
					refreshPage('<?php echo base_url(); ?>konversikegiatan/?jadwalid='+jadwalid+'&month=<?php echo $thisMonth;?>&year=<?php echo $thisYear ?>&mataajarname='+mataajarname+'&nomorst='+nomorst+'&tanggalst='+tanggalst+'&tanggalkegiatan='+tanggalkegiatan);	
				}
				else
				{
					alert('Gagal Pindah Jadwal');
				}
			}
		});
	}
}

function newTab(url)
{
	var win = window.open(url, '_blank');
	win.focus();
}

function cetakKartuKendali()
{
	var uri = '<?php echo base_url() ?>cetakkartukendali/?month=<?php echo $thisMonth;?>&year=<?php echo $thisYear;?>';
	newTab(uri);
}

function cetakLaporanKegiatan()
{
	var uri = '<?php echo base_url() ?>cetaklaporankegiatan/?month=<?php echo $thisMonth;?>&year=<?php echo $thisYear;?>';
	newTab(uri);
}

function inputKegiatanNonKediklatan()
{
	$('#nomorST').removeAttr('readonly');
	$('#tanggalST').removeAttr('readonly');
	$('#tanggalST').removeAttr('disabled');
	$('#tanggalKegiatan').removeAttr('readonly');
	$('#tanggalKegiatan').removeAttr('disabled');
	$('#tanggalSelesai').removeAttr('readonly');
	$('#tanggalSelesai').removeAttr('disabled');
	jadwalid = '';
	nilai = 1;
	document.getElementById('nomorST').value = '';
	document.getElementById('tanggalST').value = '';
	document.getElementById('tanggalKegiatan').value = '';
	document.getElementById('tanggalSelesai').value = '';
	document.getElementById('nomorST').value = '';
	setTimeout(function(){
		setTimeout(function(){
			setTimeout(function(){
				setTimeout(function(){
					var $target = $('html,body'); 
					$target.animate({scrollTop: $target.height()}, 1000);
					document.getElementById('formKonversi').style.display = 'block';
					document.getElementById('titleFormKonversi').innerHTML = 'Tambah Kegiatan Konversi';
					document.getElementById('footerFormKonversi').innerHTML = '<button type="button" class="btn btn-primary" onclick="simpanKonversi();"><i class="fa fa-save"></i> Simpan</button>';
				}, 300);
				document.getElementById('formKonversi').className = 'pesanmuncul';
			}, 300);
			document.getElementById('formKonversi').style.display = 'none';
		}, 300);
		document.getElementById('formKonversi').className = 'pesanhilang';
	}, 300);
}
</script>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Hapus Konversi Kegiatan</h4>
			</div>
			<div class="modal-body">
				Apakah Anda Yakin Akan Menghapus Kegiatan Konversi ?			
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" onclick="hapusKonversiConfirm()"> Hapus</button>
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
				<h4 class="modal-title" id="myModalLabel">List Konversi Kegiatan</h4>
			</div>
			<div class="modal-body">
				<table id="example3" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Nama Kegiatan</th>
					  <th>Satuan</th>
					  <th>JP</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						foreach($details as $detail)
						{
							?>
							<tr id="<?php echo $detail->kegiatanDetailID;?>;<?php echo $detail->kegiatanDetailNama;?>;<?php echo $detail->kegiatanSatuanName;?>;<?php echo $detail->kegiatanDetailJP;?>" onclick="pilihKegiatan(this.id)" style="cursor: pointer;">
								<td><?php echo $detail->kegiatanDetailNama;?></td>
								<td><?php echo $detail->kegiatanSatuanName;?></td>
								<td><?php echo $detail->kegiatanDetailJP;?></td>
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
				<button type="button" class="btn btn-primary" id="btnPilihKegiatan" onclick="pilihKegiatanOk();"> Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">List Konversi Kegiatan</h4>
			</div>
			<div class="modal-body">
				<table id="example4" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Nama Kegiatan</th>
					  <th>Satuan</th>
					  <th>JP</th>
					</tr>
					
					</thead>
					<tbody>
						<?php
						foreach($detailsnon as $detail)
						{
							?>
							<tr id="<?php echo $detail->kegiatanDetailID;?>;<?php echo $detail->kegiatanDetailNama;?>;<?php echo $detail->kegiatanSatuanName;?>;<?php echo $detail->kegiatanDetailJP;?>" onclick="pilihKegiatan(this.id)" style="cursor: pointer;">
								<td><?php echo $detail->kegiatanDetailNama;?></td>
								<td><?php echo $detail->kegiatanSatuanName;?></td>
								<td><?php echo $detail->kegiatanDetailJP;?></td>
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
				<button type="button" class="btn btn-primary" id="btnPilihKegiatan" onclick="pilihKegiatanOk();"> Pilih</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>	
			</div>
		</div>
	</div>
</div>


<div class="content-wrapper">
<!-- Main content -->
    <section class="content">
	  <h3>
			Konversi Kegiatan
			<small>&nbsp</small>
		</h3>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li><a onclick="refreshPage('<?php echo base_url(); ?>konversikegiatan');" style="cursor:pointer;"><i class="fa fa-calendar"></i> Konversi Kegiatan</a></li>
			
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
				
				<!--  <label>Sumber Biaya</label>
				<div class="form-group input-group">
                    <input class="form-control" type="text" name="biayaName" id="biayaName">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i></button></span>
                </div> -->
				
				<!--  <label>Lokasi</label>
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

              <h3 class="box-title">Data Kegiatan Diklat : Periode <?php echo $monthName; ?> - <?php echo $thisYear; ?></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
                  <button type="button" onclick="cetakKartuKendali();" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;">
                  <i class="fa fa-plus"></i> Cetak Kartu Kendali</button>
                  <button type="button" onclick="cetakLaporanKegiatan();" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;">
                  <i class="fa fa-plus"></i> Cetak Laporan Kegiatan</button>
                  
              </div>
            </div>
            
            <div class="box-body">
				<table id="example1" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Diklat</th>
							<th>Tanggal Mulai</th>
							<th>Tanggal Selesai</th>
							<th>Nomor ST</th>
							<th>Tanggal ST</th>
							<th>Nama Mata Ajar</th>
							<th>Tanggal Pelaksanaan</th>
							<th>Lokasi</th>
							<th>JP</th>
							<th>Konversi</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if($kaldiks)
						{
							$i = 1;
							foreach ($kaldiks as $kaldik)
							{
								?>
								<tr id="tr;<?php echo $kaldik->jadwalID;?>;<?php echo $kaldik->mataAjarName;?>">
									<td><?php echo $i;?></td>
									<td><?php echo $kaldik->kaldikDesc;?></td>
									<td><?php echo $kaldik->startDate;?></td>
									<td><?php echo $kaldik->endDate;?></td>
									<td><?php echo $kaldik->nomorST;?></td>
									<td><?php echo $kaldik->tanggalST;?></td>
									<td><?php echo $kaldik->mataAjarName;?></td>
									<td><?php echo $kaldik->tanggalRStr;?></td>
									<td><?php echo $kaldik->diklatLocName;?></td>
									<td><?php echo $kaldik->jamlatR?></td>
									<td>
									<?php 
									if((int)$kaldik->countKonversi == 0)
									{
										?>
										<button type="button" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Memiliki <?php echo $kaldik->countKonversi;?> Kegiatan Konversi" id="viewkonversi;<?php echo $kaldik->jadwalID;?>;<?php echo $kaldik->mataAjarName;?>;<?php echo $kaldik->nomorST;?>;<?php echo $kaldik->tanggalST;?>;<?php echo $kaldik->tanggalR;?>" onclick="viewKonversi(this.id)"><i class="fa fa-table"></i></button>
										<?php	
									}
									else
									{
										?>
										<button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Memiliki <?php echo $kaldik->countKonversi;?> Kegiatan Konversi" id="viewkonversi;<?php echo $kaldik->jadwalID;?>;<?php echo $kaldik->mataAjarName;?>;<?php echo $kaldik->nomorST;?>;<?php echo $kaldik->tanggalR;?>;<?php echo $kaldik->tanggalR;?>" onclick="viewKonversi(this.id)"><i class="fa fa-table"></i></button>
										<?php
									}
									
									?>
									</td>
								</tr>
								<?php
								$i++;
							}
						}
						?>
					</tbody>
				</table>		
            </div>
            
            <div class="box-footer clearfix no-border">
              
            </div>
          </div>
		  </div>
	  </div>
	  
	  <div class="row">
		<div class="col-xs-12" style="display:none;" id="tableListKonversi">
			<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleTableListKonversi"></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
                  <button type="button" onclick="tambahKonversi();" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;">
                  <i class="fa fa-plus"></i> Tambah Kegiatan Kediklatan Konversi</button>
              </div>
            </div>
            
            <div class="box-body">
				<table id="example2" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kegiatan</th>
							<th>Judul</th>
							<th>Alat Peraga</th>
							<th>Tanggal</th>
							<th>Vol</th>
							<th>Sat</th>
							<th>JP</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody id="bodyTableListKonversi">
						
					</tbody>
				</table>		
            </div>
            
            <div class="box-footer clearfix no-border">
              
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

              <h3 class="box-title">Kegiatan Non Kediklatan</h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
                  <button type="button" onclick="inputKegiatanNonKediklatan();" class="btn btn-primary btn-sm pull-right" style="margin-right: 5px;">
                  <i class="fa fa-plus"></i> Input Kegiatan Non Kediklatan</button>
              </div>
            </div>
            
            <div class="box-body">
				<table id="example5" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kegiatan</th>
							<th>Judul</th>
							<th>Alat Peraga</th>
							<th>Tanggal Mulai</th>
							<th>Tanggal Selesai</th>
							<th>Vol</th>
							<th>Sat</th>
							<th>JP</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if($nondiklats)
						{
							$i = 1;
							foreach ($nondiklats as $nondiklat)
							{
								
								
								?>
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $nondiklat->kegiatanDetailNama;?></td>
									<td><?php echo $nondiklat->judulPenugasan;?></td>
									<td><?php echo $nondiklat->namaAlatPeraga;?></td>
									<td><?php echo $nondiklat->tanggalKegiatan;?></td>
									<td><?php echo $nondiklat->tanggalSelesai;?></td>
									<td><?php echo $nondiklat->volume;?></td>
									<td><?php echo $nondiklat->kegiatanSatuanName;?></td>
									<td><?php echo $nondiklat->kegiatanDetailJP;?></td>
																																											
									<td><button type="button" class="btn btn-warning" id="ubahkonversinon;<?php echo $nondiklat->konversiID?>;<?php echo $nondiklat->kegiatanDetailID;?>;<?php echo $nondiklat->kegiatanDetailNama;?>;<?php echo $nondiklat->kegiatanDetailSat;?>;<?php echo $nondiklat->kegiatanDetailJP;?>;<?php echo $nondiklat->volume?>;<?php echo $nondiklat->judulPenugasan;?>;<?php echo $nondiklat->namaAlatPeraga?>;<?php echo $nondiklat->tanggalKegiatan;?>;<?php echo $nondiklat->tanggalSelesai;?>;<?php echo $nondiklat->nomorST;?>;<?php echo $nondiklat->tanggalST?>;1" onclick="ubahKonversi(this.id)"><i class="fa fa-pencil"></i></button></td>
									<td><button type="button" class="btn btn-danger" id="hapuskonversinon;<?php echo $nondiklat->konversiID?>" onclick="hapusKonversi(this.id);"><i class="fa fa-close"></i></button></td>
								</tr>
								<?php
								$i++;
							}
						}
						?>
					</tbody>
				</table>		
            </div>
            
            <div class="box-footer clearfix no-border">
              
            </div>
          </div>
		  </div>
	</div>
	
	
	<div class="row">
		<div class="col-xs-12" style="display:none;" id="formKonversi">
			<div class="col-xs-12">
			<div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title" id="titleFormKonversi"></h3>

              <div class="box-tools pull-right">
				<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>  
              </div>
            </div>
            
            <div class="box-body">
            	<div class="form-group">
					<label>Nomor ST</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
					<input class="form-control" type="text" name="nomorST" id="nomorST" readonly="true">
				</div>
				<label>Tanggal ST</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					<input type="text" class="form-control pull-right" id="tanggalST">
				</div>
				<label>Nama Kegiatan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
					<input class="form-control" type="text" name="kegiatanDetailNama" id="kegiatanDetailNama" readonly="true">
					<span class="input-group-btn"><button class="btn btn-primary"  type="button" onclick="showModal();"><i class="fa fa-search"></i></button></span>
				</div>
				<div class="form-group">
                     <label>Judul Penugasan</label>
                     <input class="form-control" type="text" name="judulPenugasan" id="judulPenugasan">
                </div>
                <div class="form-group">
                     <label>Nama Alat Peraga</label>
                     <input class="form-control" type="text" name="namaAlatPeraga" id="namaAlatPeraga">
                </div>
				<label>Tanggal Penugasan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					<input type="text" class="form-control pull-right" id="tanggalKegiatan">
				</div>
				
				<label>Tanggal Selesai Penugasan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					<input type="text" class="form-control pull-right" id="tanggalSelesai">
				</div>
				
				<div class="col-xs-12">&nbsp</div>	
				<label>Volume</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
					<input class="form-control" type="number" name="volume" id="volume">
				</div>
				<label>Satuan</label>&nbsp&nbsp<i class="fa fa-star text-red"></i>
				<div class="form-group input-group">
					<input class="form-control" type="text" name="kegiatanDetailSat" id="kegiatanDetailSat" readonly="true">
				</div>
            </div>
            
            <div class="box-footer clearfix no-border" id="footerFormKonversi">
              	
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
	
	$('#example1').dataTable();
	$('#example5').dataTable();
	$('#example3').dataTable({
		"searching":true,
		"ordering":false,
		"autoWidth":true,
		"preDrawCallback": function( settings ) 
		  {
			if(idKegiatanDetailBefore != '')
			{
				if(document.getElementById(idKegiatanDetailBefore) != null)
				{
					document.getElementById(idKegiatanDetailBefore).style.backgroundColor = "#fff";
				}
			}
		  }
		});
	
	$('#example4').dataTable({
		"searching":true,
		"ordering":false,
		"autoWidth":true,
		"preDrawCallback": function( settings ) 
		  {
			if(idKegiatanDetailBefore != '')
			{
				if(document.getElementById(idKegiatanDetailBefore) != null)
				{
					document.getElementById(idKegiatanDetailBefore).style.backgroundColor = "#fff";
				}
			}
		  }
		});
		
	<?php
	if($jadwalID)
	{
		?>
		viewKonversi('viewmataajar;<?php echo $jadwalID; ?>;<?php echo $mataAjarName; ?>;<?php echo $nomorST;?>;<?php echo $tanggalST;?>;<?php echo $tanggalKegiatan;?>');	
		<?php
	}
	?>
	$( function() {
		$("#datepickerst").datepicker(
		{
					format: 'yyyy-mm-dd',
					autoclose: true,
					daysOfWeekDisabled : '0,7'
		});
		$("#tanggalKegiatan").datepicker(
		{
					format: 'yyyy-mm-dd',
					autoclose: true,
					daysOfWeekDisabled : '0,7'
		});

		$("#tanggalSelesai").datepicker(
		{
				format: 'yyyy-mm-dd',
				autoclose: true,
				daysOfWeekDisabled : '0,7'
		});
		
		$("#tanggalST").datepicker(
		{
					format: 'yyyy-mm-dd',
					autoclose: true,
					daysOfWeekDisabled : '0,7'
		});
	});
 </script>
 <script src="<?php echo base_url();?>assets/lte/plugins/dragscroll/dragscroll.js"></script>