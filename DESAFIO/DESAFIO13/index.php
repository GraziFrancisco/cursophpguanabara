<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
    <title>Desafio 13</title>
</head>
<body>
    <?php 
        //capturando os dados do formulario retroalimentado
        $saque = $_GET['valor'] ?? 0; 
    ?>
    <main> 
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="v1" value="<?=$saque?>" step="5">
            <p style="font-size: 0.6em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">

            
        </form>
    </main>

    <section id="resultado">   
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> Realizado</h2>

        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <?php 

        $resto = $saque;

        //Raque de R$100:
        $tot100 = floor($resto/100);
        $resto %= 100;

        //Raque de R$50:
        $tot50 = floor($resto/50);
        $resto %= 50;

        //Raque de R$10:
        $tot10 = floor($resto/10);
        $resto %= 10;

        //Raque de R$5:
        $tot5 = floor($resto/5);
        $resto %= 5;

        ?>

        <ul>
            <li><img class="nota" src="imagens/100-reais.jpg" alt="">  x<?=$tot100?></li>
            <li><img class="nota" src="imagens/50-reais.jpg" alt=""> x<?=$tot50?></li>
            <li><img class="nota" src="imagens/10-reais.jpg" alt=""> x<?=$tot10?></li>
            <li><img class="nota" src="imagens/5-reais.jpg" alt=""> x<?=$tot5?></li>
            
        </ul>
    </section>    
    
</body>
</html>