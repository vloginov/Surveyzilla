<?php
use surveyzilla\application\view\UI;
?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo (isset($view->title)) ? $view->title : UI::$text['poll'] ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="surveyzilla/style/run.css" />
    </head>
    <body>
        <div class="main-content">
            <div class="title-bar">
                <?php echo $view->item->pollName ?>
            </div>
            <div class="item-content">
                <?php echo $view->content ?>
            </div>
        </div>
    </body>
</html>