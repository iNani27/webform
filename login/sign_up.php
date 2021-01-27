<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>formulaire - Inscription</title>
	</head>
	<body>
		<form action="sign_in.php" method="post">
		
			<input type="text" 
			name="pseudo" 
			placeholder="Votre pseudo" 
			>
			
			<!-- A form with an email field that that must be in the following order: 
characters@characters.domain (characters followed by an @ sign, followed by more characters, 
and then a ".". After the "." sign, add at least 2 letters from a to z -->
			<input type="email" 
			name="email" required 
			placeholder="Votre addresse mail" 
			pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
			>

			<input type="password" 
			name="pass" required 
			placeholder="Votre mot de passe" 
			pattern=".{8,}" title="8 or more characters">
		
		
			<input type="submit" name="sign up" value="sign up">
			<input type="hidden" name="date_inscription" value="<?php echo date('d/m/Y h:i:s'); ?>" />
			
		</form>
	</body>
</html>