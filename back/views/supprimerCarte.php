<?PHP
include "../core/carteC.php";
$carteC=new CarteC();
if (isset($_GET["id"])){
	$carteC->supprimerCarte($_GET["id"]);
	header('Location: afficherCarte.php');
}

?>