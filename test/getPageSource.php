<?php
/**
 * Created by PhpStorm.
 * User: Duo Nuo
 * Date: 2016/7/22
 * Time: 11:44
 */
$html = file_get_contents("http://f10.eastmoney.com/f10_v2/BackOffice.aspx?command=RptF10MainTarget&code=60000601&num=90&code1=60000601");
//print ("original： ".$html);
//print "\n";
$pure_html = strip_tags($html);
//print ("stripTags： ".$pure_html);

//$email = 'name@example.com';
//$domain = strstr($email,'@');
//echo $domain."\n";
//$user = strstr($email,'@',true);
//echo $user;

//$text = "The quick brown fox jumped over the lazy dog.";
//$newtext = wordwrap($text, 20, "<br />\n");
//
//echo $newtext;

//$num = 5;
//$location = 'tree';
//$format = 'Three are %d monkeys in the %s';
//$format1 = 'the %2$s contains %1$d monkeys';
//
//printf($format1,$num,$location);
$date = strstr($pure_html,'基本每股收益',true);
$dateStr = strstr($date,'16-03');
$newdate = wordwrap($dateStr,8,"\n",true);
//echo $newdate;
//echo "\n";

for($i=0;$i<strlen($dateStr);$i=$i+8){
    /*echo substr($dateStr,$i,8);
    echo "\n";*/
    $dateArray[$i] = [substr($dateStr,$i,8)];
}

$dateArray = array_values($dateArray);
var_dump($dateArray);

?>