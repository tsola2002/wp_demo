    <?php get_header(); ?>

    <div id="main">
        <div id="primary">

            <?php if(have_posts()) : while(have_posts()) : the_post() ?>

                <div class="post-item">
                    <img src="<?php echo bloginfo('template_directory') . '../img/model1.jpg'; ?>" />
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>

                    <p class="meta">Posted By <?php the_author(); ?> on <?php the_date(); ?></p>

                    <?php the_content(); ?>

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

        <div id="secondary">
            <div class="secondary-box" id="photos">
                <h3>Flickr</h3>
                <img class="fetured-image" src="<?php echo bloginfo('template_directory') . '../img/grass.jpg'; ?>"/>
                <p>featured image</p>
                <div class="prevnext">
                    <a href="#"><img src="<?php echo bloginfo('template_directory') . '../img/arrow-left.png'; ?>"/></a>
                    <a href="#"><img src="<?php echo bloginfo('template_directory') . '../img/arrow-right.png'; ?>" /></a>
                </div> <!--  End of prevnext  -->
            </div>  <!--  End of secondary-box  -->

            <div class="secondary-box" id="recent-entries">
                <h3> Recent Entries</h3>
                <ul>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                </ul>
            </div>  <!--  End of secondary-box  -->

            <div class="secondary-box" id="recent-entries">
                <h3> Recent Entries</h3>
                <ul>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                    <li><a href="#">some entry will go in here</a> </li>
                </ul>
            </div>  <!--  End of secondary-box  -->

        </div> <!--  End of secondary  -->



    </div> <!--  End of main  -->

    <?php get_footer(); ?>