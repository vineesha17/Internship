<?php
$customerName = "Rahul";
$packageWeight = 12;
$deliveryType = "Express";
$distance = 180;
$isFragile = true;
$paymentMode = "Online";
$isInsured = true;


//2
if($packageWeight>0 && $distance>0 && $deliveryType!=""){
   echo "Vaild shipment details";
}
else {
    echo "Invalid shipment details";
} 


//3
if($packageWeight<=5) {
    $baseCharge = 100;
}
elseif($packageWeight<=15) {
    $baseCharge = 250;
}
elseif ($packageWeight<=30){
    $baseCharge = 500;
}
else {
    $baseCharge = 800;
}

//4
if($distance<=50) {
    $distanceCharge = 50;
}
elseif($distance<=200) {
    $distanceCharge = 150;
}
else {
    $distanceCharge = 300;

}

//5
switch($deliveryType){
    case "Standard":
        $deliveryCharge = 0;
        break;
    case "Express":
        $deliveryCharge = 200;
        break;
    case "Same Day":
        $deliveryCharge = 500;
        break;

}

//6
if($isFragile){
    $handlingFee = 100;
}

//7
$totalCharge = $baseCharge + $distanceCharge + $deliveryCharge + $handlingFee;

if($isInsured) {
    $insuranceFee = 0.05 * $totalCharge;
}

//8
switch($paymentMode) {
    case "Online":
        $discount = ($totalCharge + $insuranceFee) * 0.1;
        break;
    case "UPI":
        $discount = ($totalCharge + $insuranceFee) * 0.05;
        break;
    case "COD":
        $discount = 0;
        break;
}

//9
if($deliveryType == "Same Day Delivery") {
    echo "Urgent";

}
elseif($isFragile){
    echo "High Priority";
}
elseif($packageWeight > 20) {
    echo "Heavy Shipment";
}
else {
    echo "Normal Delivery";
}


//10
$finalAmount = $totalCharge + $insuranceFee - $discount;


//11
echo "Shipment Details:\n";
echo "Customer Name: " . $customerName . "\n";
echo "Package Weight: " . $packageWeight . " kg\n";
echo "Delivery Type: " . $deliveryType . "\n";
echo "Distance: " . $distance . " km\n";
echo "Is Fragile: " . ($isFragile ? "Yes" : "No") . "\n";
echo "Payment Mode: " . $paymentMode . "\n";
echo "Is Insured: " . ($isInsured ? "Yes" : "No") . "\n";
echo "Total Charge: $" . $totalCharge . "\n";
echo "Insurance Fee: $" . $insuranceFee . "\n";
echo "Discount: $" . $discount . "\n";
echo "Final Amount: $" . $finalAmount . "\n"; 

?>