<?php
/**
 * Author: Ted Bowman
 * Date: 9/17/14
 * Time: 12:09 PM (EDT)
 */

$paragraph = "It is known that there are an infinite number of worlds, simply because there is an infinite amount of space for them to be in. However, not every one of them is inhabited. Therefore, there must be a finite number of inhabited worlds. Any finite number divided by infinity is as near to nothing as makes no odds, so the average population of all the planets in the Universe can be said to be zero. From this it follows that the population of the whole Universe is also zero, and that any people you may meet from time to time are merely the products of a deranged imagination.";
//$words = 'this,that,other';
$sentences = explode('.', $paragraph);
//exit;
$sentences = array_filter($sentences);
$words = explode(' ', $paragraph);
$chars = strlen($paragraph);
$paragraph_no_spaces = str_replace(' ', '', $paragraph);
$chars_no_spaces = strlen($paragraph_no_spaces);
echo "<br>The paragraph contains " . count($sentences) . " sentences.";
echo "<br>The paragraph contains " . count($words) . " words.";
echo "<br>The paragraph contains $chars characters.";
echo "<br>The paragraph contains " . $chars_no_spaces . " characters without spaces.";
// Figure out longest sentence.
var_dump($sentences);

$sentences_char_counts = array_map('strlen', $sentences);

$longest_sentence_chars = max($sentences_char_counts);
var_dump($sentences_char_counts);
echo "<br>The longest sentence contains $longest_sentence_chars characters";

$longest_sentence_num = array_search($longest_sentence_chars, $sentences_char_counts) + 1;
echo "<br>Sentence number $longest_sentence_num is the longest sentence";
