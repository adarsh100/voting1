<?php
include("include/header.php");
?>
<?php
include("include/connection.php");
?>
<?php
if(isset($_POST['submit']))
{
$voter=$_POST['voter_id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$date=$_POST['date'];
$sex=$_POST['sex'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$email=$_POST['email'];
$voter_id=intval($voter);

$query="insert into luckyuser(vote_id,firstname,lastname,date1,sex,address,city,state,pincode,email) values ($voter,'{$firstname}','{$lastname}',
'{$date}','{$sex}','{$address}','{$city}','{$state}',{$pincode},'{$email}')";
if(mysql_query($query,$db))
{
?>
<script type="text/javascript">
alert(" THANKS FOR REGISTRATION .YOUR username AND password WILL BE SEND TO YOUR MAIL ");
</script>
<?php
}
}
?>

<div class="form6">
<div class="form" style="width:400px;margin:150px 520px 0px 550px ">
<form name="myform" style="padding-left:20px;padding-right:20px;padding-bottom:20px" class="form1" method="post" action="luckyform.php"  id="form1">
<p class="form_heading">REGISTRATION FORM</p>
VOTER_ID</br>
<input class="text" type="text" name="voter_id"></br></br></br>

FIRST NAME</br>
<input type="text" class="text" name="firstname"  ></br></br></br>

LASTNAME</br>
<input type="text" class="text" name="lastname" ></br></br></br>
DATE(yyyy-mm-dd)</br>
<input type="text" class="text" name="date" ></br></br></br>

SEX</br></br>
<input type="radio" name="sex" value="male" /> MALE
&nbsp&nbsp;<input type="radio" name="sex" value="female" /> FEMALE
</br></br></br>
ADDRESS</br>
<input class="text" type="text" name="address"></br></br></br>
CITY </br>
<select name="city">
<option value="allahabad">ALLAHABAD</option>
<option value="lucknow">LUCKNOW</option>
<option value="kanpur">KANPUR</option>
<option value="varanasi">VARANASI</option>
<option value="patna">PATNA</option>
<option value="buxar">BUXAR</option>
<option value="purnia">PURNIA</option>
<option value="agra">AGRA</option>

</select>
</br></br></br>STATE </br>
<select name="state">
<option value="up">UTTAR PRADESH</option>
<option value="bihar">BIHAR</option>
<option value="tamilnadu">TAMIL NADU</option>
<option value="andhra">ANDHRA PRADESH</option>
</select></br></br></br>
PINCODE</br>
<input class="text" type="text" name="pincode"></br></br></br>
E-MAIL</br>
<input class="text" type="text" name="email"></br></br></br>
<input type="submit" name="submit" value="SIGN IN">
</form>
</div>
<div class="footer">
<p class="foot">GENERAL DISCLAIMER | COPYRIGHT 2009-2012 , ELECTION COMMISION OF INDIA </p>
</div>
<?php
include("include/connection_close.php");
?>

