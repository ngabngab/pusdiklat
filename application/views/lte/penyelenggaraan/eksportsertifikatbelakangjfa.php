<?php 
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=sertifikat_belakang.doc");

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
	$namaKabid = $kaldik->namaKabid;
	$nipKabid = $kaldik->kabidNIP;
	$namaJabatanKabid = $kaldik->namaJabatan;
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

$jmlSesi = sizeof($sesis);

$html = '<!DOCTYPE HTML>
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
  margin-top:1.5cm;
  margin-left:2cm;
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
}
#footer {
  position: fixed;
  left: 0;
  right: 0;
  color: #000;
  font-size: 0.9em;
}

#header {
  top: 1cm;
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
	<div style="font-size: 18pt;font-family: maiandrabold;">MATERI PENDIDIKAN DAN PELATIHAN</div>
</div>';
if($jmlSesi > 1)
{
	foreach ($sesis as $sesi)
	{
		$sumJP = 0;	
$html .='<div style="font-size:10pt;font-family: maiandra;margin-top:20px;">Metode : '.$sesi->sesiName.' ('.$sesi->startDateRealisasi.' - '.$sesi->endDateRealisasi.')</div>
<table style="width: 100%;border: 1px solid #000;">
			<thead>
				<tr>
					<td style="border: 1px solid #000;font-size:10pt;padding:5px;font-family: maiandrabold;text-align:center;">NO</td>
					<td style="border: 1px solid #000;font-size:10pt;padding:5px;font-family: maiandrabold;text-align:center;">MATERI</td>
					<td style="border: 1px solid #000;font-size:10pt;padding:5px;font-family: maiandrabold;text-align:center;">JAMLAT</td>
				</tr>
			</thead>
			<tbody>';
		$i = 1;
		foreach ($jadwals as $jadwal)
		{
			if($jadwal->sesiNo == $sesi->sesiNo)
			{
			
				$html .='<tr>
					<td style="text-align:center;font-size:10pt;padding:5px;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;">'.$i.'</td>
					<td style="text-align:center;font-size:10pt;padding:5px;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;">'.$jadwal->mataAjarName.'</td>
					<td style="text-align:center;font-size:10pt;padding:5px;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;">'.$jadwal->sumJamlat.'</td>
				</tr>';
				$sumJP = $sumJP + (int)$jadwal->sumJamlat;
			}
			$i++;	
		}
		
		$html .= '</tbody>
		<tfoot>
			<tr>
			<td style="text-align:center;font-size:10pt;padding:5px;border: 1px solid #000;font-family: maiandrabold;"></td>
			<td style="text-align:center;font-size:10pt;padding:5px;border: 1px solid #000;font-family: maiandrabold;">JUMLAH</td>
			<td style="text-align:center;font-size:10pt;padding:5px;border: 1px solid #000;font-family: maiandrabold;">'.$sumJP.'</td>
			</tr>
		</tfoot>
		</table>';	
		
	}
}
else
{
	$html .= '<table style="width: 100%;border: 1px solid #000;margin-top:20px;">
	<thead>
		<tr>
			<td style="border: 1px solid #000;font-size:10pt;padding:5px;font-family: maiandrabold;text-align:center;">NO</td>
			<td style="border: 1px solid #000;font-size:10pt;padding:5px;font-family: maiandrabold;text-align:center;">MATERI</td>
			<td style="border: 1px solid #000;font-size:10pt;padding:5px;font-family: maiandrabold;text-align:center;">JAMLAT</td>
		</tr>
	</thead>
	<tbody>';
	$i = 1;
	foreach ($jadwals as $jadwal)
	{
		$html .= '<tr>
			<td style="text-align:center;font-size:10pt;padding:5px;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;">'.$i.'</td>
			<td style="text-align:center;font-size:10pt;padding:5px;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;">'.$jadwal->mataAjarName.'</td>
			<td style="text-align:center;font-size:10pt;padding:5px;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;">'.$jadwal->sumJamlat.'</td>
		</tr>';
		$i++;
	}
	$html .= '</tbody>
	<tfoot>
		<tr>
		<td style="text-align:center;font-size:10pt;padding:5px;border: 1px solid #000;font-family: maiandrabold;"></td>
		<td style="text-align:center;font-size:10pt;padding:5px;border: 1px solid #000;font-family: maiandrabold;">JUMLAH</td>
		<td style="text-align:center;font-size:10pt;padding:5px;border: 1px solid #000;font-family: maiandrabold;">'.$sumJP.'</td>
		</tr>
	</tfoot>
	</table>';
}


$html .= '<table style="width: 100%;margin-top: 20px;">
	<tr>
		<td style="text-align:center;font-size:10pt;padding-left: 300px;font-family: maiandra;">'.$diklatLocName.', '.$tglEnd.'</td>
	</tr>
	<tr>
		<td style="text-align:center;font-size:10pt;padding-left: 300px;font-family: maiandra;">Kepala Bidang</td>
	</tr>
	<tr>
		<td style="text-align:center;font-size:10pt;padding-left: 300px;font-family: maiandra;">'.$namaJabatanKabid.'</td>
	</tr>
	<tr>
		<td style="text-align:center;font-size:10pt;padding-left: 300px;padding-top:30px;font-family: maiandrabold;">'.$namaKabid.'</td>
	</tr>
	<tr>
		<td style="text-align:center;font-size:10pt;padding-left: 300px;font-family: maiandra;">'.$nipKabid.'</td>
	</tr>
</table>
</body>
</html>';

echo $html;

?>
