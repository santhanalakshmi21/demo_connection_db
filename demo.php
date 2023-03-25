<?php
$fname= $_POST['fname'];
$lname= $_POST['lname'];               

$conn = new mysqli('localhost','root','','demo1');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}
else {
    $stmt = $conn->prepare("insert into info(fname,lname)
                           values(?,?)");
    $stmt->bind_param("ss",$fname,$lname);
    $stmt->execute();
    $stmt->close();
    $conn->close();
  
}

?>