<!-- <link rel="stylesheet" type="text/css" href="ChosenSelect/chosen.min.css">
<script src="ChosenSelect/chosen.jquery.min.js"></script> -->
   <div class="app-sidebar sidebar-shadow bg-slick-carbon text-light sidebar-text-light" data-class="bg-premium-black sidebar-text-white">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
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
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading"><a href="home.php">Dashboard</a></li>


                        
                               <li class="app-sidebar__heading"><hr></li>
                                <li>
                                    <a href="void:">
                                         <i class="metismenu-icon pe-7s-display2"></i>
                                         <strong>Course</strong>
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modalForAddCourse">
                                                <i class="metismenu-icon"></i>
                                                Add Course
                                            </a>
                                        </li>
                                        <li>
                                            <a href="home.php?page=manage-course">
                                                <i class="metismenu-icon">
                                                </i>Manage Course and Sections
                                            </a>
                                        </li>
                                       <!--  <li>
                                            <a href="home.php?page=course-sec-list">
                                                <i class="metismenu-icon">
                                                </i>Lists Course and Sections
                                            </a>
                                        </li> -->
                                    </ul>
                                </li>
                        


                                <!-- FOR INSTRUCTORS -->
                               <li class="app-sidebar__heading">Account Management</li>
                                <li>
                                     <a href="void:">
                                         <i class="metismenu-icon pe-7s-display2"></i>
                                         <strong>Instructors</strong>
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                         <a href="" data-toggle="modal" data-target="#modalForAddInstructor">
                                            <i class="metismenu-icon"></i>
                                            Add Instructor
                                         </a>
                                    </li>
                                    <li>
                                        <a href="home.php?page=manage-instructor">
                                                <i class="metismenu-icon">
                                                </i>Manage Instructors
                                            </a>
                                        </li>
                                     </ul>
                                </li>



                                <!-- FOR STUDENTS -->
                                <li class="app-sidebar__heading"><hr></li>
                                <li>
                                     <a href="void:">
                                         <i class="metismenu-icon pe-7s-users"></i>
                                         <strong>Students</strong>
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                    <a href="" data-toggle="modal" data-target="#modalForAddExaminee">
                                        <i class="metismenu-icon pe-7s-add-user">
                                        </i>Add Student / Account
                                    </a>
                                </li>
                                <li>
                                    <a href="home.php?page=manage-students">
                                        <i class="metismenu-icon pe-7s-users">
                                        </i>Manage Students
                                    </a>
                                </li>
                                     </ul>
                                </li>



                                <!-- FOR ACTIVITIES AND EXAM -->
                                 <li class="app-sidebar__heading">Assessment</li>
                                <li>
                                    <a href="#">
                                         <i class="metismenu-icon pe-7s-paperclip"></i>
                                        <strong> Assessment</strong>
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                       <li>
                                            <a href="home.php?page=manage-activities">
                                                <i class="metismenu-icon">
                                                </i>Manage Activities
                                            </a>
                                        </li>
                                        <li>
                                            <a href="home.php?page=manage-assignments">
                                                <i class="metismenu-icon">
                                                </i>Manage Assignments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="home.php?page=manage-exam">
                                                <i class="metismenu-icon">
                                                </i>Manage Long Exam
                                            </a>
                                        </li>
                                        <li>
                                            <a href="home.php?page=manage-quizzes">
                                                <i class="metismenu-icon">
                                                </i>Manage Quiz
                                            </a>
                                        </li>
                                        <li>
                                            <a href="home.php?page=reaction-papers">
                                                <i class="metismenu-icon">
                                                </i>Reaction Papers
                                            </a>
                                        </li>
                                    </ul>
                                </li>



                                <!-- FOR LESSONS AND MODULES -->
                                 <li class="app-sidebar__heading"><hr></li>
                                <li>
                                    <a href="#">
                                         <i class="metismenu-icon pe-7s-paperclip"></i>
                                        <strong> Lesson Modules</strong>
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                            <a href="home.php?page=manage-lessons">
                                                <i class="metismenu-icon">
                                                </i>Manage Modules  
                                            </a>
                                        </li>
                                    </ul>
                                </li>



                                <!-- RESULTS -->
                                <li class="app-sidebar__heading">Report Log</li>
                                <li>
                                    <a href="home.php?page=report-log">
                                        <i class="metismenu-icon pe-7s-graph">
                                        </i><strong>Student's Result</strong> 
                                    </a>
                                </li>



                                <!-- REPORT -->
                                <li class="app-sidebar__heading"></li>
                                <li>
                                    <a href="home.php?page=overall-result">
                                        <i class="metismenu-icon pe-7s-display1">
                                        </i><strong>Students Result</strong>
                                    </a>
                                </li>
                              


                                <!-- FEEDBACK -->
                                <li class="app-sidebar__heading"><hr></li>
                                <li>
                                    <a href="home.php?page=feedbacks">
                                        <i class="metismenu-icon pe-7s-chat">
                                        </i><strong>All Feedbacks</strong>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>


                </div>  

                 
               