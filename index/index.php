<?php
  session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Food Log</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/styles.css">
  </head>

  <body>
    <form action="../php/submit_information.php" method="post" class="infobox">
      <label for="food">Food eaten:</label><br>
      <input type="text" id="food" name="food" required><br>

      <label for="date">Date eaten:</label><br>
      <input type="date" id="date" name="date" required><br>

      <input type="submit" value="Add" />
    </form>

    <input type="date" id="dateToFind"></input>
    <button onclick="foodFillIn()">Display food from the chosen date</button>
    <div id="displayDiv"></div>

  </body>
  <script src="../js/foodFillIn.js"></script>
</html>
