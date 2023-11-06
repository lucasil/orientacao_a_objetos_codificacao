<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "sequencia.class.php";

        if ($_POST) {
            $sequencia1 = new Sequencia;
            $sequencia1->setInicio($_POST['num1']);
            $sequencia1->setFim($_POST['num2']);

            if ($_POST['mostrar'] == 'todos') {
                $sequencia1->exibirTodosNumeros();
            } elseif ($_POST['mostrar'] == 'par') {
                $sequencia1->exibirPares();
            } elseif ($_POST['mostrar'] == 'impar') {
                $sequencia1->exibirImpares();
            }
            
        } else {
            echo '<form action="sequencia.php" method="post">';
                echo '<label>Selecione o Valor Inicial: </label>';
                echo '<select name="num1">';
                    for ($num1 = 1; $num1 <= 100; $num1++) {
                        echo '<option value="'. $num1 .'">'. $num1 .'</option>';
                    }
                echo '</select>';
        
                echo '<br>';
    
                echo '<label>Selecione o Valor Final: </label>';
                echo '<select name="num2">';
                    for ($num2 = 1; $num2 <= 100; $num2++) {
                        echo '<option value="'. $num2 .'">'. $num2 .'</option>';
                    }
                echo '</select><br>';
                echo '<label>Mostrar:</label><br>
                    <input name="mostrar" value="todos" type="radio">
                    <label>Todos</label><br>
                    <input name="mostrar" value="par" type="radio">
                    <label>Apenas os pares</label><br>
                    <input name="mostrar" value="impar" type="radio">
                    <label>Apenas os ímpares</label><br>
                    <input type="submit">';
            echo '</form>';
        }
    ?>
</body>
</html>