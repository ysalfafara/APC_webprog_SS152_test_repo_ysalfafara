<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
 $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $homeAdd = $_POST['homeAdd'];
 $gender = $_POST['gender'];
 $phoneNum = $_POST['phoneNum'];
 $comment = $_POST['comment'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET fname='$fname',lname='$lname',nickname='$nickname',email='$email',homeAdd='$homeAdd',gender='$gender',comment='$comment' WHERE user_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
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
  -webkit-transition: height 0.4s ease-in-out;
  transition: height 0.4s ease-in-out;
}

textarea:focus {
    height: 80px;
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
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="lname" placeholder="Last Name" value="<?php echo $fetched_row['lname']; ?>" required />
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>" required />
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required />
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="homeAdd" placeholder="Home Address" value="<?php echo $fetched_row['homeAdd']; ?>" />
          </td>
        </tr>
       
        </tr>
          <td>
          <!--<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="<?php echo $fetched_row['gender']; ?>">Female
          <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="<?php echo $fetched_row['gender']; ?>">Male -->
            <input type="text" name="gender" placeholder="Gender" value="<?php echo $fetched_row['gender']; ?>" required />
          </td>
        </tr>

        <tr>
          <td>
            <input type="text" name="phoneNum" placeholder="Phone Number" value="<?php echo $fetched_row['phoneNum']; ?>" required />
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="comment" placeholder="Comment" value="<?php echo $fetched_row['comment']; ?>" /> 
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