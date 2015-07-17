<?php
include('httpful.phar');

$urls = array(
	"http://ducks.nhl.com/rss/news.xml",
	"http://flames.nhl.com/rss/news.xml",
	"http://blackhawks.nhl.com/rss/news.xml",
	"http://avalanche.nhl.com/rss/news.xml",
	"http://stars.nhl.com/rss/news.xml",
	"http://oilers.nhl.com/rss/news.xml",
	"http://kings.nhl.com/rss/news.xml",
	"http://wild.nhl.com/rss/news.xml",
	"http://predators.nhl.com/rss/news.xml",
	"http://coyotes.nhl.com/rss/news.xml",
	"http://sharks.nhl.com/rss/news.xml",
	"http://blues.nhl.com/rss/news.xml",
	"http://canucks.nhl.com/rss/news.xml",
	"http://jets.nhl.com/rss/news.xml"
	);

$responseArray = array("nhl" => array());

foreach($urls as $url)
{
	$response = \Httpful\Request::get($url)
	->expectsXml()
	->send();
	
	foreach($response->body->channel->item as $item)
	{
		$stuff = array(
			"title" => (string)$item->title,
			"link" => (string)$item->link,
			"description" => (string)$item->description,
			"pubDate" => (string)$item->pubDate
			);

		array_push($responseArray["nhl"], $stuff);
	}
	
}

$json = json_encode($responseArray);

$firebase = "https://dazzling-fire-5200.firebaseio.com/.json?auth=KPgAAfxGv33vaNzCpLIPdx7AdINXpXR7PDI38Qkh";

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

