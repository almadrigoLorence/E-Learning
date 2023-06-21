// Admin Log in
$(document).on("submit","#adminLoginFrm", function(){
   $.post("query/loginExe.php", $(this).serialize(), function(data){
      if(data.res == "invalid")
      {
        Swal.fire(
          'Invalid',
          'Please input valid username / password',
          'error'
        )
      }
      else if(data.res == "success")
      {
        $('body').fadeOut();
        window.location.href='home.php';
      }
   },'json');

   return false;
});
/*
$(document).on("submit","#addprofileimg", function(){
   $.post("query/addProfileimgExe.php", $(this).serialize(), function(data){
      if(data.res == "invalid")
      {
        Swal.fire(
          'Invalid',
          'Please input valid username / password',
          'error'
        )
      }
      else if(data.res == "success")
      {
        Swal.fire(
          'Success',
          data.res + ' Successfully Added',
          'success'
        )
      }
   },'json');

   return false;
});*/


// Add Course 
$(document).on("submit","#addCourseFrm" , function(){
  $.post("query/addCourseExe.php", $(this).serialize() , function(data){
  	if(data.res == "exist")
  	{
  		Swal.fire(
  			'Already Exist',
  			data.course_name.toUpperCase() + ' Already Exist',
  			'error'
  		)
  	}
  	else if(data.res == "success")
  	{
  		Swal.fire(
  			'Success',
  			data.course_name.toUpperCase() + ' Successfully Added',
  			'success'
  		)
          // $('#course_name').val("");
          refreshDiv();
            setTimeout(function(){ 
                $('#body').load(document.URL);
             }, 2000);
  	}
  },'json')
  return false;
});


// Delete Announcement
$(document).on("click", "#deleteAnnouncement", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteAnnouncementExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Selected Announcement successfully deleted',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }
    });
    
   

    return false;
  });


// Update Course
$(document).on("submit","#updateCourseFrm" , function(){
  $.post("query/updateCourseExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            'Selected course has been successfully updated!',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});

// input Grade
$(document).on("submit","#inputgradeform" , function(){
  $.post("query/inputgradeExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            'Selected course has been successfully updated!',
            'success'
          )
        refreshDiv();
        $("#inputGrade").modal('hide');
     }
  },'json')
  return false;
});

// // Delete Announcement
// $(document).on("click", "#deleteAnnouncement", function(e){
//     e.preventDefault();
//     var id = $(this).data("id");
//      $.ajax({
//       type : "post",
//       url : "query/deleteAnnouncementExe.php",
//       dataType : "json",  
//       data : {id:id},
//       cache : false,
//       success : function(data){
//         if(data.res == "success")
//         {
//           Swal.fire(
//             'Success',
//             'Selected Announcement successfully deleted',
//             'success'
//           )
//           refreshDiv();
//         }
//       },
//       error : function(xhr, ErrorStatus, error){
//         console.log(status.error);
//       }

//     });
    
   

//     return false;
//   });



// Delete Course
$(document).on("click", "#deleteCourse", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteCourseExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Selected Course successfully deleted',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    
   

    return false;
  });


// Delete Exam
$(document).on("click", "#deleteExam", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteExamExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Selected Exam successfully deleted',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    return false;
  });



// Delete Lesson
$(document).on("click", "#deleteLesson", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteLessonExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Selected Lesson successfully deleted',
            'success'
          )
          location.reload();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    return false;
  });

// Delete Activity
$(document).on("click", "#deleteActivity", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteActivityExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Selected Activity successfully deleted',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    return false;
  });

// Delete Quiz
$(document).on("click", "#deleteQuiz", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteQuizExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Selected Quiz successfully deleted',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    return false;
  });

// Delete Assignment
$(document).on("click", "#deleteAssignment", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteAssignmentExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Selected Assignment successfully deleted',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    return false;
  });



// Add Exam 
$(document).on("submit","#addExamFrm" , function(){
  // $('.button-submit').prop('disabled',true);
  $.post("query/addExamExe.php", $(this).serialize() , function(data){
    if(data.res == "noSelectedCourse")
   {
      Swal.fire(
          'No Course',
          'Please select course',
          'error'
       )
    }
    if(data.res == "noSelectedTime")
   {
      Swal.fire(
          'No Time Limit',
          'Please select time limit',
          'error'
       )
    }
    if(data.res == "noDisplayLimit")
   {
      Swal.fire(
          'No Display Limit',
          'Please input question display limit',
          'error'
       )
    }

     else if(data.res == "exist")
    {
      Swal.fire(
        'Already Exist',
        data.examTitle.toUpperCase() + '<br>Already Exist',
        'error'
      )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Success',
        data.examTitle.toUpperCase() + '<br>Successfully Added',
        'success'
      )
          $('#addExamFrm')[0].reset();
          $('#course_name').val("");
          refreshDiv();
    }
  },'json')
  return false;
});


// Add Quiz 
$(document).on("submit","#addQuizFrm" , function(){
  $.post("query/addQuizExe.php", $(this).serialize() , function(data){
    if(data.res == "noSelectedCourse")
   {
      Swal.fire(
          'No Course',
          'Please select course',
          'error'
       )
    }
    if(data.res == "noSelectedTime")
   {
      Swal.fire(
          'No Time Limit',
          'Please select time limit',
          'error'
       )
    }
    if(data.res == "noDisplayLimit")
   {
      Swal.fire(
          'No Display Limit',
          'Please input question display limit',
          'error'
       )
    }

     else if(data.res == "exist")
    {
      Swal.fire(
        'Already Exist',
        data.quizTitle.toUpperCase() + '<br>Already Exist',
        'error'
      )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Success',
        'Quiz #' + data.quizTitle.toUpperCase() + '<br>Successfully Added',
        'success'
      )
          $('#addQuizFrm')[0].reset();
          $('#course_name').val("");
          refreshDiv();
    }
  },'json')
  return false;
});


// Update Exam 
$(document).on("submit","#updateExamFrm" , function(){
  $.post("query/updateExamExe.php", $(this).serialize() , function(data){
    if(data.res == "success")
    {
      Swal.fire(
          'Update Successfully',
          data.msg + ' <br>successfully updated',
          'success'
       )
          refreshDiv();
    }
    else if(data.res == "failed")
    {
      Swal.fire(
        "Something's went wrong!",
         'Somethings went wrong',
        'error'
      )
    }
   
  },'json')
  return false;
});


// Update Quiz 
$(document).on("submit","#updatequizFrm" , function(){
  $.post("query/updateQuizExe.php", $(this).serialize() , function(data){
    if(data.res == "success")
    {
      Swal.fire(
          'Update Successfully',
          data.msg + ' <br>successfully updated',
          'success'
       )
          refreshDiv();
    }
    else if(data.res == "failed")
    {
      Swal.fire(
        "Something's went wrong!",
         'Somethings went wrong',
        'error'
      )
    }
   
  },'json')
  return false;
});

// Update Question
$(document).on("submit","#updateQuestionFrm" , function(){
    $.post("query/updateQuestionExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            'Selected question has been successfully updated!',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});

// Update Question for Quiz
$(document).on("submit","#updateQuestionFrmQuiz" , function(){
    $.post("query/updateQuestionQuizExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            'Selected question has been successfully updated!',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});
 

// Delete Question
$(document).on("click", "#deleteQuestion", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteQuestionExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Deleted Success',
            'Selected question successfully deleted',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
  
    return false;
  });
// Delete Question
$(document).on("click", "#deleteQuestionQuiz", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteQuestionQuizExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Deleted Success',
            'Selected question successfully deleted',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
  
    return false;
  });


// Delete Topic
$(document).on("click", "#deleteTopic", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteTopicExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Deleted Success',
            'Selected topic successfully deleted',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
  
    return false;
  });


// Add Question 
$(document).on("submit","#addQuestionFrm" , function(){
  $.post("query/addQuestionExe.php", $(this).serialize() , function(data){
    if(data.res == "exist")
    {
      Swal.fire(
          'Already Exist',
          data.msg + ' question <br>already exist in this exam',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Success',
         data.msg + ' question <br>Successfully added',
        'success'
      )
        $('#addQuestionFrm')[0].reset();
        refreshDiv();
    }
   
  },'json')
  return false;
});

// Add Question Quiz 
$(document).on("submit","#addQuizQuestionFrm" , function(){
  $.post("query/addQuizQuestionExe.php", $(this).serialize() , function(data){
    if(data.res == "exist")
    {
      Swal.fire(
          'Already Exist',
          data.msg + ' question <br>already exist in this exam',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Success',
         data.msg + ' question <br>Successfully added',
        'success'
      )
        $('#addQuizQuestionFrm')[0].reset();
        refreshDiv();
    }
   
  },'json')
  return false;
});

// Add Activity 
$(document).on("submit","#addActFrm" , function(e){
        e.preventDefault();
        $.ajax({
        url: "query/addActivityExe.php",
           type:"POST",
           data:new FormData(this),
           contentType: false,
                 cache: false,
           processData:false,
           dataType:"JSON",
        beforeSend : function()
        {


        },
        success: function(data)
           {
              if(data.res == "exist")
              {
                Swal.fire(
                    'Oops',
                    '"' + data.actTitle + '"' + ' <br>already exist',
                    'error'
                 )
              }
              else if(data.res == "success")
              {
                Swal.fire(
                  'Success',
                  data.activity + ' <br>Successfully added',
                  'success'
                )
                  $('#addActFrm')[0].reset();
                  refreshDiv();
              }

           },
          error: function(e) 
           {
           }          
        });

});
// Update Activity 
$(document).on("submit","#UpdateActFrm" , function(e){
        e.preventDefault();
        $.ajax({
        url: "query/updateActivityExe.php",
           type:"POST",
           data:new FormData(this),
           contentType: false,
                 cache: false,
           processData:false,
           dataType:"JSON",
        beforeSend : function()
        {


        },
        success: function(data)
           {
            if(data.res == "failed")
            {
              Swal.fire(
                  'Oops',
                  '"' + data.activity + '"' + ' <br>Update Unsuccessful',
                  'error'
               )
            }
            if(data.res == "success")
            {
              location.reload();
              Swal.fire(
                'Success',
                data.activity + ' <br>Successfully updated',
                'success'
              )
            }

           },
          error: function(e) 
           {
           }          
        });
});
// Update asss Activity 
$(document).on("submit","#UpdateAssFrm" , function(){
  $.post("query/updateAssignmentExe.php", $(this).serialize() , function(data){
    
    if(data.res == "failed")
    {
      Swal.fire(
          'Oops',
          '"' + data.actTitle + '"' + ' <br>Update Unsuccessful',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Success',
        data.activity + ' <br>Successfully updated',
        'success'
      )
        // $('#addActFrm')[0].reset();
        // refreshDiv();
    }
  },'json')
  return false;
});

// Add Assignment 
$(document).on("submit","#addAssFrm" , function(){
  $.post("query/addAssignmentExe.php", $(this).serialize() , function(data){
    if(data.res == "exist")
    {
      Swal.fire(
          'Oops',
          '"' + data.assTitle + '"' + ' <br>already exist',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Success',
        data.assignment + ' <br>Successfully added',
        'success'
      )
        $('#addAssFrm')[0].reset();
        refreshDiv();
    }
  },'json')
  return false;
});


// Add Lesson 
$(document).on("submit","#addLessonFrm" , function(){
  $.post("query/addLessonExe.php", $(this).serialize() , function(data){
    if(data.res == "exist")
    {
      Swal.fire(
          'Oops',
          '"' + data.lessonTitle + '"' + ' <br>already exist',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Success',
        data.lesson + ' <br>Successfully added',
        'success'
      )
        $('#addLessonFrm')[0].reset();
        refreshDiv();
    }
   
  },'json')
  return false;
});
// Add Lesson 
$(document).on("submit","#addLessonFrmCourse" , function(){
  $.post("query/addLessonExe.php", $(this).serialize() , function(data){
    if(data.res == "exist")
    {
      Swal.fire(
          'Oops',
          '"' + data.lessonTitle + '"' + ' <br>already exist',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Success',
        data.lesson + ' <br>Successfully added',
        'success'
      )
        $('#addLessonFrmCourse')[0].reset();
        location.reload();
    }
   
  },'json')
  return false;
});


// Update Lesson 
$(document).on("submit","#updateLessonFrm" , function(){
  $.post("query/updateLessons.php", $(this).serialize() , function(data){
    if(data.res == "success")
    {
      Swal.fire(
          'Update Successfully',
          data.msg + ' <br>successfully updated',
          'success'
       )
          refreshDiv();
    }
    else if(data.res == "failed")
    {
      Swal.fire(
        "Something's went wrong!",
         'Somethings went wrong',
        'error'
      )
    }
   
  },'json')
  return false;
});
  

// Add Topic 
$(document).on("submit","#addTopicFrm" , function(e){
        e.preventDefault();
        $.ajax({
        url: "query/addTopicExe.php",
           type:"POST",
           data:new FormData(this),
           contentType: false,
                 cache: false,
           processData:false,
           dataType:"JSON",
        beforeSend : function()
        {


        },
        success: function(data)
           {
              if(data.res == "exist")
              {
                Swal.fire(
                    'Already Exist',
                    data.msg + ' topic <br>already exist',
                    'error'
                 )
              }
              if(data.res == "success")
              {
                Swal.fire(
                  'Success',
                   data.msg + ' topic <br>Successfully added',
                  'success'
                )
                  $('#addTopicFrm')[0].reset(); 
                  refreshDiv();
              }

           },
          error: function(e) 
           {
           }          
        });
/*  $.post("query/addTopicExe.php",$(this).serialize, function(data){
    if(data.res == "exist")
    {
      Swal.fire(
          'Already Exist',
          data.msg + ' topic <br>already exist',
          'error'
       )
    }
    if(data.res == "success")
    {
      Swal.fire(
        'Success',
         data.msg + ' topic <br>Successfully added',
        'success'
      )
        $('#addTopicFrm')[0].reset(); 
        refreshDiv();
    }
    .fail(function(xhr,status,error){
        alert(xhr);
        alert(status);
        alert(error);
    });
   
  },'json')
  return false;*/
});

// edit Topic 
$(document).on("submit","#editTopicFrm" , function(e){
        e.preventDefault();
        $.ajax({
        url: "query/editTopicExe.php",
           type:"POST",
           data:new FormData(this),
           contentType: false,
                 cache: false,
           processData:false,
           dataType:"JSON",
        beforeSend : function()
        {


        },
        success: function(data)
           {
              if(data.res == "success")
              {
                Swal.fire(
                  'Success',
                   data.msg + ' topic <br>Successfully updated',
                  'success'
                )
                refreshDiv();
                modalForEditTopic(data.actID);
              }   
              if(data.res == "exist")
              {
                Swal.fire(
                    'Already Exist',
                    data.msg + ' topic <br>already exist',
                    'error'
                 )
              }

           },
          error: function(e) 
           {
            alert(e);
           }          
        });
});
// Add Student
$(document).on("submit","#addExamineeFrm" , function(){
  $
  $.post("query/addExamineeExe.php", $(this).serialize() , function(data){
    if(data.res == "noGender")
    {
      Swal.fire(
          'No Gender',
          'Please select gender',
          'error'
       )
    }
    else if(data.res == "noCourse")
    {
      Swal.fire(
          'No Course',
          'Please select course',
          'error'
       )
    }
    else if(data.res == "noLevel")
    {
      Swal.fire(
          'No Year Level',
          'Please select year level',
          'error'
       )
    }
     else if(data.res == "noStudnumber")
    {
      Swal.fire(
          'No Student Number',
          'Please Input Student Number',
          'error'
       )
    }
    else if(data.res == "studnumExist")
    {
      Swal.fire(
          'Student Number Already Exist',
          data.msg + ' already exist',
          'error'
       )
    }
    else if(data.res == "fullnameExist")
    {
      Swal.fire(
          'Fullname Already Exist',
          data.msg + ' are already exist',
          'error'
       )
    }
    else if(data.res == "emailExist")
    {
      Swal.fire(
          'Email Already Exist',
          data.msg + ' are already exist',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
          'Success',
          data.exFullname + ' ' + data.exMiddle + '. '+ data.exSurname + ' ' + '(' + data.exStudNum + ')' + ' <br>has been successfully added!',
          'success'
       )
        refreshDiv();
        $('#addExamineeFrm')[0].reset();
    }
    else if(data.res == "failed")
    {
      Swal.fire(
          "Something's Went Wrong",
          '',
          'error'
       )
    }


    
  },'json')
  return false;
});


// Update Student
$(document).on("submit","#updateExamineeFrm" , function(){
  $.post("query/updateExamineeExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            data.exFullname + ' ' + data.exMiddle + '. '+ data.exSurname + ' <br>has been successfully updated!',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});


function refreshDiv()
{
  $('#tableList').load(document.URL +  ' #tableList');
  $('#refreshData').load(document.URL +  ' #refreshData');

}



// Add Instructor
$(document).on("submit","#addInstructorFrm" , function(){
  console.log('hello');
  $.post("query/addInstructorExe.php", $(this).serialize() , function(data){
    // console.log(data);
    if(data.res == "noGender")
    {
      Swal.fire(
          'No Gender',
          'Please select gender',
          'error'
       )
    }
    else if(data.res == "fullnameExist")
    {
      Swal.fire(
          'Fullname Already Exist',
          data.msg + ' are already exist',
          'error'
       )
    }
    else if(data.res == "emailExist")
    {
      Swal.fire(
          'Email Already Exist',
          data.msg + ' are already exist',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
          'Success',
          data.msg + ' are now successfully added',
          'success'
       )
        refreshDiv();
        $('#addExamineeFrm')[0].reset();
    }
    else if(data.res == "failed")
    {
      Swal.fire(
          "Something's Went Wrong",
          '',
          'error'
       )
    }
    else{
      
    }

    
  },'json')
  return false;
});



// Update Instructor
$(document).on("submit","#updateInstructorFrm" , function(){
  // console.log('helo');
  $('button[type=submit]').prop('disabled','disabled');
  $.post("query/updateInstructor.php", $(this).serialize() , function(data){
    // console.log(data.res);
     if(data.res == "success")
     {
        // alert('hello');
        Swal.fire(
            'Success',
            data.tFullname + ' ' + data.tMiddle + '. ' + data.tSurname + '<br> successfully updated!',
            'success'
          )
          refreshDiv();
     }
     else{
        Swal.fire(
          "Something's Went Wrong",
          '',
          'error'
        )
        alert('hello');
     }
  },'json')
  $('button[type=submit]').prop('disabled',false);
  return false;
});


// Add Announcement
$(document).on("submit","#addAnnouncementFrm" , function(){
  $.post("query/addAnnouncement.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            'Announcement successfully Added!',
            'success'
          )
          refreshDiv();
     }
     else{
        Swal.fire(
          "Something's Went Wrong",
          '',
          'error'
        )
     }
  },'json')
  $('button[type=submit]').prop('disabled',false);
  return false;
});
// Add Announcement Course
$(document).on("submit","#addAnnouncementFrmCourse" , function(){
  $.post("query/addAnnouncement.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            'Announcement successfully Added!',
            'success'
          )
          refreshDiv();
          $("#addAnnouncementFrmCourse")[0].reset();
     }
     else{
        Swal.fire(
          "Something's Went Wrong",
          '',
          'error'
        )
     }
  },'json')
  $('button[type=submit]').prop('disabled',false);
  return false;
});
function refreshDiv()
{
  $('#tableList').load(document.URL +  ' #tableList');
  $('#refreshData').load(document.URL +  ' #refreshData');

}



// Update Announcemnt
$(document).on("submit","#updateAnnouncementFrm" , function(){
  $.post("query/updateAnnouncement.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            ' Announcement has been successfully updated!',
            'success'
          )
          refreshDiv();
     }
     else{
        Swal.fire(
          "Something's Went Wrong",
          '',
          'error'
        )
     }
  },'json')
  $('button[type=submit]').prop('disabled',false);
  return false;
});

function refreshDiv()
{
  $('#tableList').load(document.URL +  ' #tableList');
  $('#refreshData').load(document.URL +  ' #refreshData');

}

// Password
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});



// Scroll to top animation

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
  
  $('#myBtn').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });

// Show Password
// function myFunction() {
//   var x = document.getElementById("password");
//   if (x.type === "password") {
//     x.type = "text";
//   } else {
//     x.type = "password";
//   }
// }

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

 function getData(id){
    $.ajax({
     url: "query/getQuiz.php",
     type: "POST",
     data:  {quizid:id},
     dataType:"JSON",
     beforeSend : function()
     {},
     success: function(data)
        { 
          if (data.exam_type == 'fint') {

              $(".chooseQ").css("display","none");
              $("#updateExam_ch1").css("display","none");
              $("#updateExam_ch2").css("display","none");
              $("#updateExam_ch3").css("display","none");
              $("#updateExam_ch4").css("display","none");




          }else{

              $(".chooseQ").css("display","block");
              $("#updateExam_ch1").css("display","block");
              $("#updateExam_ch2").css("display","block");
              $("#updateExam_ch3").css("display","block");
              $("#updateExam_ch4").css("display","block");



          }

          $(".cname").val(data.exam_question);
          $("#UpdateQuestionId").val(data.eqt_id);
          $("#updateExam_ch1").val(data.exam_ch1);
          $("#updateExam_ch2").val(data.exam_ch2);
          $("#updateExam_ch3").val(data.exam_ch3);
          $("#updateExam_ch4").val(data.exam_ch4);
          $("#cAnswer").val(data.exam_answer);
          $("#questType").val(data.exam_type);
        },
       error: function(e) 
        {
        }          
     });

 }
 function getDataQuiz(id){
    $.ajax({
     url: "query/getQuiz2.php",
     type: "POST",
     data:  {quizid:id},
     dataType:"JSON",
     beforeSend : function()
     {},
     success: function(data)
        { 
          if (data.quiz_type == 'fint') {

              $(".chooseQ").css("display","none");
              $("#updateQuiz_ch1").css("display","none");
              $("#updateQuiz_ch2").css("display","none");
              $("#updateQuiz_ch3").css("display","none");
              $("#updateQuiz_ch4").css("display","none");


          }else{

              $(".chooseQ").css("display","block");
              $("#updateQuiz_ch1").css("display","block");
              $("#updateQuiz_ch2").css("display","block");
              $("#updateQuiz_ch3").css("display","block");
              $("#updateQuiz_ch4").css("display","block");



          }
          $("#QuizID").html("QuizID#"+data.qqt_id);
          $(".cname").val(data.quiz_question);
          $("#UpdateQuestionQuizId").val(data.qqt_id);
          $("#updateQuiz_ch1").val(data.quiz_ch1);
          $("#updateQuiz_ch2").val(data.quiz_ch2);
          $("#updateQuiz_ch3").val(data.quiz_ch3);
          $("#updateQuiz_ch4").val(data.quiz_ch4);
          $("#cAnswerQuiz").val(data.quiz_answer);
          $("#questTypeQuiz").val(data.quiz_type);
        },
       error: function(e) 
        {
        }          
     });

 }
$("#changePassword").on("submit",function(e){
          e.preventDefault();
          $.ajax({
           url: "query/changePasswordExe.php",
           type:"POST",
           data:new FormData(this),
           contentType: false,
                 cache: false,
           processData:false,
           dataType:"JSON",
           beforeSend: function() {
              var n = $("#newPassword").val();
              var cn = $("#confirmPassword").val();
              if (n == cn) {
                return true;
              }else{
                $("#WrongPass").removeClass("text-hide");
                $("#confirmPassword").css("border","1px solid red");
                $("#currentPassword").css("border","1px solid red");
                $("#newPassword").css("border","1px solid red");
                return false;
              }
           },
           success: function(data)
              {
                alert(data.res);
                $("#changePassword")[0].reset();

              },
             error: function(e) 
              {
                alert(e);
              }          
            });
 }); 
function modalForEditTopic(id){
     $.ajax({
     url: "query/getTopicExe.php",
     type: "POST",
     data:  {topid:id},
     dataType:"JSON",
     beforeSend : function()
     {},
     success: function(data)
        { 
          $("#edittopictitle").val(data.topic_title);
          $("#edittopicdesc").val(data.topic_desc);
          $("#toid").val(id);
          $("#editlesonid").val(data.lesson_id);
          if (data.files == '') {
            $("#currentFile").html("no files uploaded.");
            $("#removefiles").hide();
          }else{
            $("#removefiles").show();
            $("#currentFile").html(data.files);
          }
        },
       error: function(e) 
        {
        }          
     });
}
function removeFiles(){
    var id = $("#toid").val();
     $.ajax({
      type : "post",
      url : "query/deleteFileExe.php",
      dataType : "json",  
      data : {topicID:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Files Deleted',
            'success'
          )
          refreshDiv();
          modalForEditTopic(id);
          /*$('#editTopicFrm')[0].reset();*/
        }
        if (data.res == "failed") {
          Swal.fire(
            'Failed',
            'Files Already Deleted',
            'refresh na browser'
          )
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }
    });

}
function removeFilesActivity(id){
     $.ajax({
      type : "post",
      url : "query/deleteFileActivityExe.php",
      dataType : "json",  
      data : {actID:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Files Deleted',
            'success'
          )
          $("#removefiles").hide();
          $("#fileidentifier").html("no file uploaded.");
        }
        if (data.res == "failed") {
          Swal.fire(
            'Failed',
            'Files Already Deleted',
            'refresh na browser'
          )
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }
    });

}
function userprofileimg(){
  alert("test");
}
function viewTermpapers(id){
  window.location.href='home.php?page=viewtermpapers&id='+id;
}
function inputGrade(id){
    $('#inputGrade').on('show.bs.modal', function (e) {
      alert("test");
  });
    $("#termid").val(id);
}
