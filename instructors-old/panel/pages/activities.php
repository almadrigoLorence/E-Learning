
<?php include("includes/sidebar.php"); ?>
<head>
     <link href="css/mycss.css" rel="stylesheet">
</head>
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
                                <div class="row no-gutters w-100 align-items-center">
                                    <div class="col-6" style="padding-left: 15px;"></div>
                                    <div class="col-6 text-muted">
                                        <div class="row no-gutters align-items-center">
                                             <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-search"></i>
                                                    </div>
                                                </div>
                                                <input placeholder="Search Activity.." type="text" class="form-control" id="search_field">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
            
                            <hr class="m-0">
                                <div class="card mb-0">
                                            <table id="myTable" class="table table-inverse">
                                             <tbody>
                                               <?php
                                                $selAct = $conn->query("SELECT * FROM activities_tbl WHERE cou_id='$exmneCourse' ORDER BY act_id ASC ");
                                                if ($selAct->rowCount() > 0) 
                                                {
                                            
                                                while($row = $selAct -> fetch(PDO::FETCH_OBJ)){
                                                ?>
                                                <tr>
                                                  <td>
                                                    <div class="row no-gutters align-items-left">
                                                        <div class="col-md-10">
                                                            <a href="home.php?page=activity&id=<?php echo $row->act_id; ?>" class="text-big" style="color: black; font-size: 18px;">
                                                                <?php echo $row->act_title?></a>
                                                                <br>
                                                                <br>
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="media col-11 align-items-center">
                                                                    <div class="pl-4 text-big" style="text-align: justify;"><?php echo $row->act_desc ?></div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="text-muted small mt-1">Date Published &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted"><?php echo $row->date_uploaded?></a></div>
                                                        </div>
                                                    </div>
                                                  </td>
                                                  <td> 
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
          