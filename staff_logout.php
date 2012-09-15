<?php
include("include/session.php");
?>
<?php
confirm_logged_in();
?>
<?php
$_SESSION=array();
if(isset($_COOKIE[session_name()]))
setcookie(session_name(),' ',time()-4200,'/');
session_destroy();
header("Location:staff_login.php?logout=1");

?>