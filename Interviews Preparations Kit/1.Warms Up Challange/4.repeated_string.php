<?php 
    echo '<h1>Repeated Strings</h1>';
    $s = 'aba';
    $n = 10;
    echo repeatedString($s, $n);

    function repeatedString($s, $n) {
        $aInString = 0;
    for($i = 0 ; $i < strlen($s); $i++){
        if (strcmp($s[$i], 'a') == 0) {
            $aInString = $aInString + 1;
        }
    }
    $divide = floor($n/strlen($s));
    $rest = $n % strlen($s);
    $numberOfA = $aInString * $divide;
    for($j = 0; $j< $rest; $j++){
        if (strcmp($s[$j], 'a') == 0) {
            $numberOfA = $numberOfA + 1;
        }
    }
    return $numberOfA;

    }

?>