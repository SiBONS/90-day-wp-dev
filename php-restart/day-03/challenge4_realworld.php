<?php
$hourlyRate = 25.93;
$hours = 4.5;
$workingDays = 17;
$taxAmount = 19;
$socialCont = 10;

$dailySalary = $hourlyRate * $hours;
$monthlySalary = $dailySalary * $workingDays;
$taxRate = $monthlySalary * ($taxAmount / 100);
$socialAmount = $monthlySalary * ($socialCont / 100);
$totalDeductions = $taxRate + $socialAmount;
$netSalary = $monthlySalary - $totalDeductions;

echo "My hourly rate is {$hourlyRate}, I worked every day for {$hours} hours and my gross daily salary is " . round($dailySalary, 2) . "\n";
echo "My gross monthly salary is " . round($monthlySalary, 2) . "\n";
echo "The tax that I am paying on monthly basis is " . round($taxRate, 2) . "\n";
echo "The amount that I am paying for social contribution is " . round($socialAmount, 2) . "\n";
echo "Total deductions for my social and tax are in total " . round($totalDeductions, 2) . "\n";
echo "When we substract, my net income in total is " . round($netSalary, 2) . "\n";

?>