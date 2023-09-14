<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 06</title>
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main> 
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">   
        <h2>Estrutura da divisão</h2>
        <?php 
        
            $resto = $valor1 % $valor2;
            $quociente = $valor1 / $valor2;
            print "<p>O resto da divisão é <strong> $resto</strong></p>.";
            print "<p>O Dividendo é <strong> $valor1</strong></p>.";
            print "<p>O Divisor é <strong> $valor2</strong></p>.";
            print "<p>O Quociente é <strong> $quociente</strong></p>.";
        
        ?>
    </section>    
    
</body>
</html>