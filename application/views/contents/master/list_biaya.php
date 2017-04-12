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
            $('#listBiaya').DataTable({
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
							window.opener.document.len.biayaID.value = valueID;
							window.opener.document.len.biayaName.value = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data Biaya</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listBiaya">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Sumber Biaya</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($biayas){
										$i=1;
										$this->load->model('enum');
										foreach($biayas as $biaya){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $biaya->biayaID; ?>','<?php echo $biaya->biayaName; ?>')">Pilih</a></td>
												<td><?php echo $biaya->biayaName; ?></td>
												<td><?php echo $biaya->biayaDesc; ?></td>
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