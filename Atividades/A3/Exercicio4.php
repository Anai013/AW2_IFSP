<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <title>Exercício 4 - Cubo </title>
  </head>
  <body>
    <form method="post" >
        <label for="#number">Insira um número: </label>
        <input id="number" type="number" name="number"/>
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if(isset($_POST['number'])){      
            $numero =  $_POST['number'];
            $cubo = pow($numero, 3);
            $i=$numero;

            echo "<h3>Números entre ".$numero." e " . $cubo . " (" . $numero . " ao cubo)</h3>";
            do{
              echo " " . $i;
              $i++;

            }while($i<=$cubo);
            
         }
    ?> 
  </body>
</html>