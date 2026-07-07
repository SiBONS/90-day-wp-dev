<?php 
$post = [
    "title"   => "RX 7600 vs RTX 3060",
    "content" => "The best battle for entry level budget graphics cards for your gaming experience.",
    "author"  => [         
        "name"  => "Mile Kostic",
        "email" => "kostic.mile@mail.com",
        "role"  => "Admin"
    ],
    "stats"   => [          
        "views"    => 1454,
        "comments" => 33,
        "likes"    => 44,
    ],
];

echo "Title: {$post['title']} \n";
echo "Author: {$post['author']['name']} ({$post['author']['email']}) \n";
echo "Role: {$post['author']['role']} \n";
echo "Views: {$post['stats']['views']} Comments: {$post['stats']['comments']} Likes: {$post['stats']['likes']} \n";
?>