<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<div id="contentContainer">
<div id="leftCol">
<div class="blankH" style="width: 10px; height: 180px;"></div>
<div class="blankH" style="width: 180px; height: 14px;"></div>
<?php get_template_part('loop','index')?>
</div><!--end of left column-->
<div id="rightCol">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
