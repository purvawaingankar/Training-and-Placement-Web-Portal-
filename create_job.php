<?php
  include "logic_job.php"
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
          <i class="fas fa-industry"></i>
          <div class="text-one">Industries</div>
        </div>
        <div class="phone details">
          <i class="fas fa-laptop"></i>
          <div class="text-one">Remote Jobs</div>
        </div>
        <div class="email details">
          <i class="fas fa-handshake"></i>
          <div class="text-one">Communicate with others</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Add Job details</div>
      <form action="#">
        <div class="input-box">
        <input type="text" name="job_title" placeholder="Job Title" required=""><br>
        </div>
        <div class="input-box">
        <input type="text" name="job_nm" placeholder="Company Name" required=""><br>
        </div>
        <div class="input-box">
        <input type="varchar" name="job_content" placeholder="Required Skills" required=""><br>
        </div>
        <div class="input-box">
        <input type="text" name="ctc_job" placeholder="CTC" required=""><br>
        </div>
        <div class="input-box">
        <input type="text" name="lc_job" placeholder="Job Location" required=""><br>
        </div>
        <div class="input-box">
        <input type="text" name="el_job" placeholder="Eligibility Criteria" required=""><br>
        </div>
        <div class="input-box">
        <input type="text" name="date_job" placeholder="Last Date to apply" required=""><br>
        </div>
        <div class="input-box">
        <input type="url" name="link_job" placeholder="Link to apply" required=""><br>
        </div>
        <div>
        <button name="new_job" class="button" style='color: black; font-size: 18px; outline: none; border: none;padding: 8px 16px;border-radius: 6px;background: #bdcd2b  ;cursor: pointer;transition: all 0.3s ease;'><b>Add</b></button>
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
