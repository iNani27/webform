<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>formulaire - Déconnexion</title>
	</head>
	<body>
	<p>Salut&nbsp;
	<?php echo htmlspecialchars($_POST['pseudo']); ?> 
	</p>
		<form action="anonym.php" method="post">
			<input type="submit" name="sign out" value="sign out">
		</form>
	</body>
</html>