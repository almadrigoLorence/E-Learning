                              <?php 
                                include("../../../conn.php");
                                extract($_POST); 
                                $selCourse = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_course = '$sid' ");
                                if($selCourse->rowCount() > 0)
                                {
                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4">
                                                <i class="pe-7s-study"></i> <?php echo $selCourseRow['exmne_stud_number']; ?>
                                            </td>
                                            <td class="pl-4">
                                                <?php echo $selCourseRow['exmne_surname']; ?>, <?php echo $selCourseRow['exmne_fullname']; ?> <?php echo $selCourseRow['exmne_middle']; ?>. 
                                            </td>
                                        </tr>

                                    <?php }
                                }else{
                                    ?>
                                        <tr>
                                            <td class="pl-4">
                                               No Student Enrolled Yet in this Section
                                            </td>
                                            <td class="pl-4">
                                            
                                            </td>
                                        </tr>
                                    <?php
                                }
                               ?>