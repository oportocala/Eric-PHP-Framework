<?

abstract class BaseLanguage extends Doctrine_Record{

     public function setTableDefinition(){
        $this->setTableName('app_languages');

        $this->hasColumn('code', 'string', 5, array(
             'type' => 'string',
             'length' => '5',
             ));

        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));

        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));

        $this->hasColumn('order', 'integer', 8, array(
             'type' => 'integer',
             'length' => '8',
             ));
        }
        
     public function setUp(){
        parent::setUp();
        }
    }