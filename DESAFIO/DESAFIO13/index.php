<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 13</title>
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $valor = $_GET['valor'] ?? 0; 
    ?>
    <main> 
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="v1" value="<?=$valor?>" step="0">
            <h6>Notas disponíveis: R$100, R$50, R$10 e R$5</h6>
            <input type="submit" value="Sacar">

            
        </form>
    </main>

    <section id="resultado">   
        <h2>Saque de R$<?=$valor?> Realizado</h2>

        <p>O caixa eletronico vai te entregar as seguintes notas: </p>
        <?php 
            
           


        ?>
    </section>    
    
</body>
</html>