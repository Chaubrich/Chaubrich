<?php
echo '<div class="navbar-header page-scroll">';
echo '<table width="100%">';
echo 	'<tr rowspan="2" class="banner">';
echo	'<td colspan="6"><h1 id="home" align="center">Navigation Toolbar</h1></td>';
echo	'</tr>';
echo	'<tr bgcolor="#5B9BD5" align="center">';
if (!isset($_GET['page']))
	$paage="home";
else
	$page=$_GET['page'];
if ($page=="home")
	echo '<td><a href="index.php?page=home" class="active">Home</a></td>';
else
	echo '<td><a href="index.php?page=home" class="">Home</a></td>';
if ($page=="page")
	echo '<td><a href="index.php?page=page" class="active">Work</a></td>';
else
	echo '<td><a href="index.php?page=page" class="">Work</a></td>';
if ($page=="school")
	echo '<td><a href="index.php?page=school" class="active">School</a></td>';
else
	echo '<td><a href="index.php?page=school" class="">School</a></td>';
if ($page=="hobbies")
	echo '<td><a href="index.php?page=hobbies" class="active">Hobbies</a></td>';
else
	echo '<td><a href="index.php?page=hobbies" class="">Hobbies</a></td>';
if ($page=="contact")
	echo '<td><a href="index.php?page=contact" class="active">Contact</a></td>';
else
	echo '<td><a href="index.php?page=contact" class="">Contact</a></td>';
if ($page=="login")
	echo '<td><a href="index.php?page=login" class="active">Login</a></td>';
else
	echo '<td><a href="index.php?page=login" class="">Login</a></td>';
echo	'</tr>';
echo	'<a class="navbar-brand page-scroll" href="#page-top"></a>';
echo '</div>';
?>