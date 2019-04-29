<?PHP
include "../entities/client.php";
include "../core/clientC.php";
include "../entities/carte.php";
include "../core/carteC.php";
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['date_naissance']) and isset($_POST['email']) and isset($_POST['civilite']) and isset($_POST['pays']) and isset($_POST['numero']) and isset($_POST['motdepasse'])){
$client1=new client(0,$_POST['nom'],$_POST['prenom'],$_POST['date_naissance'],$_POST['email'],$_POST['civilite'],$_POST['pays'],$_POST['numero'],$_POST['motdepasse']);

$client1C=new ClientC();
$client1C->ajouterClient($client1);
//echo "p";
}else{
	echo "vérifier les champs";
}
$carte1=new carte(0,$client1C->getIdClient(),1000,2014-04-20);
$carte1C=new CarteC();
$carte1C->ajouterCarte($carte1);
//echo "p";
}else{
	echo "vérifier les champs";

?>