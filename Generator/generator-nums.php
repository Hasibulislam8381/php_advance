<?php
function numGenerator(){

    for($i=0;$i<=100;$i++){
        yield $i;
    }

}

$nums = numGenerator();

foreach($nums as $num){
   echo $num . " ";
}
?>