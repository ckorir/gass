<?php
 include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Form</title>
        <link rel="stylesheet" href="css/styles.css" />
        <style>
            body{
                background: no-repeat  url('img/ps5.jpg') ;
                
            }
            
        </style>
    </head>

    <body data-barba="wrapper">
        <div class="load-container">
            <div class="loading-screen"></div>
        </div>

        <main data-barba="container" data-barba-namespace="about-section">
            <div class="header order">
             <form action="info.php" method="POST">
                 <h1 class="txt">Fill form to make your order</h1>
                Name *<br><input type="text" id="name" name="name" placeholder="Details required"><br> 
                Phone Number*<br><input type="number" id="number" name="phone" placeholder="Details required"><br>
                What would you like?<br><div class="product"><input type="radio" id="eddie" name= "prod" value="eddie"><label for="edible">Edible</label><input type="radio" id="blunt" name= "prod" value="blunt"><label for="blunt">Blunt</label></div>
                How many*<br><input type="number" id="amount" name="amount" placeholder="Blunt ksh50/ Edible ksh100"><br>
                Pick a location near you:<br>
                <select id="place" name="place">
                    <option value="none">None</option>
                    <option value="Galleria">Galleria mall</option>
                    <option value="Cleanshelf Langata">Cleanshelf Langata</option>
                    <option value="T-mall">T-mall</option>
                    <option value="Langata Hospital">Langata Hospital</option>
                  </select><br>
                <input type="submit" value="Confirm" class="btn" onclick="confirm()" name="submit">
             </form>
                <div class="animate-this button2 ">
                    <a href="index.php">Go Back to Home</a>
                </div>
            </div>
        </main>
    
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://unpkg.com/@barba/core"></script>
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"
        ></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery-3.4.1.js"></script>
    </body>
</html>



