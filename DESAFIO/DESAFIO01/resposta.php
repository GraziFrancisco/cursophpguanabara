<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>  
        <h1>Resultado Final</h1>

        <?php 

            $num = $_POST['num'] ?? 0;
            $ant = $num - 1;
            $suc = $num + 1;
            
            echo "<p>O número escolhido é <strong>$num</strong>.</p>";
            echo "<p>O seu antecessor é <strong>$ant</strong>.</p>";
            echo "<p>O seu sucessor é <strong>$suc</strong>.</p>";
        ?>
        <a href="javascript:history.go(-1)"><button type="button">&#x2B05Voltar</button></a>
        
    </main>
    
</body>
</html>