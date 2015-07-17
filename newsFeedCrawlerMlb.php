<?php

include('httpful.phar');

$urls = array(
	"http://mlb.mlb.com/partnerxml/gen/news/rss/bal.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/bos.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/nyy.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/tb.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/tor.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/cws.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/cle.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/det.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/kc.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/min.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/hou.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/ana.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/oak.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/sea.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/tex.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/atl.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/mia.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/nym.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/phi.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/was.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/chc.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/cin.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/mil.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/pit.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/stl.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/ari.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/col.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/la.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/sd.xml",
	"http://mlb.mlb.com/partnerxml/gen/news/rss/sf.xml"
	);

$responseArray = array();

foreach($urls as $url)
{
	$response = \Httpful\Request::get($url)
	->expectsXml()
	->send();

	preg_match('/rss\/(.*?)\./s', $url, $arr);
	$team = $arr[1];
	$responseArray[$team] = array();

	foreach($response->body->channel->item as $item)
	{
		$stuff = array(
			"title" => (string)$item->title,
			"link" => (string)$item->link,
			"description" => (string)$item->description,
			"pubDate" => (string)$item->pubDate
			);

		array_push($responseArray[$team], $stuff);
	}
}

$json = json_encode($responseArray);


$firebase = "https://dazzling-fire-5200.firebaseio.com/mlb.json?auth=KPgAAfxGv33vaNzCpLIPdx7AdINXpXR7PDI38Qkh";

$request = \Httpful\Request::put($firebase)->sendsJson()->body($json)->send();

$stringValueOfPos = (string)strpos($request->raw_headers, "HTTP/1.1 200 OK");

// if strpos returned null
if(strlen($stringValueOfPos) == 0)
{
	echo "Not ok.";
}
else
{
	echo "ok.";
}
?>