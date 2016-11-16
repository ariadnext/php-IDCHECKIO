# ResultResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **string** | uid | 
**analysis_ref_uid** | **string** | analysisRefUid | 
**check_report_summary** | [**\com.ariadnext.idcheckio.model\CheckSummaryOfTheSubmittedDocument**](CheckSummaryOfTheSubmittedDocument.md) |  | 
**document_classification** | [**\com.ariadnext.idcheckio.model\ClassificationOfTheSubmittedDocument**](ClassificationOfTheSubmittedDocument.md) |  | 
**document_detail** | [**\com.ariadnext.idcheckio.model\DetailedInformationOfTheSubmittedDocument**](DetailedInformationOfTheSubmittedDocument.md) |  | 
**holder_detail** | [**\com.ariadnext.idcheckio.model\DetailedInformationOfTheHolderOfTheSubmittedDocument**](DetailedInformationOfTheHolderOfTheSubmittedDocument.md) |  | 
**mrz** | [**\com.ariadnext.idcheckio.model\Mrz**](Mrz.md) |  | 
**controls** | [**\com.ariadnext.idcheckio.model\ControlGroup[]**](ControlGroup.md) | Performed controls on the submitted document | 
**image** | [**\com.ariadnext.idcheckio.model\ExtractedImage[]**](ExtractedImage.md) | Cropped image of the submitted document according request | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


