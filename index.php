<?php get_header(); ?>
		
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

				
									<section>
										<header class="major">
											<h2>Galeria</h2>
										</header>
										<div class="row">
										<?php
                        query_posts(array(
                            "showposts" => 6,
                            "cat" => 3
                        ));
                        ?>

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="col-4 col-6-medium col-12-small">

                                  
                                    <section class="box">
                                

                                    <a href="#" class="image featured">

                                    <?php
                                  
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('category-thumb');
                                    }  ?> </a>


                                        <header>
                                            <h3><?php the_title(); ?></h3>
                                        </header>
                                        <p><?php the_excerpt(); ?></p>
                                        <footer>
                                            <a href="<?php the_permalink(); ?>" class="button alt">Leer Más</a>
                                        </footer>
                                    </section>
                                </div>
                            <?php endwhile; ?>
                           
                        <?php else: ?>
                         
                            <p> Aqui no hay nada </p>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

										</div>
									</section>

							</div>
							<div class="col-12">

							
									<section>
										<header class="major">
											<h2>The Blog</h2>
										</header>
										<div class="row">
										<?php
                        query_posts(array(
                            "showposts" => 4,
                            "cat" => 4
                        ));
                        ?>

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="col-6 col-12-small">
                                    <section class="box">
                                       
                                    <a href="#" class="image featured">

                                        <?php

                                            if ( has_post_thumbnail() ) 
                                            {the_post_thumbnail('category-thumb-blog');}
                                            ?>
                                                </a>



                                        <header>
                                            <h3><?php the_title(); ?></h3>

                                        </header>
                                        <?php the_excerpt(); ?>
                                        <footer>
                                            <ul class="actions">
                                                <li><a href="<?php the_permalink(); ?>" class="button icon fa-file-text">Leer Más</a></li>
                                                <li><a href="#" class="button alt icon fa-comment">33 Comentarios</a></li>
                                            </ul>
                                        </footer>
                                    </section>
                                </div>
                            <?php endwhile; ?>
                           
                        <?php else: ?>
                          
                            <p>Ups!! no existe nada para esta categoria</p>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

										</div>
									</section>

							</div>
						</div>
					</div>
				</section>

	<?php get_footer(); ?>	