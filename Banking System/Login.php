<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="mt-5 text-center">Login Form</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Employee Email</label>
                        <input type="text" name="Emp_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="Emp_password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>



    <?php
    if (isset($_POST['submit'])) {
        include 'Config.php';
        $Emp_email = $_POST['Emp_email'];
        $Emp_password = $_POST['Emp_password'];

        $sql = "select * from  employee_reg  where Emp_email = '" . $Emp_email . "' and Emp_password = '" . $Emp_password . "';";

        $result  = $connect->query($sql);
        if ($result) {
            $row = $result->fetch_assoc();

            if ($row['id'] != null) {
                // saveUseSessionData($row['id']);
                header('location: View.php');
            }
        } else {
            echo "<script> alert ('This user does not Exist')</script>";
        }
    }

    ?>
</body>

</html>