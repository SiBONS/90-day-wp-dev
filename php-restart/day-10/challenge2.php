<?php

$_GET = [];

$search = $_GET["search"] ?? "No search term";

echo "Searching for: {$search} \n";

$page = (int) ($_GET["page"] ?? 1);

echo "Page: {$page}";

?>