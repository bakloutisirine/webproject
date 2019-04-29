<?PHP
//include "../entities/client.php";
include "../core/clientC.php";
//include "../entities/carte.php";
include "../core/carteC.php";
session_start();
$idcarte=recupererIdCC($_SESSION['idClient']);
$P=recupererP($idcarte);
if(isset($_GET['search'])){
incrementerP(2000,$idcarte,$P);
header('Location: connecte.php');
}else{
	echo "vérifier les champs";
}
?>