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

    $t = time();
    $email = $_POST["email"];
    $waste_type = $_POST["waste_type"];
    $add1 = $_POST["add1"];
    $pincode = $_POST["pincode"];
    $category = $_POST["waste"];
    $weight = $_POST["weight"];
   
    $status = "In Process";
    $sql1 = "INSERT INTO `swcs`.`waste_pickup_request` (`Request_ID`,`Pickup_Address`, `Pickup_Date`, `Status`, `user_email`, `Pin_code`) VALUES ('$t','$add1', date_add(now(),interval 1 day), '$status', '$email', '$pincode');";
    $credit_sql = "SELECT `Credit/kg` FROM `swcs`.`green credits` WHERE `Category` = '$category' ";
    $result = mysqli_query($con, $credit_sql);
    $row =$result->fetch_assoc(); 
    $credits = intval($row['Credit/kg'])*$weight ;
  //  echo $credits . "<br>";
    $sql2 = "INSERT INTO `swcs`.`waste` (`Request_ID`, `Waste Type`, `Waste_Category`, `Waste_Weight`, `Waste_Credit`) VALUES ('$t', '$waste_type', '$category', '$weight', '$credits');";
    
   if($con->query($sql1)==true )
    {
         echo "Successfully inserted sql1 <br>";
    }
    if($con->query($sql2)==true )
    {
         echo "Successfully inserted sql2 <br>";
    }
    else{
        echo "Error $con->error";
    } 
}


?>
