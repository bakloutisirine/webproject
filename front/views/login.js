function connexion()
{
  var email=f.motdepasse.value;
  var motdepasse=f.motdepasse.value;
  if ((email.length==0)||(motdepasse.length==0))
    alert("Veuillez saisir vos identifiants");
  else
  {
    if (email.indexOf("@")==-1) 
      {
        alert("Veuillez inclure @ dans l'adresse e-mail");
      }
      if (email.indexOf(".")==-1)
      {
        alert("Veuillez inclure le . dans l'adresse e-mail");
      }
    var position_pt=email.indexOf(".");
    var position_a=email.indexOf("@");
    var prenom=email.substring(0,position_pt);
    var nom=email.substring(position_pt+1,position_a);
    alert("Bienvenue "+prenom+" "+nom);
    window.location="index.html";
  } 
}