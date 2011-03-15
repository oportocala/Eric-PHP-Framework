<?php

/**
 * BasePlaceScheduleDays
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $schedule_id
 * @property int $weekday
 * @property time $time_start
 * @property time $time_end
 * @property PlaceSchedule $PlaceSchedule
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlaceScheduleDays extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('places_schedules_days');
        $this->hasColumn('schedule_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('weekday', 'int', 6, array(
             'type' => 'int',
             'unsigned' => true,
             'length' => '6',
             ));
        $this->hasColumn('time_start', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('time_end', 'time', null, array(
             'type' => 'time',
             ));
        $this->hasColumn('nonstop', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('closed', 'boolean', null, array(
             'type' => 'boolean',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PlaceSchedule', array(
             'local' => 'schedule_id',
             'foreign' => 'id'));
    }
}