<?php

/**
 * ZEND GROUP
 *
 * @name        Languages.php
 * @category    ZG
 * @package 	Model
 * @subpackage  Model\Entities
 * @author      Thuy Dinh Xuan <thuydx@zendgroup.vn>
 * @copyright   Copyright (c)2008-2010 ZEND GROUP. All rights reserved
 * @license     http://zendgroup.vn/license/
 * @version     $1.0$
 *
 * LICENSE
 *
 * This source file is copyrighted by ZEND GROUP, full details in LICENSE.txt.
 * It is also available through the Internet at this URL:
 * http://zendgroup.vn/license/
 * If you did not receive a copy of the license and are unable to
 * obtain it through the Internet, please send an email
 * to license@zendgroup.vn so we can send you a copy immediately.
 *
 */

namespace ZG\Model\Mapping;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity(repositoryClass="ZG\Model\Repositories\Languages")
 */
class Languages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="language_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $languageId;

    /**
     * @var string
     *
     * @ORM\Column(name="language_name", type="string", length=125, nullable=true)
     */
    private $languageName;

    /**
     * @var string
     *
     * @ORM\Column(name="language_code", type="string", length=5, nullable=true)
     */
    private $languageCode;

    /**
     * @var string
     *
     * @ORM\Column(name="language_default", type="string", length=125, nullable=true)
     */
    private $languageDefault;


}
