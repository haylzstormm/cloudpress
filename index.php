<?php get_header(); ?>

<div id="wrap">
	<header> <!-- HTML5 header tag -->    
    		<h1><a class="introlink anchorLink" href="#intro"><?php bloginfo('name'); ?> <?php wp_title(); ?></a></h1>  		
    		<nav> <!-- HTML5 navigation tag --> 
    			<ul> 
    				<li><a class="portfoliolink anchorLink" href="#portfolio">Portfolio</a></li> 
    				<li><a class="aboutlink anchorLink" href="#about">About</a></li> 
    				<li><a class="contactlink anchorLink" href="#contact">Contact</a></li> 
    				<li><a class="bloglink anchorLink" href="#content">Blog</a></li> 
    			</ul>				
    		</nav>   	
    </header> 
    <section id="contentcontainer"> <!-- HTML5 section tag for the content 'section' -->    
    	<section id="intro">    	
		<?php 
			$page_id = 57; 
			$page_data = get_page( $page_id );  
			$content = apply_filters('the_content', $page_data->post_content); 
			echo $content;
		?>
    	</section> 
    	<section id="portfolio"> <!-- HTML5 section tag for the portfolio 'section' --> 
    	<?php 
			$page_id = 11; 
			$page_data = get_page( $page_id );  
			$content = apply_filters('the_content', $page_data->post_content); 
			echo $content;
		?>    				
    	</section>   			
    	<section id="about"> <!-- HTML5 section tag for the about 'section' -->   	    		
    	<?php 
			$page_id = 2; 
			$page_data = get_page( $page_id );  
			$content = apply_filters('the_content', $page_data->post_content); 
			echo $content;
		?>				
    	</section>   			
    	<section id="contact"> <!-- HTML5 section tag for the contact 'section' -->    		    		
    	<?php 
			$page_id = 71; 
			$page_data = get_page( $page_id );  
			$content = apply_filters('the_content', $page_data->post_content); 
			echo $content;
		?>
    	</section>
	<section id="content"> 
  <div id="post">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  

    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>  
  
    <?php the_content(); ?>  
  
    <p><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(', '); ?> | <?php comments_number('No comment', '1 comment', '% comments'); ?></p>  

    <?php endwhile; else: ?>  
  
    <h2>Woops...</h2>  
  
    <p>Sorry, no posts we're found.</p>  
  
    <?php endif; ?>  
  </div>  
    <div class="navigation"><?php posts_nav_link(); ?></div>    		    		
    	</section>    
	</section>
</div>
	
<?php get_footer(); ?>