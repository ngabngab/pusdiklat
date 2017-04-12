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
	<div style="font-size: 12pt;">CEK LIST PESERTA</div>
	<div style="font-size: 10pt;"><?php echo $kaldikDesc; ?></div>
	<div style="font-size: 10pt;"><?php echo $diklatTypeName; ?></div>
	<div style="font-size: 10pt;margin-top:20px;"><?php echo $Tgl; ?></div>
</div>


<table style="width: 100%;font-size:9pt;margin-top:20px;">
	<thead>
	<tr>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:2%;">No</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:6%;">No Sertifikat</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:12%;">Nama</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:2%;">Gelar Depan</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:8%;">Gelar Belakang</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:13%;">NIP / NRP</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:10%;">Pangkat/Gol</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:10%;">Jabatan</td>		
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:8%;">Unit Organisasi</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:10%;">Nomor HP</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:15%;">Email</td>
		<td style="border:1px solid #000;padding:2px;font-weight:bold;text-align:center;width:4%;">Paraf</td>
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
			<td style="border:1px solid #000;padding:5px;"></td>	
			<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->pesertaNama;?></td>
			<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->pesertaDegreeFirst;?></td>
			<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->pesertaDegreeLast;?></td>
			<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $peserta->pesertaNIPStr;?></td>
			<?php 
			if($peserta->pesertaKetPangkat == null || $peserta->pesertaKetPangkat == '')
			{
				?>
				<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->pangkatName;?></td>
				<?php
			}
			else
			{
				?>
				<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->pesertaKetPangkat;?></td>
				<?php
			}
			?>
			<?php 
			if($peserta->pesertaKetJabatan == null || $peserta->pesertaKetJabatan == '')
			{
				?>
				<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->jabatanFullName;?></td>
				<?php
			}
			else
			{
				?>
				<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->pesertaKetJabatan;?></td>
				<?php
			}
			?>
			<?php 
			if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
			{
				?>
				<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->unitName;?></td>
				<?php
			}
			else
			{
				?>
				<td style="border:1px solid #000;padding:5px;"><?php echo $peserta->pesertaKetUnitKerja;?></td>
				<?php
			}
			?>
			<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $peserta->pesertaTelepon;?></td>
			<td style="border:1px solid #000;padding:5px;text-align:center;"><?php echo $peserta->pesertaEmail;?></td>
			<td style="border:1px solid #000;padding:5px;text-align:center;"></td>
		</tr>
		<?php
		$i++;
	}
	?>
	</tbody>
</table>
<div style="margin-top: 10px;">Yth Peserta Diklat <?php echo $kaldikDesc;?></div>
<div>Daftar tersebut mohon diperiksa sesuai dengan biodata yang telah saudara isi dan di paraf. Terimakasih.</div>


<div id="footer">
  <div class="page-number"></div>
</div>


</body>
</html>
