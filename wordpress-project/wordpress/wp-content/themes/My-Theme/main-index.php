
<section class="container-fluid sections-padding features">
    <h1 class="text-center">Welcome To Games Nation</h1>
    <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/wordpress-project/wordpress/">
        <div class="text-center">
            <input type="text" name="s" id="s" class="search-label" placeholder="Search Games"><br>
            <input type="submit" id="searchsubmit" value="Search" class="search-button">
        </div>
    </form>
    <div class="row">
    
<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'paged'          => $paged,
    'tag' => 'Sequels',
);
$the_query = new WP_Query( $args );

global $wp_query;
// Put default query object in a temp variable
$tmp_query = $wp_query;
// Now wipe it out completely
$wp_query = null;
// Re-populate the global with our custom query
$wp_query = $the_query;
if($the_query->have_posts()){
while($the_query->have_posts()){
    $the_query->the_post(  );
    ?>                
        <div class="col-xl-4 col-lg-6 col-md-12 features-content ">
            <div class="main-features-content margins">
                <h3 class="text-center"><a href="<?php the_permalink( );?>"><?php the_title( );?><hr></a></h3>
                <?php the_post_thumbnail('',['class'=>'main-images'])?>
                <p class="post-paragraph"><?php the_excerpt(  )?></p>
                <hr class="hr2">
                <p class="categories"><i class="fa fa-tags"></i><span><?php the_category(' , ')?></span></p>
                <p class="tags"><?php the_tags('<i class="fa fa-gamepad" aria-hidden="true"></i>', ',')?></p>
            </div>
        </div>
    <?php
    } 
}
wp_reset_postdata(  );

?>
    </div>
    <div class="pagination">
        <?php the_posts_pagination( array(
            'total'     => $the_query->max_num_pages,
            'current' => max( 1, get_query_var('paged') ),
            'prev_next' => false
        ) )?>
    </div>
</section>
<?php $wp_query = null;
$wp_query = $tmp_query;?>
