<?php

namespace idcheckio;

use \idcheckio\api\AnalysisApi;

require_once(__DIR__ . '/vendor/autoload.php');

class GetResult {

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
          $resultResponse = $apiAnalysis->getResult($uid, $acceptLanguage, FALSE, FALSE, FALSE);
        } catch (ApiException $ae) {
          echo "ERROR : Server returns code = " . $ae . "\n";
        }
    }
}
