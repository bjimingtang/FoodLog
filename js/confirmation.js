/*
Function: confirmSubmission
Use an ajax call to submit the information in the current session
*/
function confirmSubmission(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == "success") {
        window.location.href = '../index/thankyou.php';
      } else {
        alert("Data insertion failed! Please try again.");
      }

    }
  };
  xhttp.open("POST", "../php/confirmSubmission.php", true);
  xhttp.send();
}

/*
Function: returnToStart
Use an ajax call to destroy the session and return to the start
*/
function returnToStart(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      window.location.href = '../index/cancel.php';
    }
  };
  xhttp.open("POST", "../php/returnToStart.php", true);
  xhttp.send();
}
