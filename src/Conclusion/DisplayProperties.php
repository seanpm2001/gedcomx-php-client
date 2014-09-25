<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Conclusion;

/**
 * A set of display properties for the convenience of quick display, such as for
     * a Web-based application. All display properties are provided in the default locale for the current
     * application context and are NOT considered canonical for the purposes of data exchange.
 */
class DisplayProperties extends \Gedcomx\Common\ExtensibleData
{

    /**
     * The context-specific ascendancy number for the person in relation to the other persons in the request. The ancestry number is defined using the Ahnentafel numbering system.
     *
     * @var string
     */
    private $ascendancyNumber;

    /**
     * The displayable label for the birth date of the person.
     *
     * @var string
     */
    private $birthDate;

    /**
     * The displayable label for the birth place of the person.
     *
     * @var string
     */
    private $birthPlace;

    /**
     * The displayable label for the death date of the person.
     *
     * @var string
     */
    private $deathDate;

    /**
     * The displayable label for the death place of the person.
     *
     * @var string
     */
    private $deathPlace;

    /**
     * The context-specific descendancy number for the person in relation to the other persons in the request. The descendancy number is defined using the d'Aboville numbering system.
     *
     * @var string
     */
    private $descendancyNumber;

    /**
     * The displayable label for the gender of the person.
     *
     * @var string
     */
    private $gender;

    /**
     * The displayable label for the lifespan of the person.
     *
     * @var string
     */
    private $lifespan;

    /**
     * The displayable label for the marriage date of the person.
     *
     * @var string
     */
    private $marriageDate;

    /**
     * The displayable label for the marriage place of the person.
     *
     * @var string
     */
    private $marriagePlace;

    /**
     * The displayable name of the person.
     *
     * @var string
     */
    private $name;

    /**
     * Constructs a DisplayProperties from a (parsed) JSON hash
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
     * The context-specific ascendancy number for the person in relation to the other persons in the request. The ancestry number is defined using the Ahnentafel numbering system.
     *
     * @return string
     */
    public function getAscendancyNumber()
    {
        return $this->ascendancyNumber;
    }

    /**
     * The context-specific ascendancy number for the person in relation to the other persons in the request. The ancestry number is defined using the Ahnentafel numbering system.
     *
     * @param string $ascendancyNumber
     */
    public function setAscendancyNumber($ascendancyNumber)
    {
        $this->ascendancyNumber = $ascendancyNumber;
    }
    /**
     * The displayable label for the birth date of the person.
     *
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * The displayable label for the birth date of the person.
     *
     * @param string $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }
    /**
     * The displayable label for the birth place of the person.
     *
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * The displayable label for the birth place of the person.
     *
     * @param string $birthPlace
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }
    /**
     * The displayable label for the death date of the person.
     *
     * @return string
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    /**
     * The displayable label for the death date of the person.
     *
     * @param string $deathDate
     */
    public function setDeathDate($deathDate)
    {
        $this->deathDate = $deathDate;
    }
    /**
     * The displayable label for the death place of the person.
     *
     * @return string
     */
    public function getDeathPlace()
    {
        return $this->deathPlace;
    }

    /**
     * The displayable label for the death place of the person.
     *
     * @param string $deathPlace
     */
    public function setDeathPlace($deathPlace)
    {
        $this->deathPlace = $deathPlace;
    }
    /**
     * The context-specific descendancy number for the person in relation to the other persons in the request. The descendancy number is defined using the d'Aboville numbering system.
     *
     * @return string
     */
    public function getDescendancyNumber()
    {
        return $this->descendancyNumber;
    }

    /**
     * The context-specific descendancy number for the person in relation to the other persons in the request. The descendancy number is defined using the d'Aboville numbering system.
     *
     * @param string $descendancyNumber
     */
    public function setDescendancyNumber($descendancyNumber)
    {
        $this->descendancyNumber = $descendancyNumber;
    }
    /**
     * The displayable label for the gender of the person.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * The displayable label for the gender of the person.
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    /**
     * The displayable label for the lifespan of the person.
     *
     * @return string
     */
    public function getLifespan()
    {
        return $this->lifespan;
    }

    /**
     * The displayable label for the lifespan of the person.
     *
     * @param string $lifespan
     */
    public function setLifespan($lifespan)
    {
        $this->lifespan = $lifespan;
    }
    /**
     * The displayable label for the marriage date of the person.
     *
     * @return string
     */
    public function getMarriageDate()
    {
        return $this->marriageDate;
    }

    /**
     * The displayable label for the marriage date of the person.
     *
     * @param string $marriageDate
     */
    public function setMarriageDate($marriageDate)
    {
        $this->marriageDate = $marriageDate;
    }
    /**
     * The displayable label for the marriage place of the person.
     *
     * @return string
     */
    public function getMarriagePlace()
    {
        return $this->marriagePlace;
    }

    /**
     * The displayable label for the marriage place of the person.
     *
     * @param string $marriagePlace
     */
    public function setMarriagePlace($marriagePlace)
    {
        $this->marriagePlace = $marriagePlace;
    }
    /**
     * The displayable name of the person.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The displayable name of the person.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * Returns the associative array for this DisplayProperties
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->ascendancyNumber) {
            $a["ascendancyNumber"] = $this->ascendancyNumber;
        }
        if ($this->birthDate) {
            $a["birthDate"] = $this->birthDate;
        }
        if ($this->birthPlace) {
            $a["birthPlace"] = $this->birthPlace;
        }
        if ($this->deathDate) {
            $a["deathDate"] = $this->deathDate;
        }
        if ($this->deathPlace) {
            $a["deathPlace"] = $this->deathPlace;
        }
        if ($this->descendancyNumber) {
            $a["descendancyNumber"] = $this->descendancyNumber;
        }
        if ($this->gender) {
            $a["gender"] = $this->gender;
        }
        if ($this->lifespan) {
            $a["lifespan"] = $this->lifespan;
        }
        if ($this->marriageDate) {
            $a["marriageDate"] = $this->marriageDate;
        }
        if ($this->marriagePlace) {
            $a["marriagePlace"] = $this->marriagePlace;
        }
        if ($this->name) {
            $a["name"] = $this->name;
        }
        return $a;
    }


    /**
     * Initializes this DisplayProperties from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['ascendancyNumber'])) {
            $this->ascendancyNumber = $o["ascendancyNumber"];
        }
        if (isset($o['birthDate'])) {
            $this->birthDate = $o["birthDate"];
        }
        if (isset($o['birthPlace'])) {
            $this->birthPlace = $o["birthPlace"];
        }
        if (isset($o['deathDate'])) {
            $this->deathDate = $o["deathDate"];
        }
        if (isset($o['deathPlace'])) {
            $this->deathPlace = $o["deathPlace"];
        }
        if (isset($o['descendancyNumber'])) {
            $this->descendancyNumber = $o["descendancyNumber"];
        }
        if (isset($o['gender'])) {
            $this->gender = $o["gender"];
        }
        if (isset($o['lifespan'])) {
            $this->lifespan = $o["lifespan"];
        }
        if (isset($o['marriageDate'])) {
            $this->marriageDate = $o["marriageDate"];
        }
        if (isset($o['marriagePlace'])) {
            $this->marriagePlace = $o["marriagePlace"];
        }
        if (isset($o['name'])) {
            $this->name = $o["name"];
        }
    }

    /**
     * Sets a known child element of DisplayProperties from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement($xml) {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
          return true;
        }
        else if (($xml->localName == 'ascendancyNumber') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->ascendancyNumber = $child;
            $happened = true;
        }
        else if (($xml->localName == 'birthDate') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->birthDate = $child;
            $happened = true;
        }
        else if (($xml->localName == 'birthPlace') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->birthPlace = $child;
            $happened = true;
        }
        else if (($xml->localName == 'deathDate') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->deathDate = $child;
            $happened = true;
        }
        else if (($xml->localName == 'deathPlace') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->deathPlace = $child;
            $happened = true;
        }
        else if (($xml->localName == 'descendancyNumber') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->descendancyNumber = $child;
            $happened = true;
        }
        else if (($xml->localName == 'gender') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->gender = $child;
            $happened = true;
        }
        else if (($xml->localName == 'lifespan') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->lifespan = $child;
            $happened = true;
        }
        else if (($xml->localName == 'marriageDate') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->marriageDate = $child;
            $happened = true;
        }
        else if (($xml->localName == 'marriagePlace') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->marriagePlace = $child;
            $happened = true;
        }
        else if (($xml->localName == 'name') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = '';
            while ($xml->read() && $xml->hasValue) {
                $child = $child . $xml->value;
            }
            $this->name = $child;
            $happened = true;
        }
        return $happened;
    }

    /**
     * Sets a known attribute of DisplayProperties from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute($xml) {
        if (parent::setKnownAttribute($xml)) {
            return true;
        }

        return false;
    }

    /**
     * Writes the contents of this DisplayProperties to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents($writer)
    {
        parent::writeXmlContents($writer);
        if ($this->ascendancyNumber) {
            $writer->startElementNs('gx', 'ascendancyNumber', null);
            $writer->text($this->ascendancyNumber);
            $writer->endElement();
        }
        if ($this->birthDate) {
            $writer->startElementNs('gx', 'birthDate', null);
            $writer->text($this->birthDate);
            $writer->endElement();
        }
        if ($this->birthPlace) {
            $writer->startElementNs('gx', 'birthPlace', null);
            $writer->text($this->birthPlace);
            $writer->endElement();
        }
        if ($this->deathDate) {
            $writer->startElementNs('gx', 'deathDate', null);
            $writer->text($this->deathDate);
            $writer->endElement();
        }
        if ($this->deathPlace) {
            $writer->startElementNs('gx', 'deathPlace', null);
            $writer->text($this->deathPlace);
            $writer->endElement();
        }
        if ($this->descendancyNumber) {
            $writer->startElementNs('gx', 'descendancyNumber', null);
            $writer->text($this->descendancyNumber);
            $writer->endElement();
        }
        if ($this->gender) {
            $writer->startElementNs('gx', 'gender', null);
            $writer->text($this->gender);
            $writer->endElement();
        }
        if ($this->lifespan) {
            $writer->startElementNs('gx', 'lifespan', null);
            $writer->text($this->lifespan);
            $writer->endElement();
        }
        if ($this->marriageDate) {
            $writer->startElementNs('gx', 'marriageDate', null);
            $writer->text($this->marriageDate);
            $writer->endElement();
        }
        if ($this->marriagePlace) {
            $writer->startElementNs('gx', 'marriagePlace', null);
            $writer->text($this->marriagePlace);
            $writer->endElement();
        }
        if ($this->name) {
            $writer->startElementNs('gx', 'name', null);
            $writer->text($this->name);
            $writer->endElement();
        }
    }
}