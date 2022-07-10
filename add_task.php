<?php 
include "connect.php";
if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $visit=$_POST["visit"];
    $status=$_POST["status"];
    $task=$_POST["task"];
    $phone=$_POST["phone"];
    
    $query = "insert into `task` (name,visit,status,task,phone) values('$name','$visit','$status','$task',$phone)";
    $result = mysqli_query($conn,$query);
    if($result){
        echo 'data inserted';
    }else{
        die(mysqli_error($conn));
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <?php include "includes/header.php";?>

    <title>Add Task</title>
    <style>
    <?php include "css/Style.css"?>
    </style>
</head>

<body>
    <div class="info">
        <h1> Add Task </h1>
        <form method="POST">
            <div class="buttons">
                <a href="index.php">Home</a>
            </div>

            <div class="ab-info">
                <table>
                    <tr>
                        <th> Date </th> 
                        <th> Name </th>
                        <th> Visit Time </th>
                        <th> Status </th>
                        <th> Add Task </th>
                        <th> Add phone </th>
                    </tr>
                    <tr>
                        <td> <input type="text" name="date" placeholder="Date " require> </td>                      
                        <td> <input type="text" name="name" placeholder="Name " require> </td>
                        <td> <input type="text" name="visit" placeholder="Visit " require> </td>
                        <td> <input type="text" name="status" placeholder="Status " require> </td>
                        <td> <input type="text" name="task" placeholder="Add Task " require> </td>
                        <td> <input type="text" name="phone" placeholder="Phone no " require> </td>
                    </tr>
                </table>
            </div>
            <div class="buttons">
                <button type="submit" name="submit">Submit</button>
            </div>

    </div>
    </form>
    <div class="footer">
        <p> All Rights Reserved (C) 2022 Keerthana Website </p>
    </div>
    <?php include "includes/footer.php";?>
    </div>

</body>

</html>