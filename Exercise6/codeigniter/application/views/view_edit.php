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

#hide{
  display: none;
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
<ol>
<?php foreach ($users as $users): ?>
<li><a href="<?php echo base_url() . "index.php/users/show_users_id/" . $users->user_id; ?>"><?php echo $users->fname; ?></a></li>
<?php endforeach; ?>
</ol>
    <!-- Fetching all Records from the Database -->
    <?php foreach ($single_users as $users): ?>

    <form method="post" action="<?php echo base_url() . "index.php/users/update_users_id1"?>">

      <table align = "center">
        <tr align="center">
          <td><a href = "<?php echo base_url('index.php/users/index')?>"> Back to Main Page </a></td>
        </tr>
        <input type="text" id="hide" name="did" value="<?php echo $users->user_id; ?>">
        <tr>
          <td>
            <input type="text" name="fname" placeholder="First Name" value="<?php echo $users->fname; ?>" required >
            <span class="error">* <br></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="lname" placeholder="Last Name" value="<?php echo $users->lname; ?>" required >
            <span class="error">* <br></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="nickname" placeholder="Nickname" value="<?php echo $users->nickname; ?>" required >
            <span class="error">* <br></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="email" placeholder="Email" value="<?php echo $users->email; ?>" required >
            <span class="error">* <br></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="homeAdd" placeholder="Home Address" value="<?php echo $users->homeAdd; ?>" >
            <span class="error">* <br></span>
          </td>
        </tr>
       
        </tr>
          <td>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female" required> Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male 
            <span class="error">* <br></span>
          </td>
        </tr>

        <tr>
          <td>
            <input type="text" name="phoneNum" placeholder="Phone Number" value="<?php echo $users->phoneNum; ?>" required >
            <span class="error">* <br></span>
          </td>
        </tr>
        
        <tr>
          <td>
            <textarea name="comment" placeholder="Comment" rows="5" cols="40" value="<?php echo $users->comment; ?>"></textarea>
          </td>
        </tr>
        
        <td>
          <p><span class="error">* required field </span></p>
          <input type="submit" name="submit" value="Update"></td>

        </td>
        </tr>
      </table>
    </form>
    <?php endforeach; ?>
  </div>
</body>
</html>