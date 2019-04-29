function test()
{ 
var nom= f.nom.value;
var prenom= f.prenom.value;
var civilite =f.prenom.value;
var email = f.email.value;
var motdepasse = f.motdepasse.value;
var a = "@";
var pt = ".";
if( email.length== 0 || motdepasse.length== 0)
    {
    alert("Vérifier votre login et votre de mot de passe");
    }
else
    {
    var prenom = email.substring(0,email.indexOf(pt) );
    var nom = email.substring(email.indexOf(pt) + 1,email.indexOf(a));
    alert('Bienvenue ' + prenom + " " + nom ) ;
    window.location="index.html";
    }
}