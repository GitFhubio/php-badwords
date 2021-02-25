<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Php-badwords</title>
</head>
<body>

  <form class="" action="index-bonus.php" method="post">
   <input type="text" name="nome" placeholder="Inserisci la mala parola" value="">
   <button type="submit" name="modulo">clicca qui</button>
  </form>


  <?php

  if ($_POST) {
  echo 'Ci sono elementi in $_POST';
  var_dump ($_POST);
  } else {
  echo 'Non ci sono elementi in $_POST';

  }
  if (isset($_POST['modulo'])) {
    // echo "é stato effettuato il submit";
    echo "Badword:{$_POST['nome']} ";
  }

  $text='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

  $newText = str_replace($_POST["nome"], "***", "$text");
  // var_dump(!$_GET);
  ?>
  <div>
  <?php if (!$_POST || strpos($text, $_POST["nome"])==false) { ?>
    <h1>Testo originale</h1>
    <p><?php echo $text; ?></p>
  <?php } else { ?>
    <h1>Testo censurato</h1>
    <p><?php echo $newText; ?></p>
    <?php } ?>
  </div>

  <h3><?php echo "La lunghezza del testo è di " . strlen($text) . " caratteri"; ?></h3>


</body>
</html>

<!-- testgithub -->
