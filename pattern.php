<?php
  for($row=1;$row<=5;$row++){

    for ($col=1;$col<=$row;$col++){
      echo "*";
      
        if($col< $row){
        echo " ";
      }
    }
  echo "\n";
  }
?>