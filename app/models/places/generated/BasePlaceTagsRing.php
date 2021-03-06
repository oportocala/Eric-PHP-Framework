<?php

/**
 * BasePlaceTagsRing
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $tag_id
 * @property integer $place_id
 * @property Place $Place
 * @property PlaceTag $PlaceTag
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlaceTagsRing extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('places_tags_ring');
        $this->hasColumn('tag_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('place_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Place', array(
             'local' => 'place_id',
             'foreign' => 'id'));

        $this->hasOne('PlaceTag', array(
             'local' => 'tag_id',
             'foreign' => 'id'));
    }
}