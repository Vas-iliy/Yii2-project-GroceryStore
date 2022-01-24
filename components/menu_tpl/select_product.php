<option
    value="<?=$category['id']?>"
    <?if($category['id'] == $this->model->category_id) echo 'selected';?>
>
    <?=" {$tab} {$category['title']}"?>
</option>
<?if(isset($category['children'])):?>
    <?=$this->getMenuHtml($category['children'], $tab . '-')?>
<?endif;?>