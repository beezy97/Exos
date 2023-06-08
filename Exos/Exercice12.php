<?php 
$sum = 0;
$tab = array(2,56,44,25,10,16,80);
for($i = 0; $i < count($tab); $i++){
    if($tab[$i]%2 == 0){
        $sum += $tab[$i];
    }
}
echo $sum;
?>