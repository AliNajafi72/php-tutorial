<?php


class SMS
{
    private string $apiKey;
    private string $secretKey;
    private string $sendDateAndTime;
    public function __construct($apiKey, $secretKey)
    {
        $this->apiKey = $apiKey;
        $this->secretKey = $secretKey;
        date_default_timezone_set("Asia/Tehran");
        $this->sendDateAndTime = date("Y-m-d")."T".date("H:i:s");
    }

    public function sendMessage() {
        $postData = array(
            'Messages' => array("Hello"),
            'MobileNumbers' => array("09392847470"),
            'LineNumber' => "30002101004094",
            'SendDateTime' => $this->sendDateAndTime,
            'CanContinueInCaseOfError' => 'false'
        );
        $ch = curl_init("https://RestfulSms.com/api/MessageSend");
        $postString = json_encode($postData);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'x-sms-ir-secure-token: '.$this->getToken()
            )
        );
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);

        $result = curl_exec($ch);
        curl_close($ch);
        var_dump($result);
    }

    public function getToken() {
        $postData = [
            "UserApiKey" => $this->apiKey,
            "SecretKey" => $this->secretKey
        ];
        $ch = curl_init('http://RestfulSms.com/api/Token');
        var_dump($ch);
        curl_setopt($ch,CURLOPT_HTTPHEADER, array(
            'Content-type: application/json'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_PROXY_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
        $rawResult = curl_exec($ch);
        curl_close($ch);
        var_dump(json_decode($rawResult));
    }
}