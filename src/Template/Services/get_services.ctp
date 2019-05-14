<?php
/** @var $selectBox array */
/** @var $selectedId int */



        foreach ($services as $key => $value) {
            if($selectedId == $key){
            echo "<option value='".$key."' selected>".$value."</option>" ;
            }else{
               echo "<option value='".$key."'>".$value."</option>" ;
            }
        }
        ?>


  
