<?php
$phrase = "je me nomme alex";
$nbrvoy = 0;
$voyelle = array("a","e","i","o","u","y");
for($i=0; $i<strlen($phrase); $i++){
   if(in_array($phrase[$i],$voyelle)){
    $nbrvoy++;
   }
}
echo $nbrvoy;
?>