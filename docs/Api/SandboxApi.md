# invoker\SandboxApi

All URIs are relative to *https://localhost/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getImage**](SandboxApi.md#getImage) | **GET** /v0/sandbox/image/{imageUid} | HTTP GET image
[**getImageList**](SandboxApi.md#getImageList) | **GET** /v0/sandbox/imagelist | HTTP GET images list
[**getMrz**](SandboxApi.md#getMrz) | **GET** /v0/sandbox/mrz/{mrzUid} | HTTP GET mrz
[**getMrzList**](SandboxApi.md#getMrzList) | **GET** /v0/sandbox/mrzlist | HTTP GET mrz list


# **getImage**
> string[] getImage($image_uid, $raw_type, $face, $light)

HTTP GET image

GET image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new invoker\Api\SandboxApi();
$image_uid = "image_uid_example"; // string | EnumDemoDocsImage
$raw_type = "raw_type_example"; // string | Image raw type
$face = "face_example"; // string | Image face
$light = "light_example"; // string | Image light

try {
    $result = $api_instance->getImage($image_uid, $raw_type, $face, $light);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image_uid** | **string**| EnumDemoDocsImage |
 **raw_type** | **string**| Image raw type | [optional]
 **face** | **string**| Image face | [optional]
 **light** | **string**| Image light | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: *_/_*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageList**
> \model\ImageListResponse getImageList()

HTTP GET images list

GET images list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new invoker\Api\SandboxApi();

try {
    $result = $api_instance->getImageList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->getImageList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\model\ImageListResponse**](../Model/ImageListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMrz**
> \model\MrzResponse getMrz($mrz_uid)

HTTP GET mrz

GET mrz

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new invoker\Api\SandboxApi();
$mrz_uid = "mrz_uid_example"; // string | EnumDemoDocsMrz

try {
    $result = $api_instance->getMrz($mrz_uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->getMrz: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mrz_uid** | **string**| EnumDemoDocsMrz |

### Return type

[**\model\MrzResponse**](../Model/MrzResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMrzList**
> \model\MrzListResponse getMrzList()

HTTP GET mrz list

GET mrz list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new invoker\Api\SandboxApi();

try {
    $result = $api_instance->getMrzList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SandboxApi->getMrzList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\model\MrzListResponse**](../Model/MrzListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json; charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

