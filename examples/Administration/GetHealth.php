<?php

namespace idcheckio;

use \idcheckio\api\AdministrationApi;

require_once(__DIR__ . '/vendor/autoload.php');

class GetHealth {

    private static $apiAdmin;

    public function init()
    {
        $config = (new Configuration())->setHost('https://api.idcheck.io/rest');
        $apiClient = new ApiClient($config);
        global $apiAdmin;
        $apiAdmin = (new AdministrationApi())->setApiClient($apiClient);
    }

    public function run()
    {
        global $apiAdmin;
        try {
           $healthResponse = $apiAdmin->getHealth();
        } catch (ApiException $ex) {
           echo "ERROR : Server returns code = " . $ex->getCode() . "\n";
        }
        echo $healthResponse->getStatus() . "\n";
    }
}
