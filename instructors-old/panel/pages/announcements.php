<?php include("includes/sidebar.php"); ?>

 <?php 
    $announcementId = $_GET['id'];
    $selAnn = $conn->query("SELECT * FROM announcement_tbl WHERE ann_id='$announcementId' ")->fetch(PDO::FETCH_ASSOC);

 ?>
<div class="app-main__outer">
<div class="app-main__inner">
   
        <div class="app-page-title bg-premium-dark text-light">
            <div class="page-title-wrapper">
                <div class="page-title-heading" >
                    <div>
                        <?php echo $selAnn['ann_title']; ?></center>
                          <div class="page-title-subheading">

                            <?php echo $selAnn['date_modified']; ?>
                                            <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="home.php" style="color: white;">Dashboard</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page">List of Activities</li>
                                                    </ol>
                                                </nav>
                          </div>
                       
                    </div>
                </div>
            </div>
        </div>       
        <div class="main-card mb-3 card" style="row">
            <div class="card-body">
                <div class="scroll-area-lg" style="height: 500px;">
                    <div class="scrollbar-container ps--active-y">
                  
                    <?php echo $selAnn['ann_desc']; ?>
                   
                    </div>
                </div>
            </div>
        <div class="d-block text-right card-footer">
            <div class="btn-actions-pane-right actions-icon-btn">
                <div class="text-muted small ml-3">
                <div>  <i class="fa fa-calendar"></i> Date Posted: <strong> <?php echo $selAnn['date_modified']?></strong></div>
                <div><strong>Author: <?php echo $selAnn['modified_by']; ?></strong></div>
                </div>
            </div>
        </div>
        </div>
</div>

      