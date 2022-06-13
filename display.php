<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Display Page</title>
</head>
<body>
  <center>
<table>
  <tr>
    <th>Full Name</th>
    <th>ID </th>
    <th>Address</th>
    <th>Image</th>
    <th>Action</th>
  </tr>
  <?php 
  $query = "SELECT * FROM `profiles` ORDER BY `id` DESC";
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_array($result)){
  ?>
  <tr>
    <td><?php echo $row['full_name']; ?></td>
    <td><?php echo $row['id_no']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><img src="upload/<?php echo $row['file']; ?>" width="50px"></td>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
 <?php } ?>
</table>
</center>
<a style="font-family: arial; text-decoration: none; font-size: 20px; color: green;" href="index.php">Home Page</a>
</body>
</html>
