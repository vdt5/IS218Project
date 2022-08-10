<?php

    if(isset($_POST["submit"])){

       #if you want to connect to remote server, the following settings should be on
$servername = "sql.njit.edu";// you need to put your assigned server name
$username = "co66";// your ucid
$password = "xQcdQn7d";// database password
$dbname = "initialDB"; // your ucid is your database name



        // Create connection

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection

        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);

        }



        $sql = "INSERT INTO accounts (fname, lname, email, password, college, major)

        VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."', '".$_POST["password"]."','".$_POST["college"]."','".$_POST["major"]."')";



        if ($conn->query($sql) === TRUE) {

            echo "New record created successfully";

        } else {

            echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";

        }

        

        $conn->close();
		 }

?>