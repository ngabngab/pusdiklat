<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>
        <script>
        $(document).ready(function() {
            $('#dataUser').DataTable({
                responsive: false,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
        </script>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Data Master <small>User</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-database"></i> Data Master | User
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- show error message -->
				<?php
				if(validation_errors()!= null){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger">
								<?php echo validation_errors(); ?>
							</div>
						</div>
					</div>
					<?php
				}
				if($errMessage!= ''){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger">
								<?php echo $errMessage; ?>
							</div>
						</div>
					</div>
					<?php
				}
				if($success == true){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-success">
								<strong>Well done!</strong> Data has been saved successfully.
							</div>
						</div>
					</div>
					<?php
				}
				
				?>
				<!-- show error message -->
				
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Tambah User</div>
                            <div class="panel-body">
                                <?php 
                                    $attributes = array('name' => 'len');
                                    echo form_open('UserStatement', $attributes); ?>
                                <?php
                                    $roleID = "";
                                    $userID = "";
                                    $username = "";
                                    $password = "";
                                    $userFirstName = "";
                                    $userLastName = "";
                                    $roleName = "";
                                    if($SelectedUser){
                                        $roleID = $SelectedUser[0]->roleID;
                                        $userID = $SelectedUser[0]->userID;
                                        $username = $SelectedUser[0]->username;
                                        $password = $SelectedUser[0]->userPassword;
                                        $userFirstName = $SelectedUser[0]->userFirstName;
                                        $userLastName = $SelectedUser[0]->userLastName;
                                        $roleName = $SelectedUser[0]->roleName;
                                    }
                                ?>

                                    <script language="JavaScript">

                                    function showList() {
                                        var w = (screen.width/2);
                                        var h = (screen.height/2);
                                        var left = (screen.width/2)-(w/2);
                                        var top = (screen.height/2)-(h/2);
                                        sList = window.open('<?php echo base_url(); ?>index.php/listRole', 'list', 'width='+w+', height='+h+', top='+top+', left='+left);
                                    }
                                    function remLink() {
                                        if (window.sList && window.sList.open && !window.sList.closed)
                                            window.sList.opener = null;
                                    }

                                    </script>

                                    <label>Role</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="hidden" id="roleID" name="roleID" readonly value="<?php echo $roleID; ?>">
                                        <input class="form-control" type="text" id="roleName" name="roleName" readonly value="<?php echo $roleName; ?>">
                                        <span class="input-group-btn"><button class="btn btn-default" onClick="showList()" type="button"><i class="fa fa-search"></i></button></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control" type="hidden" name="userID" value="<?php echo $userID; ?>">
                                        <input class="form-control" type="text" name="username" placeholder="Enter Username" value="<?php echo $username; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password" placeholder="Enter Password" value="<?php  ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" name="userFirstName" placeholder="Enter First Name" value="<?php echo $userFirstName; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" name="userLastName" placeholder="Enter Last Name" value="<?php echo $userLastName; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-default">Save</button>

                                </form>
                            </div>
                        </div>
                    </div>
					<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Data User</div>
                            <div class="panel-body table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="dataUser">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Role</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($users){
                                            $i=1;
                                            $this->load->model('enum');
                                            foreach($users as $user){
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $user->username; ?></td>
                                                    <td><?php echo $user->userFirstName; ?></td>
                                                    <td><?php echo $user->userLastName; ?></td>
                                                    <td><?php echo $user->roleName; ?></td>
                                                    <td style="text-align:right;"><a class="btn btn-info btn-xs" href="<?php echo base_url();?>index.php/user/edit/<?php echo $user->userID;?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?php echo base_url();?>index.php/user/delete/<?php echo $user->userID;?>" onclick = "if (! confirm('Are you sure want to delete this?')) { return false; }"><i class="fa fa-times"></i></a></td>
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
				<div class="row">
					&nbsp;
				</div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->