<?php include("includes/sidebar.php"); ?>
<head>
  <link rel="css/mycss.css" type="text/css">
</head>
<style type="text/css">
  .dropdown-menu-header-inner{
  margin-top: -15px; 
  padding-bottom: 20px;
  padding-top: 10px
}
</style>
<div class="app-main__outer" >
    <div id="refreshData">
          <div class="app-main__inner">
            <div class="app-page-title bg-premium-dark text-white">
                <div class="page-title-wrapper" >
                    <div class="page-title-heading">
                        <div><img src="assets/images/1.jpg" style="width: 80px; height: 80px; border-radius: 50%;"></div>
                         <ul></ul>
                            <div><strong>Welcome: </strong> 
                                 <?php echo strtoupper($selExmneeData['exmne_fullname']); ?> <?php echo strtoupper($selExmneeData['exmne_middle']); ?>. <?php echo strtoupper($selExmneeData['exmne_surname']); ?>
                                    
                                                             
                                    <div class="page-title-subheading"><strong>Course and Section:</strong> <?php echo strtoupper($_SESSION['examineeSession']['examinee_course']);?> </div>
                                  
                            </div>    
                          </div>  
                                    <div class="page-title-actions">
                                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                                        <i class="fa fa-star"></i>
                                                    </button>
                                                    <div class="d-inline-block dropdown">
                                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                                <i class="fa fa-business-time fa-w-20"></i>
                                                            </span>
                                                            Menu
                                                        </button>
                                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">
                                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                                        <span>
                                                                            Inbox
                                                                        </span>
                                                                        <div class="ml-auto badge badge-pill badge-secondary"></div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">
                                                                        <i class="nav-link-icon lnr-book"></i>
                                                                        <span>
                                                                            Book
                                                                        </span>
                                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">
                                                                        <i class="nav-link-icon lnr-picture"></i>
                                                                        <span>
                                                                            Picture
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                                        <span>
                                                                            File Disabled
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                              
                                                  <button class="btn-shadow btn-wide btn-pill btn btn-dark">
                                                  <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span>
                                                  Add Feedback
                                                  </button>
                                          </div>
                                      </div>
                                    </div>
                              <br>
                              <h5 style="margin-top: -30px;"><img src="assets/images/dashboard.png" height="22" width="20" style="margin-top: -5px"> Dashboard</h5>
                              <div class="row">
                                <div class="col-sm-12 col-lg-8">
                                    <div class="d-flex flex-wrap justify-content-between">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-search"></i>
                                                    </div>
                                                </div>
                                                <input placeholder="Search lesson..." type="text" class="form-control" id="search_field">
                                            </div>
                                      </div>
                                      <br>
                                      <div class="card-header text-light " style="background-color: #3ac47d">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Lessons Overview</div>
                                        </div>
                                      <div class="card" style="background-color: transparent; border-color: transparent;"><br>
                                            <table id="myTable" style="padding-right: 10px;">
                                             <tbody>
                                               <?php
                                                   $selLesson = $conn->query("SELECT * FROM lessons_tbl WHERE cou_id='$exmneCourse' ORDER BY lesson_id DESC ");

                                                if ($selLesson->rowCount() > 0) 
                                                {
                                                while($row = $selLesson -> fetch(PDO::FETCH_OBJ)){ ?>
                                                <tr>
                                                  <td>
                                                     <div class="card mb-2">
                                                      <div class="card-body">
                                                          <div class="media">
                                                              <img style="width: 40px; height: auto;" src="assets/images/lesson-icon.jpg" alt="">
                                                              <div class="media-body ml-4">
                                                                  <div class="float-right text-muted small" ><a href="home.php?page=lesson&id=<?php echo $row->lesson_id ?>">View Lesson</a></div>
                                                                  <h4><span style="color: green"><?php echo $row->lesson_title;?></span></h4>
                                                                  <div class="text-muted small"><?php echo $row->date_uploaded; ?> &nbsp;·&nbsp; 345 posts</div>
                                                                  <div class="mt-2 pl-4">
                                                                      <?php echo $row->lesson_desc ?>
                                                                  </div>
                                                              
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  </td>
                                                </tr>
                                              <?php }
                                            }
                                            else
                                              { ?>
                                                  <tr>
                                                    <td class="text-center" width="100%">
                                                      <h3 class="p-3">Lesson Module is Empty</h3>
                                                    </td>
                                                  </tr>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                            <br>
                                      </div>
                                      <br>
                                      <div class="card-header text-light" style="background-color: #3ac47d">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">Finished Long Exams</div>
                                      </div>
                                      <hr class="m-0">
                                      <div class="card mb-0">
                                                      <table id="myTable" class="table table-inverse">
                                                       <tbody>
                                                      <?php 
                                                              $selTakenExam = $conn->query("SELECT * FROM exam_tbl et INNER JOIN exam_attempt ea ON et.ex_id = ea.exam_id WHERE exmne_id='$exmneId' ORDER BY ea.examat_id DESC ");

                                                              if($selTakenExam->rowCount() > 0)
                                                              {
                                                          while ($selTakenExamRow = $selTakenExam->fetch(PDO::FETCH_ASSOC)) {
                                                          ?>
                                                          <tr>
                                                            <td >
                                                              <div class="row no-gutters align-items-left">
                                                                  <div class="col-md-12">
                                                                      <i class="pe-7s-paperclip"></i>
                                                                          <span style="font-size: 15px;"><?php echo $selTakenExamRow['ex_title']; ?></span>
                                                                      
                                                                      <div class="text-muted small mt-1">Date Published: &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted"><?php echo $selTakenExamRow['ex_created']?></a></div>
                                                                  </div>
                                                              </div>
                                                            </td>
                                                            <td> 
                                                                  <div class="row no-gutters align-items-center">
                                                                      <div class="col-8"><i class="pe-7s-clock"></i> <?php echo $selTakenExamRow['ex_time_limit'];?> minutes</div>
                                                                      <div class="media col-4 align-items-right">
                                                                             <a href="home.php?page=result&id=<?php echo $selTakenExamRow['ex_id']?>" class="btn btn-default"><i class="fa fa-bars" style="color: green"></i> View Result</a>
                                                                      </div>                                                    
                                                                  </div>
                                                              </td>
                                                          </tr>
                                                        <?php }
                                                      }
                                                      else
                                                        { ?>
                                                            <tr>
                                                              <td class="text-center" width="100%">
                                                                <span class="p-3">Empty data</span>
                                                              </td>
                                                            </tr>
                                                          <?php }
                                                          ?>
                                                          </tbody>
                                                      </table>  
                                                       <hr>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                              <div class="mb-3 card">
                                                       <div class="card-header">
                                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                          <span><img src="assets/images/assessment.png" height="35" width="30"></span> Assessment
                                                        </div>  
                                                          <div class="btn-actions-pane-right actions-icon-btn">
                                                             <button type="button" aria-haspopup="true" href="#collapseExample123" data-toggle="collapse" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                                      <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                             </button>
                                                          </div>
                                                      </div>
                                                      <div class="card-body">
                                                          <div class="collapse" id="collapseExample123" style="height: 200px;">
                                                            <div>
                                                              <div class="drawer-section p-0">
                                                                    <ul class="list-group">
                                                                        <li class="list-group-item">
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
                                                                                        <i class="fa fa-cloud-download-alt"></i>
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading" style="margin-top: -2px;">Activities</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <button class="btn btn-secondary">
                                                                                           <a href="home.php?page=activities"><i class="fa fa-arrow-circle-right" style="color: white;"></i></a>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-warning center-elem">
                                                                                        <i class="fa fa-cloud-download-alt"></i>
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading" style="margin-top: -2px;">Assignments</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <button class="btn btn-secondary">
                                                                                            <a href="home.php?page=assignments"><i class="fa fa-arrow-circle-right" style="color: white;"></i></a>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-danger center-elem">
                                                                                        <img src="assets/images/exam.png" height="30" width="30">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading" style="margin-top: -2px;">Long Exam</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <button class="btn btn-secondary">
                                                                                            <a href="home.php?page=long-exam"><i class="fa fa-arrow-circle-right" style="color: white;"></i></a>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left opacity-6 fsize-2 mr-3 text-success center-elem">
                                                                                        <img src="assets/images/q&a.png" width="30" height="30">
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading" style="margin-top: -2px;">Quizzes</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                       <button type="button" aria-haspopup="true" class="btn btn-secondary">
                                                                                                <a href="home.php?page=quiz" style="color: white;"><i class="fa fa-arrow-circle-right"></i></a>
                                                                                       </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="card-hover mb-5 card">
                                                              <div class="card-header-tab card-header text-white bg-premium-dark">
                                                                  <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                                   Announcements 
                                                                  </div>
                                                                  <div class="btn-actions-pane-right text-white actions-icon-btn">
                                                                      <div class="btn-group dropdown">
                                                                          <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                                              <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                                          </button>
                                                                          <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                              <h6 tabindex="-1" class="dropdown-header" style="color: black;">Menu</h6>
                                                                              <a href="home.php?page=announcements-index" type="button" tabindex="0" class="dropdown-item">
                                                                                  <i class="dropdown-icon lnr-inbox"> </i><span>See all announcement</span>
                                                                              </a>
                                                                            
                                                                              <button type="button" tabindex="0" class="dropdown-item" data-toggle="modal" data-target="#feedbacksModal">
                                                                                  <i class="dropdown-icon lnr-book"> </i><span>Add feedback</span>
                                                                              </button>
                                                                              <div tabindex="-1" class="dropdown-divider"></div>
                                                                              <div class="p-3 text-right">
                                                                                  <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                                                  <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="scroll-area-md-hover">
                                                                  <div class="scrollbar-container ps ps--active-z">
                                                                         <table id="myTable" class="table table-inverse">
                                                                           <tbody>
                                                                             <?php
                                                                                 $selAnn = $conn->query("SELECT * FROM announcement_tbl WHERE course_id='$exmneCourse' ORDER BY ann_id DESC ");

                                                                              if ($selAnn->rowCount() > 0) 
                                                                              {
                                                                              while($row = $selAnn -> fetch(PDO::FETCH_OBJ)){ ?>
                                                                            <tr>
                                                                            <td>
                                                                                <div class="text-muted small mt-1">Announcement Title:  <a href="home.php?page=announcements&id=<?php echo $row->ann_id ?>" class="text-big" style="color: #3ac47d; font-size: 18px;"><?php echo $row->ann_title?> </a></div>
                                                                                      <div class="text-muted small mt-1">Description: </div>
                                                                                          <div class="row no-gutters align-items-center">
                                                                                              <div class="media col-11 align-items-center">
                                                                                                  <div class="pl-4 text-big" style="text-align: justify;">
                                                                                                      <?php 
                                                                                                        $lenthOfTxt = strlen ($row->ann_desc);
                                                                                                        if($lenthOfTxt >= 50)
                                                                                                        { ?>
                                                                                                            <?php echo substr($row->ann_desc, 0, 40);?>.....
                                                                                                        <?php }
                                                                                                        else
                                                                                                        {
                                                                                                            echo $row->ann_desc;
                                                                                                        }
                                                                                                     ?>
                                                                                                    </div>
                                                                                              </div>
                                                                                          </div>
                                                                                <br>
                                                                                <div class="text-muted small mt-1">Date Published &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted"><?php echo $row->date_modified?></a></div>
                                                                                </td>
                                                                              </tr>
                                                                            <?php }
                                                                          }
                                                                          else
                                                                            { ?>
                                                                                <tr>
                                                                                  <td class="text-center" width="100%">
                                                                                    <span class="p-3">No current Announcements</span>
                                                                                  </td>
                                                                                </tr>
                                                                              <?php }
                                                                              ?>
                                                                              </tbody>
                                                                          </table>
                                                                          <hr>
                                                                              <div style="text-align: center;">
                                                                                <div class="text-muted small mt-1">End of result</div>
                                                                              </div>
                                                                              <br>
                                                                       
                                                                      <div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;">
                                                                      <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 206px;"></div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                              <div class="card-footer bg-premium-dark">
                                                                
                                                              </div>
                                                          </div>
                                                    <div class="card-hover mb-3 card">
                                                        <div class="card-header-tab card-header text-black">
                                                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                                                <span><img src="assets/images/tasks.png" height="30" width="30"></span> Tasks List 
                                                            </div>
                                                            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                                                <div class="btn-group dropdown">
                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                                        <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                                    </button>
                                                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                                            <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                                        </button>
                                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                                            <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                                        </button>
                                                                        <button type="button" tabindex="0" class="dropdown-item">
                                                                            <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                                        </button>
                                                                        <div tabindex="-1" class="dropdown-divider"></div>
                                                                        <div class="p-3 text-right">
                                                                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="scroll-area-md">
                                                            <div class="scrollbar-container ps ps--active-y">
                                                                <div class="p-2">
                                                                    <ul class="todo-list-wrapper list-group list-group-flush">
                                                                        <li class="list-group-item">
                                                                            <div class="todo-indicator bg-warning"></div>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-2">
                                                                                        <div class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input">
                                                                                            <label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Answer Activity No.2
                                                                                            <div class="badge badge-danger ml-2">On going</div>
                                                                                        </div>
                                                                                        <div class="widget-subheading"><i>October 25, 2020</i></div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </button>
                                                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                            <i class="fa fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="todo-indicator bg-primary"></div>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-2">
                                                                                        <div class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input">
                                                                                            <label class="custom-control-label" for="exampleCustomCheckbox4">&nbsp;</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left flex2">
                                                                                        <div class="widget-heading">Badge on the right task</div>
                                                                                        <div class="widget-subheading">This task has show on hover actions!</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="widget-content-right ml-3">
                                                                                        <div class="badge badge-pill badge-success">Latest Task</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="todo-indicator bg-info"></div>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-2">
                                                                                        <div class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input">
                                                                                            <label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <div class="widget-content-left">
                                                                                            <img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Wala na akong maisip</div>
                                                                                        <div class="widget-subheading">A short description for this todo item</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </button>
                                                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                            <i class="fa fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="todo-indicator bg-success"></div>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-2">
                                                                                        <div class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input">
                                                                                            <label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left flex2">
                                                                                        <div class="widget-heading">Development Task</div>
                                                                                        <div class="widget-subheading">Finish React ToDo List App</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="badge badge-warning mr-2">69</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </button>
                                                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                            <i class="fa fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="todo-indicator bg-warning"></div>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-2">
                                                                                        <div class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input">
                                                                                            <label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Wash the car
                                                                                            <div class="badge badge-danger ml-2">Rejected</div>
                                                                                        </div>
                                                                                        <div class="widget-subheading"><i>Written by Bob</i></div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </button>
                                                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                            <i class="fa fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="todo-indicator bg-focus"></div>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-2">
                                                                                        <div class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input">
                                                                                            <label class="custom-control-label" for="exampleCustomCheckbox1">&nbsp;</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Task with dropdown menu</div>
                                                                                        <div class="widget-subheading">
                                                                                            <div>By Johnny
                                                                                                <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <div class="d-inline-block dropdown">
                                                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                                                                <i class="fa fa-ellipsis-h"></i>
                                                                                            </button>
                                                                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                                                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                                                <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="todo-indicator bg-primary"></div>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-2">
                                                                                        <div class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input">
                                                                                            <label class="custom-control-label" for="exampleCustomCheckbox4">&nbsp;</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left flex2">
                                                                                        <div class="widget-heading">Badge on the right task</div>
                                                                                        <div class="widget-subheading">This task has show on hover actions!</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="widget-content-right ml-3">
                                                                                        <div class="badge badge-pill badge-success">Latest Task</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="todo-indicator bg-info"></div>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-2">
                                                                                        <div class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input">
                                                                                            <label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left mr-3">
                                                                                        <div class="widget-content-left">
                                                                                            <img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-heading">Go grocery shopping</div>
                                                                                        <div class="widget-subheading">A short description for this todo item</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right widget-content-actions">
                                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </button>
                                                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                            <i class="fa fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li class="list-group-item">
                                                                            <div class="todo-indicator bg-success"></div>
                                                                            <div class="widget-content p-0">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left mr-2">
                                                                                        <div class="custom-checkbox custom-control">
                                                                                            <input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input">
                                                                                            <label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-left flex2">
                                                                                        <div class="widget-heading">Development Task</div>
                                                                                        <div class="widget-subheading">Finish React ToDo List App</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="badge badge-warning mr-2">69</div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                                                            <i class="fa fa-check"></i>
                                                                                        </button>
                                                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                                                            <i class="fa fa-trash-alt"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 206px;"></div></div></div>
                                                                </div>
                                                                <div class="d-block text-right card-footer">
                                                                    <button class="btn btn-primary">Add Task</button>
                                                                </div>
                                                                </div>
                                                                    <div class="mb-3 card">
                                                                     <div class="card-header" style="background-color: #3ac47d">
                                                                        <span><i class="fa fa-file" aria-hidden="true"> </i> My Files </span>
                                                                        <div class="btn-actions-pane-right actions-icon-btn">
                                                                            <button class="btn-icon btn-icon-only btn btn-link">
                                                                                <i class="pe-7s-plus btn-icon-wrapper"></i>
                                                                            </button>
                                                                            <button class="btn-icon btn-icon-only btn btn-link">
                                                                                <i class="pe-7s-cloud-download btn-icon-wrapper"></i>
                                                                            </button>
                                                                            <div class="btn-group dropdown">
                                                                                <button type="button" aria-haspopup="true" data-toggle="collapse" href="#collapseExample1234" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                                                                    <i class="pe-7s-menu btn-icon-wrapper"></i>
                                                                                </button>
                                                                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-shadow dropdown-menu-right dropdown-menu-hover-link dropdown-menu">
                                                                                    <h6 tabindex="-1" class="dropdown-header">Settings</h6>
                                                                                    <button type="button" tabindex="0" class="dropdown-item">
                                                                                        <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                                                    </button>
                                                                                    <button type="button" tabindex="0" class="dropdown-item">
                                                                                        <i class="dropdown-icon lnr-file-empty"></i><span>Settings</span>
                                                                                    </button>
                                                                                    <button type="button" tabindex="0" class="dropdown-item">
                                                                                        <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                                                    </button>
                                                                                    <div tabindex="-1" class="dropdown-divider"></div>
                                                                                    <div class="p-3 text-right">
                                                                                        <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                                                                        <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="collapse" id="collapseExample1234" style="">
                                                                          <div>
                                                                            <div class="drawer-section p-0">
                                                                              <div class="files-box">
                                                                                  <ul class="list-group list-group-flush">
                                                                                      <li class="pt-2 pb-2 pr-2 list-group-item">
                                                                                          <div class="widget-content p-0">
                                                                                              <div class="widget-content-wrapper">
                                                                                                  <div class="widget-content-left opacity-6 fsize-2 mr-3 text-primary center-elem">
                                                                                                      <i class="fa fa-file-alt"></i>
                                                                                                  </div>
                                                                                                  <div class="widget-content-left">
                                                                                                      <div class="widget-heading font-weight-normal">TPSReport.docx</div>
                                                                                                  </div>
                                                                                                  <div class="widget-content-right widget-content-actions">
                                                                                                      <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                                                                                          <i class="fa fa-cloud-download-alt"></i>
                                                                                                      </button>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </li>
                                                                                      <li class="pt-2 pb-2 pr-2 list-group-item">
                                                                                          <div class="widget-content p-0">
                                                                                              <div class="widget-content-wrapper">
                                                                                                  <div class="widget-content-left opacity-6 fsize-2 mr-3 text-warning center-elem">
                                                                                                      <i class="fa fa-file-archive"></i>
                                                                                                  </div>
                                                                                                  <div class="widget-content-left">
                                                                                                      <div class="widget-heading font-weight-normal">Latest_photos.zip</div>
                                                                                                  </div>
                                                                                                  <div class="widget-content-right widget-content-actions">
                                                                                                      <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                                                                                          <i class="fa fa-cloud-download-alt"></i>
                                                                                                      </button>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </li>
                                                                                      <li class="pt-2 pb-2 pr-2 list-group-item">
                                                                                          <div class="widget-content p-0">
                                                                                              <div class="widget-content-wrapper">
                                                                                                  <div class="widget-content-left opacity-6 fsize-2 mr-3 text-danger center-elem">
                                                                                                      <i class="fa fa-file-pdf"></i>
                                                                                                  </div>
                                                                                                  <div class="widget-content-left">
                                                                                                      <div class="widget-heading font-weight-normal">Annual Revenue.pdf</div>
                                                                                                  </div>
                                                                                                  <div class="widget-content-right widget-content-actions">
                                                                                                      <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                                                                                          <i class="fa fa-cloud-download-alt"></i>
                                                                                                      </button>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </li>
                                                                                      <li class="pt-2 pb-2 pr-2 list-group-item">
                                                                                          <div class="widget-content p-0">
                                                                                              <div class="widget-content-wrapper">
                                                                                                  <div class="widget-content-left opacity-6 fsize-2 mr-3 text-success center-elem">
                                                                                                      <i class="fa fa-file-excel"></i>
                                                                                                  </div>
                                                                                                  <div class="widget-content-left">
                                                                                                      <div class="widget-heading font-weight-normal">Analytics_GrowthReport.xls</div>
                                                                                                  </div>
                                                                                                  <div class="widget-content-right widget-content-actions">
                                                                                                      <button class="btn-icon btn-icon-only btn btn-link btn-sm">
                                                                                                          <i class="fa fa-cloud-download-alt"></i>
                                                                                                      </button>
                                                                                                  </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                          </div>
                                             </div>
                                              </div>
                                               </div>
                                                </div>

                   <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="dcalendar.picker.js"></script>
<script>
$('#demo').dcalendarpicker();
$('#calendar-demo').dcalendar(); //creates the calendar
</script>
<script>
$(document).ready(function(){
$('.data-table').dataTable({
    "iDisplayLength": 10,
    "aLengthMenu": [
        [5, 10, 25, 50, 100, -1],
        [5, 10, 25, 50, 100, "All"]
    ],
    responsive: true,
    "order": []
});
});
            </script>
            <script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>



            





               
          