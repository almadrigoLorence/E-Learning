<title>My Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<div class="app-main__outer">
    <div class="app-main__inner">
<!--             <div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper" >
                      <div class="page-title-heading">
                          <div class="page-title-icon"><img src="assets/images/exam1.png" height="40" width="40"></div>
                            <div>Activities
                                <div class="page-title-subheading">
                                    <nav class="" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="home.php?page=manage-activities" style="color: white">Activities List</a></li>
                                        <li class="active breadcrumb-item" aria-current="page" style="color: #3ac47d">Add Activity</li>
                                        </ol>
                                    </nav> 
                                </div>
                            </div>
                      </div>
                </div>
            </div>      -->
            <div class="col-md-15">
               <div class="main-card pb-3 mb-3 card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5 class="card-title">PERSONAL SETTING/</h5>
                                                <h1><strong>Account</strong></h1>
                                            </div>
                                            <div class="d-flex" style="background-color: #f2f2f2;padding: 18px;">
                                                <div>
                                                    <?php 
                                                     $id = $_SESSION['instructor']['instructor_id'];
                                                     $selProfile = $conn->query("SELECT * FROM instructor_img WHERE userid='$id'")->fetch(PDO::FETCH_ASSOC);
                                                        if ($selProfile['img'] == '') {
                                                           ?>
                                                            <img src="assets/images/user22.png" width="80" height="80" class="rounded-circle" style="border: 1px solid #008083;">
                                                            <?php
                                                           }else{
                                                                ?>
                                                             <img src="assets/images/<?php echo $id.'/'.$selProfile['img'] ;?>" width="80" height="80" class="rounded-circle" style="border: 1px solid #008083;">
                                                                <?php
                                                            }
                                                    ?>
                                                </div>
                                                <div class="d-inline-block align-self-center pl-3">
                                                    <div>                                                        
                                                        <button class="btn btn-info" data-toggle='modal' data-target='#modalForAddImg'>Upload New Picture</button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-danger">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <form class="cform">
                                        <div class="d-flex pb-2">
                                            <div class="col-lg-6">
                                                <div class="form-floating">
                                                    <input type="text" id="fname" name="name" class="form-control cinput" value="<?php echo $selProfile['instructor_fullname'];?>">
                                                    <label class="font-weight-bold" for="#fname">FIRST NAME</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-floating">
                                                    <input type="text" name="lname" id="lname" class="form-control cinput" value="<?php echo $selProfile['instructor_surname'];?>">
                                                    <label class="font-weight-bold" for="#lname">LAST NAME</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div class="form-floating">
                                                    <input type="text" name="mi" id="mi" class="form-control cinput" value="<?php echo $selProfile['instructor_middle'];?>">
                                                    <label class="font-weight-bold" for="#mi">M.I</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex pb-2">
                                            <div class="col-lg-6">
                                                <div class="form-floating">
                                                    <input type="date" name="birthdate" id="birthdate" class="form-control cinput" value="<?php echo $selProfile['instructor_bdate'];?>">
                                                    <label class="font-weight-bold" for="#birthdate">BIRTHDATE</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating">
                                                    <input type="text" name="gender" id="gender" class="form-control cinput" value="<?php echo $selProfile['instructor_gender'];?>">
                                                    <label class="font-weight-bold" for="#gender">Gender</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex pb-2">
                                            <div class="col-lg-6">
                                                <div class="form-floating">
                                                    <input type="text" name="email" id="email" class="form-control cinput" value="<?php echo $selProfile['instructor_email'];?>">
                                                    <label class="font-weight-bold" for="#email">EMAIL</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating">
                                                    <input type="text" name="ac" id="ac" class="form-control cinput" value="<?php echo $course['cou_name'];?>" disabled>
                                                    <label class="font-weight-bold" for="#ac">ASSIGNED COURSE</label>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="pt-3">   
                                            <div class="float-left">
                                                <a  href="home.php?page=change-pass" class="btn" type="submit">Change password</a>
                                            </div>
                                            <div class="float-right">
                                                <button class="btn" type="submit">Save Settings</button>
                                            </div>
                                        </div>
                                    </form> -->
                </div>
            </div>
    </div>
</div>
  