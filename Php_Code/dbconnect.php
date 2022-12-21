<?php
    //login information for database
    $servername ="mysqlinvoiceform.zethos.blog";
    $username = "olivergilchrist2";
    $password = "S0larPower!";
    $dbname = "invoiceform";
    $conn = new mysqli($servername, $username, $password, $dbname); //sets up connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error); //error in case connection fails
    }
    //reads all from database query
    $query="SELECT * FROM `invoice`";
    $result=mysqli_query($conn, $query);
?>