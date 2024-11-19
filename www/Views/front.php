<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title??"Titre de ma page";?></title>
        <meta name="description" content="<?php echo $description??"Ceci est la description de la page";?>">
    </head>
    <body>
        <h1>Template du front</h1>
        <?php include $this->view;?>
    </body>
</html>

