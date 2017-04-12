<?php
	
?>
<!DOCTYPE html>
<html moznomarginboxes mozdisallowselectionprint>
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
        size:  landscape;   /* auto is the initial value */
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
  var arr = [];
  var diklatName, kaldikDesc, Tgl, namaKelas, biayaName;
  <?php
  $i = 0;
  foreach($jadwals as $jadwal)
  {
		?>
		arr.push({'no':'<?php echo $i + 1 ?>', 'hari':'<?php echo $jadwal->hari; ?>', 'tanggal':'<?php echo $jadwal->tanggal; ?>', 'waktu':'<?php echo $jadwal->jamMulai.' - '.$jadwal->jamSelesai; ?>','mataajar':'<?php echo $jadwal->mataAjarName; ?>', 'jamlat':'<?php echo $jadwal->jamLat; ?>', 'pengajar':[]});
		<?php
		
		
		foreach($jadwal->pengajar as $pengajar)
		{
			
			?>
			arr[<?php echo $i; ?>].pengajar.push('<?php echo $pengajar; ?>');
			<?php
		}
		
		$i++;
  }
  
  foreach ($kaldiks as $kaldik)
  {
  ?>
		diklatName = '<?php echo $kaldik->diklatName; ?>';
	    kaldikDesc = '<?php echo $kaldik->kaldikDesc; ?>';
		Tgl = 'Tanggal <?php echo $kaldik->tglStart; ?> <?php echo $kaldik->monthStart; ?> S.D <?php echo $kaldik->tglEnd; ?> <?php echo $kaldik->monthEnd; ?> <?php echo $kaldik->yearEnd; ?>';
		namaKelas = '<?php echo $kaldik->namaKelas; ?>';
		biayaName = '<?php echo $kaldik->biayaName; ?>';
		<?php
  }
  ?>
  
  var i, j, str, k, temp, jml;
  str = '';
  i = 0;
  jml = 0;
  while (i < arr.length)
  {
		str += '<h4 style="text-align:center;"><div class="col-xs-4">&nbsp</div><div class="col-xs-4">&nbsp</div><div class="col-xs-4" style="text-align:right;">'+biayaName+'</div><div class="col-xs-12">JADWAL</div><div class="col-xs-12" style="margin-top:5px;">'+diklatName+'</div><div class="col-xs-12" style="margin-top:5px;">'+kaldikDesc+'</div><div class="col-xs-12" style="margin-top:5px;">'+Tgl+'</div><div class="col-xs-12" style="margin-top:5px;text-align:right;">'+namaKelas+'</div><div class="col-xs-12">&nbsp</div></h4><table class="table table-bordered"></td><tr><th>No.</th><th>Hari</th><th>Tanggal</th><th>Waktu</th><th>Mata Pelajaran</th><th>Jam Lat</th><th>Pengajar</th></tr>';
		
		if(i == 0)
		{
			str += '<tr><td>'+arr[i].no+'</td><td>'+arr[i].hari+'</td><td>'+arr[i].tanggal+'</td><td>08:00 s.d Selesai</td><td><strong>Pembukaan<strong></td><td></td><td><strong>Penyelenggara<strong></td></tr>';
		}
		j = 0;
		if(arr.length < 8)
		{
			while (j < arr.length)
			{
				
				str += '<tr><td>'+arr[i].no+'</td><td>'+arr[i].hari+'</td><td>'+arr[i].tanggal+'</td><td>'+arr[i].waktu+'</td><td>'+arr[i].mataajar+'</td><td>'+arr[i].jamlat+'</td><td>';
				jml += parseFloat(arr[i].jamlat);
				k = 0;
				while (k < arr[i].pengajar.length)
				{
						temp = k + 1;
						str += temp + '. '+arr[i].pengajar[k]+'<br>';
						k++;
				}		
				str += '</td></tr>';
				i++;
				j++;
			}
		}
		else
		{
			while (j < 8)
			{
				
				str += '<tr><td>'+arr[i].no+'</td><td>'+arr[i].hari+'</td><td>'+arr[i].tanggal+'</td><td>'+arr[i].waktu+'</td><td>'+arr[i].mataajar+'</td><td>'+arr[i].jamlat+'</td><td>';
				jml += parseFloat(arr[i].jamlat);
				k = 0;
				while (k < arr[i].pengajar.length)
				{
						temp = k + 1;
						str += temp + '. '+arr[i].pengajar[k]+'<br>';
						k++;
				}		
				str += '</td></tr>';
				i++;
				j++;
			}
		}
		
		    
			
		
		
		if(i < arr.length)
		{
			str += '</table>';
			str += '<footer></footer>';
			
		}
		else
		{
			str += '<tr><td>'+arr[i - 1].no+'</td><td>'+arr[i - 1].hari+'</td><td>'+arr[i - 1].tanggal+'</td><td>17:00 s.d Selesai</td><td><strong>Penutupan<strong></td><td></td><td><strong>Penyelenggara<strong></td></tr>';
			str += '<tr><td colspan="4"></td><td style="text-align:center;"><strong>Jumlah Jamlat<strong></td><td>'+jml+'</td><td></td></tr>';
			str += '</table>';
			str += '<div class="col-xs-4"><div class="col-xs-12">Keterangan:</div><div class="col-xs-12"><strong>Jam Istirahat:</strong></div><div class="col-xs-12">I 10.15 - 10.30 WIB (Hari Jumat : 09.45 - 10.00)</div><div class="col-xs-12">II 12.00 - 12.30 WIB (Hari Jumat : 11.30 - 13.00)</div><div class="col-xs-12">III 15.15 - 15.30 WIB</div></div><div class="col-xs-4"></div><div class="col-xs-4"><div class="col-xs-12">Tempat:</div><div class="col-xs-12">Pusdiklatwas BPKP, Ciawi</div><div class="col-xs-12">&nbsp</div><div class="col-xs-12">&nbsp</div><div class="col-xs-12">CP:</div></div><footer></footer>';
		}
	  
  }
  
  
  </script>
</head>
<body onload="window.print();">
<div id="container">

</div>
<!-- ./wrapper -->
<script src="<?php echo base_url();?>assets/lte/plugins/jQueryUI/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
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
document.getElementById('container').innerHTML = str;
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