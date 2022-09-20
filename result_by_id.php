<?php
    $id = $_POST['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border>
        <tr>
            <th>Name</th>
            <th>APPT Date</th>
            <th>From</th>
            <th>To</th>
            <th>Status</th>
        </tr>

        <?php
            require_once('dbconfig.php');
            $connect = mysqli_connect("localhost", "root", "", "bus_ticket_management")
                or die("Error connecting Database");

                $query = "SELECT * FROM `ticket_booking` WHERE id = '$id'";

                $results = mysqli_query( $connect, $query )
                or die("Can not execute query");
                while($rows = mysqli_fetch_array( $results )){
                    extract($rows);
                    ?>
                    <tr>
                        <td><?php echo $name ?></td>
                        <td><?php echo $appt_date  ?></td>
                        <td><?php echo $from_location ?></td>
                        <td><?php echo $to_location  ?></td>
                        <td><?php echo $status?></td>
                        
                    </tr>
                    <?php
                }
        ?>
    </table>

    <a href="index.php">Back</a>
</body>
</html>