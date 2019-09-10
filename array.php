<?php

/*
$arrayNome = array ("israel", "victor", "bia", "victoria");
$arrayNome =  ["israel", "julia", "victor", "bia", "victoria", "maria"];

 for ($i = 0; $i < count($arrayNome); $i++){
echo $arrayNome [$i] . "<br />";
}

*/
$arrayNome =  ["israel", "victor", "bia", "victoria"];

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
  </head>
  <body>
  <select id="slprofessor" name="slprofessor">
               <?php
               for ($i = 0; $i < count ($arrayNome); $i++) {

               ?>
               <option value="<?= $i; ?>"><?= $arrayNome [$i]; ?></option>
                <?php  
               }
               ?>   
         </select>
      <button onclik="alert(document.getElementeById('slprofessores').value);">selecionar</button>
  </body>
  </html>

  
    