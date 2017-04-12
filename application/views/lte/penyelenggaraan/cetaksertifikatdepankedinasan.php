<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>SIMDIKLAT</title>

<style type="text/css">

@page {
	//margin: 2cm;
}

body {
  font-family: sans-serif;
  margin-top:3cm;
  margin-left:2cm;
  //margin-bottom:2cm;
  margin-right:2cm;
}

#header
{
	position: fixed;
    left: 0;
	right: 0;
	color: #000;
	text-align:center;
	align:center;
	font-weight:bold;
}
#footer {
  position: fixed;
  left: 0;
  right: 0;
  color: #000;
  font-size: 0.9em;
}

#header {
  top: 0;
}

#footer {
  bottom: 0;
}

#header table,
#footer table {
	width: 100%;
	border-collapse: collapse;
	border: none;
}

#header td,
#footer td {
	padding: 0;
	width: 50%;
}

.page-number {
  text-align: right;
}

.page-number:before {
  content: counter(page);
}

.txt-footer {
  page-break-after: always;
  border: 0;
}

#beng-12{
	width:100%;
	margin-top:10px;
	
}

#beng-6{
	width:50%;
	margin-top:10px;	
}

table { 
    border-collapse: collapse; 
}
</style>
<script>
<?php
	foreach ($kaldiks as $kaldik)
	{
	  
			$diklatName = $kaldik->diklatName;
			$kaldikDesc = $kaldik->kaldikDesc;
			$Tgl = $kaldik->tglStart.' '.$kaldik->monthStart .' S.D '.$kaldik->tglEnd.' '.$kaldik->monthEnd.' '.$kaldik->yearEnd;
			$namaKelas = $kaldik->namaKelas;
			$biayaName = $kaldik->biayaName;
			$bidangName = $kaldik->bidangShortName;
			$diklatTypeName = $kaldik->diklatTypeName;
			$year = $kaldik->yearName;
			$diklatLocName = $kaldik->diklatLocName;
			$tglStart = $kaldik->tglStart.' '.$kaldik->monthStart.' '.$kaldik->yearStart;
			$tglEnd = $kaldik->tglEnd.' '.$kaldik->monthEnd.' '.$kaldik->yearEnd;
	}
	
	foreach ($sumJamlat as $sum)
	{
		$sumJP = $sum->sumJamlat;
	}
	
	foreach ($kapuss as $kapus)
	{
		$namaJabatan = $kapus->namaJabatan;
		$namaKapus = $kapus->namaKapus;
		$nipKapus = $kapus->nipKapus;
	}
	
	foreach ($sekretaris as $sekre)
	{
		$namaJabatanSekre = $sekre->namaJabatan;
		$namaSekre = $sekre->namaSekretaris;
		$nipSekre = $sekre->nipSekretaris;
	}
	
	foreach ($pesertas as $peserta)
	{
		if($peserta->jabatanGroupFullName == 'TNI' || $peserta->jabatanGroupFullName == 'POLRI')
		{
			$txtNIP = 'NRP';
			$pesertaNIP = $peserta->pesertaNIP;
			$txtPangkat = 'Pangkat';
			
			
		}
		else
		{
			$txtNIP = 'NIP';
			
			$txtPangkat = 'Pangkat, Golongan';
			
		}
	}
?>
</script>  
</head>

<body>

<?php 
	$i = 1;
	foreach ($pesertas as $peserta)
	{
		?>
		<?php 
		if($txtNIP == 'NRP')
		{
			if($peserta->pesertaKetPangkat == null || $peserta->pesertaKetPangkat == '')
			{
				$pesertaPangkat = $peserta->pangkatName;
			}
			else
			{
				$pesertaPangkat = $peserta->pesertaKetPangkat;
			}
			$pesertaNIP = $peserta->pesertaNIP;
		}
		else
		{
			if($peserta->pesertaKetPangkat == null || $peserta->pesertaKetPangkat == '')
			{
				$pesertaPangkat = $peserta->pangkatName.', '.$peserta->GolRuang;
			}
			else
			{
				$pesertaPangkat = $peserta->pesertaKetPangkat.', '.$peserta->GolRuang;
			}
			$pesertaNIP = $peserta->pesertaNIPSpace;
		}
		
		?>
<table style="width:100%;">
	<tr>
		<td style="font-weight: bold;font-size: 18pt;text-align:center;font-family: Serif;">SURAT TANDA TAMAT PENDIDIKAN DAN PELATIHAN</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;text-align:center;">Nomor:<?php echo $peserta->nomorSertifikatLan;?></td>
	</tr>
</table>


<table style="width:100%;margin-top:10px;">
	<tr>
		<td style="font-size: 12pt;text-align: justify;">Badan Pengawasan Keuangan dan Pembangunan berdasarkan peraturan Pemerintah Nomor 101 Tahun 2000 tentang Pendidikan dan Pelatihan Jabatan Pegawai Negeri Sipil, serta ketentuan-ketentuan pelaksanaannya menyatakan bahwa :</td>
	</tr>
</table>

<table align="center">
	<tr>
		<td style="text-align: center;">
			<table style="width:100%;margin-top:10px;" align="center">
				<tr>
					<td style="font-size: 13pt;text-align:left;">Nama</td>
					<td style="font-size: 13pt;text-align:center;">:</td>
					<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $peserta->namaAbsen; ?></td>
				</tr>
				<tr>
					<td style="font-size: 13pt;text-align:left;"><?php echo $txtNIP; ?></td>
					<td style="font-size: 13pt;text-align:center;">:</td>
					<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $pesertaNIP; ?></td>
				</tr>
				<tr>
					<td style="font-size: 13pt;text-align:left;">Tempat/Tanggal Lahir</td>
					<td style="font-size: 13pt;text-align:center;">:</td>
					<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $peserta->pesertaPOB; ?>, <?php echo $peserta->pesertaDOB;?></td>
				</tr>
				<tr>
					
					<td style="font-size: 13pt;text-align:left;"><?php echo $txtPangkat; ?></td>
					<td style="font-size: 13pt;text-align:center;">:</td>
					<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $pesertaPangkat; ?></td>
				</tr>
				<tr>
					<?php 
					
					if($peserta->pesertaKetJabatan == null || $peserta->pesertaKetJabatan == '')
					{
						$pesertaJabatan = $peserta->jabatanFullName;
					}
					else
					{
						$pesertaJabatan = $peserta->pesertaKetJabatan;
					}
					
					?>
					<td style="font-size: 13pt;text-align:left;">Jabatan</td>
					<td style="font-size: 13pt;text-align:center;">:</td>
					<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $pesertaJabatan; ?></td>
				</tr>
				<tr>
					<?php 
					if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
					{
						$pesertaUnit = $peserta->unitName;
					}
					else
					{
						$pesertaUnit = $peserta->pesertaKetUnitKerja;
					}
					
					?>
					<td style="font-size: 13pt;text-align:left;">Instansi</td>
					<td style="font-size: 13pt;text-align:center;">:</td>
					<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $pesertaUnit; ?></td>
				</tr>
				<tr>
					<td style="font-size: 13pt;text-align:left;"></td>
					<td style="font-size: 13pt;text-align:center;"></td>
					<td style="font-size: 22pt;text-align:left;font-weight: bold;font-family: Serif;">LULUS</td>
				</tr>
				<tr>
					<td style="font-size: 13pt;text-align:left;">Kualifikasi</td>
					<td style="font-size: 13pt;text-align:center;">:</td>
					<td style="font-size: 16pt;text-align:left;font-family: Serif;font-style: italic;font-weight: bold;"><?php echo $peserta->kualifikasiName;?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>


<table style="width:100%;margin-top:10px;">
	<tr>
		<td style="font-size: 12pt;text-align:left;">pada Pendidikan dan Pelatihan <?php echo $kaldikDesc; ?> Angkatan <?php echo $peserta->angkatan;?> yang diselenggarakan oleh Pusat Pendidikan dan Pelatihan Pengawasan BPKP dari tanggal <?php echo $tglStart;?> s.d <?php echo $tglEnd;?> di <?php echo $diklatLocName;?> yang meliputi <?php echo $sumJP; ?> jam pendidikan dan pelatihan</td>
	</tr>
</table>

<table style="width:100%;margin-left:250px;">
	<tr>
		<td style="text-align: center;font-size: 12pt;">Bogor, <?php echo $tglEnd;?></td>
	</tr>
	<tr>
		<td style="text-align: center;font-size: 12pt;">Badan Pengawasan Keuangan dan Pembangunan</td>
	</tr>
	<tr>
		<td style="text-align: center;font-size: 12pt;">
			<div><?php echo $namaJabatanSekre;?>,</div>
			<br>
			<br>
			<br>
			<div style="font-weight: bold;"><?php echo $namaSekre;?></div>
			<div>NIP <?php echo $nipSekre;?></div>
		</td>
	</tr>
</table>

		<?php 
		$i++;
		if($i <= sizeof($pesertas))
		{
		?>
			<div class="txt-footer"></div>
		<?php
		}
	}
	?>



</body>
</html>
