<?php
include("include/connection.php");
?>
<?php
$query="select * from stu where name='ravikant' ";
$result_set=mysql_query($query,$db);
while($result_row=mysql_fetch_array($result_set))
{
echo $result_row[1];
}


?>

<?php
include("include/connection_close.php");
?>
