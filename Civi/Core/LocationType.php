<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Core/LocationType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Core;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;
use Civi\API\Annotation as CiviAPI;
use JMS\Serializer\Annotation as JMS;

/**
 * LocationType
 *
 * @CiviAPI\Entity("LocationType")
 * @CiviAPI\Permission()
 * @ORM\Table(name="civicrm_location_type", uniqueConstraints={@ORM\UniqueConstraint(name="UI_name", columns={"name"})})
 * @ORM\Entity
 *
 */
class LocationType extends \Civi\Core\Entity {

  /**
   * @var integer
   *
   * @JMS\Type("integer")
   * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned":true} )
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;
    
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="name", type="string", length=64, nullable=true)
   * 
   * 
   */
  private $name;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="display_name", type="string", length=64, nullable=true)
   * 
   * 
   */
  private $displayName;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="vcard_name", type="string", length=64, nullable=true)
   * 
   * 
   */
  private $vcardName;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="description", type="string", length=255, nullable=true)
   * 
   * 
   */
  private $description;
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_reserved", type="boolean", nullable=true)
   * 
   * 
   */
  private $isReserved;
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_active", type="boolean", nullable=true)
   * 
   * 
   */
  private $isActive;
  
  /**
   * @var boolean
   *
   * @JMS\Type("boolean")
   * @ORM\Column(name="is_default", type="boolean", nullable=true)
   * 
   * 
   */
  private $isDefault;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }
    
  /**
   * Set name
   *
   * @param string $name
   * @return LocationType
   */
  public function setName($name) {
    $this->name = $name;
    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }
  
  /**
   * Set displayName
   *
   * @param string $displayName
   * @return LocationType
   */
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
    return $this;
  }

  /**
   * Get displayName
   *
   * @return string
   */
  public function getDisplayName() {
    return $this->displayName;
  }
  
  /**
   * Set vcardName
   *
   * @param string $vcardName
   * @return LocationType
   */
  public function setVcardName($vcardName) {
    $this->vcardName = $vcardName;
    return $this;
  }

  /**
   * Get vcardName
   *
   * @return string
   */
  public function getVcardName() {
    return $this->vcardName;
  }
  
  /**
   * Set description
   *
   * @param string $description
   * @return LocationType
   */
  public function setDescription($description) {
    $this->description = $description;
    return $this;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription() {
    return $this->description;
  }
  
  /**
   * Set isReserved
   *
   * @param boolean $isReserved
   * @return LocationType
   */
  public function setIsReserved($isReserved) {
    $this->isReserved = $isReserved;
    return $this;
  }

  /**
   * Get isReserved
   *
   * @return boolean
   */
  public function getIsReserved() {
    return $this->isReserved;
  }
  
  /**
   * Set isActive
   *
   * @param boolean $isActive
   * @return LocationType
   */
  public function setIsActive($isActive) {
    $this->isActive = $isActive;
    return $this;
  }

  /**
   * Get isActive
   *
   * @return boolean
   */
  public function getIsActive() {
    return $this->isActive;
  }
  
  /**
   * Set isDefault
   *
   * @param boolean $isDefault
   * @return LocationType
   */
  public function setIsDefault($isDefault) {
    $this->isDefault = $isDefault;
    return $this;
  }

  /**
   * Get isDefault
   *
   * @return boolean
   */
  public function getIsDefault() {
    return $this->isDefault;
  }

  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields( ) {
    if ( !self::$_fields) {
      self::$_fields = array (
      
              'id' => array(
      
        'name' => 'id',
        'propertyName' => 'id',
        'type' => CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                          ),
      
              'name' => array(
      
        'name' => 'name',
        'propertyName' => 'name',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Location Type'),
                                 'maxlength' => 64,
                         'size' => CRM_Utils_Type::BIG,
                           
                                    
                          ),
      
              'display_name' => array(
      
        'name' => 'display_name',
        'propertyName' => 'displayName',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Display Name'),
                                 'maxlength' => 64,
                         'size' => CRM_Utils_Type::BIG,
                           
                                    
                          ),
      
              'vcard_name' => array(
      
        'name' => 'vcard_name',
        'propertyName' => 'vcardName',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('vCard Location Type'),
                                 'maxlength' => 64,
                         'size' => CRM_Utils_Type::BIG,
                           
                                    
                          ),
      
              'description' => array(
      
        'name' => 'description',
        'propertyName' => 'description',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('Description'),
                                 'maxlength' => 255,
                         'size' => CRM_Utils_Type::HUGE,
                           
                                    
                          ),
      
              'is_reserved' => array(
      
        'name' => 'is_reserved',
        'propertyName' => 'isReserved',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'is_active' => array(
      
        'name' => 'is_active',
        'propertyName' => 'isActive',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
      
              'is_default' => array(
      
        'name' => 'is_default',
        'propertyName' => 'isDefault',
        'type' => CRM_Utils_Type::T_BOOLEAN,
                                                     
                                    
                          ),
             );
    }
    return self::$_fields;
  }

}
