<?php
$x = 0;

if (1 == 1) {
  echo "ciao";
} else if (2 < 3){
  echo "false";
} else {echo "altri casi";}


$val= 5;
switch($val){

case 1:
echo "1 ok";
  break;
case 2:
echo "2 ok";
break;
case 5:
echo "5 ok";
break;
default:
echo "default";
break;}
//
// if :
//
  if (10 == 5 && 9 == 7) {
    echo "ok";
  }
  if (5 == 5 && 7 == 7) {
    echo "ok";
  }

  if (10 == 5 || 7 == 7) {
    echo "ok";
}

    if (10 != 5 || 9 == 7) {
      echo "ok";
    }
    ?>

 <?php
 if (1 == 2) {
   ?>
   <p style="color:red">ciao sono un paragrafo!</p>

   <?php
   } else {echo "<p style=\"color: red\">ciao non sono un paragrafo!</p>";}
   ?>

<!-- oppure  -->

   <?php
  if (1 == 2) { ?>

   <p style="color:red">ciao sono un paragrafo!</p>
  <?php
    } else { ?>

    <p style="color: red">ciao non sono un paragrafo!</p>
  <?php
   }
?>
