<?PHP
class client{
	private $idClient;
	private $nom;
	private $prenom;
	private $date_naissance;
	private $email;
	private $civilite;
	private $pays;
	private $numero;
	private $motdepasse;
	function __construct($idClient,$nom,$prenom,$date_naissance,$email,$civilite,$pays,$numero,$motdepasse){
		$this->idClient=$idClient;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->date_naissance=$date_naissance;
		$this->email=$email;
		$this->civilite=$civilite;
		$this->pays=$pays;
		$this->numero=$numero;
		$this->motdepasse=$motdepasse;
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
	function getMotdepasse(){
		return $this->motdepasse;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setDate_naissance($date_naissance){
		$this->date_naissance=$date_naissance;
	}
	function setCivilite($civilite){
		$this->civilite=$civilite;
	}
	function setPays($pays){
		$this->pays=$pays;
	}
	function setNumero($numero){
		$this->numero=$numero;
	}
	function setMotdepasse($motdepasse){
		$this->motdepasse=$motdepasse;
	}
	
}

?>