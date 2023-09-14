<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com Números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 

            $num = mt_rand(0, 100);
            echo "<p>O valor gerado é:<strong> $num<strong></p>";
        ?>
        <button type="button" onclick="javascript:document.location.reload()">&#x1F504; Gerar Outro</button>

    </main>
    
</body>
</html>