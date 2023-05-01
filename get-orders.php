<?php

$shop_domain = "https://miferia-shop.myshopify.com/";
$access_token = "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";

$url = "https://miferia-shop.myshopify.com/admin/api/2022-10/orders.json";
$headers = array("X-Shopify-Access-Token: $access_token");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);

$data = json_decode($result, true);
print_r($data);

?>
