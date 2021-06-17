/*
Function: foodFillIn
Send a request to query the database for the food eaten on a given date, then
fill in the food list
*/
function foodFillIn(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      for (var country in countryArray) {
        var option = document.createElement("p");
        option.value = countryArray[country];
        option.text = countryArray[country];
        countrySelect.add(option);
      }
    }
  };
  xhttp.open("POST", "../resources/countries.txt", true);
  xhttp.send();
}

// execute the above function on load
countryFillIn();
