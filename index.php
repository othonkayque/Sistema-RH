<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade</title>
</head>
<body>
        <div class="container">
            <span class="infos">
                <ul>
                    <li>1 - Analista</li>
                    <li>2 - Programador</li>
                    <li>3 - Gerente</li>
                    <li>4 - Estagiario</li>
                </ul>
            </span>
            <form action="" method="post">
                <div class="container-inputs">
                    <input type="text" name="nome" id="nome" placeholder="Nome">
                    <input type="text" name="cargo" id="cargo" placeholder="Cargo">
                    <input type="number" name="horas_trabalhadas" id="horas_trabalhadas" placeholder="Horas trabalhadas">
                    <input type="text" name="valor_desconto" id="valor_desconto" placeholder="Valor desconto">
                    <input type="text" name="valor_beneficios" id="valor_beneficios" placeholder="Valor beneficios">

                    <input type="submit" name="OK" id="OK" value="Calcular">
            </form>

            <?php
        error_reporting(E_ERROR | E_PARSE);

        $nome = $_POST["nome"];
        $cargo = $_POST["cargo"];
        $horas = $_POST["horas_trabalhadas"];
        $desconto = $_POST["valor_desconto"];
        $beneficios = $_POST["valor_beneficios"];
        $valor_receber = 0;
        ?>

        </div>


        <?php
        
        switch ($cargo) {
            case "1":
                $valor_receber = 30;
                echo "<h1> ${nome} deve receber " . ($valor_receber * $horas) - $desconto + $beneficios . "</h1>";
                break;

            case "2":
                $valor_receber = 25;
                echo "<h1> ${nome} deve receber " . ($valor_receber * $horas) - $desconto + $beneficios . "</h1>";
                break;

            case "3":
                $valor_receber = 40;
                echo "<h1> ${nome} deve receber " . ($valor_receber * $horas) - $desconto + $beneficios . "</h1>";
                break;

            case "4":
                $valor_receber = 20;
                echo "<h1> ${nome} deve receber " . ($valor_receber * $horas) - $desconto + $beneficios . "</h1>";
                break;

            default:
                echo "<h1>tente novamente</h1>";
                break;
        }
        
        ?>
</body>
</html>
