<?php
/**
 * ExtractedImage
 *
 * PHP version 5
 *
 * @category Class
 * @package  com.ariadnext.idcheckio.invoker
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IdCheck.IO API
 *
 * Check identity documents
 *
 * OpenAPI spec version: 0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com.ariadnext.idcheckio.model;

use \ArrayAccess;

/**
 * ExtractedImage Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     com.ariadnext.idcheckio.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ExtractedImage implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ExtractedImage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'type' => 'string',
        'image_dl' => 'string[]',
        'image_ir' => 'string[]',
        'image_uv' => 'string[]',
        'page' => 'int',
        'indicators' => '\com.ariadnext.idcheckio.model\ImageIndicator[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'type' => 'type',
        'image_dl' => 'imageDL',
        'image_ir' => 'imageIR',
        'image_uv' => 'imageUV',
        'page' => 'page',
        'indicators' => 'indicators'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'type' => 'setType',
        'image_dl' => 'setImageDl',
        'image_ir' => 'setImageIr',
        'image_uv' => 'setImageUv',
        'page' => 'setPage',
        'indicators' => 'setIndicators'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'type' => 'getType',
        'image_dl' => 'getImageDl',
        'image_ir' => 'getImageIr',
        'image_uv' => 'getImageUv',
        'page' => 'getPage',
        'indicators' => 'getIndicators'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_RECTO = 'CROPPED_RECTO';
    const TYPE_VERSO = 'CROPPED_VERSO';
    const TYPE_FACE = 'CROPPED_FACE';
    const TYPE_SIGNATURE = 'CROPPED_SIGNATURE';
    const TYPE_EMITTER_SIGNATURE = 'CROPPED_EMITTER_SIGNATURE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RECTO,
            self::TYPE_VERSO,
            self::TYPE_FACE,
            self::TYPE_SIGNATURE,
            self::TYPE_EMITTER_SIGNATURE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['image_dl'] = isset($data['image_dl']) ? $data['image_dl'] : null;
        $this->container['image_ir'] = isset($data['image_ir']) ? $data['image_ir'] : null;
        $this->container['image_uv'] = isset($data['image_uv']) ? $data['image_uv'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['indicators'] = isset($data['indicators']) ? $data['indicators'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = array("CROPPED_RECTO", "CROPPED_VERSO", "CROPPED_FACE", "CROPPED_SIGNATURE", "CROPPED_EMITTER_SIGNATURE");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = array("CROPPED_RECTO", "CROPPED_VERSO", "CROPPED_FACE", "CROPPED_SIGNATURE", "CROPPED_EMITTER_SIGNATURE");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('CROPPED_RECTO', 'CROPPED_VERSO', 'CROPPED_FACE', 'CROPPED_SIGNATURE', 'CROPPED_EMITTER_SIGNATURE');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'CROPPED_RECTO', 'CROPPED_VERSO', 'CROPPED_FACE', 'CROPPED_SIGNATURE', 'CROPPED_EMITTER_SIGNATURE'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets image_dl
     * @return string[]
     */
    public function getImageDl()
    {
        return $this->container['image_dl'];
    }

    /**
     * Sets image_dl
     * @param string[] $image_dl
     * @return $this
     */
    public function setImageDl($image_dl)
    {
        $this->container['image_dl'] = $image_dl;

        return $this;
    }

    /**
     * Gets image_ir
     * @return string[]
     */
    public function getImageIr()
    {
        return $this->container['image_ir'];
    }

    /**
     * Sets image_ir
     * @param string[] $image_ir
     * @return $this
     */
    public function setImageIr($image_ir)
    {
        $this->container['image_ir'] = $image_ir;

        return $this;
    }

    /**
     * Gets image_uv
     * @return string[]
     */
    public function getImageUv()
    {
        return $this->container['image_uv'];
    }

    /**
     * Sets image_uv
     * @param string[] $image_uv
     * @return $this
     */
    public function setImageUv($image_uv)
    {
        $this->container['image_uv'] = $image_uv;

        return $this;
    }

    /**
     * Gets page
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets indicators
     * @return \com.ariadnext.idcheckio.model\ImageIndicator[]
     */
    public function getIndicators()
    {
        return $this->container['indicators'];
    }

    /**
     * Sets indicators
     * @param \com.ariadnext.idcheckio.model\ImageIndicator[] $indicators
     * @return $this
     */
    public function setIndicators($indicators)
    {
        $this->container['indicators'] = $indicators;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\com.ariadnext.idcheckio.invoker\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\com.ariadnext.idcheckio.invoker\ObjectSerializer::sanitizeForSerialization($this));
    }
}


