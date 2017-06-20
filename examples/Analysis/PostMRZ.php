<?php

namespace idcheckio;

use \idcheckio\api\AnalysisApi;
use \idcheckio\model\MrzRequest;

require_once(__DIR__ . '/vendor/autoload.php');

class PostMRZ {

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

    public function run()
    {
        global $apiAnalysis;
        $resultResponse = $this->postMrz($apiAnalysis, FALSE, "IDFRABERTHIER<<<<<<<<<<<<<<<<<<<<<<<", "9409923102854CORINNE<<<<<<<6512068F4");

        if ($resultResponse != null) {
            echo "Name from this MRZ : " . $userResponse->getHolderDetail()->getLastName() . " " . $userResponse->getHolderDetail()->getFirstName() . "\n";
        }
    }

    private function postMrz(&$api, $aSync, $line1, $line2, $line3 = "") {
        $body = new MrzRequest();
        $body->setLine1($line1);
        $body->setLine2($line2);
        $body->setLine3($line3);

        global $acceptLanguage;
        try {
          $resultResponse = $api->postMrz($body, $aSync, $acceptLanguage);
        } catch (ApiException $ae) {
          echo "ERROR : Server returns code = " . $ae->getCode() . "\n";
        }

        return $resultResponse;
    }
}
