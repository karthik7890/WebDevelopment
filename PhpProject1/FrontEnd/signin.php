<?php
    
    if(isset($_POST['submit']))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        
    }

    $host = "localhost";
    $username = "root";
    $password = "Karthik_789";
    $dbname = "login_db";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO user ( fullname, email, password) VALUES ('$name','$email','$pwd')";
    
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Your Data has been Recorder Successfully :) ";
        echo " <br><a href='index.php'> Click to Sigin page</a> ";
    }
   
    mysqli_close($con);

?>
