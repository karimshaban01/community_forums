<?php
  $conn = new mysqli('localhost', 'karim', 'Karim@01', 'cfwa');
 /*  if($conn){
    echo 'connected';
  }   */

  if(isset($_POST['submit'])){
    $msg = $_POST['msg'];
  }
  $query = "INSERT INTO notify(`message`) VALUES('$msg')";
  $result = $conn->query($query);

  if($result) {
    echo 'inserted';
  }
?>