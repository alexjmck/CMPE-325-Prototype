<!doctype html>
<html>


<head>

    <link rel="stylesheet" href="css/screen.css" media="screen">
</head>

<body>

    <form action="mood.php" method="POST">
        <input type="radio" name="mood" value="sad" class="col-6">
        <input type="radio" name="mood" value="happy" class="col-6">
        <input type="radio" name="mood" value="okay" class="col-6">
        <button type="submit">Submit</button>
    </form>

</body>

</html>

<?php 
$user = 'root';
$pass = '';
$db = 'moods';
$userMood = $_POST['mood'];

$conn = new mysqli('localhost',$user,$pass,$db) or die();
$dateID = date("Y-m-d");
echo($dateID);
echo"working";

if($conn -> connect_error){
    die("connection not working". $conn->connect_error);
}
$sql = "INSERT INTO usermoodsnew (dateID, mood)
        VALUES('$dateID', $userMood)";

if($conn->query($sql)===TRUE){
    echo"New record inserted";
}

else{
    
}

$conn->close();
?>