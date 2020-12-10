<?php
    $connection = new mysqli("locallhost","root","","crudPHP");
    if(!$connection){
        echo "Connection error";
        exit();
    }