<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>SIMDIKLAT</title>

<style type="text/css">

@page {
  //margin: 2cm;
  margin-top:2cm;
  margin-left:3cm;
  margin-bottom:1cm;
  margin-right:2cm;
}

body {
  font-family: "Times New Roman";
  
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
  right: 0;
  color: #000;
  font-size: 0.9em;
}

#header {
  top: 0;
}

#footer {
  bottom: 100px;
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

#txt-footer {
  page-break-before: auto;
  border: 0;
}

#beng-12{
	width:100%;
	
}

#beng-6{
	width:50%;
}

table { 
    border-collapse: collapse; 
}
</style>
<?php
	foreach ($kaldiks as $kaldik)
	{
		
		$kaldikDesc = $kaldik->kaldikDesc;
		$hariStart = $kaldik->hariStart;
		$hariEnd = $kaldik->hariEnd;
		$tglStart = $kaldik->strStartDate;
		$tglEnd = $kaldik->strEndDate;
		$tempatName = $kaldik->tempatName;
		$monthStartStr = $kaldik->monthStartStr;
		$diklatTypeID = $kaldik->diklatTypeID;
		$diklatLocName = $kaldik->diklatLocName;
		$bidangShortName = $kaldik->bidangShortName;
		
	}
	
	foreach($kelass as $kelas)
	{
		
		$kelasName = $kelas->namaKelas;
		$nomorST = $kelas->nomorST;
		$tglSTstr = $kelas->tglSTstr;
	}
	
	foreach ($kapuss as $kapus)
	{
		$namaKapus = $kapus->namaKapus;
		$nipKapus = $kapus->nipKapus;
	}
	
	foreach ($notadinas as $nd)
	{
		$nomorND = $nd->nomorND;
		$tanggalND = $nd->tglNDstr;
		$perihal = $nd->perihal;
		$alasan = $nd->alasan;
		$pegawaiName = $nd->pegawaiName;
		$pegawaiDegreeFirst = $nd->pegawaiDegreeFirst;
		$pegawaiDegreeLast = $nd->pegawaiDegreeLast;
	}
	?>
</head>

<body>
<div style="margin-top: 100px;font-size:16pt;font-weight: bold;text-align: center;">NOTA DINAS</div>
<?php 
if($nomorND != '')
{
	?>
	<div style="margin-top: 5px;font-size:14pt;text-align: center;">Nomor : ND-<?php echo $nomorND; ?>/DL/2/<?php echo $year;?></div>
	<?php 
}
else
{
	?>
	<div style="margin-top: 5px;font-size:14pt;text-align: center;">Nomor : ND-<span style="padding-left: 30px;">/DL/2/<?php echo $year;?></span></div>
	<?php
}
?>
<table style="width:100%;font-size:14pt;margin-top: 10px;">
  		<tr>
			<td style="padding-top: 10px;width:80px;">Kepada</td>
			<td style="padding-top: 10px;width:30px;">:</td>
			<td style="padding-top: 10px">Kepala Bidang <?php echo $bidangShortName; ?></td>
		</tr>
		<tr>
			<td style="padding-top: 10px;width:80px;">Dari</td>
			<td style="padding-top: 10px;width:30px;">:</td>
			<td style="padding-top: 10px">Kepala Pusat</td>
		</tr>
		<tr>
			<td style="padding-top: 10px;width:80px;">Perihal</td>
			<td style="padding-top: 10px;width:30px;">:</td>
			<td style="padding-top: 10px"><?php echo $perihal;?></td>
		</tr>
		<tr>
			<td colspan="3" style="border-bottom: 1px solid #000;padding-top: 10px"></td>
		</tr>
		<tr>
			<td colspan="3" style="padding-top: 10px">Dengan ini diberitahukan <?php echo $perihal;?> untuk Diklat <?php echo $kaldikDesc; ?> <?php echo $kelasName;?> karena Sdr. <?php echo $pegawaiDegreeFirst.$pegawaiName.$pegawaiDegreeLast;?> <?php echo $alasan;?>.</td>
		</tr>
		<tr>
			<td colspan="3" style="padding-top: 10px"><?php echo $perihal;?> tercantum dalam jadwal dibawah ini:</td>
		</tr>
  </table>
  


	<table style="width:100%;font-size:13pt;margin-top:10px;">
		<tr>
			<td style="font-weight: bold;" colspan="6">Semula:</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000;width:30px;text-align:center;">No</td>
			<td style="border: 1px solid #000;width:60px;text-align:center;">Hari</td>
			<td style="border: 1px solid #000;width:100px;text-align:center;">Tanggal</td>
			<td style="border: 1px solid #000;width:110px;text-align:center;">Waktu</td>
			<td style="border: 1px solid #000;width:150px;text-align:center;">Materi</td>
			<td style="border: 1px solid #000;">Pengajar</td>
		</tr>
		<?php
		$i = 1;
		foreach ($jadwalSemula as $js)
		{
			?>
			<tr>
				<td style="border: 1px solid #000;padding:5px;text-align:center;"><?php echo $i;?></td>
				<td style="border: 1px solid #000;padding:5px;text-align:center;"><?php echo $js->hari;?></td>
				<td style="border: 1px solid #000;padding:5px;text-align:center;"><?php echo $js->tanggal;?></td>
				<td style="border: 1px solid #000;padding:5px;text-align:center;"><?php echo substr($js->jamMulai, 0, 5).' - '.substr($js->jamSelesai, 0, 5);?></td>
				<td style="border: 1px solid #000;padding:5px;"><?php echo $js->mataAjarName;?></td>
				<td style="border: 1px solid #000;padding:5px;">
					<?php 
					$j = 1;
					foreach ($js->pengajar as $pengajar)
					{
						if(sizeof($js->pengajar) == 1)
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
			$i++;
		}
		?>
		<tr>
			<td style="font-weight: bold;padding-top:10px;" colspan="6">Menjadi:</td>
		</tr>
		<tr>
			<td style="border: 1px solid #000;width:30px;text-align:center;">No</td>
			<td style="border: 1px solid #000;width:60px;text-align:center;">Hari</td>
			<td style="border: 1px solid #000;width:100px;text-align:center;">Tanggal</td>
			<td style="border: 1px solid #000;width:110px;text-align:center;">Waktu</td>
			<td style="border: 1px solid #000;width:150px;text-align:center;">Materi</td>
			<td style="border: 1px solid #000;">Pengajar</td>
		</tr>
		<?php
		$i = 1;
		foreach ($jadwalMenjadi as $js)
		{
			?>
			<tr>
				<td style="border: 1px solid #000;padding:5px;text-align:center;"><?php echo $i;?></td>
				<td style="border: 1px solid #000;padding:5px;text-align:center;"><?php echo $js->hari;?></td>
				<td style="border: 1px solid #000;padding:5px;text-align:center;"><?php echo $js->tanggal;?></td>
				<td style="border: 1px solid #000;padding:5px;text-align:center;"><?php echo substr($js->jamMulai, 0, 5).' - '.substr($js->jamSelesai, 0, 5);?></td>
				<td style="border: 1px solid #000;padding:5px;"><?php echo $js->mataAjarName;?></td>
				<td style="border: 1px solid #000;padding:5px;">
				<?php 
					$j = 1;
					foreach ($js->pengajar as $pengajar)
					{
						if(sizeof($js->pengajar) == 1)
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
			$i++;
		}
		?>
		
	</table>
	
	<table class="txt-footer" style="width:100%;font-size:14pt;margin-top:5px;">
		
		<tr>
			<td colspan="3" style="font-size: 14pt;padding-top: 10px;">Demikian disampaikan.</td>
		</tr>
		<tr>
			<td colspan="2" style="font-size: 14pt;padding-top: 20px;"></td>
			<td style="font-size: 14pt;padding-top: 20px;padding-left: 100px;text-align:center;"><?php echo $tanggalND;?></td>
		</tr>
		<tr>
			<td colspan="2" style="font-size: 14pt;padding-top: 5px;"></td>
			<td style="font-size: 14pt;padding-top: 5px;padding-left: 100px;text-align:center;">Kepala Pusat</td>
		</tr>
		<tr>
			<td colspan="2" style="font-size: 14pt;padding-top: 50px;"></td>
			<td style="font-size: 14pt;padding-top: 50px;padding-left: 100px;text-align:center;"><?php echo $namaKapus;?></td>
		</tr>
		<tr>
			<td colspan="2" style="font-size: 14pt;padding-top: 5px;"></td>
			<td style="font-size: 14pt;padding-top:5px;padding-left: 100px;text-align:center;">NIP <?php echo $nipKapus;?></td>
		</tr>
		
	</table>
	
<div id="footer">
  <table style="width:100%;font-size:14pt;">
  		<tr>
			<td>Tembusan:</td>
		</tr>
		<tr>
			<td>1. Kepala Bidang <?php echo $bidangShortName;?></td>
		</tr>
		<tr>
			<td>2. Kepala Subbagian Keuangan</td>
		</tr>
		<tr>
			<td style="font-size: 10pt;padding-top:10px;">[FM-P2E/P2D-12-01]-[NO. REVISI: 00]-[TGL. REVISI: 14 JUNI 2011]</td>
		</tr>
  </table>
</div>
</body>
</html>
