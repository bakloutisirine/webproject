<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['email']) && isset($_SESSION['motdepasse'])) 
{ 

	 echo 'Votre login est <b>'.$_SESSION['email'].'</b> <br>et votre mot de passe est <b>'.$_SESSION['motdepasse'].
	'</b><br>Votre id est : '.$_SESSION['idClient'].' <br/> Identifiant de la session est :'.session_id().'</br>';
	 
	echo '<a href="./logout.php">Cliquer pour se déconnecter</a>';

}

else { 
      echo 'Veuillez vous connecter </br>';  
	  echo '<a href="./login.php">Cliquer pour se connecter</a>';

}  
//définir la session une session est un tableau temporaire 
//1 er point c quoi une session
// 
?>