<?php
/**
 * Created by JetBrains PhpStorm.
 * User: solidstunna101
 * Date: 07/06/13
 * Time: 11:53
 * To change this template use File | Settings | File Templates.
 */

?>

<?php get_header(); ?>

<div id="main">
    <div id="primary">
        <div id="page_content">
        <h3>Search Results</h3>
        <ul>
            <?php if(have_posts()) : while(have_posts()) : the_post() ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            <?php else : ?>
                <p>Not sure what youre looking for</p>
             <?php endif; ?>
        </ul>
        </div><!--  End of .page_content  -->




        <a href="#" class="more">More ...</a>
    </div>
    <!--  End of primary  -->


    <?php get_sidebar(); ?>




</div> <!--  End of main  -->

<?php get_footer(); ?>
