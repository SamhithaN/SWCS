<?php
$conn = mysqli_connect('localhost','root','','swsc');
if(!$conn)
    {echo 'Fail connection to Database - '.mysqli_connect_error();}
if(isset($_POST['submit']))
{
    if(empty($_POST['vnumber']) || empty($_POST['capacity']))
        {echo 'Both fields are required <br />';}
    else
    {     
        echo htmlspecialchars($_POST['vnumber']);   
        echo htmlspecialchars($_POST['capacity']);
   
        $vnumber = $_POST['vnumber'];
        $capacity = $_POST['capacity'];
        $sql = "INSERT INTO truck(Vehicle_Number, Capacity) VALUES ('$vnumber',$capacity)";  

        if(mysqli_query($conn, $sql))
        {
            echo 'Successfully inserted'; 
            mysqli_close($conn);
        }
        else
        {
            echo 'Query error: '. mysqli_error($conn);
        }
    }
}

?>

<!DOCTYPE HTML>
<html>
<head><title>Truck Registration</title></head>

<body>
    <header>
        <h1>Truck Registration</h1>
        <font size="4"><b>Please enter your information for the following fields</b></font> 
    </header>
    
    <br><br>
    
    <form action="truck_reg.php" method="POST" >
        <label>Vehicle Number</label><br>
        <input type ="text" name="vnumber">
        <br><br>

        <label>Capacity (in kg) </label><br>
        <input type ="text" name="capacity">
        <br><br>

        <input type="submit" name="submit" value="Submit">      
    </form>
</body>
</html>
