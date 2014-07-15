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
 * A data qualifier. Qualifiers are used to "qualify" certain data elements to provide additional context, information, or details.
 */
class Qualifier
{

    /**
     * The name of the qualifier
     *
     * @var string
     */
    private $name;

    /**
     * The value of the qualifier.
     *
     * @var string
     */
    private $value;

    /**
     * Constructs a Qualifier from a (parsed) JSON hash
     *
     * @param mixed $o Either an array (JSON) or an XMLReader.
     */
    public function __construct($o = null)
    {
        if (is_array($o)) {
            $this->initFromArray($o);
        }
        else if ($o instanceof \XMLReader) {
            $success = true;
            while ($success && $o->nodeType != \XMLReader::ELEMENT) {
                $success = $o->read();
            }
            if ($o->nodeType != \XMLReader::ELEMENT) {
                throw new \Exception("Unable to read XML: no start element found.");
            }

            $this->initFromReader($o);
        }
    }

    /**
     * The value of the qualifier.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value of the qualifier.
     *
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the associative array for this Qualifier
     *
     * @return array
     */
    public function toArray()
    {
        $a = array();
        if ($this->value) {
            $a["value"] = $this->value;
        }
        if ($this->name) {
            $a['name'] = $this->name;
        }
        return $a;
    }

    /**
     * Returns the JSON string for this Qualifier
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray());
    }

    /**
     * Initializes this Qualifier from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        if (isset($o['value'])) {
            $this->value = $o["value"];
        }
        if (isset($o['name'])) {
            $this->name = $o['name'];
        }
    }

    /**
     * Initializes this Qualifier from an XML reader.
     *
     * @param \XMLReader $xml The reader to use to initialize this object.
     */
    public function initFromReader($xml)
    {
        $empty = $xml->isEmptyElement;

        if ($xml->hasAttributes) {
            $moreAttributes = $xml->moveToFirstAttribute();
            while ($moreAttributes) {
                if (!$this->setKnownAttribute($xml)) {
                    //skip unknown attributes...
                }
                $moreAttributes = $xml->moveToNextAttribute();
            }
        }

        if (!$empty) {
            $this->value = '';
            while ($xml->read() && $xml->hasValue) {
                $this->value = $this->value . $xml->value;
            }
        }
    }


    /**
     * Sets a known child element of Qualifier from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement($xml) {
        return false;
    }

    /**
     * Sets a known attribute of Qualifier from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute($xml) {

        if ($xml->localName === 'name') {
            $this->name = $xml->value;
            return true;
        }

        return false;
    }

    /**
     * Writes the contents of this Qualifier to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents($writer)
    {
        if ($this->value) {
            $writer->text($this->value);
        }
    }
}
