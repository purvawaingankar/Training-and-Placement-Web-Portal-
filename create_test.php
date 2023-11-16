<?php
  include "logic_test.php"
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
          <i class="fas fa-pen"></i>
          <div class="text-one">Test your Skills</div>
        </div>
        <div class="phone details">
          <i class="fas fa-certificate"></i>
          <div class="text-one">Get your results quickly</div>
        </div>
        <div class="email details">
          <i class="fas fa-check"></i>
          <div class="text-one">Correct if you ar wrong</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Add the Test Details</div>
      <form action="#">
        <div class="input-box">
        <input type="text" name="test_title" placeholder="Test Title" required=""><br>
        </div>
        <div class="input-box">
        <input type="varchar" name="test_subtitle" placeholder="Test subtitle" required=""><br>
        </div>
        <div class="input-box">
        <input type="text" name="test_content" placeholder="Description" required=""><br>
        </div>
        <div class="input-box">
        <input type="url" name="link_test" placeholder="Link of the Test" required=""><br>
        </div>
        <div>
        <button name="new_test" class="button" style='color: black; font-size: 18px; outline: none; border: none;padding: 8px 16px;border-radius: 6px;background: #bdcd2b;cursor: pointer;transition: all 0.3s ease;'><b>Add</b></button>
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
