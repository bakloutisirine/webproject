<?PHP
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['civilite']) and isset($_POST['date_naissance']) and isset($_POST['email']) and isset($_POST['pays']) and isset($_POST['numero'])and isset($_POST['motdepasse'])){
$client1=new client($_POST['nom'],$_POST['prenom'],$_POST['civilite'],$_POST['date_naissance'],$_POST['email'],$_POST['pays'],$_POST['numero'],$_POST['motdepasse']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$client1C=new ClientC();
$client1C->ajouterClient($client1);
echo "p";
	
}else{
	echo "vérifier les champs";
}
//*/

?>