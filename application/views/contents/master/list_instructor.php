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
            $('#listInstructor').DataTable({
                responsive: false,
                dom: 'Bfrtip',
                buttons: [
                ]
            });
        });
        </script>
		<div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
					
				
                    <script language="JavaScript">
					function pick(valueID, valueName) {
						if (window.opener && !window.opener.closed){
							window.opener.document.len.instructorID.value = valueID;
							window.opener.document.len.instructorName.value = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data instructor</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listInstructor">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama instructor</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($instructors){
										$i=1;
										$this->load->model('enum');
										foreach($instructors as $instructor){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $instructor->pegawaiID; ?>','<?php echo $instructor->pegawaiName; ?>')">Pilih</a></td>
												<td><?php echo $instructor->pegawaiName; ?></td>
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
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->