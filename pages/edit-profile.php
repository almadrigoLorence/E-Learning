<?php include("includes/sidebar-profile.php"); ?>

<head>
  <link rel="css/myscss.css" type="text/css" >
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
</head>
  <style type="text/css">
    a.nav-link{
      font-size: 13px !important;
    }
  </style>
<div class="app-main__outer">
<div class="app-main__inner">
            <div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper" >
                    <div class="page-title-heading">
                        <div>
                          <img src="assets/images/<?php echo $id.'/'.$selProfile['img'] ;?>" width="80" height="80" class="rounded-circle" style="border-radius: 50%;">
                        </div>
                         <ul></ul>
                            <div>
                              <?php echo strtoupper($selExmneeData['exmne_fullname']); ?> <?php echo strtoupper($selExmneeData['exmne_middle']); ?>. <?php echo strtoupper($selExmneeData['exmne_surname']); ?><br>
                              <div class="page-title-subheading text-black"><strong>Student Number: </strong> <?php echo $selExmneeData['exmne_stud_number']; ?></div>
                                <div class="page-title-subheading"><strong>Course and Section:</strong> <?php echo strtoupper($_SESSION['examineeSession']['examinee_course']);?> </div>
                            </div>    
                            </div>  
                            <div class="page-title-actions">
                            <button class="btn-shadow btn-wide btn-pill btn btn-light" data-toggle="modal" data-target="#displayPicture">
                            <span class="badge badge-dot badge-dot-lg badge-default badge-pulse"><i class="fa fa-camera"></i></span> Update Profile picture
                            </button>
                            </div>
                            </div>
                            </div>
                      
                            <h5>General Account Settings</h5>       
                            <div class="row">
                            <div class="col-md-12" style="background-color: transparent;">
                                                <div id="accordion" class="accordion-wrapper">
                                                    <div class="card tex-dark" >
                                                        <div id="headingOne" class="card-header">
                                                            <button type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block" style="background-color: transparent;">
                                                                <span class="m-0 p-0">General Information <i class="fa fa-angle-down"></i></span>
                                                            </button>
                                                        </div>
                                                        <div data-parent="#accordion" id="collapseOne1" aria-labelledby="headingOne" class="collapse hidden" style="">
                                                            <form id="generaldetails">
                                                              <input type="hidden" name="id" value="<?php echo $_SESSION['examineeSession']['exmne_id'];?>">
                                                            <div class="card-body">
                                                              <div class="row">
                                                                <div class="col-sm-10">
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-fname">Firstname</label>
                                                                    <input type="text" name="fname" id="profile-fnames" class="form-control" value="<?php echo $selExmneeData['exmne_fullname']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-fname">Middle Initial</label>
                                                                    <input type="text" name="middlename" id="profile-middlename" class="form-control" value="<?php echo $selExmneeData['exmne_middle']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-surname">Surname</label>
                                                                    <input type="text" name="surname" id="profile-surname" class="form-control" value="<?php echo $selExmneeData['exmne_surname']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-gender">Sex</label>
                                                                    <input type="text" name="gender" class="form-control" id="profile-gender" value="<?php echo $selExmneeData['exmne_gender']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-gender">Age</label>
                                                                    <input type="text" name="age" class="form-control" id="profile-age" value="<?php echo $selExmneeData['exmne_age']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-email">Email</label>
                                                                    <input type="text" name="email" class="form-control" id="profile-email" value="<?php echo $selExmneeData['exmne_email']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-contact">Contact</label>
                                                                    <input type="text" name="contact" class="form-control" id="profile-contact" value="<?php echo $selExmneeData['exmne_contact']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-address">Address</label>
                                                                    <input type="text" name="address" class="form-control" id="profile-address" value="<?php echo $selExmneeData['exmne_address']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-birthdate">Birthdate</label>
                                                                    <input type="date" name="birthdate" class="form-control" id="profile-birthdate" value="<?php echo $selExmneeData['exmne_birthdate']; ?>">
                                                                  </div>
                                                              </div>
                                                            </div>
                                                            <hr>
                                                            <div class="float-right pr-4"><button class="btn btn-block btn-success">Update Other Information</button></div>
                                                            <br>
                                                          </form>
                                                        </div>
                                                    </div>
                                                  </div>
                                                  <div id="accordion" class="accordion-wrapper active">
                                                    <div class="card">
                                                        <div id="headingTwo" class="b-radius-0 card-header">
                                                            <button type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseTwo" class="text-left m-0 p-0 btn btn-link btn-block collapsed">
                                                              <span class="m-0 p-0">Other Information <i class="fa fa-angle-down"></i></span></button>
                                                        </div>
                                                        <div data-parent="#accordion" id="collapseOne2" class="collapse" style="">
                                                            <form id="otherinformations">
                                                              <input type="hidden" name="id" value="<?php echo $_SESSION['examineeSession']['exmne_id'];?>">
                                                            <div class="card-body">
                                                              <div class="row">
                                                                <div class="col-sm-10">
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-nationality">Nationality</label>
                                                                    <input type="text" name="nationality" id="profile-nationality" class="form-control" value="<?php echo $selExmneeData['exmne_nationality']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-religion">Religion</label>
                                                                    <input type="text" name="religion" id="profile-religion" class="form-control" value="<?php echo $selExmneeData['exmne_religion']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-civilstatus">Civil Status</label>
                                                                    <input type="text" name="civilstatus" class="form-control" id="profile-civilstatus" value="<?php echo $selExmneeData['exmne_civil_status']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-placeofbirth">Place of Birth</label>
                                                                    <input type="text" name="placeofbirth" class="form-control" id="profile-placeofbirth" value="<?php echo $selExmneeData['exmne_place_of_birth']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-guardian">Name of Guardian</label>
                                                                    <input type="text" name="guardian" class="form-control" id="profile-guardian" value="<?php echo $selExmneeData['exmne_guardian']; ?>">
                                                                  </div>
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-guardian">Contact Number of Guardian/s</label>
                                                                    <input type="text" name="contactguardian" class="form-control" id="profile-guardian" value="<?php echo $selExmneeData['exmne_guardian_contact']; ?>">
                                                                  </div>
            <!--                                                       <div class="form-floating mb-2">
                                                                    <input type="text" name="address" class="form-control" id="profile-address" value="<?php echo $selExmneeData['exmne_address']; ?>">
                                                                    <label for="profile-address">Current Address</label>
                                                                  </div> -->
                                                                  <div class="form-floating mb-2">
                                                                    <label for="profile-postal">Postal</label>
                                                                    <input type="text" name="postal" class="form-control" id="profile-postal" value="<?php echo $selExmneeData['exmne_address_postal']; ?>">
                                                                  </div>
                                                              </div>
                                                            </div>
                                                              <hr>
                                                            <div class="float-right pr-4"><button class="btn btn-block btn-success">Update Other Information</button></div>
                                                            <br>
                                                          </div>
                                                          </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                              <hr>
                                              <h5>Login Settings</h5>
                                                <div class="card">
                                                          <div id="headingOne" class="card-header">
                                                              <button type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block" style="background-color: transparent;">
                                                                  <span class="m-0 p-0">Login Settings <i class="fa fa-angle-down"></i></span>
                                                              </button>
                                                          </div>
                                                          <div data-parent="#accordion" id="collapseOne3" class="collapse" style="">
                                                              <div class="card-body">
                                                              <form class="cform" name="frmChange" method="post" action="query/changePasswordExe.php" 
                                                               id="changePassword" style="width: 50%;">
                                                               Change Password
                                                                 <div class="float-right mb-2">
                                                                   <button class="btn btn-success  " type="submit" name="submit">Save Settings</button>
                                                                 </div>
                                                                 <hr>
                                                               <input type="hidden" name="examineeid" value="<?php echo $_SESSION['examineeSession']['exmne_id'];?>">
                                                                  <div class="pb-2">
                                                                      <div class="col-md-12">
                                                                          <div>
                                                                              <label class="form-floating mb-2">Current Password</label>
                                                                              <input type="password" name="currentPassword" id="currentPassword" class="form-control cinput" required>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="pb-2">
                                                                      <div class="col-md-12">
                                                                          <div>
                                                                              <label class="form-floating mb-2">New Password</label>
                                                                              <input type="password" name="newPassword" id="newPassword" class="form-control cinput" pattern=".{8,}"   required title="8 characters minimum" required>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="pb-2">
                                                                      <div class="col-md-12">
                                                                          <div>
                                                                              <label class="form-floating mb-2">Confirm new password</label>
                                                                              <input type="password" name="confirmPassword" id="confirmPassword" class="form-control cinput" pattern=".{8,}"   required title="8 characters minimum" required >
                                                                          </div>
                                                                      </div>
                                                                  </div> 
                                                              </form>
                                                            </div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                 </div>
                                              </div>
                                          </div>
<script>
$(".toggle-password").click(function() {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
        </script>
          