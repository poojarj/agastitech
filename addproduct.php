<?php
 include 'include/dbconn.php';


$gadget=$_POST['gadget'];
$company=$_POST['company'];
$ngadget=$_POST['ngadget'];
$price=$_POST['price'];
$size=$_POST['size'];
$file=$_FILES['image'];
  //  print_r ($file);

$filename=$file['name'];
$filepath=$file['tmp_name'];
$error=$file['error'];


if($error==0){

$destfile='uplode/'.$filename;
//echo "$destfile";
move_uploaded_file($filepath,$destfile);

$sql = "INSERT INTO addprductinfo (gadget,company,ngadget,price,size,pic)
VALUES ('$gadget','$company','$ngadget','$price','$size','$destfile')";

$query =mysqli_query($con,$sql);

// echo $query;

    // echo "New record created successfully";
    echo'<script type="text/javascript">
alert("New record created successfully!");
window.location.href = "store.php";
</script>';
} else{
  echo "not uplode";
}


// $sql = "INSERT INTO addprductinfo (gadget,company,ngadget,price,size)
// VALUES ('$gadget','$company','$ngadget',$price,$size)";
// if ($conn->query($sql) === TRUE) {
//     // echo "New record created successfully";
//     echo'<script type="text/javascript">
// alert("New record created successfully!");
// window.location.href = "index.php";
// </script>';
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
   $con->close();
  
?>