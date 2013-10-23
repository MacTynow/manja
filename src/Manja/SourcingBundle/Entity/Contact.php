<?php

namespace Manja\SourcingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="CONTACT")
 * @ORM\Entity
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCONTACT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontact;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=45, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Firstname", type="string", length=45, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="Middle_name", type="string", length=45, nullable=true)
     */
    private $middleName;

    /**
     * @var string
     *
     * @ORM\Column(name="Last_name", type="string", length=45, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="Company", type="string", length=45, nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="Department", type="string", length=45, nullable=true)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="Job_title", type="string", length=45, nullable=true)
     */
    private $jobTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="Homestreet", type="string", length=100, nullable=true)
     */
    private $homestreet;

    /**
     * @var string
     *
     * @ORM\Column(name="Home_city", type="string", length=45, nullable=true)
     */
    private $homeCity;

    /**
     * @var string
     *
     * @ORM\Column(name="Home_state", type="string", length=45, nullable=true)
     */
    private $homeState;

    /**
     * @var string
     *
     * @ORM\Column(name="Home_postalcode", type="string", length=45, nullable=true)
     */
    private $homePostalcode;

    /**
     * @var string
     *
     * @ORM\Column(name="Home_country", type="string", length=45, nullable=true)
     */
    private $homeCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="Home_fax", type="string", length=45, nullable=true)
     */
    private $homeFax;

    /**
     * @var string
     *
     * @ORM\Column(name="Home_phone", type="string", length=45, nullable=true)
     */
    private $homePhone;

    /**
     * @var string
     *
     * @ORM\Column(name="Home_phone2", type="string", length=45, nullable=true)
     */
    private $homePhone2;

    /**
     * @var string
     *
     * @ORM\Column(name="Mobile_phone", type="string", length=45, nullable=true)
     */
    private $mobilePhone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Birthday", type="date", nullable=true)
     */
    private $birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="PO_Box", type="string", length=45, nullable=true)
     */
    private $poBox;

    /**
     * @var string
     *
     * @ORM\Column(name="Children", type="string", length=45, nullable=true)
     */
    private $children;

    /**
     * @var string
     *
     * @ORM\Column(name="Email_address", type="string", length=45, nullable=true)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="Email_display_name", type="string", length=45, nullable=true)
     */
    private $emailDisplayName;

    /**
     * @var string
     *
     * @ORM\Column(name="Email_address2", type="string", length=45, nullable=true)
     */
    private $emailAddress2;

    /**
     * @var string
     *
     * @ORM\Column(name="Email2_display_name", type="string", length=45, nullable=true)
     */
    private $email2DisplayName;

    /**
     * @var string
     *
     * @ORM\Column(name="Email_address3", type="string", length=45, nullable=true)
     */
    private $emailAddress3;

    /**
     * @var string
     *
     * @ORM\Column(name="Email3_display_name", type="string", length=45, nullable=true)
     */
    private $email3DisplayName;

    /**
     * @var string
     *
     * @ORM\Column(name="Gender", type="string", length=45, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="Government_id_number", type="string", length=45, nullable=true)
     */
    private $governmentIdNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Hobby", type="string", length=45, nullable=true)
     */
    private $hobby;

    /**
     * @var string
     *
     * @ORM\Column(name="Keywords", type="string", length=45, nullable=true)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="Comment", type="string", length=45, nullable=true)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="Spouse", type="string", length=45, nullable=true)
     */
    private $spouse;

    /**
     * @var string
     *
     * @ORM\Column(name="Website", type="string", length=45, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="Picture_path", type="string", length=45, nullable=true)
     */
    private $picturePath;

    /**
     * @var string
     *
     * @ORM\Column(name="Office_address", type="string", length=45, nullable=true)
     */
    private $officeAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="Office_street", type="string", length=45, nullable=true)
     */
    private $officeStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="Office_city", type="string", length=45, nullable=true)
     */
    private $officeCity;

    /**
     * @var string
     *
     * @ORM\Column(name="Office_zip", type="string", length=45, nullable=true)
     */
    private $officeZip;

    /**
     * @var string
     *
     * @ORM\Column(name="Office_state", type="string", length=45, nullable=true)
     */
    private $officeState;

    /**
     * @var string
     *
     * @ORM\Column(name="Office_country", type="string", length=45, nullable=true)
     */
    private $officeCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="Office_phone", type="string", length=45, nullable=true)
     */
    private $officePhone;



    /**
     * Get idcontact
     *
     * @return integer 
     */
    public function getIdcontact()
    {
        return $this->idcontact;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Contact
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     * @return Contact
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    
        return $this;
    }

    /**
     * Get middleName
     *
     * @return string 
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Contact
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return Contact
     */
    public function setCompany($company)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return Contact
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    
        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     * @return Contact
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    
        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string 
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set homestreet
     *
     * @param string $homestreet
     * @return Contact
     */
    public function setHomestreet($homestreet)
    {
        $this->homestreet = $homestreet;
    
        return $this;
    }

    /**
     * Get homestreet
     *
     * @return string 
     */
    public function getHomestreet()
    {
        return $this->homestreet;
    }

    /**
     * Set homeCity
     *
     * @param string $homeCity
     * @return Contact
     */
    public function setHomeCity($homeCity)
    {
        $this->homeCity = $homeCity;
    
        return $this;
    }

    /**
     * Get homeCity
     *
     * @return string 
     */
    public function getHomeCity()
    {
        return $this->homeCity;
    }

    /**
     * Set homeState
     *
     * @param string $homeState
     * @return Contact
     */
    public function setHomeState($homeState)
    {
        $this->homeState = $homeState;
    
        return $this;
    }

    /**
     * Get homeState
     *
     * @return string 
     */
    public function getHomeState()
    {
        return $this->homeState;
    }

    /**
     * Set homePostalcode
     *
     * @param string $homePostalcode
     * @return Contact
     */
    public function setHomePostalcode($homePostalcode)
    {
        $this->homePostalcode = $homePostalcode;
    
        return $this;
    }

    /**
     * Get homePostalcode
     *
     * @return string 
     */
    public function getHomePostalcode()
    {
        return $this->homePostalcode;
    }

    /**
     * Set homeCountry
     *
     * @param string $homeCountry
     * @return Contact
     */
    public function setHomeCountry($homeCountry)
    {
        $this->homeCountry = $homeCountry;
    
        return $this;
    }

    /**
     * Get homeCountry
     *
     * @return string 
     */
    public function getHomeCountry()
    {
        return $this->homeCountry;
    }

    /**
     * Set homeFax
     *
     * @param string $homeFax
     * @return Contact
     */
    public function setHomeFax($homeFax)
    {
        $this->homeFax = $homeFax;
    
        return $this;
    }

    /**
     * Get homeFax
     *
     * @return string 
     */
    public function getHomeFax()
    {
        return $this->homeFax;
    }

    /**
     * Set homePhone
     *
     * @param string $homePhone
     * @return Contact
     */
    public function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;
    
        return $this;
    }

    /**
     * Get homePhone
     *
     * @return string 
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Set homePhone2
     *
     * @param string $homePhone2
     * @return Contact
     */
    public function setHomePhone2($homePhone2)
    {
        $this->homePhone2 = $homePhone2;
    
        return $this;
    }

    /**
     * Get homePhone2
     *
     * @return string 
     */
    public function getHomePhone2()
    {
        return $this->homePhone2;
    }

    /**
     * Set mobilePhone
     *
     * @param string $mobilePhone
     * @return Contact
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    
        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return string 
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Contact
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set poBox
     *
     * @param string $poBox
     * @return Contact
     */
    public function setPoBox($poBox)
    {
        $this->poBox = $poBox;
    
        return $this;
    }

    /**
     * Get poBox
     *
     * @return string 
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * Set children
     *
     * @param string $children
     * @return Contact
     */
    public function setChildren($children)
    {
        $this->children = $children;
    
        return $this;
    }

    /**
     * Get children
     *
     * @return string 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return Contact
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set emailDisplayName
     *
     * @param string $emailDisplayName
     * @return Contact
     */
    public function setEmailDisplayName($emailDisplayName)
    {
        $this->emailDisplayName = $emailDisplayName;
    
        return $this;
    }

    /**
     * Get emailDisplayName
     *
     * @return string 
     */
    public function getEmailDisplayName()
    {
        return $this->emailDisplayName;
    }

    /**
     * Set emailAddress2
     *
     * @param string $emailAddress2
     * @return Contact
     */
    public function setEmailAddress2($emailAddress2)
    {
        $this->emailAddress2 = $emailAddress2;
    
        return $this;
    }

    /**
     * Get emailAddress2
     *
     * @return string 
     */
    public function getEmailAddress2()
    {
        return $this->emailAddress2;
    }

    /**
     * Set email2DisplayName
     *
     * @param string $email2DisplayName
     * @return Contact
     */
    public function setEmail2DisplayName($email2DisplayName)
    {
        $this->email2DisplayName = $email2DisplayName;
    
        return $this;
    }

    /**
     * Get email2DisplayName
     *
     * @return string 
     */
    public function getEmail2DisplayName()
    {
        return $this->email2DisplayName;
    }

    /**
     * Set emailAddress3
     *
     * @param string $emailAddress3
     * @return Contact
     */
    public function setEmailAddress3($emailAddress3)
    {
        $this->emailAddress3 = $emailAddress3;
    
        return $this;
    }

    /**
     * Get emailAddress3
     *
     * @return string 
     */
    public function getEmailAddress3()
    {
        return $this->emailAddress3;
    }

    /**
     * Set email3DisplayName
     *
     * @param string $email3DisplayName
     * @return Contact
     */
    public function setEmail3DisplayName($email3DisplayName)
    {
        $this->email3DisplayName = $email3DisplayName;
    
        return $this;
    }

    /**
     * Get email3DisplayName
     *
     * @return string 
     */
    public function getEmail3DisplayName()
    {
        return $this->email3DisplayName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Contact
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set governmentIdNumber
     *
     * @param string $governmentIdNumber
     * @return Contact
     */
    public function setGovernmentIdNumber($governmentIdNumber)
    {
        $this->governmentIdNumber = $governmentIdNumber;
    
        return $this;
    }

    /**
     * Get governmentIdNumber
     *
     * @return string 
     */
    public function getGovernmentIdNumber()
    {
        return $this->governmentIdNumber;
    }

    /**
     * Set hobby
     *
     * @param string $hobby
     * @return Contact
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;
    
        return $this;
    }

    /**
     * Get hobby
     *
     * @return string 
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Contact
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    
        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Contact
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set spouse
     *
     * @param string $spouse
     * @return Contact
     */
    public function setSpouse($spouse)
    {
        $this->spouse = $spouse;
    
        return $this;
    }

    /**
     * Get spouse
     *
     * @return string 
     */
    public function getSpouse()
    {
        return $this->spouse;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Contact
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set picturePath
     *
     * @param string $picturePath
     * @return Contact
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;
    
        return $this;
    }

    /**
     * Get picturePath
     *
     * @return string 
     */
    public function getPicturePath()
    {
        return $this->picturePath;
    }

    /**
     * Set officeAddress
     *
     * @param string $officeAddress
     * @return Contact
     */
    public function setOfficeAddress($officeAddress)
    {
        $this->officeAddress = $officeAddress;
    
        return $this;
    }

    /**
     * Get officeAddress
     *
     * @return string 
     */
    public function getOfficeAddress()
    {
        return $this->officeAddress;
    }

    /**
     * Set officeStreet
     *
     * @param string $officeStreet
     * @return Contact
     */
    public function setOfficeStreet($officeStreet)
    {
        $this->officeStreet = $officeStreet;
    
        return $this;
    }

    /**
     * Get officeStreet
     *
     * @return string 
     */
    public function getOfficeStreet()
    {
        return $this->officeStreet;
    }

    /**
     * Set officeCity
     *
     * @param string $officeCity
     * @return Contact
     */
    public function setOfficeCity($officeCity)
    {
        $this->officeCity = $officeCity;
    
        return $this;
    }

    /**
     * Get officeCity
     *
     * @return string 
     */
    public function getOfficeCity()
    {
        return $this->officeCity;
    }

    /**
     * Set officeZip
     *
     * @param string $officeZip
     * @return Contact
     */
    public function setOfficeZip($officeZip)
    {
        $this->officeZip = $officeZip;
    
        return $this;
    }

    /**
     * Get officeZip
     *
     * @return string 
     */
    public function getOfficeZip()
    {
        return $this->officeZip;
    }

    /**
     * Set officeState
     *
     * @param string $officeState
     * @return Contact
     */
    public function setOfficeState($officeState)
    {
        $this->officeState = $officeState;
    
        return $this;
    }

    /**
     * Get officeState
     *
     * @return string 
     */
    public function getOfficeState()
    {
        return $this->officeState;
    }

    /**
     * Set officeCountry
     *
     * @param string $officeCountry
     * @return Contact
     */
    public function setOfficeCountry($officeCountry)
    {
        $this->officeCountry = $officeCountry;
    
        return $this;
    }

    /**
     * Get officeCountry
     *
     * @return string 
     */
    public function getOfficeCountry()
    {
        return $this->officeCountry;
    }

    /**
     * Set officePhone
     *
     * @param string $officePhone
     * @return Contact
     */
    public function setOfficePhone($officePhone)
    {
        $this->officePhone = $officePhone;
    
        return $this;
    }

    /**
     * Get officePhone
     *
     * @return string 
     */
    public function getOfficePhone()
    {
        return $this->officePhone;
    }
}