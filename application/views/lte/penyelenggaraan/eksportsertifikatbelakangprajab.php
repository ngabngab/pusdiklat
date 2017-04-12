<?php 
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=sertifikat_belakang_prajab.doc");
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

foreach ($kabids as $kabid)
{
	$namaKabid = $kabid->namaKabid;
	$nipKabid = $kabid->kabidNIP;
	$namaJabatanKabid = $kabid->namaJabatan;
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

@font-face {
    font-family: trebuc;
    src: url("http://localhost/simdiklat5/assets/fonts/trebuc.ttf");
}

@font-face {
    font-family: trebucbd;
    src: url("http://localhost/simdiklat5/assets/fonts/trebucbd.ttf");
}


@font-face {
    font-family: monotype;
    src: url("http://localhost/simdiklat5/assets/fonts/MTCORSVA.ttf");
}


@font-face {
    font-family: maiandra;
    src: url("http://localhost/simdiklat5/assets/fonts/MAIAN.ttf");
}


@font-face {
    font-family: maiandrabold;
    src: url("http://localhost/simdiklat5/assets/fonts/maiandrabold.ttf");
}

body {
  font-family: sans-serif;
  margin-top:4cm;
  margin-left:3cm;
  //margin-bottom:2cm;
  margin-right:3cm;
}

#header
{
	position: fixed;
    left: 0;
	right: 0;
	color: #000;
	text-align:center;
	align:center;
}
#footer {
  position: fixed;
  left: 0;
  right: 0;
  color: #000;
  font-size: 0.9em;
}

#header {
  top: 3cm;
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
<div id="header">
	<div style="font-size: 18pt;font-family: maiandrabold;">DAFTAR MATA DIKLAT</div>
</div>

<table style="width: 100%;margin-top:20px;font-size: 13pt;font-family: maiandra;">
	<tr>
		<td>I. Internalisasi Nilai-Nilai Dasar Profesi PNS</td>
	</tr>
	<tr>
		<td style="padding-left: 20px;">1. Akuntabilitas PNS</td>
	</tr>
	<tr>
		<td style="padding-left: 20px;">2. Nasionalisme</td>
	</tr>
	<tr>
		<td style="padding-left: 20px;">3. Etika Politik</td>
	</tr>
	<tr>
		<td style="padding-left: 20px;">4. Komitmen Mutu</td>
	</tr>
	<tr>
		<td style="padding-left: 20px;">5. Anti Korupsi</td>
	</tr>
	<tr>
		<td style="padding-left: 20px;">6. Ceramah Umum / Muatan Teknis Substansi Lembaga</td>
	</tr>
</table>

<table style="width: 100%;margin-top:20px;font-size: 13pt;font-family: maiandra;">
	<tr>
		<td>II. Aktualisasi Nilai-Nilai Dasar Profesi PNS</td>
	</tr>
	<tr>
		<td style="padding-left: 20px;">1. Rancangan Aktualisasi Nilai-Nilai Dasar Profesi PNS</td>
	</tr>
	<tr>
		<td style="padding-left: 20px;">2. Aktualisasi Nilai-Nilai Dasar Profesi PNS</td>
	</tr>
</table>

<table style="width: 100%;margin-top: 20px;">
	<tr>
		<td style="text-align:center;font-size:12pt;padding-left: 300px;font-family: maiandra;">'.$diklatLocName.', '.$tglEnd.'</td>
	</tr>
	<tr>
		<td style="text-align:center;font-size:12pt;padding-left: 300px;font-family: maiandra;">'.$namaJabatan.'</td>
	</tr>
	<tr>
		<td style="text-align:center;font-size:12pt;padding-left: 300px;padding-top:50px;font-family: maiandra;">'.$namaKapus.'</td>
	</tr>
	<tr>
		<td style="text-align:center;font-size:12pt;padding-left: 300px;font-family: maiandra;">NIP '.$nipKapus.'</td>
	</tr>
</table>
</body>
</html>
';
echo $html;

?>