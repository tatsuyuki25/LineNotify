<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://notify-api.line.me/api/notify",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "message=test&stickerPackageId=1&stickerId=2",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer wMgE95VDP8D04LgiZEkwIryb6xkVJTsZu6GzcoJemBf",
    "Cache-Control: no-cache",
    "Content-Type: application/x-www-form-urlencoded",
    "Postman-Token: 55430716-471f-4a9f-b7a8-1d7b2e1a0c3c"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>