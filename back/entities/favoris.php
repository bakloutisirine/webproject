<?PHP
class favoris{
	private $idfavoris;
	private $idH;
	private $idC;
	function __construct($idFavoris,$idH,$idC){
		$this->idFavoris=$idFavoris;
		$this->idH=$idH;
		$this->idC=$idC;

	}
	function getIdFavoris(){
		return $this->idFavoris;
	}
	function getIdH(){
		return $this->idH;
	}
	function getIdC(){
		return $this->idC;
	}
	
}
?>