<?php
    require_once('dbconfig.php');
    $connect = mysqli_connect("localhost", "root", "", "bus_ticket_management")
        or die("Error connecting Database");
    $name = $_POST['name'];
    $appt_date = $_POST['date'];
    $from = $_POST['from'];
    $to = $_POST['to'];

    $query = "INSERT INTO `ticket_booking`(`name`, `appt_date`, `from_location`, `to_location`) 
    VALUES ('$name','$appt_date','$from','$to')";

    mysqli_query($connect, $query)
    or die("Can not execute query");

    header('Location: index.php');

?>