<?php

namespace idcheckio;

use \idcheckio\api\AnalysisApi;

require_once(__DIR__ . '/vendor/autoload.php');

class GetReport {

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
          $reportResponse = $apiAnalysis->getReport($uid, $acceptLanguage);
        } catch (ApiException $ae) {
          echo "ERROR : Server returns code = " . $ae . "\n";
        }
        if ($reportResponse != null) {
          $this->base64_to_jpeg($reportResponse->getReport(), "/tmp/report.pdf");
        }
    }

    private function base64_to_jpeg($base64_string, $output_file)
    {
        $ifp = fopen($output_file, "wb");
        fwrite($ifp, base64_decode($base64_string));
        fclose($ifp);
        return $output_file;
    }
}
