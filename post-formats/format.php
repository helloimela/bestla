
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">

                  <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>

                  <p class="byline entry-meta vcard">
                  Posted by <?php the_author_posts_link(); ?> on <?php echo '<span class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</span>'; ?>

                  </p>

                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                    if(get_post_meta( get_the_ID(), 'author_name')){
                      $author_name = get_post_meta( get_the_ID(), 'author_name', true);
                      $author_kota = get_post_meta( get_the_ID(), 'author_kota', true);
                      $author_major = get_post_meta( get_the_ID(), 'author_major', true);

                      ?>
                      <div class="custom-author">
                        <p>Penulis: <?php echo $author_name; ?> - <?php echo $author_kota; ?>
                        <br><?php echo $author_major; ?></p>
                      </div>
                      <?php
                    }

                    /*
                     * Link Pages is used in case you have posts that are set to break into
                     * multiple pages. You can remove this if you don't plan on doing that.
                     *
                     * Also, breaking content up into multiple pages is a horrible experience,
                     * so don't do it. While there are SOME edge cases where this is useful, it's
                     * mostly used for people to get more ad views. It's up to you but if you want
                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                     *
                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                     *
                    */
                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                  ?>
                </section> <?php // end article section ?>

                <footer class="article-footer">
                  <div>
                    <?php printf( __( 'Category', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
                  </div>

                  
                  <div class="d-1of2 t-1of2 prevnextpost">
                    <p>Previous Post</p>
                    <p><?php previous_post_link(); ?></p>
                  </div>
                  <div class="d-1of2 t-1of2 prevnextpost next">
                    <p>Next Post</p>
                    <p><?php next_post_link(); ?></p>
                  </div>

                </footer> <?php // end article footer ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>
