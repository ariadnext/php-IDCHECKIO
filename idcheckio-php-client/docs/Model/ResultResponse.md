# ResultResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **string** | uid | 
**analysis_ref_uid** | **string** | analysisRefUid | 
**check_report_summary** | [**\model\CheckSummaryOfTheSubmittedDocument**](CheckSummaryOfTheSubmittedDocument.md) |  | 
**document_classification** | [**\model\ClassificationOfTheSubmittedDocument**](ClassificationOfTheSubmittedDocument.md) |  | 
**document_detail** | [**\model\DetailedInformationOfTheSubmittedDocument**](DetailedInformationOfTheSubmittedDocument.md) |  | 
**holder_detail** | [**\model\DetailedInformationOfTheHolderOfTheSubmittedDocument**](DetailedInformationOfTheHolderOfTheSubmittedDocument.md) |  | 
**mrz** | [**\model\Mrz**](Mrz.md) |  | 
**controls** | [**\model\ControlGroup[]**](ControlGroup.md) | Performed controls on the submitted document | 
**image** | [**\model\ExtractedImage[]**](ExtractedImage.md) | Cropped image of the submitted document according request | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


