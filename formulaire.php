<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
		<title>Portfolio</title>

		<!-- Google materials -->

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<a href="formulaire.php?nom=Dupont&amp;prenom=Jean&amp;repeter=3">Dis-moi bonjour !<br></a>

	<?php
	if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']) AND $_GET['repeter'] = (int) $_GET['repeter'] AND $_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100)
	{
		for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
		{
			echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
		}
	}
	else
	{
	   echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
	}
	?>
		<p>
		    Cette page ne contient que du HTML.<br />
		    Veuillez taper votre prénom :
		</p>
	<form method="post" action="cible.php" enctype="multipart/form-data">
 
	<p>
		<input type="text" name="prenom" />

		<textarea name="message" rows="8" cols="45">
		Votre message ici.
		</textarea>

		<select name="choix">
	    <option value="choix1" selected="selected">Choix 1</option>
	    <option value="choix2">Choix 2</option>
	    <option value="choix3">Choix 3</option>
	    <option value="choix4">Choix 4</option>
		</select>

    	<input type="submit" value="Valider" />
		
        <form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        	<p>	
	           	Formulaire d'envoi de fichier :<br />
		        <input type="file" name="monfichier" /><br />
		        <input type="submit" value="Envoyer le fichier" />
	        </p>
        </form>

    	
	</p>
	 
	</form>

	
</body>
</html>