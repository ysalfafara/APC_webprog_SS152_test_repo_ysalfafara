<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}

$Err = $fnameErr = $lnameErr = $nicknameErr = $emailErr = $genderErr = $homeAddErr = $phoneNumErr = "";

if(isset($_POST['btn-update'])){
 // variables for input data
  
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
    $genderErr = "Gender is required";    
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

 // sql query for update data into database
  if($Err != "Err"){
    $sql_query = "UPDATE users SET fname='$fname',lname='$lname',nickname='$nickname',email='$email',homeAdd='$homeAdd',gender='$gender',comment='$comment' WHERE user_id=".$_GET['edit_id'];
  }

  if(mysql_query($sql_query) && $Err != "Err"){
    ?>
    <script type="text/javascript">
    alert('Data Are Updated Successfully');
    window.location.href='index.php';
    </script>
    <?php
  }
  else{
    ?>
    <script type="text/javascript">
    alert('error occured while updating data');
    </script>
    <?php
  }
}

if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Validation</title>

</head>
<style>

body{
  background-image: url("Background3.jpg");
  opacity: 1.5;
}

.box{
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
  width: 200px;
  height: 35px;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}


</style>
<body>  

<div style="position: relative">
  <div class="box">
    <h2 id="formValid"> Form Validation </h2>
    <form method="post">  
      <table align = "center">
        <tr align="center">
          <td><a href = "index.php"> Back to Main Page </a></td>
        </tr>

        <tr>
          <td>
            <input type="text" name="fname" placeholder="First Name" value="<?php echo $fetched_row['fname']; ?>" required />
            <span class="error">* <br><?php echo $fnameErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="lname" placeholder="Last Name" value="<?php echo $fetched_row['lname']; ?>" required />
            <span class="error">* <br><?php echo $lnameErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required />
            <span class="error">* <br><?php echo $nicknameErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required />
            <span class="error">* <br><?php echo $emailErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="homeAdd" placeholder="Home Address" value="<?php echo $fetched_row['homeAdd']; ?>" />
            <span class="error">* <br><?php echo $homeAddErr;?></span>
          </td>
        </tr>
       
        </tr>
          <td>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"> Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male 
          </td>
        </tr>

        <tr>
          <td>
            <input type="text" name="phoneNum" placeholder="Phone Number" value="<?php echo $fetched_row['phoneNum']; ?>" required />
            <span class="error">* <br><?php echo $phoneNumErr;?></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <textarea name="comment" placeholder="Comment" rows="5" cols="40" value="<?php echo $fetched_row['comment']; ?>"></textarea>
          </td>
        </tr>
        
        <td>
          <p><span class="error">* required field </span></p>
          <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
          <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
        </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>