<p>Bonjour !</p>
<!--strip_tags: retirer les balises HTML que le visiteur a tenté d'envoyer   -->
<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo htmlspecialchars($_POST['prenom']); ?> !</p>

<p>Si tu veux changer de prénom, <a href="form_test.php">clique ici</a> pour revenir à la page du fomulaire.</p>
