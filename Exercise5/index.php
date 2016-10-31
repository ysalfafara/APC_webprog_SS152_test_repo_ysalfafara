<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<!DOCTYPE html>
<html>
<head>
<title>Form Validation</title>

<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='edit_data.php?edit_id='+id;
 }
}
function delete_id(id)
{
 if(confirm('Sure to Delete ?'))
 {
  window.location.href='index.php?delete_id='+id;
 }
}
</script>

<style>

body{
  background-image: url("Background3.jpg");
  opacity: 1.5;
}

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
<body>
<center>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th id="add_data"colspan="10" onclick="window.location='form.php'" style="cursor: pointer"> Add Data Here </a></th>
    </tr>
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
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
        <td><?php echo $row[5]; ?></td>
        <td><?php echo $row[6]; ?></td>
        <td><?php echo $row[7]; ?></td>
        <td><?php echo $row[8]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="p_edit.png" align="EDIT" style="width: 20px"/></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="p_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>
</body>
</html>