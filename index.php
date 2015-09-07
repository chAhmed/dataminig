<?php
include('simple_html_dom.php');
$html = file_get_html('http://www.shophive.com/apple/mac?p=1');

foreach($html->find('span[class=price]') as $element){
    echo $element->innertext . '<br>'; //outputs bulbasaur, ivysaur, etc...
}
?>