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
            $('#listKurikulum').DataTable({
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
							console.log(window.opener.document.len);
							window.opener.document.len.kurikulumID.value = valueID;
							window.opener.document.len.kurikulumName.value = valueName;
                            //window.opener.kurikulumRef(valueID);
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data Kurikulum</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listKurikulum">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama Kurikulum</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($kurikulums){
										$i=1;
										$this->load->model('enum');
										foreach($kurikulums as $kurikulum){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $kurikulum->kurikulumID; ?>','<?php echo $kurikulum->kurikulumName; ?>')">Pilih</a></td>
												<td><?php echo $kurikulum->kurikulumName; ?></td>
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