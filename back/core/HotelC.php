<?PHP
include_once "../config.php";
class HotelC {
function afficherHotel ($hotel){
		echo "ID Hotel: ".$hotel->getIdHotel()."<br>";
		echo "nom Hotel: ".$client->getNomH()."<br>";
	}
	//function calculerSalaire($employe){
	//	echo $employe->getNbHeures() * $employe->getTarifHoraire();
	
	function ajouterHotel($hotel){
		$sql="INSERT into hotel (nomH) values (:nomH)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$nomH=$hotel->getNomH();
		$req->bindValue(':nomH',$nomH);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherHotels(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From hotel";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerhotel($idhotel){
		$sql="DELETE FROM hotel where idHotel=:idHotel";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idHotel',$idHotel);
		try{echo "la vie en rose";
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierhotel($hotel,$idHotel){
		$sql="UPDATE hotel SET  nomH=:nomH WHERE idHotel:idHotel";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$idHotel=$hotel->getIdHotel();
		$nomH=$hotel->getnomH();
		$datas = array(':idHotel'=>$idHotel,':nomH'=>$nomH);
		$req->bindValue(':idHotel',$idHotel);
		$req->bindValue(':nomH',$nomH);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}

	function recupererHotel($idHotel){
		$sql="SELECT * from hotel where idHotel=$idHotel";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}
?>