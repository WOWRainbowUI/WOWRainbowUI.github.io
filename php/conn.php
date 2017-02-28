<?php
require_once 'lib/php-activerecord/ActiveRecord.php';

//初始化資料庫
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory("mod");
    $cfg->set_connections(array(
        'development' => 'mysql://rainbowui:wow@localhost/rainbowui'));
});
?>