<?php
    
    require_once 'dbconfig.php';
    $firstName  = $_POST["fName"];
    $lastName   = $_POST["lName"];
    $birthDay   = $_POST["birth-day"];
    $birthMonth = $_POST["birth-month"];
    $birthYear  = $_POST["birth-year"];
    $schoolCode = $_POST["school-code"];
    $email      = $_POST["email"];
    $password   = $_POST["password"];
    $zipcode    = $_POST["zip-code"];
    try {
    $pdo = new PDO(MYSQL_CONNECTION_STRING, DB_USER, DB_PWD); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO UserRegistration (FirstName, LastName, Birthday, BirthMonth, BirthYear, SchoolCode, Email, Password, ZipCode) 
        VALUES ('$firstName', '$lastName', '$birthDay','$birthMonth','$birthYear', '$schoolCode','$email', '$password', '$zipcode')";
        $result = $pdo->query($sql);
        
        $pdo = null;
        
    }
        catch(PDOException $e){
            var_dump($e);
        }

?>
