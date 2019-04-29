<?PHP
include "../entities/client.php";
include "../core/clientC.php";
include "../entities/carte.php";
include "../core/carteC.php";
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['date_naissance']) and isset($_POST['email']) and isset($_POST['civilite']) and isset($_POST['pays']) and isset($_POST['numero']) and isset($_POST['motdepasse'])){
$client1=new client(0,$_POST['nom'],$_POST['prenom'],$_POST['date_naissance'],$_POST['email'],$_POST['civilite'],$_POST['pays'],$_POST['numero'],$_POST['motdepasse']);
$client1C=new ClientC();
$client1C->ajouterClient($client1);
$id=recupererId();
$date = date_create(date('Y-m-d'));
date_add($date, date_interval_create_from_date_string('5 years'));
$datelimite=date_format($date, 'Y-m-d');
$carte1=new carte(0,$id,1000,$datelimite);
$carte1C=new CarteC();
$carte1C->ajouterCarte($carte1); 
header('Location: envoyermail.php');
}else{
	echo "vérifier les champs";
}
?>