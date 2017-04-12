<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>SIMDIKLAT</title>

<style type="text/css">

@font-face {
    font-family: trebuc;
    src: url(http://localhost/simdiklat5/assets/fonts/trebuc.ttf);
}

@font-face {
    font-family: trebucbd;
    src: url(http://localhost/simdiklat5/assets/fonts/trebucbd.ttf);
}


@font-face {
    font-family: monotype;
    src: url(http://localhost/simdiklat5/assets/fonts/MTCORSVA.ttf);
}


@font-face {
    font-family: maiandra;
    src: url(http://localhost/simdiklat5/assets/fonts/MAIAN.ttf);
}


@font-face {
    font-family: maiandrabold;
    src: url(http://localhost/simdiklat5/assets/fonts/maiandrabold.ttf);
}

@page {
	//margin: 2cm;
}

body {
  font-family: sans-serif;
  margin-top:2.5cm;
  //margin-left:2cm;
  //margin-bottom:2cm;
  //margin-right:2cm;
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
			$bidangID = $kaldik->bidangID;
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
		<td style="font-size: 16pt;text-align:center;font-family: trebucbd;">SERTIFIKAT</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;text-align:center;font-family: maiandra;">Nomor: SERT-<?php echo $peserta->nomorSertifikat;?>/DL/<?php echo $bidangID;?>/<?php echo $year;?></td>
	</tr>
	<tr>
		<td style="font-size: 11pt;text-align:center;font-family: maiandra;">(berlaku s.d. <?php echo $peserta->tglBerlaku;?>)</td>
	</tr>
</table>

<table style="width:100%;">
	<tr>
		<td style="font-size: 12pt;text-align:center;font-family: maiandra;">Diberikan Kepada :</td>
	</tr>
	<tr>
		<td style="font-size: 24pt;text-align:center;font-family: monotype;"><?php echo $peserta->namaAbsen; ?></td>
	</tr>
</table>



<table style="width:100%;margin-left:200px;margin-right:200px;font-family:maiandra;">
	<tr>
		<td style="font-size: 12pt;text-align:left;width:180px;"><?php echo $txtNIP; ?></td>
		<td style="font-size: 12pt;text-align:center;width:30px;">:</td>
		<td style="font-size: 12pt;text-align:left;"><?php echo $pesertaNIP; ?></td>
	</tr>
	<tr>
		
		<td style="font-size: 12pt;text-align:left;width:180px;"><?php echo $txtPangkat; ?></td>
		<td style="font-size: 12pt;text-align:center;width:30px;">:</td>
		<td style="font-size: 12pt;text-align:left;"><?php echo $pesertaPangkat; ?></td>
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
		<td style="font-size: 12pt;text-align:left;width:180px;">Jabatan</td>
		<td style="font-size: 12pt;text-align:center;width:30px;">:</td>
		<td style="font-size: 12pt;text-align:left;"><?php echo $pesertaJabatan; ?></td>
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
		<td style="font-size: 12pt;text-align:left;width:180px;">Unit Organisasi</td>
		<td style="font-size: 12pt;text-align:center;width:30px;">:</td>
		<td style="font-size: 12pt;text-align:left;"><?php echo $pesertaUnit; ?></td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td style="font-size: 12pt;text-align:center;font-family: maiandra;">Telah Mengikuti Pendidikan dan Pelatihan</td>
	</tr>
	<tr>
		<td style="font-size: 16pt;text-align:center;font-family: maiandrabold;"><?php echo $diklatName; ?></td>
	</tr>
	<tr>
		<td style="font-size: 12pt;text-align:center;font-family: maiandra;"><?php echo $sumJP;?> Jam Pelatihan</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;text-align:center;font-family: maiandra;"><?php echo $diklatLocName;?>, <?php echo $tglStart;?> - <?php echo $tglEnd; ?></td>
	</tr>
</table>

<table style="width:100%;margin-left:200px;margin-right:200px;">
	<tr>
		<td>
			<div style="width:2cm;height: 2.5cm;border:1px solid #000;text-align:center;">
				PAS
				<br>
				PHOTO
				<br>
				<br>
				3 x 4
			</div>
		</td>
		<td style="text-align: center;">
			<div style="font-family: maiandrabold;font-size: 12pt;"><?php echo $namaJabatan;?>,</div>
			<br>
			<br>
			<div style="font-family: maiandrabold;font-size: 12pt;"><?php echo $namaKapus;?></div>
			<div style="font-family: maiandra;font-size: 12pt;">NIP <?php echo $nipKapus;?></div>
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
