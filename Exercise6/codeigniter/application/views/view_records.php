<!DOCTYPE html>
<html>
<head>
<title>Form Validation</title>

<script type="text/javascript">

function show_confirm(act, gotoid){
    if(act == "edit"){
        var r = confirm("Do you really want to edit?")
    }
    else{
        var r = confirm("Do you really want to delete?")
    }

    if(r == true){
        window.location="<?php echo base_url();?>index.php/users/"+act+"/"+gotoid;
    }
}

</script>
<style>

table{
    background-color: #EEE7DA;
    box-shadow: 1px 2px 20px #272532;
    border-radius: 5px;
    font-family: calibri;
    width:80%;
    color:#6F5F5C;
    margin-bottom:80px;
}

table a{
 text-decoration:none;
 color:#5B5552;
}

table,td,th{
 border-collapse:collapse;
 border:solid #d0d0d0 1px;
 padding:20px;
}

table td input{
 width:97%;
 height:35px;
 border:dashed #00a2d1 1px;
 padding-left:15px;
 font-family:Verdana, Geneva, sans-serif;
 box-shadow:0px 0px 0px rgba(1,0,0,0.2);
 outline:none;
}

#add_data:hover{
    background-color: #d6cfc4;
}

</style>
</head>
<body background="<?php echo base_url();?>/images/Background3.jpg" style="opacity: 1.5;">
<center>

<div id="body">
  <div id="content">
    <table align="center">
    
    <a href="<?php echo base_url('index.php/Users/add_form')?>">
    <tr>
        <th id="add_data"colspan="10" style="cursor: pointer"> Add Data Here </th>
    </tr>
    </a>

    <th>First Name</th>
    <th>Last Name</th>
    <th>Nickame</th>
    <th>Email</th>
    <th>Home Address</th>
    <th>Gender</th>
    <th>Phone Number</th>
    <th>Comment</th>
    <th colspan="2">Operations</th>
    </tr>

    <?php foreach ($user_list as $u_key){ ?>
        
        <tr>
        <td><?php echo $u_key->fname; ?></td>
        <td><?php echo $u_key->lname; ?></td>
        <td><?php echo $u_key->nickname; ?></td>
        <td><?php echo $u_key->email; ?></td>
        <td><?php echo $u_key->homeAdd; ?></td>
        <td><?php echo $u_key->gender; ?></td>
        <td><?php echo $u_key->phoneNum; ?></td>
        <td><?php echo $u_key->comment; ?></td>
  
        <td align="center"><a href="#" onClick="show_confirm('edit',<?php echo $u_key->fname;?>)">Edit</a></td>
        

        <td align="center"><a href="#" onClick="show_confirm('delete',<?php echo $u_key->fname;?>)">Delete </a></td>
        
        </tr>

        <?php }?>
    </table>
  </div>
</div>

</center>
</body>
</html>