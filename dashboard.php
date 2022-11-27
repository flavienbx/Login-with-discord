<?php
session_start();

if(!$_SESSION['logged_in']){
	header('Location: error.php');
	exit();
}
extract($_SESSION['userData']);

$avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg";

?>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		<img src="<?php echo $avatar_url?>" />
		<span><?php echo $name;?>#<?php echo $discriminator;?><br><?php echo $email;?></span>
		<a href="logout.php">Logout</a>
	</body>
</html>