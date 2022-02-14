<?php 
 include 'include/dbconn.php';
 
$id =$_GET['id'];
// echo $id;
$sql = "DELETE FROM  addprductinfo WHERE id=$id";
$query =mysqli_query($con,$sql);
if ($con->query($sql) === TRUE) {
    echo'<script type="text/javascript">
    alert("record deleted successfully!");
    window.location.href = "store.php";
    </script>';
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();



?>