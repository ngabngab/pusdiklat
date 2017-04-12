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
            $('#listDiklatType').DataTable({
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
							window.opener.document.len.diklatTypeID.value = valueID;
							window.opener.document.len.diklatTypeName.value = valueName;
							//window.opener.document.len.kaldikDesc.innerHTML = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data Tipe Diklat</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listDiklatType">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama Tipe Diklat</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($diklatTypes){
										$i=1;
										$this->load->model('enum');
										foreach($diklatTypes as $diklatType){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $diklatType->diklatTypeID; ?>','<?php echo $diklatType->diklatTypeName; ?>')">Pilih</a></td>
												<td><?php echo $diklatType->diklatTypeName; ?></td>
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