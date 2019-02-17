<!DOCTYPE html>
<html>
  <head>
    <title>
      Student Roster
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <style>
      h2,
      h3 {
        font-family: Arial, Helvetica, sans-serif;
      }
      form {
        font-family: Arial, Helvetica, sans-serif;
      }
      select {
        padding: 15px 15px;
      }
      form[type="text"] {
        padding: 15px 15px;
        font-family: Arial, Helvetica, sans-serif;
      }
      #searchDiv {
        margin-top: 15px;
        margin-bottom: 15px;
      }
      table{
        text-align: center;
      }
      table td{
        border: solid black 2px;
        padding: 15px;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron">
      <div class="text-center">
        <h1>Student Roster</h1>
      </div>
    </div>
    <div class="container text-center">
    
    <form id="backToHome" action="../PHP/schoolDashboard.php">
      <input type="submit" value="Back To Dashboard" />
    </form>
    <div id="addStudentDiv">
      <h3>Add Student:</h3>
      <form id="newStudentForm" method="POST">
        First Name:
        <input type="text" id="newFirstName" /> <br />

        Last Name:
        <input type="text" id="newLastName" /> <br />

        Select school year:
        <select id="newStudentYear">
          <option selected="selected">All Years</option>
          <option value="Freshman">Freshman</option>
          <option value="Sophomore">Sophomore</option>
          <option value="Junior">Junior</option>
          <option value="Senior">Senior</option>
        </select>
        <br />

        Hours Completed: <input type="number" id="newCompletedHours" /> <br />

        Goal Hours: <input type="number" id="newGoalHours" /><br />
        <input type="submit" id="submitNewStudent" />
      </form>
    </div>

    <div id="searchDiv" name="searchDiv">
      Search by Name:<input type="text" id="query" />
      Filters: School year:
      <select id="schoolYearDropdown">
        <option selected="selected">All Years</option>
        <option value="Freshman">Freshman</option>
        <option value="Sophomore">Sophomore</option>
        <option value="Junior">Junior</option>
        <option value="Senior">Senior</option>
      </select>

      Sort results by:
      <select id="sortDropdown">
        <option selected="selected">None</option>
        <option value="CompletedHours">Completed Hours</option>
        <option value="RemainingHours">Remaining Hours</option>
      </select>
    </div>

    <div id="results">
      <!--This is going to have all of the students -->
      <!---Not sure how this is going to be implemented yet lol-->
    </div>
    <table>
        <th>First Name</th><th>Last Name</th><th>Academic Year</th><th>Student ID</th><th>Hours</th><th>Send Alert</th><th>
        <tr><td>SAM</td><td>JOHNSON</td><td>SENIOR</td><td>362532</td><td>2</td><td><input type="checkbox"></td></tr>
        <tr><td>MILEY</td><td>RUTH</td><td>SENIOR</td><td>362532</td><td>22</td><td><input type="checkbox"></td></tr>
        <tr><td>BAILEY</td><td>JOHNSON</td><td>SENIOR</td><td>362532</td><td>2</td><td><input type="checkbox"></td></tr>
        <tr><td>BEN</td><td>DANE</td><td>SENIOR</td><td>343322</td><td>21</td><td><input type="checkbox"></td></tr>
        <tr><td>KIM</td><td>DEAN</td><td>JUNIOR</td><td>362532</td><td>12</td><td><input type="checkbox"></td></tr>
        <tr><td>NICK</td><td>WHEELER</td><td>JUNIOR</td><td>362532</td><td>56</td><td><input type="checkbox"></td></tr>
      </table>

    </div>
  </body>
</html>
