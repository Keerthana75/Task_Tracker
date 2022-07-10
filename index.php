<?php include 'connect.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">    
<?php include "includes/header.php";?>
    <title>Task Tracker</title>
    <style>
        <?php include "css/Style.css"?>
    </style>
</head>
<body>
    <div class="info">
        <h1> Task Tracker </h1>
    </div>
    <div class="buttons">
        <a href="overview.php"> overview</a>
        <a href="pending_task.php">pending</a>
        <a href="add_task.php"> add task</a>
        <a href="add_customer.php"> add customer</a>
        <a href="customer.php"> customer</a>
    </div>
    
    <div class="mid">
        

    </div>
    <div class="info_1">
        <table>
            <thead>
            <tr>
                <th> Date </th>
                <th> Name </th>
                <th> Visit Time </th>
                <th> Status </th>
                <th> Customer </th>
                <th> Phone </th>
                <th> Email </th>
            </tr>
            </thead>
            <tbody>
            <?php 
            $query = "select * from `task`";
            $result = mysqli_query($conn,$query);
            if($result){
                   while($row=mysqli_fetch_assoc($result))
                   {
                    $date = $row['date'];
                    $name = $row['name'];
                    $visit = $row['visit'];
                    $status = $row['status'];
                    $customer = $row['customer'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                    $newDate = date("d-m-y",strtotime($date));
                    
                    
                    echo '<tr>
                    <td>'.$newDate.'</td>
                    <td>'.$name.'</td>
                    <td>'.$visit.'</td>
                    <td>'.$status.'</td>
                    <td>'.$customer.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$email.'</td>
                    </tr>';
                   } 
            }

            ?>
            </tbody>
        </table>
    </div>
    <div class="footer">
        <p> All Rights Reserved (C) 2022 Keerthana Website </p>
    </div>
    <?php include "includes/footer.php";?>
</body>
</html>