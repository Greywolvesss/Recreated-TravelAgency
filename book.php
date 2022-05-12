<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDG Portfolio</title>

    <!-- FONT STYLES -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- SWIPER JS LINK -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <!-- CSS File -->
    <link rel="stylesheet" href="style.css">

</head>



<body>

    <!-- header section starts -->

    <section class="header">

        <a href="home.php" class="logo">JDG <span>Travels.</span></a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
            <a href="#" class="login-btn"><img src="images/icons8-login-60.png" alt=""></a>
            <a href="#" class="account-btn"><img src="images/icons8-account-50.png" alt=""></a>
        </nav>
        
        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header section ends -->


    <div class="heading" style="background: url(./images/header-bg-1.png) no-repeat;">
        <h1>Book now</h1>
    </div>
   


    <!-- BOOKING SECTION STARTS -->
    <section class="booking">
        
        <div class="heading-title">book your trip now!</div>

        <form action="" method="post" class="book-form">

            <div class="flex">

                <div class="inputBox">
                    <span>name: </span>
                    <input type="text" placeholder="enter your name..." name="name" id="">
                </div>
                <div class="inputBox">
                    <span>Email: </span>
                    <input type="email" placeholder="enter your email..." name="email" id="">
                </div>
                <div class="inputBox">
                    <span>address: </span>
                    <input type="address" placeholder="enter your address..." name="address" id="">
                </div>
                <div class="inputBox">
                    <span>where to: </span>
                    <input type="text" placeholder="place you want to visit..." name="location" id="">
                </div>
                <div class="inputBox">
                    <span>Guests: </span>
                    <input type="Number" placeholder="Number of guests..." name="guest" id="">
                </div>
                <div class="inputBox">
                    <span>Promo Code (Optional): </span>
                    <input type="text" placeholder="Enter promo code..." name="promo" id="">
                </div>
                <div class="inputBox">
                    <span>Depart: </span>
                    <input type="date" placeholder="Departure date" name="departure_date" id="" class="dates">
                </div>
                <div class="inputBox">
                    <span>Return: </span>
                    <input type="date" placeholder="Return date" name="return_date" id="" class="dates">
                </div>
                
            </div>

                <input type="submit" value="submit" class="btn" name="send">

        </form>
        <?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = null;
        $db = "booking";
    
        // Create connection
        $mysqli = new mysqli($servername, $username, $password, $db);
    
        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (isset($_POST['send'])){
            $book_name = $_POST['name'];
            $book_email = $_POST['email'];
            $book_address = $_POST['address'];
            $book_location = $_POST['location'];
            $book_guest = $_POST['guest'];
            $book_departure_date = $_POST['departure_date'];
            $book_return_date = $_POST['return_date'];
        
        
            $query = mysqli_query($mysqli, "INSERT INTO booking(name,email,address,location,guest_number,depart_date,return_date) VALUES('$book_name','$book_email','$book_address','$book_location','$book_guest','$book_departure_date','$book_return_date')");
            if ($query) {
                echo "<script type='text/javascript'>alert('Reservation Successful!')</script>";
                $_SESSION['success'] = "Your reservation has been submitted";
                $_SESSION['id'] = $db->insert_id;
                header('location: home.php');
                exit();
            }
            else{
                $_SESSION['error'] = "Sorry, check your inputs for errors";
            }
           
            
        }




        ?>

        
    </section>
    <!-- BOOKING SECTION ENDS -->


    <footer>

        <div class="box-container">

            <div class="row"> 

                <div class="footer-col">
                    <h3>quick links</h3>
                    <a href="#">Home</a>
                    <a href="#">about</a>
                    <a href="#">package</a>
                    <a href="#">book</a>
                </div>

                <div class="footer-col">
                    <h3>extra links</h3>
                    <a href="#">ask questions</a>
                    <a href="#">about us</a>
                    <a href="#">privacy policy</a>
                    <a href="#">terms of use</a>
                </div>

                <div class="footer-col">
                    <h3>contact info</h3>
                        <div class="contact-info">
                            <a href="#"><i class="fas fa-phone"></i>09277749213</a>
                            <a href="#"><i class="fas fa-envelope"></i>jdginquire@gmail.com</a>
                            <a href="#"><i class="fas fa-map"></i>Lot 4 Masinag, Antipolo City</a>
                         </div>
                </div>

                <div class="footer-col">
                    <h3>Follow us</h3>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div> 
                </div>

            </div>
            <!-- end div of ROW class-->

            <div class="credit">© 2022 Copyright <span>JDG Company | all rights reserved!</span></div>

        </div>
        <!-- end div of BOX-CONTAINER class-->


    </footer>






    <!-- SWIPER JS LINK -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- CUSTOM JS FILE LINK -->
    <script src="script.js"></script>

</body>
</html>