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
  margin-bottom:0.5cm;
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

.txt-footerttd {
  page-break-after: avoid;
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
	<div style="font-size: 12pt;">DAFTAR HADIR PESERTA</div>
	<div style="font-size: 10pt;"><?php echo $kaldikDesc; ?></div>
	<div style="font-size: 10pt;"><?php echo $Tgl; ?></div>
</div>

<?php 
	$k = 0;
	foreach ($jadwals as $jadwal)
	{
?>
<table style="width: 100%;font-size:9pt;text-align : left;font-weight:normal;">
	<tr>
		<td style="width: 100%;font-size:9pt;text-align : left;pading:2px;"><p style="margin:0;padding:0;">Hari / Tanggal: <?php echo $jadwal->namaHari; ?> / <?php echo $jadwal->tanggal?></p></td>
		<td style="width: 100%;font-size:9pt;text-align : left;pading:2px;"><p style="margin:0;padding:0;">Mata Ajar<span style="padding-left: 17px;">:</span> <?php echo $jadwal->mataAjarName;?></p></td>
	</tr>
	<tr>
		<td style="width: 100%;font-size:9pt;text-align : left;pading:2px;"><p style="margin:0;padding:0;">Waktu<span style="padding-left: 41px;">:</span> <?php echo $jadwal->jamMulaiRStr; ?> - <?php echo $jadwal->jamSelesaiRStr; ?></p></td>
		<td style="width: 100%;font-size:9pt;text-align : left;pading:2px;"><p style="margin:0;padding:0;">Widyaiswara: 
				<?php
					$j = 1;
					foreach($jadwal->pengajar as $pengajar)
					{
						if($j == 1)
						{
							$ttdPengajar = $pengajar;
						}
						
						if(sizeof($jadwal->pengajar) == 1)
						{
							echo $pengajar;
						}
						else
						{
							echo $j.'. '.$pengajar.'<br>';
						}
						$j++;
					}
				?>
				</p>
		</td>
	</tr>
	<tr>
		<td style="width: 100%;font-size:9pt;text-align : left;pading:2px;"><p style="margin:0;padding:0;">Nama Kelas<span style="padding-left: 9px;">:</span> <?php echo $jadwal->namaKelas;?></p></td>
		<td style="width: 100%;font-size:9pt;text-align : left;pading:2px;"><p style="margin:0;padding:0;">Sesi<span style="padding-left: 45px;">:</span> <?php echo $jadwal->sesiName;?></p></td>
	</tr>
</table>

<table style="width: 100%;font-size:8pt;margin-top:5px;">
	<thead>
	<tr>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;width:5%;">No</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:30%;">Nama</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:20%;">NIP / NRP</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:30%;">Unit Organisasi</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:15%;">Tanda Tangan</td>
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
<table style="width: 100%;font-size:9pt;" class="txt-footerttd">
	<tr>
		<td style="padding:2px;text-align:center;">Ketua Kelas</td>
		<td></td>
		<td style="padding:2px;text-align:center;">Instruktur / Widyaiswara</td>
	</tr>
	<tr>
		<td></td>
		<td style="padding:2px;text-align:left;">Hadir<span style="padding-left: 30px;">:</span> ......... Orang</td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td style="padding:2px;text-align:left;">Tidak hadir: ......... Orang</td>
		<td></td>
	</tr>
	<tr>
		<td style="padding:2px;text-align:center;">(................................)</td>
		<td style="padding:2px;text-align:left;">Jumlah<span style="padding-left: 20px;">:</span> ......... Orang</td>
		<td style="padding:2px;text-align:center;"><?php echo $ttdPengajar;?></td>
	</tr>
</table>
<?php 
	$k++;
	if(sizeof($jadwals) != $k)
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
