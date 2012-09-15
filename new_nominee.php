<?php
include("include/header.php");
?>
<?php
include("include/connection.php");
?>
<?php
if(isset($_POST['submit']))
{
$nominee_id=$_POST['nominee_id'];
$nominee_party=$_POST['nominee_party'];
$photo=$_POST['photo'];
$name=$_POST['name'];
$city=$_POST['city'];

$query="insert into nominee (nominee_id,nominee_party,photo,name,city) values({$nominee_id},'{$nominee_party}','{$photo}','{$name}','{$city}')";
if(mysql_query($query,$db))
{
?>
<script type="text/javascript">
alert("NOMINEE SUCCESSFULLY CREATED");
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
<form style="padding-left:20px;padding-right:20px;padding-bottom:20px" class="form1" method="post" action="new_nominee.php" id="form7">
<p class="form_heading">CREATE NEW NOMINEE</p>
NOMINEE_ID</br>
<input type="text" class="text" name="nominee_id" ></br></br></br>
NOMINEE PARTY</br>
<select name="nominee_party" class="text">
<option value="CONGRESS">CONGRESS</option>
<option value="BJP">BJP</option>
<option value="BSP" >BSP</option>
<option value="SP">SP</option>
<option value="AKALI DAL">AKALI DAL</option>
</select></br></br></br>
NOMINEE PARTY</br>
<select name="photo" class="text">
<option value="image/congress.gif">CONGRESS</option>
<option value="image/bjp.jpg">BJP</option>
<option value="image/bsp.jpg" >BSP</option>
<option value="image/sp.jpg">SP</option>
<option value="image/akali.jpg">AKALI DAL</option>
</select></br></br></br>

NAME</br><input class="text" type="text" name="name"></br></br></br>
CITY</br>
<input type="text" class="text" name="city" ></br></br></br>

<input type="submit" name="submit" value="SIGN IN">
</form>
</div>
<div class="footer">
<p class="foot">GENERAL DISCLAIMER | COPYRIGHT 2009-2012 , ELECTION COMMISION OF INDIA </p>
</div>

<?php
include("include/connection_close.php");
?>
