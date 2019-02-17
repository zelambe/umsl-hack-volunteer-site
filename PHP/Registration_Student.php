
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/Registration_Student.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration</title>
</head>
<body>
    <div class="jumbotron">
        <div class="text-center">
            
        </div>
    </div>

    <div class="container text-center">
        <div class = "card">
            <div class="card-heading">
                <h2>Student Registration</h2>
                <div class="card-body">
            <form action="../PHP/RegisterStudent.php" method="post">
                    <div class="form-group">
                        <br>
                        <label for="fName">First Name:</label>
                        <input type="text" class = "form-control" name = "fName" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="lName">Last Name:</label>
                        <br>
                        <input type="text" class = "form-control" name = "lName" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Birthday:</label>
                        <br>
                        <input type="number" name = "birth-month" min="1" max="12" placeholder="1">
                        <input type="number" name = "birth-day" id="bday" min="1" max="31" placeholder="1">
                        <input type="number" name = "birth-year" id="byear" min="1965" max = "2019" placeholder="1965">
                    </div>
                    <div class="form-group">
                        <label for="school-code">School Code:</label>
                        <br>
                        <input type="text" class = "form-control" name="school-code" id="school-code" placeholder="School Code">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <br>
                        <input type="email" class="form-control" name = "email" placeholder="name@name.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <br>
                        <input type="password" class = "form-control" name="password" id="pwd" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="conf-password">Confirm Password:</label>
                        <br>
                        <input type="password" class = "form-control" name="conf-password" id="conf-pwd" placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <label for="zip-code">Zip Code</label>
                        <br>
                        <input type="text" class = "form-control" name="zip-code" id="zip" placeholder="Zip Code">
                    </div>
                    <input type="submit" value="Sign Up">
                </form>
                </div>
        </div>
        </div>
    </div>
</body>
</html>
