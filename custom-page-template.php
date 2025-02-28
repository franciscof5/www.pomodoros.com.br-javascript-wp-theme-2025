<?php
/*
Template Name: Template Redirect
*/

get_header();

$custom_page = get_query_var('custom_page');

locate_template( "part-".$custom_page.".php", true );

get_footer();
?>
