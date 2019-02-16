
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/RegisterStudent.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration</title>
</head>
<body>
    <div class="jumbotron">
        <div class="text-center">
            <h1>Student Registration</h1>
        </div>
    </div>

    <div class="text-center">
        <form action="" method="post">
                <div class="form-group">
                    <label for="fName">First Name:</label>
                    <br>
                    <input type="text" name = "fName" placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="lName">Last Name:</label>
                    <br>
                    <input type="text" name = "lName" placeholder="Last Name">
                </div>
                <div class="birth">
                    <label for="birthday">Birthday:</label>
                    <br>
                    <input type="number" name = "birth-month" min="1" max="12" placeholder="1">
                    <input type="number" name = "birth-day" id="bday" min="1" max="31" placeholder="1">
                    <input type="number" name = "birth-year" id="byear" min="1965" max = "2019" placeholder="1965">
                </div>
                <div class="form-group">
                    <label for="school-code">School Code:</label>
                    <br>
                    <input type="text" name="school-code" id="school-code" placeholder="School Code">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <br>
                    <input type="email" name = "email" placeholder="name@name.com">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <br>
                    <input type="password" name="password" id="pwd" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="conf-password">Confirm Password:</label>
                    <br>
                    <input type="password" name="conf-password" id="conf-pwd" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label for="zip-code">Zip Code</label>
                    <br>
                    <input type="text" name="zip-code" id="zip" placeholder="Zip Code">
                </div>
                <br>
                <input type="button" value="Sign Up">
            </form>
    </div>
</body>
</html>
