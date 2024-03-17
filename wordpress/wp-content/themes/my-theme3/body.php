<?php
//Method1
if ( have_posts() ) {
while ( have_posts() ) {
the_post();

//Method2: using WP_Query-a class used for custom loop
//the bellow line is query condition
//wp_query does not work for catgory ot tag permalink.
//Hence, we had to comment them
//   $args = array(
//     'post_status' => 'publish',
//     'posts_per_page'=>10,
//     'orderby'=>'title'
//   );
// $b2 = new WP_Query($args);
// if ( $b2->have_posts() ) {
//   while ( $b2->have_posts() ) {
//     //Method3: using pre_get_posts()-It is an acrion hookL add_action( 'pre_get_posts', 'prowp_search_filter' );
//     //Method4: query_posts($args);
//     $b2->the_post();
?>
<?php if( is_home()  )
echo '<article class="article-loop col-sm-6">Home';
else
echo '<article class="article col-sm-12">Page';
?>

<header>
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
By: <?php the_author(); ?>
</header>
<div><b>Date:</b> <?php echo get_the_date();?></div>
<div><b>Time:</b> <?php the_time();?></div>
<div><b>Categories:</b> <?php  the_category();?></div>
<div><b>Tags:</b>
<?php
if( has_tag() )
echo get_the_tag_list(); // Display tags as links
else
echo "No tag found";

?>
</div>
<?php the_content( 'Read more', false ); ?>
</article>
<?php }
wp_reset_query();
$b2=null;
} else { ?>
<article>
<p>Sorry, no posts were found!</p>
</article>
<?php } ?>
<div class="navigation">
<div class="alignleft">Next<?php previous_posts_link( '&laquo; Previous' );
?></div>
<div class="alignright">More<?php next_posts_link( 'More &raquo;' ); ?></div>
</div>

</section>

<section>
<hr/>
<?php
//Method5
$randompost = get_posts( 'numberposts=4&orderby=rand' );
foreach( $randompost as $post ) :
setup_postdata( $post );
?>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php the_content();?>
<?php endforeach; ?>
</section>

<hr/>
<section>

<?php query_posts( 'posts_per_page=5' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
<?php endwhile;
rewind_posts();
endif; ?>
<?php
if( is_home() && !is_paged() ):
wp_list_bookmarks( 'title_li=&categorize=0' );
endif;
?>
