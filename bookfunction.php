<?php
session_start();
include('dbcon.php');


if (isset($_POST['send'])){
    $book_name = mysqli_real_escape_string($db, $_POST['name']);
    $book_email = mysqli_real_escape_string($db, $_POST['email']);
    $book_address = mysqli_real_escape_string($db, $_POST['address']);
    $book_location = mysqli_real_escape_string($db, $_POST['location']);
    $book_guest = mysqli_real_escape_string($db, $_POST['guest']);
    $book_departure_date = mysqli_real_escape_string($db, $_POST['departure_date']);
    $book_return_date = mysqli_real_escape_string($db, $_POST['return_date']);


    $query = mysqli_query($db, "INSERT INTO booking(name,email,address,location,guest_number,depart_date,return_date) VALUES('$book_name','$book_email','$book_address','$book_location','$book_guest','$book_departure_date','$book_return_date')");
    if ($query) {
        $_SESSION['success'] = "Your reservation has been submitted";
        $_SESSION['id'] = $db->insert_id;
        echo 'Reservation Successful';
        header('location: home.php');
        exit();
    }
    else{
        $_SESSION['error'] = "Sorry, check your inputs for errors";
    }
}
?>