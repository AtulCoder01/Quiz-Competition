 <?php
function nonRepeat($min,$max,$count) {

    //prevent function from hanging 
    //due to a request of more values than are possible    
    if($max - $min < $count) {
        return false;
    }
    
   $nonrepeatarray = array();
   for($i = 0; $i <= $count; $i++) {
      $rand = rand($min,$max);
      
      //ensure value isn't already in the array
      //if it is, recalculate the rand until we
      //find one that's not in the array
      while(in_array($rand,$nonrepeatarray)) {
        $rand = rand($min,$max);
      }
      
      //add it to the array
      $nonrepeatarray[$i] = $rand;
   }
   return $nonrepeatarray;
}


//give it a test run
$test = nonRepeat(0,20,20);
echo "<pre>";
print_r($test);
echo "</pre>";
?> 
