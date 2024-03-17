<?php
/*
* Plugin Name: Carausel R55 WDPF DiTC
* Description: Create your WordPress Carausel.
* Version: 1.0
* Author: IDB Round55
* Author URI: https://www.idb-bisew.com
*/

function caraousel(){
$url="wp-content/plugins/sakin/img";
?>

<div class="container-fluid">

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

<ol class="carousel-indicators">

<!-- // <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
// <li data-bs-target="#myCarousel" data-bs-slide-to="1" ></li>
// <li data-bs-target="#myCarousel" data-bs-slide-to="2" ></li>
// <li data-bs-target="#myCarousel" data-bs-slide-to="3" ></li> -->
<?php
if ($handle = opendir($url)) {
$sl=0;
while (false !== ($entry = readdir($handle))) {

if ($entry != "." && $entry != "..") {
if($sl!=0)
echo "<li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"$sl\"></li>";
else
echo "<li data-bs-target=\"#myCarousel\" data-bs-slide-to=\"$sl\" class=\"active\"></li>";
$sl++;
}
}

closedir($handle);
}
?>
</ol>

<div class="carousel-inner" role="listbox">

<!-- <div class="carousel-item active"><img class="first-slide img-fluid" src="img/colorful_powder_fight-wallpaper-1366x768.jpg" alt="first slide"/></div>

<div class="carousel-item">

<img class="second-slide img-fluid" src="img/concert_crowd-wallpaper-1366x768.jpg" "First slide">

</div>

<div class="carousel-item">

<img class="third-slide img-fluid" src="img/cool_rest-wallpaper-1366x768.jpg" "First slide">

</div>

<div class="carousel-item" >

<img class="fourth-slide img-fluid"  src="img/guitar-wallpaper-1366x768.jpg" "First slide">

</div> -->

<?php
if ($handle = opendir($url)) {
$sl=0;
while (false !== ($entry = readdir($handle))) {

if ($entry != "." && $entry != "..") {
if($sl==0)
echo "<div class=\"carousel-item active\"><img class=\"first-slide img-fluid\" src=\"".esc_url( home_url( '/' ) )."{$url}/$entry\" alt=\"first slide\"/></div>";
else
echo "<div class=\"carousel-item\"><img class=\"first-slide img-fluid\" src=\"".esc_url( home_url( '/' ) )."{$url}/$entry\" alt=\"first slide\"/></div>";
$sl++;
}
}

closedir($handle);
}
?>

</div>

</div>
</div>
<?php
}
add_shortcode('caraousel', 'caraousel');
?>
