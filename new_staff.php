<?php
include("include/session.php");
?>
<?php
confirm_logged_in();
?>

<?php
include("include/header.php");
?>
<?php
include("include/connection.php");
?>

<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$staff_id=$_POST['staff_id'];

$password=$_POST['password'];
$hashed_password=sha1($password);
$query="insert into staff (staff_id,username,password) values ({$staff_id},'{$username}','{$hashed_password}')";
if(mysql_query($query,$db))
{
?>
<script type="text/javascript">
alert("STAFF SUCCESSFULLY CREATED");
</script>
<?php
}
else 
{
$msg1= "USER CREATION FAILED ";
echo "<p>".mysql_error()."</p>";
}
}

?>


<a href="http://localhost/voting/staff_area.php"><button value="sign in" >STAFF AREA</button></a>

<div class="form" style="width:235px;margin:150px 520px auto 550px ">
<form style="padding-left:20px;padding-right:20px;padding-bottom:20px" class="form1" method="post" action="new_staff.php" id="form5">
<p class="form_heading">CREATE NEW STAFF</p>
STAFF_ID</br>
<input type="text" class="text" name="staff_id" ></br></br></br>

USERNAME</br>
<input type="text" class="text" name="username" ></br></br></br>
PASSWORD</br><input class="text" type="text" name="password"></br></br></br>
<input type="submit" name="submit" value="SIGN IN">
</form>
</div>
<?php
include("include/connection_close.php");
?>
