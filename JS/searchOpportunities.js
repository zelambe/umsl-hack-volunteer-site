//Event listenter for the form submit
function onSearch(event) {
  var xmlHttp = new XMLHttpRequest();
  xmlHttp.open("POST", "../PHP/searchOpportunities.php", true);

  xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xmlHttp.addEventListener("load", ajaxCallback, false);

  let query = document.getElementById("searchText").value;

  let animalWelfare = document.getElementById("animalWelfare").checked;
  let artsCulture = document.getElementById("artsCulture").checked;
  let children = document.getElementById("children").checked;
  let civilRights = document.getElementById("civilRights").checked;
  let disasterRelief = document.getElementById("disasterRelief").checked;
  let economicEmpowerment = document.getElementById("economicEmpowerment")
    .checked;
  let education = document.getElementById("education").checked;
  let health = document.getElementById("health").checked;
  let humanRights = document.getElementById("humanRights").checked;
  let politics = document.getElementById("politics").checked;
  let povertyAlleviation = document.getElementById("povertyAlleviation")
    .checked;
  let sAndT = document.getElementById("sAndT").checked;
  let socialServices = document.getElementById("socialServices").checked;

  let date = document.getElementById("date").value;

  console.log("query" + query);

  xmlHttp.send("query=" + query);

  function ajaxCallback(event) {
    console.log(event.target.respsonse);
    //let jsonData = event.target.response;
  }
}
