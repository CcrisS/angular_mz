<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

include_once('Product.php');

class Client
{
    const TOTAL_PRODUCTS = 8;

    public function __construct()
    {
        $products = array();
        for ($i = 0; $i < self::TOTAL_PRODUCTS; $i++) { 
            $randomProduct =new Product();
            $products[] = $randomProduct->toArray();
        }

        echo json_encode($products);
    }
}

try {

    $client = new Client();

} catch (Exception $e) {
    echo $e->getMessage();
    http_response_code(500);
}