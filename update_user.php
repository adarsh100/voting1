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
$user_id=$_POST['user_id'];

$city=$_POST['city'];

$query="update user set city='{$city}' where user_id={$user_id}";
$result=mysql_query($query,$db);

}
?>
<a href="http://localhost/voting/staff_area.php"><button value="sign in" >STAFF AREA</button></a>

<div class="form" style="width:300px;margin:150px 520px auto 550px ">
<form style="padding-left:20px;padding-right:20px;padding-bottom:20px" class="form1" method="post" action="update_user.php" id="form6">
<p class="form_heading">UPDATE USER ADDRESS</p>


VOTER_ID</br>
<input type="text" class="text" name="user_id" ></br></br></br>

CITY</br><input class="text" type="text" name="city"></br></br></br>

<input type="submit" name="submit" value="SIGN IN">
</form>
</div>

<?php
include("include/connection_close.php");
?>
