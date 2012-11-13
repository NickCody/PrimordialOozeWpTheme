<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">

<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form class="form-horizontal well" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<fieldset>
    <div class="control-group">
        <label class="control-label" for="author">Name</label>
        <div class="controls">
            <input type="text" name="author" id="author" class="span4" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
            <?php if ($req) echo "(Required)"; ?>
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="control-group">
        <label class="control-label" for="email">E-Mail</label>
        <div class="controls">
            <input type="text" name="email" id="email" class="span4" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
            (<?php if ($req) echo "Required, "; ?>will not be published)
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="control-group">
        <label class="control-label" for="url">Website</label>
        <div class="controls">
            <input type="text" name="url" id="url" class="span4" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
        </div>
    </div>
</fieldset>

<?php endif; ?>

<fieldset>
    <div class="control-group">
        <label class="control-label" for="comment">Comment</label>
        <div class="controls">
            <textarea name="comment" id="comment" class="span7" tabindex="4"></textarea>
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="control-group">
        <label class="control-label" for="submit"></label>
        <div class="controls">
            <input class="btn" name="submit" type="submit" id="submit" tabindex="5" value="Submit" />
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="control-group">
        <div class="controls">
            <?php comment_id_fields(); ?>
            <?php do_action('comment_form', $post->ID); ?>
        </div>
    </div>
</fieldset>



</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
