<?php
include "Config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
       <div class="set1">
       <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <h1 class="mt-5 text-center">Registration Form</h1>
            <form action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Emp Name</label>
    <input type="text" name="Emp_name" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Emp CNIC</label>
    <input type="text" name="Emp_cnic" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Employee Email</label>
    <input type="text" name="Emp_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="Emp_password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Emp Designation</label>
    <input type="text" name="Emp_desig" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Emp Status</label>
    <input type="text" name="Emp_status" class="form-control" id="exampleInputPassword1">
  </div>
  <button onclick="movetohome()" type="submit" name="submit" class="btn btn-primary">Register</button>
</form>
            </div>
            <div class="col-md-3"></div>
        </div>
       </div>
    </div>



<?php
if(isset($_POST['submit'])) {
    include 'Config.php';
    $Emp_name = $_POST['Emp_name'];
    $Emp_cnic = $_POST['Emp_cnic'];
    $Emp_email = $_POST['Emp_email'];
    $Emp_password = $_POST['Emp_password'];
    $Emp_desig = $_POST['Emp_desig'];
    $Emp_status = $_POST['Emp_status'];

    $createUserQuery = "INSERT INTO `employee_reg` (`Emp_name`, `Emp_cnic`,`Emp_email`, `Emp_password`,`Emp_desig`, `Emp_status`) VALUES ('$Emp_name', '$Emp_cnic', '$Emp_email', '$Emp_password', '$Emp_desig', '$Emp_status')";
    $result = $connect->query($createUserQuery);
    if($result || $result==1){
      movetohome();
    }
  }
function movetohome() {
  header('location: home.php');
}
?>

</body>
</html>