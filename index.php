<?php


$str_t='i cant wait to get back to my life again';
echo "<br>";

//Q-1

echo ($str_t ) ;
echo "<br>";
// a
echo strtoupper ($str_t ) ;
echo "<br>";
// b
echo strtolower ($str_t) ;
echo "<br>";
// c
echo ucfirst ( $str_t ) ;
echo "<br>";
//d
echo ucwords   ( $str_t ) ;
echo "<br>";



//Q-2
$Qtwo = "082307";
$outputOne = str_split($Qtwo, "2");
$outputTwo = implode(":", $outputOne);
echo $outputTwo."<br>";



//Question 3
$Qthree = 'The quick brown fox jumps over the lazy dog';
if(strchr($Qthree,"fox"))
{
    echo 'The word exist'."<br>";
}
else {
    echo 'the word doe\'s not exist'."<br>";
}



//Qu-4
$Qfour = 'www.example.com/public_html/index.php';
$outputThree= substr(strrchr($Qfour , "/"), 1);
echo $outputThree."<br>";




//Q-5
echo strtok("Orange@example.com", "@")."<br>";

echo substr("Orange@example.com", 0,6);
echo"<br>";


//Q-6
$Qsix ='Orange@example.com';
echo  substr($Qsix,-3)."<br>";
echo substr($Qsix ,15)."<br>";



//Q-7
function passwordEncrypt($ex)
{
    $QFive = "Taimaaaaaa";
    return substr(str_shuffle($QFive), 0, $ex);
}
echo passwordEncrypt(9)."<br>";



//Q-8

$QEight =  'the quick brown fox jumps over the lazy dog';

echo str_replace('the', 'That',$QEight)."<br>";



//Q-9
$questionNineStr1 = 'football';
$questionEightStr2 = 'footboll';
$str_pos = strspn($questionNineStr1 ^ $questionEightStr2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
    $str_pos, $questionNineStr1[$str_pos], $questionEightStr2[$str_pos])."<br>";




//Q-10
$QTen= "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$QTen = explode("\n", $QTen);
var_dump($QTen)."<br>";



//Q-11
// the original string
$QEleven = 'a';
$next_questionElevenCha = ++$QEleven;
// echo $next_questionElevenCha;
if (strlen($next_questionElevenCha) > 1)
{
    $next_questionElevenCha = $next_questionElevenCha[0];
}
echo $next_questionElevenCha."<br>";




//Q-12
$Qtwelve = 'orange@example.com';
echo substr($Qtwelve , 6)."<br>";




//Q-13
$questionThirteenStr = 'The brown fox';
echo substr_replace($questionThirteenStr, 'quick ', 4, 0)."<br>";



//Q-14

echo substr("The quick brown fox",0,3)."<br>";




//Q-15
echo ltrim("000547023.24", "0")."<br>";
echo substr("000547023.24",3)."<br>";




//Q-16
// the original string
$sub_string = 'fox';
$str = 'The quick brown fox jumps over the lazy dog';
if (substr($str, 0, strlen($sub_string)) == $sub_string)
{
    $str = substr($str, strlen($sub_string));
}
echo $str."<br>";

$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."<br>";






//Q-17
// the original string
$Qsevnteen ='The quick brown fox jumps over the lazy dog///';
echo  trim($Qsevnteen , '///')."<br>";

//Q-18

$questionFourStr = 'http://www.example.com/5478631';
echo substr($questionFourStr, strrpos($questionFourStr, '/' )+1)."<br>";



//Question 19

$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str)."<br>";





//Question number 20
$str1 = "The quick brown fox jumps over the lazy dog";
echo implode(" ", array_slice(explode(" ", $str1), 0, 5))."<br>";



//Question no.21
$string21 = '2,543.12' ;
$number = array(",");
$onlyconsonants = str_replace($number,"" ,"2,543.12");
echo ($onlyconsonants)."<br>";




//Question number 22
echo str_replace(",", "", "2,543.12")."<br>";



