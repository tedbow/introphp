<?php
/**
 * Author: Ted Bowman
 * Date: 9/19/14
 * Time: 11:41 AM
 */
/**
 * **** Simplified function from Drupal core.
 * Identifies the children of an element array, optionally sorted by weight.
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

  // Filter out properties from the element, leaving only children.
  $children = array();
  foreach ($elements as $key => $value) {
    if ($key === '' || $key[0] !== '#') {
      $children[] = $key;
    }
  }

  return $children;
}
$a = array(
  'node' => array('nid' => 234, 'uid' => 231, 'title' => 'My Blog post'),
  'user' => array('uid' => 1, 'name' => 'Clark Kent', 'email' => 'me@me.com'),
  '#access' => FALSE,
  '#render_function' => 'my_render_function',
);
var_dump(element_children($a));
foreach (element_children($a) as $child_key) {
  echo "<br>$child_key = <br>";
  var_dump($a[$child_key]);
}