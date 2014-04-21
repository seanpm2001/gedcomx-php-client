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
 * A historical event.
 */
class Event extends \Gedcomx\Conclusion\Subject
{

    /**
     * The type of the event.
     *
     * @var string
     */
    private $type;

    /**
     * The date of this event.
     *
     * @var \Gedcomx\Conclusion\DateInfo
     */
    private $date;

    /**
     * The place of this event.
     *
     * @var \Gedcomx\Conclusion\PlaceReference
     */
    private $place;

    /**
     * The roles played in this event.
     *
     * @var \Gedcomx\Conclusion\EventRole[]
     */
    private $roles;

    /**
     * Constructs a Event from a (parsed) JSON hash
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
     * The type of the event.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the event.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * The date of this event.
     *
     * @return \Gedcomx\Conclusion\DateInfo
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date of this event.
     *
     * @param \Gedcomx\Conclusion\DateInfo $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    /**
     * The place of this event.
     *
     * @return \Gedcomx\Conclusion\PlaceReference
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * The place of this event.
     *
     * @param \Gedcomx\Conclusion\PlaceReference $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }
    /**
     * The roles played in this event.
     *
     * @return \Gedcomx\Conclusion\EventRole[]
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * The roles played in this event.
     *
     * @param \Gedcomx\Conclusion\EventRole[] $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }
    /**
     * Returns the associative array for this Event
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->type) {
            $a["type"] = $this->type;
        }
        if ($this->date) {
            $a["date"] = $this->date->toArray();
        }
        if ($this->place) {
            $a["place"] = $this->place->toArray();
        }
        if ($this->roles) {
            $ab = array();
            foreach ($this->roles as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['roles'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this Event from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['type'])) {
            $this->type = $o["type"];
        }
        if (isset($o['date'])) {
                $this->date = new \Gedcomx\Conclusion\DateInfo($o["date"]);
        }
        if (isset($o['place'])) {
                $this->place = new \Gedcomx\Conclusion\PlaceReference($o["place"]);
        }
        $this->roles = array();
        if (isset($o['roles'])) {
            foreach ($o['roles'] as $i => $x) {
                    $this->roles[$i] = new \Gedcomx\Conclusion\EventRole($x);
            }
        }
    }
}
