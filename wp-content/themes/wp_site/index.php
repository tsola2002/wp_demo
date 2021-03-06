    <?php get_header(); ?>

    <div id="main">
        <div id="primary">

            <?php if(have_posts()) : while(have_posts()) : the_post() ?>

              <div class="post-item">
            <img src="<?php $thumb = get_post_custom_values('post-image'); echo $thumb[0]; ?>" alt="<?php the_title(); ?>"/>
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>

            <p class="meta">Posted By <?php the_author(); ?> on <?php the_date(); ?></p>

            <?php the_content('Read More...'); ?>

            <div class="num_comments">
                <a href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?></a>
            </div><!--  End of num_comments  -->

            <div id="moreprev">
                <?php next_posts_link('...More'); ?>
                <?php previous_posts_link('...Previous'); ?>
            </div><!--  End of moreprev  -->

        </div> <!--  End of post-item  -->

        <?php endwhile; ?>

        <?php else : ?>
            <p>Not sure what youre looking for</p>
        <?php endif; ?>



        <a href="#" class="more">More ...</a>
    </div>
        <!--  End of primary  -->


        <?php get_sidebar(); ?>




        </div> <!--  End of main  -->

    <?php get_footer(); ?>