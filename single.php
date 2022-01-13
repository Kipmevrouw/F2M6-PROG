<?php
get_header();
?>
<?php

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title() ?></h1>
		<!-- laat het catorgorie zien -->
		<!-- <p><?php the_category()?></p> -->
		<!-- Laat de datum zien -->
		<!-- <em><?php the_date()?></em> -->
		<!-- Laat de maker zien -->
		<!-- <h2><?php the_author()?></h2> -->
		<?php the_content() ?>

	<?php endwhile;

else :
	echo '<p>There are no posts!</p>';

endif;

?>
<?php
get_footer();
?>