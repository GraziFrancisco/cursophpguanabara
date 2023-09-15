<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 09</title>
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $valor1 = $_GET['v1'] ?? 0;
        $peso1 = $_GET['p1']?? 1;
        $valor2 = $_GET['v2'] ?? 0;
        $peso2 = $_GET['p2'] ?? 1;
        
    ?>
    <main> 
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor: </label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.001">
            <label for="v1">1º Peso: </label>
            <input type="number" name="p1" id="v1" value="<?=$peso1?>" step="0.001">
            <label for="v2">2º Valor: </label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>" step="0.001">
            <label for="v2">2º Peso: </label>
            <input type="number" name="p2" id="v2" value="<?=$peso2?>" step="0.001">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">   
        <h2>Cálculo das médias</h2>
        
        <?php 

            $mediasimples = ($valor1 + $valor2)/2;
            $mediaponderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1+$peso2);

            echo "<p>Analisando os valores $valor1 e $valor2:</p>";
            echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $mediasimples.</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual e " . number_format($mediaponderada, 2, ",", ".") .".</li></u>";
            
        ?>
    </section>    
    
</body>
</html>