<?php
/**
 * Author: Ted Bowman
 * Date: 9/26/14
 * Time: 12:30 PM
 */

/**
 * @todo Complete module.form_maker_create_form
 * New "feeder" module like "content" or form_maker
 * 1. Shows form that asks for "Feed URL"
 * 2. On submit check URL was input
 * 3. Show error message if no URL
 * 4. If URL call feeder_get_feed_output and output HTML.
 */
require 'feeder.inc';
// Process form here.
var_dump($_POST);
  if (empty($_POST['submit']) || empty($_POST['feedurl'])) {
  ?>
  <form action="index.php?module=feeder" method="post">
    Feed URL: <input type="text" name="feedurl" value="" /><br />
    <input type="submit" name="submit" value="Submit" />
  </form>
  <?php
  }
  else {
     $url =$_POST['feedurl'];
     if (feeder_validate_url($url)) {
       echo feeder_get_feed_output($url);
     }
     else {
       echo ":(";
     }

  }

?>

<?php
//