<?php
include_once 'dbconfig.php';
// define variables and set to empty values
$Err = $fnameErr = $lnameErr = $nicknameErr = $emailErr = $genderErr = $homeAddErr = $phoneNumErr = "";
$fname = $lname = $nickname = $email = $gender = $comment = $homeAdd = $phoneNum = "";

if(isset($_POST['submit'])){
    $fname = test_input($_POST["fname"]);
    // check if fname only contains letters and numbers
    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $fname)) {
      $fnameErr = "Only letters and numbers allowed"; 
      $Err = "Err";
    }
  

    $lname = test_input($_POST["lname"]);
    // check if lname only contains letters and numbers
    if (!preg_match("/^[a-zA-Z0-9 ]*$/", $lname)) {
      $lnameErr = "Only letters and numbers allowed"; 
      $Err = "Err";
    }
  
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
      $nicknameErr = "Only letters and white space allowed"; 
      $Err = "Err";
    }

    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      $Err = "Err";
    }

    $homeAdd = test_input($_POST["homeAdd"]);
    // check if homeAdd only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$homeAdd)) {
      $homeAddErr = "Only letters and white space allowed";
      $Err = "Err"; 
    }

    if (empty($_POST["gender"])) {   
      $genderErr = "Input gender";  
      $Err = "Err";    
    } else {    
      $gender = test_input($_POST["gender"]);   
    }
  
    $phoneNum = test_input($_POST["phoneNum"]);
    // check if phoneNum only contains numbers
    if (!preg_match("/^[0-9]*$/",$phoneNum)) {
      $phoneNumErr = "Only numbers are allowed";
      $Err = "Err"; 
    }

    if (empty($_POST["comment"])) {    
      $comment = "";    
    } else {    
      $comment = test_input($_POST["comment"]);   
    }

    if($Err != "Err"){
      $sql_query = "INSERT INTO users(fname, lname, nickname, email, homeAdd, gender, phoneNum, comment) VALUES('$fname','$lname','$nickname', '$email','$homeAdd','$gender','$phoneNum', '$comment')";
      mysql_query($sql_query);
    }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

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

.box1{
  position: absolute;
  left: 30%;
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

textarea{
  width: 200px;
  height: 50px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}

p, form{
  padding-left: 50px;
  padding-right: 60px;
  color: #5B5552;
}

#formValid{
  color: #5B5552;
}

input{
  margin-left: 25px;
}

#submit{
  position: absolute;
  margin-left: 210px;
}

input[type=text], select {
  width: 250px;
  height: 35px;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

.box{
  background-color: #EEE7DA;
  box-shadow: 1px 2px 20px #272532;
  border-radius: 5px;
  color: #EFF8F9;
}

.para2_white{
  position: absolute;
  font-family: calibri;
  font-size: 14px;
  color: #EEE7DA;
  line-height: 0.5em;
}

#mini_box{
  position: absolute;

} 
  #Profile, #Trivia, #Form, #Blank2, #Blank3{
    margin-top: 15px; 
    margin-left: 80px;
    width: 160px;
    height: 45px;
  }

  #Profile{
    background-color: #6F5F5C;
    margin-top: 295px; 
  }

  #Profile:hover{
    background-color: #7D6F6C;
  }

  #Trivia{
    background-color: #825D5B;
  }

  #Trivia:hover{
    background-color: #8E6D6B;
  }

  #Form{
    background-color: #A26B61;
  }

  #Form:hover{
    background-color: #b48880;
  }

  #Blank2{
    background-color: #E38F71;
  }

  #Blank2:hover{
    background-color: #e8a58d;
  }

  #Blank3{
    background-color: #F0B270;
  }

  #Blank3:hover{
    background-color: #f3c18c;
  }

</style>
<body>  

<div style="position: relative">
  <div class="box1">
    <h2 id="formValid"> Form Validation </h2>
    <form method="post">  
      <table align = "center">
        <tr align="center">
          <td><a href = "index.php"> Back to Main Page </a></td>
        </tr>

        <tr>
          <td>
            <input type="text" name="fname" placeholder= "First Name" value="<?php echo $fname;?>" required>
            <span class="error">* <br><?php echo $fnameErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="lname" placeholder="Last Name" value="<?php echo $lname;?>" required>
            <span class="error">* <br><?php echo $lnameErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="nickname" placeholder="Nickname" value="<?php echo $nickname;?>" required>
            <span class="error">* <br><?php echo $nicknameErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="email" placeholder="Email" value="<?php echo $email;?>" required>
            <span class="error">* <br><?php echo $emailErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="homeAdd" placeholder="Home Address" value="<?php echo $homeAdd;?>">
            <span class="error"><?php echo $homeAddErr;?></span>
          </td>
        </tr>

        <tr>
          <td>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female" required> Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male 
            <span class="error">* <br><?php echo $genderErr;?></span>
          </td>
        </tr>

        <tr>
          <td>
            <input type="text" name="phoneNum" placeholder="Phone Number" value="<?php echo $phoneNum;?>" required>
            <span class="error">* <br><?php echo $phoneNumErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <textarea name="comment" placeholder="Comment" rows="5" cols="40" value="<?php echo $comment;?>"> </textarea>
          </td>
        </tr>
        
        <td>
          <p><span class="error">* required field </span></p>
          <button type="submit" name="submit" value="Submit"> SUBMIT </button>
        </td>
      </table>
    </form>
  </div>

    <!-- MINI BOX -->
  <div id="mini_box">
    <div class="box" id="Profile">
      <p class="para2_white" style="font-size: 18px"> PROFILE </p>
    </div>

    <div class="box" id="Trivia" style="cursor: pointer" onclick="window.location='Trivia.html'">
      <p class="para2_white" style="font-size: 18px"> TRIVIAS </p>
    </div>
    
    <div class="box" id="Form" style="cursor: pointer" onclick="window.location='Form.php'">
      <p class="para2_white" style="margin-left: 5px; font-size: 18px"> FORM </p>
    </div>  
    
    <div class="box" id="Blank2">
      <p class="para2_white" style="margin-left: 48px; font-size: 18px"> </p>
    </div>

    <div class="box" id="Blank3">
      <p class="para2_white" style="margin-left: 48px; font-size: 18px"> </p>
    </div>

  </div>
</body>
</html>