<?php

use \invoker\Configuration;
use \invoker\ApiClient;
use \invoker\ApiException;
use \invoker\ObjectSerializer;
use \api\AdministrationApi;

require_once(__DIR__ . '/vendor/autoload.php');

class GetUser {

    private static $apiAdmin;

    public function init()
    {
        $config = (new Configuration())->setHost('https://api.idcheck.io/rest')
                        ->setPassword("example")
                        ->setUsername("example@example.com");
        $apiClient = new ApiClient($config);
        global $apiAdmin;
        $apiAdmin = (new AdministrationApi())->setApiClient($apiClient);
    }

    public function run()
    {
        global $apiAdmin;
        try {
           $userResponse = $apiAdmin->getUser();
        } catch (ApiException $ex) {
           echo "ERROR : Server returns code = " . $ex->getCode() . "\n";
        }
        echo "Remaining credits = " . $userResponse->getRemainingCredits() . "\n";
    }
}
