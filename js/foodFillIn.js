/*
Function: foodFillIn
Send a request to query the database for the food eaten on a given date, then
fill in the food list
*/
function foodFillIn(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var numChildren = document.getElementById("displayDiv").children.length;
      for (var child = numChildren - 1; child >= 0; child--) {
        document.getElementById("displayDiv").removeChild(document.getElementById("displayDiv").children[child]);
      }
      let resultArray = JSON.parse(this.responseText);
      for (var result in resultArray) {
        var elementToAppend = document.createElement("p");
        elementToAppend.innerText = resultArray[result].food;
        document.getElementById("displayDiv").appendChild(elementToAppend);
      }
    }
  };
  xhttp.open("POST", "../php/retrieve_information.php", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send("date=" + document.getElementById("dateToFind").value);
}
