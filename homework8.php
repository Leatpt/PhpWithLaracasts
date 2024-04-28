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
        $movies = [
            [
                'name' => 'The Shawshank Redemption', 
                'releaseYear' => 1994,
            ],
            [
                'name' => 'The Godfather', 
                'releaseYear' => 1972,
            ],
            [
                'name' => 'The Dark Knight', 
                'releaseYear' => 2008,
            ],
            [
                'name' => 'The Lord of the Rings: The Return of the King', 
                'releaseYear' => 2003,
            ],
            [
                'name' => 'Pulp Fiction', 
                'releaseYear' => 1994,
            ],
            [
                'name' => 'Inception', 
                'releaseYear' => 2010,
            ],
            [
                'name' => 'Dune: Part Two', 
                'releaseYear' => 2024,
            ],
        ];

        function filterByYear($movies, $releaseYear){
            $filteredMovies = [];

            foreach ($movies as $movie){
                if($movie['releaseYear'] >= $releaseYear){
                    $filteredMovies[] = $movie;
                }
            }

            return $filteredMovies;
        }
    ?>

    <ul>
        <?php foreach (filterByYear($movies, '2000') as $movie) : ?>
                <li>
                        <?= $movie['name']; ?> (<?= $movie['releaseYear']; ?>)
                </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>