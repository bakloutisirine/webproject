<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/client.php";
include "../core/clientC.php";
if (isset($_GET['email'])){
	$clientC=new ClientC();
    $result=$clientC->recupererClient($_GET['email']);
	foreach($result as $row){
		$nom=$row['nom'];
    $prenom=$row['prenom'];
    $date_naissance=$row['date_naissance'];
		$email=$row['email'];
		$civilite=$row['civilite'];
		$pays=$row['pays'];
		$numero=$row['numero'];
		$motdepasse=$row['motdepasse'];
?>
<form method="POST">
<table>
<caption>Modifier Client</caption>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prénom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>E_mail</td>
<td><input type="email" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>Civilité</td>
<div class ="civilite">
      <input type="radio" name="civilite" value="<?PHP echo $civilite ?>"required/>
		  <label >M.(MR)</label> 
		  <input type="radio" name="civilite" value="<?PHP echo $civilite ?>" required/>
		  <label >Mme</label> 
          <br>
        </div>
</tr>
<input class="date" name="date_naissance" type="date" value="<?PHP echo $date_naissance ?>"required/>
          <br><br>
          <select class ="P" name="pays" value="<?PHP echo $pays ?>"required >
            <option value="Tunisie">Tunisie</option>
            <option value="Maroc">Maroc</option>
            <option value="Algérie">Algérie</option>
            <option value="France">France</option>
            <option value="Italie">Italie</option>
       </select>
       <br><br>
          <select class ="I" name="indicatif_pays" required>
                <option value="Tunisie(+216)">Tunisie(+216)</option>
                <option value="Maroc(+212)">Maroc(+212)</option>
                <option value="Algérie(+213)">Algérie(+213)</option>
                <option value="France(+33)">France(+33)</option>
                <option value="Italie">Italie(+39)</option>
           </select>
           <input class="numero" name="numero" placeholder="Numéro de téléphone" value="<?PHP echo $numero ?>"required>
        <input class="pwd" name="motdepasse" placeholder="Mot de passe" value="<?PHP echo $motdepasse ?>"required>
        <br><br>
        <input class="pwd" name="motdepasse" placeholder="Confirmer votre mot de passe" value="<?PHP echo $motdepasse ?>" required>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="email" value="<?PHP echo $_GET['email'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$client=new client($_POST['nom'],$_POST['prenom'],$_POST['date_naissance'],$_POST['email'],$_POST['civilite'],$_POST['pays'],$_POST['numero'],$_POST['motdepasse']);
	$clientC->modifierClient($client,$_POST['email']);
	echo $_POST['email'];
	header('Location: afficherClient.php');
}
?>
</body>
</HTMl>