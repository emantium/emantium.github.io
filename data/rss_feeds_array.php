<?php
    
    /*  You can add, remove, edit the feeds you'd like to retreive and display on the website here.
     *  Always set all 3 values for a new feed
     *
     *  'title' - This will be shown between <h3> tags in the display code
     *  'url'   - Valid url to the RSS Feed, XML source of the feed 
     *  'limit' - Set a positive limit as you wish, or -1 for unlimited articles to show for a feed
     */

    $feedsArray = array(
        array(
            'title' => 'Epi.org Feed',
            'url' => 'http://epi.org/blog/feed/',
            'limit' => 6
        ),
        array(
            'title' => 'Federal Reserve ALL PRESS Feed',
            'url' => 'https://www.federalreserve.gov/feeds/press_all.xml',
            'limit' => 9
        )
    );