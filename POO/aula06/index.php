<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto controle remoto</title>
</head>
<body>
    <h1>Projeto controle remoto</h1>

    
    <?php
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        $c->ligar();
        $c->maisVolume();
        //$c->menosVolume();
        $c->play();
        
        
        
        
        echo "<pre>";
        $c->abrirMenu();     
        echo "</pre>";

        echo '<pre>';
        print_r($c);
        echo '</pre>';
    ?>
    </pre>
</body>
</html>