<?PHP
include_once "../config.php";
class FavorisC {
function afficherFavori($favoris){
		echo "ID Favoris: ".$favoris->getIdFavoris()."<br>";
		echo "ID Hotel: ".$favoris->getIdH()."<br>";
		echo "ID Client: ".$favoris->getIdC()."<br>";


	}
	//function calculerSalaire($employe){
	//	echo $employe->getNbHeures() * $employe->getTarifHoraire();

	function ajouterFavoris($favoris){
		$sql="INSERT into favoris (idFavoris,idH,idC) values (NULL,:idH,:idC)";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$idH=$favoris->getIdH();
		$idC=$favoris->getIdC(); 
		$req->bindValue(':idH',$idH);
		$req->bindValue(':idC',$idC);
		$req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherFavoris(){
		$sql="SELECT * From ((favoris  inner join client  on favoris.idC = client.idClient) inner join hotel on  favoris.idH = hotel.idHotel)";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerfavoris($idFavoris){
		$sql="DELETE FROM favoris where idFavoris=:idFavoris";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idFavoris',$idFavoris);
		try{echo "la vie en rose";
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
		
}
function recupererIdFC($idC){
	$sql="SELECT idFavoris from favoris where idC=$idC ";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	foreach($liste as $row){$id=$row['idFavoris'];}
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
	
}
function recupererIdHF($idC){
	$sql="SELECT idH from favoris where idC=$idC ";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

?>