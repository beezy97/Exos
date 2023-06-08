<?php 
$string = 'HeLLo';
for($i = 0; $i < strlen($string); $i++){
    if($string[$i] == strtoupper($string[$i])){
        echo strtolower($string[$i]);
    }
    else{
        echo strtoupper($string[$i]);
    }
}
?>