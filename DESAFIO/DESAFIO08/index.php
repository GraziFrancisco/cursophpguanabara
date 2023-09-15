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
        $sm = 1380;
    ?>
    <main> 
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Número: </label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.001">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">   
        <h2>Resultado Final</h2>
        <?php 

            $raizq = sqrt($valor1);
            $raizc = pow ($valor1,(1/3));
            
            echo "<p>Analisando o <strong>número " . number_format($valor1, 0, ".", ",") . "</strong>, temos:</p>";
            echo "<ul><li>A sua Raiz quadrada é <strong> " . number_format($raizq, 3, ".", ",") . "</strong>.</li>";
            echo "<li>A sua Raiz cúbica é <strong> " . number_format($raizc, 3, ".", ",") . "</strong>.</li></ul>";
       
        ?>
    </section>    
    
</body>
</html>