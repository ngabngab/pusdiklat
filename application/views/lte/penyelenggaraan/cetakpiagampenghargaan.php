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
  margin-top:4cm;
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


<table style="width:100%;margin-top:20px;text-align: center;">
	<tr>
		<td><img src="http://localhost/simdiklat5/assets/img/logobpkp.png"></td>
	</tr>
	<tr>
		<td style="font-size: 16pt;font-weight: bold;padding-top:20px;">PIAGAM PENGHARGAAN</td>
	</tr>
	<tr>
		<td style="text-align: left;margin-top:10px;">Yang bertanda tangan dibawah ini menerangkan bahwa : </td>
	</tr>
</table>
<table style="width:100%;margin-top:20px;">
	<tr>
		<td style="font-size: 13pt;text-align:left;width:190px;">Nama<span style="padding-left: 123px;">:</span></td>
		<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $peserta->namaAbsen; ?></td>
	</tr>
	<tr>
		<td style="font-size: 13pt;text-align:left;width:190px;">NIP<span style="padding-left: 140px;">:</span></td>
		<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $pesertaNIP; ?></td>
	</tr>
	<tr>
		<td style="font-size: 13pt;text-align:left;width:190px;">Tempat/Tanggal Lahir:</td>
		<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $peserta->pesertaPOB; ?>, <?php echo $peserta->pesertaDOB;?></td>
	</tr>
	<tr>
		
		<td style="font-size: 13pt;text-align:left;width:190px;">Pangkat, Golongan<span style="padding-left: 21px;">:</span></td>
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
		<td style="font-size: 13pt;text-align:left;width:190px;">Jabatan<span style="padding-left: 108px;">:</span></td>
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
		<td style="font-size: 13pt;text-align:left;width:190px;">Instansi<span style="padding-left: 110px;">:</span></td>
		<td style="font-size: 13pt;text-align:left;font-family: Serif;font-style: italic;"><?php echo $pesertaUnit; ?></td>
	</tr>
	
</table>
<table style="width:100%;margin-top:10px;">
	<tr>
		<td style="font-size: 12pt;text-align:left;">Telah Menyelesaikan Pendidikan dan Pelatihan <?php echo $kaldikDesc; ?> dengan prestasi istimewa peringkat <?php echo $peserta->peringkat;?></td>
	</tr>
</table>

<table align="center" cellspacing="0" cellpadding="0" style="margin-top:20px;">
	<tr>
		<td>
			<table style="width:100%;padding:0;">
				<tr>
					<td style="padding-right:80px;text-align:center;visibility: hidden;">
						<div style="width:2.4cm;height: 2.8cm;border:1px solid #000;text-align:center;">
							<br>
							PAS
							<br>
							PHOTO
							<br>
							<br>
							3 x 4
						</div>
					</td>
					<td></td>
					<td style="padding-left:80px;text-align:center;">
						<div style="font-size: 13pt;"><?php echo $namaJabatan;?>,</div>
						<br>
						<br>
						<br>
						<br>
						<div style="font-size: 13pt;"><?php echo $namaKapus;?></div>
						<div style="font-size: 13pt;line-height: 100%;">NIP <?php echo $nipKapus;?></div>
					</td>
				</tr>
			</table>					
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
