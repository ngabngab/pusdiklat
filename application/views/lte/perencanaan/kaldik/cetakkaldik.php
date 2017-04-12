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
  margin-top:4cm;
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
  page-break-inside: avoid;
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
<table id="example7" style="width:100%;">
	<thead>
		<tr>
			<td style="padding:5px;border:1px solid #000;">NO</td>
					  <td style="padding:5px;border:1px solid #000;">DIKLAT</td>
					  <td style="padding:5px;border:1px solid #000;">Lokasi</td>
					  <td style="padding:5px;border:1px solid #000;">Tanggal</td>
					  <?php
						$length = sizeof($calendars->date);
						$Date = $calendars->date;
						$Tgl = $calendars->tgl;
						$Day = $calendars->day;
						$Libur = $calendars->libur;
						$Kelas = array();
						$SelisihKelas = array();
						$totalKelas = array();
						$i = 0;
						while ($i < $length)
						{
							$Kelas[$i] = 0;
							$SelisihKelas[$i] = 0;
							$totalKelas[$i] = 0;
							$i++;
						}
						$Max = $calendars->max;
						foreach($calendars->tgl as $cal)
						{
							?>
							<td style="padding:5px;border:1px solid #000;"><?php echo $cal;?></td>
							<?php
						}						
					  ?>
					</tr>
					<tr>
						<th style="padding:5px;border:1px solid #000;"></th>
						<th style="padding:5px;border:1px solid #000;"></th>
						<th style="padding:5px;border:1px solid #000;"></th>
						<th style="padding:5px;border:1px solid #000;"></th>
						<?php
						foreach($calendars->day as $cal)
						{
							if($cal == '1')
							{
								$cal = 'S';
							}
							else if($cal == '2')
							{
								$cal = 'S';
							}
							else if($cal == '3')
							{
								$cal = 'R';
							}
							else if($cal == '4')
							{
								$cal = 'K';
							}
							else if($cal == '5')
							{
								$cal = 'J';
							}
							else if($cal == '6')
							{
								$cal = 'S';
							}
							else
							{
								$cal = 'M';
							}
							?>
							<th style="padding:5px;border:1px solid #000;"><?php echo $cal;?></th>
							<?php
						}
						?>
					</tr>
					
					</thead>
					<tbody>
						<?php
						if($kaldiks)
						{
							$h = 1;
							foreach($kaldiks as $kaldik)
							{
								if($kaldik->kaldikStat == 0)
								{
									$statKaldik = 'Non Kaldik';
								}
								else
								{
									$statKaldik = 'Kaldik';
								}
								
								?>
								<tr>
								<td style="padding:5px;border:1px solid #000;"><?php echo $h; ?></td>
								<td style="padding:5px;border:1px solid #000;"><?php echo $kaldik->kaldikDesc;?><br>
								<span style="color:#337ab7;"><?php echo $kaldik->strKaldikID; ?></span>
								</td>
								
								<td style="padding:5px;border:1px solid #000;"><?php echo $kaldik->diklatLocName; ?>
								</td>
								<td style="padding:5px;border:1px solid #000;"><?php echo $kaldik->strStartDate; ?> - <?php echo $kaldik->strEndDate; ?>
								</td>
								<?php
								
								$i = 0;
								while ($i < $length)
								{
									if($Day[$i] == '7')
									{
										?>
										<td style="background-color:#9E9E9E;padding:5px;border:1px solid #000;"><a href="#" data-toggle="tooltip" data-placement="top" title="Hari Minggu"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
										<?php	
									}
									else if ($kaldik->cal[$i] == false)
									{
										?>
										<td style="padding:5px;border:1px solid #000;">&nbsp</td>
										<?php
									}
									else
									{	
										foreach($kaldik->cal[$i] as $calen)
										{
											
											
											if($calen->enddate == '1')
											{
												if($kaldik->diklatLocID == '346')
												{
													$Kelas[$i] = $Kelas[$i] + $kaldik->kelas;
												}
												
												$totalKelas[$i] = $totalKelas[$i] + $kaldik->kelas;
												
												if ($kaldik->color != null and $kaldik->color != '')
												{
													?>
													<td style="background-color:#<?php echo $kaldik->color; ?>;padding:5px;border:1px solid #000;text-align:center;"><a href="#" id="<?php echo base_url(); ?>kaldik/viewkaldik/<?php echo $kaldik->kaldikID; ?>/<?php echo $kaldik->startDate; ?>" onclick="viewKaldik(this.id);" data-toggle="tooltip" data-html="true" data-placement="top" title="<?php echo $calen->sesiName."<br>Kurikulum : ".$calen->kurikulumSesiDesc . "<br>Sumber Biaya : " . $kaldik->biayaName . "<br>".$statKaldik; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;"><?php echo $kaldik->kelas; ?></div></a></td>
													<?php
												}
												else
												{
												?>
													<td style="background-color:#03A9F4;padding:5px;border:1px solid #000;;text-align:center;"><a href="#" id="<?php echo base_url(); ?>kaldik/viewkaldik/<?php echo $kaldik->kaldikID; ?>/<?php echo $kaldik->startDate; ?>" onclick="viewKaldik(this.id);" data-toggle="tooltip" data-html="true" data-placement="top" title="<?php echo $calen->sesiName."<br>Kurikulum : ".$calen->kurikulumSesiDesc . "<br>Sumber Biaya : " . $kaldik->biayaName."<br>".$statKaldik; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;"><?php echo $kaldik->kelas; ?></div></a></td>
												<?php
												}
											}
											else if ($calen->enddate == '2')
											{
												?>
												<td style="background-color:#F44336;padding:5px;border:1px solid #000;"><a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $calen->holidayDesc; ?>"><div style="margin:0!important;padding:0!important;width:100%;height:100%;display:inline-block;">&nbsp</div></a></td>
												<?php
											}
											else
											{
												?>
												<td style="padding:5px;border:1px solid #000;">&nbsp</td>
												<?php
											}
										}
										
									}
									
									$i++;
								}
								
								?>
								</tr>
								<?php
								$h++;
							}
						}
						?>
					</tbody>
					<tfoot>
					
					<tr>
						<td style="padding:5px;border:1px solid #000;"></td>
						<td style="padding:5px;border:1px solid #000;">Kelas Terpakai</td>
						<td style="padding:5px;border:1px solid #000;"></td>
						<td style="padding:5px;border:1px solid #000;"></td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							?>
							<td style="padding:5px;border:1px solid #000;"><?php echo $totalKelas[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					
					<tr>
						<td style="padding:5px;border:1px solid #000;"></td>
						<td style="padding:5px;border:1px solid #000;">Max Kelas</td>
						<td style="padding:5px;border:1px solid #000;"></td>
						<td style="padding:5px;border:1px solid #000;"></td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							?>
							<td style="padding:5px;border:1px solid #000;"><?php echo $Max[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					<tr>
						<td style="padding:5px;border:1px solid #000;"></td>
						<td style="padding:5px;border:1px solid #000;">Sisa Kelas</td>
						<td style="padding:5px;border:1px solid #000;"></td>
						<td style="padding:5px;border:1px solid #000;"></td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							$SelisihKelas[$i] = $Max[$i] - $Kelas[$i];
							
							?>
							<td style="padding:5px;border:1px solid #000;"><?php echo $SelisihKelas[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					<tr>
						<td style="padding:5px;border:1px solid #000;"></td>
						<td style="padding:5px;border:1px solid #000;">Total Kelas</td>
						<td style="padding:5px;border:1px solid #000;"></td>
						<td style="padding:5px;border:1px solid #000;"></td>
						<?php
						$i = 0;
						while ($i < $length)
						{
							?>
							<td style="padding:5px;border:1px solid #000;"><?php echo $totalKelas[$i]; ?></td>
							<?php
							$i++;
						}
						?>
					</tr>
					</tfoot>
					</table>


</body>
</html>
