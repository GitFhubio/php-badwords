<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Php-badwords</title>
</head>
<body>
  <?php

  // if ($_GET) {
  //   echo 'Ci sono elementi in get';
  // } else {
  // echo 'Non ci sono elementi in get';
  //
  //   }
  $text='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  // $posizioneParola = strpos ($text, 'alfredo');
  // var_dump($posizioneParola);
  $newText = str_replace($_GET["badword"], "***", "$text");
  // var_dump(!$_GET);
  ?>
  <div>
  <?php if (!$_GET || strpos($text, $_GET["badword"])==false) { ?>
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
