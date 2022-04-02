<?php

if($nameError== "" && $priceError == "" && $descriptionError == ""){
echo $submitError;
} else {
  echo '<div style="background-color:grey;display:flex;justify-content:space-between;padding:10px;">
  <span>'.
      $nameError, $priceError, $descriptionError
  .'</span>
  <button onclick="$(this).parent().remove();">x</button>';
}



