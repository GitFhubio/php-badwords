<?php


$bool= true;
$cont= 0;
// contatore
while ($bool){

echo "ciao!";
$cont++;
if ($cont == 5)
$bool = false;
}


for($i=0; $i<10; $i++){
echo $i;
}

$array = array("ciao","come","stai?");
for($i=0; count($array) > $i; $i++){
echo $array[$i]."<br>";
}
// per scorrere array
//
// modo alternativo è foreach

foreach ($array as $el) {
  echo $el."<br>";
}
//

$cont=0;
foreach ($array as $el) {
  echo $el."ha posizione".$cont."<br>";
  $cont++ ;
}
?>

<ul>
<?php
$array = array("ciao","come","stai?");
foreach ($array as $el) {?>
  <li><?php echo $el ?></li>
<?php } ?>
</ul>

<ul>
<?php
for ($i=0; $i<90 ; $i++) {?>
  <li><?php echo "Posizione". $i ?></li>
<?php } ?>
</ul>
