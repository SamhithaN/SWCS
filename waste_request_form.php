<?php
if(isset($_POST['email']))
{

    $server = "localhost" ;
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    if(!$con)
    {
        die("Connection to Database failed due to".mysqli_connect_error());
    }


    $email = $_POST["email"];
    $waste_type = $_POST["waste_type"];
    $add1 = $_POST["add1"];
    $pincode = $_POST["pincode"];
    $category = $_POST["waste"];
    $weight = $_POST["weight"];
   
    $status = "In Process";
   $sql1 = "INSERT INTO `swcs`.`waste_pickup_request` (`Pickup_Address`, `Pickup_Date`, `Status`, `user_email`, `Pin_code`) VALUES ('$add1', current_timestamp()+1, '$status', '$email', '$pincode');";
    //echo $sql;
   if($con->query($sql1)==true)
    {
         echo "Successfully inserted";
    }
    else{
        echo "Error $con->error";
    } 
}


?>
