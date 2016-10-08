<?php

$book_1 = array(

    'Style' => 'Horror',
    'Author' => 'Stephen King',
    'Title' => 'Pet Sematary',
    'Price' => '145.16'
);

$book_2 = array(

    'Style' => 'Poem',
    'Author' => 'Gabriel García Márquez',
    'Title' => 'Cien años de soledad',
    'Price' => '455.80'
);

$book_3 = array(

    'Style' => 'Autobiography',
    'Author' => 'Friedrich Nietzsche',
    'Title' => 'ECCE HOMO',
    'Price' => '451.65'
);

$book = array($book_1, $book_2, $book_3);


echo '<br>';


echo '<pre>';
print_r($book);
echo '</pre>';



?>



