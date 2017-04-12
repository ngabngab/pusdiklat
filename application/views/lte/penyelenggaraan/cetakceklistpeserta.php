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
  margin-left:1cm;
  margin-bottom:1cm;
  margin-right:1cm;
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
	<div style="font-size: 14pt;">CEK LIST PESERTA</div>
	<div style="font-size: 12pt;"><?php echo $kaldikDesc; ?></div>
	<div style="font-size: 12pt;"><?php echo $diklatTypeName; ?></div>
	<div style="font-size: 12pt;margin-top:20px;"><?php echo $Tgl; ?></div>
</div>


<table style="width: 100%;font-size:9pt;margin-top:20px;">
	<thead>
	<tr>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:3%;">No</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:20%">Nama</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:17%">NIP / NRP</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:20%">Unit Organisasi</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:5%;">Biodata</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:5%;">Foto</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:5%;">SK Pangkat</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:5%;">SPPD</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:5%;">KSP</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:5%;">STTP</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:5%;">IJAZAH</td>
	</tr>
	</thead>
	<tbody>
	<?php 
	$i = 1;
	foreach ($pesertas as $peserta)
	{
		?>
		<tr>
			<td style="border:1px solid #000;padding:10px;"><?php echo $i;?></td>
			<td style="border:1px solid #000;padding:10px;"><?php echo $peserta->namaAbsen;?></td>
			<td style="border:1px solid #000;padding:10px;text-align:center;"><?php echo $peserta->pesertaNIPStr;?></td>
			<?php 
			if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
			{
				?>
				<td style="border:1px solid #000;padding:10px;text-align:left;"><?php echo $peserta->unitName;?></td>
				<?php
			}
			else
			{
				?>
				<td style="border:1px solid #000;padding:10px;text-align:left;"><?php echo $peserta->pesertaKetUnitKerja;?></td>
				<?php
			}
			?>
			<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;"></td>
			<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;"></td>
			<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;"></td>
			<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;"></td>
			<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;"></td>
			<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;"></td>
			<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;"></td>
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
