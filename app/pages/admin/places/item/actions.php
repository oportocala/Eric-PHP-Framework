<fieldset class="column-left">
    <p>
    <label>Status</label>
            <div class="buttonset-ui">
                    <?
                    $status = $item->status;
                    $check = "checked='checked'";
                    ?>
                    <input type="radio" id="status0" name="status" value="draft" <?=$status == 'draft'?$check:''?> icon="ui-icon-circle-minus" note_id="status-change-notif"/>
                    <label for="status0">Draft</label>

                    <input type="radio" id="status1" name="status" value="published" <?=$status == 'published'?$check:''?> icon="ui-icon-circle-check" note_id="status-change-notif"/>
                    <label for="status1">Public</label>
                    
            </div>

    </p>
    <br/>

    <p>
    <label>Stare</label>
             <div class="buttonset-ui">
                    <?
                    $state = $item->state;
                    $check = "checked='checked'";
                    ?>
                   
                    <input type="radio" id="state0" name="state" value="closed" <?=($state == 'closed')?$check:''?> icon="ui-icon-circle-minus"  note_id="openstate-change-notif"/>
                    <label for="state0">Inchis</label>

                    <input type="radio" id="state1" name="state" value="open"   <?=($state == 'open')?$check:''?> icon="ui-icon-circle-check" note_id="openstate-change-notif"/>
                    <label for="state1">Deschis</label>
                   
            </div>
    </p>
    <br/>
    <!--
    @TODO
    <p>
        <button class="button-ui del" action="delete" rel="<?=$id?>" table="<?=$table?>">Sterge local</button>
    </p>
    -->
</fieldset>

<fieldset class="column-right">
    <p>
            <label>&nbsp;</label>
            <a href="<?=$item->url()?>" class="button-ui" target="_blank" icon="ui-icon-circle-zoomin">Vizualizeaza in site</a>
    </p>
</fieldset>

<div class="clear"></div>