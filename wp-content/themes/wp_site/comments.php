<?php
/**
 * Created by JetBrains PhpStorm.
 * User: solidstunna101
 * Date: 11/06/13
 * Time: 11:55
 * To change this template use File | Settings | File Templates.
 */
?>


<?php
    //The PHP backend code that Prevents direct access to comments.php
    if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die('You can not access this page directly!');
        //end of if(!empty)
    //Is a password required?
    if(post_password_required()) { ?>
        <p class="nocomments">This post is password protected. Enter your password to view comments.</p>

    <?php
        return;
        } //end of if(post_password_required)
    ?>

    <?php
    //Display the comments
    if($comments) : ?>
        <h3 id="comments"><?php comments_number('No Responses', '1 Response', '% Responses'); ?> to &#8220; <?php the_title(); ?>&#8221;</h3>
            <ol class="comments">
            <?php foreach($comments as $comment) : ?>
                <li>
                    <?php get_avatar(get_comment_author_email(), 90); ?>
                    <div id="main_comment">
                        <h4><?php  comment_author_link(); ?> <span class="said">said...</span></h4>
                        <?php comment_text(); ?>
                        <span class="arrow"></span>
                    </div><!--  End of main comment  -->
                </li>
            <?php endforeach; ?><!--  end of foreach $comments as $comment  -->
            </ol>

            <div class="navigation">
                <div class="alignleft"><?php previous_comments_link(); ?></div>
                <div class="alignright"><?php next_comments_link(); ?></div>
            </div>

        <?php else : //this is displayed if there are no comments displayed yet ?>

            <?php if('open' == $post->comment_status) : ?>
                <!--  if comments are open but there are no comments yets  -->

                <?php else ://comments are closed  ?>
                    <p class="nocomments">No comments yet</p>
            <?php endif; ?><!--  end of open == post-> comment status  -->
    <?php endif; ?><!--  end of if($comments)  -->

    <?php if('open' == $post->comment_status) : ?>
    <div id="respond">
        <h3><?php comment_form_title('Leave a Reply', 'Leave a Reply to %s'); ?></h3>

        <div class="cancel-comment-reply">
            <small><?php cancel_comment_reply_link(); ?></small>
        </div><!--  end of cancel comment reply  -->

        <?php if( get_option('comment_registration') && !$user_id) : ?>
            <p>you must be <a href="<?php get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
            <?php else : ?>
                <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
                <?php if ($user_id) : ?>
                <p>Logged in as <a href="<?php echo get_option('siteurl') ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>
                    <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="log out of this account">Log out &raquo;</a></p>
                    <?php else : ?>

                    <p><input type="text" name="author" id="author" value="<?php echo comment_author(); ?>" size="22" tabindex="1"
                            <?php if($req) echo "aria-required='true'" //end of req ?> />
                        <label for="author"><small>
                                Name <?php if(req) echo '(required)'; //end of reg ?>
                        </small></label></p>

                    <p><input type="text" name="email" id="email" value="<?php echo comment_author_email(); ?>" size="22" tabindex="2"
                            <?php if($req) echo "aria-required='true'" //end of req ?> />
                        <label for="email"><small>
                                Email (will not be published) <?php if(req) echo '(required)'; //end of req ?>
                            </small></label></p>

                    <p><input type="text" name="url" id="url" value="<?php comment_author_url(); ?>" size="22" tabindex="3"
                            <?php if($req) echo "aria-required='true'" //end of req(url) ?> />
                        <label for="url"><small>
                                Website <?php if($req) echo '(required)'; //end of req(url2) ?>
                            </small></label></p>
                <?php endif; //end of if ($user_id) ?>

                    <p><textarea name="comment" id="comment" cols="50" rows="10" tabindex="4"></textarea></p>

                    <p><input type="submit" name="submit" id="submit" tabindex="5" value="Submit Comment"/>
                    <?php comment_id_fields(); ?>
                    </p>
                    <?php do_action('comment form', $post->ID); ?>
                </form>
        <?php endif; //end of if( __get_option('comment_registration') && !$user_id) ?>
    </div><!--  end of respond  -->
    <?php endif; //end of if('open' == $post->comment_status) ?>







