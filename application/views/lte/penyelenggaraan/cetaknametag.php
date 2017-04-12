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
  //margin-top:1cm;
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
  top: 30;
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
	}
	
	foreach ($pesertas as $peserta)
	{
		if($peserta->jabatanGroupFullName == 'TNI' || $peserta->jabatanGroupFullName == 'POLRI')
		{
			$txtNIP = 'NRP';
		}
		else
		{
			$txtNIP = 'NIP';
		}
	}
?>
</script>  
</head>

<body>

<table style="width: 100%;">
	<?php
	$i = 1;
	$length = sizeof($pesertas);
	
	if ($length == 1)
	{
		$i = 0;
		foreach ($pesertas as $peserta)
		{
			
				?>
					<tr class="txt-footer">
						<td style="width: 335px;padding-top:30px;">
							<div style="border:1px double #000;height:430px;margin-right:3px;margin-bottom: 50px;padding:2px;">
								<div style="border:1px double #000;height:280px;max-height:280px;background-image: url('<?php echo base_url(); ?>assets/img/nametag.jpg');background-repeat:no-repeat;background-size:contain;">
									<div style="color:#FFF;text-align:center;font-size:12pt;margin-top:100px;"><?php echo $kaldikDesc;?></div>
									<div style="color:#FFF;text-align:center;font-size:10pt;bottom:0px;margin-top:10px;"><?php echo $Tgl;?></div>
								</div>
								<div style="border:1px double #000;height: 140px;max-height: 380px;">
									<div style="color:#000;text-align:center;font-size:14pt;font-weight:bold;margin-top:10px"><?php echo $peserta->pesertaNama;?></div>
									<?php 
									if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
									{
										?>
										<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->unitName;?></div>
										<?php
									}
									else 
									{
										?>
										<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->pesertaKetUnitKerja;?></div>
										<?php
									}
									
									?>
									
								</div>
							</div>
							
						</td>
						<td style="width: 361px;opacity:0;padding-top:30px;">
						<div style="border:1px double #000;height:430px;margin-left:23px;margin-bottom: 50px;padding:2px;">
							<div style="border:1px double #000;height:280px;max-height:280px;background-image: url('<?php echo base_url();?>assets/img/nametag.jpg');background-repeat:no-repeat;background-size:contain;">
								<div style="color:#FFF;text-align:center;font-size:12pt;margin-top:100px;"><?php echo $kaldikDesc;?></div>
								<div style="color:#FFF;text-align:center;font-size:10pt;bottom:0px;margin-top:10px;"><?php echo $Tgl;?></div>
							</div>
							<div style="border:1px double #000;height: 140px;max-height: 380px;">
								<div style="color:#000;text-align:center;font-size:14pt;font-weight:bold;margin-top:10px"><?php echo $peserta->pesertaNama;?></div>
								<?php 
									if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
									{
										?>
										<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->unitName;?></div>
										<?php
									}
									else 
									{
										?>
										<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->pesertaKetUnitKerja;?></div>
										<?php
									}
									
									?>
							</div>
						</div>
						</td>
					</tr>
					<?php
				$i++;
			}
	}
	else if ($length % 2 == 0)
	{
		
		$i = 0;
		foreach ($pesertas as $peserta)
		{
			if($i % 2 == 0)
			{
				?>
					<tr class="txt-footer">
						<td style="width: 335px;padding-top:30px;">
							<div style="border:1px double #000;height:430px;margin-right:3px;margin-bottom: 50px;padding:2px;">
								<div style="border:1px double #000;height:280px;max-height:280px;background-image: url('<?php echo base_url(); ?>assets/img/nametag.jpg');background-repeat:no-repeat;background-size:contain;">
									<div style="color:#FFF;text-align:center;font-size:12pt;margin-top:100px;"><?php echo $kaldikDesc;?></div>
									<div style="color:#FFF;text-align:center;font-size:10pt;bottom:0px;margin-top:10px;"><?php echo $Tgl;?></div>
								</div>
								<div style="border:1px double #000;height: 140px;max-height: 380px;">
									<div style="color:#000;text-align:center;font-size:14pt;font-weight:bold;margin-top:10px"><?php echo $peserta->pesertaNama;?></div>
									<?php 
									if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
									{
										?>
										<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->unitName;?></div>
										<?php
									}
									else 
									{
										?>
										<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->pesertaKetUnitKerja;?></div>
										<?php
									}
									
									?>
									
								</div>
							</div>
							
						</td>
					<?php
				}
				else
				{
					?>
						<td style="width: 361px;padding-top:30px;">
						<div style="border:1px double #000;height:430px;margin-left:23px;margin-bottom: 50px;padding:2px;">
							<div style="border:1px double #000;height:280px;max-height:280px;background-image: url('<?php echo base_url();?>assets/img/nametag.jpg');background-repeat:no-repeat;background-size:contain;">
								<div style="color:#FFF;text-align:center;font-size:12pt;margin-top:100px;"><?php echo $kaldikDesc;?></div>
								<div style="color:#FFF;text-align:center;font-size:10pt;bottom:0px;margin-top:10px;"><?php echo $Tgl;?></div>
							</div>
							<div style="border:1px double #000;height: 140px;max-height: 380px;">
								<div style="color:#000;text-align:center;font-size:14pt;font-weight:bold;margin-top:10px"><?php echo $peserta->pesertaNama;?></div>
								<?php 
									if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
									{
										?>
										<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->unitName;?></div>
										<?php
									}
									else 
									{
										?>
										<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->pesertaKetUnitKerja;?></div>
										<?php
									}
									
									?>
							</div>
						</div>
						</td>
					</tr>
					<?php
				}
				$i++;
			}
	}
	else
	{
		
		$i = 0;
		foreach ($pesertas as $peserta)
		{
			if($i % 2 == 0)
			{
				?>
								<tr class="txt-footer">
									<td style="width: 335px;padding-top:30px;">
										<div style="border:1px double #000;height:430px;margin-right:3px;margin-bottom: 50px;padding:2px;">
											<div style="border:1px double #000;height:280px;max-height:280px;background-image: url('<?php echo base_url();?>assets/img/nametag.jpg');background-repeat:no-repeat;background-size:contain;">
												<div style="color:#FFF;text-align:center;font-size:12pt;margin-top:100px;"><?php echo $kaldikDesc;?></div>
												<div style="color:#FFF;text-align:center;font-size:10pt;bottom:0px;margin-top:10px;"><?php echo $Tgl;?></div>
											</div>
											<div style="border:1px double #000;height: 140px;max-height: 380px;">
												<div style="color:#000;text-align:center;font-size:14pt;font-weight:bold;margin-top:10px"><?php echo $peserta->pesertaNama;?></div>
												<?php 
												if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
												{
													?>
													<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->unitName;?></div>
													<?php
												}
												else 
												{
													?>
													<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->pesertaKetUnitKerja;?></div>
													<?php
												}
												
												?>
												
											</div>
										</div>
										
									</td>
								<?php
							}
							else
							{
								?>
									<td style="width: 361px;padding-top:30px;">
									<div style="border:1px double #000;height:430px;margin-left:23px;margin-bottom: 50px;padding:2px;">
										<div style="border:1px double #000;height:280px;max-height:280px;background-image: url('<?php echo base_url();?>assets/img/nametag.jpg');background-repeat:no-repeat;background-size:contain;">
											<div style="color:#FFF;text-align:center;font-size:12pt;margin-top:100px;"><?php echo $kaldikDesc;?></div>
											<div style="color:#FFF;text-align:center;font-size:10pt;bottom:0px;margin-top:10px;"><?php echo $Tgl;?></div>
										</div>
										<div style="border:1px double #000;height: 140px;max-height: 380px;">
											<div style="color:#000;text-align:center;font-size:14pt;font-weight:bold;margin-top:10px"><?php echo $peserta->pesertaNama;?></div>
											<?php 
												if($peserta->pesertaKetUnitKerja == null || $peserta->pesertaKetUnitKerja == '')
												{
													?>
													<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->unitName;?></div>
													<?php
												}
												else 
												{
													?>
													<div style="color:#000;text-align:center;font-size:12pt;margin-top:10px;"><?php echo $peserta->pesertaKetUnitKerja;?></div>
													<?php
												}
												
												?>
										</div>
									</div>
									</td>
								</tr>
								<?php
							}
				$i++;
			}
			
			if($i % 2 == 0)
			{
				?>
					<td style="opacity: 0;width: 361px;padding-top:30px;">
						<div style="border:1px double #000;height:430px;margin-left:23px;margin-bottom: 50px;padding:2px;">
							<div style="border:1px double #000;height:280px;max-height:280px;background-image: url('<?php echo base_url();?>assets/img/nametag.jpg');background-repeat:no-repeat;background-size:contain;">
								<div style="color:#FFF;text-align:center;font-size:12pt;margin-top:100px;"><?php echo $kaldikDesc;?></div>
								<div style="color:#FFF;text-align:center;font-size:10pt;bottom:0px;margin-top:10px;"><?php echo $Tgl;?></div>
							</div>
							<div style="border:1px double #000;height: 140px;max-height: 140px;">
								<div style="color:#000;text-align:center;font-size:14pt;font-weight:bold;margin-top:10px">XXXX</div>
								<div style="color:#000;text-align:center;font-size:14pt;margin-top:10px;">XXXXX</div>
							</div>
						</div>
					</td>
				</tr>
				<?php
			}
			
	}
	?>
</table>
<div id="footer">
  <div class="page-number"></div>
</div>


</body>
</html>
