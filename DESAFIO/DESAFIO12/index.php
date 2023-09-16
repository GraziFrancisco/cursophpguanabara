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
        $total = $_GET['seg'] ?? 0; 
    ?>
    <main> 
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Qual é o total de segundos? </label>
            <input type="number" name="seg" id="v1" value="<?=$total?>" step="0">
            
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">   
        <h2>Totalizando tudo</h2>
    
        <?php 
            
            $sobra = $total;
            //total de semanas
            $semana = (int)($sobra/604800);
            $sobra = $sobra % 604800;

            //total de dias
            $dia = (int)($sobra/86400);
            $sobra = $sobra % 86400;

            //total de horas
            $hora = (int)($sobra/3600);
            $sobra = $sobra % 3600;

            //total de minutos
            $minuto = (int)($sobra/60);
            $sobra = $sobra % 60;

            //total de segundos
            $segundo = $sobra;
            
            echo "Analisando o valor que você digitou, <strong>". number_format($total, 0, "", ",") ." segundos</strong> equivalem a um total de: ";
            echo "<ul><li>$semana semanas.</li>";
            echo "<li>$dia dias.</li>";
            echo "<li>$hora horas.</li>";
            echo "<li>$minuto minutos.</li>";
            echo "<li>$segundo segundos.</li></ul>";
        ?>
    </section>    
    
</body>
</html>