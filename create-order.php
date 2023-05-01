<?php
$ch = curl_init();

$url = "https://miferia-shop.myshopify.com/admin/api/2022-10/orders.json";
$access_token = "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";
$data = array(
    "order" => array(
        "line_items" => array(
            array(
                "variant_id" => "44921142509841",
                "quantity" => 10
            )
        ),
        'customer' => array(
            'first_name' => 'Prajwol',
            'last_name' => 'Shrestha',
            'email' => ' pjmessi25+1998@gmail.com'
        ),
        'financial_status' => 'pending',
        'gateway' => 'OpenPay',
        'payment_gateway_names' => array(
            '0' => 'OpenPay',
            '1' => 'Net45'
        ),
        'fulfillment_status' => 'unfulfilled',
        'shipping_address' => array(
            'first_name' => 'Prajwol',
            'last_name' => 'Shrestha',
            'address1' => 'Calle, 10',
            'city' => 'Álvaro Obregón',
            'province' => 'MX',
            'country' => 'Mexico',
            'zip' => '01048',
            'phone' => ''
        )
    )
);

$headers = array(
    "X-Shopify-Access-Token: ".$access_token,
    "Content-Type: application/json"
);

$options = array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => $headers
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}

?>
