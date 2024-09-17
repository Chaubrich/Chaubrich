
	<section id="home">
	<?php
	session_start();
		if (!isset($_POST['submit']))
		{
		echo '<form method="post" action="" id="mainForm">';
		//First Name error checking code
		if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"firstNameNull"))
		{
			echo '<div class="form-group has-error">';
			echo '<label class="control-label" for="firstname">First name: </label>';
			echo '<input type="text" id="firstname" name="firstname" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.		[a-z]{2,3}$" onkeypress="return (event.charCode > 64 && event.charCode < 91) || 				(event.charCode > 96 && event.charCode < 123)" />'; //Prevent user from typing wrong characters for their name
			echo '<div id="unFeedbackFN">First name cannot be blank!</div>';
			echo '</div>';
		}
		else
		{
			if (isset($_SESSION['firstname'])&& $_SESSION['firstname']!='')
			{
				echo '<div class="form-group has-success">';
				echo '<label class="control-label" for="firstname">First name: </label>';
				echo '<input type="text" id="firstname" name="firstname" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.		[a-z]{2,3}$" onkeypress="return (event.charCode > 64 && event.charCode < 91) || 				(event.charCode > 96 && event.charCode < 123)" value="'.$_SESSION['firstname'].'" />';
				echo '<div id="unFeedbackFN"></div>';
				echo '</div>';
			}
			else
			{
				echo '<div class="form-group has-success">';
				echo '<label class="control-label" for="firstname">First name: </label>';
				echo '<input type="text" id="firstname" name="firstname" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.		[a-z]{2,3}$" onkeypress="return (event.charCode > 64 && event.charCode < 91) || 				(event.charCode > 96 && event.charCode < 123)" />'; //Prevent user from typing wrong characters
				echo '<div id="unFeedbackFN"></div>';
				echo '</div>';
		}
		}
		//Last Name error checking code
		if (isset($_GET['errMsg']) && strstr($_GET['errMsg'],"lastNameNull"))
		{
			echo '<div class="form-group has-error">';
			echo '<label class="control-label" for="lastname">Last name: </label>';
			echo '<input type="text" id="lastname" name="lastname" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" />'; //Prevent user from typing wrong characters for their name
			echo '<div id="unFeedbackLN">Last name cannot be blank!</div> ';
		}
		else
		{
			if (isset($_SESSION['lastname'])&& $_SESSION['lastname']!="")
			{
			echo '<div class="form-group has-success">';
			echo '<label class="control-label" for="lastname">Last name: </label>';
			echo '<input type="text" id="lastname" name="lastname" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" value="'.$_SESSION['lastname'].'" />'; //Prevent user from typing wrong characters
			echo '<div id="unFeedbackLN"></div> ';
			echo '</div>';
			}
			else
			{
			echo '<div class="form-group has-success">';
			echo '<label class="control-label" for="lastname">Last name: </label>';
			echo '<input type="text" id="lastname" name="lastname" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" />'; //Prevent user from typing wrong characters
			echo '<div id="unFeedbackLN"></div> ';
			echo '</div>';
			}
		}
			if (isset($_Get['errMsg']) && strstre($_GET['errMsg'],"emailNull"))
			{
			echo '<div class="form-group has-error">';
			echo '<label class="control-label" for="email">Email: </label>';
			echo '<input type="text" class="form-control" name="email" id="email" />';
			echo '<div id="unFeedbackE">Email cannot be blank!</div>';
			echo '</div>';
			}
			else
			{
			echo '<div class="form-group">';
			echo '<label class="control-label" for="email">Email: </label>';
			echo '<input type="text" class="form-control" name="email" id="email" />';
			echo '<div id="unFeedbackE"></div>';
			echo '</div>';
			}
		
			echo '<div class="form-group">';
			echo '<label class="control-label" for="phone">Phone: </label> ';
 			echo '<input type="text" pattern="\d{10}" name="phone" onkeypress="return (event.charCode == 8 		|| event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" 			maxlength="10" id="phone" /> '; //Prevent user from typing wrong characters
			echo '<div id="unFeedbackP">Phone number cannot be blank!</div>';
			echo '</div>';
		
			echo '<div class="form-group">';
			echo '<label for="username">Create a username: </label>';
			echo '<input type="text" class="form-control" name="username" id="username" />';
			echo '<div id="unFeedback">Username cannot be blank!</div>';
			echo '</div>';
			
			echo '<div class="form-group">';
			echo '<label for="password">Create a password: </label>';
			echo '<input type="password" class="form-control" name="password" id="password" />';
			echo '<div id="pwFeedback"></div>';
			echo '</div>';
		
			echo '<div class="form-group">';
			echo '<label for="comments">Comments: </label>';
			echo '<textarea class="form-control" name="comments" id="comments"></textarea>';
			echo '<div id="unFeedbackC"></div>';
			echo '</div>';
	echo '<div class="form-group">';
	echo '<input type="submit" name="submit" />';
	echo '</div>';
	echo '</form>';
		}
		else
		{
			//clear out all previous data
			$errors=""; //clear out all previous errors
			$_SESSION['firstname']=""; //clear out any previous session data
			$_SESSION['lastname']=""; //clear out any previous session data
			$_SESSION['email']=""; //clear out any previous session data
			$_SESSION['phone']=""; //clear out any previous session data
			//begin processing newly submitted data
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$comments=addslashes($_POST['comments']);
			if ($firstname==NULL)
				$errors.="firstNameNull";
			elseif (!ctype_alpha($firstname))
				$errors.="firstNameInvalidChar";
			else
				$_SESSION['firstname']=$firstname;
			if ($lastname==NULL)
				$errors.="lastNameNull";
			elseif (!ctype_alpha($lastname))
				$errors.="lastNameInvalidChar";
			else
				$_SESSION['lastname']=$lastname;
			if ($email==NULL)
				$errors.="emailNull";
			else
				$_SESSION['email']=$email;
			if ($phone==NULL)
				$errors.="PhoneNUll";
			else
				$_SESSION['phone']=$phone;
			if ($username==NULL)
				$errors.="usernameNull";
			elseif (!ctype_alpha($username))
				$errors.="usernameInvalidChar";
			else
				$_SESSION['username']=$username;
			
			if ($errors!=NULL)
				redirect("contact.php?errMsg=$errors");
			else
			{
				$dblink=db_connect("contact_data");
				$sql="Insert into `contact_info` (`first_name`,`last_name`,`email`,`phone`,`username`,`password`,`comments`) values ('$firstname','$lastname','$email','$phone','$username','$password','$comments')";
				$dblink->query($sql) or
					die("<h2>Something went wrong with: $sql<br>".$dblink->error.'</h2>');
				echo '<h2>Your data has been saved successfully.</h2>';
			}
		}
	?>
</section>
<section>
	<script src="assets/js/event-listener.js"></script>
</section>