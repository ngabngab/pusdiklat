<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>SIMDIKLAT</title>

<style type="text/css">

@page {
	//margin: 2cm;
	margin-top:2cm;
  margin-left:4cm;
  margin-bottom:1cm;
  margin-right:3cm;
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
	?>
</head>

<body>
<div style="margin-top: 100px;font-size:16pt;font-weight: bold;text-align: center;">SURAT TUGAS</div>
<?php 
if($nomorST != '')
{
	?>
	<div style="margin-top: 5px;font-size:14pt;text-align: center;">Nomor : ST-<?php echo $nomorST; ?>/DL/2/<?php echo $year;?></div>
	<?php 
}
else
{
	?>
	<div style="margin-top: 5px;font-size:14pt;text-align: center;">Nomor : ST-<span style="padding-left: 30px;">/DL/2/<?php echo $year;?></span></div>
	<?php
}
?>
<div style="margin-top: 20px;text-align:justify;font-size: 14pt;">Kepala Pusat Pendidikan dan Pelatihan Pengawasan BPKP dengan ini menugaskan:</div>
<table style="margin-top: 10px;font-size: 14pt;padding:0;">
<thead>
	<tr>
		<td style="padding:3px;">No.</td>
		<td style="padding:3px;text-align: center;">Nama</td>
		<td style="padding:3px;text-align: center;">NIP</td>
		<td style="padding:3px;text-align: center;">JABATAN</td>
	</tr>
</thead>
<tbody>
				<?php
					$i = 1;
					foreach($lists as $list)
					{
						?>
						<tr>
							<td style="text-align:right;padding:1px;"><?php echo $i; ?>. </td>
							<td style="padding:1px;"><?php echo $list->pegawaiName; ?></td>
							<td style="text-align:center;padding:1px;"><?php echo $list->pegawaiNIP; ?></td>
							<td style="text-align:center;padding:2px;"><?php echo $list->jabatanFullName; ?></td>
						</tr>
						<?php
						$i++;
					}
				?>
</tbody>
</table>

	<table class="txt-footer" style="width:100%;font-size:14pt;margin-top:5px;">
		<tr>	
			<td colspan="3" style="padding-top:5px;font-size:14pt;text-align:justify;">untuk mengajar pada Diklat <?php echo $kaldikDesc;?> pada :</td>
		</tr>
		<tr>
			<td style="width:80px;padding-top:10px;">Hari</td>
			<td style="text-align:center;width:5px;padding-top:10px;">:</td>
			<td style="padding-top:10px;"><?php echo $hariStart.' s.d. '.$hariEnd; ?></td>
		</tr>
		<tr>
			<td style="width:80px;">Tanggal</td>
			<td style="text-align:center;width:5px;">:</td>
			<td><?php echo $tglStart.' s.d. '.$tglEnd; ?></td>
		</tr>
		<tr>
			<td style="width:80px;">Waktu</td>
			<td style="text-align:center;width:5px;">:</td>
			<td>08.00 s.d. 17.00 WIB</td>
		</tr>
		<tr>
			<td style="width:80px;">Tempat</td>
			<td style="text-align:center;width:5px;">:</td>
			<td><?php echo $tempatName;?>, <?php echo $diklatLocName;?></td>
		</tr>
		
		<tr>
			<td style="width:80px;">Materi</td>
			<td style="text-align:center;width:5px;">:</td>
			<td>Sesuai jadwal terlampir</td>
		</tr>
		<tr>
			<td style="width:80px;">Kelas</td>
			<td style="text-align:center;width:5px;">:</td>
			<td><?php echo $kelasName;?> (Sesuai jadwal Terlampir)</td>
		</tr>
		<tr>
			<td colspan="3" style="font-size: 14pt;padding-top: 10px;">Demikian untuk dilaksanakan dengan penuh tanggung jawab.</td>
		</tr>
		<tr>
			<td colspan="2" style="font-size: 14pt;padding-top: 20px;"></td>
			<td style="font-size: 14pt;padding-top: 20px;padding-left: 100px;text-align:center;"><?php echo $tglSTstr;?></td>
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
