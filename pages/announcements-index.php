<?php include("includes/sidebar.php"); ?>
<head>
<link href="./main.css" rel="stylesheet">
</head>
<div class="app-main__outer">
<div class="app-main__inner">
        <div class="app-page-title bg-premium-dark text-light">
            <div class="page-title-wrapper">
                <div class="page-title-heading" >
                    <div>
                        Announcements
                    </div>
                </div>
            </div>
        </div> 
      
         <div class="my-card">
                          <div class="card-header rounded mb-2 bg-premium-dark text-white">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal rounded">Timeline</div>
                            <div class="btn-actions-pane-right text-black actions-icon-btn">
                              <div class="btn-group dropdown" style="color: black">
                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                <i class="pe-7s-menu btn-icon-wrapper" style="color: white"></i>
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
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="m-0">
                          <?php
                          $selAnn = $conn->query("SELECT * FROM announcement_tbl WHERE course_id='$exmneCourse' ORDER BY ann_id DESC ");
                          if ($selAnn->rowCount() > 0) 
                          {
                          while($row = $selAnn -> fetch(PDO::FETCH_OBJ)){ ?>
                          <div class="mb-3 p-3" style="background-color: #FFFEFF;background: #FFFEFF;box-shadow:  5px 5px 10px #e0e0e0,-5px -5px 10px #FFFEFF; border-radius: 8px;">
                          <span><small> </small><?php 
                          $authorid = $row->modified_by;
                          if ($authorid == "Administrator") {
                          echo "Administrator";
                          }else{
                          $authordetails = $conn->query("SELECT * FROM instructors_tbl WHERE instructor_id = $authorid ")->fetch(PDO::FETCH_ASSOC);
                          echo $authordetails['instructor_fullname']." ".$authordetails['instructor_middle'].". ".$authordetails['instructor_surname'];
                          }
                          ?>
                          </span>
                          <div class="text-muted small mt-1">Posted on &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted"><?php echo $row->date_modified?></a></div>
                          <hr>
                          <div class="text-muted small mt-1"><a href="home.php?page=announcements&id=<?php echo $row->ann_id ?>" class="text-big" style="color: #3ac47d; font-size: 18px;"><?php echo $row->ann_title?> </a></div>
                          <div class="text-muted small mt-1">Description: </div>
                          <div class="row no-gutters align-items-center">
                            <div class="media col-11 align-items-center">
                              <div class="pl-4 text-big" style="text-align: justify;">
                                <?php 
                                $lenthOfTxt = strlen ($row->ann_desc);
                                if($lenthOfTxt >= 200)
                                { ?>
                                <?php echo substr($row->ann_desc, 0, 200);?>.....
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
                          </div>
                          <?php }
                          }
                          else
                          { ?>
                          <span class="p-3">No current Announcements</span>
                          <?php }
                          ?>
                          <hr>
                          <br>
                          <div class="main-card mb-3 card">
                            <div class="card-body">
                            <h5 class="card-title">Timeline</h5>
                              <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                <div class="vertical-timeline-item vertical-timeline-element">
                                  <div>
                                  <span class="vertical-timeline-element-icon bounce-in">
                                  <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                  </span>
                                  <div class="vertical-timeline-element-content bounce-in">
                                  <h4 class="timeline-title">Good day! </h4>
                                  <p>Welcome to STS(GNED) E-learning platform. This platform is currently under the progress of making it better for students and teachers.
                                  </p>
                                  <span class="vertical-timeline-element-date">10:30 PM</span>
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

<script>
  $('#search_field').on('keyup', function() {
  var value = $(this).val();
  var patt = new RegExp(value, "i");

  $('#myTable').find('tr').each(function() {
    if (!($(this).find('td').text().search(patt) >= 0)) {
      $(this).not('.myHead').hide();
    }
    if (($(this).find('td').text().search(patt) >= 0)) {
      $(this).show();
    }

  });
});
</script>
      