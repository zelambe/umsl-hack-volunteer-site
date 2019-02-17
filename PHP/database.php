<?php
            //update to match correct user and database name
            $mysqli = new mysqli('localhost', 'root', '12345', 'voluntr');
            
            $_SESSION["mysqli"] = $mysqli;
            
            if($mysqli->connect_errno) {
                printf("Connection Failed: %s\n", $mysqli->connect_error);
                exit;
            }
        ?>
