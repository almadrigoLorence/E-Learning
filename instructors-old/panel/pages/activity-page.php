<?php include("includes/sidebar.php"); ?>

<?php 
$actId = $_GET['id'];
$selAct = $conn->query("SELECT * FROM activities_tbl WHERE act_id='$actId' ")->fetch(PDO::FETCH_ASSOC);
?>
<div class="app-main__inner">
<div class="app-main__outer">
                        <div class="app-page-title bg-premium-dark text-light">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <img src="assets/images/lesson-icon.jpg" height="40" width="40">
                                    </div>
                                    <div>
                                        <?php echo $selAct['act_title'] ;?>
                                        
                                        <div class="page-title-subheading">
                                            <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                                                        <li class="breadcrumb-item"><a href="home.php?page=activities">Activities</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page"><?php echo $selAct['act_title']; ?></li>
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
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span> Inbox</span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span> Book</span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span> Picture</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled="" class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span> File Disabled</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>   
                             </div>
                        </div>            
                      
            
                        <div class="card mb-3">
                            <div class="card-header pl-0 pr-0">
                                <div class="row no-gutters w-100 align-items-center">
                                    <div class="col"></div>
                                    <div class="col-4 text-muted">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="row no-gutters align-items-center">
                                    <div class="col">
                                        <span style="font-size: 19px;"><?php echo $selAct['act_title'] ?></span>
                                        <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted">Leon Wilson</a></div>
                                    </div>
                                    <div class="d-none d-md-block col-4">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-4">12</div>
                                            <div class="media col-8 align-items-center">
                                                <img style="width: 40px; height: auto;" src="assets/images/avatars/2.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                                                <div class="media-body flex-truncate ml-2">
                                                    <div class="line-height-1 text-truncate">1 day ago</div>
                                                    <a href="javascript:void(0)" class="text-muted small text-truncate">by Leon Wilson</a>
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
          
          