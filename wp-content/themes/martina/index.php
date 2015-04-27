<?php get_header() ?>
<body>

    <nav class="navbar-static-top header">
        <div class="container">
            <div class="navbar-left">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Logo1.png" alt=""/>
            </div> 
            <div class="navbar-right" style="display:inline-block;margin-left:100px; float:none !important;">
                <h1>Martina H&uuml;bner-Zehnle</h1>
                <span class="green">Systemische Therapie</span>&nbsp;<span> und Beratung</span> 
            </div>

        </div>
    </nav>
    <div id="wrap">

        <?php wp_nav_menu(array('theme_location' => 'main', 'container' => 'div', 'container_class' => 'container', 'menu_class' => 'nav nav-pills navigation', 'walker'=> new nav_walker)); ?>



        <?php
        if (have_posts()) :
            // Start the Loop.
            while (have_posts()) : the_post();

                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
                get_template_part('content', get_post_format());

            endwhile;


        else :
            // If no content, include the "No posts found" template.
            get_template_part('content', 'none');

        endif;
        ?>

        <div class="ownfooter">
            <div class="container">
                <div class="col-md-12">
                    Dörnigstrasse 6 - 76571 Gaggenau - <a href="tel: +49072249942738">07224 9942738</a> - <a href="mailto:m.huebner-zehnle@t-online.de">m.huebner-zehnle@t-online.de</a>
                </div>

            </div>
        </div>

        <?php wp_footer() ?>
</body>
</html>