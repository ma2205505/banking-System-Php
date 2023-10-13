<?php
    include 'Navbar.php';
    include "Config.php";
      $sql = "select * from customers";
      $result= $connect->query($sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>                                           
<body>

<div class="container">
<form action="" method="POST">
     <div class="form-row">
     <div class="col-md-4 mb-3">
       <label for="validationDefault01">Name</label>
       <input type="text" name="user_name" class="form-control"  id="user_name" placeholder="Enter_Name" required>
      </div>
      <div class="col-md-4 mb-3">
       <label for="validationDefault01">CNIC</label>
       <input type="text" name="user_cnic" class="form-control"  id="user_cnic" placeholder="Enter_CNIC" required>
      </div>
      <div class="col-md-4 mb-3">
       <label for="validationDefault01">Deposite</label>
       <input type="text" name="deposited" class="form-control"  id="deposite_amount" placeholder="Enter_deposite" required>
      </div>
      <div class="col-md-4 mb-3">
       <label for="validationDefault01">Amount</label>
       <input type="text" name="amount" class="form-control"  id="deposite_amount" placeholder="Enter_amount" required>
      </div>

      <div class="col-md-4 mb-3">
       <label for="validationDefault01">Status</label>
       <input type="text" name="status" class="form-control"  id="status" placeholder="Enter_Status" required>
      </div>
     </div>
     <button class="btn btn-primary" id="submit" name="submit" type="submit">Form Submit</button>
     </form>

     <?php

if(isset($_POST["submit"])){
    $response = formsubmit();
    $showMessage = null;
    if($response==1){
      $showMessage = "Data Successfully Saved";
    }
        }

  function formsubmit(){
    include  "config.php";
    $isSaved = FALSE;
    $user_name= $_POST["user_name"];
    $user_cnic = $_POST["user_cnic"];
    $deposite = $_POST["deposited"];
    $amount = $_POST["amount"];
    $status = $_POST["status"];                                                                                                                                                             

    $createformRegistration = "INSERT INTO `customers` (`Name`,`CNIC`,`Deposited`,`amount`,`status`) VALUES ('$user_name','$user_cnic','$deposite','$amount','$status')";
    $result= $connect->query($createformRegistration); 
    if($result){
     $isSaved = TRUE;
    }
    else{
    $isSaved = FALSE;
    }
    return $isSaved;
  }
?>


     <div class="row text-center"> <h2>Banking Details</h2></div>
            <div class="col-lg-8"><table class="table table-responsive table-hover">

<thead>
    <tr>
        <th >ID</th>
        <th>Name</th>
        <th>CNIC</th>
        <th>Deposited</th>
        <th>Amount</th>
        <th>Status</th>
    </tr>
</thead>

<tbody>
   
<?php
           if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td ><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['CNIC']; ?></td>
                    <td><?php echo $row['Deposited']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    
                </tr>  
   <?php         }
           }
 ?>

</tbody>           
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>