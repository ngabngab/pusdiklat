<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$loggedIn = $this->session->userdata['logged_in'];

?>
<script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>/assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
  <link href="<?php echo base_url();?>assets/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
<script>
    $(function () {
        var dates = $("#tanggalAwal, #tanggalAkhir").datepicker({
            defaultDate: "+1w",
            //changeMonth: true,
            //changeYear: true,
            numberOfMonths: 1,
            onSelect: function (selectedDate) {
                var option = this.id == "tanggalAwal" ? "minDate" : "maxDate",
                        instance = $(this).data("datepicker"),
                        date = $.datepicker.parseDate(
                                instance.settings.dateFormat ||
                                $.datepicker._defaults.dateFormat,
                                selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            }
        });
        $("#tanggalAwal, #tanggalAkhir").datepicker('option', 'dateFormat', 'yy-mm-dd');
    });
</script>
<script>
        $(document).ready(function() {
            $('#dataRencanaKaldik').DataTable({
                responsive: false,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
        </script>
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Data <small>Kalender Diklat</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data | Kalender Diklat
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
				<!-- show error message -->
				<?php
				if(validation_errors()!= null){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger">
								<?php echo validation_errors(); ?>
							</div>
						</div>
					</div>
					<?php
				}
				if($errMessage!= ''){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger">
								<?php echo $errMessage; ?>
							</div>
						</div>
					</div>
					<?php
				}
				if($success == true){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-success">
								<strong>Well done!</strong> Data has been saved successfully.
							</div>
						</div>
					</div>
					<?php
				}
				
				?>
				<!-- show error message -->


                <div class="row">

					<div class="col-lg-12" style="margin-top:1%;">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Kalender Diklat</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataRencanaKaldik">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Kaldik</th>
                                            <th>Nama Diklat</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Jumlah Kelas</th>
                                            <th>Jumlah Peserta</th>
                                            <th>Lokasi</th>
                                            <th>Sumber Biaya</th>
                                            <th style="width: 10%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($kaldik != null){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($kaldik as $kd){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $kd->kaldikID; ?></td>
                                                    <td><?php echo $kd->diklatName; ?></td>
                                                    <td><?php echo date('d-m-Y',strtotime($kd->startDate)); ?></td>
                                                    <td><?php echo date('d-m-Y',strtotime($kd->endDate)); ?></td>
                                                    <td><?php echo $kd->kelas; ?></td>
                                                    <td><?php echo $kd->participantLength; ?></td>
                                                    <td><?php echo $kd->diklatLocName; ?></td>
                                                    <td><?php echo $kd->biayaName; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-success btn-xs" title="realisasi" href="<?php echo base_url();?>index.php/kaldik/realupdate/<?php echo $kd->realKaldikID;?>"><i class="fa fa-check-square-o"></i></a> <a class="btn btn-info btn-xs" title="edit" href="<?php echo base_url();?>index.php/kaldik/update/<?php echo $kd->kaldikID;?>"><i class="fa fa-pencil"></i></a> <a href="<?php echo base_url();?>index.php/kaldik/delete/<?php echo $kd->kaldikID;?>" class="btn btn-danger btn-xs" title="delete" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
                                        }else{
                                            ?>
                                           <tr>
                                           <td colspan="10" > <center>Data Not Found</center></td>
                                           </tr>
                                           <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->