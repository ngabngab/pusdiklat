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
	
	foreach($kelass as $kelas)
	{
	
		$kelasName = $kelas->namaKelas;
		$nomorST = $kelas->nomorST;
		$tglSTstr = $kelas->tglSTstr;
	}
?>
</script>  
</head>

<body>

<div id="header">
	<div class="beng-12" style="font-size: 12pt;text-align:right"><?php echo $nomorST; ?></div>
	<div class="beng-12" style="font-size: 12pt;text-align:right"><?php echo $biayaName; ?></div>
    <div class="beng-12" style="font-size: 14pt;">JADWAL</div>
	<div class="beng-12" style="font-size: 14pt;"><?php echo $diklatName; ?></div>
	<div class="beng-12" style="font-size: 14pt;"><?php echo $kaldikDesc; ?></div>
	<div class="beng-12" style="font-size: 14pt;">Tanggal <?php echo $Tgl; ?></div>
	<div class="beng-12" style="font-size: 12pt;text-align:right"><?php echo $namaKelas; ?></div>
</div>





<table style="width: 100%;border:2px solid #000;" >
<thead>
	<tr>
		<th style="border:2px solid #000;padding:5px;">NO</th>
		<th style="border:2px solid #000;padding:5px;">HARI</th>
		<th style="border:2px solid #000;padding:5px;">TANGGAL</th>
		<th style="border:2px solid #000;padding:5px;">WAKTU</th>
		<th style="border:2px solid #000;padding:5px;">MATA AJAR</th>
		<th style="border:2px solid #000;padding:5px;">JAMLAT</th>
		<th style="border:2px solid #000;padding:5px;">PENGAJAR</th>
	</tr>
</thead>
<tbody>
<?php
$i = 1;
$length = sizeof($jadwals);
$total = 0;
foreach($jadwals as $jadwal)
{
		?>
		
			<?php
			if($i == 1)
			{
				?>
				<tr>
				<td style="border:1px solid #000;padding:5px;text-align:center;" rowspan="2"><?php echo $i ?></td>
				<td style="border:1px solid #000;padding:5px;text-align:center;" rowspan="2"><?php echo $jadwal->hari; ?></td>
				<td style="border:1px solid #000;padding:5px;text-align:center;" rowspan="2"><?php echo $jadwal->tanggal; ?></td>
				<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $jadwal->jamMulai.' - 09:00'; ?></td>
				<td style="border:1px solid #000;padding:5px;font-weight:bold;"><?php echo 'Pembukaan'; ?></td>
				<td style="border:1px solid #000;padding:5px;"></td>
				<td style="border:1px solid #000;padding:5px;font-weight:bold;"><?php echo 'Penyelenggara'; ?></td>
				</tr>
				
				<tr>
				<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo '09:00 - '.$jadwal->jamSelesai; ?></td>
				<td style="border:1px solid #000;padding:5px;"><?php echo $jadwal->mataAjarName; ?></td>
				<td style="border:1px solid #000;padding:5px;text-align:center;"><?php $total += (float)$jadwal->jamLat;  echo $jadwal->jamLat; ?></td>
				<td style="border:1px solid #000;padding:5px;">
				<?php
					$j = 1;
					foreach($jadwal->pengajar as $pengajar)
					{
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
				</td>
				</tr>
				<?php
			}
			else
			{
				if($i == $length)
				{
					?>
					<tr>
						<td style="border:1px solid #000;padding:5px;text-align:center;" rowspan="2"><?php echo $i ?></td>
						<td style="border:1px solid #000;padding:5px;text-align:center;" rowspan="2"><?php echo $jadwal->hari; ?></td>
						<td style="border:1px solid #000;padding:5px;text-align:center;" rowspan="2"><?php echo $jadwal->tanggal; ?></td>
						<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $jadwal->jamMulai.' - '.$jadwal->jamSelesai; ?></td>
						<td style="border:1px solid #000;padding:5px;"><?php echo $jadwal->mataAjarName; ?></td>
						<td style="border:1px solid #000;padding:5px;text-align:center;"><?php $total += (float)$jadwal->jamLat; echo $jadwal->jamLat; ?></td>
						<td style="border:1px solid #000;padding:5px;">
						<?php
						$j = 1;
						foreach($jadwal->pengajar as $pengajar)
						{
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
						</td>
					</tr>
					<?php
				}
				else 
				{
					?>
					<tr>
						<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $i ?></td>
						<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $jadwal->hari; ?></td>
						<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $jadwal->tanggal; ?></td>
						<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $jadwal->jamMulai.' - '.$jadwal->jamSelesai; ?></td>
						<td style="border:1px solid #000;padding:5px;"><?php echo $jadwal->mataAjarName; ?></td>
						<td style="border:1px solid #000;padding:5px;text-align:center;"><?php $total += (float)$jadwal->jamLat; echo $jadwal->jamLat; ?></td>
						<td style="border:1px solid #000;padding:5px;">
						<?php
							$j = 1;
							foreach($jadwal->pengajar as $pengajar)
							{
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
						</td>
					</tr>
					<?php
				}
				
			}
			?>
			
		
		<?php
		$i++;
  }
  ?>
  <tr>
		<td style="border:1px solid #000;padding:2px;text-align:center;font-size:11pt;"><?php echo '17:00 - selesai'; ?></td>
		<td style="border:1px solid #000;padding:5px;font-weight:bold;"><?php echo 'Penutupan'; ?></td>
		<td style="border:1px solid #000;padding:5px;"></td>
		<td style="border:1px solid #000;padding:5px;"><?php echo 'Penyelenggara'; ?></td>
  </tr>
  <tr>
  		<td colspan="4"></td>
		<td style="border:1px solid #000;padding:5px;font-weight:bold;text-align:center;"><?php echo 'Jumlah Jamlat'; ?></td>
		<td style="border:1px solid #000;padding:5px;font-weight:bold;text-align:center;"><?php echo $total;?></td>
		<td style="border:1px solid #000;padding:5px;"></td>
  </tr>
  <?php
?>
</tbody>
</table>

<div class="txt-footer" style="margin-top:30px;">
	<table style="width:100%;">
		<tr>
			<td>Keterangan:</td>
			<td>Tempat:</td>
		</tr>
		<tr>
			<td>Jam Istirahat:</td>
			<td>Pusdiklatwas BPKP, ciawi</td>
		</tr>
		<tr>
			<td><span style="padding-left:15px;padding-right:15px;text-align:center;">I</span>10.15 - 10.30 WIB (Hari Jumat : 09.45 - 10.00 WIB)</td>
			<td></td>
		</tr>
		<tr>
			<td><span style="padding-left:12px;padding-right:12px;text-align:center;">II</span>12.00 - 12.30 WIB (Hari Jumat : 11.30 - 13.00 WIB)</td>
			<td></td>
		</tr>
		<tr>
			<td><span style="padding-left:10px;padding-right:10px;text-align:center;">III</span>15.15 - 15.30 WIB</td>
			<td>CP: LO Pusdiklatwas (<?php echo $bidangName; ?>)</td>
		</tr>
	</table>
</div>
<div id="footer">
  <div style="text-align: center;font-weight: normal;">[FM-P2E/P2D-12-01]-[NO. REVISI: 00]-[TGL. REVISI: 14 JUNI 2011]</div>
</div>
</body>
</html>
