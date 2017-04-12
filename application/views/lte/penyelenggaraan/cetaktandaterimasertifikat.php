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
  margin-top:3.5cm;
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
  top: 10;
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
	}
	
	foreach ($pesertas as $peserta)
	{
		if($peserta->jabatanGroupFullName == 'TNI' || $peserta->jabatanGroupFullName == 'POLRI')
		{
			$txtNIP = 'NRP';
		}
		else
		{
			$txtNIP = 'NIP';
		}
	}
?>
</script>  
</head>

<body>

<div id="header">
	<div style="font-size: 8pt;text-align:center;width:42%;font-weight:normal;">BADAN PENGAWASAN KEUANGAN DAN PEMBANGUNAN<br>PUSAT PENDIDIKAN DAN PELATIHAN</div>
	<div style="font-size: 14pt;margin-top:10px;">TANDA TERIMA SERTIFIKAT</div>
	<div style="font-size: 12pt;">DIKLAT <?php echo $diklatTypeName; ?></div>
	<div style="font-size: 12pt;"><?php echo $kaldikDesc; ?></div>
	<div style="font-size: 12pt;"><?php echo $Tgl; ?></div>
</div>



<table style="width: 100%;font-size:9pt;margin-top:20px;">
	<thead>
	<tr>
		<td style="border:1px solid #000;padding:5px;font-weight:bold;width:5%;">No</td>
		<td style="border:1px solid #000;padding:5px;font-weight:bold;text-align:center;width:30%;">Nama</td>
		<td style="border:1px solid #000;padding:5px;font-weight:bold;text-align:center;width:25%;"><?php echo $txtNIP; ?></td>
		<td style="border:1px solid #000;padding:5px;font-weight:bold;text-align:center;width:35%;">Unit Organisasi</td>
		<td style="border:1px solid #000;padding:5px;font-weight:bold;text-align:center;width:15%;">Tanda Tangan</td>
	</tr>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach ($pesertas as $peserta)
	{
		?>
		<tr>
			<td style="border:1px solid #000;padding:5px;"><?php echo $i;?></td>
			<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->namaAbsen;?></td>
			<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $peserta->pesertaNIPStr;?></td>
			<?php 
			if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
			{
				?>
				<td style="border:1px solid #000;padding:5px;text-align:left;"><?php echo $peserta->unitName;?></td>
				<?php
			}
			else
			{
				?>
				<td style="border:1px solid #000;padding:5px;text-align:left;"><?php echo $peserta->pesertaKetUnitKerja;?></td>
				<?php
			}
			?>
			
			<?php
			if($i % 2 == 1)
			{
				?>
				<td style="border:1px solid #000;padding:5px;text-align:left;"><?php echo $i?> ........</td>
				<?php
			}
			else 
			{
				?>
				<td style="border:1px solid #000;padding:5px;text-align:right;"><?php echo $i?> ........</td>
				<?php
			}
			?>			
			
		</tr>
		<?php
		$i++;
	}
	?>
	</tbody>
</table>


<div id="footer">
  <div class="page-number"></div>
</div>


</body>
</html>
