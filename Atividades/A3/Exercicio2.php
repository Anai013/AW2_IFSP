<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <title>Exercício 2 - Fatorial </title>
  </head>
  <body>
    <form method="post" >
        <label for="#number">Insira um número para calcular seu fatorial: </label>
        <input id="number" type="number" name="number"/>
        <button type="submit">Calcular</button>
    </form>
    <?php 
        if(isset($_POST['number'])){      
            $numero =  $_POST['number'];
            if($numero == 1 || $numero == 0){
              echo "1";
            }
            $fatorial = 1;
            for ($i = $numero; $i>1; $i--) {
			        $fatorial *=$i;
		        }
            echo "<p> Fatorial de " . $numero . " => " . $fatorial . "</p>";
         }
    ?> 
  </body>
</html>