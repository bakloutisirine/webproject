<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include 'User.php';
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new config();
$conn=$c->getConnexion();
if (!empty($_POST['login']) && !empty($_POST['pwd'])){


	$co=Logedin($_POST['login'],$_POST['pwd']);
	var_dump($co);
	if ($co!=false){
		session_start();
		$_SESSION['email']=$co['email'];
		$_SESSION['motdepasse']=$co['motdepasse'];
		$_SESSION['idClient']=$co['idClient'];
		$_SESSION['nom'] = $co['nom'];
		$_SESSION['prenom'] = $co['prenom'];
		$_SESSION['numero'] = $co['numero'];
		$_SESSION['date_naissance'] = $co['date_naissance'];
		$_SESSION['civilite'] = $co['civilite'];
		$_SESSION['pays'] = $co['pays'];
		 
		header('location: connecte.php');
	

	}
else { 
	// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
	echo 'non reconnu'; 

 }


}
/*var_dump($u);
$logR=$_POST['login'];
$pwdR=$_POST['pwd'];*/
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="login.php">Retour au formulaire</a><?php 
}  

?> 
</body>
</html>