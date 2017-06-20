<?php

namespace idcheckio;

use \idcheckio\api\ImageRequest;

require_once(__DIR__ . '/vendor/autoload.php');

class PostImage {

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
        global $acceptLanguage, $apiAnalysis, $imagePath;

        $body = new ImageRequest();
        try {
            $frontImageFile = '/tmp/berthier_recto.jpg';
            $backImageFile = '/tmp/berthier_verso.jpg';
            $frontImageContent = file_get_contents($frontImageFile);
            $backImageContent = file_get_contents($backImageFile);
            $body->setFrontImage(base64_encode($frontImageContent));
            $body->setBackImage(base64_encode($backImageContent));
        } catch (IOException $ioe) {
            echo "Unable to encode file(s) => " . $ioe->getMessage() . "\n";
        }

        try {
          $resultResponse = $apiAnalysis->postImage($body, FALSE, $acceptLanguage);
        } catch (ApiException $ae) {
          echo "ERROR : Server returns code =  " . $ioe->getCode() . "\n";
        }

        if ($resultResponse != null) {
          echo "MRZ from the document : " . $resultResponse->getMrz()->getLine1() . "/" . $resultResponse->getMrz()->getLine2() . "\n";
        }
    }
}
