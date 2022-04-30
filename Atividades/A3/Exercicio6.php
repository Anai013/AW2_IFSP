<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <title>Exercício 6 - Pares </title>
  </head>
  <body>
    <form method="post" >
        <label>Insira dois números </label>
        <input type="number" name="num1"/>
        <input type="number" name="num2"/>
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if(isset($_POST['num1']) && isset($_POST['num2'])){      
            $num1 =  $_POST['num1'];
            $num2 =  $_POST['num2'];

            if($num1 > $num2){
              $num1 = $_POST['num2'];
              $num2 = $_POST['num1'];
            }
            echo "<p> Números pares entre eles: </p>";
            for($i=$num1; $i<=$num2; $i++){
              if ($i % 2 === 0) {
                echo " " . $i;
              }
            }
            
         }
    ?> 
  </body>
</html>