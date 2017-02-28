<?php
require_once 'conn.php';

//取得所有資料
$cats = Categories::all();

//取得前10筆資料
$cats10 = Categories::all(array('limit' => 10, 'order' => 'cat_name_tw'));

//取得Map
$catMap = Categories::find_by_cat_name_en('map');

?>
    <!DOCTYPE html>
    <html lang="zh-Hant">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>測試PHP讀取分類</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn t work if you view the page via file:// -->
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>

    <body>
        <h1 class="text-center">分類</h1>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs d-flex flex-wrap align-items-start" role="tablist">
            <?php 
            //輸出資料 
            foreach($cats as $cat) { 
            ?>

                <li role="presentation" class="nav-item p-2"><a href="#<?php echo strtolower($cat->en) ?>" class="nav-link" aria-controls="<?php echo strtolower($cat->en) ?>" role="tab" data-toggle="tab"><i class="fa fa-download fa-2x"></i><br /><?php echo $cat->name ?></a></li>
                <?php } ?>
        </ul>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    </body>

    </html>
