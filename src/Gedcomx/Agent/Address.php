<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Agent;

/**
 * An address.
 */
class Address extends \Gedcomx\Common\ExtensibleData 
{
    

    /**
     * The city.
     */
    private $city;
    /**
     * The country.
     */
    private $country;
    /**
     * The postal code.
     */
    private $postalCode;
    /**
     * The state or province.
     */
    private $stateOrProvince;
    /**
     * The street.
     */
    private $street;
    /**
     * Additional street information.
     */
    private $street2;
    /**
     * Additional street information.
     */
    private $street3;
    /**
     * The value of the property.
     */
    private $value;

    /**
     * Constructs a Address from a (parsed) JSON hash
     */
    public function __construct($o = null) {
      if( $o ) {
        $this->initFromArray($o);
      }
    }

    /**
     * The city.
     */
    public function getCity() {
      return $this->city;
    }

    /**
     * The city.
     */
    public function setCity($city) {
      $this->city = $city;
    }
    /**
     * The country.
     */
    public function getCountry() {
      return $this->country;
    }

    /**
     * The country.
     */
    public function setCountry($country) {
      $this->country = $country;
    }
    /**
     * The postal code.
     */
    public function getPostalCode() {
      return $this->postalCode;
    }

    /**
     * The postal code.
     */
    public function setPostalCode($postalCode) {
      $this->postalCode = $postalCode;
    }
    /**
     * The state or province.
     */
    public function getStateOrProvince() {
      return $this->stateOrProvince;
    }

    /**
     * The state or province.
     */
    public function setStateOrProvince($stateOrProvince) {
      $this->stateOrProvince = $stateOrProvince;
    }
    /**
     * The street.
     */
    public function getStreet() {
      return $this->street;
    }

    /**
     * The street.
     */
    public function setStreet($street) {
      $this->street = $street;
    }
    /**
     * Additional street information.
     */
    public function getStreet2() {
      return $this->street2;
    }

    /**
     * Additional street information.
     */
    public function setStreet2($street2) {
      $this->street2 = $street2;
    }
    /**
     * Additional street information.
     */
    public function getStreet3() {
      return $this->street3;
    }

    /**
     * Additional street information.
     */
    public function setStreet3($street3) {
      $this->street3 = $street3;
    }
    /**
     * The value of the property.
     */
    public function getValue() {
      return $this->value;
    }

    /**
     * The value of the property.
     */
    public function setValue($value) {
      $this->value = $value;
    }
    /**
     * Returns the associative array for this Address
     */
    public function toArray() {
      $a = parent::toArray();
      if( $this->city ) {
            $a["city"] = $this->city;
      }
      if( $this->country ) {
            $a["country"] = $this->country;
      }
      if( $this->postalCode ) {
            $a["postalCode"] = $this->postalCode;
      }
      if( $this->stateOrProvince ) {
            $a["stateOrProvince"] = $this->stateOrProvince;
      }
      if( $this->street ) {
            $a["street"] = $this->street;
      }
      if( $this->street2 ) {
            $a["street2"] = $this->street2;
      }
      if( $this->street3 ) {
            $a["street3"] = $this->street3;
      }
      if( $this->value ) {
            $a["value"] = $this->value;
      }
      return $a;
    }


    /**
     * Initializes this Address from an associative array
     */
    public function initFromArray($o) {
      parent::initFromArray($o);
      if( isset($o['city']) ) {
            $this->city = $o["city"];
      }
      if( isset($o['country']) ) {
            $this->country = $o["country"];
      }
      if( isset($o['postalCode']) ) {
            $this->postalCode = $o["postalCode"];
      }
      if( isset($o['stateOrProvince']) ) {
            $this->stateOrProvince = $o["stateOrProvince"];
      }
      if( isset($o['street']) ) {
            $this->street = $o["street"];
      }
      if( isset($o['street2']) ) {
            $this->street2 = $o["street2"];
      }
      if( isset($o['street3']) ) {
            $this->street3 = $o["street3"];
      }
      if( isset($o['value']) ) {
            $this->value = $o["value"];
      }
    }
}
