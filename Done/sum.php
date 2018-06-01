<?php

    function sum(){
        $result = 0;
        for ($i = 9; $i <51; $i++) {
            $result = $result + $i;
        }
        return $result . PHP_EOL;
    }
  sum(); 
  
  if ($result > 900) {
      echo "900より大きい";
      
  }
  else ($result <900){
      echo "900以下";
  }

?>