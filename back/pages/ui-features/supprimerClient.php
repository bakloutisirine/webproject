<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_POST["email"])){
	$clientC->supprimerClient($_POST["email"]);
	header('Location: afficherClient.php');
}

?>