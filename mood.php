<?php 
$user = 'root';
$pass = '';
$db = 'moods';

$conn = new mysqli('localhost',$user,$pass,$db) or die();
$dateID = date("d");
echo($dateID);
echo"working";

if($conn -> connect_error){
    die("connection not working". $conn->connect_error);
}
$sql = "INSERT INTO usermoodsnew (dateID, mood)
        VALUES('$dateID','Sad')";

if($conn->query($sql)===TRUE){
    echo"New record inserted";
}

else{
    echo"error" .sql. "<br>" . $conn-> error;
}

$conn->close();
?>