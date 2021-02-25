<?php

// ultima tipologia di variabili sono gli oggetti
// (che comprendono anche gli array)

$array= array() ; //array vuoto
$array= array("ciao",23,"come",232323.3323);

// posso riempirli di variabili diverse


// per vedere un contenuto array non si usa echo
// ma

print_r($array);

// // per stampare singola casella:
//
echo $array [0]; //prima posizione è 0;
//
echo count ($array);
//
$array = array(23,43,45,465,81);
//
// // ordinare array in ordine crescente:
//
sort ($array);
// // per vederlo
print_r($array);
//
// // rsort per ordine decrescente
// //
// //
// // per aggiungere elementi
//
$array = array();
//
array_push($array, "ciao");
// // per vederlo
print_r($array);
//
// // se rifaccio lo stesso mi mette due ciao consecutivi nello stesso array
//
//
// // Posso creare un array composto:
//
$ar1= array(23,543,45,45);
$ar2= array("ciao","come","stai");
$ar3= array_merge ($ar1,$ar2);
print_r($ar3);
//
//
//
// // per la rimozione di un elemento dell'array:
//
$array= array(23,543,45,46);
// unset($array[0]);
// print_r($array);
//
// // ma cosi facendo i numeri dell'array parte da 1;
// // l'altra possibilità
//
// array_splice($array, 0, 1);
// print_r($array);
//
// // indice di partenza/indice finale
// //  cosi facendo elimino da indice 0 a indice 1
// // cosi levo il primo elemento e gli altri scalano
//
array_splice($array, 2, 1);
print_r($array);
//
// // cosi facendo dico vai alla posizione 2
// // e togli solo 1, il quarto elemento che era nella posizione 3 scala alla posizione 2,
// // dove l'elemento di prima sparisce;
//
// array_splice($array, 2, 2); //cosi taglia tutto quello dopo la posizione 2
// array_splice($array, 1, 3); //cosi parte da quello in posizione 1
// // cioe il secondo ed elimina fino al quarto (quindi elimina tre elementi)
//
// array_splice($array, 1, 2); //cosi parte da quello in posizione 1
// // cioe il secondo e toglie secondo e terzo,i due centrali nelle posizioni
// // 1 e 2 (restano 0 e 4 che diventano 0 e 1)
//
// // array è un contenitore che contiene lista di elementi,
// // oggetto contiene lista sempre di elementi ma suddivisi in chiave valore;
// // non ho indice di scorrimento 0,1,2,3
// // ma una chiave (name,surname,age) con relativo valore
//
//
$obj = array("name" => "Pippo", "age"=> 20, "city"=> "Milan"
 );
print_r($obj);
//
echo $obj['name'];
//
// // un array può contenere tutto ,anche oggetti
//
// $array = array(
//   array("name" => "Not", "age"=> 20, "where"=> "Milan"
// ),
// array("name" => "Not", "age"=> 20, "where"=> "Roma"
// ),array("name" => "Not", "age"=> 20, "where"=> "Bologna"
// );
//
// print_r ($array);
//
// // riassegnare valore di un oggetto
//
// $obj ['age'] = 22;
//
// print_r ($obj);
//
//
// // un array può contenere anche altri array
//
// $array= array (
//   array(23,34,43,565),array(34,56,74,322)
// );
//
// // se voglio prendere solo un valore
//
// echo $array [0][0];
// // vado nel primo array e prendo il primo valore
//
// // 1,3
// // vado nel secondo array e prendo il quarto valore;
// //
// // lo stesso si poteva fare con gli oggetti
// //
// // 1, 'name'
?>
