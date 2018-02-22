<?php get_header(); ?>


     <main
        role="main"
        class="container"
    >
        <div class="row">
            <div class="col-sm-8 blog_main">

                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('content', get_post_format()); ?>
                
                <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Posts Found'); ?></p>
                <?php endif; ?>
    

    
                
            </div>
            <?php get_sidebar(); ?>

            

    <a
        id="back-to-top"
        href="#"
        class="back-to-top"
        role="button"
    >
        <span class="fa fa-chevron-up"></span>
    </a>

    <a
        id="email-box"
        href="https://thehindquartervt.com/contact.html"
        class="email-box"
        role="button"
    >
        <span class="fa fa-envelope"></span>
    </a>

    <?php get_footer(); ?>