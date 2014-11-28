<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Agent;
use Gedcomx\Common\ResourceReference;
use Gedcomx\Common\TextValue;
use Gedcomx\Conclusion\Identifier;
use Gedcomx\Links\HypermediaEnabledData;
use Gedcomx\Rt\GedcomxModelVisitor;

/**
 * An agent, e.g. person, organization, or group. In genealogical research, an agent often
     * takes the role of a contributor.
 */
class Agent extends HypermediaEnabledData
{
    /**
     * The accounts that belong to this person or organization.
     *
     * @var OnlineAccount[]
     */
    private $accounts;

    /**
     * The addresses that belong to this person or organization.
     *
     * @var Address[]
     */
    private $addresses;

    /**
     * The emails that belong to this person or organization.
     *
     * @var ResourceReference[]
     */
    private $emails;

    /**
     * The homepage.
     *
     * @var ResourceReference
     */
    private $homepage;

    /**
     * The list of identifiers for the agent.
     *
     * @var Identifier[]
     */
    private $identifiers;

    /**
     * The list of names for the agent.
     *
     * @var TextValue[]
     */
    private $names;

    /**
     * The &lt;a href=&quot;http://openid.net/&quot;&gt;openid&lt;/a&gt; of the person or organization.
     *
     * @var ResourceReference
     */
    private $openid;

    /**
     * The phones that belong to this person or organization.
     *
     * @var ResourceReference[]
     */
    private $phones;

    /**
     * Constructs a Agent from a (parsed) JSON hash
     *
     * @param mixed $o Either an array (JSON) or an XMLReader.
     *
     * @throws \Exception
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
     * The accounts that belong to this person or organization.
     *
     * @return OnlineAccount[]
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * The accounts that belong to this person or organization.
     *
     * @param OnlineAccount[] $accounts
     */
    public function setAccounts($accounts)
    {
        $this->accounts = $accounts;
    }
    /**
     * The addresses that belong to this person or organization.
     *
     * @return Address[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * The addresses that belong to this person or organization.
     *
     * @param Address[] $addresses
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }
    /**
     * The emails that belong to this person or organization.
     *
     * @return ResourceReference[]
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * The emails that belong to this person or organization.
     *
     * @param ResourceReference[] $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
    }
    /**
     * The homepage.
     *
     * @return ResourceReference
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * The homepage.
     *
     * @param ResourceReference $homepage
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;
    }
    /**
     * The list of identifiers for the agent.
     *
     * @return Identifier[]
     */
    public function getIdentifiers()
    {
        return $this->identifiers;
    }

    /**
     * The list of identifiers for the agent.
     *
     * @param Identifier[] $identifiers
     */
    public function setIdentifiers($identifiers)
    {
        $this->identifiers = $identifiers;
    }
    /**
     * The list of names for the agent.
     *
     * @return TextValue[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * The list of names for the agent.
     *
     * @param TextValue[] $names
     */
    public function setNames($names)
    {
        $this->names = $names;
    }
    /**
     * The &lt;a href=&quot;http://openid.net/&quot;&gt;openid&lt;/a&gt; of the person or organization.
     *
     * @return ResourceReference
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * The &lt;a href=&quot;http://openid.net/&quot;&gt;openid&lt;/a&gt; of the person or organization.
     *
     * @param ResourceReference $openid
     */
    public function setOpenid($openid)
    {
        $this->openid = $openid;
    }
    /**
     * The phones that belong to this person or organization.
     *
     * @return ResourceReference[]
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * The phones that belong to this person or organization.
     *
     * @param ResourceReference[] $phones
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;
    }
    /**
     * Returns the associative array for this Agent
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->accounts) {
            $ab = array();
            foreach ($this->accounts as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['accounts'] = $ab;
        }
        if ($this->addresses) {
            $ab = array();
            foreach ($this->addresses as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['addresses'] = $ab;
        }
        if ($this->emails) {
            $ab = array();
            foreach ($this->emails as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['emails'] = $ab;
        }
        if ($this->homepage) {
            $a["homepage"] = $this->homepage->toArray();
        }
        if ($this->identifiers) {
            $ab = array();
            foreach ($this->identifiers as $i => $x) {
                $ab[$i] = array();
                foreach ($x as $j => $y) {
                    $ab[$i][$j] = $y->getValue();
                }
            }
            $a['identifiers'] = $ab;
        }
        if ($this->names) {
            $ab = array();
            foreach ($this->names as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['names'] = $ab;
        }
        if ($this->openid) {
            $a["openid"] = $this->openid->toArray();
        }
        if ($this->phones) {
            $ab = array();
            foreach ($this->phones as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['phones'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this Agent from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        $this->accounts = array();
        if (isset($o['accounts'])) {
            foreach ($o['accounts'] as $i => $x) {
                $this->accounts[$i] = new OnlineAccount($x);
            }
            unset($o['accounts']);
        }
        $this->addresses = array();
        if (isset($o['addresses'])) {
            foreach ($o['addresses'] as $i => $x) {
                $this->addresses[$i] = new Address($x);
            }
            unset($o['addresses']);
        }
        $this->emails = array();
        if (isset($o['emails'])) {
            foreach ($o['emails'] as $i => $x) {
                $this->emails[$i] = new ResourceReference($x);
            }
            unset($o['emails']);
        }
        if (isset($o['homepage'])) {
            $this->homepage = new ResourceReference($o["homepage"]);
            unset($o['homepage']);
        }
        $this->identifiers = array();
        if (isset($o['identifiers'])) {
            foreach ($o['identifiers'] as $i => $x) {
                if (is_array($x)) {
                    $this->identifiers[$i] = array();
                    foreach ($x as $j => $y) {
                        $this->identifiers[$i][$j] = new Identifier();
                        $this->identifiers[$i][$j]->setValue($y);
                    }
                }
                else {
                    $this->identifiers[$i] = new Identifier($x);
                }
            }
            unset($o['identifiers']);
        }
        $this->names = array();
        if (isset($o['names'])) {
            foreach ($o['names'] as $i => $x) {
                $this->names[$i] = new TextValue($x);
            }
            unset($o['names']);
        }
        if (isset($o['openid'])) {
            $this->openid = new ResourceReference($o["openid"]);
            unset($o['openid']);
        }
        $this->phones = array();
        if (isset($o['phones'])) {
            foreach ($o['phones'] as $i => $x) {
                $this->phones[$i] = new ResourceReference($x);
            }
            unset($o['phones']);
        }
        parent::initFromArray($o);
    }

    public function accept(GedcomxModelVisitor $visitor)
    {
        $visitor->visitAgent($this);
    }

    /**
     * Sets a known child element of Agent from an XML reader.
     *
     * @param \XMLReader $xml The reader.
     * @return bool Whether a child element was set.
     */
    protected function setKnownChildElement($xml) {
        $happened = parent::setKnownChildElement($xml);
        if ($happened) {
          return true;
        }
        else if (($xml->localName == 'account') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new OnlineAccount($xml);
            if (!isset($this->accounts)) {
                $this->accounts = array();
            }
            array_push($this->accounts, $child);
            $happened = true;
        }
        else if (($xml->localName == 'address') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Address($xml);
            if (!isset($this->addresses)) {
                $this->addresses = array();
            }
            array_push($this->addresses, $child);
            $happened = true;
        }
        else if (($xml->localName == 'email') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new ResourceReference($xml);
            if (!isset($this->emails)) {
                $this->emails = array();
            }
            array_push($this->emails, $child);
            $happened = true;
        }
        else if (($xml->localName == 'homepage') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new ResourceReference($xml);
            $this->homepage = $child;
            $happened = true;
        }
        else if (($xml->localName == 'identifier') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new Identifier($xml);
            if (!isset($this->identifiers)) {
                $this->identifiers = array();
            }
            array_push($this->identifiers, $child);
            $happened = true;
        }
        else if (($xml->localName == 'name') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new TextValue($xml);
            if (!isset($this->names)) {
                $this->names = array();
            }
            array_push($this->names, $child);
            $happened = true;
        }
        else if (($xml->localName == 'openid') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new ResourceReference($xml);
            $this->openid = $child;
            $happened = true;
        }
        else if (($xml->localName == 'phone') && ($xml->namespaceURI == 'http://gedcomx.org/v1/')) {
            $child = new ResourceReference($xml);
            if (!isset($this->phones)) {
                $this->phones = array();
            }
            array_push($this->phones, $child);
            $happened = true;
        }
        return $happened;
    }

    /**
     * Sets a known attribute of Agent from an XML reader.
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
     * Writes this Agent to an XML writer.
     *
     * @param \XMLWriter $writer The XML writer.
     * @param bool $includeNamespaces Whether to write out the namespaces in the element.
     */
    public function toXml($writer, $includeNamespaces = true)
    {
        $writer->startElementNS('gx', 'agent', null);
        if ($includeNamespaces) {
            $writer->writeAttributeNs('xmlns', 'gx', null, 'http://gedcomx.org/v1/');
        }
        $this->writeXmlContents($writer);
        $writer->endElement();
    }

    /**
     * Writes the contents of this Agent to an XML writer. The startElement is expected to be already provided.
     *
     * @param \XMLWriter $writer The XML writer.
     */
    public function writeXmlContents($writer)
    {
        parent::writeXmlContents($writer);
        if ($this->accounts) {
            foreach ($this->accounts as $i => $x) {
                $writer->startElementNs('gx', 'account', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->addresses) {
            foreach ($this->addresses as $i => $x) {
                $writer->startElementNs('gx', 'address', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->emails) {
            foreach ($this->emails as $i => $x) {
                $writer->startElementNs('gx', 'email', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->homepage) {
            $writer->startElementNs('gx', 'homepage', null);
            $this->homepage->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->identifiers) {
            foreach ($this->identifiers as $i => $x) {
                $writer->startElementNs('gx', 'identifier', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->names) {
            foreach ($this->names as $i => $x) {
                $writer->startElementNs('gx', 'name', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
        if ($this->openid) {
            $writer->startElementNs('gx', 'openid', null);
            $this->openid->writeXmlContents($writer);
            $writer->endElement();
        }
        if ($this->phones) {
            foreach ($this->phones as $i => $x) {
                $writer->startElementNs('gx', 'phone', null);
                $x->writeXmlContents($writer);
                $writer->endElement();
            }
        }
    }
}
