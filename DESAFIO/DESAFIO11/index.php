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
            <input type="number" name="prod" id="v1" value="<?=$valor?>" step="0.01">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p"></span>%</strong>)</label> 
            <input type="range" name="porc" id="reaj" step="1" min="0" max="100" oninput="mudaValor()" value="<?=$porcentagem?>">
            <input type="submit" value="Resultado do reajuste">
        </form>
    </main>

    <section id="resultado">   
        <h2>Resultado do reajuste</h2>
    
        <?php 
            
            $aumento = $valor * $porcentagem / 100;
            $reajuste = $valor + $aumento;
            
            
            echo "<p>O produto que custava R$".  number_format($valor, 2, ".", ",") , " com <strong>$porcentagem% de aumento</strong> vai passar a custar <strong> R$" . number_format($reajuste, 2) ."</strong> a partir de agora.";
            
        ?>
    </section>    
        <script>
            mudaValor()

            function mudaValor() {
                p.innerText = reaj.value
            }

        </script>
</body>
</html>