<?
class StreetIndex extends Doctrine_Record
{
	
	public function setTableDefinition(){
        $this->setTableName('geo_street_index');
		$this->hasColumn('keyword', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
			 
		$this->hasColumn('keyword', 'field', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
		$this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'length' => '8',
             ));
		}
}