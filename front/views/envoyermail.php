<?php
include "../entities/client.php";
include "../core/clientC.php";
include "../entities/carte.php";
include "../core/carteC.php";
$id=recupererId();
$idC=recupererIdC();
//$Mail=recupererMail($id);
?>
<!doctype html>
<head>
        <link rel='stylesheet' type='text/css' href='styles/main_styles.css'>
</head>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
<title></title>
<!--[if !mso]> -->
<meta http-equiv='X-UA-Compatible' content='IE=edge'><!--<![endif]--><meta http-equiv='Content-Type' content='text/html', charset='UTF-8'><meta name='viewport' content='width=device-width,initial-scale=1'><style type='text/css'>#outlook a { padding:0; }
    .ReadMsgBody { width:100%; }
    .ExternalClass { width:100%; }
    .ExternalClass * { line-height:100%; }
    body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
    table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
    img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
    p { display:block;margin:13px 0; }</style><!--[if !mso]><!--><style type='text/css'>@media only screen and (max-width:480px) {
      @-ms-viewport { width:320px; }
      @viewport { width:320px; }
    }</style><!--<![endif]--><!--[if mso]>
  <xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
  </xml>
  <![endif]--><!--[if lte mso 11]>
  <style type='text/css'>
    .outlook-group-fix { width:100% !important; }
  </style>
  <![endif]--><style type='text/css'>@media only screen and (min-width:480px) {
  .mj-column-per-100 { width:100% !important; max-width: 100%; }
}</style><style type='text/css'>@media only screen and (max-width:480px) {
table.full-width-mobile { width: 100% !important; }
td.full-width-mobile { width: auto !important; }
}</style></head><body style='background-color:#F4F4F4;'>
<form><div style='background-color:#F4F4F4;'>
<!--[if mso | IE]><table align='center' border='0' cellpadding='0' cellspacing='0' class='' style='width:600px;'
     width='600' ><tr><td style='line-height:0px;font-size:0px;mso-line-height-rule:exactly;'><![endif]-->
<div style=	'background: linear-gradient(to right, #61798c, #226694);
;Margin:0px auto;max-width:600px;'>
<table align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='background: linear-gradient(to right, #61798c, #226694);width:100%;'>
    <tbody><tr><td style='direction:ltr;font-size:0px;padding:5px 0;text-align:center;vertical-align:top;'>
<!--[if mso | IE]><table role='presentation' border='0' cellpadding='0' cellspacing='0'><tr><td class='' style='vertical-align:
    top;width:600px;' ><![endif]--><div class='mj-column-per-100 outlook-group-fix' style='font-size:13px;text-align:left;direction
    :ltr;display:inline-block;vertical-align:top;width:100%;'><table border='0' cellpadding='0' cellspacing='0' role='presentation'
style='vertical-align:top;' width='100%'><tr><td align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'>
<table border='0' cellpadding='0' cellspacing='0' role='presentation' style='border-collapse:collapse;border-spacing:0px;'>
<tbody><tr><td style='width:128px;'><img center 
src='images/logo.png' style='border:0;display:block;
outline:none;text-decoration:none;height:auto;width:200%;' width='200'></td></tr></tbody></table></td></tr></table>
</div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr>
</table><table align='center' border='0' cellpadding='0' cellspacing='0' class='' style='width:600px;' width='600' >
    <tr><td style='line-height:0px;font-size:0px;mso-line-height-rule:exactly;'><![endif]-->
<div style='background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;'>
<table align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' 
style='background:#ffffff;background-color:#ffffff;width:100%;'><tbody><tr><td 
    style='direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;'>
    <!--[if mso | IE]><table role='presentation' border='0' cellpadding='0' cellspacing='0'>
<tr><td class='' style='vertical-align:top;width:600px;' ><![endif]-->
<div class='mj-column-per-100 outlook-group-fix' style='font-size:13px;text-align:left;
direction:ltr;display:inline-block;vertical-align:top;width:100%;'><table border='0' 
cellpadding='0' cellspacing='0' role='presentation' style='vertical-align:top;' 
width='100%'><tr><td align='center' style='font-size:0px;padding:10px 
25px;word-break:break-word;'><table border='0' cellpadding='0' cellspacing='0' 
role='presentation' style='border-collapse:collapse;border-spacing:0px;'><tbody>
    <tr><img src='images/index.png' style='border:0;display:block;
        outline:none;text-decoration:none;height:auto;width:85%;' width='25'>></tr>
<tr><td><div style='font-family:Arial, sans-serif;font-size:15px;line-height:22px;text-align:center;color:#61798c;'><h5>Bienvenue Chér Client, <br> votre Id client est Cl_<?php  echo $id;?> et l'dentifiant de votre carte est C_<?php  echo $idC; ?><br>
        Vous venez de s'inscrire dans notre site web. <br>Veuillez confirmer votre compte.</h5></div></td> 
         ></tr></tbody></table></td></tr>
         <tr>
             <td align='center' style='background:#ffffff;font-size:0px;padding:10px 25px;word-break:break-word;'>
                <table border='0'  cellpadding='0' cellspacing='0' role='presentation' style='border-collapse:collapse;border-spacing:0px;'>
                    <tbody>
                        <tr>
                        <td >
                    <input type="button" class='button search_button' name="confirmer" value="confirmer ">
                     </td></tr></tbody></table></td></tr></table></div><!--[if mso | IE]></td></tr></table>
                        <![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align='center'
                             border='0' cellpadding='0' cellspacing='0' class='' style='width:600px;' width='600' ><tr>
                                 <td style='line-height:0px;font-size:0px;mso-line-height-rule:exactly;'><![endif]-->
                                    <div style='background:#ffffff;background-color:#ffffff;Margin:0px auto;max-width:600px;'>
                                        <table align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' 
                                        style='background:#ffffff;background-color:#ffffff;width:100%;'><tbody><tr><td 
                                            style='direction:ltr;font-size:0px;padding:20px 0px 20px 0px;text-align:center;vertical-align:top;'>
<!--[if mso | IE]><table role='presentation' border='0' cellpadding='0' cellspacing='0'><tr><td class='' style='vertical-align:top;width:600px;' ><![endif]--><
div class='mj-column-per-100 outlook-group-fix' style='font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;'>
<table border='0' cellpadding='0' cellspacing='0' role='presentation' style='vertical-align:top;' width='100%'><tr><td align='center' style='font-size:0px;padding:0px 25px 0px 25px;word-break:break-word;'>
    <div style='font-family:Arial, sans-serif;font-size:14px;line-height:28px;text-align:center;color:#55575d;'></div></td></tr><tr><td align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'>
        <table border='0' cellpadding='0' cellspacing='0' role='presentation' style='border-collapse:collapse;border-spacing:0px;'><tbody><tr><td style='width:142px;'>
            </td></tr></tbody></table></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr>
            </tbody></table></div><!--[if mso | IE]></td></tr></table><table align='center' border='0' cellpadding='0' cellspacing='0' class='' style='width:600px;' width='600' ><tr><td style='line-height:0px;font-size:0px;mso-line-height-rule:exactly;'><![endif]-->
                <div style='background: linear-gradient(to right, #61798c, #226694);Margin:0px auto;max-width:600px;'><table align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='background: linear-gradient(to right, #61798c, #226694);width:100%;'>
                    <tbody><tr><td style='direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;'><!--[if mso | IE]><table role='presentation' border='0' cellpadding='0' cellspacing='0'><tr><td class='' style='vertical-align:top;width:600px;' >
                        <![endif]--><div class='mj-column-per-100 outlook-group-fix' style='font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;'><table border='0' cellpadding='0' cellspacing='0' role='presentation'
                             style='vertical-align:top;' width='100%'><tr><td align='center' style='font-size:0px;padding:10px 25px;word-break:break-word;'><div style='font-family:Arial, sans-serif;font-size:13px;line-height:22px;text-align:center;color:#ffffff;'>
                                Visitez votre compte sur notre site Web &nbsp;&nbsp;<a style='color:#ffffff' href='file:///C:/wamp64/www/flysyphax/front/views/index.html'><b>FlySyphax</b></a></div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]-->
                            </td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><table align='center' border='0' cellpadding='0' cellspacing='0' class='' style='width:600px;' width='600' ><tr><td style='line-height:0px;font-size:0px;mso-line-height-rule:exactly;'
                                ><![endif]--><div style='Margin:0px auto;max-width:600px;'><table align='center' border='0' cellpadding='0' cellspacing='0' role='presentation' style='width:100%;'><tbody><tr><td style='direction:ltr;font-size:0px;padding:20px 0px 20px 0px;text-align:ce
                                nter;vertical-align:top;'><!--[if mso | IE]><table role='presentation' border='0' cellpadding='0' cellspacing='0'><tr><td class='' style='vertical-align:top;width:600px;' ><![endif]--><div class='mj-column-per-100 outlook-group-fix' style='font-size:13px;t
                                ext-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;'><table border='0' cellpadding='0' cellspacing='0' role='presentation' style='vertical-align:top;' width='100%'><tr><td align='center' style='font-size:0px;padding:0px 20px;word
                                -break:break-word;'><div style='font-family:Arial, sans-serif;font-size:11px;line-height:22px;text-align:center;color:#55575d;'>
        [[FlySyphax]]</div></td></tr></table></div><!--[if mso | IE]></td></tr></table><![endif]--></td></tr></tbody></table></div><!--[if mso | IE]></td></tr></table><![endif]--></div></form></body></html>;
      <?php  
       if (isset($_GET['confirmer']))
        {
            //$Mail=recupererMail($id);
            $to='baklouti.cyrine1@gmail.com';
            $text="Un nouveau client vient de s'inscrire dans votre site web flysyphax dont sa référence est CL_$id et la référence de la carte est C_$idC .";
            $sujet="Nouveau Client";
            $header='From :baklouti.cyrine1@gmail.com';
            mail($to,$sujet,$text,$header);
            if (mail($to,$sujet,$text,$header))
            echo "envoye";
            else echo "non ";
            header('location: login.php');

        }
        ?>