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
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Langoliers', 
                'author' => 'Stephen King',
                'releaseYear' => 1990,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Hail Mary', 
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'The Martian', 
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'http://example.com'
            ],
        ];

        $filteredItems = array_filter($books, function ($book) {
            return $book['releaseYear'] > 1950 && $book['releaseYear'] < 2020;
        });
    ?>

    <ul>
        <?php foreach ($filteredItems as $book) : ?>
                <li>
                    <a href ="<?=$book['purchaseUrl']; ?>">
                        <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) - By <?= $book['author']; ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>