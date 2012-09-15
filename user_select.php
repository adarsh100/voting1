<?php
include("include/user_session.php");
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
<a href="http://localhost/voting/user_area.php"><button value="sign in" >USER AREA</button></a>

<div class="party_heading">
<p class="head">PARTY NAME WITH CANDIDATE</p>
</div>
<div class="party">
<table border="1">
<?php
$city=$_SESSION['city'];
$query="select * from nominee where city='{$city}'";
$result_set=mysql_query($query,$db);
if(!$result_set)
echo ("query not executed".mysql_error());
?>
<table>
<?php
while($result_row=mysql_fetch_array($result_set))
{
	?>
    <tr bgcolor="#CCCCCC" style="text-align:center;font-size:18px;">
   <?php
echo "<p class=\"par\">";
?>

<td width="70px"><img src=<?php echo $result_row[1];?> height="70" width="70" /></td>
<?php
echo "<td width='150px'>".$result_row[2]."</td>";
echo "<td width='150px'>". strtoupper($result_row[3])."</td>";
?>
<td width="150px"><input type="button" value="VOTE" name="vote" /></td>

<?php
echo "</p></tr>";
}
?>
</table>
</div>
<div class="footer">
<p class="foot">GENERAL DISCLAIMER | COPYRIGHT 2009-2012 , ELECTION COMMISION OF INDIA </p>
</div>

<?php
include("include/connection_close.php");
?>
