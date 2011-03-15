<?
$contact_labels = array(
    "site",
    "telephone/1",
    "telephone/2",
    "email",
    "twitter",
    "facebook",
    "yahoo",
    "myspace"
    );
$contacts = $item->Contact->toArray(); ?>
<div class="contact-data">
<?
$i = 0;
foreach($contacts as $contact){?>
    <p>
        <input type="hidden" name="Contact[<?=$i?>][gr_id]" value="<?=$item->contact_gr_id?>" />
        <select name="Contact[<?=$i?>][label]" class="">
            <? foreach ($contact_labels as $contact_label){
                $s = ($contact_label == $contact['label'])?'selected':'';
                ?>
                <option <?=$s?>><?=$contact_label?></option>
           <? } ?>
        </select> :
        <input type="text" name="Contact[<?=$i?>][value]" value="<?=$contact['value']?>" class="medium-input text-input"/>
        <input type="button" class="redbutton button delete-contact-data" value="Delete"/>
    </p>

    <? $i++;}?>
    </div>

    <p>
        <input type="button" class="add-contact-data button" value="Add contact data"/>
    </p>


<!-- Template -->
<script type="text/html" id="rowTemplate">

     <p>
        <input type="hidden" name="Contact[<?=$i?>][gr_id]" value="<?=$item->contact_gr_id?>" />
        <select name="Contact[<%= count %>][label]" class="">
            <? foreach ($contact_labels as $contact_label){
                ?>
                <option><?=$contact_label?></option>
           <? } ?>
        </select> :
        <input type="text" name="Contact[<%= count %>][value]" value="" class="medium-input text-input"/>
        <input type="button" class="redbutton button delete-contact-data" value="Delete"/>
    </p>

</script>
<script type="text/javascript" src="<?=WWW_ROOT?>jse/micro.template.js"></script>
<script type="text/javascript">
$(".add-contact-data").click(function(){
    var count = $('.contact-data p').length;
    var template = tmpl('rowTemplate');
    var html = template({count: count});
    $('.contact-data').append(html);
    });

$(".delete-contact-data").live('click', function(){
    var $this = $(this);
    $this.closest('p').remove();
    $('.contact-data p').each(function(i){
        var $this = $(this);
        var select_name = 'Contact['+i+'][label]';
        var input_name  = 'Contact['+i+'][value]';
        var hidden_name = 'Contact['+i+'][gr_id]';
        $this.find('select').attr('name', select_name);
        $this.find('input[type=text]').attr('name', input_name);
        $this.find('input[type=hidden]').attr('name', hidden_name);
        });
    });
</script>