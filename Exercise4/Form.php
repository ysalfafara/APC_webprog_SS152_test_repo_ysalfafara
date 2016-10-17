<!DOCTYPE HTML>  
<html>
<head>
<style>

.error {color: #FF0000;}

</style>
</head>
<style>

body{
  background-image: url("Background3.jpg");
  opacity: 1.5;
}

.box{
  position: absolute;
  top: 10%;
  left: 30%;
  background-color: #EEE7DA;
  box-shadow: 1px 2px 20px #272532;
  border-radius: 5px;
  font-family: calibri;
  width: 500px;
  height: 500px;
}

h2{
  text-align: center;
}
p, form{
  padding-left: 50px;
}

</style>
<body>  

<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $genderErr = $homeAddErr = $phoneNumErr = "";
$name = $nickname = $email = $gender = $comment = $homeAdd = $phoneNum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["homeAdd"])) {
    $homeAdd = "";
  } else {
    $homeAdd = test_input($_POST["homeAdd"]);
    // check if homeAdd only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$homeAdd)) {
      $homeAddErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["phoneNum"])) {
    $phoneNumErr = "Phone Number is required";
  } else {
    $phoneNum = test_input($_POST["phoneNum"]);
    // check if phoneNum only contains numbers
    if (!preg_match("/^[0-9]*$/",$phoneNum)) {
      $phoneNumErr = "Only numbers are allowed"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<div class="box">
  <h2> Form Validation </h2>
  <p><span class="error">* required field.</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    
    Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
    <span class="error">* <?php echo $nicknameErr;?></span>
    <br><br>
    
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    
    Home Address: <input type="text" name="homeAdd" value="<?php echo $homeAdd;?>">
    <span class="error"><?php echo $homeAddErr;?></span>
    <br><br>

    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>

    Phone Number: <input type="text" name="phoneNum" value="<?php echo $phoneNum;?>">
    <span class="error">* <?php echo $phoneNumErr;?></span>
    <br><br>
    
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
    <br><br>

    <input type="submit" name="submit" value="Submit">  
  </form>

  <?php
  echo "<h2>Your Input:</h2>";
  echo $name;
  echo "<br>";
  echo $nickname;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $homeAdd;
  echo "<br>";
  echo $gender;
  echo "<br>";
  echo $phoneNum;
  echo "<br>";
  echo $comment;

  ?>

</div>

</body>
</html>