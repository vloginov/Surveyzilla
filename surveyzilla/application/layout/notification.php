<?php use surveyzilla\application\view\UI ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo isset($view->title) ? $view->title : '' ?></title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="surveyzilla/style/notification.css" />
    </head>
    <body>
        <?php echo $view->content ?>
    </body>
</html>