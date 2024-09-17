<?php
function db_connect($db)
{
	$dbusername="webuser";
	$dbpassword="1GMdjhZ/Gea-wInM";
	$host="localhost"; //change host to appropriate db server
	$dblink=new mysqli($host,$dbusername,$dbpassword,$db);
	return $dblink;
}

function redirect ( $uri )
{ ?>
	<script type="text/javascript">
	document.location.href="<?php echo $uri; ?>";
	</script>
<?php die;
}
?>