<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <title>Exercício 3 - Fibonacci </title>
  </head>
  <body>
    <h3> 20 primeiros números da sequência Fibonacci </h3>
    <?php      
      $num=1;
      $prox=0;
      $ante;

      $i=1;
      while($i <=20){
        $ante=$prox;
        $prox=$num;
        $num=$ante + $prox;

        echo "<ul><li>" . $num .  "</li>" ."</ul>";
        $i++;
      }
    ?> 
  </body>
</html>