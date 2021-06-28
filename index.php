<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice I4</title>
</head>
<body>
<?php
$jour=array(
    '',
    'lundi',
    'mardi',
    'mercredi',
    'jeudi',
    'vendredi',
    'samedi',
    'dimanche',
  );

  $mois=array(
    '',
    'janvier',
    'février',
    'mars',
    'avril',
    'mai',
    'juin',
    'juillet',
    'aout',
    'septembre',
    'octobre',
    'novembre',
    'decembre',
  );
  $dateFr= $jour[date('N')].' '.date('d ').$mois[date('n')]. '' .date('Y');
  echo 'nous sommes le '.$dateFr.'<br>';
  ?>

  </body>
</html>