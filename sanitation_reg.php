<?php
$conn = mysqli_connect('localhost','root','','swsc');
if(!$conn)
    {echo 'Fail connection to Database - '.mysqli_connect_error();}
if(isset($_POST['submit']))
{
    if(empty($_POST['fullname']) || empty($_POST['contact']))
        {echo 'Both fields are required <br />';}
    else
    {     
        echo htmlspecialchars($_POST['fullname']);   
        echo htmlspecialchars($_POST['contact']);

        $id = rand (100,1000);    
        $contact = $_POST['contact'];
        $fullname = $_POST['fullname'];
        $sql = "INSERT INTO sanitation_worker(Worker_ID, Full_Name, Contact_Number) VALUES ($id,'$fullname','$contact')";  
        echo "Your Worker ID is $id"; 
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
<head><title>Worker Registration</title></head>

<body>
    <header>
        <h1>Worker Registration</h1>
        <font size="4"><b>Please enter your information for the following fields</b></font> 
    </header>
    
    <br><br>
    
    <form action="sanitation_reg.php" method="POST" >
        <label>Full Name</label><br>
        <input type ="text" name="fullname">
        <br><br>

        <label>Contact Number</label><br>
        <input type ="text" name="contact">
        <br><br>

        <input type="submit" name="submit" value="Submit">      
    </form>
</body>
</html>
