<?php 
function formatExcerpt($text, $maxLength) {
    if(strlen($text) > $maxLength) {
       return substr($text, 0, $maxLength) . "...";
    } else {
    return $text;
}
}

function formatPost($post) {
   return $post["title"] . "\n" . $post["author"] . "\n" . $post["date"] . "\n" . formatExcerpt($post["excerpt"], 50) . "\n";
 }

$blogPosts = [
    ["title" => "Demistifying CSS", "author" => "Kevin Powel", "date" => "June 2024", "excerpt" => "My flagship course to help you truly understand CSS. Through in-depth lessons on how CSS actually works and interactive challenges to reinforce everything you learn, you'll master the logic behind layouts, positioning, and more, so you can write scalable, maintainable CSS with confidence.

"],
["title" => "RTX 3060 vs RX 7600", "author" => "Mile Kostic", "date" => "July 2026", "excerpt" => "The heaviest battle against all odds. The budget friendly 3060 and RX 7600 are still important for entry level and with good price they offer a lot of quality FPS for 'bang for your buck'."],
["title" => "Deep Purple Coming back in 2026", "author" => "Mile Kostic", "date" => "June 2026", "excerpt" => "Legends of heavy rock are back.. At the moment they are playing for over 6 decades and going strong. They changed the producer and it seems it goes well but we will see how this album will age. In 10 years or so."]
];

foreach($blogPosts as $post) {
    echo formatPost($post);
}

?>