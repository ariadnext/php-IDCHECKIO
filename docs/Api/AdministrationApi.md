# Swagger\Client\AdministrationApi

All URIs are relative to *https://localhost/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConfig**](AdministrationApi.md#getConfig) | **GET** /v0/admin/config | 
[**getHealth**](AdministrationApi.md#getHealth) | **GET** /v0/admin/health | HTTP GET health
[**getUser**](AdministrationApi.md#getUser) | **GET** /v0/admin/user | HTTP GET user


# **getConfig**
> getConfig($authorization)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AdministrationApi();
$authorization = "authorization_example"; // string | Authorization header

try {
    $api_instance->getConfig($authorization);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->getConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization header |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHealth**
> \Swagger\Client\Model\HealthResponse getHealth()

HTTP GET health

GET server health (OK 200)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AdministrationApi();

try {
    $result = $api_instance->getHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->getHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\HealthResponse**](../Model/HealthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \Swagger\Client\Model\UserResponse getUser($authorization, $accept_language)

HTTP GET user

Get user informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AdministrationApi();
$authorization = "authorization_example"; // string | Authorization header
$accept_language = "accept_language_example"; // string | Accept language header

try {
    $result = $api_instance->getUser($authorization, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization header |
 **accept_language** | **string**| Accept language header | [optional]

### Return type

[**\Swagger\Client\Model\UserResponse**](../Model/UserResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

