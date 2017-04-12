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
  margin-top:2cm;
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

?>
</script>
</head>

<body>
<?php 
	$i = 1;
	foreach ($pesertas as $peserta)
	{
		?>
<table style="transform: rotate(-180deg); transform-origin: 50% 50%;width:100%;">
		<tr>
			<td style="border-top:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;padding-left:10px;text-align:left;font-size:14pt;"><?php echo $peserta->number;?></td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;padding:50px;text-align:center;font-weight:bold;font-size:32;"><?php echo $peserta->pesertaNama;?></td>
		</tr>
		<tr>
			<?php
			if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
			{
				?>
				<td style="border:1px solid #000;padding:30px;text-align:center;font-weight:bold;font-size:20pt;"><span><?php echo $peserta->unitName;?></span></td>
				<?php
			}
			else
			{
				?>
				<td style="border:1px solid #000;padding:30px;text-align:center;font-weight:bold;font-size:20pt;"><span><?php echo $peserta->pesertaKetUnitKerja;?></span></td>
				<?php
			}
			?>
		</tr>
</table>

<table style="width:100%;margin-top:20px;">
		<tr>
			<td style="border-top:1px solid #000;border-right:1px solid #000;padding-left:10px;border-left:1px solid #000;text-align:left;font-size:14pt;"><?php echo $peserta->number;?></td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid #000;border-right:1px solid #000;border-left:1px solid #000;padding:50px;text-align:center;font-weight:bold;font-size:32pt;"><?php echo $peserta->pesertaNama;?></td>	
		</tr>
		<tr>
			<?php
			if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
			{
				?>
				<td style="border:1px solid #000;padding:30px;text-align:center;font-weight:bold;font-size:20pt;"><span><?php echo $peserta->unitName;?></span></td>
				<?php
			}
			else
			{
				?>
				<td style="border:1px solid #000;padding:30px;text-align:center;font-weight:bold;font-size:20pt;"><span><?php echo $peserta->pesertaKetUnitKerja;?></span></td>
				<?php
			}
			?>
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

<div id="footer">
  <div class="page-number"></div>
</div>


</body>
</html>
