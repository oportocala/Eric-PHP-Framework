<?

class PlaceTable extends Doctrine_Table{

    public $filters = array(
        array(
            "label" => "Fara adresa",
            "value" => "!address"
            ),
        array(
            "label" => "Fara program",
            "value" => "!schedule"
            ),
        array(
            "label" => "Deschise",
            "value" => "open"
            ),
        array(
            "label" => "Inchise",
            "value" => "closed"
            )
        );
    /*
     * Wrap your filtering needs over here
     */
    public function filter($query, $filterType, $filterValue){

        if ($query instanceof Doctrine_Query) {
            $newQuery = $query->copy();

            switch($filterType){

                case "!address":
                    $newQuery->addWhere($query->getRootAlias() . '.' . 'address_id IS NULL');
                break;

                case "!schedule":
                    $newQuery->addWhere($query->getRootAlias() . '.' . 'schedule_id IS NULL');
                break;

                case "open":
                    $newQuery->addWhere($query->getRootAlias() . '.' . 'state = ?', "open");
                break;

                case "closed":
                    $newQuery->addWhere($query->getRootAlias() . '.' . 'state = ?', "closed");
                break;



                default:
                     $newQuery->addWhere($query->getRootAlias() . '.' . $filterType .' = ?', $filterValue);
                break;
                }
                
            return $newQuery;
            }
        }

}
