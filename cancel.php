<?php
    $id = $_POST['id'];
    require_once('dbconfig.php');
    $connect = mysqli_connect("localhost", "root", "", "bus_ticket_management")
        or die("Error connecting Database");

    $query = "DELETE FROM `ticket_booking` WHERE `ticket_booking`.`id` = $id ";
    mysqli_query($connect, $query)
    or die("Can not execute query");


    header('Location: index.php');

?>