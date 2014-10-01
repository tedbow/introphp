<?php
/**
 * Author: Ted Bowman
 * Date: 9/26/14
 * Time: 12:30 PM
 */
/**
 * Function from here http://bavotasan.com/2010/display-rss-feed-with-php/
 * Don't worry now how it works
 *
 * @param $feed_url
 *   RSS Feed url
 *
 * @return string
 *  HTML output of feed items.
 */
function feeder_get_feed_output($feed_url) {
  $rss = new DOMDocument();
  $output = '';
  $rss->load($feed_url);
  $feed = array();
  foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array (
      'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
      'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
      'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
      'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($feed, $item);
  }
  $limit = 5;
  for($x=0;$x<$limit;$x++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
    $output .= '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
    $output .= '<small><em>Posted on '.$date.'</em></small></p>';
    $output .= '<p>'.$description.'</p>';
  }
  return $output;
}
function feeder_validate_url($url) {
  $pos = strpos($url, 'http');
  echo "<br>pos=$pos<br>";
  if ($pos === 0) {
    return TRUE;
  }
  return FALSE;
}