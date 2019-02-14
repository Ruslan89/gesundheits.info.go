<?php 
get_header();
pageBanner(array(
	'title'		=> 'Heilmittel',
	'subtitle'	=> 'Ohne Nebenwirkungen',
));
?>

<div class="container container--narrow page-section"> 	
<?php
	while(have_posts()){
		the_post();		

	get_template_part('template-parts/content-heilmittel', 'excerpt');
	}

	echo paginate_links();
?>

	</div>
</div>


<?php
get_footer();
?>