
<!-- php string 1. Write a PHP script to : a) transform a string all uppercase letters. b) transform a string all lowercase letters. c) make a string's first character uppercase. d) make a string's first character of all the words uppercase. -->
<?php 
// $str = "hello world";
// echo strtoupper($str);
// echo "<br>";
// echo strtolower($str);
// echo "<br>";
// echo ucfirst($str);
// echo "<br>";
// echo ucwords($str);
?>
<!-- Write a PHP script to split the following string. Sample string : '082307' Expected Output : 08:23:07 -->
<?php 
// $str = "082307";
// echo substr(chunk_split($str, 2, ':'), 0, -1)
?>
<!-- Write a PHP script to check whether a string contains a specific string? Sample string : 'The quick brown fox jumps over the lazy dog.' Check whether the said string contains the string 'jumps'. -->
<?php 
// $str = 'The quick brown fox jumps over the lazy dog.';
// if (strrpos($str,'jumps')) {
//     echo "yes";
// }
// else{
//     echo "no";
// }

?>

<!-- Write a PHP script to extract the file name from the following string. Sample String : 'www.example.com/public_html/index.php' Expected Output : 'index.php' -->
<?php 
// $str = 'www.example.com/public_html/index.php';
// $arr= explode("/", $str);
// echo $arr[count($arr)-1];
?>
<!-- Write a PHP script to extract the user name from the following email ID. Sample String : 'Orange@example.com' Expected Output : 'Orange' -->
<?php 
// $str = 'Orange@example.com';
// $arr= explode("@", $str,2);
// echo $arr[0];
?>
<!-- Write a PHP script to get the last three characters of a string. Sample String : 'Orange@example.com' Expected Output : 'com' -->
<?php 
// $str = 'Orange@example.com';
// echo substr($str,-3)
?>
<!-- Write a PHP script to generate simple random passwords [do not use rand() function] from a given string. Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz' Note : Password length may be 6, 7, 8 etc. Expected OutPut: 254ABCc -->
<?php 
// $str ='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
// $shuffle = str_shuffle($str);
// echo substr($shuffle,-6);

?>
<!-- Write a PHP script to replace the first 'the' of the following string with 'That'. Sample date : 'the quick brown fox jumps over the lazy dog.' Expected Result : That quick brown fox jumps over the lazy dog. -->
<?php 
//  $str = 'the quick brown fox jumps over the lazy dog.';
//  echo str_replace( "the", 'That',$str);

?>
<!-- Write a PHP script to find the first character that is different between two strings. String1 : 'football' String2 : 'footboll' Expected Result : First difference between two strings at position 5: "a" vs "o" -->
<?php 
// $str1 = 'football';
// $str2 = 'footboll';
// $str_pos = strspn($str1 , $str2);
// echo"First difference between two strings at position $str_pos: '$str1[$str_pos]' vs '$str2[$str_pos]'"

?>
<!-- Write a PHP script to put a string in an array. Sample strings : "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky."; Expected Result (using var_dump()) : array(4) { [0]=> string(30) "Twinkle, twinkle, little star," [1]=> string(26) "How I wonder what you are." [2]=> string(27) "Up above the world so high," [3]=> string(26) "Like a diamond in the sky." } -->
<?php 
// $str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
// $arr= explode("\n", $str);
// echo var_dump($arr)
?>
<!-- Write a PHP script to print the next character of a specific character. Sample character : 'a' Expected Output : 'b' Sample character : 'z' Expected Output : 'a' -->
<?php 
// $cha = 'z';
// $next_cha = ++$cha; 
// if (strlen($next_cha)>1) {
//     $next_cha = $next_cha[0]; 
// }
// echo $next_cha
?>
<!-- Write a PHP script to remove a part of a string from the beginning. Sample string : 'orange@example.com' Expected Output : 'example.com' -->
<?php 
// $str = 'orange@example.com';
// $arr= explode("@", $str,2);
// echo $arr[1]

?>
<!-- Write a PHP script to insert a string at the specified position in a given string. Original String : 'The brown fox' Insert 'quick' between 'The' and 'brown'. Expected Output : 'The quick brown fox' -->
<?php 
// echo substr_replace('The brown fox', 'quick'.' ', 4, 0);
?>
<!-- Write a PHP script to get the first word of a sentence. Original String : 'The quick brown fox' Expected Output : 'The' -->
<?php 
// $str = 'The quick brown fox';
// $arr= explode(" ", $str,2);
// echo $arr[0]
?>
<!-- Write a PHP script to remove all leading zeroes from a string. Original String : '000547023.24' Expected Output : '547023.24' -->
<?php 

// echo ltrim('000547023.24', '0');
?>
<!-- Write a PHP script to remove part of a string. Original String : 'The quick brown fox jumps over the lazy dog' Remove 'fox' from the above string. Expected Output : 'The quick brown jumps over the lazy dog' -->
<?php 
// echo str_replace("fox", "",'The quick brown fox jumps over the lazy dog');

?>
<!-- Write a PHP script to remove trailing slash from a string. Original String : 'The quick brown fox jumps over the lazy dog///' Expected Output : 'The quick brown fox jumps over the lazy dog' -->
<?php 
// echo rtrim('The quick brown fox jumps over the lazy dog///', '/');

?>
<!-- Write a PHP script to get the characters after the last '/' in an url. Sample URL : 'http://www.example.com/5478631' Expected Output : '5478631' -->
<?php 
// $arr= explode("/", 'http://www.example.com/5478631');
// echo $arr[count($arr)-1];
?>
<!-- Write a PHP script to replace Special characters from the following string. Sample String : '"\1+2/32:2-3/43' Expected Output : '1 2 3 2 2 3 4 3' -->
<?php 
// $str = '"\1+2/32:2-3/43';
// $pattern = "/[^A-Za-z0-9]/";
// $newStr= preg_replace($pattern, "", $str);
// echo substr(chunk_split($newStr, 1, ' '), 0, -1)
?>
<!-- Write a PHP script to select first 5 words from the following string. Sample String : 'The quick brown fox jumps over the lazy dog' Expected Output : 'The quick brown fox jumps' -->
<?php 
// $str = 'The quick brown fox jumps over the lazy dog';
// $wordArr= explode(' ', $str);
// $fiveWordArr = array_slice($wordArr, 0, 5);
// echo implode(' ', $fiveWordArr);

?>
<!-- Write a PHP script to remove comma(s) from the following numeric string. Sample String : '2,543.12' Expected Output : 2543.12 -->
<?php 
// echo str_replace(",","",'2,543.12');


?>
<!-- Write a PHP script to print letters from 'a' to 'z'. -->

<?php 
// $letter = 'a';
// while($letter != 'z'){
//     echo $letter;
//     $letter++;
// }
// echo $letter;

?>