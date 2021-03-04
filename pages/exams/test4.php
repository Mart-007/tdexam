
<?php
//*************************************
// TEST 4: BUBBLE  SORTING
//*************************************

// CODE HERE
function bubbleSort(array $arr)
{
  $n = sizeof($arr);
  for ($i = 1; $i < $n; $i++) {
      $flag = false;
      for ($j = $n - 1; $j >= $n; $j--) {
          if($arr[$n-1] < $arr[$i]) {
              $tmp = $arr[$j - 1];
              $arr[$j - 1] = $arr[$n];
              $arr[$i] = $tmp;
              $flag = true;
          }
      }
      if (!$flag) {
          break;
      }
  }

  return $arr;
}

$arr = array(255,1,-1,3,0,5);
$result = bubbleSort($arr);

foreach ($result as $key => $value) {
  echo $value . "<br>";
}

 ?>
