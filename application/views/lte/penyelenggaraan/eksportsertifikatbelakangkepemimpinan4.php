<?php 
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=sertifikat_belakang_kepemimpinan3.doc");
foreach ($kaldiks as $kaldik)
{
	 
	$diklatName = $kaldik->diklatName;
	$kaldikDesc = $kaldik->kaldikDesc;
	$Tgl = $kaldik->tglStart.' '.$kaldik->monthStart .' S.D '.$kaldik->tglEnd.' '.$kaldik->monthEnd.' '.$kaldik->yearEnd;
	$namaKelas = $kaldik->namaKelas;
	$biayaName = $kaldik->biayaName;
	$bidangName = $kaldik->bidangShortName;
	$diklatTypeName = $kaldik->diklatTypeName;
	$year = $kaldik->yearName;
	$diklatLocName = $kaldik->diklatLocName;
	$tglStart = $kaldik->tglStart.' '.$kaldik->monthStart.' '.$kaldik->yearStart;
	$tglEnd = $kaldik->tglEnd.' '.$kaldik->monthEnd.' '.$kaldik->yearEnd;
}

foreach ($sumJamlat as $sum)
{
	$sumJP = $sum->sumJamlat;
}

foreach ($kapuss as $kapus)
{
	$namaJabatan = $kapus->namaJabatan;
	$namaKapus = $kapus->namaKapus;
	$nipKapus = $kapus->nipKapus;
}

foreach ($sekretaris as $sekre)
{
	$namaJabatanSekre = $sekre->namaJabatan;
	$namaSekre = $sekre->namaSekretaris;
	$nipSekre = $sekre->nipSekretaris;
}

foreach ($pesertas as $peserta)
{
	if($peserta->jabatanGroupFullName == 'TNI' || $peserta->jabatanGroupFullName == 'POLRI')
	{
		$txtNIP = 'NRP';
		$pesertaNIP = $peserta->pesertaNIP;
		$txtPangkat = 'Pangkat';
			
			
	}
	else
	{
		$txtNIP = 'NIP';
			
		$txtPangkat = 'Pangkat, Golongan';
			
	}
}

$html .= '<!DOCTYPE HTML>
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
  margin-top:1cm;
  margin-left:3cm;
  //margin-bottom:2cm;
  margin-right:2cm;
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
</script>  
</head>

<body>
<table style="width:100%;">
	<tr>
		<td style="font-weight: bold;font-size: 18pt;text-align:center;font-family: Serif;">DAFTAR MATA DIKLAT</td>
	</tr>
</table>


<table style="width:100%;margin-top:20px;">
	<tr>
		<td style="font-size: 12pt;font-weight: bold">I. Tahap Diagnosa Kebutuhan Perubahan</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">3. Pengenalan Potensi Diri</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:10px 3px 3px 20px;">1. Overview dan Pengarahan Program</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">4. Berpikir Kreatif dan Inovasi</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">2. Dinamika Kelompok</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">5. <span style="font-style: italic;">Benchmarking</span> Ke <span>Best Practice</span></td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">3. Integritas</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">6. Koordinasi dan Kolaborasi</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">4. Pilar - pilar kebangsaan</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">7. Merancang Proyek Perubahan</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">5. Standar Etika Publik</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">8. Persiapan Seminar</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">6. SANRI</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">9. Seminar Presentasi Proyek Perubahan</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">7. Pembekalan MTSL</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">10. Pembekalan Implementasi Proyek</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">8. <span style="font-style: italic;">Diagnostic Reading</span></td>
		<td style="font-size: 12pt;padding:10px 3px 3px 3px;font-weight: bold;">IV. Tahap Laboratorium Kepemimpinan</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">9. Penjelasan Proyek Perubahan</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;"><span style="font-style: italic;">Coaching</span> dan <span style="font-style: italic;">Counseling</span></td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:10px 3px 3px 3px;font-weight: bold;">II. Tahap <span style="font-style: italic;">Taking Ownership</span></td>
		<td style="font-size: 12pt;padding:10px 3px 3px 3px;font-weight: bold;">V. Tahap Evaluasi</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;"><span style="font-style: italic;">Coaching</span> dan <span style="font-style: italic;">Counseling</span></td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">1. Seminar Laboratorium Kepemimpinan</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;font-weight: bold;padding:10px 3px 3px 3px;">III. Tahap Merancang Proyek Perubahan dan Membangun Tim</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">2. Seminar Laboratorium Kepemimpinan</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">1. Kecerdasan Emosional</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 3px;text-align:center;">'.$diklatLocName.', '.$tglEnd.'</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 20px;">2. Membangun Tim Efektif</td>
		<td style="font-size: 12pt;padding:3px 3px 3px 3px;text-align:center;">'.$namaJabatan.'</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 3px;"></td>
		<td style="font-size: 12pt;padding:3px 3px 3px 3px;"></td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:50px 3px 3px 3px;"></td>
		<td style="font-size: 12pt;padding:50px 3px 3px 3px;"></td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 3px;text-align:center;"></td>
		<td style="font-size: 12pt;padding:3px 3px 3px 3px;text-align:center;">'.$namaKapus.'</td>
	</tr>
	<tr>
		<td style="font-size: 12pt;padding:3px 3px 3px 3px;text-align:center;"></td>
		<td style="font-size: 12pt;padding:3px 3px 3px 3px;text-align:center;">NIP '.$nipKapus.'</td>
	</tr>
</table>
</body>
</html>';
echo $html;

?>