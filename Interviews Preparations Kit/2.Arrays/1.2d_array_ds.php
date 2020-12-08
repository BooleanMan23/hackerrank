<?php 
echo "<h1>2D Array DS</h1>";
$arr = array(1,1,1,0,0,0,
             0,1,0,0,0,0,
             1,1,1,0,0,0,
             0,0,2,4,4,0,
             0,0,0,2,0,0,
             0,0,1,2,4,0);

echo hourglassSum($arr);

function hourglassSum($arr) {
    $sumOfHourglass = array();
    for($i = 0 ; $i < 6; $i++){
        for($j = 0; $j < 6; $j++){
            if(isset($arr[$i][$j]) && 
            isset($arr[$i][$j+1]) && 
            isset($arr[$i][$j+2]) &&
            isset($arr[$i+1][$j+1]) &&
            isset($arr[$i+2][$j]) &&
            isset($arr[$i+2][$j+1]) &&
            isset($arr[$i+2][$j+2]) ){
                $sumOfOneHourGlass = $arr[$i][$j] + 
                                    $arr[$i][$j+1] +
                                    $arr[$i][$j+2] + 
                                    $arr[$i+1][$j+1] + 
                                    $arr[$i+2][$j] + 
                                    $arr[$i+2][$j+1] +
                                    $arr[$i+2][$j+2];

                array_push($sumOfHourglass,$sumOfOneHourGlass);
            }
        }
    
    }

return max($sumOfHourglass);

}

?>