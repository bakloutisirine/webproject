<?PHP
include "../core/FavorisC.php";
include "connexion.php";
session_start (); 
$Favoris1C=new FavorisC();
$listeFavoris=$Favoris1C->afficherFavoris();

//var_dump($listeClients->fetchAll());
?>
<table border="1">
<tr>
<td>ID Favoris</td>
<td>ID Client</td>
<td>ID Hotel</td>
</tr>

<?PHP
foreach($listeFavoris as $row){
	?>
	<tr>
	<td><?PHP echo "F_".$row['idFavoris']; ?></td>
	<td><?PHP echo $_session['idClient'] ?></td>
	<td><?PHP echo "H_".$row['idH']; ?></td>
	<td><!--<form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['email']; ?>" name="email">
	</form>-->
	
	</td>
	<!--<td><a href="modifierClient.php?email=<?PHP echo $row['email']; ?>">
	Modifier</a></td>-->
	</tr>
	<?PHP
}
?>
</table>


