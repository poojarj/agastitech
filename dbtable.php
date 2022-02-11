<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
table, th, td {
  border: 3px solid;
  border-collapse: collapse;
  border-color: #96D4D4;
}


</style>
</head>
<body>
<?php



// connection to the database
$servername ="localhost";
$username ="root";
$password ="";
$database ="poojadb";

$conn= mysqli_connect($servername,$username,$password,$database);
// remoe comment

$sql = "SELECT * FROM myinfo ";
$result = $conn->query($sql);


?>
<div class="container">
  <h2>Table of the Tourist</h2>
  
  
  <table class="table ">
    <thead>
      <tr class="success ">
        <th>Place</th>
        <th>City</th>
        <th>Text</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {?>
            <tr>
        <td> <?php echo "<br> ". $row["place"];?></td>
        <td> <?php echo "<br> ". $row["city"];?></td>
        <td> <?php echo "<br> ". $row["text"];?></td>
      </tr> 
            <?php
        } 
    } ?>
    
  
      
      <?php
      $conn->close();

      ?>
          </tbody>
  </table>
</div>

</body>
</html>

