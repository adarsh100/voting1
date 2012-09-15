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
<div class="welcome">
<h1 class="staff_heading">WELCOME <?php echo strtoupper($_SESSION['username'])?> TO STAFF AREA</h1>
</div>
<div class="staff_area">
<ul>
<li><a href="update_user.php">UPDATE USER</a></li>
<li><a href="new_staff.php">CREATE STAFF</a></li>
<li><a href="new_user.php">CREATE USER</a></li>
<li><a href="new_nominee.php">NEW NOMINEE</a></li>

<li><a href="staff_logout.php">LOGOUT</a></li>

</ul>
</div>
<?php
include("include/connection_close.php");
?>
