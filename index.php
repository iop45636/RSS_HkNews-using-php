<?php
$xml = simplexml_load_file("http://www.news.gov.hk/tc/common/html/ticker.rss.xml");
echo '<ul>';
foreach($xml->channel->item as $itm){
    $title = $itm->title;
    $link = $itm->link;
    $description = $itm->description;
    $date = $item->pubDate;
    echo '<li><a href="'.$link.'">'.$title.'</a> <hr> '.$description.' <br> '.$date.'</li>';
}
echo '<ul>';
?>
