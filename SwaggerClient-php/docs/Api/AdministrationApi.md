# com.ariadnext.idcheckio.invoker\AdministrationApi

All URIs are relative to *https://localhost/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getHealth**](AdministrationApi.md#getHealth) | **GET** /v0/admin/health | HTTP GET health
[**getUser**](AdministrationApi.md#getUser) | **GET** /v0/admin/user | HTTP GET user


# **getHealth**
> \com.ariadnext.idcheckio.model\HealthResponse getHealth()

HTTP GET health

GET server health (OK 200)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new com.ariadnext.idcheckio.invoker\Api\AdministrationApi();

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

[**\com.ariadnext.idcheckio.model\HealthResponse**](../Model/HealthResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUser**
> \com.ariadnext.idcheckio.model\UserResponse getUser($accept_language)

HTTP GET user

Get user informations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
com.ariadnext.idcheckio.invoker\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
com.ariadnext.idcheckio.invoker\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new com.ariadnext.idcheckio.invoker\Api\AdministrationApi();
$accept_language = "accept_language_example"; // string | Accept language header

try {
    $result = $api_instance->getUser($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Accept language header | [optional]

### Return type

[**\com.ariadnext.idcheckio.model\UserResponse**](../Model/UserResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

