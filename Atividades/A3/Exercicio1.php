<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <title>Exercício 1 - Tabuada </title>
  </head>
  <body>
    <form method="post" >
        <label for="#number">Insira um número para descobrir sua tabuada: </label>
        <input id="number" type="number" name="number"/>
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if(isset($_POST['number'])){      
            $numero =  $_POST['number'];
            echo "<h3> Tabuada do " . $numero . " </h3>";
            for($i=1; $i <= 10; $i++){
                $multi = $numero * $i;
                echo "<p> " . $numero . " X " . $i . " = " . $multi . " </p>";
            }
         }
    ?> 
  </body>
</html>