<?PHP
include "../core/clientC.php";
$clientC=new ClientC();
if (isset($_GET["id"])){
	$clientC->supprimerClient($_GET["id"]);
	header('Location: afficherClient.php');
}
?>

