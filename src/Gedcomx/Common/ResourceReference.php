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
 * A generic reference to a resource.
 */
class ResourceReference
{

    /**
     * The resource id of the resource being referenced.
     *
     * @var string
     */
    private $resourceId;

    /**
     * The URI to the resource.
     *
     * @var string
     */
    private $resource;

    /**
     * Constructs a ResourceReference from a (parsed) JSON hash
     *
     * @param array $o
     */
    public function __construct($o = null)
    {
        if ($o) {
            $this->initFromArray($o);
        }
    }

    /**
     * The resource id of the resource being referenced.
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * The resource id of the resource being referenced.
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
    }
    /**
     * The URI to the resource.
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The URI to the resource.
     *
     * @param string $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }
    /**
     * Returns the associative array for this ResourceReference
     *
     * @return array
     */
    public function toArray()
    {
        $a = array();
        if ($this->resourceId) {
            $a["resourceId"] = $this->resourceId;
        }
        if ($this->resource) {
            $a["resource"] = $this->resource;
        }
        return $a;
    }

    /**
     * Returns the JSON string for this ResourceReference
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray());
    }

    /**
     * Initializes this ResourceReference from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        if (isset($o['resourceId'])) {
            $this->resourceId = $o["resourceId"];
        }
        if (isset($o['resource'])) {
            $this->resource = $o["resource"];
        }
    }
}