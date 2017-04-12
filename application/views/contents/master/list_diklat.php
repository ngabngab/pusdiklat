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
            $('#listDiklat').DataTable({
                responsive: false,
                dom: 'Bfrtip',
                buttons: [
                ]
            });
        });
        </script>
        <script language="JavaScript">
					function pick(valueID, valueName, typeName, kurikulumName, bidangName) {
						if (window.opener && !window.opener.closed){
							window.opener.document.len.diklatID.value = valueID;
							window.opener.document.len.diklatName.value = valueName;
							window.opener.document.len.diklatTypeName.value = typeName;
							//window.opener.document.len.kurikulumName.value = kurikulumName;
							window.opener.document.len.bidangFullName.value = bidangName;
							
							//window.opener.diklatRef(valueID);
							window.close();
						}
					}
					</script>
		<div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    
                    <div class="row">

					<div class="col-lg-12" style="margin-top:1%;">
					<div class="panel panel-default">
                            <div class="panel-heading">Data Diklat</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover table-striped" id="listDiklat">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama Diklat</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($diklats){
										$i=1;
										$this->load->model('enum');
										foreach($diklats as $diklat){
											
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $diklat->diklatID; ?>','<?php echo $diklat->diklatName; ?>','<?php echo $diklat->diklatTypeName; ?>','<?php echo $diklat->kurikulumName; ?>','<?php echo $diklat->bidangFullName; ?>')">Pilih</a></td>
												<td><?php echo $diklat->diklatName; ?></td>
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
                </div>
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->