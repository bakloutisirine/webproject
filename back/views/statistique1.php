<?php
require_once  '../config.php';
$db=config::getConnexion();
  
    $req5= $db->query("SELECT  COUNT(*) as nbf  from client " );
    $nbf= $req5->fetch();

    $req1= $db->query("SELECT COUNT(*) as nb1 FROM client WHERE pays='tunisie'  " );
    $nb1 = $req1->fetch();
     

    $req2= $db->query("SELECT COUNT(*) as nb2 FROM client WHERE pays='france' " );
    $nb2 = $req2->fetch();

    $req3= $db->query("SELECT COUNT(*) as nb3 FROM client WHERE pays='maroc'  " );
    $nb3 = $req3->fetch();
       
    $req4= $db->query("SELECT COUNT(*) as nb4 FROM client WHERE pays='algerie' ");
    $nb4 = $req4->fetch();

    $req6= $db->query("SELECT COUNT(*) as nb6 FROM client WHERE pays='italie' ");
    $nb6 = $req6->fetch();
    
    $dataPoints = array(
    array("label"=> ("Tunisie"),"y"=>intval($nb1['nb1'])),
    array("label"=> ("France"),"y"=> intval($nb2['nb2'])),
    array("label"=> ("Maroc"),"y"=> intval($nb3['nb3'])),
    array("label"=> ("Algerie"),"y"=> intval($nb4['nb4'])),
    array("label"=> ("Italie"),"y"=> intval($nb6['nb6'])),
    );
    ?>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Statistique des pays"
  },
  data: [{
    type: "bar", //change type to bar, line, area, pie, etc
    //indexLabel: "{y}", //Shows y value on all Data Points
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",   
    startAngle: 25,
    toolTipContent: "<b>{label}</b>: {y}",
    //showInLegend: "true",
    legendText: "{label}",
    indexLabelFontSize: 16,
    indexLabel: "{label} - {y}",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>

<div class="agile-grids"> 
<div id="chartContainer" style="height: 370px; width: 83%; margin-left: 20px" align="center"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
<script>
    $(document).ready(function() {
       var navoffeset=$(".header-main").offset().top;
       $(window).scroll(function(){
        var scrollpos=$(window).scrollTop(); 
        if(scrollpos >=navoffeset){
          $(".header-main").addClass("fixed");
        }else{
          $(".header-main").removeClass("fixed");
        }
       });
       
    });
</script>
