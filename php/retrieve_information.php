<?php
  try {
    session_start();
    require_once 'database.php';

    // store the user info in MySQL with a prepared statement
    $stmt = $mysqli->prepare("CALL fooddb.retrieveFood(?)");
    $stmt->bind_param("s", $_REQUEST["date"]);
    $stmt->execute();
    $result = $stmt->get_result();
    $outputArray = [];
    $arrayIndex = 0;
    while($row = mysqli_fetch_assoc($result))
    {
      $outputArray[$arrayIndex] = $row;
      $arrayIndex++;
    }
    echo json_encode($outputArray);
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
