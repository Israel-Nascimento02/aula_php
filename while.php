<?php
/*
$cont = 0;
 While($cont < 20){
     echo "cont; ($cont)  <br>";
   
$cont++;
*/
  // $cont += 1;
// }

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
        <ul>
             <?php

             $cont = 0;

             while ($cont < 30) {
                 if ($cont > 5 && $cont <= 20) {
                 ?>
              <li> <?= $cont; ?> </li>
              <?php
                 } 
              $cont++;
              
             }
            


             ?>

        
        </ul>

   </body>
   </html>
