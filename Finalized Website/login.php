<?php
echo '<section id="home">';
if (!isset($_POST['submit']))
{
echo '<h2>Please enter your login credentials.</h2>';
echo '<form method="post" action="" id="mainForm">';
echo '<div class="form-group">';
echo '<label class="control-label" for="username">Username: </label>';
echo '<input type="text" id="username" name="username" class="form-control"/>';
echo '<div id="unFeedbackLN"></div> ';
echo '</div>';
echo '<div class="form-group">';
echo '<label class="control-label" for="password">Password: </label>';
echo '<input type="password" id="password" name="password" class="form-control"/>';
echo '<div id="unFeedbackLN"></div> ';
echo '</div>';
echo '<div class="form-group">';
echo '<button class="btn btn-primary" type="submit" name="submit" value="submit" />Submit</button>';

echo '</div>';
echo '</form>';
}
if (isset($_POST['submit']))
{
	$username=addslashes($_POST['username']);
	$passText=$_POST['password'];
	$salt="CS4413SP24";
	$dblink=db_connect("user_data");
	$password=hash('sha256',$salt.$passText.$username);
	$sql="Select `auto_id` from `accounts` where `auth_hash`='$password'";
	$result=$dblink->query($sql) or
		die("Something went wrong with $sql<br>".$dblink->error);
	if ($result->num_rows>0)
	{
		$salt=microtime();
		$sid=hash('sha256',$salt.$password);
		//$sql="Insert into `accounts` (`session_id`) values (`$sid`) where `auth_hash`='$password'";
		$sql="Update `accounts` set `session_id`='$sid' where `auth_hash='$password'";
		$dblink->query($sql) or
		die("Something went wrong with $sql<br>".$dblink->error);
		redirect("index.php?pahe=results&sid=$sid");
	}
}
?>