<div class="search-wrap">
    <form action="?" method="get" id="filter">
        <input type="hidden" name="filter" value="on" />
        <select name="filter_type" onchange="filter_submit()">
            <option value="">Filtreaza rezultatul</option>
            <? foreach($table->filters as $filter){
                $s = $_GET['filter_type'] == $filter['value']?'selected':'';
                ?>
                <option value="<?=$filter['value']?>" <?=$s?>><?=$filter['label']?></option>
                <? }?>
        </select>
    </form>
</div>
<script type="text/javascript" >
function filter_submit(){
    $("#filter").submit()

    }
</script>