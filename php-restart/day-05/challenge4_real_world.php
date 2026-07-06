<?php
$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
$sales = [4443, 2223, 4322, 544, 3456, 1005, 2223];
echo "{$days[0]}: {$sales[0]} \n";
echo "{$days[1]}: {$sales[1]} \n";
echo "{$days[2]}: {$sales[2]} \n";
echo "{$days[3]}: {$sales[3]} \n";
echo "{$days[4]}: {$sales[4]} \n";
echo "{$days[5]}: {$sales[5]} \n";
echo "{$days[6]}: {$sales[6]} \n";
$total = $sales[0] + $sales[1] + $sales[2] + $sales[3] + $sales[4] + $sales[5] + $sales[6];
echo "Total weekly sales: {$total} \n";
if($total > 5000) {
    echo "Good week! \n";
} else {
    echo "Bad week! \n";
}
$bestDay = 0;
if($sales[1] > $sales[$bestDay]) $bestDay = 1;
if($sales[2] > $sales[$bestDay]) $bestDay = 2;
if($sales[3] > $sales[$bestDay]) $bestDay = 3;
if($sales[4] > $sales[$bestDay]) $bestDay = 4;
if($sales[5] > $sales[$bestDay]) $bestDay = 5;
if($sales[6] > $sales[$bestDay]) $bestDay = 6;
echo "Best day: " . $days[$bestDay] . "\n";
?>