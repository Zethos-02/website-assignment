<?php
    include 'dbconnect.php'; //connects to db
?>

<?php
    //delete specific record query
    $query="DELETE FROM `invoice` WHERE InvoiceNum={$_POST['InvoiceNum']}";
    if(mysqli_query($conn, $query))
    {
        echo "Records were deleted successfully.";
        $conn->close();
        header("Location: https://www.zethos.blog/invDelete.php"); //redirects to invDelete.php
        exit();        
    }
    else
    {
        echo "ERROR: Could not be able to execute $sql. " . mysqli_error($conn); //error message in case connection fails
    }
?>