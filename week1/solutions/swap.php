<!DOCTYPE html>
<!--
Change this into a php file.
At the top of the file make an associative array with these keys:
my_name
num_dogs(i own now)
more_dog_num(how many I want to get)
dog_names(another array,Dogs name in order that I have owned them)



-->
<?php
$info = array(
  'my_name' => 'Ted Bowman',
  'num_dogs' => 1,
  'more_dog_num' => 2,
  'dog_names' => array('Panda', 'Molly', 'Libby', 'Gracie'),
);
$name_parts = explode(' ', $info['my_name']);
$first_name = $name_parts[0];
$last_name = $name_parts[1];
$first_letter = substr($first_name, 0,1);
$last_letter = substr($first_name, -1,1);
$last_name_letters = strlen($last_name);
$current_dog = $info['dog_names'][count($info['dog_names']) - 1];
$total_dogs = $info['more_dog_num'] + $info['num_dogs'];
$first_dog = $info['dog_names'][0];
$dogs_except_last = array_splice($info['dog_names'], 0, count($info['dog_names']) - 1);
var_dump($dogs_except_last);
$dogs_text = implode(', ', $dogs_except_last);
$dogs_text .= ', and ' . $current_dog;
var_dump($info['dog_names']);
?>
<html>
<head>
  <title>About Ted Bowman</title>
</head>
<body>
<h1>Ted Bowman</h1>
<p>Hi, my name is <?php echo $info['my_name']; ?>.  My first name is
<?php echo $first_name; ?> and my last Name is
 <?php echo $last_name; ?>.</p>
<p>My first name begins with the letter
<?php echo $first_letter; ?>
  and ends with the letter
 <?php echo $last_letter; ?></p>
<p>I have
  <?php echo $last_name_letters; ?> letters in my last name.</p>
<p>I have <?php echo $info['num_dogs']; ?> dog. Her name is
  <?php echo $current_dog; ?>. I am thinking about getting another
  <?php echo $info['more_dog_num']; ?>
  dog which would mean I would have <?php echo $total_dogs; ?> dogs.</p>
<!-- you will need http://php.net/manual/en/function.array-splice.php -->
<p>I have had
  <?php echo count($info['dog_names']); ?>dogs in my life. There names have been <?php echo $dogs_text; ?></p>
<p>But I will always remember <?php echo $first_dog; ?>  my first dog.</p>
</body>
</html>
