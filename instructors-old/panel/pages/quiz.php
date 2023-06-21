<?php include("includes/sidebar.php"); ?>
<div class="app-main__outer">
<div class="app-main__inner">
                        <div class="app-page-title bg-premium-dark text-light">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                    </div>
                                    <div>Quizzes
                                        <div class="page-title-subheading">
                                            <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="home.php" style="color: white;">Dashboard</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page">List of Quizzes</li>
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
                                                    <a class="nav-link" href="home.php?page=activities" style="color: black;">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>Activities</span>
                                                        <div class="ml-auto badge badge-pill badge-dark"><i class="fa fa-hand-o-right"></i> </div>
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
                                                    <a disabled="" class="nav-link disabled" style="color: #3ac47d">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span> Quizzes</span>
                                                        <div class="ml-auto badge badge-pill badge-success"><i class="fa fa-hand-o-right"></i> </div>
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
                                            <a href="#" class="btn btn-success text-light" style="width: 90%; text-align: left" >List of Quizzes</a>
                                      
                           
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card-header pl-0 pr-2">
                            </div>
                            <hr class="m-0">
                            <div class="card">
                                            <table id="myTable" class="table table-inverse">
                                                
                                             <tbody>
                                                <?php 
                                                    $selQuiz = $conn->query("SELECT * FROM quiz_tbl WHERE cou_id='$exmneCourse' ORDER BY quiz_id DESC ");
                                                    if($selQuiz->rowCount() > 0)
                                                    {
                                                while ($selQuizRow = $selQuiz->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                <tr>
                                                  <td>
                                                            <div class="row no-gutters align-items-left">
                                                                <div class="col-md-12">
                                                                    <i class="pe-7s-pen"></i>
                                                                      <span style="font-size: 15px;"><?php echo $selQuizRow['ex_title']; ?></span>
                                                                    
                                                                    <div class="text-muted small mt-1">Date Published: &nbsp;·&nbsp;<a href="javascript:void(0)" class="text-muted"><?php echo $selQuizRow['quiz_created']?></a></div>
                                                                </div>
                                                            </div>
                                                          </td>
                                                  <td> 
                                                        <div class="row no-gutters align-items-center">
                                                        <div class="col-8"><i class="pe-7s-clock"></i> <?php echo $selQuizRow['quiz_time_limit'];?> minutes</div>
                                                            <div class="media col-4 align-items-right">
                                                            <a href="#" id="startQuiz" data-id="<?php echo $selQuizRow['quiz_id'];?>" class="btn btn-warning"><i class="fa fa-play-circle"></i> Start Quiz</a>
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
                                                      <h3 class="p-3">Quiz is Empty</h3>
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
          
          