# SwaggerClient-php
Check identity documents

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 0.0
- Build date: 2016-10-18T16:36:58.975+02:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://localhost/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdministrationApi* | [**getConfig**](docs/Api/AdministrationApi.md#getconfig) | **GET** /v0/admin/config | 
*AdministrationApi* | [**getHealth**](docs/Api/AdministrationApi.md#gethealth) | **GET** /v0/admin/health | HTTP GET health
*AdministrationApi* | [**getUser**](docs/Api/AdministrationApi.md#getuser) | **GET** /v0/admin/user | HTTP GET user
*AnalysisApi* | [**getReport**](docs/Api/AnalysisApi.md#getreport) | **GET** /v0/pdfreport/{analysisRefUid} | HTTP GET report (demo)
*AnalysisApi* | [**getResult**](docs/Api/AnalysisApi.md#getresult) | **GET** /v0/result/{analysisRefUid} | HTTP GET result
*AnalysisApi* | [**getTask**](docs/Api/AnalysisApi.md#gettask) | **GET** /v0/task/{analysisRefUid} | HTTP GET task
*AnalysisApi* | [**postImage**](docs/Api/AnalysisApi.md#postimage) | **POST** /v0/task/image | HTTP POST task image
*AnalysisApi* | [**postMrz**](docs/Api/AnalysisApi.md#postmrz) | **POST** /v0/task/mrz | HTTP POST task mrz
*SandboxApi* | [**getImage**](docs/Api/SandboxApi.md#getimage) | **GET** /v0/sandbox/image/{imageUid} | HTTP GET image
*SandboxApi* | [**getImageList**](docs/Api/SandboxApi.md#getimagelist) | **GET** /v0/sandbox/imagelist | HTTP GET images list
*SandboxApi* | [**getMrz**](docs/Api/SandboxApi.md#getmrz) | **GET** /v0/sandbox/mrz/{mrzUid} | HTTP GET mrz
*SandboxApi* | [**getMrzList**](docs/Api/SandboxApi.md#getmrzlist) | **GET** /v0/sandbox/mrzlist | HTTP GET mrz list


## Documentation For Models

 - [AnalysisDate](docs/Model/AnalysisDate.md)
 - [AsynchronousResponse](docs/Model/AsynchronousResponse.md)
 - [CheckReportSummary](docs/Model/CheckReportSummary.md)
 - [Control](docs/Model/Control.md)
 - [ControlGroup](docs/Model/ControlGroup.md)
 - [DocumentDetail](docs/Model/DocumentDetail.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [ExtractedImage](docs/Model/ExtractedImage.md)
 - [GenericData](docs/Model/GenericData.md)
 - [HealthResponse](docs/Model/HealthResponse.md)
 - [HolderDetail](docs/Model/HolderDetail.md)
 - [IdDocumentClassification](docs/Model/IdDocumentClassification.md)
 - [Image](docs/Model/Image.md)
 - [ImageListResponse](docs/Model/ImageListResponse.md)
 - [ImageRequest](docs/Model/ImageRequest.md)
 - [Mrz](docs/Model/Mrz.md)
 - [MrzListResponse](docs/Model/MrzListResponse.md)
 - [MrzRequest](docs/Model/MrzRequest.md)
 - [MrzResponse](docs/Model/MrzResponse.md)
 - [ReportResponse](docs/Model/ReportResponse.md)
 - [ResultResponse](docs/Model/ResultResponse.md)
 - [TaskResponse](docs/Model/TaskResponse.md)
 - [UserResponse](docs/Model/UserResponse.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




