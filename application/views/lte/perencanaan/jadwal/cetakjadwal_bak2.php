<?php

require_once(APPPATH.'libraries/tcpdf.php');

foreach ($kaldiks as $kaldik)
{
	$kaldikDesc = $kaldik->kaldikDesc;
	$diklatName = $kaldik->diklatName;
	$startDate  = $kaldik->tglStart . ' ' . $kaldik->monthStart . ' ' . $kaldik->yearStart;
	$endDate = $kaldik->tglEnd . ' ' . $kaldik->monthEnd . ' ' . $kaldik->yearEnd;
	$namaKelas = $kaldik->namaKelas;
}	

// create new PDF document
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Bengbeng');
$pdf->SetTitle('JADWAL');
$pdf->SetSubject('JADWAL SIMDIKLAT');


// set default header data
$pdf->SetHeaderData('', 0, "", '<span>JADWAL<br>'.$diklatName.'<br>'.$kaldikDesc.'<br>'.'TANGGAL '.$startDate.' S.D. '.$endDate.'</span><br><br><span style="text-align:right;">'.$namaKelas.'</span>', array(0, 0, 0), array(255,255,255));

//$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 60, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('helvetica', '', 12, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));

$html = '<table style="padding-top:10px;border:3px solid #000;padding-bottom:10px;"><thead><tr style="text-align:center;font-weight: bold;"><th style="border:3px solid #000;width:50px;">NO</th><th style="border:3px solid #000;width:100px;">HARI</th><th style="border:3px solid #000;width:130px;">TANGGAL</th><th style="border:3px solid #000;width:150px;">WAKTU</th><th style="border:3px solid #000;width:250px;">MATA AJAR</th><th style="border:3px solid #000;width:80px;">JAMLAT</th><th style="border:3px solid #000;width:185px;">PENGAJAR</th></tr></thead><tbody>';
$i = 1;
foreach($jadwals as $jadwal)
{
	$html .= '<tr><td style="border:1px solid #000;width:50px;text-align:center;">'.$i.'</td><td style="border:1px solid #000;width:100px;text-align:center;">'.$jadwal->hari.'</td><td style="border:1px solid #000;width:130px;text-align:center;">'.$jadwal->tanggal.'</td><td style="border:1px solid #000;width:150px;text-align:center;">'.$jadwal->jamMulai.' - '.$jadwal->jamSelesai.'</td><td style="border:1px solid #000;width:250px;text-align:left;">'.$jadwal->mataAjarName.'</td><td style="border:1px solid #000;width:80px;text-align:center;">'.$jadwal->jamLat.'</td><td style="border:1px solid #000;width:185px;text-align:left;">Bambang</td></tr>';
	$i++;
}
$html .= '</tbody></table>';
$pdf->writeHTML($html, true, false, false, false, $align='C');
// Set some content to print


// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
