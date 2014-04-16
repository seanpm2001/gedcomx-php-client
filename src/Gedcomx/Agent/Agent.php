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
 * An agent, e.g. person, organization, or group. In genealogical research, an agent often
     * takes the role of a contributor.
 */
class Agent extends \Gedcomx\Links\HypermediaEnabledData 
{
    

    /**
     * The accounts that belong to this person or organization.
     */
    private $accounts;
    /**
     * The addresses that belong to this person or organization.
     */
    private $addresses;
    /**
     * The emails that belong to this person or organization.
     */
    private $emails;
    /**
     * The homepage.
     */
    private $homepage;
    /**
     * The list of identifiers for the agent.
     */
    private $identifiers;
    /**
     * The list of names for the agent.
     */
    private $names;
    /**
     * The &lt;a href=&quot;http://openid.net/&quot;&gt;openid&lt;/a&gt; of the person or organization.
     */
    private $openid;
    /**
     * The phones that belong to this person or organization.
     */
    private $phones;

    /**
     * Constructs a Agent from a (parsed) JSON hash
     */
    public function __construct($o = null) {
      if( $o ) {
        $this->initFromArray($o);
      }
    }

    /**
     * The accounts that belong to this person or organization.
     */
    public function getAccounts() {
      return $this->accounts;
    }

    /**
     * The accounts that belong to this person or organization.
     */
    public function setAccounts($accounts) {
      $this->accounts = $accounts;
    }
    /**
     * The addresses that belong to this person or organization.
     */
    public function getAddresses() {
      return $this->addresses;
    }

    /**
     * The addresses that belong to this person or organization.
     */
    public function setAddresses($addresses) {
      $this->addresses = $addresses;
    }
    /**
     * The emails that belong to this person or organization.
     */
    public function getEmails() {
      return $this->emails;
    }

    /**
     * The emails that belong to this person or organization.
     */
    public function setEmails($emails) {
      $this->emails = $emails;
    }
    /**
     * The homepage.
     */
    public function getHomepage() {
      return $this->homepage;
    }

    /**
     * The homepage.
     */
    public function setHomepage($homepage) {
      $this->homepage = $homepage;
    }
    /**
     * The list of identifiers for the agent.
     */
    public function getIdentifiers() {
      return $this->identifiers;
    }

    /**
     * The list of identifiers for the agent.
     */
    public function setIdentifiers($identifiers) {
      $this->identifiers = $identifiers;
    }
    /**
     * The list of names for the agent.
     */
    public function getNames() {
      return $this->names;
    }

    /**
     * The list of names for the agent.
     */
    public function setNames($names) {
      $this->names = $names;
    }
    /**
     * The &lt;a href=&quot;http://openid.net/&quot;&gt;openid&lt;/a&gt; of the person or organization.
     */
    public function getOpenid() {
      return $this->openid;
    }

    /**
     * The &lt;a href=&quot;http://openid.net/&quot;&gt;openid&lt;/a&gt; of the person or organization.
     */
    public function setOpenid($openid) {
      $this->openid = $openid;
    }
    /**
     * The phones that belong to this person or organization.
     */
    public function getPhones() {
      return $this->phones;
    }

    /**
     * The phones that belong to this person or organization.
     */
    public function setPhones($phones) {
      $this->phones = $phones;
    }
    /**
     * Returns the associative array for this Agent
     */
    public function toArray() {
      $a = parent::toArray();
      if( $this->accounts ) {
        $ab = array();
        foreach( $this->accounts as $i => $x ) {
              $ab[$i] = $x->toArray();
        }
        $a['accounts'] = $ab;
      }
      if( $this->addresses ) {
        $ab = array();
        foreach( $this->addresses as $i => $x ) {
              $ab[$i] = $x->toArray();
        }
        $a['addresses'] = $ab;
      }
      if( $this->emails ) {
        $ab = array();
        foreach( $this->emails as $i => $x ) {
              $ab[$i] = $x->toArray();
        }
        $a['emails'] = $ab;
      }
      if( $this->homepage ) {
            $a["homepage"] = $this->homepage->toArray();
      }
      if( $this->identifiers ) {
        $ab = array();
        foreach( $this->identifiers as $i => $x ) {
              $ab[$i] = $x->toArray();
        }
        $a['identifiers'] = $ab;
      }
      if( $this->names ) {
        $ab = array();
        foreach( $this->names as $i => $x ) {
              $ab[$i] = $x->toArray();
        }
        $a['names'] = $ab;
      }
      if( $this->openid ) {
            $a["openid"] = $this->openid->toArray();
      }
      if( $this->phones ) {
        $ab = array();
        foreach( $this->phones as $i => $x ) {
              $ab[$i] = $x->toArray();
        }
        $a['phones'] = $ab;
      }
      return $a;
    }


    /**
     * Initializes this Agent from an associative array
     */
    public function initFromArray($o) {
      parent::initFromArray($o);
      $this->accounts = array();
      if( isset($o['accounts']) ) {
        foreach( $o['accounts'] as $i => $x ) {
              $this->accounts[$i] = new \Gedcomx\Agent\OnlineAccount($x);
        }
      }
      $this->addresses = array();
      if( isset($o['addresses']) ) {
        foreach( $o['addresses'] as $i => $x ) {
              $this->addresses[$i] = new \Gedcomx\Agent\Address($x);
        }
      }
      $this->emails = array();
      if( isset($o['emails']) ) {
        foreach( $o['emails'] as $i => $x ) {
              $this->emails[$i] = new \Gedcomx\Common\ResourceReference($x);
        }
      }
      if( isset($o['homepage']) ) {
            $this->homepage = new \Gedcomx\Common\ResourceReference($o["homepage"]);
      }
      $this->identifiers = array();
      if( isset($o['identifiers']) ) {
        foreach( $o['identifiers'] as $i => $x ) {
              $this->identifiers[$i] = new \Gedcomx\Conclusion\Identifier($x);
        }
      }
      $this->names = array();
      if( isset($o['names']) ) {
        foreach( $o['names'] as $i => $x ) {
              $this->names[$i] = new \Gedcomx\Common\TextValue($x);
        }
      }
      if( isset($o['openid']) ) {
            $this->openid = new \Gedcomx\Common\ResourceReference($o["openid"]);
      }
      $this->phones = array();
      if( isset($o['phones']) ) {
        foreach( $o['phones'] as $i => $x ) {
              $this->phones[$i] = new \Gedcomx\Common\ResourceReference($x);
        }
      }
    }
}
