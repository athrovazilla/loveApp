<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    // connect to the database
    $dbc=mysqli_connect("localhost", "selby", "Selby@8707", "loveapp");

    // Query the database for use 

    $result = mysqli_query($dbc,"select * from login where username ='$username' and password = '$password'")
    or die("Failed to query database".mysqli_error());

    $row = mysqli_fetch_assoc($result);
    if ($row["username"] == $username && $row["password"] == $password && ("" !== $username || "" !== $password))  {
      echo " Welcome " . $row["username"];
    } else {
      echo "Failed to login!";
    }
    
?>