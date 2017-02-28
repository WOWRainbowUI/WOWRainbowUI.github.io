<?php
//建立資料表類別，名稱和資料表相同
class Categories extends ActiveRecord\Model 
{
    static $primary_key = 'cat_id';
    static $alias_attribute = array(
        'name' => 'cat_name_tw',
        'en' => 'cat_name_en',
        'color' => 'cat_color'
    );
}
?>
