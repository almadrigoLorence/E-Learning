
<?php 
include("includes/sidebar.php"); 

?>
<head>
     <link href="css/mycss.css" rel="stylesheet">
</head>
<title>Change Password</title>
<div class="app-main__outer">
<div class="app-main__inner">
                        <div class="app-page-title bg-premium-dark text-light">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                      <img src="assets/images/assessment.png" height="40" width="40">
                                    </div>
                                    <div>Activities
                                        <div class="page-title-subheading">
                                            <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="home.php" style="color: white;">Dashboard</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page">List of Activities</li>
                                                    </ol>
                                                </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" data-original-title="Example Tooltip">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-warning">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Assessments
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link disabled"  style="color: #3ac47d">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>Activities</span>
                                                        <div class="ml-auto badge badge-pill badge-success"><i class="fa fa-hand-o-right"></i> </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home.php?page=assignments" style="color: black;">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span> Assignments</span>
                                                        <div class="ml-auto badge badge-pill badge-dark"><i class="fa fa-hand-o-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home.php?page=long-exam" style="color: black;">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span> Long Exam</span>
                                                        <div class="ml-auto badge badge-pill badge-dark"><i class="fa fa-hand-o-right"></i> </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home.php?page=quiz" style="color: black">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span> Quizzes</span>
                                                        <div class="ml-auto badge badge-pill badge-dark"><i class="fa fa-hand-o-right"></i> </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>   
                             </div>
                        </div>            
                        <div class="d-flex flex-wrap justify-content-between">
                        </div>
                        <div class="card mb-3">
                             <div class="card-header pl-0 pr-0">
                                <div class="row no-gutters w-100">
                                    <div class="col-6">
                                        <h5>Change Password</h5>
                                    </div>
                                    <div class="col-6 text-muted">
                                        <div class="row no-gutters align-items-center">
                                             <div class="input-group">
                                                <div class="input-group-prepend">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
            
                            <hr class="m-0">
                                <div class="card mb-0 col-6 p-5">
                                    <form class="cform" name="frmChange" method="post" action="query/changePasswordExe.php" 
                                     id="changePassword">
                                     <input type="hidden" name="examineeid" value="<?php echo $_SESSION['examineeSession']['exmne_id'];?>">
                                        <div class="pb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <label class="form-floating mb-2">Old</label>
                                                    <input type="password" name="currentPassword" id="currentPassword" class="form-control cinput" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <label class="form-floating mb-2">NEW PASSWORD</label>
                                                    <input type="password" name="newPassword" id="newPassword" class="form-control cinput" pattern=".{8,}"   required title="8 characters minimum" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-2">
                                            <div class="col-md-12">
                                                <div>
                                                    <label class="form-floating mb-2">CONFIRM PASSWORD</label>
                                                    <input type="password" name="confirmPassword" id="confirmPassword" class="form-control cinput" pattern=".{8,}"   required title="8 characters minimum" required >
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="pt-3">   
                                            <div class="float-right">
                                                <button class="btn" type="submit" name="submit">Save Settings</button>
                                            </div>
                                        </div>
                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
