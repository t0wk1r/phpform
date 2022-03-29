<?php

    // Turn off all error reporting
        error_reporting(0);
    $name = $_POST['fullname'];
    $email = $_POST['emailaddress'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="leftpart">
    <form class="row g-3" action="index.php" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Your Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="fullname">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Your Mail</label>
    <input type="email" class="form-control" id="inputPassword4" name="emailaddress">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address1">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address2">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Country</label>
    <input type="text" class="form-control" id="inputCity" name="country">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state">
      <option value="Rajshahi">Rajshahi</option>
      <option value="Natore">Natore</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="zip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
    </div>
    <div class="rightpart">
        <h1>Name : <?php echo $name?> </h1>
        <h1>Email : <?php echo $email?></h1>
        <h1>Address 1 : <?php echo $address1?> </h1>
        <h1>Address 2 : <?php echo $address2?></h1>
        <h1>Country : <?php echo $country?> </h1>
        <h1>State : <?php echo $state?></h1>
        <h1>Zip : <?php echo $zip?></h1>
    </div>
</body>
</html>




