<!DOCTYPE HTML>  
<html>
<head>
  <title> Form Validation </title>
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
<body background="<?php echo base_url();?>/images/Background3.jpg" style="opacity: 1.5"> 

<div style="position: relative">
  <div class="box1">
    <h2 id="formValid"> Form Validation </h2>
    <form method="post" action="<?php echo base_url();?>index.php/users/insert_user_db"> 
      <table align = "center">
        <tr align="center">
          <td><a href = "index.php"> Back to Main Page </a></td>
        </tr>

        <tr>
          <td>
            <input type="text" name="fname" placeholder= "First Name" value="" required>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="lname" placeholder="Last Name" value="" required>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="nickname" placeholder="Nickname" value="" required>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="email" placeholder="Email" value="" required>
          </td>
        </tr>
        
        <tr>
          <td>
            <input type="text" name="homeAdd" placeholder="Home Address" value="">
          </td>
        </tr>

        <tr>
          <td>
            Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female" required> Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"> Male 
          </td>
        </tr>

        <tr>
          <td>
            <input type="text" name="phoneNum" placeholder="Phone Number" value="" required>
          </td>
        </tr>
        
        <tr>
          <td>
            <textarea name="comment" placeholder="Comment" rows="5" cols="40" value=""> </textarea>
          </td>
        </tr>
        
        <td>
          <p><span class="error">* required field </span></p>
          <div><input type = "submit" value = "Submit" /></div>
        </td>
      </table>
    </form>
  </div>

    <!-- MINI BOX -->
  <div id="mini_box">

    <a href="<?php echo base_url('index.php/Home/index')?>">
      <div class="box" id="Profile" style="cursor: pointer">
        <p class="para2_white" style="font-size: 18px"> PROFILE </p>
      </div>
    </a>

    <a href="<?php echo base_url('index.php/Trivia/index')?>">
      <div class="box" id="Trivia" style="cursor: pointer">
        <p class="para2_white" style="font-size: 18px"> TRIVIAS </p>
      </div>
    </a>
    
    <div class="box" id="Form" style="cursor: pointer">
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