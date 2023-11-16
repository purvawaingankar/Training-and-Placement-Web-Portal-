<?php
  include "logic_notice.php"
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
          <i class="fas fa-bell"></i>
          <div class="text-one">Promote your upcoming event</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Add the Announcement Details</div>
      <form action="#">
        <div class="input-box">
        <input type="text" name="notice_title" placeholder="Title" required=""><br>
        </div>
        <div class="input-box">
        <input type="varchar" name="notice_content" placeholder="Content" required=""><br>
        </div>
        <div>
        <button name="new_notice" class="button" style='color: black; font-size: 18px; outline: none; border: none;padding: 8px 16px;border-radius: 6px;background: #bdcd2b;cursor: pointer;transition: all 0.3s ease;'><b>Add</b></button>
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
