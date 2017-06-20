<?php

namespace idcheckio;

use \idcheckio\api\SandboxApi;

require_once(__DIR__ . '/vendor/autoload.php');

class GetImageTest {

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

    // $imageUid => getImage()[0] from a ImageListResponse
    public function run($imageUid)
    {
        global $apiSandbox;
        try {
            $imageResponse = $apiSandbox->getImage($imageUid);
        } catch (ApiException $ae) {
            echo "ERROR : Server returns code = " . $ae . "\n";
        }
    }
}
