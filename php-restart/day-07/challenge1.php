<?php
$favGames = ["Borderlands 2", "Comix Zone", "Golden Axe 3", "Overwatch", "Worms Armageddon"];
$count = 1;
foreach($favGames as $game) {
  echo $count++ . ". " . "{$game} \n";
}
?>