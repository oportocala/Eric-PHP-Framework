<?php

/**
 * BaseStreet
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $prefix
 * @property integer $zone_id
 * @property Zone $Zone
 * @property Doctrine_Collection $Address
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseStreet extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('geo_streets');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('prefix', 'string', 255, array(
             'type' => 'string',
             'default' => 'Strada',
             'length' => '255',
             ));
			 
		 $this->hasColumn('short_prefix', 'string', 255, array(
             'type' => 'string',
             'default' => 'Str.',
             'length' => '20',
             ));
			 
        $this->hasColumn('zone_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Zone', array(
             'local' => 'zone_id',
             'foreign' => 'id'));

        $this->hasMany('Address', array(
             'local' => 'id',
             'foreign' => 'street_id'));

        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             'className' => 'Geo%CLASS%Index',
             ));
        $this->actAs($searchable0);
    }
}