<?php

/**
 * BasePlaceTag
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property enum $category
 * @property string $name
 * @property string $icon
 * @property integer $count
 * @property Doctrine_Collection $Place
 * @property Doctrine_Collection $PlaceTagsRing
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlaceTag extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('places_tags');
        $this->hasColumn('category', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'misc',
              1 => 'music',
              2 => 'services',
             ),
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('icon', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('count', 'integer', null, array(
             'type' => 'integer',
             'unsigned' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Place', array(
             'refClass' => 'PlaceTagsRing',
             'local' => 'place_tag_id',
             'foreign' => 'place_id'));

        $this->hasMany('PlaceTagsRing', array(
             'local' => 'id',
             'foreign' => 'tag_id'));

        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'fields' => 
             array(
              0 => 'name',
             ),
             ));
        $this->actAs($i18n0);
        $this->actAs($sluggable0);
    }
}