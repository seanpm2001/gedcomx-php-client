<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Records;

/**
 * A description of a field in a record.
 */
class FieldDescriptor extends \Gedcomx\Links\HypermediaEnabledData
{

    /**
     * The original label for the field, as stated on the original record.
     *
     * @var string
     */
    private $originalLabel;

    /**
     * The description of the field.
     *
     * @var \Gedcomx\Common\TextValue[]
     */
    private $description;

    /**
     * Descriptors of the values that are applicable to the field.
     *
     * @var \Gedcomx\Records\FieldValueDescriptor[]
     */
    private $values;

    /**
     * Constructs a FieldDescriptor from a (parsed) JSON hash
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
     * The original label for the field, as stated on the original record.
     *
     * @return string
     */
    public function getOriginalLabel()
    {
        return $this->originalLabel;
    }

    /**
     * The original label for the field, as stated on the original record.
     *
     * @param string $originalLabel
     */
    public function setOriginalLabel($originalLabel)
    {
        $this->originalLabel = $originalLabel;
    }
    /**
     * The description of the field.
     *
     * @return \Gedcomx\Common\TextValue[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the field.
     *
     * @param \Gedcomx\Common\TextValue[] $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * Descriptors of the values that are applicable to the field.
     *
     * @return \Gedcomx\Records\FieldValueDescriptor[]
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Descriptors of the values that are applicable to the field.
     *
     * @param \Gedcomx\Records\FieldValueDescriptor[] $values
     */
    public function setValues($values)
    {
        $this->values = $values;
    }
    /**
     * Returns the associative array for this FieldDescriptor
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->originalLabel) {
            $a["originalLabel"] = $this->originalLabel;
        }
        if ($this->description) {
            $ab = array();
            foreach ($this->description as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['description'] = $ab;
        }
        if ($this->values) {
            $ab = array();
            foreach ($this->values as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['values'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this FieldDescriptor from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['originalLabel'])) {
                $this->originalLabel = $o["originalLabel"];
        }
        $this->description = array();
        if (isset($o['description'])) {
            foreach ($o['description'] as $i => $x) {
                    $this->description[$i] = new \Gedcomx\Common\TextValue($x);
            }
        }
        $this->values = array();
        if (isset($o['values'])) {
            foreach ($o['values'] as $i => $x) {
                    $this->values[$i] = new \Gedcomx\Records\FieldValueDescriptor($x);
            }
        }
    }
}
