<?php


$heading = 'Home';



/* if ($_SERVER['REQUEST_URI'] === '/') {
     echo 'bg-gray-950/50 text-white';
} else {
     echo 'text-gray-300';
} */

//dd($_SERVER);

require "views/index.view.php";

?> <!-- can omit if file is purely php  -->












<!-- /*         $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
            ],
            [
            'name' => 'The Langoliers',
            'author' => 'Andy Weir',
            'releaseYear' => 2020,
            'purchaseUrl' => 'http://example.com',
            ],
            [
            'name' => 'Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com',
            ],
            
        ];

        function filter($items, $fn){
            $filteredItems = [];

            foreach($items as $item){
                if($fn($item)) {
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        }

    $filteredBooks = array_filter($books, function ($book){
        return $book['releaseYear'] < 2000;
    });
 */ -->