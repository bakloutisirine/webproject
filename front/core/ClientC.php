<?PHP
include_once "../config.php";
class ClientC {
function afficherClient ($client){
		echo "Nom: ".$client->getNom()."<br>";
		echo "Prénom: ".$client->getPrenom()."<br>";
		echo "Date_naissance: ".$client->getDate_naissance()."<br>";
		echo "E_mail: ".$client->getEmail()."<br>";
		echo "Civilité:".$client->getCivilite()."<br>";
		echo "Pays: ".$client->getPays()."<br>";
		echo "Numéro: ".$client->getNumero()."<br>";
	}
	//function calculerSalaire($employe){
	//	echo $employe->getNbHeures() * $employe->getTarifHoraire();
	
	function ajouterClient($client){
		$sql="INSERT into client (nom,prenom,date_naissance,email,civilite,pays,numero,motdepasse) values (:nom,:prenom,:date_naissance,:email,:civilite,:pays,:numero,:motdepasse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$client->getNom();
		$prenom=$client->getPrenom();
		$date_naissance=$client->getDate_naissance();
		$email=$client->getEmail();
		$civilite=$client->getCivilite();
		$pays=$client->getPays();
		$numero=$client->getNumero();
		$motdepasse=$client->getMotdepasse();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date_naissance',$date_naissance);
		$req->bindValue(':email',$email);
		$req->bindValue(':civilite',$civilite);
		$req->bindValue(':pays',$pays);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':motdepasse',$motdepasse);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherClients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($idClient){
		$sql="DELETE FROM client where idClient= :idClient";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idClient',$idClient);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
	function modifierclient($client,$idClient){
		$sql="UPDATE client SET  nom=:nom,prenom=:prenom,date_naissance=:date_naissance,email=:email,civilite=:civilite,pays=:pays,numero=:numero,motdepasse=:motdepasse WHERE idClient=:idClient";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$idClient=$client->getIdClient();
		$nom=$client->getNom();
		$prenom=$client->getPrenom();
		$date_naissance=$client->getDate_naissance();
		$email=$client->getEmail();
        $civilite=$client->getCivilite();
		$pays=$client->getPays();
		$numero=$client->getNumero();
		$motdepasse=$client->getMotdepasse();
		var_dump($idClient);
		var_dump($nom);
		$datas = array(':idClient'=>$idClient,':nom'=>$nom,':prenom'=>$prenom,'date_naissance'=>$date_naissance,':email'=>$email,':civilite'=>$civilite,':pays'=>$pays,':numero'=>$numero,':motdepasse'=>$motdepasse);
		$req->bindValue(':idClient',$idClient);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':date_naissece',$date_naissance);
		$req->bindValue(':email',$email);
		$req->bindValue(':civilite',$civilite);
		$req->bindValue(':pays',$pays);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':motdepasse',$motdepasse);
			$s=$req->execute();
			var_dump($nom);
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
			echo " Les datas : " ;
			print_r($datas);			
        }
		
	}
	function recupererClient($idClient){
		$sql="SELECT * from client where idClient=$idClient";
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
function recupererId(){
	$sql="select max(idClient) maximum from client ";
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
	 function recupererMail($idClient){
		$sql="select 'email' from client where idClient=$idClient ";
		 $db = config::getConnexion();
		 try{
		 $liste=$db->query($sql);
		  foreach($liste as $row){$email=$row['email'] ;}
		  return $email;
		 }
		 catch (Exception $e){
			 die('Erreur: '.$e->getMessage());
		 }	
		 }
?>