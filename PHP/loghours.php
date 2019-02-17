<!DOCTYPE html>
<html>
  <head>
    <title>Log Hours</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
      .card-heading{
        
      }
      .card-heading h1{
        color: white;
      }
      input {
        padding: 5px;
      }
      button {
        margin-top: 5px;
        margin-bottom: 5px;
      }
    </style>
  </head>
  <body>
    <div class = "container text-center">
      <div class="card">
        <div class="card-heading">
        <h1>Location</h1>
        <div class="card-body">
          <form action="../PHP/logComplete.php" method="POST">
              <h2>From</h2>
              <input type="datetime-local" name="startTime" />
              <h2>To</h2>
              <input type="datetime-local" name="endTime" />
              <div id="verificationDiv">
                <h2>Verification Code:</h2>
                <input type="text" id="verificationCode" />
              </div>
              <input type="submit" id="submitHours">
          </form>
        </div>
        </div>
      </div>
    </div>
  </body>
</html>
