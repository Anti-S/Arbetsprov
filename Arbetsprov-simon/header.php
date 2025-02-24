<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arbetsprov!</title>

   <?php wp_head();?>

</head>
<body>



<header>
    <div class="container">
        <?php
        wp_nav_menu(
                array(
                    'theme_location' => 'huvudmeny',
                    'menu_class' => 'huvudmeny'
                )
        );
        ?>
    </div>
   
    
</header>