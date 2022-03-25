<?php

require "../../config/Request.php";

$response = $request->get('/api/categorys/recipes');
  

if($response->getStatusCode() == 200){

    echo $response->getBody()->getContents();
    
}else{
    echo json_encode([
        'status'    => false,
        'message'   => "Gagal ambil data"
    ]);
}