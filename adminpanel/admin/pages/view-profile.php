<title>My Profile</title>
<?php
    
    $id = $_SESSION['admin']['admin_id'];
   $selProfile = $conn->query("SELECT * FROM admin_acc WHERE admin_id = '$id' ")->fetch(PDO::FETCH_ASSOC);
?>
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
                                                    <img src="assets/images/cvsu.png" width="120px" class="rounded-circle">
                                                </div>
<!--                                                 <div class="d-inline-block align-self-center pl-3">
                                                    <div>                                                        
                                                        <button class="btn btn-info">Upload New Picture</button>
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-danger">Remove</button>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <form class="cform">
                                        <div class="d-flex pb-2">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label class="font-weight-bold">FIRST NAME</label>
                                                    <input type="text" name="name" class="form-control cinput" value="<?php echo $selProfile['admin_name'];?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div>
                                                    <label class="font-weight-bold">LAST NAME</label>
                                                    <input type="text" name="name" class="form-control cinput">
                                                </div>
                                            </div>
                                            <div class="col-lg-1">
                                                <div>
                                                    <label class="font-weight-bold">M.I</label>
                                                    <input type="text" name="name" class="form-control cinput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex pb-2">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label class="font-weight-bold">BIRTHDATE</label>
                                                    <input type="text" name="name" class="form-control cinput">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label class="font-weight-bold">SEX</label>
                                                    <input type="text" name="name" class="form-control cinput">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex pb-2">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label class="font-weight-bold">EMAIL</label>
                                                    <input type="text" name="name" class="form-control cinput">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label class="font-weight-bold">ASSIGNED COURSE</label>
                                                    <input type="text" name="name" class="form-control cinput" disabled>
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
                                    </form>
                </div>
            </div>
    </div>
</div>
  