<?php
  try {
    session_start();
    // don't let blank submissions in
    if ($_POST["food"] == "" || $_POST["date"] == "") {
      echo "<script>alert('Blank inputs!')</script>";
      header("Location:../index/index.php");
      exit();
    }
    // take the user inputs and store them in the database
    $food = $_POST["food"];
    $date = $_POST["date"];

    // store the user info in MySQL with a prepared statement
    $stmt = $mysqli->prepare("CALL foodDB.insertFood(?,?)");
    $stmt->bind_param("ss", $food, $date);
    $stmt->execute();
    $result = $stmt->fetch();
    header("Location:../index/index.php");
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
