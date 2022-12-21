<?php
    include 'dbconnect.php'; //connects to db
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Submitted</title>
    </head>
    <body>

        <!--takes the user inputs from the form -->
        <?php
        $a=$_POST['InvoiceNum'];
        $b=$_POST['Date'];
        $c=$_POST['CustomerName'];
        $d=$_POST['Email'];
        $e=$_POST['Phone'];
        $f=$_POST['Street'];
        $g=$_POST['Town'];
        $h=$_POST['Postcode'];
        $i=$_POST['Description'];
        $j=$_POST['Gross'];
        $k=$j * 0.2; //calculates VAT
        $l = $j + $k; //calculates Gross + VAT

        //insert query
        $query = "INSERT INTO `invoice` (InvoiceNum, Date, CustomerName, Email, Phone, Street, Town, Postcode, Description, Gross, VAT, Net)" . "VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l')";
    
        if ($conn->query($query) === TRUE) {
            $conn->close();
            header("Location: https://www.zethos.blog/invAdd.php"); //redirects to invAdd.php
            exit();

        } else {echo "Error: " . $query . "<br>" . $conn->error; //error message in case connection fails
        }
        $conn->close();
        ?>

    </body>
</html>