<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="first_name", type="string", length=50)
     */
    protected $firstName;
    
    /**
    * @ORM\Column(name="last_name", type="string", length=50)
    */
    protected $lastName;

    /**
    * @ORM\Column(name="address_line_1", type="string", length=100)
    */
    protected $addressLine1;

    /**
    * @ORM\Column(name="address_line_2", type="string", length=100, nullable=true)
    */
    protected $addressLine2;

    /**
     * @ORM\Column(name="city", type="string", length=100)
     */
    protected $city;
    
    /**
     * @ORM\Column(name="postcode", type="string", length=25)
     */
    protected $postcode;
    
    /**
     * @ORM\Column(name="telephone_home", type="string", length=25)
     */
    protected $telephoneHome;
    
    /**
     * @ORM\Column(name="telephone_mobile", type="string", length=25)
     */
    protected $telephoneMobile;
    
    
    // Bunch of Setters/Getters for user properties
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    public function getLastName()
    {
        return $this->lastName;
    }
    
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
    }
    
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }
    
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
    }
    
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }
    
    public function setCity($city)
    {
        $this->city = $city;
    }
    
    public function getCity()
    {
        return $this->city;
    }
    
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }
    
    public function getPostcode()
    {
        return $this->postcode;
    }
    
    public function getFullAddress()
    {
        $ret = array();
    
        $ret[] = ucwords(strtolower($this->getAddressLine1()));
        if ($this->getAddressLine2()) {
            $ret[] = ucwords(strtolower($this->getAddressLine2()));
        }
        $ret[] = ucwords(strtolower($this->getCity()));
        $ret[] = strtoupper(strtolower($this->getPostcode()));
    
        return $ret;
    }
    
    public function getAddressLines()
    {
        $ret = array();
        $ret[] = ucwords(strtolower($this->getAddressLine1()));
        if ($this->getAddressLine2()) {
            $ret[] = ',';
            $ret[] = ucwords(strtolower($this->getAddressLine2()));
        }
        return $ret;
    }
    
    public function setTelephoneHome($telHome)
    {
        $this->telephoneHome = $telHome;
    }
    
    public function getTelephoneHome()
    {
        return $this->telephoneHome;
    }
    
    public function setTelephoneMobile($telMobile)
    {
        $this->telephoneMobile = $telMobile;
    }
    
    public function getTelephoneMobile()
    {
        return $this->telephoneMobile;
    }
    

}