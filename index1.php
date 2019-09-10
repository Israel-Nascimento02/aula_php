<?php

  $dia = 6;
  $marg = "";
  

   switch (5) {

      case 1;
     $marg =" dia 1";

      break;
      

      case 2;
     $marg =" dia 2";

      break;


      case 3;
     $marg =" dia 3";

      break;


      case 4;
     $marg =" dia 4";

      break;
      

      case 5;
     $marg =" dia 5";

      break;
      default;
      
     $marg =" Nao encontrado...";

    }

    ?>

       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <title>aula</title>
       </head>
       <body>
       
         <?php

         $dia =4;

         if ($dia ==4){
             echo ("dia é")
         }

       <p> ola mundo, hoje é <?= $marg;?> </p>
  
           
       </body>
       </html>