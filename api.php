<?php
header('Content-type: application/json');

$response = json_decode(file_get_contents("https://api.bitpin.org/v1/mkt/markets/"), true);

foreach ($response['results'] as $currency) {
    $aj[$currency['code']] = [
        'Price' => $currency['price'],
    ];
}
echo json_encode($aj, 448);
?>
