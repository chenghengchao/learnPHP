<?php
/**
 * Created by PhpStorm.
 * User: Duo Nuo
 * Date: 2016/7/22
 * Time: 15:41
 */
include "simple_html_dom.php" ;
$url = "http://f10.eastmoney.com/f10_v2/BackOffice.aspx?command=RptF10MainTarget&code=60000601&num=90&code1=60000601";
$html = file_get_html($url);

$index_per = $html->find('th.tips-colname-Left span');
$length = count($index_per);
echo gettype($index_per);
for($i = 0;$i < $length;$i++){
    $index_per[$i] = ;
}
//var_dump($index_per);
//echo count($index_per)
//print $index_per->plaintext;


//print_r($item);
?>