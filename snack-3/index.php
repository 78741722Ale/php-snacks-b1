<?php 
/*  
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/

// Creare un array di array.
$data = [
            // Ogni array figlio avrà come chiave una data in questo formato:
            //DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ]
];
/* Avvio ciclo For Each per array multidimensionale */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <!-- Primo For Each per la struttura dati -->
    <!-- $data => struttura dati, l'array padre -->
    <!-- $date => in questo caso il nome degli array figli, la data ($key) -->
    <!-- $posts => Array presi singolarmente -->
    <?php foreach ($data as $date => $posts) : ?>
        <h5> <?= $date ?></h5>
        <!-- $posts => key -->
        <!-- $post => value -->
        <?php foreach ($posts as $post) : ?>
            <!-- value['innerValue']  -->
            <p>Author : <?= $post['author'] ?> </p>
            <p>Title : <?= $post['title'] ?> </p>
            <p>Text : <?= $post['text'] ?> </p>
        <!-- Concluso il forEach interno -->    
        <?php endforeach; ?>
    <!-- Concluso il forEach esterno --> 
    <?php endforeach; ?>        
</body>
</html>











