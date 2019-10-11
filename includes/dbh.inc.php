<?php
        $Servername = "localhost";
        $Username = "root";
        $Password = "";
        $DBname = "myDB";

        try {
            $conn = new PDO("mysql:host=$Servername;dbname=myDB", $Username, $Password);

            //set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // //SQL to create table
            // $sql = "CREATE TABLE users(
            //     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            //     firstname VARCHAR(255) NOT NULL,
            //     lastname VARCHAR(255) NOT NULL,
            //     email VARCHAR(100),
            //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            // )";
            
            // //use exec() because no results are returned
            // $conn->exec($sql);
            echo "Connection created successfully";
        } catch(PDOException $e) {
            echo "Failed to create connection: " . $e->getMessage();
        }
        //$conn = null;
    ?>
