<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "placement portal");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM job_data";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_job'])){
        $job_title = $_REQUEST['job_title'];
        $job_content = $_REQUEST['job_content'];
        $ctc_job = $_REQUEST['ctc_job'];
        $link_job = $_REQUEST['link_job'];
        $el_job = $_REQUEST['el_job'];
        $lc_job = $_REQUEST['lc_job'];
        $job_nm = $_REQUEST['job_nm'];
        $date_job = $_REQUEST['date_job'];

        $sql = "INSERT INTO job_data(job_title, job_content, ctc_job, link_job, el_job, lc_job, job_nm, date_job) VALUES('$job_title', '$job_content', '$ctc_job', '$link_job', '$el_job', '$lc_job', '$job_nm', '$date_job')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index_job.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['job_id'])){
        $job_id = $_REQUEST['job_id'];
        $sql = "SELECT * FROM job_data WHERE job_id = $job_id";
        $query = mysqli_query($conn, $sql);
    }

?>

