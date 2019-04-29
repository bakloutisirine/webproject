<?PHP
include "../entities/carte.php";
include "../core/carteC.php";

if (isset($_POST['nbPoint']) and isset($_POST['dateExpiration'])){
$carte1=new carte(0,,$_POST['nbPoint'],$_POST['dateExpiration']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$carte1C=new CarteC();
$carte1C->ajouterCarte($carte1);
echo "p";
}else{
	echo "vérifier les champs";
}
?>