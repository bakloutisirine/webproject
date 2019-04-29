<?PHP
include_once "../config.php";
class CarteC {
function afficherCarte ($carte){
		echo "ID Carte :".$carte->getIdCarte()."<br>";
		echo "ID Client:".$carte->getIdC()."<br>";
		echo "Nombre de points:".$carte->getNbPoint()."<br>";
		echo "Date d'expiration:".$carte->getDateExpiration()."<br>";
	}
	//function calculerSalaire($employe){
	//	echo $employe->getNbHeures() * $employe->getTarifHoraire();
	
	function ajouterCarte($carte){
		$sql="INSERT into carte (idC,nbPoint,dateExpiration) values (:idC,:nbPoint,:dateExpiration)";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);
			$idC=$carte->getIdC();
			$nbPoint=$carte->getNbPoint();
			$dateExpiration=$carte->getDateExpiration();
			//$req->bindValue(':idCarte',$idClient);
			$req->bindValue(':idC',$idC);
			$req->bindValue(':nbPoint',$nbPoint);
			$req->bindValue(':dateExpiration',$dateExpiration);
				$req->execute();
			}
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCartes(){
		$sql="SElECT * From carte  inner join client  on client.idClient= carte.idC";
		//$sql="SElECT * From carte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCarte($idCarte){
		$sql="DELETE FROM carte where idCarte= :idCarte";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCarte',$idCarte);
		try{echo "la vie en rose";
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercarte($carte,$idCarte){
		$sql="UPDATE carte SET  idC=:idC,nbPoint=:nbPoint,dateExpiration=:dateExpiration WHERE idCarte=:idCarte";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
        $req=$db->prepare($sql);
		$idCarte=$carte->getIdCarte();
		$idC=$carte->getIdC();
		$nbPoint=$carte->getNbPoint();
		$dateExpiration=$carte->getDateExpiration();

		$datas = array('idCarte'=>$idCarte,'idC'=>$idC,':nbPoint'=>$nbPoint,':dateExpiration'=>$dateExpiration);
		$req->bindValue(':idCarte',$idCarte);
		$req->bindValue(':idC',$idC);
		$req->bindValue(':nbPoint',$nbPoint);
		$req->bindValue(':dateExpiration',$dateExpiration);
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCarte($idCarte){
		$sql="SELECT * from carte where idCarte=$idCarte";
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
	function recupererIdC(){
		$sql="select max(idCarte) maximum from carte ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		foreach($liste as $row){$id=$row['maximum'] ;}
		return $id;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
	function recupererP($idCarte){
		$sql="select nbPoint from carte where idCarte=$idCarte";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		foreach($liste as $row){$P=$row['nbPoint'] ;}
		return $P;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
	function incrementerP($Point,$idCarte,$P){
		$sql="UPDATE carte SET  nbPoint=:nbPoint WHERE idCarte=:idCarte";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try{		
        $req=$db->prepare($sql);
		$nbPoint=$P+$Point;
		$datas = array('idCarte'=>$idCarte,':nbPoint'=>$nbPoint);
		$req->bindValue(':idCarte',$idCarte);
		$req->bindValue(':nbPoint',$nbPoint);
            $s=$req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
			echo " Les datas : " ;
			print_r($datas); 
	 }
	}

	 function recupererIdCC($idC){
		$sql="SELECT idCarte from carte where idC=$idC ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		foreach($liste as $row){$idcarte=$row['idCarte'];}
		return $idcarte;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
		
	}

?>