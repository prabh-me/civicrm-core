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
 * Generated from xml/schema/CRM/Core/County.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

namespace Civi\Core;

require_once 'Civi/Core/Entity.php';

use Doctrine\ORM\Mapping as ORM;
use Hateoas\Configuration\Annotation as Hateoas;
use Civi\API\Annotation as CiviAPI;
use JMS\Serializer\Annotation as JMS;

/**
 * County
 *
 * @CiviAPI\Entity("County")
 * @CiviAPI\Permission()
 * @ORM\Table(name="civicrm_county", uniqueConstraints={@ORM\UniqueConstraint(name="UI_name_state_id", columns={"name","state_province_id"})}, indexes={@ORM\Index(name="FK_civicrm_county_state_province_id", columns={"state_province_id"})})
 * @ORM\Entity
 * @Hateoas\Relation("self",
 *   href = @Hateoas\Route(
 *    "County_get",
 *    parameters = { "id" = "expr(object.getId())" },
 *    absolute = true,
 *    generator = "civi"
 *  )
 * )
 *
 */
class County extends \Civi\Core\Entity {

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
   */
  private $name;
  
  /**
   * @var string
   *
   * @JMS\Type("string")
   * @ORM\Column(name="abbreviation", type="string", length=4, nullable=true)
   * 
   */
  private $abbreviation;
  
  /**
   * @var \Civi\Core\StateProvince
   *
   * @JMS\Type("\Civi\Core\StateProvince")
   * @ORM\ManyToOne(targetEntity="Civi\Core\StateProvince")
   * @ORM\JoinColumns({@ORM\JoinColumn(name="state_province_id", referencedColumnName="id")})
   */
  private $stateProvince;

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
   * @return County
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
   * Set abbreviation
   *
   * @param string $abbreviation
   * @return County
   */
  public function setAbbreviation($abbreviation) {
    $this->abbreviation = $abbreviation;
    return $this;
  }

  /**
   * Get abbreviation
   *
   * @return string
   */
  public function getAbbreviation() {
    return $this->abbreviation;
  }
  
  /**
   * Set stateProvince
   *
   * @param \Civi\Core\StateProvince $stateProvince
   * @return County
   */
  public function setStateProvince(\Civi\Core\StateProvince $stateProvince = null) {
    $this->stateProvince = $stateProvince;
    return $this;
  }

  /**
   * Get stateProvince
   *
   * @return \Civi\Core\StateProvince
   */
  public function getStateProvince() {
    return $this->stateProvince;
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
        'type' => CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                          ),
      
              'name' => array(
      
        'name' => 'name',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('County'),
                                 'maxlength' => 64,
                         'size' => CRM_Utils_Type::BIG,
                           
                'import' => true,
        'where' => 'civicrm_county.name',
        'headerPattern' => '/county/i',
        'dataPattern' => '/[A-Z]{2}/',
                         'export' => true,
                                   
                          ),
      
              'abbreviation' => array(
      
        'name' => 'abbreviation',
        'type' => CRM_Utils_Type::T_STRING,
                'title' => ts('County Abbreviation'),
                                 'maxlength' => 4,
                         'size' => CRM_Utils_Type::FOUR,
                           
                                    
                          ),
      
              'state_province_id' => array(
      
        'name' => 'state_province_id',
        'type' => CRM_Utils_Type::T_INT,
                        'required' => true,
                                             
                                    
                'FKClassName' => 'CRM_Core_StateProvince',
                          ),
             );
    }
    return self::$_fields;
  }

}
