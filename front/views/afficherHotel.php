<?PHP
include "../core/HotelC.php";
session_start (); 
$Hotel1C=new HotelC();
$listeHotel=$Hotel1C->afficherHotels();

//var_dump($listeClients->fetchAll());
?>
<table border="1">
<tr>
<td>ID Hotel</td>
<td>Nom</td>
</tr>

<?php
foreach($listeHotel as $row){
?>
	<tr>
	<td><?PHP echo "H_".$row['idHotel']; ?></td>
	<td><?PHP echo $row['nomH']; ?></td>
	<td><a href="ajoutFavoris.php?id=<? echo $row['idHotel'];?>">favoris</a>
	</td>
	</tr>
	<?PHP
}
?>
</table>


