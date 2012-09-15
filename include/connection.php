<?php
$db=mysql_connect("localhost","root","");
if(!$db)
echo ("database not connected" .mysql_error());

?>
<?php
$db_select=mysql_select_db("voting",$db);
if(!$db_select)
echo ("database not selected".mysql_error());

?>
