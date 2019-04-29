<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_GET["idClient"])){
	$clientC->supprimerClient($_GET["idClient"]);
	header('Location: afficherClient.php');
}

?>