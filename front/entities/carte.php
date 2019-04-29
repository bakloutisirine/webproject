<?PHP
class carte{
	private $idCarte;
	private $idC;
	private $nbPoint;
	private $dateExpiration;
	function __construct($idCarte,$idC,$nbPoint,$dateExpiration){
		$this->idCarte=$idCarte;
		$this->idC=$idC;
		$this->nbPoint=$nbPoint;
		$this->dateExpiration=$dateExpiration;
	}
	function getIdCarte(){
		return $this->idCarte;
	}
	function getIdC(){
		return $this->idC;
	}
	function getNbPoint(){
		return $this->nbPoint;
	}
	function getDateExpiration(){
		return $this->dateExpiration;
	}

	function setIdCarte($idCarte){
		$this->idCarte=$idCarte;
	}
	function setIdC($idC){
		$this->idC=$idC;
	}
	function setNbPoint($nbPoint){
		$this->nbPoint=$nbPoint;
	}
	function setDateExpiration($dateExpiration){
		$this->dateExpiration=$dateExpiration;
	}
}
?>