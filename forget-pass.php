<?php
  if(isset($_POST['btn'])){
     $cpass = $_POST['cpass'];
     $npass = $_POST['npass'];
     $copass = $_POST['copass'];
     $default_pass = "sadi43129";
 
    $error = [];
    if(empty($_POST['cpass'])){
      $error['cpass'] = 'Enter Current Password';
    }
    if(empty($_POST['npass'])){
      $error['npass'] = 'Enter New Password';
    }
    if(empty($_POST['copass'])){
      $error['copass'] = 'Enter Confirm Password';
    }
  }
 
?>
<!DOCTYPE html>
<html>
<head>
<title>Change Password </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="class">
    <form action="" method="post" novalidate>
        <div class="container">
          <h1>Change Password</h1>
          <p>Please fill in this form to change your password.</p>
          <hr>
 
          <label for="Firstname"><b>Current Password </b></label>
          <input type="text" placeholder="Current Password" name="cpass" id="cpass" value="<?php if(isset($cpass)) echo $cpass ?>"><br>
            <span>
            <?php
              if(isset($error['cpass'])){
                echo $error['cpass'];
              }
            ?><br>
            </span>
 
          <label for="Lastname"><b>New Password </b></label>
          <input type="text" placeholder="New Password" name="npass" id="npass" value="<?php if(isset($npass)) echo $npass ?>" ><br>
            <span>
            <?php
              if(isset($error['npass'])){
                echo $error['npass'];
              }
            ?><br>
            </span>
 
          <label for="Number"><b>Confirm Password</b></label>
          <input type="number" placeholder="Confirm your password" name="copass" id="copass" value="<?php if(isset($copass)) echo $copass ?>" ><br>
            <span>
            <?php
              if(isset($error['copass'])){
                echo $error['copass'];
              }
			  
			  if ($_POST["npass"] === $_POST["copass"]) {
   // success!
}
else {
   // failed :(
}
			  
            ?><br>
            </span>
 
 
 
          
          <button type="submit" class="registerbtn" name ="btn">Change Password</button>
        </div>
        <div class="container signin">
        </div>
      </div>
      </form>
</body>
</html>
