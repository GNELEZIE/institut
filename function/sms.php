<?php
require 'osms/Osms.php';

use \Osms\Osms;

if(!function_exists('sendOTP')){
    function sendOTP($smsNumber,$code){
        $config = array(
            'clientId' => 'dFaMBWm3pC1ZrAXOhNOZhE79pM6u5RMu',
            'clientSecret' => 'W0JdJp7h7ccr9kIC'
        );
        $osms = new Osms($config);
        $osms->setVerifyPeerSSL(false);
        $response = $osms->getTokenFromConsumerKey();
        if(!empty($response['access_token'])){
            $senderAddress = 'tel:+2250788498964';
            $receiverAddress = 'tel:+'.$smsNumber;
            $message = 'Bonjour, votre code de vérification est: '.$code.'. Ne communiquez ce code à personne.';
            $senderName = '';
            $result = $osms->sendSMS($senderAddress, $receiverAddress, $message, $senderName);
            return json_encode($result);
        }else{
            return $response['error'];
        }
    }
}