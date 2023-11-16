<?php
  include "logic_course.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="text-one">Get access from anywhere</div>
        </div>
        <div class="phone details">
          <i class="fas fa-certificate"></i>
          <div class="text-one">Get Certified</div>
        </div>
        <div class="email details">
          <i class="fas fa-comment"></i>
          <div class="text-one">Communicate with others</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Add the Course Details</div>
      <form action="#">
        <div class="input-box">
        <input type="text" name="course_title" placeholder="Course Title" required=""><br>
        </div>
        <div class="input-box">
        <input type="text" name="type_course" placeholder="Technical or Non-technical Course" required=""><br>
        </div>
        <div class="input-box">
        <input type="text" name="fee_course" placeholder="Free or paid Course" required=""><br>
        </div>
        <div class="input-box">
        <input type="varchar" name="course_content" placeholder="What students will learned (In one sentence)" required=""><br>
        </div>
        <div class="input-box">
        <input type="text" name="name_course" placeholder="Name of the Company who will provide the course" required=""><br>
        </div>
        <div class="input-box">
        <input type="url" name="link_course" placeholder="Link of the Course" required=""><br>
        </div>
        <div>
        <button name="new_course" class="button" style='color: black; font-size: 18px; outline: none; border: none;padding: 8px 16px;border-radius: 6px;background: #bdcd2b;cursor: pointer;transition: all 0.3s ease;'><b>Add Course</b></button>
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
