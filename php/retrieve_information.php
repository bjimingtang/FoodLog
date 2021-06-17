<?php
  try {
    session_start();
    require_once 'database.php';

    // store the user info in MySQL with a prepared statement
    $stmt = $mysqli->prepare("CALL fooddb.retrieveFood(?)");
    $stmt->bind_param("s", $_REQUEST["date"]);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    echo $result;
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
