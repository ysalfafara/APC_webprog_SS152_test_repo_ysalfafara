<!DOCTYPE HTML>  
<html>
<head>
  <title> Form Validation </title>
</head>
<style>

body{
  background-image: url("Background3.jpg");
  opacity: 1.5;
}

.box{
  position: absolute;
  left: 10%;
  margin-top: 20px;
  background-color: #EEE7DA;
  box-shadow: 1px 2px 20px #272532;
  border-radius: 5px;
  font-family: calibri;
  width: 500px;
  height: 600px;
}

.error {color: #FF0000;}

h2{
  text-align: center;
}

p, form{
  padding-left: 50px;
  padding-right: 60px;
  color: #5B5552;
}

#formValid{
  color: #5B5552;
}

#tb1{
  margin-left: 18px;
}
#tb2{
  margin-left: 20px;
}
#tb3{
  margin-left: 23px;
}
#tb4{
  margin-left: 48px;
}
#tb5{
  margin-left: 15px;
}
#tb6{
  margin-left: 12px;
}
#tb7{
  margin-left: 20px;
}

input{
  margin-left: 25px;
}

#submit{
  position: absolute;
  margin-left: 210px;
}

input[type=text], select {
  width: 50%;
  height: 10px;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

textarea{
  width: 230px;
  height: 50px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

textarea:focus {
    width: 75%;
}

.input{
  position: absolute;
  left: 50%;
  margin-top: 20px;
  background-color: #5B5552;
  box-shadow: 1px 2px 20px #272532;
  border-radius: 5px;
  font-family: corbel;
  width: 250px;
  height: 450px;
  color: #EEE7DA;
  text-align: center;
}

.web_button{
  display: none;
  margin-top: 100px;
  margin-left: 65px;
  background-color: #EEE7DA;
  box-shadow: 1px 2px 20px #272532;
  border-radius: 5px;
  font-family: calibri;
  width: 120px;
  height: 30px;
  color: #5B5552;
  line-height: 2em;
  cursor: pointer;
}

.web_button:hover{
  background-color: #f9f7f3;
}

</style>
<script>

function showButton(){
  web = document.getElementById('web_button');
  if(web.style.display == "block"){
    web.style.display = "none";
  }
  else{
    web.style.display = "block";
  }
}

</script>
<body>  

<?php
// define variables and set to empty values
$fnameErr = $lnameErr = $nicknameErr = $emailErr = $genderErr = $homeAddErr = $phoneNumErr = "";
$fname = $lname = $nickname = $email = $gender = $comment = $homeAdd = $phoneNum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    // check if fname only contains letters and numbers
    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $fname)) {
      $fnameErr = "Only letters and numbers allowed"; 
    }
  }

  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    // check if lname only contains letters and numbers
    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $lname)) {
      $lnameErr = "Only letters and numbers allowed"; 
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

<div style="position: relative">
  <div class="box">
    <h2 id="formValid"> Form Validation </h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      First Name: <input id="tb1" type="text" name="fname" value="<?php echo $fname;?>">
      <span class="error">* <br><?php echo $fnameErr;?></span>
      <br>


      Last Name: <input id="tb2" type="text" name="lname" value="<?php echo $lname;?>">
      <span class="error">* <br><?php echo $lnameErr;?></span>
      <br>
      
      Nickname: <input id="tb3" type="text" name="nickname" value="<?php echo $nickname;?>">
      <span class="error">* <br><?php echo $nicknameErr;?></span>
      <br>
      
      E-mail: <input id="tb4" type="text" name="email" value="<?php echo $email;?>">
      <span class="error">* <br><?php echo $emailErr;?></span>
      <br>
      
      Home Address: <input id="tb5" type="text" name="homeAdd" value="<?php echo $homeAdd;?>">
      <span class="error"><?php echo $homeAddErr;?></span>
      <br><br>

      Gender:
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
      <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
      <span class="error">* <br><?php echo $genderErr;?></span>
      <br>

      Phone Number: <input id="tb6" type="text" name="phoneNum" value="<?php echo $phoneNum;?>">
      <span class="error">* <br><?php echo $phoneNumErr;?></span>
      <br>
      
      Comment: <textarea id="tb7" name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
      <br><br>

      <p><span class="error">* required field.</span>
      <input onclick="showButton()" id="submit" type="submit" name="submit" value="Submit"> </p>
    </form>
  </div>

  <?php
    echo '<div class="input">';
    echo "<h2>Information:</h2>";
    echo $fname;
    echo " ";
    echo $lname;
    echo "<br><br>";
    echo $nickname;
    echo "<br><br>";
    echo $email;
    echo "<br><br>";
    echo $homeAdd;
    echo "<br><br>";
    echo $gender;
    echo "<br><br>";
    echo $phoneNum;
    echo "<br><br>";
    echo $comment;
    echo '<div class="web_button">';
    echo "My Website";
    echo '</div>';
    echo '</div>';
  ?>
</div>

</body>
</html>