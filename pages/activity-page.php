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
                                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                                        <li class="breadcrumb-item"><a href="home.php?page=activities" style="color: white">Activities</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page"><?php echo $selAct['act_title']; ?></li>
                                                    </ol>
                                                </nav> 
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>            
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body ml-4">
                                <div class="float-right text-muted small"><?php echo $selAct['date_uploaded'] ?></div>
                                <div class="mt-2 pl-4">
                                <?php echo $selAct['act_desc']; ?>
                                                            <?php 
                                                            if ($selAct['act_file'] == '') {
                                                                # code...
                                                            }else{
                                                                ?>
                                                                <a href="query/downloadfileactivity.php?filename=<?php echo $selAct['act_file']; ?>&foldername=<?php echo $selAct['uid'] ?>"><?php echo $selAct['act_file']; ?></a>
                                                            
                                                            <?php
                                                            }
                                                             ?>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
          