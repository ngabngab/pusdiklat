<?php
/**
 * SimjabatanGroup Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$loggedIn = $this->session->userdata['logged_in'];

?>
<script>
        $(document).ready(function() {
            $('#listJabatanGroup').DataTable({
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
							window.opener.document.len.jabatanGroupID.value = valueID;
							window.opener.document.len.jabatanGroupFullName.value = valueName;
							window.close();
						}
					}
					</script>
					<div class="col-lg-12">
                        <h3>Data JabatanGroup</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped" id="listJabatanGroup">
                                <thead>
                                    <tr>
                                        <th>&nbsp;</th>
                                        <th>Nama Singkat Group Jabatan</th>
                                        <th>Nama Lengkap Group Jabatan</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php
									if($jabatanGroups){
										$i=1;
										$this->load->model('enum');
										foreach($jabatanGroups as $jabatanGroup){
											?>
											<tr>
												<td style="text-align:right;"><a href="javascript:pick('<?php echo $jabatanGroup->jabatanGroupID; ?>','<?php echo $jabatanGroup->jabatanGroupFullName; ?>')">Pilih</a></td>
												<td><?php echo $jabatanGroup->jabatanGroupShortName; ?></td>
												<td><?php echo $jabatanGroup->jabatanGroupFullName; ?></td>
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
					<?php
					$showData = 20;
					$showPage = 5;
					
					$mod = $totalData % $showData;
					$pages = floor($totalData / $showData);
					if($mod!=0){
						$pages++;
					}
					?>
					<nav>
						<ul class="pagination">
							<li class="page-item <?php if($page==1){ echo "disabled"; } ?>">
								<a class="page-link" href="<?php echo base_url();?>index.php/listjabatanGroup/page/1" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">First</span>
								</a>
							</li>
							<?php
							for($j=1;$j<=$pages;$j++){
								if($pages > $showPage){
									if($page>2 && $j>=$page-2 && $j<=$page+2 && $page<$pages-$showPage){
										?>
										<li class="page-item <?php if($page==$j){ echo "active"; }?>"><a class="page-link" href="<?php echo base_url();?>index.php/listjabatanGroup/page/<?php echo $j; ?>"><?php echo $j; ?></a></li>
										<?php
									}
									if($j>=$pages-$showPage && $page>=$pages-$showPage){
										?>
										<li class="page-item <?php if($page==$j){ echo "active"; }?>"><a class="page-link" href="<?php echo base_url();?>index.php/listjabatanGroup/page/<?php echo $j; ?>"><?php echo $j; ?></a></li>
										<?php
									}else if($page<=2 && $j<=$showPage){
										?>
										<li class="page-item <?php if($page==$j){ echo "active"; }?>"><a class="page-link" href="<?php echo base_url();?>index.php/listjabatanGroup/page/<?php echo $j; ?>"><?php echo $j; ?></a></li>
										<?php
									}
								}else{
									?>
									<li class="page-item <?php if($page==$j){ echo "active"; }?>"><a class="page-link" href="<?php echo base_url();?>index.php/listjabatanGroup/page/<?php echo $j; ?>"><?php echo $j; ?></a></li>
									<?php
								}
							}
							?>
							<li class="page-item <?php if($page==$pages){ echo "disabled"; } ?>">
								<a class="page-link" href="<?php echo base_url();?>index.php/listjabatanGroup/page/<?php echo $pages; ?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Last</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->