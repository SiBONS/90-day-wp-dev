<?php
    $students = [
        ["name" => "Mile", "grade" => 76],
        ["name" => "Saska", "grade" => 98],
        ["name" => "Ivana", "grade" => 32]
    ];
    $passed = 0;
    $failed = 0;
    foreach($students as $student) {
        echo "{$student['name']}: {$student['grade']}";
        if($student["grade"] > 50 ) {
            echo " - Pass \n";
            $passed++;
        } else {
            echo " - Fail \n";
            $failed++;
        }
    }
    echo "Passed: {$passed} | Failed: {$failed}";
?>