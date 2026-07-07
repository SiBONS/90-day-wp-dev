<?php 
$student = [
    "name" => "Robert Plant",
    "age" => 73,
    "class" => 434,
 "grades" => [
    "Math"    => 65,
    "Music" => 95,
    "Science" => 31,
    "History" => 55,
]
];

echo "Student name: {$student['name']}, Class: {$student['class']} \n";
echo "Math: {$student['grades']['Math']}";
if($student['grades']['Math'] >=50) {
    echo " - Pass \n";
} else {
 echo " - Fail \n";
}
echo "Music: {$student['grades']['Music']}";
if($student['grades']['Music'] >=50) {
    echo " - Pass  \n";
} else {
 echo " - Fail \n";
}
echo "Science: {$student['grades']['Science']}";
if($student['grades']['Science'] >=50) {
    echo " - Pass \n ";
} else {
 echo " - Fail \n";
}
echo "History: {$student['grades']['History']}";
if($student['grades']['History'] >=50) {
    echo " - Pass \n ";
} else {
 echo " - Fail \n";
}

$average = ($student["grades"]["Math"] + $student["grades"]["Music"] + $student["grades"]["Science"] + $student["grades"]["History"]) / 4;
echo "Average grade: " . round($average, 2) . "\n";
if($average >= 50) {
    echo "Overall: Passed \n";
} else {
    echo "Overall: Failed \n";
}
?>