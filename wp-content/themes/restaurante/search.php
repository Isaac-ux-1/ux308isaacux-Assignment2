<?php
get_header(); ?>

    <header id="kt-page-header-simple" class="text-center">

        <h1 class="kt-post-entry-title kt-search-title">
            <?php echo esc_html( wp_sprintf( __( 'Search results for the term: %s', 'restaurante' ), get_search_query( false ) ) ); ?>
            <span
                class="screen-reader-text"><?php echo esc_html( wp_sprintf( __( 'Search results for the term: %s', 'restaurante' ), get_search_query( false ) ) ); ?></span>
            <?php if ($paged > 1):
                echo
                    '<small>' . __('   Page:
','restaurante') . $paged
                    . '</small>'; endif; ?>
        </h1><!-- .entry-title -->
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <section id="kt-primary">

                    <div id="kt-content" class="clearfix">

                        <?php get_template_part('framework/templates/content-search'); ?>

                    </div>

                </section>
            </div>

            <div class="col-md-3 col-md-offset-1">
                <?php get_sidebar(); ?>
            </div>

        </div>
        <!-- primary-page content ends here -->
    </div>
<?php
get_footer();