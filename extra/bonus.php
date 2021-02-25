<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>prove</title>
</head>
<body>
  <?php
// stringhe

  $ciao1 = "ciao!";
  $ciao = "come va?";

  $stringaconcatenata = $ciao1." ".$ciao;
  var_dump($stringaconcatenata);
  $str = "ciao sono una stringa";
  var_dump($str);
  // quanti caratteri ci sono in una stringa
  $numCaratteri = strlen ($str);
  var_dump($numCaratteri);
  // quante parole ci sono
  $numParole = str_word_count ($str);
  var_dump($numParole);
  // stringa letta al contrario;
  $parolaRovescia = strrev ($str);
  var_dump($parolaRovescia);
  $parola = "stringa";

  // in che posizione della stringa inizia la mia $parola

  $posizioneParola = strpos ($str, $parola);
  var_dump($posizioneParola);
  // se il risultato è null non la contiene
  $newSaluto = "buongiorno";
  $strConNewSaluto = str_replace ("ciao", $newSaluto, $str);
  var_dump($strConNewSaluto);

// numeri

$num1 = 10.333;
// per stampare tipo di numero, int o float :
echo var_dump ($num1);


echo is_float($num1);
// al comando sopra stampa 1 , 0 è false
// 1 è true;
//
$num2 = "3546";
$num3 = 3456;
// chiedo se stringa è numerica, mi risponde 1
echo is_numeric($num1);
echo is_numeric($num2);
echo is_numeric($num3);

echo var_dump(is_float($num2));
//
// chiedo di darmi la risposta in booleano se è vero o falso;
echo var_dump(is_numeric($num2));
//
// // faccio il cast float , cioè se il num che sta a destra del float
// // è una stringa convertibile in un float, ottengo il numero
// // quindi ottengo da stringa numerica un numero;
// // al posto di float posso usare int
//
$n= (float)$num2;
//
echo $n;
echo is_float($n);
//
// // per creare costante....
define("PGRECO", "3.14", true);
echo PgRECO;
// true mi serve per il case sensitive,cioè
// a farlo riconoscere anche se scrivo Pgreco ;


  ?>



  <div>
  </div>



</body>
</html>
