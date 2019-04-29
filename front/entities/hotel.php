<?PHP
class hotel{
	private $idHotel;
	private $nomH;
	function __construct($idHotel,$nomH){
		$this->idHotel=$idHotel;
		$this->nomH=$nomH;
	}
	function getIdHotel(){
		return $this->idHotel;
	}
	function getNomH(){
		return $this->nomH;
	}
	
}
?>