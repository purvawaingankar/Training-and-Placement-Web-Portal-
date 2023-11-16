<?php
  include "logic_course.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-g"><meta http-equiv="x-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
     <link href="https://fonts.googleapis.com/css2?family-Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="flip.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Courses</title>
</head>
<body>

<div class="wrapper">
    <div class="content">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert" style='color:#fff;background:#f2f2f2;'>
                    <center><b>Course has been added successfully</b></center>
                </div>
            <?php }?>
        <?php } ?>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center p-3 my-3"> 
                    <div class="box" style='color: black;background: #f2f2f2; width: 25rem; height: 30rem'>
                        <div class="card_item"><br>
                            <center><h5 class="card-title"><?php echo $q['course_title'];?></h5><center>
                            <h6 class="card-subtitle mb-2 text-muted">By: <?php echo $q['name_course'];?></h6>
                            <p class="card-text"><?php echo $q['type_course']?></p>
                            <p class="card-text"><?php echo $q['fee_course']?></p>
                            <p class="card-text"><?php echo $q['course_content']?></p>
                            <a href = "<?php echo $q['link_course']?>" class = "card-link"> <button> Course Link </button> </a>
                            <span class="count"><?php echo $q['course_id']?></span>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
     </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
