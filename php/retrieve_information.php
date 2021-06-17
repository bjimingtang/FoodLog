<?php
  try {
    session_start();
    require_once 'database.php';

    // store the user info in MySQL with a prepared statement
    $stmt = $mysqli->prepare("CALL donationdb.findFoodByDate(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssssssds", $_SESSION["fname"], $_SESSION["lname"], $_SESSION["address"], $_SESSION["city"],
      $_SESSION["state"], $_SESSION["country"], $_SESSION["postcode"], $_SESSION["phone"],
      $_SESSION["email"], $_SESSION["contact"], $_SESSION["payment"], $_SESSION["frequency"],
      $_SESSION["amount"], $_SESSION["comments"]);
    $stmt->execute();
    $result = $stmt->fetch();
    // the row count will be "1" if the procedure was successful. Echo "success" to tell the JS to redirect to the thank you page.
    if ($result == "1") {
      // clear the user's variables now that they've been used.
      session_destroy();
      echo "success";
    } else {
      echo $result;
    }
  }
  catch(Exception $e) {
    echo 'Message: ' . $e->getMessage();
  }
?>
