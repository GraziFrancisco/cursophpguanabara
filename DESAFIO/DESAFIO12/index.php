<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 12</title>
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $seg = $_GET['seg'] ?? 0; 
    ?>
    <main> 
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Qual é o total de segundos? </label>
            <input type="number" name="seg" id="v1" value="<?=$valor?>" step="0">
            
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">   
        <h2>Totalizando tudo</h2>
    
        <?php 
            
            $semanas = $seg / 604800;          
            



            echo "Analisando o valor que você digitou, <strong>$seg segundos</strong> equivalem a um total de: ";
            echo "<ul><li>$semanas semanas.</li>";
            echo "<li>$dias dias.</li>";
            echo "<li>$horas horas.</li>";
            echo "<li>$minutos minutos.</li>";
            echo "<li>$segundos segundos.</li></ul>";
        ?>
    </section>    
    
</body>
</html>