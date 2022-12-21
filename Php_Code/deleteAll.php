<?php
    include 'dbconnect.php'; //connects to db
?>

<?php
    //delete all records query
    $query="DELETE FROM `invoice`";
    if(mysqli_query($conn, $query))
    {
        echo "Records were deleted successfully.";
        $conn->close();
        header("Location: https://www.zethos.blog/invDelete.php"); //redirects back to invDelete.php
        exit();        
    }
    else
    {
        echo "ERROR: Could not be able to execute $sql. " . mysqli_error($conn);
    }
?>