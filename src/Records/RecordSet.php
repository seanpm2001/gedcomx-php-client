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
 * The GEDCOM X bulk record data formats are used to exchange bulk genealogical data sets, grouped into records.
 */
class RecordSet extends \Gedcomx\Links\HypermediaEnabledData
{

    /**
     * The language of the genealogical data.
     *
     * @var string
     */
    private $lang;

    /**
     * Metadata about this record set; shared among all records in the set.
     *
     * @var \Gedcomx\Gedcomx
     */
    private $metadata;

    /**
     * The records included in this genealogical data set.
     *
     * @var \Gedcomx\Gedcomx[]
     */
    private $records;

    /**
     * Constructs a RecordSet from a (parsed) JSON hash
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
     * The language of the genealogical data.
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * The language of the genealogical data.
     *
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }
    /**
     * Metadata about this record set; shared among all records in the set.
     *
     * @return \Gedcomx\Gedcomx
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Metadata about this record set; shared among all records in the set.
     *
     * @param \Gedcomx\Gedcomx $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }
    /**
     * The records included in this genealogical data set.
     *
     * @return \Gedcomx\Gedcomx[]
     */
    public function getRecords()
    {
        return $this->records;
    }

    /**
     * The records included in this genealogical data set.
     *
     * @param \Gedcomx\Gedcomx[] $records
     */
    public function setRecords($records)
    {
        $this->records = $records;
    }
    /**
     * Returns the associative array for this RecordSet
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->lang) {
            $a["lang"] = $this->lang;
        }
        if ($this->metadata) {
            $a["metadata"] = $this->metadata->toArray();
        }
        if ($this->records) {
            $ab = array();
            foreach ($this->records as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['records'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this RecordSet from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['lang'])) {
            $this->lang = $o["lang"];
        }
        if (isset($o['metadata'])) {
            $this->metadata = new \Gedcomx\Gedcomx($o["metadata"]);
        }
        $this->records = array();
        if (isset($o['records'])) {
            foreach ($o['records'] as $i => $x) {
                $this->records[$i] = new \Gedcomx\Gedcomx($x);
            }
        }
    }

    /**
     * Sets a known child element of RecordSet from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement($xml) {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
          return true;
        }
        else if (($xml->localName == 'metadata') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new \Gedcomx\Gedcomx($xml);
            $this->metadata = $child;
            $happened = true;
        }
        else if (($xml->localName == 'record') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new \Gedcomx\Gedcomx($xml);
            if (!isset($this->records)) {
                $this->records = array();
            }
            array_push($this->records, $child);
            $happened = true;
        }
        return $happened;
    }

    /**
     * Sets a known attribute of RecordSet from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether an attribute was set.
     */
    protected function setKnownAttribute($xml) {
        if (parent::setKnownAttribute($xml)) {
            return true;
        }
        else if (($xml->localName == 'lang') && ($xml->namespaceURI == 'http://www.w3.org/XML/1998/namespace')) {
            $this->lang = $xml->value;
            return true;
        }

        return false;
    }

    /**
     * Writes this RecordSet to an XML writer.
     *
     * @param \XMLWriter $writer The XML writer.
     * @param bool $includeNamespaces Whether to write out the namespaces in the element.
     */
    public function toXml($writer, $includeNamespaces = true)
    {
        $writer->startElementNS('gx', 'records', null);
        if ($includeNamespaces) {
            $writer->writeAttributeNs('xmlns', 'gx', null, 'http://gedcomx.org/v1/');
            $writer->writeAttributeNs('xmlns', 'xml', null, 'http://www.w3.org/XML/1998/namespace');
        }
        $this->writeXmlContents($writer);
        $writer->endElement();
    }

    /**
     * Writes the contents of this RecordSet to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents($writer)
    {
        if ($this->lang) {
            $writer->writeAttribute('xml:lang', $this->lang);
        }
        parent::writeXmlContents($writer);
        if ($this->metadata) {
            $writer->startElementNs('gx', 'metadata', null);
            $this->metadata->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->records) {
            foreach ($this->records as $i => $x) {
                $writer->startElementNs('gx', 'record', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
    }
}