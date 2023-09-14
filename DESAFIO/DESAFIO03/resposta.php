<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resposta</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <?php 
        $real = $_POST['num'] ?? 0;
        $fix = 5.22;
        $dolar = $real/$fix;
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong> " . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        echo "<p><strong>*Cotação fixa de R\$ " . number_format($fix, 2, ",", ".") . "</strong> informada diretamente no código.</p>";
        
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>

    </main>
</body>
</html>