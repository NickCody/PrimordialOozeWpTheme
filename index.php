<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

    <div id="content" class="narrowcolumn" role="main">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <div class="postdate">Posted on <?php the_time('F jS, Y') ?></div>

                <div class="entry">
                    <?php the_content('Read the rest of this entry &raquo;'); ?>
                </div>

                <div class="postmetadata"><?php the_tags('This entry was tagged ', ',', '.'); ?> Categories: <?php the_category(','); ?>.</div>
            </div>

        <?php endwhile; ?>

    <div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?>   <?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

    <?php else : ?>

        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php get_search_form(); ?>

    <?php endif; ?>

    </div>

<?php get_footer(); ?>
