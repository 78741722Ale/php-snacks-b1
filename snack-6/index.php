<?php 

/* 
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo 
grigio e i PM in un rettangolo verde.
*/

/* Utilizzare questo array: https://pastebin.com/CkX3680A.  */
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
    var_dump($db) // Verifica in var dump
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>

<style>

   /* gli insegnanti in un rettangolo grigio */ 
    .square_gray {
        width:400px;
        height:max-content;
        padding : 1rem;
        background-color: gray;
    }
    /* PM in un rettangolo verde */
    .square_green {
        width:400px;
        height:max-content;
        padding : 1rem;
        background-color: green;
    }
</style>


<body>
    <?php foreach ($db as $key => $value) : ?>
    <h5> <?= $key ?></h5>
    <!-- $key => key -->
    <!-- $value => value -->
    <!-- Condizione se la key è teacher -->
    <?php if($key == 'teachers') : ?>
    <div class="square_gray">
        <?php foreach ($value as $svalue) : ?>
        <!-- svalue['innerValue (es name, lastname']  -->
        <p>Name : <?= $svalue['name'] ?> </p>
        <p>Surname :<?= $svalue['lastname'] ?> </p>
        <!-- Concluso il forEach interno -->    
        <?php endforeach; ?>
    </div>
    <!-- Condizione se la key è pm -->
    <?php elseif($key == 'pm') : ?>
    <div class="square_green">
        <?php foreach ($value as $svalue) : ?>
        <!-- value['innerValue']  -->
        <p>Name : <?= $svalue['name'] ?> </p>
        <p>Surname :<?= $svalue['lastname'] ?> </p>
        <!-- Concluso il forEach interno -->    
        <?php endforeach; ?>
    </div>
    <?php endif; ?>        
    <!-- Concluso il forEach esterno --> 
    <?php endforeach; ?> 
</body>
</html>