<?php
    
    require_once 'dbconfig.php';
    try {
    $pdo = new PDO(MYSQL_CONNECTION_STRING, 
    DB_USER, 
    DB_PWD); $pdo->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
        $sql = 
        $result = $pdo->query($sql);
        
        $pdo = null;
        
    }
        catch(PDOException $e){
            var_dump($e);
        }

?>
