<?php 
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=sertifikat_depan.doc");
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


$html = '<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>SIMDIKLAT</title>

<style type="text/css">

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
    src: url(http://localhost/simdiklat5/assets/fonts/MTCORSVA.ttf);
}


@font-face {
    font-family: maiandra;
    src: url(http://localhost/simdiklat5/assets/fonts/MAIAN.ttf);
}


@font-face {
    font-family: maiandrabold;
    src: url(http://localhost/simdiklat5/assets/fonts/maiandrabold.ttf);
}

@page {
	//margin: 2cm;
}

body {
  font-family: trebuc;
  margin-top:3cm;
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

</style>
<script>

</script>  
</head>

<body>'; 
	$i = 1;
	foreach ($pesertas as $peserta)
	{
		if($txtNIP == 'NRP')
		{
			if($peserta->pesertaKetPangkat == null || $peserta->pesertaKetPangkat == '')
			{
				$pesertaPangkat = $peserta->pangkatName;
			}
			else
			{
				$pesertaPangkat = $peserta->pesertaKetPangkat;
			}
			$pesertaNIP = $peserta->pesertaNIP;
		}
		else
		{
			if($peserta->pesertaKetPangkat == null || $peserta->pesertaKetPangkat == '')
			{
				$pesertaPangkat = $peserta->pangkatName.', '.$peserta->GolRuang;
			}
			else
			{
				$pesertaPangkat = $peserta->pesertaKetPangkat.', '.$peserta->GolRuang;
			}
			$pesertaNIP = $peserta->pesertaNIPSpace;
		}
		
		$html .= '<table style="width:100%;">
			<tr>
				<td style="font-size: 22pt;text-align:center;font-family: trebucbd;">SERTIFIKAT</td>
			</tr>
			<tr>
				<td style="font-size: 13pt;text-align:center;font-family: maiandra;">Nomor: SERT-/DL/4/'.$year.'</td>
			</tr>
		</table>		
		<table style="width:100%;">
			<tr>
				<td style="font-size: 13pt;text-align:center;font-family: maiandra;">Diberikan Kepada :</td>
			</tr>
			<tr>
				<td style="font-size: 24pt;text-align:center;font-family: monotype;">'.$peserta->namaAbsen.'</td>
			</tr>
		</table>
<table style="width:100%;font-family:maiandra;">
	<tr>
		<td style="font-size: 13pt;text-align:left;width:180px;">'.$txtNIP.'</td>
		<td style="font-size: 13pt;text-align:center;width:30px;">:</td>
		<td style="font-size: 13pt;text-align:left;">'.$pesertaNIP.'</td>
	</tr>
	<tr>
		
		<td style="font-size: 13pt;text-align:left;width:180px;">'.$txtPangkat.'</td>
		<td style="font-size: 13pt;text-align:center;width:30px;">:</td>
		<td style="font-size: 13pt;text-align:left;">'.$pesertaPangkat.'</td>
	</tr>
	<tr>';
		
		if($peserta->pesertaKetJabatan == null || $peserta->pesertaKetJabatan == '')
		{
			$pesertaJabatan = $peserta->jabatanFullName;
		}
		else
		{
			$pesertaJabatan = $peserta->pesertaKetJabatan;
		}
		
		
		$html .= '<td style="font-size: 13pt;text-align:left;width:180px;">Jabatan</td>
		<td style="font-size: 13pt;text-align:center;width:30px;">:</td>
		<td style="font-size: 13pt;text-align:left;">'.$pesertaJabatan.'</td>
	</tr>
	<tr>';
		if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
		{
			$pesertaUnit = $peserta->unitName;
		}
		else
		{
			$pesertaUnit = $peserta->pesertaKetUnitKerja;
		}
		
		$html .= '<td style="font-size: 13pt;text-align:left;width:180px;">Unit Organisasi</td>
		<td style="font-size: 13pt;text-align:center;width:30px;">:</td>
		<td style="font-size: 13pt;text-align:left;">'.$pesertaUnit.'</td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td style="font-size: 13pt;text-align:center;font-family: maiandra;">Telah Mengikuti Pendidikan dan Pelatihan</td>
	</tr>
	<tr>
		<td style="font-size: 18pt;text-align:center;font-family: maiandrabold;">'.$diklatName.'</td>
	</tr>
	<tr>
		<td style="font-size: 13pt;text-align:center;font-family: maiandra;">'.$sumJP.' Jam Pelatihan</td>
	</tr>
	<tr>
		<td style="font-size: 13pt;text-align:center;font-family: maiandra;">'.$diklatLocName.', '. $tglStart.' - '.$tglEnd.'</td>
	</tr>
</table>

<table style="width:100%;">
	<tr>
		<td>
			<div style="width:2cm;height: 2.5cm;border:1px solid #000;text-align:center;">
				PAS
				<br>
				PHOTO
				<br>
				<br>
				3 x 4
			</div>
		</td>
		<td style="text-align: center;">
			<div style="font-family: maiandrabold;font-size: 13pt;">'.$namaJabatan.'</div>
			<br>
			<br>
			<div style="font-family: maiandrabold;font-size: 13pt;">'.$namaKapus.'</div>
			<div style="font-family: maiandra;font-size: 13pt;">NIP '.$nipKapus.'</div>
		</td>
	</tr>
</table>'; 
		$i++;
		if($i <= sizeof($pesertas))
		{
			$html .= '<div class="txt-footer"></div>';
		}
	}



$html .= '</body>
</html>';
echo $html;

?>
