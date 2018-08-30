<?php



require "vendor/autoload.php";

$access_token = '4gwyL4yL3lJd6gduEz4v6sTf22BapfYTKUUih3dzyPnPgD6Ul6ur62bPUqhAa2/XIQzDSgKtOziSQPAjqkK1Rg9JdSO+WRsMAWuKoz5sXYBuHNmZG0ueAIegq0vYIy9M5PjtZmI4F8dwmMjWHh8iYgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5c4e58ec37a21d732608833f2f9f9fb9';

$pushID = 'U2c1543f7b76fd3dcb9d11806dabc15d2';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world อิอิ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();






