<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 07</title>
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $sm = 1_380.60;
    ?>
    <main> 
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Salário (R$): </label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.01">
            <?php 
                echo "<p>Considerando o salário mínimo de <strong> R$". number_format($sm, 2, ",", ".") ."</strong></p>"
            ?> 
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">   
        <h2>Resultado Final</h2>
        <?php 

            $resultado = intdiv($valor1, $sm);
            $resto = $valor1 % $sm;
            
            echo "<p>Quem recebe um salário de R\$". number_format($valor1, 2, ",", "."). " ganha <strong>". floor($resultado). " salários mínimos + </strong> R\$" . number_format($resto, 2, ",", "."). ".";
        
        ?>
    </section>    
    
</body>
</html>