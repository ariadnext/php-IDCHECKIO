<?php
/**
 * DetailedInformationOfTheHolderOfTheSubmittedDocument
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
 * DetailedInformationOfTheHolderOfTheSubmittedDocument Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     com.ariadnext.idcheckio.invoker
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DetailedInformationOfTheHolderOfTheSubmittedDocument implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Detailed information of the holder of the submitted document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'last_name' => 'string[]',
        'first_name' => 'string[]',
        'usage_name' => 'string',
        'nationality' => 'string',
        'gender' => 'string',
        'address' => 'string',
        'birth_date' => '\com.ariadnext.idcheckio.model\EventDate',
        'birth_place' => 'string',
        'birth_dpt' => 'string',
        'extra_infos' => '\com.ariadnext.idcheckio.model\GenericData[]'
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
        'last_name' => 'lastName',
        'first_name' => 'firstName',
        'usage_name' => 'usageName',
        'nationality' => 'nationality',
        'gender' => 'gender',
        'address' => 'address',
        'birth_date' => 'birthDate',
        'birth_place' => 'birthPlace',
        'birth_dpt' => 'birthDpt',
        'extra_infos' => 'extraInfos'
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
        'last_name' => 'setLastName',
        'first_name' => 'setFirstName',
        'usage_name' => 'setUsageName',
        'nationality' => 'setNationality',
        'gender' => 'setGender',
        'address' => 'setAddress',
        'birth_date' => 'setBirthDate',
        'birth_place' => 'setBirthPlace',
        'birth_dpt' => 'setBirthDpt',
        'extra_infos' => 'setExtraInfos'
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
        'last_name' => 'getLastName',
        'first_name' => 'getFirstName',
        'usage_name' => 'getUsageName',
        'nationality' => 'getNationality',
        'gender' => 'getGender',
        'address' => 'getAddress',
        'birth_date' => 'getBirthDate',
        'birth_place' => 'getBirthPlace',
        'birth_dpt' => 'getBirthDpt',
        'extra_infos' => 'getExtraInfos'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['usage_name'] = isset($data['usage_name']) ? $data['usage_name'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['birth_place'] = isset($data['birth_place']) ? $data['birth_place'] : null;
        $this->container['birth_dpt'] = isset($data['birth_dpt']) ? $data['birth_dpt'] : null;
        $this->container['extra_infos'] = isset($data['extra_infos']) ? $data['extra_infos'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets last_name
     * @return string[]
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string[] $last_name list of lastnames
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets first_name
     * @return string[]
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string[] $first_name list of firstnames
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets usage_name
     * @return string
     */
    public function getUsageName()
    {
        return $this->container['usage_name'];
    }

    /**
     * Sets usage_name
     * @param string $usage_name usage name
     * @return $this
     */
    public function setUsageName($usage_name)
    {
        $this->container['usage_name'] = $usage_name;

        return $this;
    }

    /**
     * Gets nationality
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     * @param string $nationality nationality
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

        return $this;
    }

    /**
     * Gets gender
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     * @param string $gender gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param string $address address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets birth_date
     * @return \com.ariadnext.idcheckio.model\EventDate
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     * @param \com.ariadnext.idcheckio.model\EventDate $birth_date
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets birth_place
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->container['birth_place'];
    }

    /**
     * Sets birth_place
     * @param string $birth_place birth place
     * @return $this
     */
    public function setBirthPlace($birth_place)
    {
        $this->container['birth_place'] = $birth_place;

        return $this;
    }

    /**
     * Gets birth_dpt
     * @return string
     */
    public function getBirthDpt()
    {
        return $this->container['birth_dpt'];
    }

    /**
     * Sets birth_dpt
     * @param string $birth_dpt birth department
     * @return $this
     */
    public function setBirthDpt($birth_dpt)
    {
        $this->container['birth_dpt'] = $birth_dpt;

        return $this;
    }

    /**
     * Gets extra_infos
     * @return \com.ariadnext.idcheckio.model\GenericData[]
     */
    public function getExtraInfos()
    {
        return $this->container['extra_infos'];
    }

    /**
     * Sets extra_infos
     * @param \com.ariadnext.idcheckio.model\GenericData[] $extra_infos additional information
     * @return $this
     */
    public function setExtraInfos($extra_infos)
    {
        $this->container['extra_infos'] = $extra_infos;

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


