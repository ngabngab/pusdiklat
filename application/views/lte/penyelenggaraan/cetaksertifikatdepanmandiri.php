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
  margin-top:1.9cm;
  margin-left:2.5cm;
  margin-bottom:0.7cm;
  margin-right:2.5cm;
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
			$filenameMandiri = $kaldik->filenameMandiri;
			$jabatanMandiri = $kaldik->jabatanMandiri;
			$namaMandiri = $kaldik->namaMandiri;
			$nipMandiri = $kaldik->nipMandiri;
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
		
		if($peserta->pesertaNRP == '1')
		{
			$pesertaNRP = 'NRP';
		}
		else
		{
			$pesertaNRP = 'NIP';
		}
		?>
<table style="width:100%">
	<tr>
		<td style="text-align: left;"><img src="http://localhost/simdiklat5/assets/img/logobpkp.png"></td>
		<td style="text-align: right;"><img src="http://localhost/simdiklat5/assets/imgupload/<?php echo $filenameMandiri;?>"></td>
	</tr>
</table>
<table style="width:100%;">
	<tr>
		<td style="padding: 0;">
		<p style="text-align:center;font-family: trebucbd;margin:0;font-size: 28pt;text-align:center;letter-spacing: 10px;line-height: 100%;">SERTIFIKAT</p>
		<p style="font-size: 13pt;text-align:center;font-family: maiandra;margin:0;line-height: 100%;">Nomor: SERT-<?php echo $peserta->nomorSertifikat;?>/DL/<?php echo $bidangID;?>/<?php echo $year;?></p>
		<p style="font-size: 13pt;text-align:center;font-family: maiandra;margin:20px 0;">Diberikan kepada:</p>
		<p style="font-size: 31pt;text-align:center;font-family: monotype;margin:0;padding:0;line-height: 100%;"><?php echo $peserta->namaAbsen; ?></p>
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
							<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;"><?php echo $peserta->pangkatName;?>
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
							<td style="padding:0;vertical-align:top;"><p style="font-size: 13pt;text-align:left;margin:0;"><?php echo $peserta->pesertaKetPangkat;?>
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




<table style="width:100%;margin-top:20px;">
	<tr>
		<td style="font-size: 13pt;text-align:center;font-family: maiandra;line-height: 90%;">Telah Mengikuti Pendidikan dan Pelatihan</td>
	</tr>
	<tr>
		<td style="font-size: 18pt;text-align:center;font-family: maiandrabold;line-height: 110%;"><?php echo $diklatName; ?></td>
	</tr>
	<tr>
		<td style="font-size: 13pt;text-align:center;font-family: maiandra;"><?php echo $sumJP;?> Jam Pelatihan</td>
	</tr>
	<tr>
		<td style="font-size: 13pt;text-align:center;font-family: maiandra;"><?php echo $diklatLocName;?>, <?php echo $tglStart;?> - <?php echo $tglEnd; ?></td>
	</tr>
</table>

<table style="width:100%;">
	<tr>
		<td style="text-align: center;">
			<div style="font-family: maiandrabold;font-size: 13pt;"><?php echo $namaJabatan;?>,</div>
			<br>
			<br>
			<br>
			<div style="font-family: maiandrabold;font-size: 13pt;"><?php echo $namaKapus;?></div>
			<div style="font-family: maiandra;font-size: 13pt;line-height: 70%;">NIP <?php echo $nipKapus;?></div>
		</td>	
		<td style="text-align: center;">
			<div style="font-family: maiandrabold;font-size: 13pt;"><?php echo $jabatanMandiri;?>,</div>
			<br>
			<br>
			<br>
			<div style="font-family: maiandrabold;font-size: 13pt;"><?php echo $namaMandiri;?></div>
			<div style="font-family: maiandra;font-size: 13pt;line-height: 70%;">NIP <?php echo $nipMandiri;?></div>
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
