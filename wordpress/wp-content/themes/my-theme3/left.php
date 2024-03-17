<nav class="d-lg-block sidebar" style="left:-10px;width:100%;margin:0px;padding:0px">
<div> 

    <h3 style="text-align:center;color:blue;font-weight:bold;border:5px solid green;padding:5px;"> Car Brands </h3> <br/>

<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/toyota.png" alt="No image" style="width: 200px; height: 200px;" >

 <hr/>

 <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/bmwlogo.png" alt="No image" style="width: 200px; height: 200px;" >

 <hr/>

 <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/nissan.jpg" alt="No image" style="width: 200px; height: 200px;" >

 <hr/>

 <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/porsche.jpg" alt="No image" style="width: 200px; height: 200px;" >

 <hr/>

 <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/renault.png" alt="No image" style="width: 200px; height: 200px;" >

 <hr/>

 <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/peugot.jpg" alt="No image" style="width: 200px; height: 200px;" >

 <hr/>

 <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/rols royce.png" alt="No image" style="width: 200px; height: 200px;" >

 <hr/>

 <img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/audileft.jpg" alt="No image" style="width: 200px; height: 200px;" >

<hr/>

<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/hyundai.png" alt="No image" style="width: 200px; height: 200px;" >

<hr/>

<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/volkswagon.jpg" alt="No image" style="width: 200px; height: 200px;" >

<hr/>

<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/mercedez side.png" alt="No image" style="width: 200px; height: 200px;" >

<hr/>

<img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/my-theme3/lambo side.jpg" alt="No image" style="width: 200px; height: 200px;" >

<hr/>




<!-- <div class="list-group" style="border: 5px solid blue;">




                     
<?php
$arr=array();
include("library.php");
$a=new library();
$m=$a->db;
$q="select name,slug from wp_terms where term_id in (select term_id from wp_term_taxonomy where parent=8) order by name";
$r=$m->query($q);
if(!$r)
{
echo "{success:".mysqli_errno($m).", Query: $q}";
return;
}
while($c=$r->fetch_array(MYSQLI_NUM))
{
//the bellow link is a problem for permalink change. It is valid only for: post name
echo "<a href='". esc_url(home_url('/')) . "/category/{$c[1]}' class='list-group-item list-group-item-action py-2 ripple'
><i class='fas fa-lock fa-fw me-3'></i><span>{$c[0]}</span></a
>";
//echo get_category_link( 8 );
//echo esc_url(home_url('/'));
}

?>

</div>
</div>
<hr/>
<?php

foreach(get_categories() as $a){
//the bellow link is valid for all permalinks
echo "<a href='". get_category_link($a->cat_ID) . "' class='list-group-item list-group-item-action py-2 ripple'
><i class='fas fa-lock fa-fw me-3'></i><span>{$a->name}</span></a
>";
}
?> -->

</nav>






