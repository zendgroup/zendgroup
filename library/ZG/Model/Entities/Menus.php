<?php

namespace ZG\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menus
 *
 * @ORM\Table(name="menus")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\MenusRepository")
 */
class Menus
{
    /**
     * @var integer $menuId
     *
     * @ORM\Column(name="menu_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $menuId;

    /**
     * @var string $menuName
     *
     * @ORM\Column(name="menu_name", type="string", length=45, nullable=true)
     */
    private $menuName;

    /**
     * @var string $menuType
     *
     * @ORM\Column(name="menu_type", type="string", length=255, nullable=true)
     */
    private $menuType;

    /**
     * @var string $menuLink
     *
     * @ORM\Column(name="menu_link", type="string", length=255, nullable=true)
     */
    private $menuLink;

    /**
     * @var string $menuTarget
     *
     * @ORM\Column(name="menu_target", type="string", length=255, nullable=true)
     */
    private $menuTarget;

    /**
     * @var integer $lft
     *
     * @ORM\Column(name="lft", type="integer", nullable=true)
     */
    private $lft;

    /**
     * @var integer $rgt
     *
     * @ORM\Column(name="rgt", type="integer", nullable=true)
     */
    private $rgt;


    /**
     * Get menuId
     *
     * @return integer 
     */
    public function getMenuId()
    {
        return $this->menuId;
    }

    /**
     * Set menuName
     *
     * @param string $menuName
     * @return Menus
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    
        return $this;
    }

    /**
     * Get menuName
     *
     * @return string 
     */
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * Set menuType
     *
     * @param string $menuType
     * @return Menus
     */
    public function setMenuType($menuType)
    {
        $this->menuType = $menuType;
    
        return $this;
    }

    /**
     * Get menuType
     *
     * @return string 
     */
    public function getMenuType()
    {
        return $this->menuType;
    }

    /**
     * Set menuLink
     *
     * @param string $menuLink
     * @return Menus
     */
    public function setMenuLink($menuLink)
    {
        $this->menuLink = $menuLink;
    
        return $this;
    }

    /**
     * Get menuLink
     *
     * @return string 
     */
    public function getMenuLink()
    {
        return $this->menuLink;
    }

    /**
     * Set menuTarget
     *
     * @param string $menuTarget
     * @return Menus
     */
    public function setMenuTarget($menuTarget)
    {
        $this->menuTarget = $menuTarget;
    
        return $this;
    }

    /**
     * Get menuTarget
     *
     * @return string 
     */
    public function getMenuTarget()
    {
        return $this->menuTarget;
    }

    /**
     * Set lft
     *
     * @param integer $lft
     * @return Menus
     */
    public function setLft($lft)
    {
        $this->lft = $lft;
    
        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return Menus
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;
    
        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt()
    {
        return $this->rgt;
    }
}
