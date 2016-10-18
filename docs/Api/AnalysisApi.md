# Swagger\Client\AnalysisApi

All URIs are relative to *https://localhost/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReport**](AnalysisApi.md#getReport) | **GET** /v0/pdfreport/{analysisRefUid} | HTTP GET report (demo)
[**getResult**](AnalysisApi.md#getResult) | **GET** /v0/result/{analysisRefUid} | HTTP GET result
[**getTask**](AnalysisApi.md#getTask) | **GET** /v0/task/{analysisRefUid} | HTTP GET task
[**postImage**](AnalysisApi.md#postImage) | **POST** /v0/task/image | HTTP POST task image
[**postMrz**](AnalysisApi.md#postMrz) | **POST** /v0/task/mrz | HTTP POST task mrz


# **getReport**
> \Swagger\Client\Model\ReportResponse getReport($analysis_ref_uid, $authorization, $accept_language)

HTTP GET report (demo)

Get a pdf report (base64 encoded) (demo)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisApi();
$analysis_ref_uid = "analysis_ref_uid_example"; // string | Report analysisRefUid
$authorization = "authorization_example"; // string | Authorization header
$accept_language = "accept_language_example"; // string | Accept language header

try {
    $result = $api_instance->getReport($analysis_ref_uid, $authorization, $accept_language);
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
 **authorization** | **string**| Authorization header |
 **accept_language** | **string**| Accept language header | [optional]

### Return type

[**\Swagger\Client\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResult**
> \Swagger\Client\Model\ResultResponse getResult($analysis_ref_uid, $authorization, $accept_language, $recto_image_cropped, $face_image_cropped, $signature_image_cropped)

HTTP GET result

Get result controls

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisApi();
$analysis_ref_uid = "analysis_ref_uid_example"; // string | Result analysisRefUid
$authorization = "authorization_example"; // string | Authorization header
$accept_language = "accept_language_example"; // string | Accept language header
$recto_image_cropped = false; // bool | True to obtain recto image cropped if applicable
$face_image_cropped = false; // bool | True to obtain face image cropped if applicable
$signature_image_cropped = false; // bool | True to obtain signature image cropped if applicable

try {
    $result = $api_instance->getResult($analysis_ref_uid, $authorization, $accept_language, $recto_image_cropped, $face_image_cropped, $signature_image_cropped);
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
 **authorization** | **string**| Authorization header |
 **accept_language** | **string**| Accept language header | [optional]
 **recto_image_cropped** | **bool**| True to obtain recto image cropped if applicable | [optional] [default to false]
 **face_image_cropped** | **bool**| True to obtain face image cropped if applicable | [optional] [default to false]
 **signature_image_cropped** | **bool**| True to obtain signature image cropped if applicable | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ResultResponse**](../Model/ResultResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTask**
> \Swagger\Client\Model\TaskResponse getTask($analysis_ref_uid, $authorization, $accept_language, $wait)

HTTP GET task

Get task status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisApi();
$analysis_ref_uid = "analysis_ref_uid_example"; // string | Task analysisRefUid
$authorization = "authorization_example"; // string | Authorization header
$accept_language = "accept_language_example"; // string | Accept language header
$wait = 789; // int | specify a maximum wait time in milliseconds

try {
    $result = $api_instance->getTask($analysis_ref_uid, $authorization, $accept_language, $wait);
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
 **authorization** | **string**| Authorization header |
 **accept_language** | **string**| Accept language header | [optional]
 **wait** | **int**| specify a maximum wait time in milliseconds | [optional]

### Return type

[**\Swagger\Client\Model\TaskResponse**](../Model/TaskResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postImage**
> \Swagger\Client\Model\ResultResponse postImage($body2, $authorization, $async_mode, $body, $accept_language)

HTTP POST task image

POST an image check task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisApi();
$body2 = new \Swagger\Client\Model\ImageRequest(); // \Swagger\Client\Model\ImageRequest | Image request
$authorization = "authorization_example"; // string | Authorization header
$async_mode = true; // bool | true to activate asynchrone mode
$body = new \Swagger\Client\Model\AsynchronousResponse(); // \Swagger\Client\Model\AsynchronousResponse | 
$accept_language = "accept_language_example"; // string | Accept language header

try {
    $result = $api_instance->postImage($body2, $authorization, $async_mode, $body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->postImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body2** | [**\Swagger\Client\Model\ImageRequest**](../Model/\Swagger\Client\Model\ImageRequest.md)| Image request |
 **authorization** | **string**| Authorization header |
 **async_mode** | **bool**| true to activate asynchrone mode | [optional]
 **body** | [**\Swagger\Client\Model\AsynchronousResponse**](../Model/\Swagger\Client\Model\AsynchronousResponse.md)|  | [optional]
 **accept_language** | **string**| Accept language header | [optional]

### Return type

[**\Swagger\Client\Model\ResultResponse**](../Model/ResultResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMrz**
> \Swagger\Client\Model\ResultResponse postMrz($body2, $authorization, $async_mode, $body, $accept_language)

HTTP POST task mrz

POST a mrz check task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalysisApi();
$body2 = new \Swagger\Client\Model\MrzRequest(); // \Swagger\Client\Model\MrzRequest | Mrz request
$authorization = "authorization_example"; // string | Authorization header
$async_mode = true; // bool | true to activate asynchrone mode
$body = new \Swagger\Client\Model\AsynchronousResponse(); // \Swagger\Client\Model\AsynchronousResponse | 
$accept_language = "accept_language_example"; // string | Accept language header

try {
    $result = $api_instance->postMrz($body2, $authorization, $async_mode, $body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalysisApi->postMrz: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body2** | [**\Swagger\Client\Model\MrzRequest**](../Model/\Swagger\Client\Model\MrzRequest.md)| Mrz request |
 **authorization** | **string**| Authorization header |
 **async_mode** | **bool**| true to activate asynchrone mode | [optional]
 **body** | [**\Swagger\Client\Model\AsynchronousResponse**](../Model/\Swagger\Client\Model\AsynchronousResponse.md)|  | [optional]
 **accept_language** | **string**| Accept language header | [optional]

### Return type

[**\Swagger\Client\Model\ResultResponse**](../Model/ResultResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

