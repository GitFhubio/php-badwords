<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php-badwords</title>
  </head>
  <body>
 <?php

 $text='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';


    // var_dump($_GET);  //variabile di php,parametro $_GET, è un array con tutti i parametri inviati in get
    // echo $_GET["badword"];
     $newText = str_replace($_GET["badword"], "***", "$text");
      ?>

      <div>
        <h1><?php echo $text; ?></h1>
        <h1><?php echo $newText; ?></h1>
         <h3><?php echo "La lunghezza del testo è di " . strlen($text) . " caratteri" ; ?></h3>
      </div>



  </body>
</html>
