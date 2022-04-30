<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <title>Exercício 1</title>
    <style> 
        body{
            text-align:center;
        }
    </style>
  </head>
  <body>
  
    <?php      
      $numeroDigitado=-50;
      if($numeroDigitado > 0){
        echo "<h1>". $numeroDigitado . " => Valor Positivo </h1>";
      }
      elseif($numeroDigitado < 0){
        echo "<h1>". $numeroDigitado . " => Valor Negativo </h1>";
      }
      elseif($numeroDigitado === 0){
        echo "<h1>". $numeroDigitado . " => Igual a zero </h1>";
      }
      else{
        echo "<h1> Valor não reconhecido </h1>";
      }
    ?> 
  </body>
</html>