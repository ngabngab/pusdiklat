<?php
/**
 * Simdiklat Online Website.
 *
 * @package    core
 * @copyright  2016 kim-leny
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>
<?php
$loggedIn = $this->session->userdata['logged_in'];

?>
<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Profile</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="<?php echo base_url();?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Profile 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
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
				if($loggedIn['isaffected'] == true){
					?>
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-success">
								<strong>Well done!</strong> Data has been saved successfully.
							</div>
						</div>
					</div>
					<?php
					$sess_array = array();
					$sess_array = array(
					 'userID' => $loggedIn['userID'],
					 'username' => $loggedIn['username'],
					 'userFirstName' => $loggedIn['userFirstName'],
					 'userLastName' => $loggedIn['userLastName'],
					 'username' => $loggedIn['username'],
					 'isaffected' => false
					);
					$this->session->set_userdata('logged_in', $sess_array);
				}
				
				?>
				<!-- show error message -->
				
                <div class="row">
					<div class="col-lg-6">
						<h3>Edit Profile</h3>
                        <?php echo form_open('editprofile'); ?>

                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="username" placeholder="Enter Username" value="<?php echo $loggedIn['username']; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" name="userFirstName" placeholder="Enter First Name" value="<?php echo $loggedIn['userFirstName']; ?>">
                            </div>

                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" name="userLastName" placeholder="Enter Last Name" value="<?php echo $loggedIn['userLastName']; ?>">
                            </div>

                            <button type="submit" class="btn btn-default">Save</button>

                        </form>

                    </div>
					<div class="col-lg-6">
						<h3>Change Password</h3>
                        <?php echo form_open('changepassword'); ?>

                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" class="form-control" name="currentPassword" placeholder="Enter Current Password">
                            </div>

                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" name="newPassword" placeholder="Enter New Password">
                            </div>

                            <div class="form-group">
                                <label>Re-type New Password</label>
                                <input type="password" class="form-control" name="retypeNewPassword" placeholder="Enter Re-type New Password">
                            </div>

                            <button type="submit" class="btn btn-default">Save</button>

                        </form>

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