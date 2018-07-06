<?php
$access_token = 'HAb2zdj0l7kBYZx2427iAdhDTxePryIKHml+62clzTCex3a2hYMc80Ztv7Hvt5Xw2uWa78W12A0BafcwDagfATUhkfEo0vFnvoPkNBmJKlJWqv7YrC3Tzffr5rbgJvUHUOZCIwN+bOirYQJAJ6uQNAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
