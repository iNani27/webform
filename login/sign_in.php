<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>formulaire - Connexion</title>
	</head>
	<body>
		<form action="sign_out.php" method="post">
			<input type="text" 
			name="pseudo"   
			placeholder="Votre pseudo"
			>

			<input type="email" 
			name="email" required  
			placeholder="Votre addresse mail"
			>
			<br />	
	
			<input type="password" 
			name="pass" required 
			placeholder="Votre mot de passe"
			>
			<br />
			<input type="submit" name="sign in" value="sign in">
			
		</form>
	</body>
</html>