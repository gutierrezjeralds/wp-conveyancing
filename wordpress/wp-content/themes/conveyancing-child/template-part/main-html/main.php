<?php
/**
 * Created by PhpStorm.
 * User: Jerald S. Gutierrez
 * Date: 4/10/2019
 * Time: 9:42 AM
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo( "charset" ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php bloginfo("title"); ?></title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >
