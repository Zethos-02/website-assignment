<?php
    include 'dbconnect.php'; //connects to database
?>

<!-- Sets up CSS style -->
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Invoice Form Index</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <style>
                html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
                .w3-sidebar {
                z-index: 3;
                width: 250px;
                top: 43px;
                bottom: 0;
                height: inherit;
            }
            </style>
        </head>

        <body>

            <!-- Navbar -->
            <div class="w3-top">
                <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
                    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
                    <a href="index.php" class="w3-bar-item w3-button w3-theme-l1">Intro</a>
                    <a href="invAdd.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Create</a>
                    <a href="invDelete.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Delete</a>
                    <a href="invUpdate.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Update</a>
                    <a href="invRead.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Read</a>
                </div>
            </div>

            <!-- Sidebar -->
            <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
                <i class="fa fa-remove"></i>
            </a>
            <h4 class="w3-bar-item"><b>Menu</b></h4>
                <a class="w3-bar-item w3-button w3-hover-black" href="index.php">Intro</a>
                <a class="w3-bar-item w3-button w3-hover-black" href="invAdd.php">Create</a>
                <a class="w3-bar-item w3-button w3-hover-black" href="invDelete.php">Delete</a>
                <a class="w3-bar-item w3-button w3-hover-black" href="invUpdate.php">Update</a>
                <a class="w3-bar-item w3-button w3-hover-black" href="invRead.php">Read</a>
            </nav>

            <!-- Overlay effect when opening sidebar on small screens -->
            <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

                <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
                <div class="w3-main" style="margin-left:250px">

                    <div class="w3-row w3-padding-64">
                    <div class="w3-twothird w3-container">
                    <h1 class="w3-text-teal">Introduction</h1>
                    <p>This website is the prototype for the third part of my programming assignment. This describes a web based invoice system connected to a database, with CRUD statements being fully utilised. The links around the page should take you to these areas.</p>
                </div>
            </div>

            <footer id="myFooter">
                <div class="w3-container w3-theme-l2 w3-padding-32">
                    <h4>Oliver Gilchrist</h4>
                </div>

                <div class="w3-container w3-theme-l1">
                    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
                </div>
            </footer>

            <!-- END MAIN -->
            </div>

            <script>
                // Get the Sidebar
                var mySidebar = document.getElementById("mySidebar");

                // Get the DIV with overlay effect
                var overlayBg = document.getElementById("myOverlay");

                // Toggle between showing and hiding the sidebar, and add overlay effect
                function w3_open() {
                    if (mySidebar.style.display === 'block') {
                        mySidebar.style.display = 'none';
                        overlayBg.style.display = "none";
                    } else {
                        mySidebar.style.display = 'block';
                        overlayBg.style.display = "block";
                    }
                }

                // Close the sidebar with the close button
                function w3_close() {
                    mySidebar.style.display = "none";
                    overlayBg.style.display = "none";
                }
            </script>

        </body>
    </html>
