<?php
/**
 * Author: Ted Bowman
 * Date: 9/19/14
 * Time: 11:41 AM
 */
/**
 * **** Simplified function from Drupal core.
 * Identifies the children of an element array;
 *
 * The children of a element array are those key/value pairs whose key does
 * not start with a '#'. See drupal_render() for details.
 *
 * @param $elements
 *   The element array whose children are to be identified.
 * @return
 *   The array keys of the element's children.
 */
function element_children($elements) {
  $return_array = array();
  foreach ($elements as $key => $value)  {

    echo "key = $key<br>";
    $pos = strpos($key, '#');
    echo "pos = $pos<br>";
    echo gettype($pos) . '<br>';
    if ($pos !== 0) {
      $return_array[] = $key;
    }
  }
  return $return_array;
}
$a = array(
  // this is a child
  'no#de' => array('nid' => 234, 'uid' => 231, 'title' => 'My Blog post'),
  // this is a child
  'user' => array('uid' => 1, 'name' => 'Clark Kent', 'email' => 'me@me.com'),
  // this IS NOT child
  '#access' => FALSE,
  // this IS NOT child
  '#render_function' => 'my_render_function',
);
array('node', 'user');
//element_children($a);
var_dump(element_children($a));
exit;
foreach (element_children($a) as $child_key) {
  echo "<br>$child_key = <br>";
  var_dump($a[$child_key]);
}