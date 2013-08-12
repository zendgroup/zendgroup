<?php

/**
 *
 * ZEND GROUP
 *
 * @name        TagGroup.php
 * @category    Model
 * @package 	Entities
 * @subpackage  
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @link 		http://zendgroup.vn
 * @copyright   Copyright (c) 2012-2013 ZEND GROUP. All rights reserved (http://www.zendgroup.vn)
 * @license     http://zendgroup.vn/license/
 * @version     $0.1$
 * 3:52:05 AM - Apr 3, 2013
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 */
            


use Doctrine\ORM\Mapping as ORM;

/**
 * TagGroup
 *
 * @ORM\Table(name="tag_group")
 * @ORM\Entity
 */
class TagGroup
{
    /**
     * @var integer $tagGroupId
     *
     * @ORM\Column(name="tag_group_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tagGroupId;

    /**
     * @var string $tagGroupTitle
     *
     * @ORM\Column(name="tag_group_title", type="string", length=125, nullable=true)
     */
    private $tagGroupTitle;


    /**
     * Get tagGroupId
     *
     * @return integer 
     */
    public function getTagGroupId()
    {
        return $this->tagGroupId;
    }

    /**
     * Set tagGroupTitle
     *
     * @param string $tagGroupTitle
     * @return TagGroup
     */
    public function setTagGroupTitle($tagGroupTitle)
    {
        $this->tagGroupTitle = $tagGroupTitle;
        return $this;
    }

    /**
     * Get tagGroupTitle
     *
     * @return string 
     */
    public function getTagGroupTitle()
    {
        return $this->tagGroupTitle;
    }
}