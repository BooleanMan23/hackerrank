<?php 
echo '<h1>Countig Valleys</h1>';


function jumpingOnClouds($c) {
    $count = 0;
for($i = 0; $i< sizeof($c);){
    if(isset($c[$i+2]) == true){
        if($c[$i+2] == 1){
            $i = $i+1;
            $count = $count+1;
        }else{
            $i = $i+2;
            $count = $count + 1;
        }
    }else if(isset($c[$i+1]) == true){
        if($c[$i+1] != 1){
            $i = $i+1;
            $count = $count+1;
        }
      
    }else{
        break;
    }
}
return $count;

}


?>