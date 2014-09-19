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

}
$a = array(
  // this is a child
  'node' => array('nid' => 234, 'uid' => 231, 'title' => 'My Blog post'),
  // this is a child
  'user' => array('uid' => 1, 'name' => 'Clark Kent', 'email' => 'me@me.com'),
  // this IS NOT child
  '#access' => FALSE,
  // this IS NOT child
  '#render_function' => 'my_render_function',
);
var_dump(element_children($a));
foreach (element_children($a) as $child_key) {
  echo "<br>$child_key = <br>";
  var_dump($a[$child_key]);
}