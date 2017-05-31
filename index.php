<?php get_header(); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-9">
        
<?php

    if(have_posts()) {
        while(have_posts()) {
            the_post();
?>
            <div class="post">
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-content"><?php the_content(); ?></div>
            </div>
    

<?php

        }
    }

 ?>
        </div>
        <div class="col-sm-3" id="sidebar">
            <aside>
                <ul id="icons">
                    <li><a target="_blank" href="https://www.facebook.com/efortneydev/"><img class="social" src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png"></a></li>
                    <li><a target="_blank" href="https://twitter.com/eFortneyDev"><img class="social" src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png"></a></li>
                    <li><a target="_blank" href="https://www.flickr.com/photos/efortney28/"><img class="social" src="<?php echo get_stylesheet_directory_uri(); ?>/images/flickr.png"></a></li>
                    <li><a target="_blank" href="https://efortney28.github.io/"><img class="social" src="<?php echo get_stylesheet_directory_uri(); ?>/images/website.png"></a></li>
                </ul>
                <p id="description">The adventures of a newbie coder! I'm trying to learn as much as possible about all things web development in order to become a full-stack web developer someday soon. Please check out my social media links and website link if you are interested in following me along the way!</p>
            </aside>
        </div>
    </div>
</div>
<?php            
            


    get_footer();
?>