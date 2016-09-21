<?php
$client = new SoapClient('https://www.smsglobal.com/mobileworks/soapserver.php?wsdl');
//var_dump($client->__getFunctions());
$token = $client->apiValidateLogin("v546433j", "4LhgLBgn");
//echo $token;

$str = $client->apiSendSms($token, 'lkjlk', '+380935177059', 'hello', 'text', '0', '0');
echo $str;
