<?php
/**
 * Simkurikulum Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$loggedIn = $this->session->userdata['logged_in'];

?>
<script>
        $(document).ready(function() {
            $('#listMataAjar').DataTable({
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
							window.opener.document.len.mataAjarID.value = valueID;
							window.opener.document.len.mataAjarName.value = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data Kurikulum</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listMataAjar">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama Mata Ajar</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($mataAjars){
										$i=1;
										$this->load->model('enum');
										foreach($mataAjars as $mataAjar){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $mataAjar->mataAjarID; ?>','<?php echo $mataAjar->mataAjarName; ?>')">Pilih</a></td>
												<td><?php echo $mataAjar->mataAjarName; ?></td>
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