<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<style type="text/css">  html,body { height: 200px; margin : 50px; } </style>
<title>landing page </title>
</head>
<body>

  <div class="text-center" >
            <button type="button" class="btn btn-primary" onclick="add()">Add New Student</button>
            <button type="button"  class="btn btn-primary" onclick="show()">Show List of Students</button>
  </div>

<script>
function add() {
  location.replace("add_student.php")
}
function show() {
  location.replace("list_student.php")
}
</script>

</body>
</html>