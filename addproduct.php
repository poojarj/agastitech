<?php
 include 'include/dbconn.php';


$gadget=$_POST['gadget'];
$company=$_POST['company'];
$ngadget=$_POST['ngadget'];
$price=$_POST['price'];
$size=$_POST['size'];

$sql = "INSERT INTO addprductinfo (gadget,company,ngadget,price,size)
VALUES ('$gadget','$company','$ngadget',$price,$size)";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    echo'<script type="text/javascript">
alert("New record created successfully!");
window.location.href = "index.php";
</script>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
?>