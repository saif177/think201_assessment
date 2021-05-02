<?php
$showAlert = false;
$showError = false;
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	include 'config.php';
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];	
	$degree = $_POST["degree"];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "uploads/".$filename;
	
    $conn = mysqli_connect('localhost', 
    'root', '', 'student');
		
			$sql = "INSERT INTO `student` ( `sname`,`semail`,
				`sphone`,`image`, `degree`) VALUES ('$name',
				'$email','$phone','$filename','$degree')";
	
			$result = mysqli_query($conn, $sql);
	
			if ($result) {
				$showAlert = true;
			}
		
		else {
			$showError = "could not enter data";
		}		
}
	
?>
	
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content= "width=device-width, initial-scale=1,shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php
	
	if($showAlert) {
		echo ' <div class="alert alert-success
			alert-dismissible fade show" role="alert">
			<strong>Success!</strong> student data has been insertded.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
			</button>
		</div> ';
	}
	
	if($showError) {
	
		echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
		<strong>Error!</strong> '. $showError.'
	
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close">
			<span aria-hidden="true">×</span>
	</button>
	</div> ';
}

?>
	
<div class="container my-4 ">
	
	<h1 class="text-center">Enter new record</h1>
	<form action="" method="post" enctype="multipart/form-data">
	
		<div class="form-group">
			<label for="name">name</label>
		<input type="text" class="form-control" name="name">	
		</div>
	
		<div class="form-group">
			<label for="email">email</label>
			<input type="mail" class="form-control" name="email" required>
		</div>
	
		<div class="form-group">
			<label for="cpassword">phone</label>
			<input type="number" class="form-control" name="phone">
		</div>	

        <div class="form-group">
			<label for="cpassword">photo</label>
			<input type="file" class="form-control" name="uploadfile">
		</div>

        <div class="form-group">
			<label for="cpassword">degree</label>
			<input type="text" class="form-control"
				id="cpassword" name="degree">
		</div>

		<button type="submit" class="btn btn-primary">
		insert
		</button>
        <a class="btn btn-primary" href="index.php" role="button">Home</a>
	</form>
</div>
	
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>	
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
</body>
</html>
