<?php 
function doDeduction($percent,$originalPrice){
    $deductedAmount = ($percent/100)* $originalPrice;
    $priceAfterDeduction = $originalPrice - $deductedAmount;
    return $priceAfterDeduction;
}
?>