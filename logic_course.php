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
    $sql = "SELECT * FROM course_data";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_course'])){
        $course_title = $_REQUEST['course_title'];
        $name_course = $_REQUEST['name_course'];
        $type_course = $_REQUEST['type_course'];    
        $fee_course = $_REQUEST['fee_course'];
        $course_content = $_REQUEST['course_content'];
        $link_course = $_REQUEST['link_course'];

        $sql = "INSERT INTO course_data(course_title, name_course, type_course, fee_course, course_content, link_course) VALUES('$course_title', '$name_course', '$type_course', '$fee_course', '$course_content', '$link_course')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index_course.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['course_id'])){
        $course_id = $_REQUEST['course_id'];
        $sql = "SELECT * FROM course_data WHERE course_id = $course_id";
        $query = mysqli_query($conn, $sql);
    }

?>

