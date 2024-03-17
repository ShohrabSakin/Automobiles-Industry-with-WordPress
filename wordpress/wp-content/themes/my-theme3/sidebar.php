<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
<aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
<?php dynamic_sidebar( 'sidebar' );//combination of many widgets in sidebar,no code is needed for them ?>
<hr/>
<hr/>
<hr/>
<section>
<h2 style="text-align:center;border:5px solid blue">Latest News</h2>
<?php query_posts( 'posts_per_page=5' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
<?php endwhile; endif; ?>
<hr/>
<hr/>
<?php
if( is_home() && !is_paged() ):
wp_list_bookmarks( 'title_li=&categorize=0' );
endif;
?>
</section>
<section>
<h2 style="text-align:center;border:5px solid blue">All Comments</h2>

<?php
$paged             = get_query_var( 'page' ) ? get_query_var( 'page' ) : 1;
$args              = array(
'number'    => get_option( 'comments_per_page' ),
'post_type' => array( 'post', 'page' ),
'paged'     => $paged,
'parent'    => 0,
);

$comments_query = new WP_Comment_Query( $args );
$comments = $comments_query->comments;

if ( $comments ) {
echo "<ul>";
foreach ( $comments as $comment ) {
echo "<li>".$comment->comment_content."</li>";
}
echo "</ul>";
} else {
echo 'No comments found.';
}
?>
</section>
<section>
<h2 style="text-align:center;border:5px solid blue">All Categories</h2>
<ul>
<?php
//$cat_ids=array();
foreach (get_categories() as $cat)
{
//array_push($cat_ids, $cat->cat_ID);
echo "<li>".$cat->name."</li>";
}
echo "</ul>";
// $the_query = new WP_Query(array('post_type'=>'post', array('category__and' => $cat_ids) ) );
// if( $the_query->have_posts() ):
//     while ( $the_query->have_posts() ) : $the_query->the_post();
//         echo the_category();
//     endwhile;
// endif;

?>
</section>
<section>
<h2 style="text-align:center;border:5px solid blue">Archives Per Date</h2>
<?php wp_get_archives( array( 'type' => 'daily',
'limit' => 14,
'show_post_count' => 'true' ) ); ?>

</section>
<section>
<h2 style="text-align:center;border:5px solid blue">All Tags</h2>
<?php

$posttags = get_tags();
//print_r($posttags);
if ($posttags) {
echo "<ul>";
foreach($posttags as $tag) {
echo "<li>Got <a href='".get_tag_link($tag->term_id)."'>".$tag->name . '</a></li>';
}
echo "</ul>";


}
//wp_reset_query();
?>
</section>

<hr/>
<hr/>
<hr/>

<!-- <section>
<?php wp_list_pages() ?>
</section> -->

<section>
<h2 style="text-align:center;border:5px solid blue">Categories</h2>
<?php wp_list_categories('title_li=&depth=4&orderby=name&exclude=1') ?>
</section>

<section>
<h2 style="text-align:center;border:5px solid blue">Menus</h2>
<?php wp_page_menu( 'show_home=1&menu_class=my-menu&sort_column=menu_order'
); ?>
</section>





</aside>
<?php endif; ?>
