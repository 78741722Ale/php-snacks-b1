<?php
/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. */

/* Prendere un paragrafo abbastanza lungo */
$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Vitae, porro accusamus quos quasi voluptatum nemo sequi alias nostrum. 
Officia illum ullam consequatur error beatae eius provident? 
Neque eos praesentium nobis veniam esse quos voluptates dignissimos 
ratione perspiciatis quam? Nemo eligendi velit necessitatibus! 
Ipsa iure ratione ipsam qui impedit, maxime facere, eos quo earum 
suscipit fugit debitis asperiores quia laudantium non expedita harum 
voluptates sapiente architecto accusamus enim temporibus ut a sed? 
Eligendi deserunt deleniti ex explicabo suscipit? Numquam dolorem 
soluta tenetur at, ut unde exercitationem, architecto magnam quod 
atque omnis consequuntur praesentium officiis vero ex totam nesciunt. 
Nulla, nemo deserunt.";

var_dump("Questo è il paragrafo abbastanza lungo : " .$paragraph);

/* Prendere il paragrafo e suddividerlo in tanti paragrafi.  */
/* Snack non completato */

$splitted = explode(".", $paragraph);
var_dump($splitted)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    
    <?php foreach ($paragraph as $splitted) : ?>
        <p><?= $splitted ?></p>
    <?php endforeach ?>
</body>
</html>