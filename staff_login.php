<?php
include("include/session.php");
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

$password=$_POST['password'];
$hashed_password=sha1($password);

$query="select * from staff where username='{$username}' and password='{$hashed_password}'";
$result_set=mysql_query($query,$db);
if(mysql_num_rows($result_set)==1)
{
$found_user=mysql_fetch_array($result_set);
$_SESSION['staff_id']=$found_user['staff_id'];
$_SESSION['username']=$found_user['username'];

header("Location:staff_area.php");
}
else 
{
?>
<script type="text/javascript">
alert("PASSWORD OR USERNAME IS INCORRECT");
</script>
<?php
	}

}
?>

<div class="form" style="width:235px;margin:150px 520px auto 550px ">
<form style="padding-left:20px;padding-right:20px;padding-bottom:20px" class="form1" method="post" action="staff_login.php" id="form2">
<p class="form_heading">STAFF LOGIN</p>

USERNAME</br>
<input type="text" class="text" name="username" ></br></br></br>
PASSWORD</br><input class="text" type="password" name="password"></br></br></br>
<input type="submit" name="submit" value="SIGN IN">
</form>
</div>
<div class="footer">
<p class="foot">GENERAL DISCLAIMER | COPYRIGHT 2009-2012 , ELECTION COMMISION OF INDIA </p>
</div>

<?php
include("include/connection_close.php");
?>
