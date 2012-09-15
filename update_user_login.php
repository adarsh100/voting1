<?php
include("include/header.php");
?>
<?php
include("include/connection.php");
?>
<?php
if(isset($_POST['submit']))
{
$confirm_password=$_POST['confirm_password'];
$new_username=$_POST['new_username'];

$new_password=$_POST['new_password'];

$hashed_new_password=sha1($new_password);
if(strcmp($confirm_password,$new_password)==0)
{
$query="update user set username='{$new_username}',password='{$hashed_new_password}' ";
}
}
?>
<a href="http://localhost/voting/user_area.php"><button value="sign in" >USER AREA</button></a>

<div class="form" style="width:300px;margin:150px 520px auto 550px ">
<form style="padding-left:20px;padding-right:20px;padding-bottom:20px" class="form1" method="post" action="update_user_login.php" >
<p class="form_heading">UPDATE USERNAME OR PASSWORD</p>


NEW_USERNAME</br>
<input type="text" class="text" name="new_username" ></br></br></br>

NEW PASSWORD</br>
<input type="password" class="text" name="new_password" ></br></br></br>
CONFIRM PASSWORD</br><input class="password" type="password" name="confirm_password"></br></br></br>

<input type="submit" name="submit" value="SIGN IN">
</form>
</div>

<?php
include("include/connection_close.php");
?>
