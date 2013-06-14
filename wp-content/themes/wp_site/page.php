<?php
/**
 * Created by JetBrains PhpStorm.
 * User: solidstunna101
 * Date: 14/06/13
 * Time: 17:58
 * To change this template use File | Settings | File Templates.
 */

?>


<?php get_header(); ?>

    <div id="main">
        <div id="primary">

            <?php if(have_posts()) : while(have_posts()) : the_post() ?>

                <div id="page-content">




                    <?php the_content('Read More...'); ?>

                    <div class="num_comments">
                        <a href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?></a>
                    </div><!--  End of num_comments  -->

                    <div id="moreprev">
                        <?php next_posts_link('...More'); ?>
                        <?php previous_posts_link('...Previous'); ?>
                    </div><!--  End of moreprev  -->

                </div> <!--  End of page-content  -->

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