<div class="app-sidebar sidebar-shadow bg-slick-carbon sidebar-text-light" data-class="bg-happy-green sidebar-text-light">
    <div class="app-header__logo">
        <div class="logo-src"  style="width: 150px;  height: 30px; margin-left: 10px;"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

                <li class="app-sidebar__heading"><a href="home.php"><i class="fa fa-home"></i> Dashboard</a></li>
                <!-- ANNOUNCEMENT -->



                <!-- MGA HINDI PA NA TAKE NA TASK -->
               <!--  <li class="app-sidebar__heading">My Performance</li>
                <li>
                <a href="#">
                     <i class="metismenu-icon pe-7s-pen"></i>
                     All Questionares
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul >
                    <?php 
                        
                        if($selExam->rowCount() > 0)
                        {
                            while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                 <li>
                                 <a href="#" id="startQuiz" data-id="<?php echo $selExamRow['ex_id']; ?>"  >
                                    <?php 
                                        $lenthOfTxt = strlen($selExamRow['ex_title']);
                                        if($lenthOfTxt >= 23)
                                        { ?>
                                            <?php echo substr($selExamRow['ex_title'], 0, 20);?>.....
                                        <?php }
                                        else
                                        {
                                            echo $selExamRow['ex_title'];
                                        }
                                     ?>
                                 </a>
                                 </li> 
                            <?php }
                        }
                        else
                        { ?>
                            <a href="#">
                                <i class="metismenu-icon"></i>(Empty)
                            </a>
                        <?php }
                     ?>
                     
                </ul>
                </li> -->

                <!-- 
                <li class="app-sidebar__heading">Announcements <span><div class="ml-auto badge badge-pill badge-secondary"></div></span></li>
                     <li>
                     <a href="#">
                     <i class="metismenu-icon pe-7s-bell"></i>
                     Announcements
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul >
                    <?php 
                        
                        if($selAnn->rowCount() > 0)
                        {
                            while ($selAnnRow = $selAnn->fetch(PDO::FETCH_ASSOC)) { ?>
                                 <li>
                                 <a href="home.php?page=announcements&id=<?php echo $selAnnRow['ann_id']; ?>"  >
                                    <?php 
                                        $lenthOfTxt = strlen($selAnnRow['ann_title']);
                                        if($lenthOfTxt >= 23)
                                        { ?>
                                            <?php echo substr($selAnnRow['ann_title'], 0, 20);?>.....
                                        <?php }
                                        else
                                        {
                                            echo $selAnnRow['ann_title'];
                                        }
                                     ?>
                                 </a>
                                 </li>
                            <?php }
                        }
                        else
                        { ?>
                            <a href="#">
                                <i class="metismenu-icon"></i>(Empty)
                            </a>
                        <?php }
                     ?>
                     
                </ul>
                </li> -->



                <!-- LESSONS/ FILES -->
                 <li class="app-sidebar__heading">LESSONS  <span><!-- <div class="ml-auto badge badge-pill badge-secondary"> <?php echo $totalCourse = $selLes['totLes']; ?></div> --></span></li>
                     <li>
                     <a href="#">
                     <i class="metismenu-icon pe-7s-file"></i>
                     Uploaded Lessons
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left" ></i>
                </a>
                <ul>
                    <?php 
                        
                        if($selLesson->rowCount() > 0)
                        {
                            while ($selLessonRow = $selLesson->fetch(PDO::FETCH_ASSOC)) { ?>
                                 <li>
                                 <a href="home.php?page=lesson&id=<?php echo $selLessonRow['lesson_id']; ?>"  >
                                    <?php 
                                        $lenthOfTxt = strlen($selLessonRow['lesson_title']);
                                        if($lenthOfTxt >= 23)
                                        { ?>
                                            <?php echo substr($selLessonRow['lesson_title'], 0, 20);?>.....
                                        <?php }
                                        else
                                        {
                                            echo $selLessonRow['lesson_title'];
                                        }
                                     ?>
                                 </a>
                                 </li>
                            <?php }
                        }
                        else
                        { ?>
                            <a href="#">
                                <i class="metismenu-icon"></i>(Empty)
                            </a>
                        <?php }
                     ?>
                     
                </ul>
                </li>

        



                <!-- MGA TAPOS NA EXAM AT ACTIVITY -->
               <!--   <li class="app-sidebar__heading">Finnished Activity / Exam</li> -->
             <!--    <li>
                  <?php 
                    $selTakenExam = $conn->query("SELECT * FROM exam_tbl et INNER JOIN exam_attempt ea ON et.ex_id = ea.exam_id WHERE exmne_id='$exmneId' ORDER BY ea.examat_id  ");

                    if($selTakenExam->rowCount() > 0)
                    {
                        while ($selTakenExamRow = $selTakenExam->fetch(PDO::FETCH_ASSOC)) { ?>
                            <a href="home.php?page=result&id=<?php echo $selTakenExamRow['ex_id']; ?>" >
                               
                                <?php echo $selTakenExamRow['ex_title']; ?>
                            </a>
                        <?php }
                    }
                    else
                    { ?>
                        <a href="#" class="pl-3">(Empty)</a>
                    <?php }
                    
                   ?>
                </li> -->


                <!-- PARA SA FEEDBACKS -->
               <!--  <li class="app-sidebar__heading">FEEDBACKS</li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#feedbacksModal" >
                        Add Feedbacks                         
                    </a>
                </li> -->
            </ul>
        </div>
    </div>
</div>  
