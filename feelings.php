<?php
$umood = $_POST['umood'];
if (!empty($umood)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "moods";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    $dateID = date("d");
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
      echo"connection made";
     $SELECT = "SELECT id From register Where id = ? Limit 1";
     $INSERT = "INSERT Into register (id ,umood) values($dateID, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $id);
     $stmt->execute();
     $stmt->bind_result($id);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("s", $umood);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Did not work";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
header('Location: index.html');

?>