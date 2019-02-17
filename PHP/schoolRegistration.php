<!DOCTYPE html>
<html>
  <head>
    <h1>School Registration</h1>
    <style type="text/css">
      input[type="text"] {
        border: none;
        border-bottom: 2px solid black;
        width: 100%;
        padding: 15px 32px;
      }
      input[type="text"]:focus {
        background-color: rgb(183, 233, 250);
      }
      input[type="number"] {
        border: none;
        border-bottom: 2px solid black;
      }
      input[type="password"] {
        border: none;
        border-bottom: 2px solid black;
        width: 100%;
        padding: 15px 32px;
      }

      input[type="submit"] {
        background-color: white; /* Grey */
        border: 2px solid grey;
        color: black;
        padding: 15px 32px;
        margin: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
      }

      input[type="submit"]:hover {
        background-color: grey; /* Green */
        color: white;
      }
      form {
        font-family: Arial, sans-serif;
        padding: 15px 32px;
        font-size: 16px;
        font: bold;
      }
      p {
        margin-top: 10px;
      }
      button {
        background-color: white; /* Grey */
        border: 2px solid grey;
        color: black;
        padding: 15px 32px;
        margin: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
      }
      button:hover {
        background-color: grey; /* Green */
        color: white;
      }
    </style>
  </head>
  <body>
    <form id="registerStaff" action="../PHP/schoolDashboard.php" method="POST">
      <p>First Name:</p>
      <input type="text" id="firstName" />

      <p>Last Name:</p>
      <input type="text" id="lastName" />

      <p>Position:</p>
      <input type="text" id="Position" />

      <p>School Email:</p>
      <input type="text" id="userId" />

      <p>Password:</p>
      <input type="password" id="password" />

      <p>Verify Password:</p>
      <input type="password" id="verifyPassword" />

      <p>Goal for each student (hours):</p>
      <input type="number" />

      <p>School Name:</p>
      <input type="text" id="schoolName" />
      <!--Maybe do something responsive here, like once they look up the school code, the name of the
            school pops up in the schoolname placeholder-->
      <button id="findSchoolButton">Look Up School</button>
      <div id="schoolNamePlaceholder"></div>
    <div id="schoolNameDiv">
      <h2>Is this your school?</h2>
      <h2 id="schoolName"></h2>

        <button id="schoolFoundButton" >Yes, it is</button>
        <!---Dynamically prompt the user to try to search again by appending text to the errorDiv-->
        <button id="schoolNotFoundButton">No, it's not</button>
        <div id="errorDiv"></div>
    <input type="submit" value="Register"/>
    </form>
    </div>
  </body>
</html>
