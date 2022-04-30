<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <title>Exercício 3</title>
    <style> 
        body{
            text-align:center;
        }
    </style>
  </head>
  <body>
  
    <?php      
      $nome="Anai";
      $idade=17;
      if($idade >= 18){
        echo "<h1>". $nome . "é maior de 18 anos e tem " . $idade ." anos </h1>";
      }
      else{
        echo "<h1>". $nome . "é menor de 18 anos e tem " . $idade ." anos </h1>";
      }

    ?> 
  </body>
</html>