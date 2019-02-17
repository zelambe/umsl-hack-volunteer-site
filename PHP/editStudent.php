<!DOCTYPE html>
<html>
  <head>
    <title>Edit Student</title>
    <style>
      h1,
      h2,
      h3 {
        font-family: Arial, Helvetica, sans-serif;
      }
      form {
        font-family: Arial, Helvetica, sans-serif;
      }
    </style>
  </head>
  <body>
    <h1>
      Edit Student
    </h1>

    <h2 id="name">
      Name:
    </h2>

    <!---This is going to be a pre-filled form based on values in database-->
    <form id="editStudent" action="./roster.html">
      Year: <input type="text" id="year" />

      Hours Completed: <input type="text" id="hoursCompleted" /> Hours
      Remaining: <input type="text" id="hoursRemaining " /> Goals:
      <input type="text" id="goal" />
      <input type="submit" value="Save Changes" />
    </form>
  </body>
</html>
