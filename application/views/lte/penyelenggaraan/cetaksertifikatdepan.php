<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>SIMDIKLAT</title>

<style type="text/css">

@font-face {
    font-family: trebuc;
    src: url('<?php echo base_url();?>assets/fonts/trebuc.ttf');
}

@font-face {
    font-family: trebucbd;
    src: url('<?php echo base_url();?>assets/fonts/trebucbd.ttf');
}


@font-face {
    font-family: monotype;
    src: url('<?php echo base_url();?>assets/fonts/MTCORSVA.ttf');
}


@font-face {
    font-family: maiandra;
    src: url('<?php echo base_url();?>assets/fonts/MAIAN.ttf');
}


@font-face {
    font-family: maiandrabold;
    src: url('<?php echo base_url();?>assets/fonts/maiandrabold.ttf');
}

@page {
	//margin: 2cm;
}

body {
  font-family: sans-serif;
  margin-top:5.5cm;
  margin-left:4cm;
  margin-bottom:0.41cm;
  margin-right:4cm;
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
			$year = $kaldik->yearName;
			$diklatLocName = $kaldik->diklatLocName;
			$tglStart = $kaldik->tglStart.' '.$kaldik->monthStart.' '.$kaldik->yearStart;
			$tglEnd = $kaldik->tglEnd.' '.$kaldik->monthEnd.' '.$kaldik->yearEnd;
			$bidangID = $kaldik->bidangID;
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
?>
</script>  
</head>

<body>

<?php 
	$i = 1;
	foreach ($pesertas as $peserta)
	{
		?>
		<?php 
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
		
		?>
<div style="width:100%;"><p style="line-height: 100%;font-family: trebucbd;font-size: 28pt;text-align:center;margin:0;letter-spacing: 15px;">SERTIFIKAT</p></div>
<p style="font-size: 14pt;text-align:center;margin:0;font-family: maiandra;padding:0;line-height: 100%;">Nomor: SERT-<?php echo $peserta->nomorSertifikat;?>/DL/<?php echo $bidangID;?>/<?php echo $year;?></p>
	
<?php 
if ($bidangID != '3')
{
	?>
	<p style="font-family: maiandra;font-size: 13pt;text-align:center;margin:0;line-height: 100%;">(berlaku s.d. <?php echo $peserta->tglBerlaku;?>)</p>	
	<?php
}
else 
{
	?>
	<p style="font-family: maiandra;font-size: 13pt;text-align:center;margin:0;line-height: 100%;opacity:0;">(berlaku s.d. <?php echo $peserta->tglBerlaku;?>)</p>
	<?php	
}

if($peserta->pesertaNRP == '1')
{
	$pesertaNRP = 'NRP';
}
else
{
	$pesertaNRP = 'NIP';
}
?>

<table style="width:100%;">
	<tr>
		<td style="font-family: maiandra;padding:0;">
			<p style="font-size: 13pt;text-align:center;margin:0;">Diberikan kepada:</p>
			<p style="font-size: 30pt;text-align:center;margin:0;font-family: monotype;line-height: 200%;"><?php echo $peserta->namaAbsen; ?></p>
		</td>
	</tr>
</table>

<table align="center" cellspacing="0" cellpadding="0">
	<tr>
		<td style="text-align: center;padding:0;">
			<table style="width:100%;font-family:maiandra;" align="center" cellspacing="0" cellpadding="0">
				<?php 
				if ($pesertaNRP == 'NRP')
				{
					?>
					<tr>
						<td style="padding:0;vertical-align:top;margin:0;"><p style="font-size: 13pt;text-align:left;margin:0;"><?php echo $pesertaNRP; ?><span style="padding-left: 80px;">:</span></p></td>
						<td style="padding:0;vertical-align:top;margin:0;"><p style="font-size: 13pt;text-align:left;margin:0;padding-left:10px;"><?php echo $pesertaNIP; ?></p></td>
					</tr>
					<tr>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;">Pangkat<span style="padding-left: 55px;">:</span></p></td>
						<?php 
						if($peserta->pesertaKetPangkat == null || $peserta->pesertaKetPangkat == '')
						{
							?>
							<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;padding-left:10px;"><?php echo $peserta->pangkatName; ?></p></td>
							<?php
						}
						else
						{
							?>
							<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;padding-left:10px;"><?php echo $peserta->pesertaKetPangkat; ?></p></td>
							<?php
						}
						?>
					</tr>
					<tr>
						<?php 
						if($peserta->pesertaKetJabatan == null || $peserta->pesertaKetJabatan == '')
						{
							$pesertaJabatan = $peserta->jabatanFullName;
						}
						else
						{
							$pesertaJabatan = $peserta->pesertaKetJabatan;
						}
						
						?>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;">Jabatan<span style="padding-left: 57px;">:</span></p></td>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;padding-left:10px;"><?php echo $pesertaJabatan; ?></p></td>
					</tr>
					<tr>
						<?php 
						if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
						{
							$pesertaUnit = $peserta->unitName;
						}
						else
						{
							$pesertaUnit = $peserta->pesertaKetUnitKerja;
						}
						
						?>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;">Unit Organisasi:</p></td>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;padding-left:10px;"><?php echo $pesertaUnit; ?></p></td>
					</tr>
					<?php
				}
				else
				{
					?>
					<tr>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;width:160px;margin:0;"><?php echo $pesertaNRP; ?><span style="padding-left: 115px;">:</span></p></td>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;"><?php echo $pesertaNIP; ?></p></td>
					</tr>
					<tr>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;width:160px;margin:0;">Pangkat, Golongan:</p></td>
						<?php 
						if($peserta->pesertaKetPangkat == null || $peserta->pesertaKetPangkat == '')
						{
							?>
							<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;"><?php echo $peserta->pangkatName; ?>
							<?php 
							if($peserta->GolRuang != null || $peserta->GolRuang != '')
							{
								echo ', '.$peserta->GolRuang;
							}
							?>
							</p></td>
							<?php
						}
						else
						{
							?>
							<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;"><?php echo $peserta->pesertaKetPangkat.', '.$peserta->GolRuang; ?>
							<?php 
							if($peserta->GolRuang != null || $peserta->GolRuang != '')
							{
								echo ', '.$peserta->GolRuang;
							}
							?>
							</p></td>
							<?php
						}
						?>
					</tr>
					<tr>
						<?php 
						if($peserta->pesertaKetJabatan == null || $peserta->pesertaKetJabatan == '')
						{
							$pesertaJabatan = $peserta->jabatanFullName;
						}
						else
						{
							$pesertaJabatan = $peserta->pesertaKetJabatan;
						}
						
						?>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;width:160px;margin:0;">Jabatan<span style="padding-left: 87px;">:</span></p></td>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;"><?php echo $pesertaJabatan; ?></p></td>
					</tr>
					<tr>
						<?php 
						if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
						{
							$pesertaUnit = $peserta->unitName;
						}
						else
						{
							$pesertaUnit = $peserta->pesertaKetUnitKerja;
						}
						
						?>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;width:160px;margin:0;">Unit Organisasi<span style="padding-left: 30px;">:</span></p></td>
						<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;"><?php echo $pesertaUnit; ?></p></td>
					</tr>
					<?php	
				}
				?>
				
				
			</table>
		</td>
	</tr>
</table>


<table style="width:100%;margin-top:10px;">
	<tr>
		<td style="padding:0;">
		<p style="font-size: 13pt;text-align:center;font-family: maiandra;margin:0;">Telah Mengikuti Pendidikan dan Pelatihan</p>
		<p style="font-size: 16pt;text-align:center;font-family: maiandrabold;margin:0;"><?php echo $diklatName; ?></p>
		<p style="font-size: 13pt;text-align:center;font-family: maiandra;margin:0;"><?php echo $sumJP;?> Jam Pelatihan</p>
		<p style="font-size: 13pt;text-align:center;font-family: maiandra;margin:0;"><?php echo $diklatLocName;?>, <?php echo $tglStart;?> - <?php echo $tglEnd; ?></p>
		</td>
	</tr>
</table>



<table align="center" cellspacing="0" cellpadding="0" style="margin-top:20px;">
	<tr>
		<td>
			<table style="width:100%;padding:0;">
				<tr>
					<td style="padding-right:80px;text-align:center;">
						<div style="width:2.4cm;height: 2.8cm;border:1px solid #000;text-align:center;">
							<br>
							PAS
							<br>
							PHOTO
							<br>
							<br>
							3 x 4
						</div>
					</td>
					<td></td>
					<td style="padding-left:80px;text-align:center;">
						<div style="font-family: maiandrabold;font-size: 13pt;"><?php echo $namaJabatan;?>,</div>
						<br>
						<br>
						<div style="font-family: maiandrabold;font-size: 13pt;"><?php echo $namaKapus;?></div>
						<div style="font-family: maiandra;font-size: 13pt;line-height: 70%;">NIP <?php echo $nipKapus;?></div>
					</td>
				</tr>
			</table>					
		</td>
	</tr>
</table>



		<?php 
		$i++;
		if($i <= sizeof($pesertas))
		{
		?>
			<div class="txt-footer"></div>
		<?php
		}
	}
	?>



</body>
</html>
