<?php
    if(isset($_POST["productName"])){
        include 'connect.php';

        $productName = $_POST["productName"];
        $productDescription = $_POST["productDescription"];
        $productPrice = $_POST["productPrice"];
        $productImage = $_FILE["productImage"];

    $message
    
    if($productName==""){
        $message    = "Product Name must be filled!";
    }else if($productDescription==){
        $message    = "Product Description must be filled";
    }else if($productPrice==""){
        $message    = "Product Price must be filled";
    }else if(isset($productImage["tmp_name"])){
        
    }

    }
?>