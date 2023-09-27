<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutador</title>
</head>
<body>
    <?php 
    
        require_once 'ufc.php';

        $prettyBoy = new Lutador ("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        print_r($prettyBoy);


        $putscript = new Lutador ("Putscript", "Brasil", 29, 1.69, 57.8, 14, 2, 3);
        print_r($putscript);

        $snapshadow = new Lutador ("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        print_r($snapshadow);
    

        $deadCode = new Lutador ("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        print_r($deadCode);


        $ufocobol = new Lutador ("Ufocobol","Brasil", 37, 1.70, 119.3, 5, 4, 3);
        print_r($ufocobol);

        $nerdaard = new Lutador ("Nerdaard", "EUA", 30, 1.81, 105.7, 12, 2, 4);
        print_r($nerdaard);
    
    
    
    ?>
    
</body>
</html>