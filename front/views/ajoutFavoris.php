<?PHP
include "../entities/favoris.php";
include "../core/FavorisC.php";
include "../entities/hotel.php";
include "../core/HotelC.php";
session_start (); 
if (isset($_GET['id'])){
//$idH=recupererId($_GET['id']);
$favoris1C=new FavorisC();
$favoris1=new favoris(0,$_GET['id'],$_SESSION['idClient']);
//var_dump($favoris1);
$favoris1C->ajouterFavoris($favoris1);
header('location:favoris.php');
}else{
	echo "vérifier les champs";
}
?>