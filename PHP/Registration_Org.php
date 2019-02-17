
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Registration</title>
</head>
<body>
    <div class="jumbotron">
        <div class="text-center">
            <h1>Company Registration</h1>
        </div>
    </div>

    <div class="container text-center">
        <div class="card">
            <div class="text-left">
                <form action="">
                        <div class="form-group">
                            <label for="cName">Company Name</label>
                            <input type="text" name = "companyName" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <label for="company-code">Company Code</label>
                            <input type="text" name="companycode" id="ccode">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name = "email" placeholder="name@name.com">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="pwd" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="conf-password">Confirm Password:</label>
                            <input type="password" name="conf-password" id="conf-pwd" placeholder="Confirm Password">
                        </div>
                        
                        <br>
                        <input type="button" value="Sign Up">
                    </form>
            </div>
        </div>
    </div>
    
</body>
</html>
