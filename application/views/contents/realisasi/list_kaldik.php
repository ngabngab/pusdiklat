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

		<div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
					<div class="col-lg-12">
                        <?php echo form_open('listKaldik'); ?>
							<?php
							$kaldikID = "";
							$kaldikCode = "";
							?>
                            <div class="form-group">
                                <label>Kode Kaldik</label>
                                <input class="form-control" type="hidden" name="kaldikID" value="<?php echo $kaldikID; ?>">
                                <input class="form-control" type="text" name="kaldikCode" placeholder="Enter Kode Kaldik" value="<?php echo $kaldikCode; ?>">
                            </div>

                            <button type="submit" name='btnSearch' class="btn btn-default">Cari</button>

                        </form>

                    </div>
				
                    <script language="JavaScript">
					function pick(valueID, valueName) {
						if (window.opener && !window.opener.closed){
							window.opener.document.len.kaldikID.value = valueID;
                            window.opener.document.len.kaldikCode.value = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data Kaldik</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Kode Kaldik</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($kaldiks){
										$i=1;
										$this->load->model('enum');
										foreach($kaldiks as $kd){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $kd->kaldikID; ?>','<?php echo $kd->kaldikCode; ?>')">Pilih</a></td>
												<td><?php echo $kd->kaldikCode; ?></td>
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