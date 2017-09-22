<?php

function getFeed($feed_url) {

	$rss = new DOMDocument();
	$rss->load($feed_url);

	$feed = array();


	foreach($rss->getElementsByTagName('item') as $node){
		
		$item = array(
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
			);

		// Check if Author, <creathor> is part of the XMLL. If it is add it to the array
		if( $node->getElementsByTagName('creator')->length  != 0 ) {
			$item = array(
				'author' => $node->getElementsByTagName('creator')->item(0)->nodeValue
				);
		}

		
		// Check if the post content, <content:encoded> is part of the XML. If it is add it to the array
		if( $node->getElementsByTagName('encoded')->length  != 0 ) {
			$item = array(
				'content' => $node->getElementsByTagName('encoded')->item(0)->nodeValue
				);
		}

		array_push($feed, $item);
	}

	return $feed;
}

function displayFeed($feed, $limit) {

	if ($feed == 'null') {
		echo 'empty feed';
	} else {

		for ( $x=0; $x<$limit; $x++ ) {
			
			$title = str_replace('&', '&amp', $feed[$x]['title']);
			$link = $feed[$x]['link'];
			$description = $feed[$x]['description'];
			$date = $feed[$x]['date'];
			$content = $feed[$x]['content'];

			echo '<!-- POST -->';
			
			echo '<div class="col-sm-6 col-md-6 col-lg-6">';
				echo '<div class="post">';
					echo '<div class="post-meta">';
						echo 'By <a href="#">Oana Calota </a> / 3 January  2017 / 30 comm.';
					echo '</div>';
					echo '<div class="post-entry">';
						echo '<p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>';
					echo '</div>';
					echo '<div class="post-more-link">';
						echo '<a href="blog-single.html" class="looper-btn">Read more</a>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
			echo '<!-- /POST -->';
			
		}
	}
}

$federalReserve_feed = getFeed('https://www.federalreserve.gov/feeds/press_all.xml');
$epiOrg_feed = getFeed('http://epi.org/blog/feed/');

echo '<h1 style="text-align: center;">epi.org RSS feed</h1>';

echo '<pre>';
var_dump($epiOrg_feed);
echo '</pre>';

echo '<h1 style="text-align: center;">Federal Reserve Press_ALL</h1>';

echo '<pre>';
var_dump($federalReserve_feed);
echo '</pre>';