<?php
/**
 * Created by PhpStorm.
 * User: Duo Nuo
 * Date: 2016/7/22
 * Time: 14:01
 */

//$html = file_get_contents("http://f10.eastmoney.com/f10_v2/BackOffice.aspx?command=RptF10MainTarget&code=60000601&num=90&code1=60000601");
//$th = $html->find('span');
//var_dump($th);
include "simple_html_dom.php" ;

$html = file_get_html('http://slashdot.org/');
//print_r($html);
// Find all article blocks
//$html->find()
foreach($html->find('span.story-title') as $article) {

    $a = $article->find('a',0);
    $item['title'] = $a->plaintext;
    $item['href'] = $a->href;
    //$item['href'] = $a->href;
//    $item['details'] = $article->find('div.details', 0)->plaintext;
    $articles[] = $item;
}
print_r($articles);
?>
