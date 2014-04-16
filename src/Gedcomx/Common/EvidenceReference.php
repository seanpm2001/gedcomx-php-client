<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Common;

/**
 * A reference to a resource that is being used as evidence.
 */
class EvidenceReference extends \Gedcomx\Links\HypermediaEnabledData 
{
    
    /**
     * The resource id of the resource being referenced.
     */
    private $resourceId;
    /**
     * The URI to the resource.
     */
    private $resource;

    /**
     * Attribution metadata for evidence reference.
     */
    private $attribution;

    /**
     * Constructs a EvidenceReference from a (parsed) JSON hash
     */
    public function __construct($o = null) {
      if( $o ) {
        $this->initFromArray($o);
      }
    }

    /**
     * The resource id of the resource being referenced.
     */
    public function getResourceId() {
      return $this->resourceId;
    }

    /**
     * The resource id of the resource being referenced.
     */
    public function setResourceId($resourceId) {
      $this->resourceId = $resourceId;
    }
    /**
     * The URI to the resource.
     */
    public function getResource() {
      return $this->resource;
    }

    /**
     * The URI to the resource.
     */
    public function setResource($resource) {
      $this->resource = $resource;
    }
    /**
     * Attribution metadata for evidence reference.
     */
    public function getAttribution() {
      return $this->attribution;
    }

    /**
     * Attribution metadata for evidence reference.
     */
    public function setAttribution($attribution) {
      $this->attribution = $attribution;
    }
    /**
     * Returns the associative array for this EvidenceReference
     */
    public function toArray() {
      $a = parent::toArray();
      if( $this->resourceId ) {
            $a["resourceId"] = $this->resourceId;
      }
      if( $this->resource ) {
            $a["resource"] = $this->resource;
      }
      if( $this->attribution ) {
            $a["attribution"] = $this->attribution->toArray();
      }
      return $a;
    }


    /**
     * Initializes this EvidenceReference from an associative array
     */
    public function initFromArray($o) {
      parent::initFromArray($o);
      if( isset($o['resourceId']) ) {
            $this->resourceId = $o["resourceId"];
      }
      if( isset($o['resource']) ) {
            $this->resource = $o["resource"];
      }
      if( isset($o['attribution']) ) {
            $this->attribution = new \Gedcomx\Common\Attribution($o["attribution"]);
      }
    }
}
