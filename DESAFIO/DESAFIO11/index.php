<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 11</title>
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $valor = $_GET['prod'] ?? 0;
        $porcentagem = $_GET['porc']?? 0;
       
        
    ?>
    <main> 
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Preço do produto (R$): </label>
            <input type="number" name="prod" id="v1" value="<?=$valor?>" step="0">
            <label for="v1">Qual será o percentual de reajuste? %</label>
            <input type="number" name="porc" id="v1" value="<?=$porcentagem?>" step="0">
            <input type="submit" value="Resultado do reajuste">
        </form>
    </main>

    <section id="resultado">   
        <h2>Resultado do reajuste</h2>
    
        <?php 
            
            $total =  $porcentagem / 100;
            $result = $total * $valor;
            $valorfinal = $valor + $result;

            
            
            echo "<p>O produto que custava R$".  number_format($valor, 2, ".", ",") , " com <strong>$porcentagem% de aumento</strong> vai passar a custar <strong>" . number_format($valorfinal, 2) ."</strong> a partir de agora.";
            
        ?>
    </section>    
    
</body>
</html>