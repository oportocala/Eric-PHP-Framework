<p>
    <label for="name">Name</label>
    <?=Doctrine_Form_Element::inputFromRecord($item, 'name')?>
</p>

<p>
    <label for="group_id">Brand Group</label>
    <?=Doctrine_Form_Element::selectFromRecord($item, 'Group')?>
</p>
<p>
    <label for="description">Description</label>
    <?=Doctrine_Form_Element::i18nTextareaFromRecord($item, 'description')?>
</p>