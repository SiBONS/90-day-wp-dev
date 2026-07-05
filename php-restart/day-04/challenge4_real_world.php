<?php
$customer = "Mile";
$orderTotal = 155;
$deliveryType = "standard";
$shippingCost = 0;
if($deliveryType === "standard") {
  $shippingCost = 4.99;
  if($orderTotal > 100) {
  $shippingCost = 0;
}
} elseif($deliveryType === "express") {
  $shippingCost = 9.99;
  if($orderTotal > 200) {
  $shippingCost = 0;
}
} elseif($deliveryType === "overnight") {
  $shippingCost = 19.99;
}
$finalTotal = $orderTotal + $shippingCost;

echo "Hello {$customer}, your total order is {$orderTotal}.\n You choose {$deliveryType} and your shipping cost will be {$shippingCost} \n Your final total pay will be {$finalTotal}.";


?>
