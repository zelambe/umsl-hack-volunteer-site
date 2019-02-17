<!DOCTYPE html>
<html>
  <head>
    <title>Completed Log</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
    </style>
  </head>

  <body>
    <!---Can be used for error messages-->
    <div id="errorDiv"></div>
    <!--Success Screen-->
    <h1>Thanks for your service!</h1>
    <p>
      Hours Earned:
    </p>
    <p>
      Total Hours Completed:
    </p>
    <!--Dynamically updated by javascript
    Ex: You need 15 more hours to reach your goal of 30!-->
    <p id="hoursNeeded"></p>

    <button id="backToHome">Back to Home</button>
  </body>
</html>
