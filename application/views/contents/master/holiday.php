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
        <script>
        $(document).ready(function() {
            $('#dataHoliday').DataTable({
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
                        <h1 class="page-header">
                            Data Master <small>Hari libur</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | Hari libur
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
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Tambah Hari Libur</div>
                            <div class="panel-body">
                                <?php echo form_open('HolidayStatement'); ?>
                                <?php
                                    $holidayID = "";
                                    $holidayDate = "";
                                    $holidayDesc = "";
                                    if($SelectedHoliday){
                                        $holidayID = $SelectedHoliday[0]->holidayID;
                                        $holidayDate = $SelectedHoliday[0]->holidayDate;
                                        $holidayDesc = $SelectedHoliday[0]->holidayDesc;
                                    }
                                ?>
                                    <div class="form-group" id="sandbox-container">
                                        <label>Tanggal Hari libur</label>
                                        <div class="input-daterange input-group" id='datepicker'>
                                            <input class="form-control" type="hidden" name="holidayID" value="<?php echo $holidayID; ?>">
                                            <input class="form-control" readonly='true' type="text" name="holidayDate" value="<?php echo $holidayDate; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <textarea name="holidayDesc" class="form-control" rows="3"><?php echo $holidayDesc; ?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
					<?php
					
					?>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data Hari Libur</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataHoliday">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Hari libur</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal ditambahkan</th>
                                            <th>Tanggal diubah</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($holidays){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($holidays as $holiday){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $holiday->holidayDate; ?></td>
                                                    <td><?php echo $holiday->holidayDesc; ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($holiday->addDate); ?></td>
                                                    <td><?php echo $this->enum->getDateFromTS($holiday->lastUpdate); ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/holiday/edit/<?php echo $holiday->holidayID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/holiday/delete/<?php echo $holiday->holidayID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
                                                </tr>
                                                <?php
                                                $i++;
                                            }
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