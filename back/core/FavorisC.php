<?PHP
include_once "../config.php";
class FavorisC {
function afficherFavori($favoris){
		echo "ID Favoris: ".$favoris->getIdFavoris()."<br>";
	}
	//function calculerSalaire($employe){
	//	echo $employe->getNbHeures() * $employe->getTarifHoraire();
	
	function ajouterFavoris($favrois){
		$sql="INSERT into favoris () values ()";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		          
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function afficherFavoris(){
		$sql="SElECT * From favoris  inner join client,hotel on client.idClient= favoris.idC and hotel.idhotel=favoris.idH";
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
	/*function recupererClient($idClient){
		$sql="SELECT * from client where idClient=$idClient";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
?>