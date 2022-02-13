<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style_register.css">
	</head>
	<body>
		<div class="container">
			<div class="inner">
				<form action="../controller/security.php" method="POST">
					<h3>Contact Us</h3>
					<p>Compte de connexion.</p>
					<label class="form_label">
						<input type="text" class="input" name="nom" >
						<span>Nom</span>
						<p class="message"><?php if (isset($_SESSION['champsVide'])) {
							echo $_SESSION['champsVide'];
						}else {
							echo 'champs obligatoire';
						}?></p>
						<span class="border"></span>
					</label>
					<label class="form_label">
						<input type="text" class="input" name="prenom">
						<span>Prenom</span>
						<p class="message"><?php if (isset($_SESSION['champsVide'])) {
							echo $_SESSION['champsVide']; 
						} else {
							echo 'champs obligatoire';
						}?></p>
						<span class="border"></span>
					</label>
					<label class="form_label">
						<input type="mail" class="input" name="login">
						<span>Login</span>
						<p class="message"><?php if (isset($_SESSION['champsVide'])) {
							echo $_SESSION['champsVide'];
						}else {
							echo 'champs obligatoire';
						}?></p>
						<span class="border"></span>
					</label>
					<label class="form_label">
						<input type="password" class="input" name="pass">
						<span>Password</span>
						<p class="message"><?php if (isset($_SESSION['champsVide'])) {
							echo $_SESSION['champsVide'];
						}else {
							echo 'champs obligatoire';
						}?></p>
						<span class="border"></span>
					</label>
					<label class="form_label">
						<input type="password" class="input" name="confpass">
						<span for="">Confirm password</span>
						<p class="message"><?php if (isset($_SESSION['champsVide'])) {
							echo $_SESSION['champsVide']; 
						}else {
							echo 'champs obligatoire';
						}?></p>
						<span class="border"></span>
					</label>
					<label class="form_label">
						<input type="text" class="input" name="role" placeholder="Admin ou Visiteur">
						<span>Role</span>
						<p class="message"><?php if (isset($_SESSION['champsVide'])) {
							echo $_SESSION['champsVide'];
						}else {
							echo 'champs obligatoire';
						}?></p>
						<span class="border"></span>
					</label>
					<button name="btn">Inscrire 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>