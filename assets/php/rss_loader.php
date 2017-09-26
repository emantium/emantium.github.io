<?php
/**
 * RSS Feed Loader
 *
 * Author: Vilmos Zoltan Kiss
 * Author URI: http://vzkiss.com
 *
 */


/* Accepts the URL of the feed as a string argument and returns a limited 
 * number of feed articles in an array.
 * @param    string     the feed URL
 * @param 	 int       	the limit, number of articles to show;
 * @return   array      the $feed array of articles;
 */
function getFeed($feed_url, $limit) {

	$rss = new DOMDocument();
	$rss->load($feed_url);

	$feed = array();

	/*try {
		@$rss->load($feed_url);
	} catch (Exception $e) {
		return null;
	}*/

	$count = 0; // count helper for the limit

	foreach($rss->getElementsByTagName('item') as $node){

		$count++;
		if( $count > $limit && $limit != -1 ) break;
		
		$item = array(
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => date('D, d M Y', strtotime($node->getElementsByTagName('pubDate')->item(0)->nodeValue))
			);

		array_push($feed, $item);
	}

	return $feed;
}

/* Checks if the array of the feed is empty
 * @param    array     	the feed array of articles
 * @param 	 boolean    true if the feed is empty
 */
function emptyFeed($feed) {
	if($feed == null) return true;
	return false;
}

/* Displays a subset of articles from the feed.
 * If limit is set to -1, there is no limit.
 * @param    array     the feed array of articles
 */
function displayFeed($feed) {

	foreach ( $feed as $article ) {

		//$title = str_replace('&', '&amp', $feed[$x]['title']);

		echo '<!-- POST -->';
		echo '<div class="col-sm-6 col-md-6 col-lg-6">';
			echo '<div class="post">';
				echo '<div class="post-title">';
				echo '<h3>' . $article['title'] .'</h3>';
				echo '</div>';
				echo '<div class="post-meta">';
					echo $article['date'];
				echo '</div>';
				echo '<div class="post-entry">';
					echo '<p>'. $article['desc'] .'</p>';
				echo '</div>';
				echo '<div class="post-more-link">';
					echo '<a href="'. $article['link'] . '" class="looper-btn">Read more</a>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '<!-- /POST -->';
	}
}
