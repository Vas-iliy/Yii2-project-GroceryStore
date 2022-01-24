<option
    value="<?=$category['id']?>"
    <?if($category['id'] == $this->model->parent_id) echo 'selected';?>
    <?if($category['id'] == $this->model->id) echo 'disabled';?>
>
    <?=" {$tab} {$category['title']}"?>
</option>
<?if(isset($category['children'])):?>
    <?=$this->getMenuHtml($category['children'], $tab . '-')?>
<?endif;?>