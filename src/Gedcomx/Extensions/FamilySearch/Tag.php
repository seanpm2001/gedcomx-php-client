<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Extensions\FamilySearch;

/**
 * A tag in the FamilySearch system.
 */
class Tag 
{
    
    /**
     * A reference to the value of the tag.
     */
    private $resource;


    /**
     * Constructs a Tag from a (parsed) JSON hash
     */
    public function __construct($o = null) {
      if( $o ) {
        $this->initFromArray($o);
      }
    }

    /**
     * A reference to the value of the tag.
     */
    public function getResource() {
      return $this->resource;
    }

    /**
     * A reference to the value of the tag.
     */
    public function setResource($resource) {
      $this->resource = $resource;
    }
    /**
     * Returns the associative array for this Tag
     */
    public function toArray() {
      $a = array();
      if( $this->resource ) {
            $a["resource"] = $this->resource;
      }
      return $a;
    }

    /**
     * Returns the JSON string for this Tag
     */
    public function toJson() {
      return json_encode($this->toArray());
    }

    /**
     * Initializes this Tag from an associative array
     */
    public function initFromArray($o) {
      if( isset($o['resource']) ) {
            $this->resource = $o["resource"];
      }
    }
}
