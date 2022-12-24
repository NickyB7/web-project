<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Action Menu Button</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="action">
		<div class="profile" onclick="menuToggle();">
			<img src="img.jpg">
		</div>
		<div class="menu">
			<h3>Nyeri<br><span>KIIT Website Designer</span></h3>
			<ul>
				<li><img src="profile.png"><a href="#">My Profile</li>
				<li><img src="edit.png"><a href="#">Edit Profile</li>
				<li><img src="inbox.png"><a href="#">Inbox</li>
				<li><img src="setting.png"><a href="#">Settings</li>
				<li><img src="help.png"><a href="#">Help</li>
				<li><img src="logout.png"><a href="#">Logout</li>
			</ul>
		</div>
	</div>
<script type="text/javascript">
	function menuToggle(){
		const toggleMenu = document.querySelector('.menu');
		toggleMenu.classList.toggle('active');
	}
</script>
</body>
</html>