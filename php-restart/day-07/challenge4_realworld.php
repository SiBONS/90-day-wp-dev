<?php
   $student = [
    "name" => "Robert Plant",
    "age" => 73,
    "class" => 434,
    "grades" => [
        "Math"    => 65,
        "Music"   => 95,
        "Science" => 31,
        "History" => 55,
    ]
];
echo "Student name: {$student['name']}, Class: {$student['class']} \n"; 
$total = 0;
foreach($student["grades"] as $subject => $score) {
    echo "{$subject}: {$score} ";
    if($score >= 50) {
        echo " - Pass\n";
    } else {
        echo " - Fail\n";
    }
    $total += $score;
}

$average = $total / count($student["grades"]);
echo "Average grade: " . round($average, 2) . "\n";
if($average >= 50) {
    echo "Overall: Passed\n";
} else {
    echo "Overall: Failed\n";
}
?>