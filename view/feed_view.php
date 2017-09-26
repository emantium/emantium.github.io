<?php
/* 
 *  This file contains the view code to display the feeds stored in the $feedsArray 
 *  Only show the feeds section if the $feedsArray is not empty.
 *
 */
 ?>
    <?php if( !empty($feedsArray) ) : ?>

        <!-- FEED SECTION -->
        <section id="rss-feed" class="brick bg-light">
            <div class="container">
                <div class="row">
                    <!-- POSTS COLUMN -->
                    <div class="col-sm-12">

                     <?php foreach( $feedsArray as $feed ) : ?>

                      <?php
                        // Request the feeds we want to display
                        $feedData = getFeed($feed['url'], $feed['limit']);

                        // If the retreived feed is not empty display it
                        if ( !emptyFeed($feedData) ) : ?>

                        <!-- FEED TITLE -->
                        <div class="row text-center">
                            <div class="col-md-12 col-xs-12">
                                <h2 class="brick-title"><?php echo $feed['title']; ?></h2>
                                <div class="divider title-divider"></div>
                            </div>
                        </div>
                        <!-- END OF FEED TITLE -->

                        <!-- FEED ARTICLES -->
                        <div class="row multi-columns-row">

                            <?php displayFeed($feedData); ?>

                        </div><!-- /.row multi-columns-row -->
                        <!-- END OF FEED ARTICLES -->

                      <?php endif; ?>
                    <?php endforeach; ?>
                    
                    </div> <!-- /.col-sm-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.brick -->
        <!-- END OF FEED SECTION -->

    <?php endif; ?>