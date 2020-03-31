<?php

function ifsessionExists($session){
    // check if session exists?
      if(isset($session['userId'])){
        return true;
      }else{
        return false;
      }
     }
?>