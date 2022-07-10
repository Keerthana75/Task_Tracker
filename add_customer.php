<?php 
include "connect.php";
if(isset($_POST['submit'])){
    $customer=$_POST["customer"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    
    $query = "insert into `task` (customer,email,phone) values('$customer','$email',$phone)";
    $result = mysqli_query($conn,$query);
    if($result){
        echo 'data inserted';
    }else{
        die(mysqli_eroor($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">    
<?php include "includes/header.php";?>
    <title>Add Customer</title>
    <style>
       <?php include "css/Style.css"?>
    </style>
</head>
<body>
    <form action=""method="POST">
    <div class="info">
        <h1> Add Customer </h1>
    <form>
    <div class="buttons">
        <a href="index.php">Home</a>
    </div>
    </form>
    <div class="info_1">
    <center>
        <table>
            <tr>
                <th > Customer </th>
                <th> Phone No </th>
                <th> Email </th>
            </tr>
            <tr>
                <td> <input type="text" name="customer"  placeholder="Add Customer" require> </td>
                <td> <input type="text" name="phone"  placeholder="Add Phone No" require> </td>
                <td> <input type="email" name="email"  placeholder="Add Email" require> </td>
            </tr>
        </table>
        <div class="buttons">
        <button type="submit" name="submit">Submit</button>
    </div>
    </center>
    </div>
    </form>
    <div class="footer">
        <p> All Rights Reserved (C) 2022 Keerthana Website </p>
    </div>
    <?php include "includes/footer.php";?>
</body>
</html>