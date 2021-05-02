<!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
  <meta charset="utf-8">
	<meta name="viewport" content= "width=device-width, initial-scale=1,shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<form role="form" id="form-buscar"style="padding:50px;">
<div class="form-group">
<div class="input-group">
<a class="btn btn-primary"  href="index.php" role="button">Home</a>
<input id="1" class="form-control" type="text" name="search" placeholder="Search..." required/>
<span class="input-group-btn">
<button class="btn btn-primary" type="submit">
<i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
</button>
</span>
</div>
</div>
</form>
<table class="table">
<thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone no.</th>
      <th scope="col">Photo</th>
      <th scope="col">Degree</th>
    </tr>
  </thead>

<?php

include "config.php"; // Using database connection file here

$records = mysqli_query($link,"select * from student"); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><a href=""><?php echo $data['id']; ?></a></td>
    <td><?php echo $data['sname']; ?></td>
    <td><?php echo $data['semail']; ?></td>
    <td><?php echo $data['sphone']; ?></td>
    <td><img src="<?php echo $data['image']; ?>" width="100" height="100"></td>
    <td><?php echo $data['degree']; ?></td>
  </tr>	
<?php
}
?>

</table>
<?php mysqli_close($link);  // close connection ?>

</body>
</html>