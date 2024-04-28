<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Recommended Books</h1>

    <?php 
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep', 
                'author' => 'Philip K. Dick',
                'releaseYear' => '1968',
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Langoliers', 
                'author' => 'Stephen King',
                'releaseYear' => '1990',
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Hail Mary', 
                'author' => 'Andy Weir',
                'releaseYear' => '2021',
                'purchaseUrl' => 'http://example.com'
            ],
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href ="<?=$book['purchaseUrl']; ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear']; ?>)
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    
</body>
</html>