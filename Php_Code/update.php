<?php
    include 'dbconnect.php'; //connects to db
?>
<?php
    //update query
    $query = "UPDATE `invoice` SET InvoiceNum = '$_POST[InvoiceNum]', Date = '$_POST[Date]', CustomerName = '$_POST[CustomerName]', Email = '$_POST[Email]', Phone = '$_POST[Phone]', Street = '$_POST[Street]', Town = '$_POST[Town]', Postcode = '$_POST[Postcode]', Description = '$_POST[Description]', Gross = '$_POST[Gross]', VAT = '$_POST[VAT]', Net = '$_POST[Net]' WHERE InvoiceNum = '$_POST[InvoiceNum]'";

    //Run the query
    $result = mysqli_query($conn, $query);

    if(mysqli_query($conn, $query))
    {
        header("Location: https://www.zethos.blog/invUpdate.php"); //redirects to invUpdate.php
        exit();
    }
    else
    {
        echo "Not Updated";
    }
?>