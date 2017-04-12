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
  page-break-inside: avoid;
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
	foreach ($kurikulums as $kurikulum)
	{
		$kurikulumName = $kurikulum->kurikulumName;
		$kurikulumTypeName = $kurikulum->kurikulumTypeName;
	}
?>
</script>  
</head>

<body>

<div id="header">
	<div class="beng-12" style="font-size: 14pt;text-align:center">LIST MATERI KURIKULUM</div>
	<div class="beng-12" style="font-size: 14pt;text-align:center"><?php echo $kurikulumName;?></div>
	<div class="beng-12" style="font-size: 14pt;text-align:center"><?php echo $kurikulumTypeName;?></div>    
</div>

<?php 
if($details)
{
	?>
	<table style="width: 100%;">
		<thead>
			<tr>
				<th style="border:1px solid #000;padding:5px;">No</th>
				<th style="border:1px solid #000;padding:5px;">Nama Mata Ajar</th>
				<th style="border:1px solid #000;padding:5px;">Jam Lat</th>
				<th style="border:1px solid #000;padding:5px;">Sesi</th>
				<th style="border:1px solid #000;padding:5px;">Hari Ke</th>
				<th style="border:1px solid #000;padding:5px;">Jam Ke</th>
				<th style="border:1px solid #000;padding:5px;">Jam Mulai</th>
				<th style="border:1px solid #000;padding:5px;">Jam Selesai</th>
			</tr>
		</thead>
		<tbody>
			
				<?php 
				$i = 1;
				foreach ($details as $detail)
				{
					?>
					<tr>
					<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $i;?></td>
					<?php 
					if($detail->subMataAjar != '' || $detail->subMataAjar != null)
					{
						?>
						<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $detail->subMataAjar;?></td>
						<?php	
					}
					else
					{
						?>
						<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $detail->mataAjarName;?></td>
						<?php
					}
					?>
					<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $detail->jamlat;?></td>
					<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $detail->sesiName;?></td>
					<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $detail->harike;?></td>
					<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $detail->jamke;?></td>
					<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $detail->jamMulaiBiasa;?></td>
					<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $detail->jamSelesaiBiasa;?></td>
					</tr>
					<?php	
					$i++;
				}
				?>
			
		</tbody>
	</table>
	<?php 	
}
?>

<div id="footer">
  <div class="page-number"></div>
</div>


</body>
</html>
