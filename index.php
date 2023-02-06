<?php
	get_header();
?>

    
    
<article class="content px-3 py-5 p-md-5">
	    
<?php
	// If statement to check if there are any posts
	if( have_posts() ){
		// While loop to run WordPress post function show posts
		while( have_posts() ){
			// WordPress function to querie database and get a single post 
			the_post();

            get_template_part('template-parts/content', 'archive');

        }
	}
?>

<?php
the_posts_pagination();
?>

</article>
	    
    
<?php
    get_footer();
?>
	 