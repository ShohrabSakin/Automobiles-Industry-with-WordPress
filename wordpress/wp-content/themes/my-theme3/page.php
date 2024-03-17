<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
  <div class="col-sm-2">
  <?php   include("left.php");?>
</div>
    <div class="col-sm-7">
    <section class="content-area content-thin">
<?php 
include("body.php");
 ?>
  </section>
</div>
<div class="col-sm-3" style="margin:0px;padding:0px">
  <?php get_sidebar(); ?>
</div>
</div>
</div>
<?php get_footer(); ?>
