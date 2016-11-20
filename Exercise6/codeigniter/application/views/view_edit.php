<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Validation</title>

</head>
<style>

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


form{
  padding-left: 90px;
  padding-right: 60px;
  color: #5B5552;
}

p{
  padding-left: 40px;
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

  #Blank3{
    background-color: #F0B270;
  }



</style>
<body background="<?php echo base_url();?>/images/Background3.jpg" style="opacity: 1.5"> 

<div style="position: relative">
  <div class="box1">
    <h2 id="formValid"> Form Validation </h2>
    <!-- Fetching all Records from the Database -->
    <?php foreach ($single_users as $users): ?>

    <form method="post" action="<?php echo base_url() . "index.php/users/update_users_id1"?>">

      <table align = "center">
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

      <!-- MINI BOX -->
  <div id="mini_box">

    <a href="<?php echo base_url('index.php/Home/index')?>">
      <div class="box" id="Profile" style="cursor: pointer">
        <p class="para2_white" style="margin-left: 11px; font-size: 18px"> PROFILE </p>
      </div>
    </a>

    <a href="<?php echo base_url('index.php/Trivia/index')?>">
      <div class="box" id="Trivia" style="cursor: pointer">
        <p class="para2_white" style="margin-left: 11px; font-size: 18px"> TRIVIAS </p>
      </div>
    </a>
    
    <a href="<?php echo base_url('index.php/Users/index')?>">
      <div class="box" id="Form" style="cursor: pointer">
        <p class="para2_white" style="margin-left: 5px; font-size: 18px"> RECORDS </p>
      </div> 
    </a> 
    
    <div class="box" id="Blank2">
      <p class="para2_white" style="margin-left: 48px; font-size: 18px"> </p>
    </div>

    <div class="box" id="Blank3">
      <p class="para2_white" style="margin-left: 48px; font-size: 18px"> </p>
    </div>

</body>
</html>