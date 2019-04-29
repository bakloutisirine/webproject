<?PHP
include "../core/ClientC.php";
$Client1C=new ClientC();
$listeClient=$Client1C->afficherClients();

//var_dump($listeClients->fetchAll());
?>
<table border="1">
<tr>
<td>ID Client</td>
<td>Nom</td>
<td>Prenom</td>
<td>Date de naissance</td>
<td>E_mail</td>
<td>Cvilité</td>
<td>Pays</td>
<td>Numéro</td>
</tr>

<?PHP
foreach($listeClient as $row){
	?>
	<tr>
	<td><?PHP echo $row['idClient']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['date_naissance']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['civilite']; ?></td>
	<td><?PHP echo $row['pays']; ?></td>
	<td><?PHP echo $row['numero']; ?></td>
	<td><!--<form method="POST" action="supprimerClient.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['email']; ?>" name="email">
	</form>-->
	<a href=supprimerClient.php?idClient=<?=$row['idClient'];?> > supp </a>
	</td>
	<td><a href="modifierClient.php?email=<?PHP echo $row['email']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


