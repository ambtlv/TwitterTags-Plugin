<?php
/*!
 * Plugin Name: AmbertreeCreative Twitter Tags
 * Plugin URI: http://www.ambertreecreative.com
 * Description: This cool plugin adds Twiiter Open Graph tags to all your single posts.
 * Version: 0.0.1
 * Author: Daniel Sydney (@ambtlv)
 * Author URI: http://www.ambertreecreative.com
 * License: GPL2
*/

/*
Copyright 2016 Daniel Sydney - Ambertree Creative Agency

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This programe is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with thie program.
*/


// twitter tags called here into the head of the theme.
add_action( 'wp_head', 'aca_twitter_tags' );
function aca_twitter_tags() {
  if( is_single() ) {
?>
<!-- ACA Twitter Open Graph Tags Starts -->
<meta property="twitter:title" content="<?php the_title() ?>" />
<meta property="twitter:site_name" content="<?php bloginfo( 'name' ) ?>" />
<meta property="twitter:domain" content="<?php the_permalink() ?>" />
<meta property="twitter:description" content="<?php the_excerpt() ?>" />
<meta property="twitter:card" content="photo" />
<?php
  if ( has_post_thumbnail() ) :
    $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
?>
  <meta property="twitter:image:src" content="<?php echo $image[0]; ?>"/>
<?php endif; ?>
<!-- ACA Twitter Open Graph Tags Ends -->
<?php
}
}