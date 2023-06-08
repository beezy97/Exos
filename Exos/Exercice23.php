<?php 
$tab = array(5,9,10,2,20);
for($i = 0; $i < count($tab); $i++){
    if($tab[$i]%2 == 0){
        echo 'Le nombre'. ' '.$tab[$i]. ' '.'est un nombre premier';
    }else{
        echo $tab[$i]."n'est pas un nombre premier";
    }
}
?>