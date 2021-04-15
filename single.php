<?php  get_header("page"); ?>

	
				<section id="main">
					<div class="container">

                    <?php
          
            if (have_posts()):
              
                while (have_posts()):
                   
                    the_post();
                    ?>
       <article class="box post">
      
       <a href="#" class="image featured">
                            <?php                       
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('category-full');
                                }
                            ?>
                            </a>

        <header>
         <h2><?php the_title(); ?></h2>
        </header>
         <?php the_content(); ?>

         <footer class="comentarios">
                                <?php comments_template(); ?>
                            </footer>

                    <?php
              
                endwhile;
           
            endif;
            ?>

					</div>
				</section>

		
            <?php  get_footer(); ?>