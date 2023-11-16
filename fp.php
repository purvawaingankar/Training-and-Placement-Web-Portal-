<?php
  
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
   <style>
    .container .content{
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .button {
      cursor: pointer;
      transition: all 0.3s ease;
      width: 200px;
      height: 50px;
    }

    .candidate-btn {
      margin-right: 10px;
    }

    .admin-btn {
      margin-left: 10px;
    }
   </style>
   
<body>
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-university"></i>
          <div class="text-one">College Placement Portal</div>
        </div>
        <div class="phone details">
          <i class="fas fa-user-graduate"></i>
          <div class="text-one">Graduate</div>
        </div>
        <div class="email details">
          <i class="fas fa-business-time"></i>
          <div class="text-one">Placement</div>
        </div>
      </div>
      <div class="right-side">
      <img src="NHITM_logo.png" alt=" NHITM " class="logo img-fluid"> <br>
        <div class="topic-text">Welcome to NHITM Placement Portal!</div>
        <button onclick="window.location.href='login_user.php'"  class="button" style='color: black; font-size: 18px; outline: none; border: none;padding: 8px 16px;border-radius: 6px;background: #bdcd2b;cursor: pointer;transition: all 0.3s ease;'><b>Candidate's Login</b></button><br><br>
        <button onclick="window.location.href='login_admin.php'"  class="button" style='color: black; font-size: 18px; outline: none; border: none;padding: 8px 16px;border-radius: 6px;background: #bdcd2b;cursor: pointer;transition: all 0.3s ease;'><b>Admin's Login</b></button><br><br>
    </div>
    </div>
  </div>
</body>
</html>
