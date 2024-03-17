<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head();//from line 14 to line 58 ?>
</head>
<body <?php body_class();//class="home blog logged-in admin-bar no-customize-support" ?>>

<div class="container-fluid">

<div class="my-logo" >

<div class="row">

<div class="col-sm-12">

 <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/BANNER.jpg" alt="No image" style="width: 1330px; height: 1100px;background-size: cover;" >
</div>

<!-- <div class="col-sm-6" style="display:flex;justify-content: center;">
 <h1><a style="align-self:center;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>

</div> -->

<!-- <div class="col-sm-4"> Welcome  </div> -->

</div>
</div>



<nav class="navbar navbar-expand-lg navbar-light"
style="color:black;background-color: greenyellow;font-weight: bold;">

<div class="container-fluid">
  <a href="#" class="navbar-brand"> 🚓  Welcome To Car Section 🚗 </a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
aria-controls="navbar" aria-expanded="false"
aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>

</button>


 <input class="form-control me-2" type="search" placeholder="Search 🔎" aria-label="Search" style="font-weight: bold;width:250px;height:50px;">
 <button class="btn btn-outline-success" type="submit">Search</button>


<?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>

</div>
</nav>
