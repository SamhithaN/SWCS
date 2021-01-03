<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome to Waste Pickup History</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class = "bg" src="used-books-store-2.jpg" alt="">
    <div class="container"><button><h4><a href="index.html" >HOME</a></h4></button><center>
      <h1>Your Waste Pickup History</h1>
      <p>Following are the details of your previous Waste Pickup Requests:</p><br><br>
        <table border ="2" >
          <tr>
          <th>Request ID</th>
          <th>Request Date</th>
		  <th>Pickup Date</th>
		  <th>Pickup Address</th>
		  <th>Vehicle No.</th>
		  <th>Waste Type</th>
		  <th>Waste Category</th>
		  <th>Waste Weight</th>
		  <th>Waste Credit</th>
          <th>Status</th>
          
          
        </tr>

      <?php

	  include("config.php");
	  mysqli_select_db( $con,"swcs");
	  error_reporting(0);
	  session_start();
	  $logged_in_user=$_SESSION['login_user']['email'];
	  $query= "SELECT 
	  			`waste_pickup_request`.`Request_ID`,
				`waste_pickup_request`.`Request_Date`,
				`waste_pickup_request`.`Pickup_Date`,
				`waste_pickup_request`.`Vehicle_No`,
				`waste_pickup_request`.`Pickup_Address`,
				`waste_pickup_request`.`Pin_code`,
				`waste_pickup_request`.`Status`,
				`waste`.`Waste Type`,
				`waste`.`Waste_Category`,
				`waste`.`Waste_Weight`,
				`waste`.`Waste_Credit`
				from `waste_pickup_request` inner join `waste` 
				on `waste_pickup_request`.`Request_ID` = `waste`.`Request_ID` and `waste_pickup_request`.`user_email`='$logged_in_user' ";
	  
      $data= mysqli_query($con,$query);
	  $total=mysqli_num_rows($data);
	
      //echo $total;
      if($total!=0)
      {

        while($result=mysqli_fetch_assoc($data))
        {
			
          echo "
                <tr>
                <td>".$result['Request_ID']."</td>
				<td>".$result['Request_Date']."</td>
				<td>".$result['Pickup_Date']."</td>
				<td>".$result['Pickup_Address']."</td>
				<td>".$result['Vehicle_No']."</td>
				<td>".$result['Waste Type']."</td>
				<td>".$result['Waste_Category']."</td>
				<td>".$result['Waste_Weight']."</td>
				<td>".$result['Waste_Credit']."</td>
				<td>".$result['Status']."</td>
                
                    ";
        }
        //echo "table has records";
      }
      else
        {
          echo "no records found";
        }



        ?>
<a href="citizen_dashboard.php">Go Back!</a>
</center>
</div>
</body>
</html>