<?php

namespace idcheckio;

use \idcheckio\api\AnalysisApi;

require_once(__DIR__ . '/vendor/autoload.php');

class GetTask {

    private static $apiAnalysis, $acceptLanguage;

    public function init()
    {
        $config = (new Configuration())->setHost('https://api.idcheck.io/rest')
                        ->setPassword("example")
                        ->setUsername("example@example.com");
        $apiClient = new ApiClient($config);
        global $apiAdmin;
        $apiAdmin = (new AnalysisApi())->setApiClient($apiClient);
        $acceptLanguage = "en";
    }

    // $iud -> getUid() from resultResponse
    public function run($uid)
    {
        global $apiAnalysis, $acceptLanguage;

        try {
          $resultResponse = $apiAnalysis->getTask($uid, $acceptLanguage, 30000);
        } catch (ApiException $ae) {
          echo "ERROR : Server returns code = " . $ae->getCode() . "\n";
        }
    }
}
