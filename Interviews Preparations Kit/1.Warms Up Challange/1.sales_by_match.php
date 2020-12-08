<?php 
echo "<h1>Sales By Match</h1>";
$n = 9;
$ar = array(10,20,20, 10,10,30,50,10,20);
echo sockMerchant($n, $ar);

function sockMerchant($n, $ar) {
      $ar = (array_count_values($ar));
        $countMatch = 0;
        foreach($ar as $color => $amount){
            echo "Color : ". $color . "Amount : " . $amount;
            echo "<br>";
            
            $countMatch = $countMatch + floor($amount/2);
            
          }
        return $countMatch;

}
?>