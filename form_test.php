<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom et tester les différent champs du formulaire au formulaire :
</p>

<form action="cible.php" method="post">
	<p>
		<input type="text" name="prenom" />
		<input type="submit" value="Valider" />
	</p>

	<!--GRande zone de texte -->
	<textarea name="message" rows="8" cols="45">
	Votre message ici.
	</textarea>

	<!--liste déroulante-->
	<select name="choix">
		<option value="choix1">Choix 1</option>
		<option value="choix2">Choix 2</option>
		<option value="choix3">Choix 3</option>
		<option value="choix4">Choix 4</option>
	</select>
	
	<!--Cases à cocher -->
	<input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label>
	<!--Radio btn - bouton d'option-->
	Question ?
	<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
	<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
	<input type="hidden" name="pseudo" value="xxx" />

</form>
