<?php 
include_once '../config.php';
class User{
	private $login;
    private $pwd;
	private $idClient;
	private $nom;
	private $prenom;
	private $date_naissance;
	private $email;
	private $civilite;
	private $pays;
	private $numero;
	public $conn;	
	
	public function __construct($login,$pwd,$idClient,$nom,$prenom,$date_naissance,$email,$civilite,$pays,$numero,$conn)
	{
		$this->login=$login;
		$this->pwd=$pwd;
		$this->idClient=$idClient;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->date_naissance=$date_naissance;
		$this->email=$email;
		$this->civilite=$civilite;
		$this->pays=$pays;
		$this->numero=$numero;
		$c=new config();
		$this->conn=$c->getConnexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->pwd;
		
	}
	function getIdClient(){
		return $this->idClient;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getEmail(){
		return $this->email;
	}
	function getDate_naissance(){
		return $this->date_naissance;
	}
	function getCivilite(){
		return $this->civilite;
	}
	function getPays(){
		return $this->pays;
	}
	function getNumero(){
		return $this->numero;
	}
	
	 

}
	
function Logedin($login,$pwd){
	 
	$found = false;
	$db = config::getConnexion();
	$sql = "select * from client where email = '$login' and motdepasse = '$pwd';";
	try{
	$liste=$db->query($sql);
	foreach($liste as $row){ $found = $row;  }
	return $found; 
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	
}

	?>