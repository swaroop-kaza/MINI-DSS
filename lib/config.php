<?php

        $servername = 'localhost';
        $username = 'root';
        $password = "KSwaroop@2";
        $dbname = "mini_dss";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }
?>
