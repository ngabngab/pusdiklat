<?php
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMDIKLAT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/fontawesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/ionicons/ionicons.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	   
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/dist/css/style.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- jQuery 2.2.3 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script src="<?php echo base_url();?>assets/lte/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <style type="text/css" media="print">
	@page 
    {
        size:  potrait;   /* auto is the initial value */
        //margin: 0mm;  /* this affects the margin in the printer settings */
    }

    html
    {
        background-color: #FFFFFF; 
        margin: 0px;  /* this affects the margin on the html before sending to printer */
    }

    body
    {
        //border: solid 1px blue ;
        //margin: 10mm 15mm 10mm 15mm; /* margin you want for the content */
    }
	footer {page-break-after: always;}
  </style>
  <script>
	var kaldikDesc, hariStart, hariEnd, tglStart, tglEnd, tempatName, kelasName, nomorST, namaKapus, nipKapus, month, year, monthStartStr, dikklatTypeID, diklatLocName, bidangShortName;
	month = '<?php echo $month; ?>';
	year = '<?php echo $year; ?>';
	<?php
	
	foreach ($kaldiks as $kaldik)
	{
		?>
		kaldikDesc = '<?php echo $kaldik->kaldikDesc; ?>';
		hariStart = '<?php echo $kaldik->hariStart; ?>';
		hariEnd = '<?php echo $kaldik->hariEnd; ?>';
		tglStart = '<?php echo $kaldik->strStartDate; ?>';
		tglEnd = '<?php echo $kaldik->strEndDate; ?>';
		tempatName = '<?php echo $kaldik->tempatName; ?>';
		monthStartStr = '<?php echo $kaldik->monthStartStr; ?>';
		diklatTypeID = '<?php echo $kaldik->diklatTypeID; ?>';
		diklatLocName = '<?php echo $kaldik->diklatLocName; ?>';
		bidangShortName = '<?php echo $kaldik->bidangShortName;?>';
		<?php
	}
	
	foreach($kelass as $kelas)
	{
		?>
		kelasName = '<?php echo $kelas->namaKelas; ?>';
		nomorST = '<?php echo $kelas->nomorST; ?>';
		
		<?php
	}
	
	foreach ($kapuss as $kapus)
	{
		?>
		namaKapus = '<?php echo $kapus->namaKapus; ?>';
		nipKapus = '<?php echo $kapus->nipKapus; ?>';
		<?php
	}
	?>
	
	if(nomorST.length == 0)
	{
		nomorST = 'Nomor: ST-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp/DL/'+diklatTypeID+'/'+year;
	}
	else
	{
		nomorST = 'Nomor: ST-'+nomorST+'/DL/'+diklatTypeID+'/'+year;
	}
	
  </script>
</head>
<body onload="window.print();">
<div id="container" style="margin-top:100px;">
	<div class="col-xs-12"><center><strong><h3 style="font-weight:bold;">SURAT TUGAS</h3></strong></center></div>
	<div class="col-xs-12" style="padding:0;margin:0;"><center><h4 id="nomorSuratTugas" style="padding:0;margin:0;"></h4><center></div>
	<div class="col-xs-12" style="margin-top:15px;font-size:14pt;"><div class="col-xs-12">Kepala Pusat Pendidikan dan Pelatihan Pengawasan BPKP dengan ini</div>
	<div class="col-xs-12">Menugaskan</div></div>
	<div class="col-xs-12" style="margin-top:5px;font-size:14pt;">
		<div class="col-xs-12">
		<table class="table table-responsive">
			<thead>
				<tr>
					<td>No</td>
					<td style="text-align:center;">Nama</td>
					<td style="text-align:center;">NIP</td>
					<td style="text-align:center;">Jabatan</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 1;
					foreach($lists as $list)
					{
						?>
						<tr>
							<td style="text-align:right"><?php echo $i; ?></td>
							<td><?php echo $list->pegawaiName; ?></td>
							<td><?php echo $list->pegawaiNIP; ?></td>
							<td><?php echo $list->jabatanFullName; ?></td>
						</tr>
						<?php
						$i++;
					}
				?>
			</tbody>
		</table>
		</div>
	</div>
	<div class="col-xs-12" style="margin-top:5px;font-size:14pt;">
		<div class="col-xs-12">Untuk mengajar pada Diklat <span id="kaldikDesc"></span> pada:</div>
	</div>
	<div class="col-xs-12" style="margin-top:5px;font-size:14pt;">
		<div class="col-xs-2">Hari/tanggal</div><div class="col-xs-1">:</div><div style="text-align:left" class="col-xs-9" id="hariTanggal"></div>
		<div class="col-xs-2">Waktu</div><div class="col-xs-1">:</div><div style="text-align:left" class="col-xs-9">08.00 s.d. 17.00 WIB</div>
		<div class="col-xs-2">Tempat</div><div class="col-xs-1">:</div><div style="text-align:left" class="col-xs-9" id="tempatName"></div>
		<div class="col-xs-2">Materi</div><div class="col-xs-1">:</div><div style="text-align:left" class="col-xs-9">Sesuai Jadwal Terlampir</div>
		<div class="col-xs-2">Kelas</div><div class="col-xs-1">:</div><div style="text-align:left" class="col-xs-9" id="kelasName">Sesuai Jadwal Terlampir</div>
		
	</div>
	<div class="col-xs-12" style="margin-top:5px;font-size:14pt;">
		<div class="col-xs-12">Demikian Untuk Dilaksanakan Dengan Penuh Tanggung Jawab</div>
	</div>
	<div class="col-xs-12" style="margin-top:10px;font-size:14pt;">
		<div class="col-xs-3">&nbsp</div>
		<div class="col-xs-3">&nbsp</div>
		<div class="col-xs-6" id="tanggalTTD" style="text-align:center;"></div>
	</div>
	<div class="col-xs-12" style="font-size:14pt;">
		<div class="col-xs-3">&nbsp</div>
		<div class="col-xs-3">&nbsp</div>
		<div class="col-xs-6" style="text-align:center;">Kepala Pusat</div>
	</div>
	<div class="col-xs-12">&nbsp</div>
	<div class="col-xs-12">&nbsp</div>
	<div class="col-xs-12">&nbsp</div>
	<div class="col-xs-12" style="font-size:14pt;">
		<div class="col-xs-3">&nbsp</div>
		<div class="col-xs-3">&nbsp</div>
		<div class="col-xs-6" style="text-align:center;" id="namaKapus"></div>
	</div>
	<div class="col-xs-12" style="font-size:14pt;">
		<div class="col-xs-3">&nbsp</div>
		<div class="col-xs-3">&nbsp</div>
		<div class="col-xs-6" style="text-align:center;" id="nipKapus"></div>
	</div>
	<div class="col-xs-12" style="margin-top:5px;font-size:14pt;">
		<div class="col-xs-12">Tembusan:</div>
		<div class="col-xs-12" id="kabid"></div>
		<div class="col-xs-12">2.Kepala Subbagian Keuangan</div>
	</div>
</div>

<!-- ./wrapper -->
<script src="<?php echo base_url();?>assets/lte/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
  document.getElementById('nomorSuratTugas').innerHTML = nomorST;
  document.getElementById('kaldikDesc').innerHTML = kaldikDesc;
  document.getElementById('hariTanggal').innerHTML = hariStart + ' s.d. ' + hariEnd+', '+tglStart+' s.d. '+tglEnd;
  document.getElementById('tempatName').innerHTML = tempatName + ','+diklatLocName;
  document.getElementById('kelasName').innerHTML = kelasName +' (Sesuai Jadwal Terlampir)';
  document.getElementById('tanggalTTD').innerHTML = diklatLocName+',&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp' + monthStartStr +' '+year;
  document.getElementById('namaKapus').innerHTML = namaKapus;
  document.getElementById('nipKapus').innerHTML = 'NIP ' + nipKapus;
  document.getElementById('kabid').innerHTML = '1. Kepala Bidang ' + bidangShortName;
  
</script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/lte/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url();?>assets/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Sparkline 
<script src="<?php echo base_url();?>assets/lte/plugins/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/morris/morris.min.js"></script>-->
<!-- Sparkline 
<script src="<?php echo base_url();?>assets/lte/plugins/sparkline/jquery.sparkline.min.js"></script>-->
<!-- jvectormap 
<script src="<?php echo base_url();?>assets/lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>-->
<!-- jQuery Knob Chart 
<script src="<?php echo base_url();?>assets/lte/plugins/knob/jquery.knob.js"></script>-->
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/lte/plugins/moment/moment.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/timepicker/bootstrap-timepicker.js"></script>
<!-- Bootstrap WYSIHTML5 
<script src="<?php echo base_url();?>assets/lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>-->
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/lte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/lte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/lte/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) 
<script src="<?php echo base_url();?>assets/lte/dist/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/lte/dist/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/lte/plugins/ckeditor/ckeditor.js"></script>
<script>

/*
  $(function () {
    $("#example1").DataTable();
	$("#example2").DataTable();
	$("#example3").DataTable();
	$("#example4").DataTable();
	$("#example5").DataTable();
	$("#example6").DataTable();
    
	$('#example7').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": true
    });
  });
*/ 
  
</script>
</body>
</html>