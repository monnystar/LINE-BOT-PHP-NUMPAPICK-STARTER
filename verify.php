<?php
$access_token = 'D8rY4iCGBn9HQkzO+EKoTWPDL+uoxD7rQWhKlMv36VQfkd5IkP5CEUd/2q+nyCy3cXxbSz6bL2rDJ2mRnszhJxg0psMNOuZwp200CzoWUhQpcuCocWtMGcWJtjJzKEBAlbcFyZ/eWr7kqwI7hKUuawdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
