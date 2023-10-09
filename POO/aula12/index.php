<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
    <?php 
        require_once 'video.php';
        require_once 'gafanhoto.php';
        require_once 'visualizacao.php';

        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML");

        print_r($v);

        $g[0] = new Gafanhoto("Grazi", 38, "Fem", "lachica");
        $g[1] = new Gafanhoto("Nati", 16, "Fem", "natikauane");

        print_r($g[0]);
        print_r($g[1]);

        $vis[0] = new Visualizacao($g[0], $v[2]);

        print_r($vis);
        print_r($g[0]);
        print_r($v[2]);



    ?>
</body></pre>
</html>