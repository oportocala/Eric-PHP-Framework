<?php

/**
 * BasePlaceContact
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $label
 * @property string $value
 * @property integer $gr_id
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlaceContact extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('places_contacts');
        $this->hasColumn('label', 'string', 20, array(
             'type' => 'string',
             'length' => '20',
             ));
        $this->hasColumn('value', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('gr_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}