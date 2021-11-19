<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "churchill");

    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM event1";
    $query = mysqli_query($conn, $sql);


 if(isset($_REQUEST['update'])){
       
        $event = $_REQUEST['event'];
        $venue = $_REQUEST['venue'];
        $city = $_REQUEST['city'];
        $vip = $_REQUEST['vip'];
        $regular = $_REQUEST['regular'];
        $date = $_REQUEST['date'];
        $seats = $_REQUEST['seat'];

        $sql = "UPDATE `event1` SET `event`= '$event',`venue`='   $venue',`city`='$city',`vip`=' $vip ',`regular`='  $regular',`Date`='$date',`seats`=' $seats' WHERE ID=1";
        mysqli_query($conn, $sql);

        header("Location: admin.php");
        exit();
    
}


?>