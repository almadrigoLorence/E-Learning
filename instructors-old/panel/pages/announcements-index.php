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
        <ul></ul>
            <div class="search-wrapper">
                <div class="input-holder" style="background-color: white; border-radius: 50px;">
                    <input type="text" class="search-input active" placeholder="Type to search announcement" id="search_field">
                    <button class="search-icon bg-premium-dark"><span></span></button>
                </div>
                <button class="close"></button>
            </div> 
         <div class="row">
        <div class="table-responsive" style="padding-left: 15px; padding-right: 15px; padding-bottom: 15px; padding-top: 25px;">
        <table class="table table-hover" id="myTable" style="background-color: white">
        <tbody>
                    <?php 
                       $selAnn = $conn->query("SELECT * FROM announcement_tbl WHERE course_id='$exmneCourse' ORDER BY ann_id DESC ");
                        if($selAnn->rowCount() > 0)
                        {
                            while ($selAnnRow = $selAnn->fetch(PDO::FETCH_ASSOC)) { 
                                ?>
                        <tr>
                                <td>                 
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="media">
                                                    <img style="width: 40px; height: auto;" src="assets/images/user22.png" alt="" class="d-block ui-w-40 rounded-circle">
                                                    <div class="media-body ml-4">
                                                        <div class="float-right text-muted small">Author: <?php echo $selAnnRow['modified_by']; ?></div>
                                                        <a href="home.php?page=announcements&id=<?php echo $selAnnRow['ann_id']; ?>" style="color: green"><?php echo $selAnnRow['ann_title']?></a>
                                                        <div class="text-muted small"><?php echo $selAnnRow['date_modified']; ?> &nbsp;·&nbsp; 345 posts</div>
                                                        <div class="mt-2 pl-4">
                                                            <?php echo $selAnnRow['ann_desc']; ?>
                                                        </div>
                                                        <div class="small mt-2">
                                                            <a href="javascript:void(0)" style="color: green">Info:</a>
                                                            <a href="javascript:void(0)" class="text-muted ml-3">
                                                                <i class="fa fa-calendar bg-sunny-morning"></i> <?php echo $selAnnRow['ann_start'];?>
                                                            </a>
                                                            <a href="javascript:void(0)" class="text-muted ml-3">
                                                                <i class="fa fa-calendar" style="color: red;"></i>&nbsp;·&nbsp; <?php echo $selAnnRow['ann_end']; ?>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </td>
                                        <?php }

                        }
                        else
                        { ?>

                            
                                <i class="metismenu-icon"></i>No current Announcements
                          
                        <?php }
                     ?>    

                     </tr>
                     </tbody>          
                </table>
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
      