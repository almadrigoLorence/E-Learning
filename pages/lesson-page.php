<?php include("includes/side-bar2.php"); ?>
<title>Lesson</title>
<?php 
$lessId = $_GET['id'];
$selTopic = $conn->query("SELECT * FROM topics_tbl WHERE lesson_id='$lessId' ")->fetch(PDO::FETCH_ASSOC);
?>
<div class="app-main__inner">
<div class="app-main__outer">
                        <div class="app-page-title bg-premium-dark text-light">
                            <div class="page-title-wrapper ">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                       <img src="assets/images/lesson-icon.jpg" height="40" width="40">
                                    </div>
                                    <div>
                                        <?php echo $selTopic['topic_title']; ?>
                                        <div class="page-title-subheading">
                                            <nav class="" aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                        <li class="breadcrumb-item"><a href="home.php" style="color: white">Dashboard</a></li>
                                                        <li class="active breadcrumb-item" aria-current="page" style="color: white">Topics</li>
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
                                            Lessons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                       <table>
                                                           
                                                       </table>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
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
                        <h5>Topics</h5>
                             <?php 
                             $selTopic = $conn->query("SELECT * FROM topics_tbl WHERE lesson_id='$lessId' ORDER BY topic_id desc");
                               if($selTopic->rowCount() > 0)
                               {
                                while ($selTopicRow = $selTopic->fetch(PDO::FETCH_ASSOC)) { ?>
                                 <div class="table-responsive" >
                                    <table class="align-middle" id="tableList">
                                        <tbody>
                                        
                                            <div class="card-success border mb-3 card card-body">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <div class="float-right">
                                                        </div>
                                                        <h5 style="color: black"><?php echo $selTopicRow['topic_title']?></h5>
                                                        <div class="mt-2 pl-4">
                                                            <?php echo $selTopicRow['topic_desc']; ?>
                                                        </div>
                                                        <br>
                                                        <div class="float-left text-muted">
                                                            <?php 
                                                            if ($selTopicRow['files'] == '') {
                                                                # code...
                                                            }else{
                                                                ?>
                                                                Files attatched: <i class="pe-7s-paperclip"></i><a href="query/downloadmodule.php?filename=<?php echo $selTopicRow['files']; ?>&lessid=<?php echo $selTopicRow['lesson_id']?>&topicid=<?php echo $selTopicRow['topic_id']?>"><?php echo $selTopicRow['files']; ?></a>
                                                            
                                                            <?php
                                                            }
                                                             ?>
                                                        </div>
                                                        <br>
                                                        <div class="float-right text-muted small">
                                                           Date uploaded: <?php echo $selTopicRow['date_uploaded']; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tbody>
                                    </table>
                              </div>
                                <?php }
                                }
                                else
                                { ?>
                                  <tr>
                                    <td colspan="2">
                                      <h3 class="p-3">No Topic at the moment</h3>
                                    </td>
                                  </tr>
                                <?php }
                                ?>
                                </div>
                            </div>
                        </div>
          
          