<?php 
    echo "<h1>Left Rotation</h1>";

    function rotLeft($a, $d) {
        $size = sizeof($a);
        $rotatedArr = array();
        $i = 0;
        $rotateIndex = $d;
        while($rotateIndex < $size){
            $rotatedArr[$i] = $a[$rotateIndex];
            $i++;
            $rotateIndex++;
        }
        $rotateIndex = 0;
        while($rotateIndex < $d){
            $rotatedArr[$i] = $a[$rotateIndex];
            $i++;
            $rotateIndex++;
        }
        return $rotatedArr;
    }


?>