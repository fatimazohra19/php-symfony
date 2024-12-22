<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <?php
    $books =[
        [
            'name'=>'Do Androids Dream of Electric Sheep',
            'author'=>'Philip K.Dick',
            'purchaseUrl'=>'http://example.com'

        ],
        [
            'name'=>'Project Hail Mary',
            'author'=>'Andy Weir',
            'purchaseUrl'=>'http://example.com'

        ]
       
       
    ];

    ?>
   <p>
     <?php foreach($books as $book):?>
        <li>
            <a href="<?= $book['purchaseUrl']?>">
            <?= $book['name']?>
            </a>
        </li>
     <?php endforeach;?>
   </p>
    
</body>
</html>