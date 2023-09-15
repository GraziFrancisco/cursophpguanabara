<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 10</title>
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $anoNasc = $_GET['ano1'] ?? 0;
        $ano2 = $_GET['ano2']?? 0;
       
        
    ?>
    <main> 
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Em que ano você nasceu: </label>
            <input type="number" name="ano1" id="v1" value="<?=$anoNasc?>" step="0">
            <label for="v1">Quer saber a sua idade em que ano? (atualmente estamos em <strong>
            <?=date("Y")?></strong>)</label>
            <input type="number" name="ano2" id="v1" value="<?=$ano2?>" step="0">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">   
        <h2>Resultado</h2>
    
        <?php 
            
            $idade = $ano2 - $anoNasc;
            
            
            echo "<p>Quem nasceu em $anoNasc vai ter <strong> $idade anos </strong> em $ano2.";
            
        ?>
    </section>    
    
</body>
</html>