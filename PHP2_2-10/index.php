<?php
function getVolume($vertical, $beside, $height){
    $volume = $vertical * $beside * $height;
    print $volume;
}

getVolume(5, 10, 8);

?>