<?php
	header("Content-Type: text/xml; charset=utf-8");
	include("rssclass.php");
	$rss = new RSS();
	echo $rss->GetFeed();
?>
