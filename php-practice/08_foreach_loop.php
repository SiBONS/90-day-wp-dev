<?php
$books = [
    ["title" => "Brave New World", "author" => "Aldous Huxley", "year" => 1932],
    ["title" => "HGTTG", "author" => "Douglas Adams", "year" => 1979],
    ["title" => "Digital Fortress", "author" => "Dan Brown", "year" => 1999],
];

foreach($books as $book) {
    echo "{$book['title']} by {$book['author']} - {$book['year']} \n";
}
?>