<?php

use \invoker\Configuration;
use \invoker\ApiClient;
use \invoker\ApiException;
use \invoker\ObjectSerializer;
use \api\SandboxApi;

require_once(__DIR__ . '/vendor/autoload.php');

class GetMrzTest {

    private static $apiSandbox, $acceptLanguage;

    public function init()
    {
        $config = (new Configuration())->setHost('https://api.idcheck.io/rest')
                        ->setPassword("example")
                        ->setUsername("example@example.com");
        $apiClient = new ApiClient($config);
        global $apiSandbox;
        $apiSandbox = (new SandboxApi())->setApiClient($apiClient);
        $acceptLanguage = "en";
    }

    // $mrzUid => getMrz()[0] from a MrzListResponse
    public function run($mrzUid)
    {
        global $apiSandbox;
        try {
            $mrzResponse = $apiSandbox->getMrz($mrzUid);
        } catch (ApiException $ae) {
            echo "ERROR : Server returns code = " . $ae . "\n";
        }
    }
}
