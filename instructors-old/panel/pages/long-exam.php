<?php include("includes/sidebar.php"); ?>

<style type="text/css">
.input-group{
    margin-right: 10px;
}
table{
    margin-left: 10px;
    margin-right: 10px;
}
.card-header{
    background-color: #3ac47d;
    color: white;
}

</style>
<div class="app-main__outer">
<div class="app-main__inner">
                        <div class="app-page-title bg-premium-dark text-light">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <img src="assets/images/exam.png" height="50" width="40">
                                    </div>
                                    <div>Long Exam
                                        <div class="page-title-subheading">
                                            <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item tex"><a href="home.php" style="color: white;">Dashboard</a></li>
                                                        <li class="active breadcrumb-item" area-current="page">List Available Long Exam</a></li>
                                                        
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
                                                    <a class="nav-link" href="home.php?page=activities" style="color: black">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>Activities</span>
                                                        <div class="ml-auto badge badge-pill badge-dark"><i class="fa fa-hand-o-right"></i> </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="home.php?page=assignments" style="color: black">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span> Assignments</span>
                                                        <div class="ml-auto badge badge-pill badge-dark"><i class="fa fa-hand-o-right"></i></div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" style="color: #3ac47d">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span> Long Exam</span>
                                                        <div class="ml-auto badge badge-pill badge-success"><i class="fa fa-hand-o-right"></i> </div>
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
                        <div class="row">
                        <div class="col-sm-3">
                            <div class="main-card db-3">
                                <div class="card-header">Menu</div>
                                    <div class="card-body">
                                            <a href="#" class="btn btn-success text-light" style="width: 90%; text-align: left" >List Available Long Exam</a>
                                            <br>
                                           <a href="home.php?page=long-exam-history" class="btn btn-default" style="width: 90%; text-align: left; border-color: transparent; ">History</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card-header" style="background-color: #3ac47d">
                            </div>
                            <hr class="m-0">
                            <div class="card">
                                            <table id="myTable" class="table table-inverse">
                                                
                                             <tbody>
                                                <?php 
                                                    $selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id='$exmneCourse' ORDER BY ex_id DESC ");
                                                    if($selExam->rowCount() > 0)
                                                    {
                                                while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                <tr>
                                                  <td>
                                                            <div class="row no-gutters align-items-left">
                                                                <div class="col-md-12">
                                                                    <i class="pe-7s-pen"></i>
                                                                      <span style="font-size: 15px;"><?php echo $selExamRow['ex_title']; ?></span>
                                                                    
                                                                    <div class="text-muted small mt-1">Date Published: &nbsp;·&nbsp;<a href="javascript:void(0)" class="text-muted"><?php echo $selExamRow['ex_created']?></a></div>
                                                                </div>
                                                            </div>
                                                          </td>
                                                  <td> 
                                                        <div class="row no-gutters align-items-center">
                                                        <div class="col-8"><i class="pe-7s-clock"></i> <?php echo $selExamRow['ex_time_limit'];?> minutes</div>
                                                            <div class="media col-4 align-items-right">
                                                            <a href="#" id="startQuiz" data-id="<?php echo $selExamRow['ex_id'];?>" class="btn btn-warning"><i class="fa fa-play-circle"></i> Start Exam</a>
                                                        </div>
                                                        </div>
                                                  </td>

                                                </tr>
                                              <?php }
                                            }
                                            else
                                              { ?>
                                                  <tr>
                                                    <td colspan="5">
                                                      <h3 class="p-3">Lesson Module is Empty</h3>
                                                    </td>
                                                  </tr>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table> 
                                            <hr class="m-0">
                                             <div class="card-footer col-md-12">
                                                End of Result
                                             </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
          
          