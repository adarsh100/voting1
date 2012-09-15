<?php
session_start();
function confirm_logged_in()
{
if(!isset($_SESSION['staff_id']))
{
header("Location:staff_login.php");
}
}
?>
