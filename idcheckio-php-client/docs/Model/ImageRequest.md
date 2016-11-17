# ImageRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_version** | **string** | API version (for backward compatibility purpose) | [optional] 
**front_image** | **string** | frontImage containing front daylight image of the identity document (base64 encoded, no wrap, jpg/png/tiff/pdf format) | 
**front_image_ir** | **string** | frontImage containing front infrared image of the identity document (base64 encoded, no wrap, jpg/png/tiff/pdf format) | 
**front_image_uv** | **string** | frontImage containing front ultraviolet image of the identity document (base64 encoded, no wrap, jpg/png/tiff/pdf format) | 
**back_image** | **string** | backImage containing daylight back image of the identity document (base64 encoded, no wrap, jpg/png/tiff/pdf format) | [optional] 
**back_image_ir** | **string** | backImage containing infrared back image of the identity document (base64 encoded, no wrap, jpg/png/tiff/pdf format) | [optional] 
**back_image_uv** | **string** | backImage containing ultraviolet back image of the identity document (base64 encoded, no wrap, jpg/png/tiff/pdf format) | [optional] 
**recto_image_cropped** | **bool** | rectoImageCropped true to obtain recto image cropped if applicable | [optional] [default to false]
**face_image_cropped** | **bool** | faceImageCropped true to obtain recto image cropped if applicable | [optional] [default to false]
**signature_image_cropped** | **bool** | signatureImageCropped true to obtain recto image cropped if applicable | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


