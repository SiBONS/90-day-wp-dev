<?php
    function showBlogPost($post) {
        echo "================================ \n";
        echo $post["title"] . "\n";
        echo "By {$post['author']} | {$post['date']} | {$post['category']} \n";
        echo "{$post['excerpt']} \n";
        echo "================================ \n";
    }

    $myPosts = [
        ["title" => "RTX 3060 vs RTX 5050", "author" => "Mile Kostic", "date" => "June 2026", "category" => "Hardware", "excerpt" => "We tested these two GPUs and which one should you buy....."],
        ["title" => "Coding and AI", "author" => "Sale Kostic", "date" => "May 2026", "category" => "Tech", "excerpt" => "Should you learn alongside Claude or ChatGPT....."],
         ["title" => "PHP in 2026", "author" => "Dale Nikic", "date" => "July 2026", "category" => "Web Development", "excerpt" => "PHP is still popular in WordPress Development....."],
    ];
    foreach($myPosts as $post) {
        showBlogPost($post);
    }
?>