<html lang="fr">

<head>
</head>

<body>
<h2>
  <?php echo 'Salut la classe M1 Dev de l\'ECV !' ?>
</h2>
<h4>Nous sommes le <?php echo date('d/m/Y') ?> et il est <? echo date('h:i') ?></h4>

<p>
  <? $name = 'Maxime' ?>
  <? echo "Vous vous appelez {$name} !" ?>
</p>

<p>
  <pre>
  <?php var_dump($_ENV) ?>
  </pre>
</p>

</body>

</html>
