<?php

$PSEUDO1 = "Naru";
$PSEUDO2 = "Obilisk";

$ARME[0] = 0;
$ARME[1] = 1;
$ARME[2] = 2;
$ARME[3] = 3;
$ARME[4] = 4;
$ARME[5] = 3;
$ARME[6] = 2;
$ARME[7] = 1;
$ARME[8] = 4;
$ARME[9] = 3;
$ARME[10] = 2;
$ARME[11] = 1;
$ARME[12] = 4;
$ARME[13] = 3;
$ARME[14] = 4;
$ARME[15] = 3;
$ARME[16] = 2;
$ARME[17] = 1;

$VIE1 = 10;
$VIE2 = 10;

$XPGG = 300;
$XPBG = $XPGG / 2;

// PREMIER ROUND
$PREMIERCOUP_J1 = $ARME[rand(0, 17)];
$PREMIERCOUP_J2 = $ARME[rand(0, 17)];
$VIE1_1 = $VIE1 - $PREMIERCOUP_J2;
$VIE2_1 = $VIE2 - $PREMIERCOUP_J1;

// SECOND ROUND
$SECONDCOUP_J1 = $ARME[rand(0, 17)];
$SECONDCOUP_J2 = $ARME[rand(0, 17)];
$VIE1_2 = $VIE1 - $SECONDCOUP_J2;
$VIE2_2 = $VIE2 - $SECONDCOUP_J1;

// SECOND ROUND
$TROISIEMECOUP_J1 = $ARME[rand(0, 17)];
$TROISIEMECOUP_J2 = $ARME[rand(0, 17)];
$VIE1_3 = $VIE1 - $TROISIEMECOUP_J2;
$VIE2_3 = $VIE2 - $TROISIEMECOUP_J1;

$TOTALCOUPJ1 = $PREMIERCOUP_J1 + $SECONDCOUP_J1 + $TROISIEMECOUP_J1;
$TOTALCOUPJ2 = $PREMIERCOUP_J2 + $SECONDCOUP_J2 + $TROISIEMECOUP_J2;

// GAGNANT
if ($VIE1_3 > $VIE2_3) {
  $GAGNANT = 1;
}
elseif ($VIE1_3 == $VIE2_3) {
  $GAGNANT = 2;
}
elseif ($VIE1_3 < $VIE2_3) {
  $GAGNANT = 0;
}

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>TEST DE JEUX</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Test de jeu</a>
        </div>
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container">
      <br><br><br>

<table class="table">
    <thead>
        <tr>
            <td>JOUEUR</td>
            <td>Pseudo</td>
            <td>COUP 1<br> <small>(Dégats infligés / Vie restante)</small></td>
            <td>COUP 2<br> <small>(Dégats infligés / Vie restante)</small></td>
            <td>COUP 3<br> <small>(Dégats infligés / Vie restante)</small></td>
            <td>TOTAL DEGATS MIS</td>
            <td>V/D</td>
            <td>Gain XP</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>J1</th>
            <th><?= $PSEUDO1 ?></th>
            <th><span class="CP1"><i style="color:red"><?= $PREMIERCOUP_J1 ?></i> / <i style="color:green"><?= $VIE1_1 ?></i></span></th>
            <th><span class="CP2"><i style="color:red"><?= $SECONDCOUP_J1 ?></i> / <i style="color:green"><?= $VIE1_2 ?></i></span></th>
            <th><span class="CP3"><i style="color:red"><?= $TROISIEMECOUP_J1 ?></i> / <i style="color:green"><?= $VIE1_3 ?></i></span></th>
            <th><span class="CP4"><?= $TOTALCOUPJ1 ?></span></th>
            <th><span class="CP5"><?php if($GAGNANT == 1) { echo "VICTOIRE"; } elseif($GAGNANT == 2) { echo "EGALITE"; } else { echo "DEFAITE"; } ?></span></th>
            <th><span class="CP6"><?php if($GAGNANT == 1) { echo $XPGG; } elseif($GAGNANT == 2) { echo $XPBG; } else { echo $XPBG; } ?></span></th>
        </tr>
        <tr>
            <th>J1</th>
            <th><?= $PSEUDO2 ?></th>
            <th><span class="CP1"><i style="color:red"><?= $PREMIERCOUP_J2 ?></i> / <i style="color:green"><?= $VIE2_1 ?></i></span></th>
            <th><span class="CP2"><i style="color:red"><?= $SECONDCOUP_J2 ?></i> / <i style="color:green"><?= $VIE2_2 ?></i></span></th>
            <th><span class="CP3"><i style="color:red"><?= $TROISIEMECOUP_J2 ?></i> / <i style="color:green"><?= $VIE2_3 ?></i></span></th>
            <th><span class="CP4"><?= $TOTALCOUPJ2 ?></span></th>
            <th><span class="CP5"><?php if($GAGNANT == 0) { echo "VICTOIRE"; } elseif($GAGNANT == 2) { echo "EGALITE"; } else { echo "DEFAITE"; } ?></span></th>
            <th><span class="CP6"><?php if($GAGNANT == 0) { echo $XPGG; } elseif($GAGNANT == 2) { echo $XPBG; } else { echo $XPBG; } ?></span></th>
        </tr>
    </tbody>
</table>

      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script>
      //<![CDATA[
      jQuery(document).ready(function(){ 
        $('.CP1').hide(0).delay(2000).show(200);
        $('.CP2').hide(0).delay(4000).show(200);
        $('.CP3').hide(0).delay(6000).show(200);
        $('.CP4').hide(0).delay(7000).show(200);
        $('.CP5').hide(0).delay(8000).show(200);
        $('.CP6').hide(0).delay(9000).show(200);
      });
      //]]>
  </script>

  </body>
</html>
