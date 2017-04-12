<?php 
	if($kaldiks)
	{
		foreach ($kaldiks as $kaldik)
		{
			$pegawai = $kaldik->pegawaiDegreeFirst . $kaldik->pegawaiName . $kaldik->pegawaiDegreeLast;
			$pegawaiNIP = $kaldik->pegawaiNIP;
			$pegawaiJabatan = $kaldik->jabatanFullName;
		}
	}
?>
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

td{
	padding:3px;
	border:1px solid #000;
}
</style>
<script>

</script>  
</head>

<body>
<table style="width: 100%">
	<tr>
		<td style="font-size: 14pt;font-weight: bold;text-align: center;border:0px;">KARTU KENDALI KEGIATAN WIDYAISWARA</td>
	</tr>
	<tr>
		<td style="font-size: 14pt;font-weight: bold;text-align: center;border:0px;">TAHUN <?php echo $thisYear; ?></td>
	</tr>
</table>
<table style="width: 100%;margin-top: 20px;font-size: 12pt;font-weight: bold;">
	<tr>
		<td style="padding: 3px;border:0px;">Nama</td>
		<td style="padding: 3px;border:0px;">:</td>
		<td style="padding: 3px;border:0px;"><?php echo $pegawai;?></td>
	</tr>
	<tr>
		<td style="padding: 3px;border:0px;">NIP</td>
		<td style="padding: 3px;border:0px;">:</td>
		<td style="padding: 3px;border:0px;"><?php echo $pegawaiNIP;?></td>
	</tr>
	<tr>
		<td style="padding: 3px;border:0px;">Jabatan</td>
		<td style="padding: 3px;border:0px;">:</td>
		<td style="padding: 3px;border:0px;"><?php echo $pegawaiJabatan;?></td>
	</tr>
	<tr>
		<td style="padding: 3px;border:0px;">Bulan</td>
		<td style="padding: 3px;border:0px;">:</td>
		<td style="padding: 3px;border:0px;"><?php echo $monthName;?></td>
	</tr>
</table>

<table style="width: 100%;margin-top:5px;font-size:10pt">
	<thead>
	<tr>
		<td colspan="6" style="font-weight: bold;font-size:12pt;padding:3px;border: 1px solid #000;text-align:center;background-color:#DEDEDE;">I. KEGIATAN TATAP MUKA</td>
	</tr>
	<tr>
		<td style="font-weight: bold;text-align: center;">No.</td>
		<td style="font-weight: bold;text-align: center;">Nama dan Tanggal Kegiatan Diklat</td>
		<td style="font-weight: bold;text-align: center;">Nomor dan Tanggal ST</td>
		<td style="font-weight: bold;text-align: center;">Nama Mata Ajar dan Tanggal Pelaksanaan</td>
		<td style="font-weight: bold;text-align: center;">Lokasi</td>
		<td style="font-weight: bold;text-align: center;">JP</td>
	</tr>
	</thead>
	<tbody>
	<?php
	if($kaldiks)
	{
		$i = 1;
		$total = 0;
		foreach ($kaldiks as $kaldik)
		{
			?>
				<tr>
					<td style="text-align: center;"><?php echo $i?></td>
					<td><?php echo $kaldik->kaldikDesc;?> - <?php echo $kaldik->startDate;?> s.d <?php echo $kaldik->endDate;?></td>
					<td><?php echo $kaldik->nomorST?> - <?php echo $kaldik->tanggalST;?></td>
					<td><?php echo $kaldik->mataAjarName;?> - <?php echo $kaldik->tanggalR; ?></td>
					<td style="text-align: center;"><?php echo $kaldik->diklatLocName;?></td>
					<td style="text-align: center;"><?php echo $kaldik->jamlatR;?></td>
				</tr>
				<?php
				$i++;
				$total +=  (int)$kaldik->jamlatR;
		}
	}
	?>
	<tr>
		<td colspan = "5" style="text-align: center;font-weight: bold">Jumlah JP Kegiatan Tatap Muka</td>
		<td style="text-align: center;font-weight: bold"><?php echo $total?></td>
	</tr>
	</tbody>
</table>

<table style="width:100%;margin-top:20px;font-size:10pt;">
	<thead>
	<tr>
		<td colspan="6" style="font-weight: bold;font-size:12pt;padding:3px;border: 1px solid #000;text-align:center;background-color:#DEDEDE;">I. KEGIATAN KONVERSI</td>
	</tr>
	<tr>
		<td style="font-weight: bold;text-align: center;">No.</td>
		<td style="font-weight: bold;text-align: center;">Nama Kegiatan Lain / Konversi</td>
		<td style="font-weight: bold;text-align: center;">Nomor dan Tanggal ST</td>
		<td style="font-weight: bold;text-align: center;">Nama Mata Ajar dan Tanggal Pelaksanaan</td>
		<td style="font-weight: bold;text-align: center;">Volume dan Satuan Hasil</td>
		<td style="font-weight: bold;text-align: center;">JP</td>
	</tr>
	</thead>
	<tbody>
		<?php
		$total = 0;
		if($konversis)
		{
			$arrHuruf = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'L', 'M', 'N'];
			$kegiatanHeadID = '';
			$kegiatanDetailID = '';
			$i = 0;
			$j = 1;
			$k = 1;
			$total = 0;
			foreach ($konversis as $konversi)
			{
				?>
				<?php
				if($konversi->kegiatanHeadID != $kegiatanHeadID)
				{
					?>
					<tr>
					<td style="font-weight: bold;text-align:center;"><?php echo $arrHuruf[$i];?>.</td>
					<td colspan="5" style="font-weight: bold;"><?php echo $konversi->kegiatanHeadnama;?></td>
					</tr>
					<?php
					$i++;
					$kegiatanHeadID = $konversi->kegiatanHeadID;
					
				}
				
				if($konversi->kegiatanDetailID != $kegiatanDetailID)
				{
					?>
					<tr>
					<td style="font-weight: bold;text-align: center;"><?php echo $j;?>.</td>
					<td colspan="5" style="font-weight: bold;"><?php echo $konversi->kegiatanDetailNama;?></td>
					</tr>
					<?php
					$j++;
					$kegiatanDetailID = $konversi->kegiatanDetailID;
					$k = 1;
				}
				
				?>
				<tr>
				<td style="text-align: center;"><?php echo $k;?>).</td>
				<td><?php echo $konversi->kegiatanDetailNama;?></td>
				<td><?php echo $konversi->nomorST;?><br><?php echo $konversi->tanggalST;?></td>
				<?php 
				if ($konversi->mataAjarName == null)
				{
					?>
					<td><?php echo $konversi->judulPenugasan;?><br><?php echo $konversi->tanggalKegiatan;?></td>
					<?php
				}
				else 
				{
					?>
					<td><?php echo $konversi->mataAjarName;?><br><?php echo $konversi->tanggalR;?></td>
					<?php
				}
				
				?>
				<td style="text-align:center;"><?php echo $konversi->volume;?> <?php echo $konversi->kegiatanDetailSat;?></td>
				<td style="text-align: center;"><?php echo $konversi->volume * $konversi->kegiatanDetailJP;?></td>
				</tr>
				<?php
				$total +=  ($konversi->volume * $konversi->kegiatanDetailJP);
				$k++;
			}
		}
		?>
		<tr>
		<td colspan = "5" style="text-align: center;font-weight: bold">Jumlah JP Kegiatan NON Tatap Muka</td>
		<td style="text-align: center;font-weight: bold"><?php echo $total?></td>
		</tr>
	</tbody>
</table>
</body>
</html>
