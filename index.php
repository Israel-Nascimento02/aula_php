<?php
$idade = 18;
$senha = "1234";
$acesso = false;
 /*
 if ($idade >= 18) {
  
    echo "acesso liberado...";  
 }else {
     echo "acesso negado...";
 }
 */


 /*
if ($senha == "1223"){
     echo "acesso autorizado com sucesso";
} else if ($senha == "1234") {
    echo " acesso autorizado com sucesso nivel 2";
} else {
    echo " acesso negado!";
}

*/
/*
if (($idade >= 18) || ($senha != 1234 )) {
  
    echo "acesso liberado...";  
 }else {
     echo "acesso negado...";
 }

 */
 /*
 if (!$acesso && $idade >=18){
      echo "acesso autorizado";
 } else{
   echo "acesso negado";
 }
 */

?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>teste</title>
    </head>
    <body>
    <?php

    if ($idade >=18){
        ?>
        <h1 style= 'color:green'> acesso autorizado</h1>
        <?php
    } else {
        ?>
        <h1 style= 'color:red' >acesso negado</h1>
      <?php
    }

    ?>

    </body>
    </html>

