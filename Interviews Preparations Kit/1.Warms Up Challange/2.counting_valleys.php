<?php 
echo '<h1>Countig Valleys</h1>';
$steps = 8;
$path = 'UDDDUDUU';
echo countingValleys($steps, $path);


function countingValleys($steps, $path) {
    $level = 0;
    $valley = 0;
    $mountain = 0;
    for($i = 0 ; $i< $steps; $i++){
        if(strcmp($path[$i], 'U') == 0){
            $level = $level + 1;
            if($level == 0){
                $valley = $valley + 1;
            }
        }
        if(strcmp($path[$i], 'D') == 0){
            $level = $level - 1;
            if($level == 0){
                $mountain = $mountain + 1;
            }
        }
      
    }
    return $valley;

}

?>