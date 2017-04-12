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
            $('#listWi').DataTable({
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
							window.opener.document.len.wiID.value = valueID;
							window.opener.document.len.wiName.value = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data instructor</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listWi">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama Wi</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($wis){
										$i=1;
										$this->load->model('enum');
										foreach($wis as $wi){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $wi->pegawaiID; ?>','<?php echo $wi->pegawaiName; ?>')">Pilih</a></td>
												<td><?php echo $wi->pegawaiName; ?></td>
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