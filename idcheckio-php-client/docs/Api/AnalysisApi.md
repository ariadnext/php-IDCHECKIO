# invoker\AnalysisApi

All URIs are relative to *https://localhost/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReport**](AnalysisApi.md#getReport) | **GET** /v0/pdfreport/{analysisRefUid} | HTTP GET report (demo)
[**getResult**](AnalysisApi.md#getResult) | **GET** /v0/result/{analysisRefUid} | HTTP GET result
[**getTask**](AnalysisApi.md#getTask) | **GET** /v0/task/{analysisRefUid} | HTTP GET task
[**postImage**](AnalysisApi.md#postImage) | **POST** /v0/task/image | HTTP POST task image
[**postMrz**](AnalysisApi.md#postMrz) | **POST** /v0/task/mrz | HTTP POST task mrz


# **getReport**
> \model\ReportResponse getReport($analysis_ref_uid, $accept_language)

HTTP GET report (demo)

Get a pdf report (base64 encoded) (demo)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
invoker\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
invoker\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new invoker\Api\AnalysisApi();
$analysis_ref_uid = "analysis_ref_uid_example"; // string | Report analysisRefUid
$accept_language = "accept_language_example"; // string | Accept language header

try {
    $result = $api_instance->getReport($analysis_ref_uid, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->getReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analysis_ref_uid** | **string**| Report analysisRefUid |
 **accept_language** | **string**| Accept language header | [optional]

### Return type

[**\model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResult**
> \model\ResultResponse getResult($analysis_ref_uid, $accept_language, $recto_image_cropped, $face_image_cropped, $signature_image_cropped)

HTTP GET result

Get result controls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
invoker\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
invoker\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new invoker\Api\AnalysisApi();
$analysis_ref_uid = "analysis_ref_uid_example"; // string | Result analysisRefUid
$accept_language = "accept_language_example"; // string | Accept language header
$recto_image_cropped = false; // bool | True to obtain recto image cropped if applicable
$face_image_cropped = false; // bool | True to obtain face image cropped if applicable
$signature_image_cropped = false; // bool | True to obtain signature image cropped if applicable

try {
    $result = $api_instance->getResult($analysis_ref_uid, $accept_language, $recto_image_cropped, $face_image_cropped, $signature_image_cropped);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->getResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analysis_ref_uid** | **string**| Result analysisRefUid |
 **accept_language** | **string**| Accept language header | [optional]
 **recto_image_cropped** | **bool**| True to obtain recto image cropped if applicable | [optional] [default to false]
 **face_image_cropped** | **bool**| True to obtain face image cropped if applicable | [optional] [default to false]
 **signature_image_cropped** | **bool**| True to obtain signature image cropped if applicable | [optional] [default to false]

### Return type

[**\model\ResultResponse**](../Model/ResultResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTask**
> \model\TaskResponse getTask($analysis_ref_uid, $accept_language, $wait)

HTTP GET task

Get task status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
invoker\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
invoker\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new invoker\Api\AnalysisApi();
$analysis_ref_uid = "analysis_ref_uid_example"; // string | Task analysisRefUid
$accept_language = "accept_language_example"; // string | Accept language header
$wait = 789; // int | specify a maximum wait time in milliseconds

try {
    $result = $api_instance->getTask($analysis_ref_uid, $accept_language, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->getTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **analysis_ref_uid** | **string**| Task analysisRefUid |
 **accept_language** | **string**| Accept language header | [optional]
 **wait** | **int**| specify a maximum wait time in milliseconds | [optional]

### Return type

[**\model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postImage**
> \model\ResultResponse postImage($body, $async_mode, $accept_language)

HTTP POST task image

POST an image check task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
invoker\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
invoker\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new invoker\Api\AnalysisApi();
$body = new \model\ImageRequest(); // \model\ImageRequest | Image request
$async_mode = true; // bool | true to activate asynchrone mode
$accept_language = "accept_language_example"; // string | Accept language header

try {
    $result = $api_instance->postImage($body, $async_mode, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->postImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\model\ImageRequest**](../Model/\model\ImageRequest.md)| Image request |
 **async_mode** | **bool**| true to activate asynchrone mode | [optional]
 **accept_language** | **string**| Accept language header | [optional]

### Return type

[**\model\ResultResponse**](../Model/ResultResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMrz**
> \model\ResultResponse postMrz($body, $async_mode, $accept_language)

HTTP POST task mrz

POST a mrz check task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
invoker\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
invoker\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new invoker\Api\AnalysisApi();
$body = new \model\MrzRequest(); // \model\MrzRequest | Mrz request
$async_mode = true; // bool | true to activate asynchrone mode
$accept_language = "accept_language_example"; // string | Accept language header

try {
    $result = $api_instance->postMrz($body, $async_mode, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->postMrz: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\model\MrzRequest**](../Model/\model\MrzRequest.md)| Mrz request |
 **async_mode** | **bool**| true to activate asynchrone mode | [optional]
 **accept_language** | **string**| Accept language header | [optional]

### Return type

[**\model\ResultResponse**](../Model/ResultResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

