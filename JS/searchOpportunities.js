//Event listenter for the form submit
function onSearch(event) {
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open("POST", "../PHP/searchOpportunities.php", true);

  xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xmlHttp.addEventListener("load", ajaxCallback, false);
  var query = document.getElementById("searchText").value;

  xmlHttp.send(
    "username=" +
      username +
      "&password=" +
      password +
      "&verifypassword=" +
      verifypassword
  );
  document.getElementById("wel").innerHTML =
    "Welcome to your calendar " + username + "!";
  updateCalendar();

  function ajaxCallback(event) {
    event.target.response;
  }
}
