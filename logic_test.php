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
    $sql = "SELECT * FROM test_data";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_test'])){
        $test_title = $_REQUEST['test_title'];
        $test_subtitle = $_REQUEST['test_subtitle'];
        $test_content = $_REQUEST['test_content'];
        $link_test = $_REQUEST['link_test'];

        $sql = "INSERT INTO test_data(test_title, test_subtitle, test_content, link_test) VALUES('$test_title', '$test_subtitle', '$test_content', '$link_test')";
        mysqli_query($conn, $sql);

        echo $sql;

        header("Location: index_test.php?info=added");
        exit();
    }

    // Get post data based on id
    if(isset($_REQUEST['test_id'])){
        $test_id = $_REQUEST['test_id'];
        $sql = "SELECT * FROM test_data WHERE test_id = $test_id";
        $query = mysqli_query($conn, $sql);
    }

?>

