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
            $('#listUnit').DataTable({
                responsive: false,
                dom: 'Bfrtip',
                buttons: [
                ]
            });
        });
        </script>
		<div id="page-wrapper">

            <div class="container-fluid">

                    <script language="JavaScript">
					function pick(valueID, valueName) {
						if (window.opener && !window.opener.closed){
							window.opener.document.len.unitID.value = valueID;
							window.opener.document.len.unitName.value = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data Unit</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listUnit">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama Unit</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($units){
										$i=1;
										$this->load->model('enum');
										foreach($units as $unit){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $unit->unitID; ?>','<?php echo $unit->unitName; ?>')">Pilih</a></td>
												<td><?php echo $unit->unitName; ?></td>
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