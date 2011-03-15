
<fieldset class="column-left">

	<p>
                
		<label for="street">Strada</label>
		<input  id="street" type="text" class="text-input medium-input" 
			value="<?=$item->Address->Street?>"
			autocomp="<?=ROOT?>services/geo/streets.php" 
                        rel="<?=$place->Address->street_id?>"
                        callback="setNumbers" clearCallback="clearZone"
		/>
                
	</p>
	<p>
            
		<label for="no">Numarul</label>
		<select name="address_id" id="no">
                    <?
                    $street = $item->Address->Street;
                    foreach($street->Address as $key){
                        $s = ($item->address_id == $key->id)?'selected':'';
                        ?>
			<option value="<?=$key->id?>" <?=$s?>><?=$key->no?></option>
			<? }?>
		</select>
            
	</p>
</fieldset>

<fieldset class="column-right">
    <p>
        <label for="accesability" style="margin-bottom:0">Accesability</label>
        <?=Doctrine_Form_Element::i18nTextareaFromRecord($item, 'accesability')?>
    </p>
</fieldset>

<script type="text/javascript">
function setNumbers(x, obj){
	var adr = obj.addresses;
        var html = '';
        for(var i=0;i<adr.length;i++){
            html += "<option value='"+adr[i].id+"'>" + adr[i].no + "</option>";

            }
        $("#no").html(html);
	}
</script>
<div class="clear"></div>