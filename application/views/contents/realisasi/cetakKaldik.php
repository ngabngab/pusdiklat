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
            $('#RealKaldik').DataTable({
                    responsive: true
            });
        });
        </script>
<script>
setInterval(function() {
    //alert($('#tanggalAwal').val());
    if ($('#tanggalAwal').val()== '' || $('#tanggalAkhir').val() == '' || $('#diklatTypeID').val() == ''){
        document.getElementById("cetak").disabled = true;
    } else {
        document.getElementById("cetak").disabled = false;
    }
}, 100);
</script>
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data <small>Realisasi Diklat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data | Realisasi Diklat
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<script language="JavaScript">
				
				function showList() {
					var w = (screen.width/2);
					var h = (screen.height/2);
					var left = (screen.width/2)-(w/2);
					var top = (screen.height/2)-(h/2);
					sList = window.open('<?php echo base_url(); ?>index.php/listDiklatType', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
				}
				function remLink() {
					if (window.sList && window.sList.open && !window.sList.closed)
						window.sList.opener = null;
				}
                
                function diklatRef($id){
                    
                }
				
				</script>

                <div class="row">
                    <div class="col-lg-12" style="margin-top:1%;">
                        <div class="panel panel-default">
                            <div class="panel-heading">Cetak Realisasi Kalender Diklat</div>
                            <div class="panel-body">
                            <?php 
						$attributes = array('name' => 'len', 'target' => '_blank');
						echo form_open('kaldik/cetakKaldik/', $attributes); 
                        $diklatTypeName = "";
                        $diklatTypeID = "";
                        ?>
                        <label>Jenis Diklat <font style="color: red;">*</font></label>
							<div class="form-group input-group" style="z-index:0;">
								<input class="form-control" type="hidden" id="diklatTypeID" name="diklatTypeID" readonly value="">
								<input class="form-control" type="text" id="diklatTypeName" name="diklatTypeName" readonly value="<?php echo $diklatTypeName; ?>">
								<span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
							</div>
                            <div id="Date">
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Awal</label>
                                <input type="text" class="form-control" name="startDate" value="" placeholder="Start Date" id="tanggalAwal" style="width: 150px;"/>
                            </div>
                            <div class="form-group" id="sandbox-container">
                                <label>Tanggal Akhir</label>
                                <input type="text" class="form-control" name="endDate" value="" placeholder="End Date" id="tanggalAkhir" style="width: 150px;"/>
							</div>
                            
                            <button type="submit" name="btnSave" class="btn btn-default" id='cetak'>Cetak</button>
                            </div>
                            </form>
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