<?php

namespace App\Models;

use CodeIgniter\Model;

class CoinAPIModel extends Model
{
    //protected $ApiKey = "0E952DF-2570-4EBA-B081-0A358D4CAD5"; // insert here you api key
    public function CurlRequest($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //     'X-CoinAPI-Key: ' . $this->ApiKey,
        //     'Content-Type: application'
        // ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        $http_status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        //dd($http_status_code);
        return json_decode($output, true);
    }

    function GetTradesLatest()
    {
        $url = "https://api.coingecko.com/api/v3/exchange_rates";
        return $this->CurlRequest($url);
    }
}
