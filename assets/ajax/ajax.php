<?php

require( '../../../../../wp-load.php' );

if (isset($_POST['myAction']))
{    
    $action = $_POST['myAction'];
    switch($action) {
        case 'category' : showCategory($_POST['category']); break;
        case 'size' : showSizes($_POST['category']); break;
    }
}

function show($p){
    $args = array( 'post_type' => 'page', 'name' => $p);
    $query = new WP_Query($args);
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    <?php
    exit();
}

function showCategory($c){
    echo do_shortcode('[product_category per_page="500" orderby="price" order="asc" columns="3" category="'.$c.'"]');
    exit();
}

function showSizes($c){
    $sizeArray = array();
    $args = array(
        'posts_per_page'   => -1,
        'offset'           => 0,
        'orderby'          => 'date',
        'order'            => 'ASC',
        'post_type'        => 'product',
        'product_cat'      => $c,
        'post_status'      => 'publish',
        'suppress_filters' => true 
    );
    $posts_array = get_posts( $args );    
    foreach ($posts_array as $i){
        $terms = wp_get_post_terms( $i->ID, 'product_cat', $args );
        foreach($terms as $t){
            //test site
            if ($t->parent == 1285){
            //production size category cat 586
            //if ($t->parent == 586){
                //echo $t->slug."<br>";
                $found = 0;
                foreach ($sizeArray as $r){
                    if ($t->slug === $r->slug)
                        $found = 1;
                }
                if ($found == 0)
                    $sizeArray[] = $t; 
            }
        }
    }
    usort($sizeArray, "cmp");
    $select = "<select class='sizes'><option value='please-select'>Select Size</option>";
    foreach ($sizeArray as $z){
        //echo $z->slug."<br>";
        $select.="<option value='".$z->slug."'>".$z->name."</option>";
    }
    $select.="</select>";
    echo $select;

    exit();
}

function cmp($a, $b){
    return strcmp($a->name, $b->name);
}