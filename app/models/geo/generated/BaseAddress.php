<?php

/**
 * BaseAddress
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $description
 * @property integer $street_id
 * @property integer $zone_id
 * @property string $no
 * @property int $postcode
 * @property Zone $Zone
 * @property Street $Street
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAddress extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('geo_addresses');
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('street_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('zone_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('no', 'string', 15, array(
             'type' => 'string',
             'length' => '15',
             ));
        $this->hasColumn('postcode', 'int', 6, array(
             'type' => 'int',
             'length' => '6',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Zone', array(
             'local' => 'zone_id',
             'foreign' => 'id'));

        $this->hasOne('Street', array(
             'local' => 'street_id',
             'foreign' => 'id'));

        $geographical0 = new Doctrine_Template_Geographical();
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'description',
             ),
             ));
        $this->actAs($geographical0);
        $this->actAs($i18n0);
    }
}