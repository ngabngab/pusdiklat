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
            $('#listKurikulumType').DataTable({
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
							window.opener.document.len.kurikulumTypeID.value = valueID;
							window.opener.document.len.kurikulumTypeName.value = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data Tipe Kurikulum</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listKurikulumType">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama Tipe Kurikulum</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($kurikulumTypes){
										$i=1;
										$this->load->model('enum');
										foreach($kurikulumTypes as $kurikulumType){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $kurikulumType->kurikulumTypeID; ?>','<?php echo $kurikulumType->kurikulumTypeName; ?>')">Pilih</a></td>
												<td><?php echo $kurikulumType->kurikulumTypeName; ?></td>
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