<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 *
 * @ORM\Table(name="content")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\ContentRepository")
 */
class Content
{
    /**
     * @var integer $contentId
     *
     * @ORM\Column(name="content_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contentId;

    /**
     * @var \DateTime $startDate
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime $expiryDate
     *
     * @ORM\Column(name="expiry_date", type="date", nullable=true)
     */
    private $expiryDate;

    /**
     * @var boolean $hideFromMenu
     *
     * @ORM\Column(name="hide_from_menu", type="boolean", nullable=true)
     */
    private $hideFromMenu;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id")
     * })
     */
    private $user;

    /**
     * @var ContentTypes
     *
     * @ORM\ManyToOne(targetEntity="ContentTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="content_type_id", referencedColumnName="content_type_id")
     * })
     */
    private $contentType;


    /**
     * Get contentId
     *
     * @return integer 
     */
    public function getContentId()
    {
        return $this->contentId;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Content
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     * @return Content
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    
        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return \DateTime 
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set hideFromMenu
     *
     * @param boolean $hideFromMenu
     * @return Content
     */
    public function setHideFromMenu($hideFromMenu)
    {
        $this->hideFromMenu = $hideFromMenu;
    
        return $this;
    }

    /**
     * Get hideFromMenu
     *
     * @return boolean 
     */
    public function getHideFromMenu()
    {
        return $this->hideFromMenu;
    }

    /**
     * Set user
     *
     * @param Users $user
     * @return Content
     */
    public function setUser(\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Users 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set contentType
     *
     * @param ContentTypes $contentType
     * @return Content
     */
    public function setContentType(\ContentTypes $contentType = null)
    {
        $this->contentType = $contentType;
    
        return $this;
    }

    /**
     * Get contentType
     *
     * @return ContentTypes 
     */
    public function getContentType()
    {
        return $this->contentType;
    }
}
