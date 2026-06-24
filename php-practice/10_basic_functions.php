<?php 
function greet($name) {
  echo "Hello, " . $name . "\n";  
}

function showCity($city) {
    echo "I live in " . $city . "\n";
}

function introduce($name, $city, $age) {
    echo "Hi, I am {$name} from {$city} and I am {$age} years old \n";
}

greet("Mile");
greet("Saska");

showCity("Pancevo");
showCity("Sodara");

introduce("Mile", "Pancevo", 38);
introduce("Saska", "Belgrade", 35);
?>