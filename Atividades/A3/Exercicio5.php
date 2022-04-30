<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <title>Exercício 5 - Números primos </title>
  </head>
  <body>
  
    <?php      
      function verificarNumeroPrimo($numero) {
        for($i=2; $i < $numero; $i++){
          if($numero % $i === 0){
            return "<p>" . $numero . " não é primo</p>";
          }
          return "<p>" . $numero . " é primo</p>";
        }
      }
      $numero = 11;
      echo verificarNumeroPrimo($numero);
    ?> 
  </body>
</html>