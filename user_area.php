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
<div class="welcome1">
<h1 class="staff_heading">WELCOME <?php echo strtoupper($_SESSION['username'])?> TO USER AREA</h1>
</div>
<div class="staff_area">
<ul>
<li><a href="update_user_login.php">UPDATE LOGIN</a></li>
<li><a href="user_select.php">NAVIGATE PARTY</a></li>
<li><a href="user_logout.php">LOGOUT</a></li>

</ul>
</div>

<?php
include("include/connection_close.php");
?>
