<!DOCTYPE html>
<html>
  <head>
    <title>
      School Dashboard
    </title>
    <style>
      a {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        padding: 15px 15px;
      }
      a:link {
        color: red;
      }

      /* visited link */
      a:visited {
        color: green;
      }

      /* mouse over link */
      a:hover {
        color: hotpink;
      }

      /* selected link */
      a:active {
        color: blue;
      }
      h1 {
        font-family: Arial, Helvetica, sans-serif;
      }
      nav {
        font-family: Arial, Helvetica, sans-serif;
      }
    </style>
  </head>
  <body>
    <nav>
      Voluntr
      <a href="" id="home">Home</a>
      <a href="../PHP/roster.php" id="roster">Student Roster</a>
      <a href="../manageStaff.php" id="staff">Staff Access</a>
    </nav>
    <div>
      <!---Use javascript to get the name of the user, and add it to the welcome text-->
      <h1 id="welcome">Welcome,</h1>
      <h1>
        Recent Activity
      </h1>
      <div id="recentActivity">
        <!--Info about the students who served last-->
      </div>
    </div>
  </body>
</html>
