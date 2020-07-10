<?php
namespace App\Libraries;

class Commons
{

    public function __construct()
    {
        $this->session = session();
    }

    public function __call(string $method, array $arguments)
    {

    }

    public function LoginCurl(array $logindata)
    {
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL            => "https://api.beautysoft.ml/auth/login",
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_TIMEOUT        => 5,
                CURLOPT_FOLLOWLOCATION => TRUE,
                CURLOPT_SSL_VERIFYPEER => FALSE,
                //CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_2TLS,
                CURLOPT_CUSTOMREQUEST  => "POST",
                CURLOPT_POSTFIELDS     => json_encode($logindata),
                CURLOPT_HTTPHEADER     => array(
                    "Content-Type: application/json"
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            //print_r($response);
            return $response;
        } catch (\Exception $e){
            print_r($e);
        }
    }

    public function cModal(){

    }
}
