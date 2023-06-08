<?php
$tab = array(rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100), rand(1,100));
sort($tab);
for($i=0; $i<count($tab); $i++){
    echo $tab[$i].' ';
}
?>