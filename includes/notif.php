 <?php
session_start();
include("../conn.php");
                                                            $cid = $_SESSION['examineeSession']['exmne_id'];
                                                            $selExam = $conn->query("SELECT * FROM notification_tbl where cou_id IN (SELECT exmne_course from examinee_tbl WHERE exmne_id = '$cid') ORDER BY id DESC LIMIT 20");
                                                            if($selExam->rowCount() > 0)
                                                            {
                                                        while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) {
                                                            if ($selExamRow['not_desc'] == 'New Exam') {
                                                                $location = "long-exam";
                                                            }else if($selExamRow['not_desc'] =='New Assignment'){
                                                                $location = "assignments";
                                                            }else if ($selExamRow['not_desc'] == 'New Quiz') {
                                                                $location = 'quiz';
                                                            }else if ($selExamRow['not_desc'] == 'New Lesson'){
                                                                $location = 'alllessons';
                                                            }else if ($selExamRow['not_desc'] == 'New Activity'){
                                                                $location = 'activities';
                                                            }
                                                        ?>
                                                        <li class="">
                                                            <a href="home.php?page=<?php echo $location;?>" class="nav-link cNav ">
                                                               <div style="padding: 5px; background-color: transparent; border-radius: 6px;">
                                                                <div style="font-weight: normal"><i class="fa fa-bell" style="color: #187bcd"> </i> <?php 
                                                                $insID = $selExamRow['uploader']; 
                                                                $instructorRow = $conn->query("SELECT * FROM `instructors_tbl` where instructor_id in (SELECT cou_instructor from course_tbl WHERE cou_id IN (SELECT exmne_course from examinee_tbl WHERE exmne_id = '$cid'))")->fetch(PDO::FETCH_ASSOC);
                                                                if ($insID == 'admin') {
                                                                    echo "Administrator ";
                                                                }else{
                                                                $date_upload = date("F d, Y - h:m:s a");
                                                                echo $instructorRow['instructor_fullname']." ".$instructorRow['instructor_middle'].". ". $instructorRow['instructor_surname'];  
                                                                }
                                                                ?> uploaded <span style="color: #03254c"><?php echo $selExamRow['not_desc'];?> </span></div> 
                                                               <small class="align-text-bottom" style="color: #2a9df4;"><?php echo $selExamRow['date_upload']; ?></small>
                                                               </div>
                                                            </a>
                                                        </li>
                                                                <?php
                                                            }
                                                        }?>