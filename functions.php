<?php

$args = array(
‘post_type’ => ‘product’
);

// Custom query.
$query = new WP_Query( $args );


 
// Check that we have query results.
if ( $query->have_posts() ) {

// Start looping over the query results.
while ( $query->have_posts() ) {

$query->the_post();


 
// Contents of the queried post results go here.
global $product;
$attachment_ids = $product->get_gallery_attachment_ids();
/*gallery Images code*/
foreach( $attachment_ids as $attachment_id )
{
$image_link = wp_get_attachment_url( $attachment_id );
}
/*gallery Images code*/

}

}

// Restore original post data.
wp_reset_postdata();

?>
