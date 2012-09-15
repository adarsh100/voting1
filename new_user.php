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
$user_id=$_POST['user_id'];
$city=$_POST['city'];
$password=$_POST['password'];
$hashed_password=sha1($password);
$query="insert into user (user_id,username,password,city) values ({$user_id},'{$username}','{$hashed_password}','{$city}')";
if(mysql_query($query,$db))
{
?>
<script type="text/javascript">
alert("USER HAS BEEN SUCCESSFULLY CREATED");
</script>
<?php
}
}
?>
<a href="http://localhost/voting/staff_area.php"><button value="sign in" >STAFF AREA</button></a>

<div class="form" style="width:300px;margin:150px 520px auto 550px ">
<form style="padding-left:20px;padding-right:20px;padding-bottom:20px" class="form1" method="post" action="new_user.php" id="form4">
<p class="form_heading">CREATE NEW USER</p>
VOTER_ID</br>
<input type="text" class="text" name="user_id" ></br></br></br>

USERNAME</br>
<input type="text" class="text" name="username" ></br></br></br>
PASSWORD</br><input class="text" type="text" name="password"></br></br></br>
CITY</br><input class="text" type="text" name="city"></br></br></br>

<input type="submit" name="submit" value="SIGN IN">
</form>
</div>
<?php
include("include/connection_close.php");
?>
