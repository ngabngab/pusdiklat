<!DOCTYPE HTML>
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

body {
  font-family: sans-serif;
  margin-top:3.5cm;
  margin-left:2.5cm;
  margin-bottom:0.41cm;
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
	
?>
</script>  
</head>

<body>
<div style="font-family: maiandrabold;text-align:center;"><p style="font-size: 16pt;margin:0;padding:0;">MATERI PENDIDIKAN DAN PELATIHAN</p></div>


<?php 
if($jmlSesi > 1)
{
	$i = 1;
	$totalSumJP = 0;
	foreach ($sesis as $sesi)
	{
		$sumJP = 0;
		
		?>
		<div style="font-family: maiandra;line-height: 1%;margin-top:10px;"><p style="font-size:10pt;">Metode: <?php echo $sesi->sesiName;?> (<?php echo $sesi->startDateRealisasi;?> - <?php echo $sesi->endDateRealisasi;?>)</p></div>
		<table style="width: 100%;border: 1px solid #000;">
			<thead>
				<tr>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:5%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;">NO</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:35%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;">MATERI</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:10%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;">JAMLAT</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:5%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;">NO</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:35%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;">MATERI</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:10%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;">JAMLAT</p></td>
				</tr>
			</thead>
			<tbody>
		<?php
		$jml = sizeof($jadwals);
		$i = 0;
		$j = 1;
		$k = 0;
		while ($i < $jml)
		{
			/*
			if($jadwals[$i]->sesiNo == $sesi->sesiNo)
			{
				?>
				<tr>
					<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"><?php echo $i;?></p></td>
					<td style="padding-left:5px;left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->mataAjarName;?></p></td>
					<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->sumJamlat;?></p></td>
					<?php
					$sumJP = $sumJP + (int)$jadwals[$i]->sumJamlat;
					$totalSumJP = $totalSumJP + $sumJP;
					$i++;
					$j++;
					
					if($i < $jml)
					{
						if($jadwals[$i]->sesiNo == $sesi->sesiNo)
						{
							?>
							<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"><?php echo $i;?></p></td>
							<td style="padding-left:5px;left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->mataAjarName;?></p></td>
							<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->sumJamlat;?></p></td>
							<?php
						}
					}
					else 
					{
						?>
						<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"></p></td>
						<td style="padding-left:5px;left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"></p></td>
						<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"></p></td>
						<?php
					}
					
					?>
				</tr>
				<?php
				
			}
			$j++;
			$i++;
			*/
			if($jadwals[$i]->sesiNo == $sesi->sesiNo)
			{
				if($k % 2 == 0)
				{
					?>
					<tr>
					<?php	
				}
				?>
				<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"><?php echo $j;?></p></td>
				<td style="padding-left:5px;left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->mataAjarName;?></p></td>
				<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->sumJamlat;?></p></td>			
				<?php
				if($k % 2 != 0)
				{
					?>
					</tr>
					<?php	
				}
				$sumJP = $sumJP + (int)$jadwals[$i]->sumJamlat;
				$totalSumJP = $totalSumJP + (int)$jadwals[$i]->sumJamlat;
				$k++;
				$j++;
			}
			$i++;
		}
		if($k % 2 != 0)
		{
			?>
				<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"></p></td>
				<td style="padding-left:5px;left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"></p></td>
				<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size:10pt;margin:0;padding:0;"></p></td>			
			</tr>
			<?php
		}
		?>
		</tbody>
		<tfoot>
			<tr>
				<td style="text-align:center;border: 1px solid #000;font-family: maiandrabold;padding:2px;"></td>
				<td style="text-align:center;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size:13pt;margin:0;padding:0;"></p></td>
				<td style="text-align:center;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size:13pt;margin:0;padding:0;"></p></td>
				<td style="text-align:center;border: 1px solid #000;font-family: maiandrabold;padding:2px;"></td>
				<td style="text-align:center;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size:13pt;margin:0;padding:0;">JUMLAH</p></td>
				<td style="text-align:center;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size:13pt;margin:0;padding:0;"><?php echo $sumJP;?></p></td>
			</tr>
			<!-- <tr>
				<td style="text-align:center;border: 1px solid #000;font-family: maiandrabold;width:5%;"></td>
				<td style="text-align:center;border: 1px solid #000;font-family: maiandrabold;width:80%;"><p style="font-size:13pt;margin:0;padding:0;">TOTAL JUMLAH JP</p></td>
				<td style="text-align:center;border: 1px solid #000;font-family: maiandrabold;width:15%;"><p style="font-size:13pt;margin:0;padding:0;"><?php echo $totalSumJP;?></p></td>
			</tr> -->
		</tfoot>
		</table>	
		<?php
	}
	?>
	<table style="width: 100%;border: 1px solid #000;">
			<thead>
				<tr>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:5%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;visibility: hidden;">NO</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:35%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;visibility: hidden;">MATERI</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:10%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;visibility: hidden;">JAMLAT</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:5%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;visibility: hidden;">NO</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:35%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;">TOTAL JAMLAT</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:10%;padding:2px;"><p style="font-size:12pt;margin:0;padding:0;"><?php echo $totalSumJP;?></p></td>
				</tr>
			</thead>
	</table>
<?php
}
else
{
		/*
		$jml = sizeof($jadwals);
		$length = $jml / 2;
		$length = (int)$length;
		if($length % 2 != 0)
		{
			$length++;
		}
		?>
		<table style="margin-top:10px;width:100%;">
			<tr>
				<td style="width: 50%;margin:0;padding:0;">
					<table style="width: 100%;border: 1px solid #000;">
						<tr>
							<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:5%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">NO</p></td>
							<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:30%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">MATERI</p></td>
							<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:15%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">JAMLAT</p></td>				
						</tr>
						<?php 
							$i = 0;
							$j = 1;
							while ($i < $length)
							{
								?>
								<tr>
									<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $j;?></p></td>
									<td style="padding-left:5px;text-align:left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->mataAjarName;?></p></td>
									<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->sumJamlat;?></p></td>
								</tr>
								<?php
								$i++;
								$j++;
							}
						?>
					</table>
				</td>
				<td style="width: 50%;margin:0;padding:0;">
					<table style="width: 100%;border: 1px solid #000;">
						<tr>
							<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:5%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">NO</p></td>
							<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:30%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">MATERI</p></td>
							<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:15%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">JAMLAT</p></td>				
						</tr>
						<?php 
							
							while ($i < $jml)
							{
								?>
								<tr>
									<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $j;?></p></td>
									<td style="padding-left:5px;text-align:left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->mataAjarName;?></p></td>
									<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->sumJamlat;?></p></td>
								</tr>
								<?php
								$i++;
								$j++;
							}
						?>
					</table>
				</td>
			</tr>
		</table>
		
		<!-- <table style="width: 100%;border: 1px solid #000;">
			<thead>
				<tr>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:5%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">NO</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:85%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">MATERI</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:15%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">JAMLAT</p></td>				
				</tr>
			</thead>
			<tbody>
			<?php
			//
			$i = 1;
			foreach ($jadwals as $jadwal)
			{
				?>
				<tr>
					<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $i;?></p></td>
					<td style="padding-left:5px;text-align:left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwal->mataAjarName;?></p></td>
					<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwal->sumJamlat;?></p></td>
				</tr>
				<?php
				$i++;
			}
			?>
			</tbody>
			<tfoot>
				<tr>
				<td style="text-align:center;font-size:10pt;border: 1px solid #000;font-family: maiandrabold;padding:2px;"></td>
				<td style="text-align:center;font-size:10pt;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size: 12pt;margin:0;padding:0;">JUMLAH</p></td>
				<td style="text-align:center;font-size:10pt;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size: 12pt;margin:0;padding:0;"><?php echo $sumJP;?></p></td>
				</tr>
			</tfoot>
		</table>-->
		<?php
		*/
		$jml = sizeof($jadwals);
		?>
		<table style="width: 100%;border: 1px solid #000;">
			<thead>
				<tr>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:5%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">NO</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:35%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">MATERI</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:10%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">JAMLAT</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:5%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">NO</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:35%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">MATERI</p></td>
					<td style="border: 1px solid #000;font-family: maiandrabold;text-align:center;width:10%;padding:2px;"><p style="font-size: 16pt;margin:0;padding:0;">JAMLAT</p></td>				
				</tr>
			</thead>
			<tbody>
			<?php
			//
			$i = 0;
			$j = 1;
			while ($i < $jml)
			{
				?>
				<tr>
					<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $j;?></p></td>
					<td style="padding-left:5px;text-align:left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->mataAjarName;?></p></td>
					<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->sumJamlat;?></p></td>
					<?php 
					$i++;
					$j++;
					if ($i < $jml)
					{
						?>
						<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $j;?></p></td>
						<td style="padding-left:5px;text-align:left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->mataAjarName;?></p></td>
						<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"><?php echo $jadwals[$i]->sumJamlat;?></p></td>
						<?php
					}
					else
					{
						?>
						<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"></p></td>
						<td style="padding-left:5px;text-align:left;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"></p></td>
						<td style="text-align:center;border-bottom: 1px dashed #000;border-right: 1px solid #000;font-family: maiandra;padding:2px;"><p style="font-size: 10pt;margin:0;padding:0;"></p></td>
						<?php
					}
					?>
				</tr>
				<?php
				$i++;
				$j++;
			}
			
			?>
			</tbody>
			<tfoot>
				<tr>
				<td style="text-align:center;font-size:10pt;border: 1px solid #000;font-family: maiandrabold;padding:2px;"></td>
				<td style="text-align:center;font-size:10pt;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size: 12pt;margin:0;padding:0;"></td>
				<td style="text-align:center;font-size:10pt;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size: 12pt;margin:0;padding:0;"></td>
				<td style="text-align:center;font-size:10pt;border: 1px solid #000;font-family: maiandrabold;padding:2px;"></td>
				<td style="text-align:center;font-size:10pt;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size: 12pt;margin:0;padding:0;">JUMLAH</p></td>
				<td style="text-align:center;font-size:10pt;border: 1px solid #000;font-family: maiandrabold;padding:2px;"><p style="font-size: 12pt;margin:0;padding:0;"><?php echo $sumJP;?></p></td>
				</tr>
			</tfoot>
			</table>
<?php 
}
?>

<table style="width: 100%;">
	<tr>
		<td style="width: 20%;"></td>
		<td style="width: 20%;"></td>
		<td style="width: 60%;">
			<table style="width: 100%;">
				<tr>
					<td style="text-align:center;font-size:10pt;font-family: maiandra;">Bogor, <?php echo $tglEnd;?></td>
				</tr>
				<tr>
					<td style="text-align:center;font-size:10pt;font-family: maiandra;">Kepala Bidang</td>
				</tr>
				<tr>
					<td style="text-align:center;font-size:10pt;font-family: maiandra;"><?php echo $namaJabatanKabid;?></td>
				</tr>
				<tr>
					<td style="text-align:center;font-size:10pt;font-family: maiandrabold;padding-top: 50px;"><?php echo $namaKabid;?></td>
				</tr>
				<tr>
					<td style="text-align:center;font-size:10pt;font-family: maiandra;line-height: 10%;"><?php echo $nipKabid;?></td>
				</tr>
			</table>
		</td>
	</tr>
</table>




</body>
</html>
