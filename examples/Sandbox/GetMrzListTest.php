<?php

namespace idcheckio;

use \idcheckio\api\SandboxApi;

require_once(__DIR__ . '/vendor/autoload.php');

class GetMrzListTest {

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
            $mrzListResponse = $apiSandbox->getMrzList();
        } catch (ApiException $ae) {
            echo "ERROR : Server returns code = " . $ae . "\n";
        }
    }
}
