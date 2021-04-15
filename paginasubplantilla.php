<?php /* Template Name: Sub Plantilla */ ?>

<?php  get_header("page"); ?>

	
				<section id="main">
					<div class="container">

                    <?php
          
            if (have_posts()):
              
                while (have_posts()):
                   
                    the_post();
                    ?>
       <article class="box post">
        <a href="#" class="image featured"><img src="<?php echo get_template_directory_uri();?>/images/pic01.jpg" alt="" /></a>
        <header>
         <h2 style="color:darkblue;"><?php the_title(); ?></h2>
        </header>
         <?php the_content(); ?>
                    <?php
              
                endwhile;
           
            endif;
            ?>

					</div>
				</section>

		
            <?php  get_footer(); ?>