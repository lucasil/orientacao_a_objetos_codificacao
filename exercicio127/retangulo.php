<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário</h1>
    <?php
        include "retangulo.class.php";

        if ($_POST) {
            $retangulo1 = new Retangulo;
            $retangulo1->setLadoMaior($_POST['largura']);
            $retangulo1->setLadoMenor($_POST['altura']);
            echo '<p>A área é: '. $retangulo1->calculaArea() . '</p>';
        } else {
            echo    '<form action="retangulo.php" method="post">
                    <label for="">Informe a Largura</label>
                    <input type="number" name="largura" step="0.1" min="0.1">
                    <br>
                    <label for="">Informe a Altura</label>
                    <input type="number" name="altura" step="0.1" min="0.1">
                    <br>
                    <input type="submit" name="calcular">
                    </form>';
        }
    ?>
</body>
</html>