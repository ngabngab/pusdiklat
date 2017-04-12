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
            $('#listJabatan').DataTable({
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
							window.opener.document.len.jabatanID.value = valueID;
							window.opener.document.len.jabatanFullName.value = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data Jabatan</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listJabatan">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama Singkat Jabatan</th>
                                        <th>Nama Lengkap Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($jabatans){
										$i=1;
										$this->load->model('enum');
										foreach($jabatans as $jabatan){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $jabatan->jabatanID; ?>','<?php echo $jabatan->jabatanFullName; ?>')">Pilih</a></td>
												<td><?php echo $jabatan->jabatanShortName; ?></td>
												<td><?php echo $jabatan->jabatanFullName; ?></td>
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