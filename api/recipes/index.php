<?php

require "../../config/Request.php";

// $response = $request->get('/api/recipes/');

if(isset($_GET['page']) && $_GET['page'] != "" ){
    
    $response = $request->get('/api/recipes/'. $_GET['page']);
     
}

if(isset($_GET['limit']) && $_GET['limit'] != "" ){
    
    $response = $request->get('/api/recipes-length/?limit='. $_GET['limit']);
     
}

if(isset($_GET['category']) && $_GET['category'] != "" ){

    $response = $request->get('/api/category/recipes/' . $_GET['category']);
    
}

if(isset($_GET['detail']) && $_GET['detail'] != "" ){

    $response = $request->get('/api/recipe/' . $_GET['detail']);
    
}

if(isset($_GET['search']) && $_GET['search'] != "" ){

    $response = $request->get('/api/search/?q=' . $_GET['search']);
    
}

    
if($response->getStatusCode() == 200){

    echo $response->getBody()->getContents();
    
}