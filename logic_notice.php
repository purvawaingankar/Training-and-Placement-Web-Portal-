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
    $sql = "SELECT * FROM notice_data";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_notice'])){
        $notice_title = $_REQUEST['notice_title'];
        $notice_content = $_REQUEST['notice_content'];

        $sql = "INSERT INTO notice_data(notice_title, notice_content) VALUES('$notice_title', '$notice_content')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index_notice.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['notice_id'])){
        $notice_id = $_REQUEST['notice_id'];
        $sql = "SELECT * FROM notice_data WHERE notice_id = $notice_id";
        $query = mysqli_query($conn, $sql);
    }

?>

